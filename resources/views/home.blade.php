<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor Construction Group</title>
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
</head>
<body>

    <img id= "logo-image" src="{{asset("images/logo.png")}}">

    <div id="container">
        <div id="left-side">
            <div><img src="{{asset('images/Title.png')}}" alt="Title"></div>
            <h1>Foundation For The Brave</h1>
            <h2>Building Tomorrow's Military Infrastructure Today</h2>
        </div>
        <div id="right-side">
            <h1>Join us Today!</h1>
            <div>Login with Google</div>
            <div>Login with Facebook</div>
            <div>OR</div>

            <form action="/login" method="POST">
                @csrf
                <label>Email
                <input type="email" name="email" placeholder="youremail@mail.com">
                </label>
                <label>Password
                <input type="password" name="password" placeholder="********">
                </label>
                <button>Login</button>
            </form>
        </div>
    </div>
</body>
</html>