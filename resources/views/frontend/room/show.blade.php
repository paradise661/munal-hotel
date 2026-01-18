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
     <section id="amenities-hero" class="relative h-[600px] flex items-center overflow-hidden mt-20">
        <div class="absolute inset-0">
                <img class="w-full h-full object-cover" src="{{ asset($abroad_page->banner_image) }}" />
                <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-transparent"></div>
          </div>    
         <div    class="relative z-10 max-w-7xl mx-auto px-6 w-full">
                <div class="flex items-center space-x-2 text-white/80 mb-4">
                    <a href="#" class="hover:text-luxury-gold transition-colors">Home</a>
                    <i class="fas fa-chevron-right text-xs"></i>
                        <span class="text-white">{{ $abroad_page->title ?? 'About Us' }}</span>
                        </div>
                        <h1 class="text-5xl lg:text-6xl font-playfair font-bold text-white mb-6">
                          <span class="text-luxury-gold">{{ $abroad_page->short_description ?? 'About Us' }}</span>
            </h1>
            <p class="text-xl text-white/90 max-w-2xl leading-relaxed">
                {!! $abroad_page->description ?? 'About Us' !!}
            </p>
        </div>
    </section>
    
    @endsection
