@section('seo')
    @include('frontend.seo', [
        'name' => $blogsingle->seo_title ?? '',
        'title' => $blogsingle->seo_title ?? $blogsingle->title,
        'description' => $blogsingle->meta_description ?? '',
        'keyword' => $blogsingle->meta_keywords ?? '',
        'schema' => $blogsingle->seo_schema ?? '',
        'created_at' => $blogsingle->created_at,
        'updated_at' => $blogsingle->updated_at,
    ])
    @endsection
@extends('layouts.frontend.master')
@section('content')
<section class="about-banner">
    @if(!empty($blog_page->banner_image))
        <img src="{{ asset($blog_page->banner_image) }}" alt="{{ $blog_page->title ?? 'Blog Background' }}">
    @else
        <img src="{{ asset('frontend/assets/image/japan.jpg') }}" alt="Default Background">
    @endif

    <div class="banner-content">
        <div class="banner-content-inner">
            <h1>{{ $blog_page->title ?? 'Blog' }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('frontend.blog') }}">{{ $blog_page->title ?? 'Blog' }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $blogsingle->title ?? 'Blog Detail' }}</li>
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
                    <img src="{{asset($blogsingle->image)}}" alt="">
                 <div class="single-detail py-3">
                    <h6 class="py-2">{{$blogsingle->title}}</h6>
                    {!! $blogsingle->description!!}
                 </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="recent-posts sticky-sidebar">
                    <h4 class="mb-4">Recent Posts</h4>
                    @foreach ($blogs as $recent)
                        <div class="card mb-3 border-0 shadow-sm recent-post-card">
                            <div class="row g-0">
                                <div class="col-4">
                                    <img src="{{ asset($recent->image) }}" 
                                         class="img-fluid rounded-start" 
                                         alt="{{ $recent->title }}">
                                </div>
                                <div class="col-8">
                                    <div class="card-body p-2">
                                        <small class="text-muted d-block mb-1">
                                            <i class="ri-calendar-line"></i> 
                                            {{ \Carbon\Carbon::parse($recent->created_at)->format('M d, Y') }}
                                        </small>
                                        <h6 class="card-title mb-1 line-clamp-2">
                                            <a href="{{ route('frontend.blogsingle', $recent->slug) }}" class="text-dark text-decoration-none">
                                                {{ $recent->title }}
                                            </a>
                                        </h6>
                                        <a class="stretched-link" href="{{ route('frontend.blogsingle', $recent->slug) }}"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="advetisement-card">
                        <img src="{{ asset('frontend/assets/image/contact11.jpg') }}" alt="Advertisement" class="ad-bg-img">
                        <div class="ad-content">
                            <h3 class="mb-2">Your Journey Starts with a Conversation.</h3>
                            <p class="mb-2"> Contact us today!</p>
                            
                            <div class="social-icons-blog">
                                @foreach ($socials as $item)
                                    <a href="{{ $item->link }}" target="_blank"><i class="{{ $item->icon }}"></i></a>
                                    {{-- <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a> --}}
                                @endforeach
                               
                            </div>
                            <a href="{{route('frontend.contact')}}" class="btn btn1">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection