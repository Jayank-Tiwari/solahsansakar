
@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-ss-cream pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0">
            <img class="h-full w-full object-cover" src="https://images.unsplash.com/photo-1610700813022-d34bd2539956?ixlib=rb-4.0.3&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1920" alt="Indian Pooja Ceremony">
            <div class="absolute inset-0 bg-ss-maroon/60 mix-blend-multiply"></div>
        </div>
        <div class="relative max-w-7xl mx-auto py-24 text-center">
            <h1 class="text-4xl font-extrabold font-serif tracking-tight text-white sm:text-5xl lg:text-6xl drop-shadow-lg">
                Connecting You to Divine Traditions
            </h1>
            <p class="mt-6 max-w-2xl mx-auto text-xl text-gray-200">
                Book verified Pandits and authentic Pooja services with ease and confidence, right from your home.
            </p>
            <div class="mt-10 max-w-sm mx-auto sm:max-w-none sm:flex sm:justify-center">
                <a href="{{ route('packages.index') }}" class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 border border-transparent text-base font-medium rounded-lg shadow-lg text-ss-maroon bg-white hover:bg-gray-100 sm:px-10 transition-all duration-200">
                    <svg class="w-5 h-5 mr-2 text-ss-maroon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 17l4 4 4-4m-4-5v9" /></svg>
                    Explore Packages
                </a>
                <a href="#" class="w-full sm:w-auto mt-4 sm:mt-0 sm:ml-4 inline-flex items-center justify-center px-8 py-4 border border-transparent text-base font-medium rounded-lg text-white bg-ss-saffron hover:bg-orange-600 transition-all duration-200">
                    <svg class="w-5 h-5 mr-2 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" /></svg>
                    Book a Pandit
                </a>
            </div>
        </div>
    </div>

    <!-- Featured Poojas Section -->
    <section class="max-w-7xl mx-auto px-4 py-16">
        <h2 class="text-3xl font-serif font-bold text-ss-maroon mb-8 text-center">Featured Poojas</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($featuredPoojas as $pooja)
                <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col items-center">
                    @if($pooja->image_path)
                        <img src="{{ asset('storage/' . $pooja->image_path) }}" alt="{{ $pooja->title }}" class="w-24 h-24 rounded-full mb-4 object-cover">
                    @else
                        <div class="w-24 h-24 rounded-full mb-4 bg-gray-200 flex items-center justify-center">
                            <span class="text-gray-400 text-2xl">{{ substr($pooja->title,0,1) }}</span>
                        </div>
                    @endif
                    <h3 class="text-xl font-bold text-ss-maroon mb-2">{{ $pooja->title }}</h3>
                    <p class="text-gray-700 text-center mb-4">{{ $pooja->description }}</p>
                    <a href="#" class="px-4 py-2 bg-ss-saffron text-white rounded hover:bg-orange-600 transition">Book Now</a>
                </div>
            @empty
                <div class="col-span-3 text-center py-12">
                    <p class="text-xl text-ss-brown">No featured poojas available at the moment.</p>
                </div>
            @endforelse
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="bg-white py-16">
        <div class="max-w-5xl mx-auto px-4">
            <h2 class="text-3xl font-serif font-bold text-ss-maroon mb-8 text-center">What Our Users Say</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-ss-cream rounded-lg p-6 shadow">
                    <p class="text-lg italic mb-4">"Booking a Pandit was so easy and the ceremony was perfect! Highly recommend."</p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" class="w-10 h-10 rounded-full mr-3" alt="User">
                        <span class="font-bold text-ss-maroon">Priya Sharma</span>
                    </div>
                </div>
                <!-- Add more testimonials as needed -->
            </div>
        </div>
    </section>
@endsection