<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a post</title>
</head>

<body>
    <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title: </label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="content">Text:</label>
            <textarea rows="10" cols="50" name="content"></textarea>
        </div>
        <input type="submit" value="Create Post">
    </form>
</body>

</html>
