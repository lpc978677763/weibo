<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title','Weibo App')-🐂🍺🦄</title>
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container ">
    <a class="navbar-brand" href="{{ route('home') }}">Weibo App</a>
    <ul class="navbar-nav justify-content-end">
      @if (Auth::check())
        <li class="nav-item"><a class="nav-link" href="#">用户列表</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('users.show', Auth::user()) }}">个人中心</a>
            <a class="dropdown-item" href="#">编辑资料</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" id="logout" href="#">
              <form action="{{ route('logout') }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
              </form>
            </a>
          </div>
        </li>
      @else
        <li class="nav-item"><a class="nav-link" href="{{ route('help') }}">帮助</a></li>
        <li class="nav-item" ><a class="nav-link" href="{{ route('login') }}">登录</a></li>
      @endif
    </ul>
  </div>
</nav>  
     <div class="offset-md-1 col-md-10">
        @include('shared._messages')
        @yield('content')
      </div>
     <!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) -->
      <script src="https://code.jquery.com/jquery.js"></script>
      <!-- 包括所有已编译的插件 -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>