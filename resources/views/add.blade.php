<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('dashboard') }}">Go back</a>
    <br><br>

    <form action="{{ route('employee.create')}}" method="POST">
        @csrf

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="age">Age:</label>
        <input type="text" name="age" id="age" required><br><br>

        <label for="work">Work:</label>
        <input type="text" name="work" id="work" required><br><br>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email" required><br><br>

        <button type="submit">Create</button>

    </form>
</body>
</html>
