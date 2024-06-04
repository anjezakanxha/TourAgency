<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="{{asset("regi/regi.css")}}">
</head>
<body>
<video autoplay loop muted plays-inline class="BackVideo">
            <source src="{{asset("regi/snowflakes_-_31605 (540p).mp4")}}" type="video/mp4">
        </video>
    <form id="orderForm" action="{{ route('register.submit') }}" method="post">
        @csrf
        <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
</div>
        <br>
        <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        </div>
        <br>
        <div>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        </div>
        <br>
        <div>
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" name="password_confirmation" id="password_confirmation" required>
        </div>
        <br>
        <div>
        <button type="submit">Register</button>
        </div>
    </form>
</body>
</html>
