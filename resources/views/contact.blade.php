@extends('layouts.app') <!-- or your layout -->

@section('content')
<div class="container py-5" style="max-width: 600px;">
    <h2 class="mb-4 text-center">Contact Us</h2>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form action="{{ url('/contact') }}" method="POST" novalidate>
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
            <input type="text" 
                   id="name" 
                   name="name" 
                   value="{{ old('name') }}" 
                   class="form-control @error('name') is-invalid @enderror" 
                   placeholder="Your full name" 
                   required
                   aria-describedby="nameHelp">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <div id="nameHelp" class="form-text">Please enter your full name.</div>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
            <input type="email" 
                   id="email" 
                   name="email" 
                   value="{{ old('email') }}" 
                   class="form-control @error('email') is-invalid @enderror" 
                   placeholder="name@example.com" 
                   required
                   aria-describedby="emailHelp">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
            <label for="subject" class="form-label">Subject <span class="text-danger">*</span></label>
            <input type="text" 
                   id="subject" 
                   name="subject" 
                   value="{{ old('subject') }}" 
                   class="form-control @error('subject') is-invalid @enderror" 
                   placeholder="Subject of your message" 
                   required>
            @error('subject')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
            <textarea id="message" 
                      name="message" 
                      rows="5" 
                      class="form-control @error('message') is-invalid @enderror" 
                      placeholder="Write your message here..." 
                      required>{{ old('message') }}</textarea>
            @error('message')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary w-100">Send Message</button>
    </form>
</div>
@endsection
