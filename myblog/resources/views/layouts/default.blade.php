<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
  <div class="contentsWrapper">
  @if(session('flash_message'))
  <div class="flash_message" onclick="this.classList.add('hidden')">{{ session('flash_message')}}</div>
  @endif
  <div class="container">
    @yield('content')
  </div>
</div>
</body>
</html>
