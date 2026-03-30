@extends('layouts.site')

@section('title', 'Location | Blick and Skills')
@section('description', 'Blick and Skills — head office in Nairobi, Kenya, with regional presence in Uganda.')

@section('content')
  <section class="py-5">
    <div class="container">
      <h1 class="section-title mb-4">Our Locations</h1>
      <div class="row g-4">
        <div class="col-lg-4">
          <div class="card-soft p-4 h-100">
            <h2 class="h5">Nairobi (head office)</h2>
            <p class="mb-1">Main business hub — export coordination, client services, and transaction governance</p>
            <p class="mb-4">Nairobi, Kenya</p>
            <h2 class="h5 mt-4">Kampala (regional)</h2>
            <p class="mb-1">Regional office &amp; market support</p>
            <p class="mb-4">Kampala, Uganda</p>
            <a class="btn btn-gold" target="_blank" rel="noopener noreferrer" href="https://www.google.com/maps/search/?api=1&query=Nairobi+Central+Business+District+Kenya">Open Nairobi in Google Maps</a>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card-soft p-0 overflow-hidden">
            <iframe
              title="Blick and Skills — Nairobi map"
              src="https://www.google.com/maps?q=Nairobi+Central+Business+District+Kenya&output=embed"
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
