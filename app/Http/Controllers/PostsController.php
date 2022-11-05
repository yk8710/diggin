<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        $data = ['posts' => $posts];
        return view('posts.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = new Post();
        $data = ['post' => $post];
        return view('posts.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'artist_name' => 'required',
            'track_name' => 'required',
            'album_name' => 'required',
            'label' => 'required',
            'year' => 'required',
            'content' => 'required'
        ]);
        $post = new Post();
        $post->user_id = \Auth::id();
        $post->artist_name = $request->artist_name;
        $post->track_name = $request->track_name;
        $post->album_name = $request->album_name;
        $post->label = $request->label;
        $post->year = $request->year;
        $post->content = $request->content;
        $post->save();

        return redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $data = ['post' => $post];
        return view('posts.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $this->authorize(($post));
        $data = ['post' => $post];
        return view('posts.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->authorize($post);
        $this->validate($request, [
            'artist_name' => 'required',
            'track_name' => 'required',
            'album_name' => 'required',
            'label' => 'required',
            'year' => 'required',
            'content' => 'required'
        ]);
        $post->artist_name = $request->artist_name;
        $post->track_name = $request->track_name;
        $post->album_name = $request->album_name;
        $post->label = $request->label;
        $post->year = $request->year;
        $post->content = $request->content;
        $post->save();
        return redirect(route('posts.show', $post));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $this->authorize($post);
        $post->delete();
        return redirect(route('posts.index'));
    }

    public function bookmark_posts()
    {
        $posts = \Auth::user()->bookmark_posts()->orderBy('created_at', 'desc')->paginate(10);
        $data = [
            'posts' => $posts,
        ];
        return view('posts.bookmarks', $data);
    }
}
