<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Consultant</title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<header class="header">
    <div class="container nav-wrapper">
        <div class="logo">BusinessConsult</div>

        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/services">Services</a>
            <a href="/industries">Industries</a>
            <a href="/blog">Blog</a>
            <a href="/contact">Contact</a>
            <a class="btn" href="/book-consultation">Book Consultation</a>
        </nav>
    </div>
</header>

<main class="main-content">
    <div class="container">
        @yield('content')
    </div>
</main>

<footer class="footer">
    <div class="container footer-grid">
        <div>
            <h4>BusinessConsult</h4>
            <p>Helping businesses grow strategically and sustainably.</p>
        </div>

        <div>
            <h4>Quick Links</h4>
            <a href="/about">About</a>
            <a href="/services">Services</a>
            <a href="/contact">Contact</a>
        </div>

        <div>
            <h4>Contact</h4>
            <p>Email: info@consultant.com</p>
            <p>Phone: +91 98765 43210</p>
        </div>
    </div>

    <div class="footer-bottom">
        © 2026 Business Consultant. All rights reserved.
    </div>
</footer>

</body>
</html>