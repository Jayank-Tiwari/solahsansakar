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
                    <div
                        class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
                        <div class="bg-gray-200 h-48 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 7v4a1 1 0 001 1h3v4a1 1 0 001 1h4a1 1 0 001-1v-4h3a1 1 0 001-1V7a1 1 0 00-1-1H4a1 1 0 00-1 1z" />
                            </svg>
                        </div>

                        <div class="p-6 flex-grow">
                            <h2 class="text-2xl font-serif text-ss-maroon mb-2">{{ $pooja->title }}</h2>
                            <p class="text-ss-brown font-sans mb-4 text-base leading-relaxed">{{ $pooja->description }}</p>
                        </div>

                        <div class="px-6 pb-6 bg-gray-50 border-t border-gray-200">
                            <a href="{{ route('bookings.create', ['pooja' => $pooja->slug]) }}"
                               class="w-full mt-4 text-center bg-ss-saffron text-white font-bold py-3 px-4 rounded-lg hover:bg-orange-600 transition duration-300 block">
                                Book This Pooja
                            </a>
                            <div class="text-center text-sm text-ss-brown mt-3">
                                <span>Starts at ₹{{ $pooja->price_pandit_only / 100 }}</span>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="md:col-span-2 lg:col-span-3 text-center py-12">
                        <p class="text-xl text-ss-brown">No Pooja packages are available at the moment. Please check back
                            later.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
