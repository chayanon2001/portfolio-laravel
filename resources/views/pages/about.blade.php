@extends('layouts.app')

@section('title', 'About Me')
@section('body-class', 'bg-dark text-white')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        .glass-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .section-title {
            font-size: 2.2rem;
            font-weight: bold;
            color: #ffffff;
            border-bottom: 2px solid #777;
            display: inline-block;
            padding-bottom: 5px;
            margin-bottom: 25px;
        }

        .badge-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .badge-item {
            padding: 0.4rem 1rem;
            border-radius: 30px;
        }

        .badge.bg-light {
            background-color: #f8f9fa;
            color: #343a40;
        }

        .badge.bg-secondary {
            background-color: #6c757d;
            color: #ffffff;
        }

        .badge.bg-dark {
            background-color: #343a40;
            color: #ffffff;
        }

        .badge.bg-info {
            background-color: #17a2b8;
            color: #ffffff;
        }

        .badge.bg-warning {
            background-color: #ffc107;
            color: #212529;
        }
    </style>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h1 class="text-center fw-bold mb-5" data-aos="fade-down">ABOUT</h1>

                {{-- Experience --}}
                <div class="p-4 mb-4 glass-card" data-aos="fade-up">
                    <h3 class="section-title">Experience</h3>
                    <p class="mb-1 text-light-emphasis">2023 - 2024 | 20 November - 8 March</p>
                    <p class="fw-semibold">Umeda Company Limited</p>
                    <ul class="text-white-50">
                        <li>Designed and managed relational databases for web apps</li>
                        <li>Built an efficient search system for a live site</li>
                        <li>Implemented multilingual support across UI</li>
                        <li>Created responsive design using Bootstrap & CSS</li>
                        <li>Developed a visit-tracking system using JavaScript</li>
                    </ul>
                </div>

                {{-- My Skills --}}
                <div class="p-4 mb-4 glass-card" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="section-title">My Skills</h3>

                    {{-- Programming Languages --}}
                    <h4 class="text-light">Programming Languages</h4>
                    <div class="badge-container">
                        @foreach (['HTML', 'CSS', 'JavaScript', 'PHP', 'SQL'] as $skill)
                            <span class="badge bg-light badge-item">{{ $skill }}</span>
                        @endforeach
                    </div>

                    {{-- Frameworks & Libraries --}}
                    <h4 class="text-light mt-4">Frameworks & Libraries</h4>
                    <div class="badge-container">
                        @foreach (['Laravel', 'Bootstrap', 'jQuery', 'AJAX'] as $skill)
                            <span class="badge bg-info badge-item">{{ $skill }}</span>
                        @endforeach
                    </div>

                    {{-- Database --}}
                    <h4 class="text-light mt-4">Database</h4>
                    <div class="badge-container">
                        @foreach (['MySQL'] as $skill)
                            <span class="badge bg-secondary badge-item">{{ $skill }}</span>
                        @endforeach
                    </div>

                    {{-- Tools --}}
                    <h4 class="text-light mt-4">Tools</h4>
                    <div class="badge-container">
                        @foreach (['Git', 'GitHub', 'VS Code', 'Postman', 'XAMPP', 'FileZilla', 'HeidiSQL'] as $tool)
                            <span class="badge bg-dark badge-item">{{ $tool }}</span>
                        @endforeach
                    </div>

                    {{-- Others --}}
                    <h4 class="text-light mt-4">Others</h4>
                    <div class="badge-container">
                        @foreach (['CRUD Operation', 'RESTful API', 'Responsive Web Design', 'Version Control (Git)', 'Deployment (FTP)', 'Local Development (XAMPP)'] as $other)
                            <span class="badge bg-warning badge-item">{{ $other }}</span>
                        @endforeach
                    </div>
                </div>

                {{-- Certificates --}}
                <div class="p-4 mb-4 glass-card" data-aos="fade-up" data-aos-delay="400">
                    <h3 class="section-title text-center">Certificates</h3>
                    <div class="row">
                        <div class="col-md-6 mb-3" data-aos="zoom-in">
                            <img src="{{ asset('images/certificate/certificate_cyber security.jpg') }}" alt="Certificate 1"
                                class="img-fluid rounded shadow w-100" style="height: 300px; object-fit: cover;">
                        </div>
                        <div class="col-md-6 mb-3" data-aos="zoom-in" data-aos-delay="100">
                            <img src="{{ asset('images/certificate/Certificate_SQL.jpg') }}" alt="Certificate 2"
                                class="img-fluid rounded shadow w-100" style="height: 300px; object-fit: cover;">
                        </div>
                        <div class="col-md-6 mb-3" data-aos="zoom-in" data-aos-delay="100">
                            <img src="{{ asset('images/certificate/certificate_umeda.jpg') }}" alt="Certificate 3"
                                class="img-fluid rounded shadow w-100" style="height: 300px; object-fit: cover;">
                        </div>
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
