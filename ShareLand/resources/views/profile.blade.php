<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My profile></title>
    @vite(['resources/css/profile.css'])
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
            <div>
                <a href="/">Back to topics!</a>
            </div>
        @else
            <div>Log in first to view your profile</div>
            <a href="/register">Register</a>
            <a href="/login">Log in</a>
        @endauth
    </header>

    <div class="main-content">
        @auth()
            <div class="content-tools">
                <div class="create-topic">
                    <a href="/create/topic" class="create-topic-button">Create new topic</a>
                </div>
            </div>
            @foreach($topics as $topic)
                <div class="topic">
                    <h3>{{$topic->title}}</h3>
                    <h4>Created by {{$topic->user->name}}</h4>
                    <p>{{$topic->description}}</p>
                    <p>{{$topic->content}}</p>
                    <p><a href="/topic/edit/{{$topic->id}}">Edit</a></p>
                    <form action="/topic/delete/{{$topic->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                </div>
            @endforeach
        @endauth


    </div>
</body>
</html>
