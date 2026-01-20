@extends('layouts.frontend.master')

@section('seo')
    @include('frontend.seo', [
        'name' => $contact_page->seo_title ?? '',
        'title' => $contact_page->seo_title ?? $contact_page->title,
        'description' => $contact_page->meta_description ?? '',
        'keyword' => $contact_page->meta_keywords ?? '',
        'schema' => $contact_page->seo_schema ?? '',
        'created_at' => $contact_page->created_at,
        'updated_at' => $contact_page->updated_at,
    ])
@endsection
@section('content')
    <section class="relative h-[600px] flex items-center overflow-hidden mt-20" id="contact-hero">
        <div class="absolute inset-0">
            <img class="w-full h-full object-cover"
                src="https://storage.googleapis.com/uxpilot-auth.appspot.com/593ef5e757-ba88a81f433492c82200.png"
                alt="luxury hotel elegant reception lobby with marble desk, professional concierge staff, sophisticated interior design, warm lighting" />
            <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-transparent"></div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">
            <div class="flex items-center space-x-2 text-white/80 mb-4">
                <a class="hover:text-luxury-gold transition-colors" href="{{ route('frontend.home') }}">Home</a>
                <i class="fas fa-chevron-right text-xs"></i>
                <span class="text-white">{{ $contact_page->title ?? 'About Us' }}</span>
            </div>
            <h1 class="text-5xl lg:text-6xl font-playfair font-bold text-white mb-6">
                Get In <span class="text-luxury-gold">Touch</span>
            </h1>
            <p class="text-xl text-white/90 max-w-2xl leading-relaxed">
                We're here to assist you with reservations, inquiries, and creating unforgettable experiences
            </p>
        </div>
    </section>
    <section class="py-16" id="contact-info">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
                <div class="text-center bg-luxury-cream p-8 rounded-2xl" id="contact-address">
                    <div class="w-16 h-16 bg-luxury-gold rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-map-marker-alt text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-playfair font-bold text-luxury-dark mb-3">Visit Us</h3>
                    <p class="text-gray-600 leading-relaxed">
                        {{ $settings['contact_location'] ?? 'Adwait Marg, Bagbazar-28, Kathmandu, Nepal' }}
                    </p>
                </div>
                <div class="text-center bg-luxury-cream p-8 rounded-2xl" id="contact-phone">
                    <div class="w-16 h-16 bg-luxury-gold rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-phone text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-playfair font-bold text-luxury-dark mb-3">Call Us</h3>
                    <p class="text-gray-600 leading-relaxed">
                        {{ $settings['contact_phone'] ?? '+977-1-5342055' }}
                    </p>
                </div>
                <div class="text-center bg-luxury-cream p-8 rounded-2xl" id="contact-email">
                    <div class="w-16 h-16 bg-luxury-gold rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-envelope text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-playfair font-bold text-luxury-dark mb-3">Email Us</h3>
                    <p class="text-gray-600 leading-relaxed">
                        {{ $settings['contact_email'] ?? '' }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-16 bg-gray-50" id="contact-form-section">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                <div id="contact-form-content">
                    <h2 class="text-3xl lg:text-4xl font-playfair font-bold text-luxury-dark mb-6">
                        Send Us a <span class="text-luxury-gold">Message</span>
                    </h2>
                    <p class="text-lg text-gray-600 mb-8">
                        Whether you have questions about our services, need assistance with bookings, or want to plan a
                        special event, our dedicated team is ready to help.
                    </p>
                    <div class="space-y-6 mt-5">
                        <div class="flex items-start space-x-3" id="response-time">
                            <div class="w-6 h-6 bg-luxury-gold rounded-full flex items-center justify-center mt-1">
                                <i class="fas fa-clock text-white text-xs"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-luxury-dark">Quick Response</h4>
                                <p class="text-gray-600">We respond to all inquiries within 24 hours</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3" id="multilingual-support">
                            <div class="w-6 h-6 bg-luxury-gold rounded-full flex items-center justify-center mt-1">
                                <i class="fas fa-globe text-white text-xs"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-luxury-dark">Multilingual Support</h4>
                                <p class="text-gray-600">Available in English, Spanish, French, and Mandarin</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3" id="personal-assistance">
                            <div class="w-6 h-6 bg-luxury-gold rounded-full flex items-center justify-center mt-1">
                                <i class="fas fa-user-tie text-white text-xs"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-luxury-dark">Personal Assistance</h4>
                                <p class="text-gray-600">Dedicated concierge team for personalized service</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-lg" id="contact-form-container">
                    <form class="space-y-6" id="contact-form" action="{{ route('frontend.contact.submit') }}"
                        method="POST">
                        @csrf
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                            <input
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-luxury-gold focus:border-transparent"
                                type="text" name="name" value="{{ old('name') }}" placeholder="John Doe">
                            @error('name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                            <input
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-luxury-gold focus:border-transparent"
                                type="email" name="email" value="{{ old('email') }}"
                                placeholder="john.doe@example.com">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                            <input
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-luxury-gold focus:border-transparent"
                                type="tel" name="phone" value="{{ old('phone') }}" placeholder="+977 98XXXXXXXX">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                            <textarea
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-luxury-gold focus:border-transparent"
                                rows="5" name="message" placeholder="Tell us how we can assist you...">{{ old('message') }}</textarea>
                        </div>

                        <button
                            class="w-full bg-luxury-gold text-white py-3 px-6 rounded-lg font-semibold hover:bg-opacity-90 transition-colors"
                            type="submit">
                            Send Message
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <section class="py-16 bg-luxury-cream" id="map-section">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-playfair font-bold text-luxury-dark mb-4">
                    Find <span class="text-luxury-gold">Our Location</span>
                </h2>
                <p class="text-lg text-gray-600">Conveniently located in the heart of the city</p>
            </div>
            <div class="bg-gray-200 rounded-2xl h-96 flex items-center justify-center">
                <div class="text-center">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4226.455375721654!2d85.30913797602172!3d27.71695942506652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb194c6c187511%3A0x90398cc153754317!2sParadise%20InfoTech%20-%20IT%20Company%20in%20Nepal!5e1!3m2!1sen!2snp!4v1768885307161!5m2!1sen!2snp"
                        width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
