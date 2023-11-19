<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Share Land</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <header>
        <div class="brand-name">
            <a href="">ShareLand</a>
        </div>
        @auth
            <div class="logout">
                <form action="/logout" method="POST">
                    @csrf
                    <button class="logout-button">Log out</button>
                </form>
            </div>
            <div class="user-profile">
                <a href="/profile" class="user-profile-button">My profile</a>
            </div>
        @else
            <div class="registration">
                <a href="/register" class="registration-button">Register</a>
            </div>
            <div class="login">
                <a href="/login" class="login-button">Log in</a>
            </div>
        @endauth
    </header>

    <div class="main-content">
        <div class="empty-top"></div>

        @auth()
        <div class="content-tools">
            <div class="create-topic">
                <a href="/create/topic" class="create-topic-button">Create new topic</a>
            </div>
        </div>
        @endauth
        @foreach($topics as $topic)
            <div class="topic">
                <h3>{{$topic->title}}</h3>
                <h4>Created by {{$topic->user->name}}</h4>

                <p>{{$topic->description}}</p>
                <p>{{$topic->content}}</p>
            </div>
        @endforeach

    </div>

    <footer>

    </footer>
</body>
</html>
