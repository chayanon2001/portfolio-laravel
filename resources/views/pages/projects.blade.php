@extends('layouts.app')

@section('title', 'Projects')
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
    .card-img-top {
        height: 200px;
        object-fit: cover;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
    }
</style>

<div class="container py-5">
    <h1 class="text-center fw-bold mb-5" data-aos="fade-down">PROJECT</h1>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach ($projects as $index => $project)
            <div class="col" data-aos="zoom-in" data-aos-delay="{{ $index * 100 }}">
                <div class="glass-card h-100 d-flex flex-column">
                    <img src="{{ $project['image'] }}" class="card-img-top" alt="{{ $project['title'] }}">
                    <div class="card-body flex-grow-1 d-flex flex-column p-3">
                        <h5 class="card-title text-white">{{ $project['title'] }}</h5>
                        <p class="card-text text-white-50">{{ $project['description'] }}</p>

                        @if (isset($project['tech']))
                            <p><small class="text-white-50">เทคโนโลยี: {{ $project['tech'] }}</small></p>
                        @endif

                        @if (isset($project['link']))
                            <div class="mt-auto">
                                <a href="{{ $project['link'] }}" class="btn btn-outline-light btn-sm w-100" target="_blank">
                                    ดูเว็บไซต์
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
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
