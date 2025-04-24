<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'Portfolio')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .navbar {
      background-color: #343a40;
    }
    .footer {
      background-color: #343a40;
    }
    .btn-outline-dark {
      color: #343a40;
      border-color: #343a40;
    }
    .btn-outline-dark:hover {
      background-color: #343a40;
      color: white;
    }
    .text-dark {
      color: #212529;
    }
    
    /* เพิ่มเส้นขีดใต้เมื่อเมาส์ชี้ (hover) */
    .nav-link:hover {
      color: #f8f9fa;
      text-decoration: none;
    }

    /* เพิ่มเส้นขีดใต้เมนูที่ active */
    .nav-link.active {
      color: #f8f9fa;
      border-bottom: 2px solid #f8f9fa;
    }
  </style>
</head>
<body class="d-flex flex-column min-vh-100 @yield('body-class')">
  {{-- Navbar --}}
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link @if(Request::is('/')) active @endif" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Request::is('about')) active @endif" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Request::is('projects')) active @endif" href="/projects">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Request::is('resume')) active @endif" href="/resume">Resume</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Request::is('contact')) active @endif" href="/contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  {{-- Main Content --}}
  <main class="flex-grow-1">
    <div class="container py-5">
      @yield('content')
    </div>
  </main>

  {{-- Footer --}}
  <footer class="footer text-white text-center py-3">
    © 2025 Developed by Boy | Laravel Portfolio
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
