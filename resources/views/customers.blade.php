<!DOCTYPE html>
<html>
<head>
    <title>Customers List</title>
</head>
<body>
    <h1>Customers</h1>
    <ul>
        @foreach($customers as $customer)
            <li>{{ $customer->full_name }} - {{ $customer->email }} - {{ $customer->phone }}</li>
        @endforeach
    </ul>
</body>
</html>