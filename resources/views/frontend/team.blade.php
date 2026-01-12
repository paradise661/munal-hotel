@section('seo')
    @include('frontend.seo', [
        'name' => $team_page->seo_title ?? '',
        'title' => $team_page->seo_title ?? $team_page->title,
        'description' => $team_page->meta_description ?? '',
        'keyword' => $team_page->meta_keywords ?? '',
        'schema' => $team_page->seo_schema ?? '',
        'created_at' => $team_page->created_at,
        'updated_at' => $team_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
<section class="about-banner">
    @if(!empty($team_page->banner_image))
        <img src="{{ asset( $team_page->banner_image) }}" alt="{{ $team_page->title ?? 'About Us Background' }}">
    @else
        <img src="{{ asset('frontend/assets/image/japan.jpg') }}" alt="Default Background">
    @endif
    <div class="banner-content">
        <div class="banner-content-inner">
            <h1>{{ $team_page->title ?? 'About Us' }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $team_page->title ?? 'About Us' }}</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach ($teams as $team)
                    <div class="col-lg-4 py-3">
                        <div class="team-card">
                            <div class="accent-bar" aria-hidden="true"></div>
                            <div class="d-flex align-items-start gap-3">
                                <img class="team-avatar" src="{{ asset($team->image) }}" alt="{{ $team->name }}">
                                <div class="flex-fill">
                                    <div class="team-name mb-0">{{ $team->name }}</div>
                                    <div class="team-role">{{ $team->position }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section>
@endsection
