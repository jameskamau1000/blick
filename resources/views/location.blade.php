@extends('layouts.site')

@section('title', 'Location | Blick and Skills')
@section('description', 'Blick and Skills — Kampala and Nairobi offices for precious metals and export coordination.')

@section('content')
  <section class="py-5">
    <div class="container">
      <h1 class="section-title mb-4">Our Locations</h1>
      <div class="row g-4">
        <div class="col-lg-4">
          <div class="card-soft p-4 h-100">
            <h2 class="h5">Kampala (primary)</h2>
            <p class="mb-1">Central business district</p>
            <p class="mb-4">Kampala, Uganda</p>
            <h2 class="h5 mt-4">Nairobi (liaison)</h2>
            <p class="mb-1">Export coordination &amp; regional support</p>
            <p class="mb-4">Nairobi, Kenya</p>
            <a class="btn btn-gold" target="_blank" rel="noopener noreferrer" href="https://www.google.com/maps/search/?api=1&query=Kampala+Uganda+City+Centre">Open Kampala in Google Maps</a>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card-soft p-0 overflow-hidden">
            <iframe
              title="Blick and Skills — Kampala map"
              src="https://www.google.com/maps?q=Kampala+City+Centre+Uganda&output=embed"
              width="100%"
              height="460"
              style="border:0;"
              loading="lazy"
              allowfullscreen
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
