@extends('layouts.app')

@section('content')

<section class="about-section py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4 text-center mb-4">
        <img src="{{ asset('images/profile.png') }}" class="rounded-circle img-fluid shadow about-img" alt="Rahul Anilkumar">
        <h2 class="mt-3">Rahul Anilkumar</h2>
        <p class="text-muted">Full-Stack Developer • Laravel & PHP Specialist</p>
        <a href="{{ asset('resume/RahulAnilkumar_resume.pdf') }}" class="btn btn-primary mt-3" target="_blank">📄 Download Resume</a>
      </div>

      <div class="col-md-8">
        <h3 class="section-heading">About Me</h3>
        <p>
          I'm a highly skilled Full-Stack Developer with 5+ years of experience designing, developing, and optimizing scalable, high-performance web applications. Proven track record in modernizing legacy systems and enhancing speed and user engagement. 
        </p>
        <p>
          Proficient in Laravel, PHP, JavaScript, and Python, with strong skills in API integration, database management, and Agile/Scrum practices.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="highlights bg-light py-5">
  <div class="container">
    <h3 class="text-center mb-4">Highlights</h3>
    <div class="row text-center g-4">
      <div class="col-md-4">
        <div class="highlight-box">
          <h4>🏆 Achievements</h4>
          <ul class="list-unstyled">
            <li>Best Performer Award – 2021, 2023</li>
            <li>Best Improved Performer – 2024</li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <div class="highlight-box">
          <h4>📚 Education</h4>
          <ul class="list-unstyled">
            <li>Postgrad – Computer App. Dev. (2025)</li>
            <li>Postgrad – IT Infrastructure (2024)</li>
            <li>B.Tech – ECE (WES Evaluated)</li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <div class="highlight-box">
          <h4>🔧 Skills</h4>
          <ul class="list-unstyled">
            <li>Laravel, PHP, JS, Python</li>
            <li>MySQL, API, Stripe, Git</li>
            <li>Shopify, Vue.js, Postman</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="timeline-section py-5">
  <div class="container">
    <h3 class="text-center mb-5">Experience Timeline</h3>
    <div class="timeline">
      <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-content">
          <h5>Software Developer – Aipopuli Technologies</h5>
          <small>Oct 2019 – Mar 2024</small>
          <p>Led Laravel migration projects, optimized performance by 30%, and mentored junior devs.</p>
        </div>
      </div>
      <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-content">
          <h5>Full-Stack Developer – GetSetRent, UAE</h5>
          <small>Dec 2019 – Mar 2023</small>
          <p>Built APIs, admin panels, and integrated Stripe in a real estate rental platform.</p>
        </div>
      </div>
      <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-content">
          <h5>Full-Stack Developer – PatientGain, US</h5>
          <small>Feb 2020 – Mar 2024</small>
          <p>Worked on healthcare CRM with Joomla to Laravel migration and developed embeddable tools.</p>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
