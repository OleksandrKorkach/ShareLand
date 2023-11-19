<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: grey">

    @auth
        <p>Congratulations you are logged in</p>
        <form action="/logout" method="POST">
            @csrf
            <button>Log out</button>
        </form>

        <div style="border: 3px solid black;">
            <h2>Create new post</h2>
            <form action="/post/create" method="POST">
                @csrf
                <input name="title" type="text" placeholder="post title">
                <textarea name="body" placeholder="body content..."></textarea>
                <button>Save post</button>
            </form>
        </div >

        <div style="border: 3px solid black;">
            <h2>All posts</h2>
            @foreach($posts as $post)
                <div>
                    <h3>{{$post['title']}} by {{$post->user->name}}</h3>
                    <p>{{$post['body']}}</p>
                    <p><a href="/post/edit/{{$post->id}}">Edit</a></p>
                    <form action="/post/delete/{{$post->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                </div>
            @endforeach
        </div>

    @else
        <div style="border: 3px solid black;">
            <h2>Register</h2>
            <form action="/register" method="POST">
                @csrf
                <input name="name" type="text" placeholder="name">
                <input name="email" type="text" placeholder="email">
                <input name="password" type="password" placeholder="password">
                <button type="submit">Register</button>
            </form>
        </div>
        <div style="border: 3px solid black;">
            <h2>Login</h2>
            <form action="/login" method="POST">
                @csrf
                <input name="login_name" type="text" placeholder="name">
                <input name="login_password" type="password" placeholder="password">
                <button type="submit">Log in</button>
            </form>
        </div>
    @endauth



</body>
</html>
