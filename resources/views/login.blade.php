<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>
    </head>
    <body>
        <form method="POST" action="login">
            <h1>Login</h1>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            Email<input type="text" name="email"/><br/>
            Password<input type="password" name="password"/><br/>
            <input type="checkbox" name="remember" id="chkRmb"/><label for="chkRmb">Remember me</label><br/>
            <input type="submit" value="Login"/>
            @if(session('login_status'))
                <div style="color: red;">
                    {{session('login_status')}}
                </div>
            @endif
        </form>
        <form method="POST" action="register">
            <h1>Register</h1>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            Name<input type="text" name="name"/><br/>
            Password<input type="password" name="password"/><br/>
            Email<input type="text" name="email"/><br/>
            <input type="submit" value="Register"/>
            @if(session('register_status'))
                <div style="color: green;">
                    {{session('register_status')}}
                </div>
            @endif
        </form>
    </body>
</html>
