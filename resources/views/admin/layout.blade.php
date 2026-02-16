<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>پنل مدیریت</title>
    <style>
        body {
            margin: 0;
            font-family: sans-serif;
            display: flex;
            background: #0b132b;
            color: #fff;
        }

        .sidebar {
            width: 90px;
            background: linear-gradient(180deg, #1e3c72, #2a5298);
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 20px;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            margin: 20px 0;
            font-size: 14px;
        }

        .content {
            flex: 1;
            padding: 30px;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <a href="/admin">🏠</a>
    <a href="/admin/products">📦</a>
    <a href="/logout">🚪</a>
</div>

<div class="content">
    @yield('content')
</div>

</body>
</html>
