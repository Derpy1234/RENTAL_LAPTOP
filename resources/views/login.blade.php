<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    


<link rel="stylesheet" href="assets/css/login.css">

<div class="login-box">
    <h2>Login</h2>
    <form>
        <div class="user-box">
            <input type="text" name="name" required="">
            <label>Username</label>
        </div>
        <div class="user-box">
            <input type="password" name="password" required="">
            <label>Password</label>
        </div>
        
        <div class="button-form">

            <a id="submit" href="{{route('index')}}">Submit</a>

            <div id="register">
                Don't have an account ?
                <a href="#"> register</a>
            </div>
        </div>
    </form>            
</div>

</body>
</html>