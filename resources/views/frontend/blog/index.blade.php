@section('seo')
    @include('frontend.seo', [
        'name' => $blog_page->seo_title ?? '',
        'title' => $blog_page->seo_title ?? $blog_page->title,
        'description' => $blog_page->meta_description ?? '',
        'keyword' => $blog_page->meta_keywords ?? '',
        'schema' => $blog_page->seo_schema ?? '',
        'created_at' => $blog_page->created_at,
        'updated_at' => $blog_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
<section class="about-banner">
    @if(!empty($blog_page->banner_image))
        <img src="{{ asset( $blog_page->banner_image) }}" alt="{{ $blog_page->title ?? 'About Us Background' }}">
    @else
        <img src="{{ asset('frontend/assets/image/japan.jpg') }}" alt="Default Background">
    @endif
    <div class="banner-content">
        <div class="banner-content-inner">
            <h1>{{ $blog_page->title ?? 'About Us' }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $blog_page->title ?? 'About Us' }}</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
    <section class="py-5"
        style="background-image: url({{ asset('frontend/assets/image/blogbg.png') }});
            background-position:cover; background-repeat:no-repeat;">
        <div class="container">
            <div class="row">
                @foreach ($blog as $blog)
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
        </div>
    </section>
@endsection
