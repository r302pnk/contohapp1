<html>
    <head>
        <title>Login Aplikasi</title>
    </head>
    <body>
        @if(session('error'))
            {{ session('error') }}
        @endif

        <form method="post" action="{{ url("login") }}">
            @csrf
            <label>Username</label>
            <input type="text" name="username" placeholder="username"><br/>
            <label>Password</label>
            <input type="password" name="password" placeholder="password"><br/>
            <button type="submit">Login</button>
        </form>
    </body>
</html>
