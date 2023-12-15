<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
</head>
<body>
    <form action="{{route('viewAllData')}}" method="POST">
        @csrf
        <input type="submit" value="View Data">
    </form>
</body>
</html>