@extends('layouts.app')

@section('content')
<style>
.hero {
    position: relative;
    height: 100vh;
    background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)),
                url('{{ asset('images/welcome.avif') }}') no-repeat center center/cover;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.hero h1 {
    font-size: 3.5rem;
    font-weight: 700;
}

.hero p {
    font-size: 1.25rem;
    margin-top: 15px;
}

.hero .btn {
    padding: 10px 25px;
    font-size: 1.1rem;
    margin: 10px;
    border-radius: 50px;
}

@media (max-width: 768px) {
    .hero h1 {
        font-size: 2.2rem;
    }
    .hero p {
        font-size: 1rem;
    }
}
</style>

<div class="hero">
    <div class="container">
        <img src="https://avatars.githubusercontent.com/u/9919?s=200&v=4" class="rounded-circle mb-4" alt="Profile Image" width="120">
        <h1>Hello, I'm <strong>Rahul Anilkumar</strong></h1>
        <p>Full-Stack Developer | Laravel, PHP, JavaScript, Python</p>
        <div>
            <a href="{{ url('/projects') }}" class="btn btn-primary">💼 View Projects</a>
            <a href="{{ asset('resume/RahulAnilkumar_resume.pdf') }}" class="btn btn-outline-light" target="_blank">📄 Download Resume</a>
        </div>
    </div>
</div>
@endsection
