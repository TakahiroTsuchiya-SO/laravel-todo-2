<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ToDo App</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootflat/2.0.4/css/bootflat.min.css" rel="stylesheet">
  <!-- styles -->
  <style>
    body {
      background-color: #f4f7f8;
    }

    .navbar {
      margin: 2rem 0 2.5rem 0;
    }

    .my-navbar {
      align-items: center;
      background: #333;
      display: flex;
      height: 6rem;
      justify-content: space-between;
      padding: 0 2%;
      margin-bottom: 3rem;
    }

    .my-navbar-brand {
      font-size: 18px;
    }

    .my-navbar-brand,
    .my-navbar-item {
      color: #8c8c8c;
    }

    .my-navbar-brand:hover,
    a.my-navbar-item:hover {
      color: #ffffff;
    }

    .table td:nth-child(2),
    .table td:nth-child(3),
    .table td:nth-child(4) {
      white-space: nowrap;
      width: 1px;
    }

    .form-control[disabled],
    .form-control[readonly] {
      background-color: #fff;
    }
  </style>
  <!--
  styles.cssをうまく読み込めない
   @yield('styles')
    @if(app('env') == 'production')
      <link href="{{ secure_asset('css/styles.css') }}" rel="stylesheet">
    @else
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    @endif
  -->
</head>
<body>
<header>
  <nav class="my-navbar">
    <a class="my-navbar-brand" href="/">ToDo App</a>
    <div class="my-navbar-control">
      @if(Auth::check())
        <span class="my-navbar-item">ようこそ, {{ Auth::user()->name }}さん</span>
        ｜
        <a href="#" id="logout" class="my-navbar-item">ログアウト</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      @else
        <a class="my-navbar-item" href="{{ route('login') }}">ログイン</a>
        ｜
        <a class="my-navbar-item" href="{{ route('register') }}">会員登録</a>
      @endif
    </div>
  </nav>
</header>
<main>
  @yield('content')
</main>
@if(Auth::check())
<script>
document.getElementById('logout').addEventListener('click', function(event){
    event.preventDefault();
    document.getElementById('logout-form').submit();
});
</script>
@endif
@yield('scripts')
</body>
</html>