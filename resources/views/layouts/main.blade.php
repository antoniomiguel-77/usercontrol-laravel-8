<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!--BootStrap-->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!--Custom Css-->
    <link rel="stylesheet" href="/css/custom.css">
    <!--FontAwesome-->
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="/css/fontawesome.css">

        <title>@yield('title')</title>

</head>
<body>
    @if (session('msg'))
        <div   class="container alert alert-success alert-dismissible fade show" role="alert">
            <small class="text text-center">{{session('msg')}}</small>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> 
    @endif
    
 
 
   
<main>
        @yield('content')
</main>
  

 <footer>
<p class="text-center text-light">&reg;2022-Todos direitos reservados</p>
<img src="/public/foto/" alt="">
</footer>

    <!--Scripts-->
<script src="/js/bootstrap.bundle.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/jquery.js"></script>
<script src="/js/script.js"></script>
</body>
</html>