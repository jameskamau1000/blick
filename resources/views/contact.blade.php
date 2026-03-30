@extends('layouts.site')

@section('title', 'Contact Us | Blick and Skills')
@section('description', 'Contact Blick and Skills for buyer inquiries, investor consultations, and sourcing partnerships across East Africa.')

@section('content')
  <section class="py-5">
    <div class="container">
      <h1 class="section-title mb-4">Contact Us</h1>

      @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
      @endif
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul class="mb-0 ps-3">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <div class="row g-4">
        <div class="col-lg-5">
          <div class="card-soft p-4 h-100">
            <img class="thumb-img" src="{{ asset('assets/img/office.jpg') }}" alt="Modern corporate office interior">
            <h2 class="h5">Offices</h2>
            <p class="mb-1"><strong>Nairobi</strong> — head office &amp; main business hub</p>
            <p class="mb-3">Kenya</p>
            <p class="mb-1"><strong>Kampala</strong> — regional office</p>
            <p class="mb-3">Uganda</p>
            <p class="mb-1">Phone: <a href="tel:+256765597349">+256 765 597 349</a></p>
            <p class="mb-1">WhatsApp: <a href="https://wa.me/254721677777" target="_blank" rel="noopener noreferrer">+254 721 677 777</a></p>
            <p class="mb-3">Email: <a href="mailto:info@blickandskills.com">info@blickandskills.com</a></p>
            <a class="btn btn-outline-dark btn-sm" href="{{ route('location') }}">Open Full Location Page</a>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="card-soft p-4">
            <h2 class="h5 mb-3">Send Message</h2>
            <form method="post" action="{{ route('contact.submit') }}" class="row g-3">
              @csrf
              <div class="col-md-6"><input class="form-control" name="name" placeholder="Name" value="{{ old('name') }}" required></div>
              <div class="col-md-6"><input class="form-control" name="company" placeholder="Company" value="{{ old('company') }}"></div>
              <div class="col-md-6"><input class="form-control" name="country" placeholder="Country" value="{{ old('country') }}"></div>
              <div class="col-md-6">
                <select class="form-select" name="inquiry_type" required>
                  <option value="">Inquiry Type</option>
                  <option value="Buyer Inquiry">Buyer Inquiry</option>
                  <option value="Investor Consultation">Investor Consultation</option>
                  <option value="Seller Partnership">Seller Partnership</option>
                  <option value="General Inquiry">General Inquiry</option>
                </select>
              </div>
              <div class="col-12"><input class="form-control" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required></div>
              <div class="col-12"><textarea class="form-control" name="message" rows="5" placeholder="Message" required>{{ old('message') }}</textarea></div>
              <div class="col-12"><button class="btn btn-gold" type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
