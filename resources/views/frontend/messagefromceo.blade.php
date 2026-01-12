@section('seo')
    @include('frontend.seo', [
        'name' => $message_page->seo_title ?? '',
        'title' => $message_page->seo_title ?? $message_page->title,
        'description' => $message_page->meta_description ?? '',
        'keyword' => $message_page->meta_keywords ?? '',
        'schema' => $message_page->seo_schema ?? '',
        'created_at' => $message_page->created_at,
        'updated_at' => $message_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
<section class="about-banner">
    @if(!empty($message_page->banner_image))
        <img src="{{ asset( $message_page->banner_image) }}" alt="{{ $message_page->title ?? 'About Us Background' }}">
    @else
        <img src="{{ asset('frontend/assets/image/japan.jpg') }}" alt="Default Background">
    @endif
    <div class="banner-content">
        <div class="banner-content-inner">
            <h1>{{ $message_page->title ?? 'About Us' }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $message_page->title ?? 'About Us' }}</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
{{-- about us section --}}
<section class="about-us-section py-5">
    <div class="container">
        <div class="row">
            {{-- Image --}}
            <div class="col-lg-6 d-flex align-items-center justify-content-center position-relative">
                <div class="about-us-img">
                    <img src="{{ asset($message_page->image_1) }}" alt="{{ $message_page->title }}">
                </div>
                <div class="about-background"> </div>
            </div>
            {{-- Content --}}
            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <div class="about-content-container">
                    <h3 class="my-2">{{ $message_page->title ?? 'About us' }}</h3>
                    <div class="text-css-counter pt-4">
                        {!! $message_page->description !!}
                    </div>
                    <a class="d-flex align-items-center justify-content-md-start justify-content-center "
                        href="{{ route('frontend.about') }}">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
