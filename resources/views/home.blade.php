<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>

    @auth
    <p>You Are Now Logged In</p>
    <form action="/logout" method="POST">
        @csrf
        <button>Log Out</button>
    </form>

    <div style="border: 3px solid black;">
        <h2>Create Blog Posts</h2>
        <form action="/create-post" method="POST">
            @csrf
            <input name="title" type="text" placeholder="post title">
            <textarea name="body" placeholder="body content...."></textarea>
            <button>Submit Post</button>
        </form>
    </div>

    <div style="border: 3px solid black;">
        <h2>Blog Posts</h2>
        @foreach ($posts as $post)
        <div style="background_color: grey border: 10px margin: 10px">
            <h3>{{$post['title']}}</h3>
            <h5>Writer: {{ $post->id }}</h5>
            <p>{{$post['body']}}</p>
            <p><a href="/edit-post/{{$post->id}}">Edit</a></p>
            <form action="/delete-post/{{$post->id}}" method="POST">
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
            <button>Register</button>
        </form>
    </div>

    <div style="border: 3px solid black;">
        <h2>Sign In</h2>
        <form action="/login" method="POST">
            @csrf
            <input name="loginname" type="text" placeholder="email">
            <input name="loginpassword" type="password" placeholder="password">
            <button>Sign In</button>
        </form>
    </div>
        {{-- @include('login') --}}
    @endauth


   
</body>
</html>