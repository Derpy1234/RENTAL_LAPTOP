<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/img/rmv.css" type="image/x-icon"> 
    <link rel="stylesheet" href="assets/css/style.css">    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peminjaman Laptop</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg w-100" style="background-color: aqua">
    <h1> Selamat Datang Di Peminjaman Laptop </h1>
    
    <div class="navbar-nav">
    <a class="nav-link btn btn-danger text-white" href="{{route('login')}}">Logout</a>  
    <a class="nav-link btn btn-warning text-white" href="{{route('index')}}">Back</a>
    </div>
    </nav>
@yield('content')
</body>
</html>
