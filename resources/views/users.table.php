<!DOCTYPE html>
<html>
<head>
    <title>Users List</title>
</head>
<body>
    <h1>Users</h1>
    <ul>
        @foreach($users as $user)
            <li>{{ $user->username }} ({{ $user->full_name }})</li>
        @endforeach
    </ul>
</body>
</html>