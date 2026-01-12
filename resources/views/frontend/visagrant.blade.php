@section('seo')
    @include('frontend.seo', [
        'name' => $visagrantes_page->seo_title ?? '',
        'title' => $visagrantes_page->seo_title ?? $visagrantes_page->title,
        'description' => $visagrantes_page->meta_description ?? '',
        'keyword' => $visagrantes_page->meta_keywords ?? '',
        'schema' => $visagrantes_page->seo_schema ?? '',
        'created_at' => $visagrantes_page->created_at,
        'updated_at' => $visagrantes_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
    <!----page header----->
    <section class="about-banner">
        @if(!empty($visagrantes_page->banner_image))
            <img src="{{ asset( $visagrantes_page->banner_image) }}" alt="{{ $visagrantes_page->title ?? 'About Us Background' }}">
        @else
            <img src="{{ asset('frontend/assets/image/japan.jpg') }}" alt="Default Background">
        @endif
        <div class="banner-content">
            <div class="banner-content-inner">
                <h1>{{ $visagrantes_page->title ?? 'About Us' }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $visagrantes_page->title ?? 'About Us' }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!----page header----->
    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach ($visagranted as $story)
                    <div class="col-lg-4 py-3">
                        <div class="sucess-story-container">
                            <a href="{{ asset($story->image) }}" class="fro-dropzone-image-a fancybox"
                                data-fancybox="gallery" target="_blank">
                                <div class="fancy_image">
                                    <img src="{{ asset($story->image) }}" alt="{{ $story->title ?? 'Success Story' }}"
                                        class="fro-dropzone-image-img">
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Fancybox.bind("[data-fancybox='gallery']", {
                // Customize your FancyBox options here
                infinite: true,
                buttons: ["zoom", "slideShow", "fullScreen", "download", "thumbs", "close"],
            });
        });
    </script>
   
@endsection
