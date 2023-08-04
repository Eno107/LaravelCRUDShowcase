<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    @auth
    <h1>Logged in</h1>
    <form action="/logout" method="POST">
        @csrf
        <button>Log Out</button>
    </form>


    <div style="border: 3px solid black;">
        <h1>Create new Post</h1>
        <form action="/create-post" method="POST">
            @csrf
            <input type="text" placeholder="title" name="title">
            <textarea name="body" placeholder="body content..."></textarea>
            <button>Save Post</button>
        </form>
    </div>


    <div style="border: 3px solid black;">
        <h2>All Posts</h2>
        @foreach($posts as $post)
        <div style="background-color: gray; padding :10px; margin: 10px;">
            <h3>{{$post['title']}} by {{$post->getUser->name}}</h3>
            {{$post['body']}}
            <p><a href="/edit-post/{{$post['id']}}">Edit</a></p>
            <form action="/delete-post/{{$post['id']}}" method="POST">
            @csrf
            @method('DELETE')
            <button>Delete</button>
            </form>
        </div>
        @endforeach
    </div>

    @else
    <div style="border: 3px solid black;">
        <h1>Register</h1>
        <form action="/register" method="POST">
            @csrf
            <input type="text" placeholder="name" name="name">
            <input type="text" placeholder="email" name="email">
            <input type="password" placeholder="password" name="password">
            <button>Register</button>
        </form>
    </div>
    <div style="border: 3px solid black;">
        <h1>Log In</h1>
        <form action="/login" method="POST">
            @csrf
            <input type="text" placeholder="name" name="loginname">
            <input type="password" placeholder="password" name="loginpassword">
            <button>Log In</button>
        </form>
    </div>
    @endauth

</body>

</html>