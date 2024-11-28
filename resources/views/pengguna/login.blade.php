<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        @if(session('error'))
            {{ session('error') }}
        @endif
        <form action="/login" method="post">
            @csrf
            <input type="text" name="namapengguna" placeholder="username"><br/>
            <input type="password" name="password" placeholder="password"><br/>
            <button type="submit">Login</button>
        </form
        >
    </body>
</html>
