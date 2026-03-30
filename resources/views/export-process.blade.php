@extends('layouts.site')

@section('title', 'Export Process | Blick and Skills')
@section('description', 'Structured export process from buyer consultation to final international delivery.')

@section('content')
  <section class="py-5">
    <div class="container">
      <h1 class="section-title mb-4">Export Process</h1>
      <p class="mb-4">
        Our export workflow is structured to reduce risk and improve transaction clarity for international buyers.
        Every shipment stage is handled with documentation controls, compliance checks, and coordinated communication
        between supplier, buyer, and logistics stakeholders.
      </p>

      <div class="row g-4 mb-4">
        <div class="col-lg-4">
          <div class="card-soft p-3 h-100">
            <img class="thumb-img" src="{{ asset('assets/img/export-port.jpg') }}" alt="Port cranes and export logistics">
            <h2 class="h6 mb-0">Port & Terminal Coordination</h2>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-soft p-3 h-100">
            <img class="thumb-img" src="{{ asset('assets/img/export-ship.jpg') }}" alt="Cargo vessel for international delivery">
            <h2 class="h6 mb-0">International Shipment Flow</h2>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-soft p-3 h-100">
            <img class="thumb-img" src="{{ asset('assets/img/export-docs.jpg') }}" alt="Export documents and process control">
            <h2 class="h6 mb-0">Documentation Readiness</h2>
          </div>
        </div>
      </div>

      <div class="row g-3">
        <div class="col-md-6">
          <div class="card-soft p-4 h-100">
            <h2 class="h5">Step 1: Buyer Consultation</h2>
            <p class="mb-2">Discuss buyer requirements in detail before any sourcing commitment.</p>
            <ul class="mb-0">
              <li>Quantity, purity, and preferred lot structure</li>
              <li>Target pricing model and payment framework</li>
              <li>Delivery window and destination expectations</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-soft p-4 h-100">
            <h2 class="h5">Step 2: Source Verification</h2>
            <p class="mb-2">Confirm source and supplier profile before commercial execution.</p>
            <ul class="mb-0">
              <li>Mineral origin and chain-of-supply checks</li>
              <li>Seller legitimacy and transaction history review</li>
              <li>Initial quality and testing plan alignment</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-soft p-4 h-100">
            <h2 class="h5">Step 3: Due Diligence</h2>
            <p class="mb-2">Run formal validation controls before contract finalization.</p>
            <ul class="mb-0">
              <li>Assay coordination and technical verification</li>
              <li>Documentation consistency and legal checks</li>
              <li>Counterparty and risk review checkpoints</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-soft p-4 h-100">
            <h2 class="h5">Step 4: Contract & Compliance</h2>
            <p class="mb-2">Prepare contractual and regulatory file package.</p>
            <ul class="mb-0">
              <li>Commercial terms and responsibilities mapping</li>
              <li>Export documentation checklist completion</li>
              <li>Pre-shipment compliance review and sign-off</li>
            </ul>
          </div>
        </div>
        <div class="col-md-12">
          <div class="card-soft p-4">
            <h2 class="h5">Step 5: Export & Delivery</h2>
            <p class="mb-2">Execute export from East Africa to international buyer destinations with controlled communication.</p>
            <ul class="mb-0">
              <li>Shipment scheduling and logistics partner coordination</li>
              <li>Status updates through transit milestones</li>
              <li>Delivery confirmation and transaction close-out support</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="card-soft p-4 mt-4">
        <h2 class="h5 mb-3">Typical Export File Checklist</h2>
        <div class="row g-3">
          <div class="col-md-6 col-lg-3"><div class="border rounded p-3 h-100">Commercial agreement and shipment terms</div></div>
          <div class="col-md-6 col-lg-3"><div class="border rounded p-3 h-100">Quality/assay and validation records</div></div>
          <div class="col-md-6 col-lg-3"><div class="border rounded p-3 h-100">Regulatory and dealing compliance documents</div></div>
          <div class="col-md-6 col-lg-3"><div class="border rounded p-3 h-100">Logistics and delivery tracking references</div></div>
        </div>
      </div>
    </div>
  </section>
@endsection
