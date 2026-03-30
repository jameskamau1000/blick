@extends('layouts.site')

@section('title', 'Precious Metals | Blick and Skills')
@section('description', 'Gold sourcing, verification, trading advisory, and export support for global buyers and investors.')

@section('content')
  <section class="py-5">
    <div class="container">
      <h1 class="section-title mb-4">Precious Metals</h1>
      <div class="row g-4">
        <div class="col-lg-8">
          <div class="card-soft p-4">
            <img class="thumb-img" src="{{ asset('assets/img/precious-gold.jpg') }}" alt="Gold trade and refining">
            <h2 class="h4">Gold</h2>
            <p>Gold is the primary precious metal traded through our network.</p>
            <ul class="mb-0">
              <li>Gold sourcing</li>
              <li>Gold verification</li>
              <li>Gold trading advisory</li>
              <li>Export facilitation</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-soft p-4">
            <img class="thumb-img" src="{{ asset('assets/img/precious-other.jpg') }}" alt="Other precious metals">
            <h2 class="h5">Other Precious Metals</h2>
            <p class="mb-0">Where applicable, we support transactions involving Silver and Platinum Group Metals.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
