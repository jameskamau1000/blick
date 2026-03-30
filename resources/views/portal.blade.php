@extends('layouts.site')

@section('title', 'Investor & Buyer Portal | Blick and Skills')
@section('description', 'Submit buyer inquiries, investor consultations, and seller partnership requests.')

@section('content')
  <section class="py-5">
    <div class="container">
      <h1 class="section-title mb-2">Investor & Buyer Portal</h1>
      <p class="mb-4">For serious buyers, investors, and partners. Submit your request and our team will respond.</p>

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
        <div class="col-lg-4">
          <div class="card-soft p-4">
            <h2 class="h5">Buyer Inquiry Form</h2>
            <form method="post" action="{{ route('portal.submit') }}" class="row g-2">
              @csrf
              <input type="hidden" name="form_type" value="Buyer Inquiry">
              <div class="col-12"><input class="form-control" name="name" placeholder="Name" required></div>
              <div class="col-12"><input class="form-control" name="email" type="email" placeholder="Email" required></div>
              <div class="col-12"><input class="form-control" name="company" placeholder="Company"></div>
              <div class="col-12"><input class="form-control" name="country" placeholder="Country"></div>
              <div class="col-12"><input class="form-control" name="phone" placeholder="Phone"></div>
              <div class="col-12"><textarea class="form-control" name="details" rows="4" placeholder="Product, purity, quantity, timeline" required></textarea></div>
              <div class="col-12"><button class="btn btn-gold w-100" type="submit">Submit Buyer Inquiry</button></div>
            </form>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card-soft p-4">
            <h2 class="h5">Investor Consultation Form</h2>
            <form method="post" action="{{ route('portal.submit') }}" class="row g-2">
              @csrf
              <input type="hidden" name="form_type" value="Investor Consultation">
              <div class="col-12"><input class="form-control" name="name" placeholder="Name" required></div>
              <div class="col-12"><input class="form-control" name="email" type="email" placeholder="Email" required></div>
              <div class="col-12"><input class="form-control" name="company" placeholder="Fund / Company"></div>
              <div class="col-12"><input class="form-control" name="country" placeholder="Country"></div>
              <div class="col-12"><input class="form-control" name="phone" placeholder="Phone"></div>
              <div class="col-12"><textarea class="form-control" name="details" rows="4" placeholder="Investment goals and interest" required></textarea></div>
              <div class="col-12"><button class="btn btn-gold w-100" type="submit">Submit Investor Request</button></div>
            </form>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card-soft p-4">
            <h2 class="h5">Seller Partnership Form</h2>
            <form method="post" action="{{ route('portal.submit') }}" class="row g-2">
              @csrf
              <input type="hidden" name="form_type" value="Seller Partnership">
              <div class="col-12"><input class="form-control" name="name" placeholder="Name" required></div>
              <div class="col-12"><input class="form-control" name="email" type="email" placeholder="Email" required></div>
              <div class="col-12"><input class="form-control" name="company" placeholder="Cooperative / Supplier"></div>
              <div class="col-12"><input class="form-control" name="country" placeholder="Country"></div>
              <div class="col-12"><input class="form-control" name="phone" placeholder="Phone"></div>
              <div class="col-12"><textarea class="form-control" name="details" rows="4" placeholder="Licensing, location, available product" required></textarea></div>
              <div class="col-12"><button class="btn btn-gold w-100" type="submit">Submit Partnership Request</button></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
