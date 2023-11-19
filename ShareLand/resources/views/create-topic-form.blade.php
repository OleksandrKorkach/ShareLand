<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create topic</title>
</head>
<body>
    @auth
        <div class="create-topic-form">
            <form action="/create/topic" method="post">
                @csrf
                <input name="title" placeholder="Title" type="text" class="form-element">
                <input name="description" placeholder="Description" type="text" class="form-element">
                <input name="content" placeholder="You can place your text here!" class="form-element topic-content">
                <button class="form-element-button form-element">Create topic</button>
            </form>
        </div>
    @else
        <h1>You need to log in to create your topics.</h1>
        <a href="/">Come back</a>
    @endauth
</body>
</html>
