@extends('layouts.site')

@section('title', 'Trusted Precious Metals Sourcing & Export | Blick and Skills')
@section('description', 'Licensed precious metals dealing, due diligence, consultancy, and export facilitation from Nairobi, Kenya, serving investors and buyers across East Africa.')

@section('content')
  <header class="hero">
    <div class="container">
      <div class="row g-4 align-items-center">
        <div class="col-lg-7">
          <h1 class="display-5 fw-bold mb-3">Trusted Precious Metals Sourcing &amp; Export Across East Africa</h1>
          <p class="lead mb-4">
            Blick and Skills is a licensed precious metals dealing firm connecting global buyers and investors with verified
            mineral sources across Kenya, East Africa, and selected regional corridors.
          </p>
          <div class="d-flex flex-wrap gap-2">
            <a href="{{ route('contact') }}" class="btn btn-gold btn-lg">Request Consultation</a>
            <a href="{{ route('portal') }}" class="btn btn-outline-light btn-lg">Become a Buyer</a>
            <a href="{{ route('portal') }}" class="btn btn-outline-light btn-lg">Partner With Us</a>
          </div>
        </div>
        <div class="col-lg-5">
          <img class="cover-img" src="{{ asset('assets/img/blick-hero.png') }}" alt="Modern corporate boardroom and city skyline">
        </div>
      </div>
    </div>
  </header>

  <section class="py-5">
    <div class="container">
      <h2 class="section-title mb-3">Company Introduction</h2>
      <p class="mb-0">
        Blick and Skills is headquartered in <strong>Nairobi</strong>, our main business hub for export coordination, client
        delivery, and transaction governance. We also maintain regional presence in Uganda. We support miners, trading partners,
        and international buyers with structured due diligence, transparent
        communication, and compliance-aligned transaction workflows.
      </p>
    </div>
  </section>

  <section class="py-5 muted-bg">
    <div class="container">
      <h2 class="section-title mb-4">Key Service Highlights</h2>
      <div class="row g-3">
        <div class="col-md-6 col-xl-4"><div class="card-soft p-3"><img class="thumb-img" src="{{ asset('assets/img/blick-service-gold.png') }}" alt="Gold and precious metals display">Precious metals sourcing</div></div>
        <div class="col-md-6 col-xl-4"><div class="card-soft p-3"><img class="thumb-img thumb-img-contain" src="{{ asset('assets/img/blick-service-assay.png') }}" alt="Professional assay and validation">Gold due diligence &amp; validation</div></div>
        <div class="col-md-6 col-xl-4"><div class="card-soft p-3"><img class="thumb-img" src="{{ asset('assets/img/service-consulting.jpg') }}" alt="Minerals consultancy">Minerals consultancy</div></div>
        <div class="col-md-6 col-xl-4"><div class="card-soft p-3"><img class="thumb-img" src="{{ asset('assets/img/service-export.jpg') }}" alt="Export facilitation">Export facilitation</div></div>
        <div class="col-md-6 col-xl-4"><div class="card-soft p-3"><img class="thumb-img" src="{{ asset('assets/img/service-investor.jpg') }}" alt="Investor advisory">Investor advisory services</div></div>
      </div>
    </div>
  </section>

  <section class="py-5">
    <div class="container">
      <h2 class="section-title mb-4">Why Choose Us</h2>
      <div class="row g-3">
        <div class="col-md-6 col-lg-4"><div class="card-soft p-3">Licensed mineral dealership framework</div></div>
        <div class="col-md-6 col-lg-4"><div class="card-soft p-3">Cross-border buyer and investor network</div></div>
        <div class="col-md-6 col-lg-4"><div class="card-soft p-3">Structured compliance and documentation support</div></div>
        <div class="col-md-6 col-lg-4"><div class="card-soft p-3">Transparent due diligence process</div></div>
        <div class="col-md-6 col-lg-4"><div class="card-soft p-3">Regional sourcing coverage in East Africa</div></div>
      </div>
    </div>
  </section>

  <section class="py-5 muted-bg">
    <div class="container">
      <h2 class="section-title mb-4">Global Export Destinations</h2>
      <div class="row g-3">
        <div class="col-md-4"><div class="card-soft p-3">Turkey</div></div>
        <div class="col-md-4"><div class="card-soft p-3">Hong Kong</div></div>
        <div class="col-md-4"><div class="card-soft p-3">Dubai</div></div>
        <div class="col-md-4"><div class="card-soft p-3">Europe</div></div>
        <div class="col-md-4"><div class="card-soft p-3">Australia</div></div>
      </div>
    </div>
  </section>
  <section class="py-5">
    <div class="container">
      <div class="row g-4 align-items-center">
        <div class="col-lg-6">
          <img class="cover-img" src="{{ asset('assets/img/nairobi.jpg') }}" alt="Nairobi business district and operations hub">
        </div>
        <div class="col-lg-6">
          <h2 class="section-title mb-3">Nairobi Operations Hub</h2>
          <p class="mb-0">
            Operations are led from Nairobi, with regional support so buyers receive responsive contact, clear milestones, and
            documentation aligned to export requirements—from first consultation through final delivery.
          </p>
        </div>
      </div>
    </div>
  </section>
@endsection
