@extends('layouts.app')

@section('title', 'Home')
@section('body-class', 'bg-dark')

@section('content')
<!-- เรียกใช้ AOS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<div class="container py-5">
    <div class="row align-items-center text-white mt-5">
        <!-- รูปโปรไฟล์ -->
        <div class="col-md-6 text-center mb-4 mb-md-0" data-aos="fade-right">
            <img src="/images/profile.png" 
                 alt="My Profile" 
                 class="rounded-circle shadow-lg" 
                 style="width: 300px; height: 300px; object-fit: cover;">
        </div>

        <!-- ข้อมูลส่วนตัว -->
        <div class="col-md-6 text-center text-md-start" data-aos="fade-left">
            <h3 class="text-light mb-2">Hello World 👋</h3>
            <h1 class="display-5 fw-bold mb-3">I'm Chayanon Muadsong</h1>
            <p class="lead text-white mb-2">Junior Web Developer | Laravel & PHP Enthusiast</p>
            <p class="text-white mb-4">Welcome to my personal Website.</p>                
            <!-- ปุ่มลิงก์ -->
            <div class="d-flex justify-content-center justify-content-md-start">
                <a href="https://github.com/chayanon2001" class="btn btn-outline-light btn-md me-3">GitHub</a>
                <a href="/resume" class="btn btn-outline-light btn-md me-3">Resume</a>
                <a href="/contact" class="btn btn-outline-light btn-md">Contact</a>
            </div>
        </div>
    </div>
</div>

<!-- เรียกใช้สคริปต์ AOS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    // เริ่มต้นการใช้งาน AOS
    AOS.init();
</script>
@endsection
