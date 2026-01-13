<header id="header" class="fixed top-0 w-full bg-white/95 backdrop-blur-sm z-50 shadow-sm">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex items-center justify-between h-20">
            <div class="flex items-center space-x-2">
                <div class="w-10 h-10 bg-luxury-gold rounded-full flex items-center justify-center">
                    <i class="fas fa-crown text-white text-lg"></i>
                </div>
                <span class="text-2xl font-playfair font-bold text-luxury-dark">Luxoria</span>
            </div>
            <nav class="hidden lg:flex items-center space-x-8">
                <a href="#" class="text-gray-800 hover:text-luxury-gold transition-colors font-medium">Home</a>
                <a href="#" class="text-gray-600 hover:text-luxury-gold transition-colors font-medium">Rooms</a>
                <a href="#" class="text-gray-600 hover:text-luxury-gold transition-colors font-medium">Amenities</a>
                <a href="#" class="text-gray-600 hover:text-luxury-gold transition-colors font-medium">Dining</a>
                <a href="#" class="text-gray-600 hover:text-luxury-gold transition-colors font-medium">Events</a>
                <a href="{{route('frontend.about')}}" class="text-gray-600 hover:text-luxury-gold transition-colors font-medium">About</a>
                <a href="#" class="text-gray-600 hover:text-luxury-gold transition-colors font-medium">Contact</a>
            </nav>
            <div class="flex items-center space-x-4">
                <button
                    class="bg-luxury-gold text-white px-6 py-2 rounded-full font-medium hover:bg-opacity-90 transition-colors">
                    Book Now
                </button>
                <button class="lg:hidden">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </div>
</header>