<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>News Manager</h1>3
        <a href="{{ route('news.create') }}">Create Registration</a>    
        @if ($news->count())
        <table>
            <thead>
                <tr>
                    <th>Berita</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($news as $news)
                <tr>
                    <td>{{ $news->isi }}</td>
                    <td>
                        <a href="{{ route('news.edit', $news->id) }}">Edit</a>
                        <form action="{{ route('news.destroy', $news->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p>No More News</p>
        @endif
    </div>
</body>
</html>