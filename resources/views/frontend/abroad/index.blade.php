@section('seo')
    @include('frontend.seo', [
        'name' => $abroad_page->seo_title ?? '',
        'title' => $abroad_page->seo_title ?? $abroad_page->title,
        'description' => $abroad_page->meta_description ?? '',
        'keyword' => $abroad_page->meta_keywords ?? '',
        'schema' => $abroad_page->seo_schema ?? '',
        'created_at' => $abroad_page->created_at,
        'updated_at' => $abroad_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
<section class="about-banner">
    @if(!empty($abroad_page->banner_image))
        <img src="{{ asset( $abroad_page->banner_image) }}" alt="{{ $abroad_page->title ?? 'About Us Background' }}">
    @else
        <img src="{{ asset('frontend/assets/image/japan.jpg') }}" alt="Default Background">
    @endif
    <div class="banner-content">
        <div class="banner-content-inner">
            <h1>{{ $abroad_page->title ?? 'About Us' }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $abroad_page->title ?? 'About Us' }}</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
    <section class="py-5"
        style="background-image: url({{ asset('frontend/assets/image/lane4.png') }});
         background-position:cover; background-repeat:no-repeat;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 py-3">
                    <div class="modern-card position-relative overflow-hidden">
                        <img src="{{ asset('frontend/assets/image/aus.jpg') }}" alt="Japan" class="bg-img">
                        <div class="overlay-card"></div>
                        <div class="card-content text-white p-4 position-relative">
                            <h3 class="fw-bold mb-3">Australia</h3>
                            <div class="mb-4 line-clamp-3">Experience the vibrant culture and serene beauty of Japan.
                                Discover timeless traditions and modern marvelsExperience the vibrant culture and serene
                                beauty of Japan. Discover timeless traditions and modern marvelExperience the vibrant
                                culture and serene beauty of Japan. Discover timeless traditions and modern
                                marvelsExperience the vibrant culture and serene beauty of Japan. Discover timeless
                                traditions and modern marvels..</div>
                            <a href="#" class=" "><button class="btn btn-outline-light rounded-pill px-4">View
                                    Detail</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 py-3">
                    <div class="modern-card position-relative overflow-hidden">
                        <img src="{{ asset('frontend/assets/image/japan.jpg') }}" alt="Japan" class="bg-img">
                        <div class="overlay-card"></div>
                        <div class="card-content text-white p-4 position-relative">
                            <h3 class="fw-bold mb-3">Japan</h3>
                            <div class="mb-4 line-clamp-3">Experience the vibrant culture and serene beauty of Japan.
                                Discover timeless traditions and modern marvelsExperience the vibrant culture and serene
                                beauty of Japan. Discover timeless traditions and modern marvelExperience the vibrant
                                culture and serene beauty of Japan. Discover timeless traditions and modern
                                marvelsExperience the vibrant culture and serene beauty of Japan. Discover timeless
                                traditions and modern marvels..</div>
                            <a href="#" class=" "><button class="btn btn-outline-light rounded-pill px-4">View
                                    Detail</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 py-3">
                    <div class="modern-card position-relative overflow-hidden">
                        <img src="{{ asset('frontend/assets/image/aus.jpg') }}" alt="Japan" class="bg-img">
                        <div class="overlay-card"></div>
                        <div class="card-content text-white p-4 position-relative">
                            <h3 class="fw-bold mb-3">Australia</h3>
                            <div class="mb-4 line-clamp-3">Experience the vibrant culture and serene beauty of Japan.
                                Discover timeless traditions and modern marvelsExperience the vibrant culture and serene
                                beauty of Japan. Discover timeless traditions and modern marvelExperience the vibrant
                                culture and serene beauty of Japan. Discover timeless traditions and modern
                                marvelsExperience the vibrant culture and serene beauty of Japan. Discover timeless
                                traditions and modern marvels..</div>
                            <a href="#" class=" "><button class="btn btn-outline-light rounded-pill px-4">View
                                    Detail</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 py-3">
                    <div class="modern-card position-relative overflow-hidden">
                        <img src="{{ asset('frontend/assets/image/japan.jpg') }}" alt="Japan" class="bg-img">
                        <div class="overlay-card"></div>
                        <div class="card-content text-white p-4 position-relative">
                            <h3 class="fw-bold mb-3">Japan</h3>
                            <div class="mb-4 line-clamp-3">Experience the vibrant culture and serene beauty of Japan.
                                Discover timeless traditions and modern marvelsExperience the vibrant culture and serene
                                beauty of Japan. Discover timeless traditions and modern marvelExperience the vibrant
                                culture and serene beauty of Japan. Discover timeless traditions and modern
                                marvelsExperience the vibrant culture and serene beauty of Japan. Discover timeless
                                traditions and modern marvels..</div>
                            <a href="#" class=" "><button class="btn btn-outline-light rounded-pill px-4">View
                                    Detail</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
