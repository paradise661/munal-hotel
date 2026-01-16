<header id="header" class="fixed top-0 w-full bg-white/95 backdrop-blur-sm z-50 shadow-sm">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex items-center justify-between h-20">
            
            <!-- Logo -->
            <div class="flex items-center space-x-2">
                <div class="w-10 h-10 bg-luxury-gold rounded-full flex items-center justify-center">
                    <i class="fas fa-crown text-white text-lg"></i>
                </div>
                <span class="text-2xl font-playfair font-bold text-luxury-dark">Luxoria</span>
            </div>

            <!-- Desktop Menu -->
            <nav class="hidden lg:flex items-center space-x-8">
                <a href="#" class="text-gray-800 hover:text-luxury-gold font-medium">Home</a>
                <a href="#" class="text-gray-600 hover:text-luxury-gold font-medium">Rooms</a>
                <a href="{{ route('frontend.amenities') }}" class="text-gray-600 hover:text-luxury-gold font-medium">Amenities</a>
                <a href="#" class="text-gray-600 hover:text-luxury-gold font-medium">Dining</a>
                <a href="#" class="text-gray-600 hover:text-luxury-gold font-medium">Events</a>
                <a href="{{ route('frontend.about') }}" class="text-gray-600 hover:text-luxury-gold font-medium">About</a>
                <a href="#" class="text-gray-600 hover:text-luxury-gold font-medium">Contact</a>
            </nav>

            <!-- Buttons -->
            <div class="flex items-center space-x-4">
                <button class="hidden sm:block bg-luxury-gold text-white px-6 py-2 rounded-full font-medium">
                    Book Now
                </button>

                <!-- Toggle Button -->
                <button id="menuToggle" class="lg:hidden">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden lg:hidden flex flex-col gap-4 py-6">
            <a href="#" class="text-gray-800 font-medium">Home</a>
            <a href="#" class="text-gray-800 font-medium">Rooms</a>
            <a href="{{ route('frontend.amenities') }}" class="text-gray-800 font-medium">Amenities</a>
            <a href="#" class="text-gray-800 font-medium">Dining</a>
            <a href="#" class="text-gray-800 font-medium">Events</a>
            <a href="{{ route('frontend.about') }}" class="text-gray-800 font-medium">About</a>
            <a href="#" class="text-gray-800 font-medium">Contact</a>

            <button class="mt-4 bg-luxury-gold text-white py-2 rounded-full">
                Book Now
            </button>
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
