<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SignUp</h1>

    @if(Session::has('fail'))
    <span>{{Session::get('fail')}}</span>
    @endif


    <form action="{{route('signupUser')}}" method="post">
        @csrf
    <input type="name" name="name" id="name" placeholder="Enter your name"><br>
    <span>@error('name') {{$message}} @enderror</span>
        <input type="email" name="email" id="email" placeholder="Enter Email"><br>
        <span>@error('email') {{$message}} @enderror</span>
        <input type="password" name="password" id="password" placeholder="Enter password"><br>
    <span>@error('password') {{$message}} @enderror</span>

<button type="submit">Sign Up</button>
    </form>
</body>
</html>