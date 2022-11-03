<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="site-title">diggin</div>
    </header>
    <main class="container">
        <form action="{{ route('posts.store') }}" method="post">
            @csrf
            <dl>
                <dt>アーティスト名</dt>
                <dd><input type="text" name="artist_name"></dd>
                <dt>曲名</dt>
                <dd><input type="text" name="song_name"></dd>
                <dt>アルバム名</dt>
                <dd><input type="text" name="album_name"></dd>
                <dt>レーベル名</dt>
                <dd><input type="text" name="label"></dd>
                <dt>リリース年</dt>
                <dd><input type="text" name="year"></dd>
                <dt>コンテンツ</dt>
                <dd><textarea name="body" cols="30" rows="10"></textarea></dd>
            </dl>
            <button type="submit">投稿する</button>
            <a href="{{ route('posts.index') }}">キャンセル</a>
        </form>
    </main>
    <footer>
        &copy; Diggin
    </footer>
</body>
</html>
