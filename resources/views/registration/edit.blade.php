<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Permission</h1>
    <form action="{{ route('registration.update', $registration->id) }}" method="POST">
        @csrf 
        @method('PUT')
        <label for="">Name</label>
        <input type="text" name="name" value="{{ $registration->name }}"> <br>
        <label for="">Reason</label>
        <input type="text" name="reason" value="{{ $registration->reason }}"> <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>