@extends('layouts.site')

@section('title', 'Sourcing Locations | Blick and Skills')
@section('description', 'Key sourcing locations in Kenya, Uganda, and East Africa for verified precious metals.')

@section('content')
  <section class="py-5">
    <div class="container">
      <h1 class="section-title mb-4">Sourcing Locations</h1>
      <p class="mb-4">
        Our sourcing network covers strategic mining regions in Kenya, Uganda, and selected East African corridors.
        Each location is handled under a strict verification process that includes source checks, seller identity
        validation, and transaction documentation before any buyer-facing transaction is approved.
      </p>

      <div class="row g-4 mb-4">
        <div class="col-lg-4">
          <div class="card-soft p-4 h-100">
            <img class="thumb-img" src="{{ asset('assets/img/location-taveta.jpg') }}" alt="Taveta sourcing region">
            <h2 class="h5">Taveta</h2>
            <p>A known region for mineral exploration and gold sourcing in Kenya.</p>
            <ul class="mb-0">
              <li>Early-stage and active sourcing channels</li>
              <li>Supplier screening before buyer onboarding</li>
              <li>Origin traceability checks for shipments</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-soft p-4 h-100">
            <img class="thumb-img" src="{{ asset('assets/img/location-migori.jpg') }}" alt="Migori sourcing and artisanal mining">
            <h2 class="h5">Migori</h2>
            <p>One of Kenya's most active gold mining regions with strong artisanal activity.</p>
            <ul class="mb-0">
              <li>High-volume artisanal and small-scale channels</li>
              <li>Structured due diligence for seller legitimacy</li>
              <li>Assay coordination support during transactions</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-soft p-4 h-100">
            <img class="thumb-img" src="{{ asset('assets/img/location-west-pokot.jpg') }}" alt="West Pokot mineral exploration area">
            <h2 class="h5">West Pokot</h2>
            <p>Hosts mineral exploration sites and artisanal mining activities.</p>
            <ul class="mb-0">
              <li>Exploration-led sourcing opportunities</li>
              <li>Regional cooperative engagement model</li>
              <li>Compliance-first documentation workflow</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="card-soft p-4">
        <h2 class="h5 mb-3">How We Manage Sourcing Quality</h2>
        <div class="row g-3">
          <div class="col-md-6 col-lg-3"><div class="border rounded p-3 h-100">Supplier pre-qualification and KYC checks</div></div>
          <div class="col-md-6 col-lg-3"><div class="border rounded p-3 h-100">Mineral origin and chain-of-custody review</div></div>
          <div class="col-md-6 col-lg-3"><div class="border rounded p-3 h-100">Assay and quality testing coordination</div></div>
          <div class="col-md-6 col-lg-3"><div class="border rounded p-3 h-100">Export-ready compliance file preparation</div></div>
        </div>
      </div>
    </div>
  </section>
@endsection
