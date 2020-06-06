<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Document</title>
  <link rel="stylesheet" href="{!! asset('assets/css/app.min.css') !!}">
</head>

<body>
  <nav class="nav">
    <a class="nav__brand" href="{{ url('/') }}">
      {{ config('app.name', 'Laravel') }}
    </a>
    <!-- Right Side Of Navbar -->
    <ul class="nav__menu">
      <!-- Authentication Links -->
      @guest
      <li>
        <a href="{{ route('login') }}">{{ __('Login') }}</a>
      </li>
      @if (Route::has('register'))
      <li>
        <a href="{{ route('register') }}">{{ __('Register') }}</a>
      </li>
      @endif
      @else
      <li class="nav-item dropdown">
        <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }}</span>
        </a>

        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </li>
      @endguest
    </ul>
  </nav>
  <main class="main">
    @yield('content')
  </main>
</body>

</html>