@section('seo')
    @include('frontend.seo', [
        'name' => $settings['homepage_title'] ?? '',
        'title' => $settings['homepage_seo_title'] ?? '',
        'description' => $settings['home_seo_description'] ?? '',
        'keyword' => $settings['homepage_seo_keywords'] ?? '',
        'created_at' => '2024-04-26T08:09:15+00:00',
        'updated_at' => '2024-04-26T10:54:05+00:00',
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
    <section class="main-container">
        <section class="banner-main"
            style="background-image: url({{ $sliders && $sliders->image ? asset($sliders->image) : asset('frontend/assets/image/main.jpg') }});
            height: 100vh;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
            z-index: 1;">
            <div class="banner-content">
                <div class="overlay"></div>
                <div class="inner-content ">
                    <h1>{{ $sliders->title ?? 'Explore the World Through' }}</h1>
                    {{-- <h1 class="text-underline">{{ $sliders->short_ ?? 'Education' }}</h1> --}}
                    <p class="">
                        {!! $sliders->description ??
                            '' !!}
                    </p>
                    <a href="{{ route('frontend.contact') }}" class="btn1">
                        Contact Us
                    </a>
                </div>
            </div>
        </section>
        <section class="counter-section  d-none d-md-block ">
            <div class="container counter-section-inner">
                <div class="row  justify-content-center align-items-center">
                    <div class="col-md-4 col-6 py-2">
                        <div class="homebanner-card p-3 text-center d-flex">
                            <div class="d-flex align-items-center justify-content-center counter-img gap-2">
                                <img src="{{ asset('frontend/assets/image/icon3.png') }}" src='' alt="">
                            </div>
                            <div>
                                <div class="homecard-text-num">
                                    <p class="text-white">{{ $settings['home_counter_scholarship'] ?? '' }}</p>
                                </div>
                                <p class="text-css-counter d-flex align-items-center justify-content-center  text-white">
                                    {{ $settings['home_counter_scholarship_title'] ?? '' }}
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-6 py-2">
                        <div class="homebanner-card p-3 text-center d-flex">
                            <div class=" d-flex align-items-center justify-content-center counter-img gap-2">
                                <img src="{{ asset('frontend/assets/image/hand.png') }}" src='' alt="">
                            </div>
                            <div>
                                <div class="homecard-text-num">
                                    <p class="text-white">{{ $settings['home_counter_students'] ?? '' }}</p>
                                </div>
                                <p class="text-css-counter d-flex align-items-center justify-content-center text-white">
                                    {{ $settings['home_counter_students_title'] ?? '' }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6 py-2">
                        <div class="homebanner-card-1 p-3 text-center d-flex">
                            <div class=" d-flex align-items-center justify-content-center counter-img gap-2">
                                <img src="{{ asset('frontend/assets/image/icon1.png') }}" src='' alt="">
                            </div>
                            <div>
                                <div class="homecard-text-num">
                                    <p class="text-white">{{ $settings['home_counter_enrolled'] ?? '' }} </p>
                                </div>
                                <p class="text-css-counter d-flex align-items-center justify-content-center text-white">
                                    {{ $settings['home_counter_enrolled_title'] ?? '' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    {{-- about us section --}}
    <section class="about-us-section py-5">
        <div class="container">
            <div class="row">
                {{-- Image --}}
                <div class="col-lg-6 d-flex align-items-center justify-content-center position-relative">
                    <div class="about-us-img">
                        <img src="{{ asset($about_us->image_1) }}" alt="{{ $about_us->title }}">
                    </div>
                    <div class="about-background"> </div>
                </div>
                {{-- Content --}}
                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                    <div class="about-content-container">
                        <h3 class="my-2">{{ $about_us->title ?? 'About us' }}</h3>
                        <div class="text-css-counter line-clamp-14 pt-4">
                            {!! $about_us->description !!}
                        </div>
                        <a class="d-flex align-items-center justify-content-md-start justify-content-center "
                            href="{{ route('frontend.about') }}">
                            <button class="btn1">
                                <span>Read More <i class="ri-arrow-right-up-line"></i></span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- service section --}}
    <section class="page-bg-color">
        <div class="container py-5 ">
            <div class="row g-4 d-flex align-items-center justify-content-center">
                <!-- Left column -->
                <div class="col-lg-4 about-content-container">
                    <h1 class="fw-bold mb-3">{{ $settings['services_title'] ?? '' }} </h1>
                    <h1 class="text-underline">{{ $settings['services_subtitle'] ?? '' }}</h1>
                    <p class="pt-3"> {{ $settings['services_description'] ?? '' }}</p>
                    <button class="btn1"><a href="{{ route('frontend.service') }}">View All Services</a></button>
                </div>

                <!-- Right column with cards -->
                {{-- <div class="col-lg-8">
                    <div class="row g-3 ">
                        <div class="col-md-6">
                            <div class="service-card orange-card p-5">
                                <div class="icon mb-2">
                                    <i class="bi bi-chat-dots fs-2"></i>
                                </div>
                                <h5 class="fw-bold">AI-Consulting Offerings</h5>
                                <p>Credibly innovate granular internal or organic sourcesCredibly innovate granular internal
                                    or
                                    organic sources</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="service-card white-card p-5">
                                <div class="icon mb-2">
                                    <i class="bi bi-gear fs-2"></i>
                                </div>
                                <h5 class="fw-bold">Business Process Automation</h5>
                                <p>Credibly innovate granular internal or organic sources</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="service-card white-card p-5">
                                <div class="icon mb-2">
                                    <i class="bi bi-shield-lock fs-2"></i>
                                </div>
                                <h6 class="fw-bold">Secure AI Implementation Strategies</h6>
                                <p>Credibly innovate granular internal or organic sources</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="service-card white-card p-5">
                                <div class="icon mb-2">
                                    <i class="bi bi-diagram-3 fs-2"></i>
                                </div>
                                <h6 class="fw-bold">Knowledge Centralization Solutions</h6>
                                <p>Credibly innovate granular internal or organic sources</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="service-card white-card p-5">
                                <div class="icon mb-2">
                                    <i class="bi bi-cpu fs-2"></i>
                                </div>
                                <h6 class="fw-bold">AI Implementation</h6>
                                <p>Credibly innovate granular internal or organic sources</p>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-8">
                    <div class="row g-3">
                        @foreach ($services as $service)
                            <div class="col-md-6 py-2 position-relative ">
                                <div class="service-card-home p-5">
                                    <div class="icon mb-2">
                                        <img src="{{ asset($service->image_1) }}" alt="">
                                    </div>
                                    <h5 class="fw-bold">{{ $service->title }}</h5>
                                    <p class="line-clamp-3">{{ $service->short_description }}</p>
                                </div>
                                <a class="stretched-link" href="{{ route('frontend.servicesingle', $service->slug) }}"></a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- countrysection --}}
    <section class="py-5"
        style="background-image: url({{ asset('frontend/assets/image/lane4.png') }});
         background-position:cover; background-repeat:no-repeat;">
        <div class="container">
            <div class="about-content-container text-center mb-5">
                <h3 class="my-2 fw-bold">{{ $settings['countries_title'] ?? '' }}</h3>
                <div class="text-css-counter line-clamp-14 pt-3 text-muted">
                    {{ $settings['countries_subtitle'] ?? '' }}
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($countries as $country)
                    <div class="col-lg-6 py-3">
                        <div class="modern-card position-relative overflow-hidden">
                            {{-- Country Image --}}
                            <img src="{{ asset($country->image) }}" alt="{{ $country->title }}" class="bg-img">
                            <div class="overlay-card"></div>
                            {{-- Country Content --}}
                            <div class="card-content text-white p-4 position-relative">
                                <h3 class="fw-bold mb-3">{{ $country->title }}</h3>
                                <div class="mb-4 line-clamp-3">
                                    {!! $country->short_description !!}
                                </div>
                                <a href="{{ route('frontend.abroadsingle', $country->slug) }}">
                                    <button class="btn btn-outline-light rounded-pill px-4">View Detail</button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- courses section --}}
    <section class="page-bg-color py-5">
        <div class="container">
            <div class="about-content-container text-center mb-5">
                <h3 class="my-2 fw-bold">{{ $settings['courses_title'] ?? '' }}</h3>
                <div class="text-css-counter line-clamp-14 pt-3 text-muted">
                    {{ $settings['courses_subtitle'] ?? '' }}
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($courses as $course)
                    <div class="col-lg-6 py-3">
                        <div class="course-card shadow bg-white position-relative">
                            <div class="row">

                                {{-- Course Image --}}
                                <div class="col-lg-5">
                                    <div class="course-img-container">
                                        <img src="{{ asset($course->image) }}" alt="{{ $course->title }}">
                                    </div>
                                </div>

                                {{-- Course Content --}}
                                <div class="col-lg-7">
                                    <div class="course-content-conatinerr py-3">
                                        <h4>{{ $course->title }}</h4>
                                        <p>
                                            {!! \Illuminate\Support\Str::limit(strip_tags($course->description), 180, '...') !!}
                                        </p>
                                    </div>
                                    <a href="{{ route('frontend.coursesingle', $course->slug) }}" class="detail-text">
                                        View Detail <i class="ri-arrow-right-up-line"></i>
                                    </a>
                                </div>

                            </div>
                            <a class="stretched-link" href="{{ route('frontend.coursesingle', $course->slug) }}"></a>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- university section --}}
    <section class="university-section py-5"
        style="background-image: url({{ asset('frontend/assets/image/uni.png') }});
            background-position:cover; background-repeat:no-repeat;">
        <div class="container">
            <div class="about-content-container text-center mb-5">
                <h3 class="my-2 fw-bold">{{ $settings['universities_title'] ?? '' }}</h3>
                <div class="text-css-counter line-clamp-14 pt-3 text-muted">
                    {{ $settings['universities_subtitle'] ?? '' }}
                </div>
            </div>
            <div class="row justify-content-center g-4">
                @foreach ($universities as $university)
                    <div class="col-md-2 col-6">
                        <div class="university-card text-center p-3 shadow-sm">
                            <div class="logo-wrapper mb-2">
                                <img src="{{ asset($university->image) }}" alt="{{ $university->name }}"
                                    class="img-fluid">
                            </div>
                            <h6 class="mt-2">{{ $university->name }}</h6>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    {{-- faq sectionm --}}
    <section class="faq-section page-bg-color">
        <div class="container">
            <div class="about-content-container text-center mb-5">
                <h3 class="my-2 fw-bold">Frequently asked questions</h3>
                <div class="text-css-counter line-clamp-14 pt-3 text-muted">
                    Got Questions? We've Got Answers!
                </div>
            </div>
            <div class="accordion" id="faqAccordion">
                @foreach ($faq as $index => $item)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading{{ $index }}">
                            <button class="accordion-button @if ($index !== 0) collapsed @endif"
                                type="button" data-bs-toggle="collapse" data-bs-target="#faq{{ $index }}">
                                {{ $item->question }}
                            </button>
                        </h2>
                        <div id="faq{{ $index }}"
                            class="accordion-collapse collapse @if ($index === 0) show @endif"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                {!! $item->answer !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    {{-- contact  section --}}
    <section class="contact-section py-5" {{-- style="background-image: url({{ asset('frontend/assets/image/location1.png') }});
         background-position:cover; background-repeat:no-repeat;" --}}>
        <div class="container">
            <div class="about-content-container text-center mb-5">
                <h3 class="my-2 fw-bold">{{ $settings['contact_section_title'] ?? 'Get In Touch' }}</h3>
                <div class="text-css-counter line-clamp-14 pt-3 text-muted">
                    {{ $settings['contact_description'] ?? 'Get In Touch' }}
                </div>
            </div>
            <div class="row g-4 d-flex justify-content-center align-items-center">
                <!-- Right: Contact Details -->
                <div class="col-md-4">
                    <div class="contact-details">
                        {{-- <h4 class="fw-bold">Contact Details</h4> --}}

                        <div class="contact-item">
                            <div class="contact-icon"><i class="fa-solid fa-location-dot"></i></div>
                            <div>
                                <strong>Address</strong>
                                <div>{{ $settings['contact_location'] ?? 'Get In Touch' }}</div>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon"><i class="fa-solid fa-mobile-screen"></i></div>
                            <div>
                                <strong>Mobile</strong>
                                <div>{{ $settings['contact_phone'] ?? 'Get In Touch' }}</div>
                            </div>
                        </div>
                        {{-- <h6 class="mt-4">Social Media</h6>
                        <div class="social-icons">
                            @foreach ($socials as $item)
                                <a href="{{ $item->link }}" target="_blank"><i class="{{ $item->icon }}"></i></a>

                            @endforeach
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contac-img">
                        <img src="{{ asset('frontend/assets/image/contact.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-details">
                        {{-- <h4 class="fw-bold">Contact Details</h4> --}}
                        <div class="contact-item">
                            <div class="contact-icon"><i class="fa-solid fa-clock"></i></div>
                            <div>
                                <strong>Availability</strong>
                                <div>Daily 09 am – 07 pm</div>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon"><i class="fa-solid fa-envelope"></i></div>
                            <div>
                                <strong>Email</strong>
                                <div>{{ $settings['contact_email'] ?? 'Get In Touch' }}</div>
                            </div>
                        </div>
                        {{-- <h6 class="mt-4">Social Media</h6>

                        <div class="social-icons">
                            @foreach ($socials as $item)
                                <a href="{{ $item->link }}" target="_blank"><i class="{{ $item->icon }}"></i></a>

                            @endforeach
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- testimonail section --}}
    <section class="py-5 testimonail-section page-bg-color">
        <div class="container">
            <div class="about-content-container text-center mb-5">
                <h3 class="my-2 fw-bold">{{ $settings['testioninal_title'] ?? '' }}</h3>
                <div class="text-css-counter line-clamp-14 pt-3 text-muted">
                    {{ $settings['testioninal_subtitle'] ?? '' }}
                </div>
            </div>
            <div class="row">
                @foreach ($testimonials as $testimonial)
                    <div class="col-lg-4 py-3">
                        <div class="testimonial-card p-4 shadow rounded-4 position-relative text-center bg-white">
                            <!-- Profile image -->
                            <div class="profile-img position-absolute top-0 start-50 translate-middle">
                                <img src="{{ asset($testimonial->image) }}" alt="{{ $testimonial->name }}"
                                    class="rounded-circle border border-white border-3 shadow"
                                    style="width: 90px; height: 90px; object-fit: cover;">
                            </div>
                            <!-- Stars -->
                            <div class="mt-5 pt-3">
                                <div class="text-warning fs-5 mb-2">
                                    @for ($i = 1; $i <= 5; $i++)
                                        ★
                                    @endfor
                                </div>
                                <h5 class="mb-1 fw-bold">{{ $testimonial->name }}</h5>
                                <div class="text-muted mb-0 small line-clamp-3">
                                    {!! $testimonial->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- blog section --}}
    <section class="py-5"
        style="background-image: url({{ asset('frontend/assets/image/blogbg.png') }});
            background-position:cover; background-repeat:no-repeat;">
        <div class="container">
            <div class="about-content-container text-center mb-5">
                <h3 class="my-2 fw-bold">{{ $settings['blogs_title'] ?? '' }}</h3>
                <div class="text-css-counter line-clamp-14 pt-3 text-muted">
                    {{ $settings['blogs_subtitle'] ?? '' }}
                </div>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6 position-relative py-3" data-aos="fade-up" data-aos-duration="2000">
                        <div class="shadow blog-card bg-white p-2">
                            <div class="">
                                <div class="blog-media-wrapper">
                                    <img class="study-card-img" src="{{ asset($blog->image) }}"
                                        alt="{{ $blog->title }}">
                                </div>
                                <div class="p-3">
                                    <div class="d-flex justify-content-between">
                                        <p class="bodypart-css">
                                            <span><i class="ri-calendar-line offer-icon"></i></span>
                                            {{ \Carbon\Carbon::parse($blog->created_at)->format('Y/m/d') }}
                                        </p>
                                        <p class="book-text">
                                            <span><i class="ri-eye-line offer-icon"></i></span>{{ $blog->views ?? 0 }}
                                        </p>
                                    </div>
                                    <div class="subheadings my-1">
                                        <h3 class="line-clamp-2">{{ $blog->title }}</h3>
                                    </div>
                                    <div class="bodypart-css line-clamp-3 mb-2">
                                        <p>{{ Str::limit(strip_tags($blog->description), 120) }}</p>
                                    </div>
                                </div>
                            </div>
                            <a class="stretched-link" href="{{ route('frontend.blogsingle', $blog->slug) }}"></a>
                        </div>
                    </div>
                @endforeach
            </div>
    </section>
    {{-- Members --}}
    {{-- <section class="py-5 testimonail-section page-bg-color">
        <div class="container">
            <div class="about-content-container text-center mb-5">
                <h3 class="my-2 fw-bold">Members & Certified By</h3>
                <div class="text-css-counter line-clamp-14 pt-3 text-muted">

                </div>
            </div>
            <div class="row">
                @foreach ($members as $member)
                    <div class="col-lg-3 py-3">
                             <img src="{{ $member->image }}" alt="{{ $member->name }}"
                                    class=" border border-white border-3 shadow"
                                    style="width: 200px; height: 90px; object-fit: cover;">
                    </div>
                @endforeach
            </div>
        </div>
    </section> --}}
@endsection
