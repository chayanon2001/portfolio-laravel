@extends('layouts.app')

@section('title', 'Contact')
@section('body-class', 'bg-dark')

@section('content')
<!-- เรียกใช้ AOS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<style>
    .glass-card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border-radius: 15px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        transition: all 0.3s ease;
    }
    .glass-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
    }

    .contact-icon {
        width: 2rem;
        height: 2rem;
        margin-right: 1rem;
    }

    .contact-item {
        display: flex;
        align-items: center;
        margin-bottom: 1.5rem;
    }

    .contact-item a {
        color: white;
        text-decoration: none;
        font-size: 1.2rem;
    }

    .contact-item a:hover {
        text-decoration: underline;
    }

    .header-title {
        font-weight: bold;
        text-transform: uppercase;
    }

    .contact-container {
        max-width: 900px;
        margin: 0 auto;
    }
</style>

<div class="container py-5">
    <div class="row align-items-center text-white mt-5">
        <!-- ข้อมูลการติดต่อ -->
        <div class="col-md-6 text-center text-md-start" data-aos="fade-right">
            <h3 class="text-light mb-2 header-title">Get In Touch</h3>
            <h1 class="display-4 fw-bold mb-4">Contact Me</h1>
        </div>

        <!-- ข้อมูลติดต่อ -->
        <div class="col-md-6" data-aos="fade-left">
            <div class="glass-card p-4">
                <div class="contact-container">
                    <ul class="list-unstyled">
                        <li class="contact-item">
                            <img src="{{ asset('images/icon/line.png') }}" alt="Line" class="contact-icon">
                            <a href="https://line.me/ti/p/@boyzy_chayanon" class="text-white fs-5" target="_blank" style="text-decoration: none;">
                                boyzy_chayanon
                            </a>                            
                        </li>
                        <li class="contact-item">
                            <img src="{{ asset('images/icon/phone.png') }}" alt="Phone" class="contact-icon">
                            <a href="tel:0996167336" style="text-decoration: none;">099-616-7336</a>
                        </li>
                        <li class="contact-item">
                            <img src="{{ asset('images/icon/gmail.png') }}" alt="Email" class="contact-icon">
                            <a href="mailto:chayanon254436@gmail.com" style="text-decoration: none;">chayanon254436@gmail.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- เรียกใช้ FontAwesome สำหรับไอคอน -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<!-- เรียกใช้สคริปต์ AOS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    // เริ่มต้นการทำงานของ AOS
    AOS.init({
        duration: 1000,
        once: true
    });
</script>
@endsection
