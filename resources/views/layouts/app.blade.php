<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
  <meta name="description" content="Rahul Anilkumar – Full Stack Developer | Laravel | PHP | JavaScript">
  <meta property="og:title" content="Rahul Anilkumar Portfolio" />
  <meta property="og:url" content="https://rahul-portfolio-ow5p.onrender.com/" />
  <meta property="og:image" content="{{ asset('images/profile.png') }}">

  <title>Rahul Anilkumar - Portfolio</title>

  {{-- Bootstrap CSS --}}
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  {{-- Custom CSS --}}
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

  {{-- Chart.js CDN (or local if you want) --}}
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Rahul Anilkumar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="/projects">Projects</a></li>
          <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
        </ul>
        <button id="themeToggle" class="btn btn-secondary ms-3">Toggle Dark Mode</button>
      </div>
    </div>
  </nav>

  <main class="py-5">
    @yield('content')
  </main>

  <footer class="text-center py-4 bg-light">© {{ date('Y') }} Rahul Anilkumar</footer>

  {{-- Bootstrap Bundle JS --}}
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  {{-- Custom JS --}}
  <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
