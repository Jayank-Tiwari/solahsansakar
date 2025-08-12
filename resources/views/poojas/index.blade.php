@extends('layouts.app')

@section('content')
    <div class="bg-ss-cream py-16">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h1 class="text-4xl lg:text-5xl font-serif text-ss-maroon">Our Pooja Packages</h1>
                <p class="text-lg text-ss-brown mt-2">Services performed by experienced Pandits with authentic samagri.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($poojas as $pooja)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
                        <div class="bg-gray-200 h-48 flex items-center justify-center">
                            <span class="text-gray-500"></span>
                        </div>

                        <div class="p-6 flex-grow">
                            <h2 class="text-2xl font-serif text-ss-maroon mb-2">{{ $pooja->title }}</h2>
                            <p class="text-ss-brown font-sans mb-4 text-base leading-relaxed">{{ $pooja->description }}</p>
                        </div>

                        <div class="px-6 pb-6 bg-gray-50 border-t border-gray-200">
                            <a href="#" class="block w-full text-center bg-ss-saffron text-white font-bold py-3 px-4 rounded-lg hover:bg-orange-600 transition duration-300">
                                Book Now
                            </a>
                            <div class="text-center text-sm text-ss-brown mt-3">
                                <span>Starts at ₹{{ $pooja->price_pandit_only / 100 }}</span>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="md:col-span-2 lg:col-span-3 text-center py-12">
                        <p class="text-xl text-ss-brown">No Pooja packages are available at the moment. Please check back later.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection