@extends('layouts.app')

@section('title', 'resume')
@section('body-class', 'bg-dark text-white')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<style>
    .glass-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        transition: all 0.3s ease;
    }
    .glass-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
    }
    .resume-img {
        max-width: 100%;
        border-radius: 10px;
    }
</style>
<h1 class="text-center fw-bold mb-5" data-aos="fade-down">RESUME</h1>
<div class="container py-2">
    <div class="row justify-content-center mb-4" data-aos="zoom-in">
        <div class="col-md-8">
            <div class="glass-card p-4 text-center">
                <img src="{{ asset('images/resume_pic/resume .png') }}" alt="Resume Image" class="resume-img mb-3">
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true
    });
</script>
@endsection
