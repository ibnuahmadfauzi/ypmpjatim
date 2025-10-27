<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Selamat datang, {{ Auth::user()->name }}</h2>
    <p>Email: {{ Auth::user()->email }}</p>
    <a href="{{ route('logout') }}">Logout</a>
</body>
</html>
