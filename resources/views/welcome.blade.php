@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="hero">
  <div class="container text-center">
    <img src="{{ asset('images/profile.png') }}" class="rounded-circle mb-3" alt="Profile" width="120" />
    <h1>Hello, I'm <strong>Rahul Anilkumar</strong></h1>
    <p id="typewriter-container" class="typewriter-text"></p>

    <div class="hero-buttons mt-3">
      <a href="{{ url('/projects') }}" class="btn btn-primary">💼 View Projects</a>
      <a href="{{ asset('resume/RahulAnilkumar_resume.pdf') }}" class="btn btn-outline-light" target="_blank">📄 Resume</a>
      <a href="https://www.linkedin.com/in/rahul-anilkumar-071252208/" class="btn btn-outline-info" target="_blank">🔗 LinkedIn</a>
      <a href="https://github.com/rahulanilkumar-git" class="btn btn-dark" target="_blank">🐙 GitHub</a>
    </div>
  </div>
</section>

<!-- About Section -->
<section class="about bg-white text-dark py-5">
  <div class="container text-center">
    <h2>About Me</h2>
    <p class="lead">Highly skilled Full-Stack Developer with 5+ years of experience in Laravel, PHP, JavaScript, and modern CMS platforms. Proven success in migrating legacy systems and building secure, scalable applications.</p>

    <div class="row mt-4">
      <div class="col-md-3"><h5>🖥️ Frontend</h5><p>HTML, CSS, JS, React</p></div>
      <div class="col-md-3"><h5>⚙️ Backend</h5><p>Laravel, PHP, APIs, Python</p></div>
      <div class="col-md-3"><h5>🛠️ DevOps</h5><p>Git, Linux, CI/CD</p></div>
      <div class="col-md-3"><h5>🛍️ CMS/E-commerce</h5><p>Shopify, Joomla, WordPress</p></div>
    </div>
  </div>
</section>

<!-- Skills Chart -->
<section class="skills bg-light text-dark py-5">
  <div class="container text-center">
    <h2>Skills Overview</h2>
    <div class="d-flex justify-content-center">
      <canvas id="skillsChart" width="250" height="250"></canvas>
    </div>
  </div>
</section>

<!-- Tools Section -->
<section class="tools bg-white text-dark py-5">
  <div class="container text-center">
    <h2>Tools I Use</h2>
    <div class="row mt-4">
      @foreach(['Git', 'Postman', 'VS Code', 'Linux', 'XAMPP', 'Figma', 'Render'] as $tool)
        <div class="col-md-2 col-4 mb-3"><span class="badge bg-secondary py-2 px-3">{{ $tool }}</span></div>
      @endforeach
    </div>
  </div>
</section>

<!-- Projects Section -->
<section class="projects bg-light text-dark py-5">
  <div class="container">
    <h2 class="text-center">Recent Projects</h2>
    <div class="row g-4 mt-4">
      <div class="col-md-4">
        <div class="card">
          <img src="{{ asset('images/project1.jpg') }}" class="card-img-top" alt="GetSetRent">
          <div class="card-body">
            <h5 class="card-title">GetSetRent</h5>
            <p class="card-text">Laravel-based platform boosting performance by 30%. Integrated Stripe and mobile API.</p>
            <a href="/projects#getsetrent" class="btn btn-primary">View More</a>
          </div>
        </div>
      </div>
      <!-- Add more cards -->
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta bg-primary text-white text-center py-5">
  <div class="container">
    <h2>Let’s Work Together!</h2>
    <p>Open to freelance and full-time roles. Let’s connect and build something great.</p>
    <a href="/contact" class="btn btn-light">📬 Contact Me</a>
  </div>
</section>

@endsection
