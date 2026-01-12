@section('seo')
    @include('frontend.seo', [
        'name' => $message_page_director->seo_title ?? '',
        'title' => $message_page_director->seo_title ?? $message_page_director->title,
        'description' => $message_page_director->meta_description ?? '',
        'keyword' => $message_page_director->meta_keywords ?? '',
        'schema' => $message_page_director->seo_schema ?? '',
        'created_at' => $message_page_director->created_at,
        'updated_at' => $message_page_director->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
    <section class="about-banner">
        @if (!empty($message_page_director->banner_image))
            <img src="{{ asset($message_page_director->banner_image) }}"
                alt="{{ $message_page_director->title ?? 'About Us Background' }}">
        @else
            <img src="{{ asset('frontend/assets/image/japan.jpg') }}" alt="Default Background">
        @endif
        <div class="banner-content">
            <div class="banner-content-inner">
                <h1>{{ $message_page_director->title ?? 'About Us' }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            {{ $message_page_director->title ?? 'About Us' }}
                        </li>
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
                        <img src="{{ asset($message_page_director->image_1) }}" alt="{{ $message_page_director->title }}">
                    </div>
                    <div class="about-background"> </div>
                </div>
                {{-- Content --}}
                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                    <div class="about-content-container">
                        <h3 class="my-2">{{ $message_page_director->title ?? 'About us' }}</h3>

                        {{-- ADD ID HERE --}}
                        <div id="aboutDesc" class="text-css-counter  pt-4">
                            {!! $message_page_director->description !!}
                        </div>

                        {{-- <button id="readMoreBtn" class="btn1 mt-3">
                            <span>Read More <i class="ri-arrow-right-up-line"></i></span>
                        </button> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const btn = document.getElementById("readMoreBtn");
        const desc = document.getElementById("aboutDesc");

        btn.addEventListener("click", function () {
            desc.classList.toggle("line-clamp-14");

            if (desc.classList.contains("line-clamp-14")) {
                btn.innerHTML = '<span>Read More <i class="ri-arrow-right-up-line"></i></span>';
            } else {
                btn.innerHTML = '<span>Read Less <i class="ri-arrow-down-line"></i></span>';
            }
        });
    });
</script>
@endpush
