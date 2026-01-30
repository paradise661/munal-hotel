@section('seo')
    @include('frontend.seo', [
        'name' => $register_banner->seo_title ?? '',
        'title' => $register_banner->seo_title ?? $register_banner->title,
        'description' => $register_banner->meta_description ?? '',
        'keyword' => $register_banner->meta_keywords ?? '',
        'schema' => $register_banner->seo_schema ?? '',
        'created_at' => $register_banner->created_at,
        'updated_at' => $register_banner->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
    <section class="relative h-[400px] flex items-center overflow-hidden mt-20" id="booking-hero">
        <div class="absolute inset-0">
            <img class="w-full h-full object-cover" src="{{ $register_banner->banner_image ?? '' }}"
                alt="luxury hotel elegant reception lobby with marble desk, professional concierge staff, sophisticated interior design, warm lighting" />
            <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-transparent"></div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">
            <div class="flex items-center space-x-2 text-white/80 mb-4">
                <a class="hover:text-luxury-gold transition-colors" href="{{ route('frontend.home') }}">Home</a>
                <i class="fas fa-chevron-right text-xs"></i>
                <span class="text-white">Book Now</span>
            </div>
            <h1 class="text-5xl lg:text-6xl font-playfair font-bold text-white mb-4">
                Reserve Your <span class="text-luxury-gold">Stay</span>
            </h1>
            <p cl="text-xl text-white/90 max-w-2xl">
                Experience luxury and comfort at Luxoria Hotel
            </p>
        </div>
    </section>
    <section class="py-16 bg-gray-50" id="booking-form-section">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-2xl shadow-lg p-8">
                        <h2 class="text-3xl font-playfair font-bold text-luxury-dark mb-6">Booking Details</h2>

                        <form id="booking-form" action="{{ route('frontend.register.submit') }}" method="POST">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Check-in Date *</label>
                                    <div class="relative">
                                        <input
                                            class="date-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-luxury-gold focus:border-transparent"
                                            id="checkin_date" name="checkin_date" type="date">
                                        <i class="fas fa-calendar-alt absolute right-4 top-4 text-gray-400"></i>
                                        @error('checkin_date')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Check-out Date *</label>
                                    <div class="relative">
                                        <input
                                            class="date-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-luxury-gold focus:border-transparent"
                                            id="checkout_date" name="checkout_date" type="date">
                                        <i class="fas fa-calendar-alt absolute right-4 top-4 text-gray-400"></i>
                                        @error('checkout_date')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Adults *</label>
                                    <select
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-luxury-gold focus:border-transparent"
                                        id="adults" name="adults">
                                        <option value="">Select adults</option>
                                        <option value="1">1 Adult</option>
                                        <option value="2">2 Adults</option>
                                        <option value="3">3 Adults</option>
                                        <option value="4">4 Adults</option>
                                    </select>
                                    @error('adults')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Children</label>
                                    <select
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-luxury-gold focus:border-transparent"
                                        id="children" name="children">
                                        <option value="0">0 Children</option>
                                        <option value="1">1 Child</option>
                                        <option value="2">2 Children</option>
                                        <option value="3">3 Children</option>
                                    </select>
                                </div>
                            </div>

                            <div class="border-t border-gray-200 pt-6 mb-6">
                                <h3 class="text-xl font-playfair font-bold text-luxury-dark mb-4">Guest Information</h3>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">First Name *</label>
                                        <input
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-luxury-gold focus:border-transparent"
                                            name="first_name" type="text">
                                        @error('first_name')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">Last Name *</label>
                                        <input
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-luxury-gold focus:border-transparent"
                                            name="last_name" type="text">
                                        @error('last_name')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">Email Address
                                            *</label>
                                        <input
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-luxury-gold focus:border-transparent"
                                            name="email" type="email">
                                        @error('email')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number *</label>
                                        <input
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-luxury-gold focus:border-transparent"
                                            name="phone" type="tel">
                                        @error('phone')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Special Requests</label>
                                    <textarea
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-luxury-gold focus:border-transparent"
                                        name="special_request" rows="4" placeholder="Any special requirements or preferences..."></textarea>
                                </div>
                            </div>

                            <button
                                class="w-full bg-luxury-gold text-white py-4 rounded-lg font-semibold text-lg hover:bg-opacity-90 transition-colors"
                                type="submit">
                                Confirm Booking
                            </button>
                        </form>
                    </div>
                </div>

                <div class="lg:col-span-1">
                    <div class="bg-white rounded-2xl shadow-lg p-8 sticky top-24">
                        <h3 class="text-2xl font-playfair font-bold text-luxury-dark mb-6">Booking Summary</h3>

                        <div class="space-y-4 mb-6 pb-6 border-b border-gray-200">
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600">Check-in</span>
                                <span class="font-semibold text-gray-800" id="summary-checkin">Select date</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600">Check-out</span>
                                <span class="font-semibold text-gray-800" id="summary-checkout">Select date</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600">Guests</span>
                                <span class="font-semibold text-gray-800" id="summary-guests">
                                    0 Adults, 0 Children
                                </span>
                            </div>
                        </div>

                        <div class="bg-luxury-cream p-4 rounded-lg mb-6">
                            <div class="flex items-start space-x-3">
                                <i class="fas fa-info-circle text-luxury-gold mt-1"></i>
                                <div>
                                    <h4 class="font-semibold text-sm text-gray-800 mb-1">Cancellation Policy</h4>
                                    <p class="text-xs text-gray-600">Free cancellation up to 48 hours before check-in.
                                        After that, the first night is non-refundable.</p>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-3">
                            <div class="flex items-center space-x-2 text-sm text-gray-600">
                                <i class="fas fa-check-circle text-luxury-gold"></i>
                                <span>Best Price Guarantee</span>
                            </div>
                            <div class="flex items-center space-x-2 text-sm text-gray-600">
                                <i class="fas fa-check-circle text-luxury-gold"></i>
                                <span>Instant Confirmation</span>
                            </div>
                            <div class="flex items-center space-x-2 text-sm text-gray-600">
                                <i class="fas fa-check-circle text-luxury-gold"></i>
                                <span>24/7 Customer Support</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="py-16 bg-white" id="why-book-direct">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-playfair font-bold text-luxury-dark mb-4">
                    Why Book <span class="text-luxury-gold">Direct?</span>
                </h2>
                <p class="text-lg text-gray-600">Enjoy exclusive benefits when you book directly with us</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="text-center p-6" id="benefit-price">
                    <div class="w-16 h-16 bg-luxury-cream rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-tag text-luxury-gold text-2xl"></i>
                    </div>
                    <h3 class="font-playfair font-bold text-lg mb-2">Best Rate Guaranteed</h3>
                    <p class="text-gray-600 text-sm">Lowest prices available only on our website</p>
                </div>

                <div class="text-center p-6" id="benefit-upgrade">
                    <div class="w-16 h-16 bg-luxury-cream rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-arrow-up text-luxury-gold text-2xl"></i>
                    </div>
                    <h3 class="font-playfair font-bold text-lg mb-2">Complimentary Upgrade</h3>
                    <p class="text-gray-600 text-sm">Subject to availability at check-in</p>
                </div>

                <div class="text-center p-6" id="benefit-wifi">
                    <div class="w-16 h-16 bg-luxury-cream rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-wifi text-luxury-gold text-2xl"></i>
                    </div>
                    <h3 class="font-playfair font-bold text-lg mb-2">Free High-Speed WiFi</h3>
                    <p class="text-gray-600 text-sm">Unlimited internet access throughout your stay</p>
                </div>

                <div class="text-center p-6" id="benefit-cancellation">
                    <div class="w-16 h-16 bg-luxury-cream rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-undo text-luxury-gold text-2xl"></i>
                    </div>
                    <h3 class="font-playfair font-bold text-lg mb-2">Flexible Cancellation</h3>
                    <p class="text-gray-600 text-sm">Free cancellation up to 48 hours before arrival</p>
                </div>
            </div>
        </div>
    </section>

    @if (session('success'))
        <script>
            Toastify({
                text: "{{ session('success') }}",
                duration: 3000,
                gravity: "top",
                position: "right",
                close: true,
                stopOnFocus: true,
                style: {
                    background: "#16a34a" // Tailwind green-600
                }
            }).showToast();
        </script>
    @endif

    @if (session('error'))
        <script>
            Toastify({
                text: "{{ session('error') }}",
                duration: 4000,
                gravity: "top",
                position: "right",
                close: true,
                stopOnFocus: true,
                style: {
                    background: "#dc2626" // Tailwind red-600
                }
            }).showToast();
        </script>
    @endif

    @if (session('message'))
        <script>
            Toastify({
                text: "{{ session('message') }}",
                duration: 3000,
                gravity: "top",
                position: "right",
                close: true,
                stopOnFocus: true,
                style: {
                    background: "#2563eb" // Tailwind blue-600
                }
            }).showToast();
        </script>
    @endif
    <script>
        const checkinInput = document.getElementById('checkin_date');
        const checkoutInput = document.getElementById('checkout_date');
        const adultsSelect = document.getElementById('adults');
        const childrenSelect = document.getElementById('children');

        const summaryCheckin = document.getElementById('summary-checkin');
        const summaryCheckout = document.getElementById('summary-checkout');
        const summaryGuests = document.getElementById('summary-guests');

        function formatDate(date) {
            if (!date) return 'Select date';
            return new Date(date).toLocaleDateString('en-US', {
                day: 'numeric',
                month: 'short',
                year: 'numeric'
            });
        }

        function updateSummary() {
            summaryCheckin.textContent = formatDate(checkinInput.value);
            summaryCheckout.textContent = formatDate(checkoutInput.value);

            const adults = adultsSelect.value || 0;
            const children = childrenSelect.value || 0;

            summaryGuests.textContent = `${adults} Adults, ${children} Children`;
        }

        checkinInput.addEventListener('change', updateSummary);
        checkoutInput.addEventListener('change', updateSummary);
        adultsSelect.addEventListener('change', updateSummary);
        childrenSelect.addEventListener('change', updateSummary);
    </script>
@endsection
