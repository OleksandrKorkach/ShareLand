<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    @vite(['resources/css/registration-form.css'])
</head>
<body>
    @auth
        <h1>Omg you are already logged in</h1>
        <a href="/">Come back</a>
    @else
        <div class="registration-form">
            <form action="/register" method="post">
                @csrf
                <input name="name" placeholder="name" type="text" class="form-element">
                <input name="email" placeholder="email" type="text" class="form-element">
                <input name="password" placeholder="password" type="password" class="form-element">
                <button class="form-element-button form-element">Register</button>
            </form>
        </div>
    @endauth
</body>
</html>
