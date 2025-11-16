<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'EduFun')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-container">
            <div>
                <a href="{{ route('home') }}" class="navbar-brand">
                    <img src="{{ asset('images/Logo.png') }}" alt="EduFun Logo" class="navbar-logo">
                </a>
            </div>

            <div class="navbar-nav">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle {{ request()->routeIs('category*') ? 'active' : '' }}">Category</a>
                    <div class="dropdown-menu">
                        <a href="{{ route('category', 'interactive-multimedia') }}" class="{{ request()->is('category/interactive-multimedia') ? 'active' : '' }}">Interactive Multimedia</a>
                        <a href="{{ route('category', 'software-engineering') }}" class="{{ request()->is('category/software-engineering') ? 'active' : '' }}">Software Engineering</a>
                    </div>
                </div>
                <a href="{{ route('writers') }}" class="{{ request()->routeIs('writer*') ? 'active' : '' }}">Writers</a>
                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
                <a href="{{ route('popular') }}" class="{{ request()->routeIs('popular') ? 'active' : '' }}">Popular</a>
            </div>

            <!-- Mobile menu button -->
            <button type="button" class="mobile-menu-btn">
                <span class="hidden">Open main menu</span>
                <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="main-content">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <p class="footer-text">
                © 2025 EduFun | Web Programming | Keane Richard Christopher | 2702307404
            </p>
        </div>
    </footer>
</body>
</html>
