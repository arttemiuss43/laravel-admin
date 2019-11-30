<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>
    <div id="admin">
        <div>
            <ul>
                <li><router-link to="/">Home</router-link></li>
                <li><router-link to="/dashboard">Dashboard</router-link></li>
            </ul>
        </div>
        <router-view></router-view>
        <div>Some footer</div>
    </div>

    <script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>
