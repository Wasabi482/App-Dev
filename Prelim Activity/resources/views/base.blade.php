<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Demo App')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"  rel="stylesheet" />
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">💻 Demo </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item {{ request()->is('todos') ? 'active' : '' }}">
        <a class="nav-link" href="/todos">To Do</a>
      </li>
      <li class="nav-item {{ request()->is('about') ? 'active' : '' }}">
        <a class="nav-link" href="/about">About</a>
      </li>
      <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}">
        <a class="nav-link" href="/contact">Contact</a>
      </li>
    </ul>
  </div>
</nav>
    <div class="container">@yield('content')</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>
