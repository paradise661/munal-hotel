<footer class="bg-luxury-dark text-white py-16" id="footer">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
            <div>
                <img src="{{ $settings['site_footer_logo'] }}" alt="">
                <p class="text-gray-400 mb-6 mt-3">
                    {{ $settings['site_information'] ?? 'Adwait Marg, Bagbazar-28, Kathmandu, Nepal' }}
                </p>
                <div class="flex space-x-4 mt-4 mt-2">
                    @foreach ($socials as $social)
                        <a class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-luxury-gold transition-colors"
                            href="{{ $social->link }}">
                            <i class="{{ $social->icon }}"></i>
                        </a>
                    @endforeach
                    {{-- <a
                        class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-luxury-gold transition-colors"
                        href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-luxury-gold transition-colors"
                        href="#">
                        <i class="fab fa-twitter"></i>
                    </a> --}}
                </div>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-6">Quick Links</h3>
                <ul class="space-y-3">
                    <li><a class="text-gray-400 hover:text-luxury-gold transition-colors"
                            href="{{ route('frontend.about') }}">About Us</a></li>
                    <li><a class="text-gray-400 hover:text-luxury-gold transition-colors"
                            href="{{ route('frontend.rooms') }}">Rooms &
                            Suites</a></li>
                    <li><a class="text-gray-400 hover:text-luxury-gold transition-colors"
                            href="{{ route('frontend.dinning') }}">Dining</a></li>
                    {{-- <li><a href="#" class="text-gray-400 hover:text-luxury-gold transition-colors">Spa &
                            Wellness</a></li> --}}
                    <li><a class="text-gray-400 hover:text-luxury-gold transition-colors"
                            href="{{ route('frontend.event') }}">Events</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-6">Our Rooms</h3>
                @if (!empty($footer_rooms) && $footer_rooms->count())
                    <ul class="space-y-3">
                        @foreach ($footer_rooms as $room)
                            <li>
                                <a class="text-gray-400 hover:text-luxury-gold transition-colors"
                                    href="{{ route('frontend.singleroom', $room->slug) }}">
                                    {{ $room->title ?? '' }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-gray-400 text-sm">No services available</p>
                @endif
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-6">Contact Info</h3>
                <div class="space-y-4">
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-map-marker-alt text-luxury-gold mt-1"></i>
                        <span class="text-gray-400">
                            {{ $settings['contact_location'] ?? 'Adwait Marg, Bagbazar-28, Kathmandu, Nepal' }}
                        </span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-phone text-luxury-gold"></i>
                        <span class="text-gray-400">
                            {{ $settings['contact_phone'] ?? '+977-1-5342055' }}</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-envelope text-luxury-gold"></i>
                        <span class="text-gray-400">
                            {{ $settings['contact_email'] ?? '' }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-t border-gray-800 pt-8 text-center">
            <p class="text-gray-400"> {{ $settings['site_copyright'] ?? '' }}</p>
        </div>
    </div>
</footer>
