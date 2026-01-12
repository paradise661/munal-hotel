@section('seo')
    @include('frontend.seo', [
        'name' => $service_page->seo_title ?? '',
        'title' => $service_page->seo_title ?? $service_page->title,
        'description' => $service_page->meta_description ?? '',
        'keyword' => $service_page->meta_keywords ?? '',
        'schema' => $service_page->seo_schema ?? '',
        'created_at' => $service_page->created_at,
        'updated_at' => $service_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')

@section('content')
<section class="about-banner">
    @if(!empty($service_page->banner_image))
        <img src="{{ asset( $service_page->banner_image) }}" alt="{{ $service_page->title ?? 'About Us Background' }}">
    @else
        <img src="{{ asset('frontend/assets/image/japan.jpg') }}" alt="Default Background">
    @endif
    <div class="banner-content">
        <div class="banner-content-inner">
            <h1>{{ $service_page->title ?? 'About Us' }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $service_page->title ?? 'About Us' }}</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<div class="container py-5">
    <div class="row">
        @foreach($services as $service)
            <div class="col-md-6 py-3">
                <div class="service-card-index p-5">
                    <div class="icon mb-2">
                        <img src="{{asset($service->image_1)}}" alt="">
                    </div>
                    <h5 class="fw-bold">{{ $service->title }}</h5>
                    <p>{{ $service->short_description }}</p>
                </div>
                <a class="stretched-link" href="{{ route('frontend.servicesingle', $service->slug) }}"></a>

            </div>
        @endforeach
    </div>
</div>

@endsection
