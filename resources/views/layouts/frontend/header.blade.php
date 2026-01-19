<header class="fixed top-0 w-full bg-white/95 backdrop-blur-sm z-50 shadow-sm" id="header"
    style="background-color: #f6f2d9">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <div class="flex items-center space-x-2">
                <a class="rounded-full flex items-center justify-center" href="{{ url('/') }}">
                    <img src="{{ $settings['site_main_logo'] }}" style="height: 60px" alt="Site Logo">
                </a>
            </div>
            <!-- Desktop Menu -->
            <nav class="hidden lg:flex items-center space-x-8">
                <a class="text-gray-800 hover:text-luxury-gold font-medium" href="{{ route('frontend.home') }}">Home</a>
                <a class="text-gray-600 hover:text-luxury-gold font-medium"
                    href="{{ route('frontend.about') }}">About</a>
                <a class="text-gray-600 hover:text-luxury-gold font-medium"
                    href="{{ route('frontend.rooms') }}">Rooms</a>
                <a class="text-gray-600 hover:text-luxury-gold font-medium"
                    href="{{ route('frontend.amenities') }}">Amenities</a>
                <a class="text-gray-600 hover:text-luxury-gold font-medium"
                    href="{{ route('frontend.event') }}">Events</a>
                <a class="text-gray-600 hover:text-luxury-gold font-medium"
                    href="{{ route('frontend.gallery') }}">Gallery</a>

                <a class="text-gray-600 hover:text-luxury-gold font-medium"
                    href="{{ route('frontend.contact') }}">Contact</a>
            </nav>
            <!-- Buttons -->
            <div class="flex items-center space-x-4">
                <a href="{{ route('frontend.register') }}">
                    <button class="hidden sm:block bg-luxury-gold text-white px-6 py-2 rounded-full font-medium">
                        Book Now
                    </button>
                </a>
                <!-- Toggle Button -->
                <button class="lg:hidden" id="menuToggle">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div class="hidden lg:hidden flex flex-col gap-4 py-6" id="mobileMenu">
            <a class="text-gray-800 font-medium" href="{{ route('frontend.home') }}">Home</a>
            <a class="text-gray-800 font-medium" href="{{ route('frontend.rooms') }}">Rooms</a>
            <a class="text-gray-800 font-medium" href="{{ route('frontend.amenities') }}">Amenities</a>
            <a class="text-gray-800 font-medium" href="{{ route('frontend.dinning') }}">Dining</a>
            <a class="text-gray-800 font-medium" href="{{ route('frontend.event') }}">Events</a>
            <a class="text-gray-800 font-medium" href="{{ route('frontend.gallery') }}">Gallery</a>
            <a class="text-gray-800 font-medium" href="{{ route('frontend.about') }}">About</a>
            <a class="text-gray-800 font-medium" href="{{ route('frontend.contact') }}">Contact</a>
            <a href="{{ route('frontend.register') }}">
                <button class="mt-4 bg-luxury-gold text-white py-2 rounded-full">
                    Book Now
                </button>
            </a>
        </div>
    </div>
</header>
<script>
    const toggleBtn = document.getElementById('menuToggle');
    const mobileMenu = document.getElementById('mobileMenu');

    toggleBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
