@section('seo')
    @include('frontend.seo', [
        'name' => $course_page->seo_title ?? '',
        'title' => $course_page->seo_title ?? $course_page->title,
        'description' => $course_page->meta_description ?? '',
        'keyword' => $course_page->meta_keywords ?? '',
        'schema' => $course_page->seo_schema ?? '',
        'created_at' => $course_page->created_at,
        'updated_at' => $course_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
<section class="about-banner">
    @if(!empty($course_page->banner_image))
        <img src="{{ asset( $course_page->banner_image) }}" alt="{{ $course_page->title ?? 'About Us Background' }}">
    @else
        <img src="{{ asset('frontend/assets/image/japan.jpg') }}" alt="Default Background">
    @endif
    <div class="banner-content">
        <div class="banner-content-inner">
            <h1>{{ $course_page->title ?? 'About Us' }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $course_page->title ?? 'About Us' }}</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<section class="page-bg-color py-5">
    <div class="container">
        <div class="row">
            @foreach ($courses as $course)
                <div class="col-lg-6 py-3">
                    <div class="course-card shadow bg-white">
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
@endsection
