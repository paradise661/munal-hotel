@section('seo')
    @include('frontend.seo', [
        'name' => $interviewquestion->seo_title ?? '',
        'title' => $interviewquestion->seo_title ?? $interviewquestion->title,
        'description' => $interviewquestion->meta_description ?? '',
        'keyword' => $interviewquestion->meta_keywords ?? '',
        'schema' => $interviewquestion->seo_schema ?? '',
        'created_at' => $interviewquestion->created_at,
        'updated_at' => $interviewquestion->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
<section class="about-banner">
    @if(!empty($interviewquestion->banner_image))
        <img src="{{ asset( $interviewquestion->banner_image) }}" alt="{{ $interviewquestion->title ?? 'About Us Background' }}">
    @else
        <img src="{{ asset('frontend/assets/image/japan.jpg') }}" alt="Default Background">
    @endif
    <div class="banner-content">
        <div class="banner-content-inner">
            <h1>{{ $interviewquestion->title ?? 'About Us' }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $interviewquestion->title ?? 'About Us' }}</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
{{-- about us section --}}
<section class="about-us-section ">
    <div class="container">
        <div class="row">
            {{-- Content --}}
            <div class="">
                <div class="">
                    <h3 class="my-2">{{ $interviewquestion->title ?? 'About us' }}</h3>
                    <div class="text-css-counter  pt-4">
                        {!! $interviewquestion->description !!}
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
