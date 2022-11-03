@csrf
<dl>
    <dt>アーティスト名</dt>
    <dd><input type="text" name="artist_name" value="{{ old('artist_name') }}"></dd>
    <dt>曲名</dt>
    <dd><input type="text" name="track_name" value="{{ old('track_name') }}"></dd>
    <dt>アルバム名</dt>
    <dd><input type="text" name="album_name" value="{{old('album_name')}}"></dd>
    <dt>レーベル名</dt>
    <dd><input type="text" name="label" value="{{ old('label') }}"></dd>
    <dt>リリース年</dt>
    <dd><input type="text" name="year" value="{{ old('year') }}"></dd>
    <dt>コンテンツ</dt>
    <dd><textarea name="content" cols="30" rows="10">{{ old('content') }}</textarea></dd>
</dl>
