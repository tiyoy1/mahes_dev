<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table page</title>
</head>

<body>
    <div class="container">
        <h1>Data Manager</h1>
        <a href="{{ route('registration.create') }}">Create Registration</a>
        @if ($registrations->count())
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Reason</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($registrations as $registration)
                <tr>
                    <td>{{ $registration->name }}</td>
                    <td>{{ $registration->reason }}</td>
                    <td>{{ $registration->status }}</td>
                    <td>
                        <a href="{{ route('registration.edit', $registration->id) }}">Edit</a>
                        <form action="{{ route('registration.destroy', $registration->id) }}" method="POST">
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
        <p>No More tasks</p>
        @endif
    </div>
</body>

</html>