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
{{-- <section class="about-banner">
    @if(!empty($contact_page->banner_image))
        <img src="{{ asset( $contact_page->banner_image) }}" alt="{{ $contact_page->title ?? 'About Us Background' }}">
    @else
        <img src="{{ asset('frontend/assets/image/japan.jpg') }}" alt="Default Background">
    @endif
    <div class="banner-content">
        <div class="banner-content-inner">
            <h1>{{ $contact_page->title ?? 'About Us' }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $contact_page->title ?? 'About Us' }}</li>
                </ol>
            </nav>
        </div>
    </div>
    </section>
    <section class="contact-section py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="contact-form">
                        <h4 class="mb-4 fw-bold">Get in Touch with Us</h4>
                        <form  action="" method="post">
                            @csrf
                            @method('post')
                            <input type="text" class="form-control" name="name" placeholder="Input your name">
                            <input type="email" class="form-control" name="email" placeholder="Input your email">
                            <input type="text" class="form-control" name="phone" placeholder="Input your phone">
                            <textarea class="form-control" rows="4" name="message" placeholder="Submit your message request"></textarea>
                            <a href="{{ route('frontend.contact.submit') }}"> <button type="submit" class="btn1 mt-2">Send message</button>
                            </a>
                        </form>
                    </div>
                </div>
                <!-- Right: Contact Details -->
                <div class="col-md-6">
                    <div class="contact-details p-4 rounded-3 border bg-white">
                        <h4 class="fw-bold  mb-3 contacts-title">Contact Information</h4>
                        <!-- Head Office -->
                        <div class="mb-4">
                            <span class="text-uppercase small text-muted">Head Office</span>
                
                            <p class="mb-1 mt-2">
                                <strong>Address:</strong>
                                {{ $settings['contact_location'] ?? 'Adwait Marg, Bagbazar-28, Kathmandu, Nepal' }}
                            </p>
                
                            <p class="mb-1">
                                <strong>Phone:</strong>
                                {{ $settings['contact_phone'] ?? '+977-1-5342055' }}
                            </p>
                
                            <p class="mb-1">
                                <strong>Email:</strong>
                                {{ $settings['contact_email'] ?? '' }}
                            </p>
                
                            <p class="mb-0">
                                <strong>Skype:</strong> munal
                            </p>
                        </div>
                
                        <hr class="my-3">
                
                        <!-- Branch -->
                        <div>
                            <span class="text-uppercase small text-muted">Branch Office</span>
                
                            <p class="mb-1 mt-2">
                                <strong>Rampur Branch</strong>
                            </p>
                
                            <p class="mb-1">
                                Rampur-5, Palpa, Nepal
                            </p>
                
                            <p class="mb-0">
                                <strong>Phone:</strong> 9867251777
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="map-section">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692035.2740613115!2d76.38281235330426!3d25.354446709376614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994fb006ef18791%3A0x3b29923830265e32!2sIdeal%20Educational%20Hub!5e0!3m2!1sen!2snp!4v1754638616744!5m2!1sen!2snp"
            style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Toastify({
                    text: "{{ session('success') }}",
                    duration: 3000,
                    gravity: "top", // top or bottom
                    position: "right", // left, center or right
                    backgroundColor: "#4BB543", // green success color
                    stopOnFocus: true,
                }).showToast();
            });
        </script>
    @endif --}}
    <section id="contact-hero" class="relative h-[600px] flex items-center overflow-hidden mt-20">
        <div class="absolute inset-0">
            <img class="w-full h-full object-cover" src="https://storage.googleapis.com/uxpilot-auth.appspot.com/593ef5e757-ba88a81f433492c82200.png" alt="luxury hotel elegant reception lobby with marble desk, professional concierge staff, sophisticated interior design, warm lighting" />
            <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-transparent"></div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">
            <div class="flex items-center space-x-2 text-white/80 mb-4">
                <a href="#" class="hover:text-luxury-gold transition-colors">Home</a>
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
    <section id="contact-info" class="py-16">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
                <div id="contact-address" class="text-center bg-luxury-cream p-8 rounded-2xl">
                    <div class="w-16 h-16 bg-luxury-gold rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-map-marker-alt text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-playfair font-bold text-luxury-dark mb-3">Visit Us</h3>
                    <p class="text-gray-600 leading-relaxed">
                        {{ $settings['contact_location'] ?? 'Adwait Marg, Bagbazar-28, Kathmandu, Nepal' }}
                    </p>
                </div>
                <div id="contact-phone" class="text-center bg-luxury-cream p-8 rounded-2xl">
                    <div class="w-16 h-16 bg-luxury-gold rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-phone text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-playfair font-bold text-luxury-dark mb-3">Call Us</h3>
                    <p class="text-gray-600 leading-relaxed">
                        {{ $settings['contact_phone'] ?? '+977-1-5342055' }}
                    </p>
                </div>
                <div id="contact-email" class="text-center bg-luxury-cream p-8 rounded-2xl">
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
    <section id="contact-form-section" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                <div id="contact-form-content">
                    <h2 class="text-3xl lg:text-4xl font-playfair font-bold text-luxury-dark mb-6">
                        Send Us a <span class="text-luxury-gold">Message</span>
                    </h2>
                    <p class="text-lg text-gray-600 mb-8">
                        Whether you have questions about our services, need assistance with bookings, or want to plan a special event, our dedicated team is ready to help.
                    </p>
                    <div class="space-y-6">
                        <div id="response-time" class="flex items-start space-x-3">
                            <div class="w-6 h-6 bg-luxury-gold rounded-full flex items-center justify-center mt-1">
                                <i class="fas fa-clock text-white text-xs"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-luxury-dark">Quick Response</h4>
                                <p class="text-gray-600">We respond to all inquiries within 24 hours</p>
                            </div>
                        </div>

                        <div id="multilingual-support" class="flex items-start space-x-3">
                            <div class="w-6 h-6 bg-luxury-gold rounded-full flex items-center justify-center mt-1">
                                <i class="fas fa-globe text-white text-xs"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-luxury-dark">Multilingual Support</h4>
                                <p class="text-gray-600">Available in English, Spanish, French, and Mandarin</p>
                            </div>
                        </div>
                        <div id="personal-assistance" class="flex items-start space-x-3">
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
                <div id="contact-form-container" class="bg-white p-8 rounded-2xl shadow-lg">
                    <form id="contact-form"
                          class="space-y-6"
                          action="{{ route('frontend.contact.submit') }}"
                          method="POST">
                        @csrf
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                            <input type="text" name="name"
                                   value="{{ old('name') }}"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-luxury-gold focus:border-transparent"
                                   placeholder="John Doe">
                            @error('name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                            <input type="email" name="email"
                                   value="{{ old('email') }}"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-luxury-gold focus:border-transparent"
                                   placeholder="john.doe@example.com">
                        </div>
                
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                            <input type="tel" name="phone"
                                   value="{{ old('phone') }}"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-luxury-gold focus:border-transparent"
                                   placeholder="+977 98XXXXXXXX">
                        </div>
                
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                            <textarea rows="5" name="message"
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-luxury-gold focus:border-transparent"
                                      placeholder="Tell us how we can assist you...">{{ old('message') }}</textarea>
                        </div>
                
                        <button type="submit"
                                class="w-full bg-luxury-gold text-white py-3 px-6 rounded-lg font-semibold hover:bg-opacity-90 transition-colors">
                            Send Message
                        </button>
                    </form>
                </div>
                
            </div>
        </div>
    </section>
    <section id="map-section" class="py-16">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-playfair font-bold text-luxury-dark mb-4">
                    Find <span class="text-luxury-gold">Our Location</span>
                </h2>
                <p class="text-lg text-gray-600">Conveniently located in the heart of the city</p>
            </div>
            <div class="bg-gray-200 rounded-2xl h-96 flex items-center justify-center">
                <div class="text-center">
                    <i class="fas fa-map-marked-alt text-4xl text-gray-400 mb-4"></i>
                    <p class="text-gray-600 font-medium">Interactive Map</p>
                    <p class="text-sm text-gray-500">123 Luxury Avenue, Downtown District</p>
                </div>
            </div>
        </div>
    </section>
    <section id="departments" class="py-16 bg-luxury-cream">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-playfair font-bold text-luxury-dark mb-4">
                    Our <span class="text-luxury-gold">Departments</span>
                </h2>
                <p class="text-lg text-gray-600">Connect directly with the right team for your needs</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div id="reservations-dept" class="bg-white p-6 rounded-xl text-center">
                    <div class="w-12 h-12 bg-luxury-gold rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-bed text-white"></i>
                    </div>
                    <h3 class="font-playfair font-bold text-lg mb-2">Reservations</h3>
                    <p class="text-gray-600 mb-4">Book rooms, suites, and special packages</p>
                    <p class="text-sm text-gray-500">Available 24/7</p>
                </div>
                <div id="events-dept" class="bg-white p-6 rounded-xl text-center">
                    <div class="w-12 h-12 bg-luxury-gold rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-calendar-check text-white"></i>
                    </div>
                    <h3 class="font-playfair font-bold text-lg mb-2">Events & Meetings</h3>
                    <p class="text-gray-600 mb-4">Plan your perfect event or business meeting</p>
                    <p class="text-sm text-gray-500">Mon-Fri 9AM-6PM</p>
                </div>
                <div id="concierge-dept" class="bg-white p-6 rounded-xl text-center">
                    <div class="w-12 h-12 bg-luxury-gold rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-concierge-bell text-white"></i>
                    </div>
                    <h3 class="font-playfair font-bold text-lg mb-2">Concierge</h3>
                    <p class="text-gray-600 mb-4">Local recommendations and special arrangements</p>
                    <p class="text-sm text-gray-500">Available 24/7</p>
                </div>
                <div id="dining-dept" class="bg-white p-6 rounded-xl text-center">
                    <div class="w-12 h-12 bg-luxury-gold rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-utensils text-white"></i>
                    </div>
                    <h3 class="font-playfair font-bold text-lg mb-2">Dining</h3>
                    <p class="text-gray-600 mb-4">Restaurant reservations and private dining</p>
                    <p class="text-sm text-gray-500">Daily 6AM-11PM</p>
                </div>
                <div id="spa-dept" class="bg-white p-6 rounded-xl text-center">
                    <div class="w-12 h-12 bg-luxury-gold rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-spa text-white"></i>
                    </div>
                    <h3 class="font-playfair font-bold text-lg mb-2">Spa & Wellness</h3>
                    <p class="text-gray-600 mb-4">Treatment bookings and wellness programs</p>
                    <p class="text-sm text-gray-500">Daily 7AM-9PM</p>
                </div>
                <div id="transport-dept" class="bg-white p-6 rounded-xl text-center">
                    <div class="w-12 h-12 bg-luxury-gold rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-car text-white"></i>
                    </div>
                    <h3 class="font-playfair font-bold text-lg mb-2">Transportation</h3>
                    <p class="text-gray-600 mb-4">Airport transfers and luxury car service</p>
                    <p class="text-sm text-gray-500">Available 24/7</p>
                </div>
            </div>
        </div>
    </section>
    <section id="hours-location" class="py-16">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div id="operating-hours">
                    <h3 class="text-2xl font-playfair font-bold text-luxury-dark mb-6">Operating Hours</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center py-3 border-b border-gray-200">
                            <span class="font-medium">Front Desk</span>
                            <span class="text-gray-600">24/7</span>
                        </div>
                        <div class="flex justify-between items-center py-3 border-b border-gray-200">
                            <span class="font-medium">Concierge</span>
                            <span class="text-gray-600">24/7</span>
                        </div>
                        <div class="flex justify-between items-center py-3 border-b border-gray-200">
                            <span class="font-medium">Aurelius Restaurant</span>
                            <span class="text-gray-600">6:00 AM - 11:00 PM</span>
                        </div>
                        <div class="flex justify-between items-center py-3 border-b border-gray-200">
                            <span class="font-medium">Sky Lounge</span>
                            <span class="text-gray-600">5:00 PM - 2:00 AM</span>
                        </div>
                        <div class="flex justify-between items-center py-3 border-b border-gray-200">
                            <span class="font-medium">Serenity Spa</span>
                            <span class="text-gray-600">7:00 AM - 9:00 PM</span>
                        </div>
                        <div class="flex justify-between items-center py-3 border-b border-gray-200">
                            <span class="font-medium">Fitness Center</span>
                            <span class="text-gray-600">24/7</span>
                        </div>
                        <div class="flex justify-between items-center py-3">
                            <span class="font-medium">Business Center</span>
                            <span class="text-gray-600">24/7</span>
                        </div>
                    </div>
                </div>
                <div id="nearby-attractions">
                    <h3 class="text-2xl font-playfair font-bold text-luxury-dark mb-6">Nearby Attractions</h3>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-map-marker-alt text-luxury-gold mt-1"></i>
                            <div>
                                <h4 class="font-medium">Downtown Shopping District</h4>
                                <p class="text-gray-600 text-sm">2 minutes walk</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-map-marker-alt text-luxury-gold mt-1"></i>
                            <div>
                                <h4 class="font-medium">Financial Center</h4>
                                <p class="text-gray-600 text-sm">5 minutes walk</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-map-marker-alt text-luxury-gold mt-1"></i>
                            <div>
                                <h4 class="font-medium">Art Museum</h4>
                                <p class="text-gray-600 text-sm">10 minutes drive</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-map-marker-alt text-luxury-gold mt-1"></i>
                            <div>
                                <h4 class="font-medium">Convention Center</h4>
                                <p class="text-gray-600 text-sm">15 minutes drive</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-map-marker-alt text-luxury-gold mt-1"></i>
                            <div>
                                <h4 class="font-medium">International Airport</h4>
                                <p class="text-gray-600 text-sm">30 minutes drive</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
