@section('seo')
    @include('frontend.seo', [
        'name' => $coursesingle->seo_title ?? '',
        'title' => $coursesingle->seo_title ?? $coursesingle->title,
        'description' => $coursesingle->meta_description ?? '',
        'keyword' => $coursesingle->meta_keywords ?? '',
        'schema' => $coursesingle->seo_schema ?? '',
        'created_at' => $coursesingle->created_at,
        'updated_at' => $coursesingle->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
    <section class="about-banner">
        @if (!empty($course_page->banner_image))
            <img src="{{ asset($course_page->banner_image) }}" alt="{{ $course_page->title ?? 'Blog Background' }}">
        @else
            <img src="{{ asset('frontend/assets/image/japan.jpg') }}" alt="Default Background">
        @endif
        <div class="banner-content">
            <div class="banner-content-inner">
                <h1>{{ $course_page->title ?? 'Blog' }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center ">
                        <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a
                                href="{{ route('frontend.course') }}">{{ $course_page->title ?? 'Blog' }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $coursesingle->title ?? 'Blog Detail' }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-single-content">
                        <img src="{{ asset($coursesingle->image) }}" alt="">
                        <div class="single-detail py-3">
                            <h6 class="py-2">{{ $coursesingle->title }}</h6>
                            {!! $coursesingle->description !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="recent-posts sticky-sidebar">
                        @if ($courses->isNotEmpty())
                            <h4 class="mb-4">Recent Posts</h4>
                            @foreach ($courses as $recent)
                                <div class="card mb-3 border-0 shadow-sm recent-post-card">
                                    <div class="row g-0">
                                        <div class="col-4">
                                            <img src="{{ asset($recent->image) }}" class="img-fluid rounded-start"
                                                alt="{{ $recent->title }}">
                                        </div>
                                        <div class="col-8">
                                            <div class="card-body p-2">
                                                <small class="text-muted d-block mb-1">
                                                    <i class="ri-calendar-line"></i>
                                                    {{ \Carbon\Carbon::parse($recent->created_at)->format('M d, Y') }}
                                                </small>
                                                <h6 class="card-title mb-1 line-clamp-2">
                                                    <a href="{{ route('frontend.blogsingle', $recent->slug) }}"
                                                        class="text-dark text-decoration-none">
                                                        {{ $recent->title }}
                                                    </a>
                                                    <p>{{ $recent->short_description }}</p>
                                                </h6>
                                                <a class="stretched-link"
                                                    href="{{ route('frontend.blogsingle', $recent->slug) }}"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <div class="advetisement-card">
                            <img src="{{ asset('frontend/assets/image/contact11.jpg') }}" alt="Advertisement"
                                class="ad-bg-img">
                            <div class="ad-content">
                                <h3 class="mb-2">Your Journey Starts with a Conversation.</h3>
                                <p class="mb-2">Contact us today !</p>
                                <div class="social-icons-blog">
                                    @foreach ($socials as $item)
                                        <a href="{{ $item->link }}" target="_blank"><i
                                                class="{{ $item->icon }}"></i></a>
                                    @endforeach
                                </div>
                                <a href="{{ route('frontend.contact') }}" class="btn btn1">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
