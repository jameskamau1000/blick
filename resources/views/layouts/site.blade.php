<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Blick and Skills')</title>
  <meta name="description" content="@yield('description', 'Precious metals sourcing, due diligence, and export across East Africa.')">
  <meta name="keywords" content="precious metals Nairobi, gold sourcing Kenya East Africa, mineral consultancy Africa, gold export Kenya, Blick and Skills">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    :root {
      --blick-gold: #c9a84a;
      --blick-black: #101214;
      --blick-navy: #1a3a52;
      --blick-light: #f4f6f8;
    }
    body {
      color: #1b222a;
      background: #fff;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    .site-main { flex: 1 0 auto; }
    .topbar { background: var(--blick-black); color: #d8dee6; font-size: .9rem; }
    .topbar a { color: #d8dee6; text-decoration: none; }
    .email-btn {
      border: 1px solid #3c4552;
      color: #e5ebf3;
      padding: .2rem .65rem;
      border-radius: .45rem;
      text-decoration: none;
      font-size: .86rem;
    }
    .email-btn:hover { background: #1c2430; color: #fff; }
    .navbar { border-bottom: 1px solid #e7ebef; }
    .navbar-brand { color: var(--blick-navy); font-weight: 700; }
    .navbar .container { gap: .8rem; }
    .nav-link { color: #24303d; font-weight: 500; padding-right: .7rem; padding-left: .7rem; }
    .nav-link:hover, .nav-link.active { color: var(--blick-navy); }
    .dropdown-menu { border: 1px solid #e2e7eb; border-radius: .7rem; }
    .dropdown-item:active { background: var(--blick-navy); }
    .btn-gold { background: var(--blick-gold); border: 1px solid var(--blick-gold); color: #141414; }
    .btn-gold:hover { background: #b99238; border-color: #b99238; color: #141414; }
    .section-title { color: var(--blick-navy); font-weight: 700; }
    .card-soft { border: 1px solid #e7ebef; border-radius: .85rem; background: #fff; height: 100%; }
    .hero { background: linear-gradient(145deg, #0f1820 0%, #1a3a52 50%, #152a1f 100%); color: #fff; padding: 5rem 0; }
    .hero p { color: #d5dfdb; }
    .muted-bg { background: var(--blick-light); }
    .cover-img { width: 100%; height: 100%; object-fit: cover; border-radius: .85rem; }
    .thumb-img { width: 100%; height: 180px; object-fit: cover; border-radius: .7rem; margin-bottom: .9rem; }
    .thumb-img.thumb-img-contain { object-fit: contain; background: #ebe8e4; }
    .whatsapp-float {
      position: fixed;
      right: 18px;
      bottom: 18px;
      z-index: 999;
      border-radius: 999px;
      padding: .65rem .95rem;
      text-decoration: none;
      background: #25d366;
      color: #fff;
      font-weight: 600;
      box-shadow: 0 10px 20px rgba(0, 0, 0, .2);
    }
    footer { background: var(--blick-black); color: #d6dee8; margin-top: auto; }
    .footer-logo { width: 34px; height: 34px; }
    .footer-title { color: #eef3f8; font-weight: 600; margin-bottom: .55rem; font-size: .96rem; }
    .footer-link { color: #cfd7e2; text-decoration: none; display: inline-block; margin-bottom: .35rem; }
    .footer-link:hover { color: #fff; }
  </style>
</head>
<body>
  <div class="topbar py-2">
    <div class="container d-flex flex-wrap gap-3 justify-content-between">
      <span>Nairobi, Kenya — Main Business Hub | Licensed Precious Metals Dealer</span>
      <div class="d-flex align-items-center gap-2">
        <span>Email: info@blickandskills.com</span>
        <a class="email-btn" href="mailto:info@blickandskills.com?subject=Inquiry%20-%20Blick%20and%20Skills">Email Us</a>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-expand-xl sticky-top bg-white">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}">
        <img src="{{ asset('assets/img/blick-logo.svg') }}" width="38" height="38" alt="Blick and Skills logo">
        <span>Blick and Skills</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav ms-auto mb-2 mb-xl-0">
          <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Our Services</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Operations</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('precious-metals') }}">Precious Metals</a></li>
              <li><a class="dropdown-item" href="{{ route('sourcing-locations') }}">Sourcing Locations</a></li>
              <li><a class="dropdown-item" href="{{ route('export-process') }}">Export Process</a></li>
              <li><a class="dropdown-item" href="{{ route('location') }}">Location</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href="{{ route('compliance') }}">Compliance</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('portal') }}">Investor &amp; Buyer Portal</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('news') }}">News</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/brochures/') }}">Brochures</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
          <li class="nav-item ms-xl-2"><a class="btn btn-gold btn-sm mt-2 mt-xl-0" href="{{ route('contact') }}">Consultation</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="site-main">
    @yield('content')
  </main>

  <footer class="py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-4">
          <div class="d-flex align-items-center gap-2 mb-2">
            <img class="footer-logo" src="{{ asset('assets/img/blick-logo.svg') }}" alt="Blick and Skills logo">
            <span class="fw-semibold text-white">Blick and Skills</span>
          </div>
          <p class="mb-1">Head office: Nairobi, Kenya &middot; Regional: Kampala, Uganda</p>
          <p class="mb-0">Licensed Precious Metals Dealer</p>
        </div>
        <div class="col-6 col-lg-3">
          <p class="footer-title">Navigation</p>
          <a class="footer-link" href="{{ route('home') }}">Home</a><br>
          <a class="footer-link" href="{{ route('about') }}">About Us</a><br>
          <a class="footer-link" href="{{ route('services') }}">Our Services</a><br>
          <a class="footer-link" href="{{ url('/brochures/') }}">Brochures</a><br>
          <a class="footer-link" href="{{ route('contact') }}">Contact</a>
        </div>
        <div class="col-6 col-lg-3">
          <p class="footer-title">Operations</p>
          <a class="footer-link" href="{{ route('precious-metals') }}">Precious Metals</a><br>
          <a class="footer-link" href="{{ route('sourcing-locations') }}">Sourcing Locations</a><br>
          <a class="footer-link" href="{{ route('export-process') }}">Export Process</a><br>
          <a class="footer-link" href="{{ route('compliance') }}">Compliance</a>
        </div>
        <div class="col-lg-2">
          <p class="footer-title">Contact</p>
          <a class="footer-link" href="{{ route('portal') }}">Investor &amp; Buyer Portal</a><br>
          <span class="d-block small">+256 765 597 349</span>
          <span class="d-block small">info@blickandskills.com</span>
        </div>
      </div>
      <hr class="border-secondary-subtle my-4">
      <div class="d-flex flex-column flex-md-row gap-2 justify-content-center">
        <span>&copy; {{ date('Y') }} Blick and Skills. All rights reserved.</span>
      </div>
    </div>
  </footer>

  <a class="whatsapp-float" href="https://wa.me/254721677777?text=Hello%20Blick%20and%20Skills" target="_blank" rel="noopener noreferrer">WhatsApp</a>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
