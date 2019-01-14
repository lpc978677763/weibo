<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title','Weibo App')-🐂🍺🦄</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">Weibo App</a>
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item"><a class="nav-link" href="{{route('help')}}">帮助</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('about')}}">关于</a></li>
          <li class="nav-item" ><a class="nav-link" href="#">登录</a></li>
        </ul>
      </div>
    </nav>
    
     <div class="offset-md-1 col-md-10">
        @include('shared._messages')
        @yield('content')
      </div>
  </body>
</html>