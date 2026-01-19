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
                <section id="booking-hero" class="relative h-[400px] flex items-center overflow-hidden mt-20">
                    <div class="absolute inset-0">
                        <img class="w-full h-full object-cover" src="https://storage.googleapis.com/uxpilot-auth.appspot.com/d89ae1751a-3f6999cd3e06559f4354.png" alt="luxury hotel reception desk with concierge, elegant lobby, booking counter" />
                            <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/40"></div>
                        </div>
                            <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">
                            <div class="flex items-center space-x-2 text-white/80 mb-4">
                                <a href="{{ route('frontend.home') }}" class="hover:text-luxury-gold transition-colors">Home</a>
                                <i class="fas fa-chevron-right text-xs"></i>
                                    <span class="text-white">Book Now</span>
                                    </div>
                                        <h1 class="text-5xl lg:text-6xl font-playfair font-bold text-white mb-4">
                            Reserve Your <span class="text-luxury-gold">Stay</span>
                                        </h1>
                        <p class="text-xl text-white/90 max-w-2xl">
                            Experience luxury and comfort at Luxoria Hotel
                        </p>
                    </div>
                </section>
                <section id="booking-form-section" class="py-16 bg-gray-50">
                    <div class="max-w-7xl mx-auto px-6">
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                            <div class="lg:col-span-2">
                                <div class="bg-white rounded-2xl shadow-lg p-8">
                                    <h2 class="text-3xl font-playfair font-bold text-luxury-dark mb-6">Booking Details</h2>

                                    <form action="{{ route('frontend.register.submit') }}" id="booking-form" method="POST">
                                        @csrf
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                            <div>
                                                <label class="block text-sm font-semibold text-gray-700 mb-2">Check-in Date *</label>
                                                <div class="relative">
                                                    <input name="checkin_date" type="date" class="date-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-luxury-gold focus:border-transparent" >
                                                    <i class="fas fa-calendar-alt absolute right-4 top-4 text-gray-400"></i>
                                                    @error('checkin_date')
                                                           <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div>
                                                <label class="block text-sm font-semibold text-gray-700 mb-2">Check-out Date *</label>
                                                <div class="relative">
                                                    <input name="checkout_date" type="date" class="date-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-luxury-gold focus:border-transparent" >
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
                                                <select name="adults" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-luxury-gold focus:border-transparent" >
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
                                                <select name="children" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-luxury-gold focus:border-transparent">
                                                    <option value="0">0 Children</option>
                                                    <option value="1">1 Child</option>
                                                    <option value="2">2 Children</option>
                                                    <option value="3">3 Children</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-6">
                                            <label class="block text-sm font-semibold text-gray-700 mb-2">Room Type *</label>
                                            <div class="space-y-3">
                                                <label class="flex items-center p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-luxury-gold transition-colors">
                                                    <input type="radio" name="room_type" value="deluxe" class="text-luxury-gold focus:ring-luxury-gold" >
                                                    <div class="ml-4 flex-1">
                                                        <div class="flex items-center justify-between">
                                                            <span class="font-semibold text-gray-800">Deluxe Room</span>
                                                            <span class="text-luxury-gold font-bold">$299/night</span>
                                                        </div>
                                                        <p class="text-sm text-gray-600 mt-1">King bed, City view, 35 sqm</p>
                                                    </div>
                                                </label>
                                                <label class="flex items-center p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-luxury-gold transition-colors">
                                                    <input type="radio" name="room_type" value="executive" class="text-luxury-gold focus:ring-luxury-gold">
                                                    <div class="ml-4 flex-1">
                                                        <div class="flex items-center justify-between">
                                                            <span class="font-semibold text-gray-800">Executive Suite</span>
                                                            <span class="text-luxury-gold font-bold">$499/night</span>
                                                        </div>
                                                        <p class="text-sm text-gray-600 mt-1">Separate living area, Premium amenities, 55 sqm</p>
                                                    </div>
                                                </label>
                                                <label class="flex items-center p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-luxury-gold transition-colors">
                                                    <input type="radio" name="room_type" value="presidential" class="text-luxury-gold focus:ring-luxury-gold">
                                                    <div class="ml-4 flex-1">
                                                        <div class="flex items-center justify-between">
                                                            <span class="font-semibold text-gray-800">Presidential Suite</span>
                                                            <span class="text-luxury-gold font-bold">$899/night</span>
                                                        </div>
                                                        <p class="text-sm text-gray-600 mt-1">Luxury living, Panoramic views, 85 sqm</p>
                                                    </div>
                                                </label>
                                                @error('room_type')
                                                       <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="border-t border-gray-200 pt-6 mb-6">
                                            <h3 class="text-xl font-playfair font-bold text-luxury-dark mb-4">Guest Information</h3>

                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                                <div>
                                                    <label class="block text-sm font-semibold text-gray-700 mb-2">First Name *</label>
                                                    <input name="first_name" type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-luxury-gold focus:border-transparent" >
                                                    @error('first_name')
                                                           <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div>
                                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Last Name *</label>
                                                    <input name="last_name" type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-luxury-gold focus:border-transparent" >
                                                    @error('last_name')
                                                           <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                                <div>
                                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Email Address *</label>
                                                    <input name="email" type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-luxury-gold focus:border-transparent" >
                                                    @error('email')
                                                           <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div>
                                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number *</label>
                                                    <input name="phone" type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-luxury-gold focus:border-transparent" >
                                                    @error('phone')
                                                           <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-6">
                                                <label class="block text-sm font-semibold text-gray-700 mb-2">Special Requests</label>
                                                <textarea name="special_request" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-luxury-gold focus:border-transparent" placeholder="Any special requirements or preferences..."></textarea>
                                            </div>
                                        </div>

                                        <div class="mb-6">
                <h3 class="text-xl font-playfair font-bold text-luxury-dark mb-4">Add-ons</h3>

                <div class="space-y-3">

                    <label class="flex items-center justify-between p-4 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50">
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                name="add_ons[]"
                                value="Airport Transfer"
                                class="text-luxury-gold focus:ring-luxury-gold rounded"
                            >
                            <span class="ml-3 font-medium text-gray-800">Airport Transfer</span>
                        </div>
                        <span class="text-luxury-gold font-bold">+$50</span>
                    </label>

                    <label class="flex items-center justify-between p-4 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50">
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                name="add_ons[]"
                                value="Breakfast Included"
                                class="text-luxury-gold focus:ring-luxury-gold rounded"
                            >
                            <span class="ml-3 font-medium text-gray-800">Breakfast Included</span>
                        </div>
                        <span class="text-luxury-gold font-bold">+$35/day</span>
                    </label>

                    <label class="flex items-center justify-between p-4 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50">
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                name="add_ons[]"
                                value="Spa Package"
                                class="text-luxury-gold focus:ring-luxury-gold rounded"
                            >
                            <span class="ml-3 font-medium text-gray-800">Spa Package</span>
                        </div>
                        <span class="text-luxury-gold font-bold">+$120</span>
                    </label>

                </div>
            </div>


                                        {{-- <div class="flex items-start mb-6">
                                            <input type="checkbox" class="mt-1 text-luxury-gold focus:ring-luxury-gold rounded" >
                                            <label class="ml-3 text-sm text-gray-600">
                                                I agree to the <a href="#" class="text-luxury-gold hover:underline">terms and conditions</a> and <a href="#" class="text-luxury-gold hover:underline">privacy policy</a>
                                            </label>
                                        </div> --}}

                                        <button type="submit" class="w-full bg-luxury-gold text-white py-4 rounded-lg font-semibold text-lg hover:bg-opacity-90 transition-colors">
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
                                            <span class="font-semibold text-gray-800">Select date</span>
                                        </div>
                                        <div class="flex justify-between text-sm">
                                            <span class="text-gray-600">Check-out</span>
                                            <span class="font-semibold text-gray-800">Select date</span>
                                        </div>
                                        <div class="flex justify-between text-sm">
                                            <span class="text-gray-600">Guests</span>
                                            <span class="font-semibold text-gray-800">0 Adults, 0 Children</span>
                                        </div>
                                        <div class="flex justify-between text-sm">
                                            <span class="text-gray-600">Room Type</span>
                                            <span class="font-semibold text-gray-800">Not selected</span>
                                        </div>
                                    </div>

                                    <div class="space-y-3 mb-6 pb-6 border-b border-gray-200">
                                        <div class="flex justify-between text-sm">
                                            <span class="text-gray-600">Room Rate (per night)</span>
                                            <span class="font-semibold text-gray-800">$0.00</span>
                                        </div>
                                        <div class="flex justify-between text-sm">
                                            <span class="text-gray-600">Number of Nights</span>
                                            <span class="font-semibold text-gray-800">0</span>
                                        </div>
                                        <div class="flex justify-between text-sm">
                                            <span class="text-gray-600">Subtotal</span>
                                            <span class="font-semibold text-gray-800">$0.00</span>
                                        </div>
                                        <div class="flex justify-between text-sm">
                                            <span class="text-gray-600">Add-ons</span>
                                            <span class="font-semibold text-gray-800">$0.00</span>
                                        </div>
                                        <div class="flex justify-between text-sm">
                                            <span class="text-gray-600">Taxes & Fees (12%)</span>
                                            <span class="font-semibold text-gray-800">$0.00</span>
                                        </div>
                                    </div>

                                    <div class="flex justify-between items-center mb-6">
                                        <span class="text-lg font-semibold text-gray-800">Total Amount</span>
                                        <span class="text-2xl font-playfair font-bold text-luxury-gold">$0.00</span>
                                    </div>

                                    <div class="bg-luxury-cream p-4 rounded-lg mb-6">
                                        <div class="flex items-start space-x-3">
                                            <i class="fas fa-info-circle text-luxury-gold mt-1"></i>
                                            <div>
                                                <h4 class="font-semibold text-sm text-gray-800 mb-1">Cancellation Policy</h4>
                                                <p class="text-xs text-gray-600">Free cancellation up to 48 hours before check-in. After that, the first night is non-refundable.</p>
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

                                <div class="bg-luxury-gold rounded-2xl p-6 mt-6 text-white">
                                    <div class="flex items-center space-x-3 mb-4">
                                        <i class="fas fa-gift text-3xl"></i>
                                        <div>
                                            <h4 class="font-playfair font-bold text-lg">Special Offer</h4>
                                            <p class="text-sm opacity-90">Book 3+ nights</p>
                                        </div>
                                    </div>
                                    <p class="text-sm mb-4">Get 15% off on your total booking when you stay for 3 nights or more!</p>
                                    <div class="text-xs opacity-75">Use code: STAY3</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="why-book-direct" class="py-16 bg-white">
                    <div class="max-w-7xl mx-auto px-6">
                        <div class="text-center mb-12">
                            <h2 class="text-3xl font-playfair font-bold text-luxury-dark mb-4">
                                Why Book <span class="text-luxury-gold">Direct?</span>
                            </h2>
                            <p class="text-lg text-gray-600">Enjoy exclusive benefits when you book directly with us</p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                            <div id="benefit-price" class="text-center p-6">
                                <div class="w-16 h-16 bg-luxury-cream rounded-full flex items-center justify-center mx-auto mb-4">
                                    <i class="fas fa-tag text-luxury-gold text-2xl"></i>
                                </div>
                                <h3 class="font-playfair font-bold text-lg mb-2">Best Rate Guaranteed</h3>
                                <p class="text-gray-600 text-sm">Lowest prices available only on our website</p>
                            </div>

                            <div id="benefit-upgrade" class="text-center p-6">
                                <div class="w-16 h-16 bg-luxury-cream rounded-full flex items-center justify-center mx-auto mb-4">
                                    <i class="fas fa-arrow-up text-luxury-gold text-2xl"></i>
                                </div>
                                <h3 class="font-playfair font-bold text-lg mb-2">Complimentary Upgrade</h3>
                                <p class="text-gray-600 text-sm">Subject to availability at check-in</p>
                            </div>

                            <div id="benefit-wifi" class="text-center p-6">
                                <div class="w-16 h-16 bg-luxury-cream rounded-full flex items-center justify-center mx-auto mb-4">
                                    <i class="fas fa-wifi text-luxury-gold text-2xl"></i>
                                </div>
                                <h3 class="font-playfair font-bold text-lg mb-2">Free High-Speed WiFi</h3>
                                <p class="text-gray-600 text-sm">Unlimited internet access throughout your stay</p>
                            </div>

                            <div id="benefit-cancellation" class="text-center p-6">
                                <div class="w-16 h-16 bg-luxury-cream rounded-full flex items-center justify-center mx-auto mb-4">
                                    <i class="fas fa-undo text-luxury-gold text-2xl"></i>
                                </div>
                                <h3 class="font-playfair font-bold text-lg mb-2">Flexible Cancellation</h3>
                                <p class="text-gray-600 text-sm">Free cancellation up to 48 hours before arrival</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="payment-security" class="py-16 bg-gray-50">

                                               <div class="max-w-7xl mx-auto px-6">
                        <div class="bg-white rounded-2xl p-8 lg:p-12">
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                                <div>
                                    <h2 class="text-3xl font-playfair font-bold text-luxury-dark mb-6">
                                        Secure <span class="text-luxury-gold">Payment</span>
                                    </h2>
                                    <p class="text-gray-600 mb-6">Your payment information is protected with industry-standard encryption and security measures. We accept all major payment methods for your convenience.</p>

                                    <div class="space-y-4">
                                        <div class="flex items-center space-x-3">
                                            <i class="fas fa-shield-alt text-luxury-gold text-xl"></i>
                                            <span class="text-gray-700">SSL Encrypted Transactions</span>
                                        </div>
                                        <div class="flex items-center space-x-3">
                                                <i class="fas fa-lock text-luxury-gold text-xl"></i>
                                                                    <span class="text-gray-700">PCI DSS Compliant</span>
                                            </div>
                                            <div class="flex items-center space-x-3">
                                                <i class="fas fa-check-circle text-luxury-gold text-xl"></i>
                                                <span class="text-gray-700">No Hidden Fees</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <h3 class="font-semibold text-gray-800 mb-4">We Accept</h3>
                                        <div class="grid grid-cols-4 gap-4">
                                            <div class="bg-gray-50 p-4 rounded-lg flex items-center justify-center">
                                                <i class="fab fa-cc-visa text-4xl text-gray-600"></i>
                                         </di   v>
                                            <div class="bg-gray-50 p-4 rounded-lg flex items-center justify-center">
                                                <i class="fab fa-cc-mastercard text-4xl text-gray-600"></i>
                                            </div>
                                                <div class="bg-gray-50 p-4 rounded-lg flex items-center justify-center">
                                                        <i class="fab fa-cc-amex text-4xl text-gray-600"></i>
                                                        </div>
                                                            <div class="bg-gray-50 p-4 rounded-lg flex items-center justify-center">
                                                                    <i class="fab fa-cc-paypal text-4xl text-gray-600"></i>
                                        </div>
                                    </div>
                                </div>
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



@endsection
