<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="{{asset("logi/logi.css")}}">
</head>
<body>
    @if(session('error'))
        <div class="error">{{ session('error') }}</div>
    @endif
    <video autoplay loop muted plays-inline class="BackVideo">
            <source src="{{asset("logi/snowflakes_-_31605 (540p).mp4")}}" type="video/mp4">
        </video>
        <div id="formi">
    <form id="orderForm" action="{{ route('login.submit') }}" method="post">
        @csrf
        <div>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        </div>
        <br>
        <div>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        </div>
        <br>
        <div>
        <button type="submit">Login</button>
        </div>
    </form>
</div>
</body>
</html>
