<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Post</h1>
    <form action="/post/edit/{{$post->id}}" method="POST">
        @csrf
        @method('PUT')
        <input name="title" type="text" value="{{$post->title}}">
        <textarea name="body">{{$post->body}}</textarea>
        <button>Save</button>
    </form>
</body>
</html>
