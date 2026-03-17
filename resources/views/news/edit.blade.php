<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit News</h1>
    <form action="{{ route('news.update', $news->id) }}" method="POST">
        @csrf 
        @method('PUT')
        <label for="">Berita</label>
        <input type="text" name="isi" value="{{ $news->isi }}"> <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>