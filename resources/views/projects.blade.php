@extends('layouts.app')

@section('content')

<section class="projects-page py-5">
  <div class="container">
    <h2 class="text-center mb-4">💻 Projects I've Worked On</h2>
    <p class="text-center text-muted mb-5">Here are some highlights from the web applications and platforms I’ve developed or contributed to over the last 5 years.</p>

    <div class="row g-4">

      <!-- Project Card 1 -->
      <div class="col-md-4">
        <div class="card project-card">
          <img src="{{ asset('images/project1.jpg') }}" class="card-img-top" alt="GetSetRent">
          <div class="card-body">
            <h5 class="card-title">GetSetRent</h5>
            <p class="card-text">Rental management platform migrated from CodeIgniter to Laravel. Increased speed by 30%, implemented Stripe payments and dynamic admin panel.</p>
            <span class="badge bg-primary">Laravel</span>
            <span class="badge bg-dark">Stripe</span>
            <span class="badge bg-success">MySQL</span>
            <a href="#getsetrent" class="btn btn-outline-primary mt-3">View Details</a>
          </div>
        </div>
      </div>

      <!-- Project Card 2 -->
      <div class="col-md-4">
        <div class="card project-card">
          <img src="{{ asset('images/project2.png') }}" class="card-img-top" alt="PatientGain CRM">
          <div class="card-body">
            <h5 class="card-title">PatientGain</h5>
            <p class="card-text">Large-scale healthcare CRM. Migrated major modules from Joomla to Laravel, integrated payments, and developed embeddable widgets.</p>
            <span class="badge bg-danger">Laravel</span>
            <span class="badge bg-info">Joomla</span>
            <span class="badge bg-warning text-dark">CRM</span>
            <a href="#patientgain" class="btn btn-outline-primary mt-3">View Details</a>
          </div>
        </div>
      </div>

      <!-- Project Card 3 -->
      <div class="col-md-4">
        <div class="card project-card">
          <img src="{{ asset('images/project3.png') }}" class="card-img-top" alt="Aipopuli Admin Panel">
          <div class="card-body">
            <h5 class="card-title">Aipopuli Admin Panel</h5>
            <p class="card-text">Built a dynamic admin dashboard using Laravel and Vue.js. Improved productivity and streamlined content updates.</p>
            <span class="badge bg-secondary">Vue.js</span>
            <span class="badge bg-success">Laravel</span>
            <a href="#aipopuli" class="btn btn-outline-primary mt-3">View Details</a>
          </div>
        </div>
      </div>

      <!-- You can add more projects here -->
    </div>
  </div>
</section>

@endsection
