<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>トップページ</title>
</head>
<body>
    <header>
        <div class="site-title">diggin</div>
    </header>
    <main class="container">
        <div class="posts-item">
            @foreach ($posts as $post)
            <div class="posts-artist-name">{{ $post->artist_name }}</div>
            <div class="posts-track-name">{{ $post->track_name }}</div>
            <div class="posts-album-name">{{ $post->album_name }}</div>
            <div class="posts-label">{{ $post->label }}</div>
            <div class="posts-year">{{ $post->year }}</div>
            <div class="posts-content">{{ $post->content }}</div>
            @endforeach
        </div>
    </main>
    <footer>
        &copy; Diggin
    </footer>
</body>
</html>
