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
            <h1 class="text-4xl font-extrabold font-serif tracking-tight text-white sm:text-5xl lg:text-6xl">
                Connecting You to Divine Traditions
            </h1>
            <p class="mt-6 max-w-2xl mx-auto text-xl text-gray-200">
                Book verified Pandits and authentic Pooja services with ease and confidence, right from your home.
            </p>
            <div class="mt-10 max-w-sm mx-auto sm:max-w-none sm:flex sm:justify-center">
                <a href="{{ route('packages.index') }}" class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 border border-transparent text-base font-medium rounded-lg shadow-lg text-ss-maroon bg-white hover:bg-gray-100 sm:px-10">
                    Explore Packages
                </a>
                <a href="#" class="w-full sm:w-auto mt-4 sm:mt-0 sm:ml-4 inline-flex items-center justify-center px-8 py-4 border border-transparent text-base font-medium rounded-lg text-white bg-ss-saffron hover:bg-orange-600">
                    Book a Pandit
                </a>
            </div>
        </div>
    </div>

    <!-- You can add other sections like "Featured Poojas" or "Testimonials" here -->

@endsection