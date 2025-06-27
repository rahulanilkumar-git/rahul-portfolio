@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="hero">
  <div class="container text-center">
    <img src="{{ asset('images/profile.png') }}" class="rounded-circle mb-4" alt="Profile" width="120" />
    <h1>Hello, I'm <strong>Rahul Anilkumar</strong></h1>
    <p id="typewriter-container" class="typewriter-text"></p>
    <div class="hero-buttons">
      <a href="{{ url('/projects') }}" class="btn btn-primary">💼 View Projects</a>
      <a href="{{ asset('resume/RahulAnilkumar_resume.pdf') }}" class="btn btn-outline-light" target="_blank">📄 Resume</a>
    </div>
  </div>
</section>

<!-- About Me -->
<section class="about bg-white text-dark py-5">
  <div class="container text-center">
    <h2>About Me</h2>
    <p>I am a Full-Stack Developer with 4.5+ years in Laravel, PHP, JavaScript, and Shopify. I enjoy building fast and clean UIs, solving backend challenges, and creating seamless user experiences.</p>
  </div>
</section>

<!-- Skills Chart -->
<section class="skills bg-light text-dark py-5 text-center">
  <div class="container">
    <h2>Skills Overview</h2>
    <canvas id="skillsChart" width="300" height="300"></canvas>
  </div>
</section>

<!-- Projects Preview -->
<section class="projects bg-white text-dark py-5">
  <div class="container">
    <h2 class="text-center">Recent Projects</h2>
    <div class="row g-4 mt-4">
      <div class="col-md-4">
        <div class="card">
          <img src="{{ asset('images/project1.jpg') }}" class="card-img-top" alt="Project" />
          <div class="card-body">
            <h5 class="card-title">GetSetRent</h5>
            <p class="card-text">Laravel project optimizing booking system with 30% performance boost.</p>
            <a href="/projects#getsetrent" class="btn btn-primary">View More</a>
          </div>
        </div>
      </div>
      <!-- Add more project cards as needed -->
    </div>
  </div>
</section>

<!-- Contact CTA -->
<section class="cta bg-primary text-white text-center py-5">
  <div class="container">
    <h2>Let’s Work Together!</h2>
    <p>Whether freelance or full-time, I’m open to exciting opportunities.</p>
    <a href="/contact" class="btn btn-light">📬 Contact Me</a>
  </div>
</section>

@endsection
