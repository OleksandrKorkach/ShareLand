<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    @vite(['resources/css/login-form.css'])
</head>
<body>
        @auth
            <h1>You are already logged in!</h1>
            <a href="/">Come back</a>
        @else
            <div class="login-form">
                <form action="/login" method="post">
                    @csrf
                    <input name="name" placeholder="name" type="text" class="form-element">
                    <input name="password" placeholder="password" type="password" class="form-element">
                    <button class="form-element-button form-element">Send</button>
                </form>
            </div>
        @endauth
</body>
</html>
