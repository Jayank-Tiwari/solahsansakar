@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Left Column -->
            <div class="md:col-span-3 bg-white rounded-xl shadow-lg p-8 flex flex-col">
                <!-- Hero Banner -->
                @if ($pooja->hero_banner_path)
                    <img src="{{ asset('storage/' . $pooja->hero_banner_path) }}" alt="{{ $pooja->title }} Banner"
                        class="w-full h-60 object-cover rounded-xl mb-6 shadow">
                @endif

                <!-- Pooja Name & Description -->
                <h2 class="text-3xl font-serif text-ss-maroon mb-3">
                    {{ app()->getLocale() === 'hi' && $pooja->title_hi ? $pooja->title_hi : $pooja->title }}
                </h2>
                <p class="text-gray-700 leading-relaxed mb-6">
                    {{ app()->getLocale() === 'hi' && $pooja->description_hi ? $pooja->description_hi : $pooja->description }}
                </p>

                <!-- About this Pooja Section (No scroll, improved colors) -->
                @php
                    // Helper to bold phrases starting and ending with *
                    function boldShloka($text) {
                        // Replace *phrase* with <strong>phrase</strong>
                        return preg_replace('/\*(.*?)\*/', '<strong>$1</strong>', e($text));
                    }
                @endphp

                @if(app()->getLocale() === 'hi' && $pooja->brief_description_hi)
                    <div class="mb-8">
                        <h3 class="text-xl font-bold text-ss-maroon mb-3 flex items-center gap-2">
                            <svg class="w-6 h-6 text-ss-saffron" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M12 20h.01" />
                            </svg>
                            {{ __('About this Pooja') }}
                        </h3>
                        <div class="bg-ss-cream border border-ss-saffron/30 rounded-xl shadow p-6 leading-relaxed text-ss-brown text-base">
                            {!! nl2br(boldShloka($pooja->brief_description_hi)) !!}
                        </div>
                    </div>
                @elseif($pooja->brief_description)
                    <div class="mb-8">
                        <h3 class="text-xl font-bold text-ss-maroon mb-3 flex items-center gap-2">
                            <svg class="w-6 h-6 text-ss-saffron" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M12 20h.01" />
                            </svg>
                            {{ __('About this Pooja') }}
                        </h3>
                        <div class="bg-ss-cream border border-ss-saffron/30 rounded-xl shadow p-6 leading-relaxed text-ss-brown text-base">
                            {!! nl2br(boldShloka($pooja->brief_description)) !!}
                        </div>
                    </div>
                @endif
            </div>

            <!-- Right Column -->
            <div class="md:col-span-1 flex flex-col gap-8">
                <!-- Billing Details -->
                <div class="bg-white rounded-xl shadow-lg p-6 md:sticky md:top-20">
                    <h3 class="text-2xl font-bold text-ss-maroon mb-6 border-b pb-3">
                        {{ __('Billing Details') }}
                    </h3>
                    <form action="{{ route('bookings.store') }}" method="POST" class="space-y-5">
                        @csrf
                        <input type="hidden" name="pooja_id" value="{{ $pooja->id }}">

                        <!-- Input fields -->
                        <div>
                            <label for="name" class="block font-semibold text-gray-700 mb-1">
                                {{ __('Name') }}
                            </label>
                            <input type="text" name="name" id="name"
                                class="w-full rounded-lg border-gray-300 focus:ring-2 focus:ring-ss-saffron focus:border-ss-saffron shadow-sm"
                                required>
                        </div>
                        <div>
                            <label for="email" class="block font-semibold text-gray-700 mb-1">
                                {{ __('Email') }}
                            </label>
                            <input type="email" name="email" id="email"
                                class="w-full rounded-lg border-gray-300 focus:ring-2 focus:ring-ss-saffron focus:border-ss-saffron shadow-sm"
                                required>
                        </div>
                        <div>
                            <label for="phone" class="block font-semibold text-gray-700 mb-1">
                                {{ __('Phone') }}
                            </label>
                            <input type="text" name="phone" id="phone"
                                class="w-full rounded-lg border-gray-300 focus:ring-2 focus:ring-ss-saffron focus:border-ss-saffron shadow-sm"
                                required>
                        </div>

                        <!-- Price Summary -->
                        <div class="bg-ss-cream rounded-lg p-4 mt-4 space-y-2 text-sm text-gray-700 border border-ss-saffron/20">
                            <div class="flex justify-between">
                                <span>Pooja Samagri:</span>
                                <span>₹{{ $pooja->price_samagri / 100 }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Pandit Dakshina:</span>
                                <span>₹{{ $pooja->price_pandit_only / 100 }}</span>
                            </div>
                            <div class="border-t pt-3 flex justify-between font-bold text-ss-maroon text-base">
                                <span>Total:</span>
                                <span>₹{{ ($pooja->price_samagri + $pooja->price_pandit_only) / 100 }}</span>
                            </div>
                        </div>

                        <!-- Submit -->
                        <button type="submit"
                            class="w-full bg-gradient-to-r from-ss-saffron to-orange-600 text-white font-semibold py-3 px-4 rounded-lg shadow hover:scale-[1.02] transition">
                            {{ __('Confirm Booking') }}
                        </button>
                    </form>
                </div>

                <!-- Other Poojas -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h4 class="text-lg font-bold text-ss-maroon mb-4">
                        {{ __('Other Poojas') }}
                    </h4>
                    <div class="grid grid-cols-1 gap-4">
                        @foreach ($otherPoojas as $other)
                            <a href="{{ route('bookings.create', ['pooja' => $other->slug]) }}"
                                class="flex items-center gap-4 bg-ss-cream rounded-lg p-3 hover:shadow-md hover:scale-[1.01] transition group border border-ss-saffron/10">
                                <!-- Thumbnail -->
                                <div class="flex-shrink-0 w-16 h-16 rounded-lg overflow-hidden shadow-sm bg-gray-100 flex items-center justify-center">
                                    @if ($other->hero_banner_path && file_exists(public_path('storage/' . $other->hero_banner_path)))
                                        <img src="{{ asset('storage/' . $other->hero_banner_path) }}"
                                            alt="{{ $other->title }}"
                                            class="w-full h-full object-cover group-hover:scale-105 transition">
                                    @else
                                        <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 7v4a1 1 0 001 1h3v4a1 1 0 001 1h4a1 1 0 001-1v-4h3a1 1 0 001-1V7a1 1 0 00-1-1H4a1 1 0 00-1 1z" />
                                        </svg>
                                    @endif
                                </div>

                                <!-- Text Info -->
                                <div class="flex-1 min-w-0">
                                    <div class="font-semibold text-blue-900 truncate">
                                        {{ app()->getLocale() === 'hi' && $other->title_hi ? $other->title_hi : $other->title }}
                                    </div>
                                    <div class="text-sm text-blue-800 truncate max-w-[160px]">
                                        {{ app()->getLocale() === 'hi' && $other->brief_description_hi ? $other->brief_description_hi : $other->brief_description }}
                                    </div>
                                    <div class="text-xs text-gray-500 mt-1">
                                        ₹{{ ($other->price_samagri + $other->price_pandit_only) / 100 }}
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
