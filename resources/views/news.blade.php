@extends('layouts.site')

@section('title', 'News & Insights | Blick and Skills')
@section('description', 'Industry insights on gold investment trends, East Africa mining developments, and export regulations.')

@section('content')
  <section class="py-5">
    <div class="container">
      <h1 class="section-title mb-4">News / Insights</h1>

      <div class="card-soft p-4 mb-4">
        <h2 class="h5 mb-3">Official Sources We Track (East Africa)</h2>
        <p class="mb-3">
          Our regulatory monitoring includes official Kenyan and Ugandan government and legal publication channels.
          Buyers and investors are advised to confirm current notices before final transaction execution.
        </p>
        <div class="row g-3">
          <div class="col-md-6 col-lg-3"><button type="button" class="btn btn-outline-dark w-100">State Department for Mining</button></div>
          <div class="col-md-6 col-lg-3"><button type="button" class="btn btn-outline-dark w-100">Kenya Mining Cadastre Portal</button></div>
          <div class="col-md-6 col-lg-3"><button type="button" class="btn btn-outline-dark w-100">Mining Act, 2016 (Kenya Law)</button></div>
          <div class="col-md-6 col-lg-3"><button type="button" class="btn btn-outline-dark w-100">Kenya Law (Legal Notices)</button></div>
        </div>
      </div>

      <div class="row g-4">
        <div class="col-md-6">
          <article class="card-soft p-4 h-100">
            <h2 class="h6">Regulation Watch: Mining Act, 2016</h2>
            <p class="mb-2">
              Kenya's Mining Act remains the core legal framework for prospecting, mining, mineral dealings, transport, and processing.
            </p>
            <p class="mb-0 small text-muted">Investor note: deal structures should align with current licensing classes and statutory compliance obligations.</p>
          </article>
        </div>
        <div class="col-md-6">
          <article class="card-soft p-4 h-100">
            <h2 class="h6">Licensing & Mineral Dealings</h2>
            <p class="mb-2">
              The Mining Cadastre Portal is the official digital channel for registration, licence applications, dealer workflows, and payment processes.
            </p>
            <p class="mb-0 small text-muted">Buyer note: onboarding should include dealer credential checks and portal-verifiable documentation paths.</p>
          </article>
        </div>
        <div class="col-md-6">
          <article class="card-soft p-4 h-100">
            <h2 class="h6">Government Notices & Sector Updates</h2>
            <p class="mb-2">
              The State Department for Mining publishes notices, policy communication, and institutional updates relevant to operators and investors.
            </p>
            <p class="mb-0 small text-muted">Partner note: key updates can affect compliance timelines, stakeholder engagement, and documentation standards.</p>
          </article>
        </div>
        <div class="col-md-6">
          <article class="card-soft p-4 h-100">
            <h2 class="h6">Export Compliance Focus (Current Practice)</h2>
            <p class="mb-2">
              Cross-border precious metals transactions should maintain complete paper trails: source verification, assay support records, contractual documentation, and export paperwork.
            </p>
            <p class="mb-0 small text-muted">Execution note: regulatory checks are treated as mandatory controls before shipment release.</p>
          </article>
        </div>
      </div>

      <div class="card-soft p-4 mt-4">
        <h2 class="h5 mb-3">What We Advise Buyers & Investors To Verify First</h2>
        <ul class="mb-0">
          <li>Current legal framework and any recent legal notices on Kenya Law</li>
          <li>Licensing and dealing workflow requirements through the Mining Cadastre Portal</li>
          <li>Regulatory updates from the State Department for Mining</li>
          <li>Transaction-level due diligence before contracting and export execution</li>
        </ul>
      </div>
    </div>
  </section>
@endsection
