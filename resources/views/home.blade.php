<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>
    </head>
    <body>
        <h1>This is home</h1>
        <form method="POST" action="logout">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" value="Logout"/>
        </form>
    </body>
</html>
