@section('seo')
    @include('frontend.seo', [
        'name' => $abroadstudiesingle->seo_title ?? '',
        'title' => $abroadstudiesingle->seo_title ?? $abroadstudiesingle->title,
        'description' => $abroadstudiesingle->meta_description ?? '',
        'keyword' => $abroadstudiesingle->meta_keywords ?? '',
        'schema' => $abroadstudiesingle->seo_schema ?? '',
        'created_at' => $abroadstudiesingle->created_at,
        'updated_at' => $abroadstudiesingle->updated_at,
    ])
@endsection
    @extends('layouts.frontend.master')
    @section('content')
    <section class="about-banner">
        @if (!empty($abroad_page->banner_image))
            <img src="{{ asset($abroad_page->banner_image) }}" alt="{{ $abroad_page->title ?? 'Blog Background' }}">
        @else
            <img src="{{ asset('frontend/assets/image/japan.jpg') }}" alt="Default Background">
        @endif
        <div class="banner-content">
            <div class="banner-content-inner">
                <h1>{{ $abroad_page->title ?? 'Blog' }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center ">
                        <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a
                                href="{{ route('frontend.abroad') }}">{{ $abroad_page->title ?? 'Blog' }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $abroadstudiesingle->title ?? 'Blog Detail' }}
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
                    <div class="abroad-single-content">
                        <img src="{{asset($abroadstudiesingle->image)}}" alt="">
                     <div class="single-detail py-3">
                        <h6 class="">{{$abroadstudiesingle->title}}</h6>
                        {!! $abroadstudiesingle->description!!}
                     </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="recent-posts sticky-sidebar">
                        @if ($abroads->isNotEmpty())
                        <h4 class="mb-4">Related Posts</h4>
                        @foreach ($abroads as $recent)
                        <div class="advetisement-card my-2 position-relative">
                            <img src="{{ asset($recent->image) }}" alt="Advertisement" class="ad-bg-img">
                            <div class="ad-content">
                                <h3 class="mb-2">{{$recent->title}}</h3>
                                <p class="mb-2"> {{$recent->short_description}}</p>
                                <a class="stretched-link" href="{{ route('frontend.abroadsingle', $recent->slug) }}"></a>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        <div class="advetisement-card my-4">
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
