@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Left Column (pooja info) -->
            <div class="md:col-span-3 bg-white rounded-xl shadow-lg p-8 flex flex-col order-2 md:order-none">
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

            <!-- Billing Details (right on desktop, top on mobile) -->
            <div class="md:col-span-1 flex flex-col gap-8 order-1 md:order-none">
                <!-- Billing Details -->
                <div 
                    class="bg-white rounded-xl shadow-lg p-6 md:sticky md:top-20"
                    x-data="{ open: true }"
                >
                    <!-- Mobile Toggle Button -->
                    <button 
                        type="button"
                        class="md:hidden flex items-center justify-between w-full mb-4 px-2 py-2 rounded bg-ss-cream/80 border border-ss-saffron/30 font-bold text-ss-maroon"
                        @click="open = !open"
                    >
                        <span>{{ __('Billing Details') }}</span>
                        <svg :class="{'rotate-180': open}" class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Billing Details Content -->
                    <div x-show="open" x-transition>
                        <h3 class="text-2xl font-bold text-ss-maroon mb-4 md:block hidden">
                            {{ __('Billing Details') }}
                        </h3>
                        <hr class="mb-6 border-ss-cream md:block hidden">
                        <form action="{{ route('bookings.store') }}" method="POST" class="space-y-5" id="bookingForm">
                            @csrf
                            <input type="hidden" name="pooja_id" value="{{ $pooja->id }}">

                            <!-- Booking Type Selection -->
                            <div>
                                <label class="block font-semibold text-gray-700 mb-2">
                                    {{ __('Select Booking Type') }}
                                </label>
                                <div class="flex flex-col gap-3">
                                    <label class="flex items-center bg-ss-cream/80 rounded-lg border border-ss-saffron/30 px-4 py-3 cursor-pointer hover:border-ss-saffron transition">
                                        <input type="radio" name="booking_type" value="full_package" class="form-radio text-ss-saffron"
                                            checked onclick="updateBillSummary()">
                                        <span class="ml-3 font-medium text-gray-900">
                                            {{ __('Pooja Samagri + Pandit') }}
                                            <span class="text-xs text-gray-500 ml-2">₹{{ number_format($pooja->price_pandit_samagri / 100, 2) }}</span>
                                        </span>
                                    </label>
                                    <label class="flex items-center bg-ss-cream/80 rounded-lg border border-ss-saffron/30 px-4 py-3 cursor-pointer hover:border-ss-saffron transition">
                                        <input type="radio" name="booking_type" value="pandit_only" class="form-radio text-ss-saffron"
                                            onclick="updateBillSummary()">
                                        <span class="ml-3 font-medium text-gray-900">
                                            {{ __('Pandit Only') }}
                                            <span class="text-xs text-gray-500 ml-2">₹{{ number_format($pooja->price_pandit_only / 100, 2) }}</span>
                                        </span>
                                    </label>
                                    <label class="flex items-center bg-ss-cream/80 rounded-lg border border-ss-saffron/30 px-4 py-3 cursor-pointer hover:border-ss-saffron transition">
                                        <input type="radio" name="booking_type" value="samagri_only" class="form-radio text-ss-saffron"
                                            onclick="updateBillSummary()">
                                        <span class="ml-3 font-medium text-gray-900">
                                            {{ __('Samagri Only') }}
                                            <span class="text-xs text-gray-500 ml-2">₹{{ number_format($pooja->price_samagri_only / 100, 2) }}</span>
                                        </span>
                                    </label>
                                </div>
                            </div>

                            <!-- Dynamic Price Summary -->
                            <div id="bill-summary" class="bg-ss-cream/80 rounded-lg p-4 mt-4 text-sm text-gray-800 border border-ss-saffron/30 shadow-sm">
                                <div class="flex justify-between items-center font-medium">
                                    <span id="bill-label">{{ __('Package Price') }}:</span>
                                    <span class="font-semibold" id="bill-package">₹{{ number_format($pooja->price_pandit_samagri / 100, 2) }}</span>
                                </div>
                                <div class="flex justify-between items-center font-medium mt-2">
                                    <span>{{ __('Advance Payment (10%)') }}:</span>
                                    <span class="font-bold text-ss-maroon" id="bill-total">₹{{ number_format(($pooja->price_pandit_samagri * 0.10) / 100, 2) }}</span>
                                </div>
                            </div>

                            <!-- Input fields -->
                            <div>
                                <label for="name" class="block font-semibold text-gray-700 mb-1">
                                    {{ __('Name') }}
                                </label>
                                <input type="text" name="name" id="name"
                                    class="w-full rounded-lg border border-ss-cream focus:ring-2 focus:ring-ss-saffron focus:border-ss-saffron shadow-sm bg-ss-cream/50 px-4 py-2"
                                    required autocomplete="name">
                            </div>
                            <div>
                                <label for="phone" class="block font-semibold text-gray-700 mb-1">
                                    {{ __('Phone') }}
                                </label>
                                <input type="tel" name="phone" id="phone"
                                    class="w-full rounded-lg border border-ss-cream focus:ring-2 focus:ring-ss-saffron focus:border-ss-saffron shadow-sm bg-ss-cream/50 px-4 py-2"
                                    pattern="[0-9]{10,}" maxlength="15" inputmode="numeric" required autocomplete="tel">
                            </div>
                            <div>
                                <label for="address" class="block font-semibold text-gray-700 mb-1">
                                    {{ __('Address') }}
                                </label>
                                <textarea name="address" id="address"
                                    class="w-full rounded-lg border border-ss-cream focus:ring-2 focus:ring-ss-saffron focus:border-ss-saffron shadow-sm bg-ss-cream/50 px-4 py-2"
                                    rows="2" required autocomplete="street-address"></textarea>
                            </div>
                            <div>
                                <label for="pincode" class="block font-semibold text-gray-700 mb-1">
                                    {{ __('Pincode') }}
                                </label>
                                <input type="number" name="pincode" id="pincode"
                                    class="w-full rounded-lg border border-ss-cream focus:ring-2 focus:ring-ss-saffron focus:border-ss-saffron shadow-sm bg-ss-cream/50 px-4 py-2"
                                    required autocomplete="postal-code" min="100000" max="999999">
                            </div>

                            <!-- Submit -->
                            <button type="submit"
                                class="w-full bg-gradient-to-r from-ss-saffron to-orange-600 text-white font-semibold py-3 px-4 rounded-lg shadow hover:scale-[1.02] transition text-lg tracking-wide">
                                {{ __('Confirm Booking') }}
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Other Poojas (hidden on mobile, visible on desktop) -->
                <div class="bg-white rounded-xl shadow-lg p-6 hidden md:block">
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

        <!-- Other Poojas (visible only on mobile, hidden on desktop) -->
        <div class="block md:hidden mt-8">
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

    <!-- Add Alpine.js for x-data and x-show functionality -->
    <script src="//unpkg.com/alpinejs" defer></script>

    <script>
        // Prices from backend
        const prices = {
            full_package: {{ $pooja->price_pandit_samagri }},
            pandit_only: {{ $pooja->price_pandit_only }},
            samagri_only: {{ $pooja->price_samagri_only }}
        };

        function updateBillSummary() {
            const selected = document.querySelector('input[name="booking_type"]:checked').value;
            let price = prices[selected] || 0;
            let bookingAmount = price * 0.10; // 10% of selected price
            document.getElementById('bill-package').textContent = '₹' + (price / 100).toFixed(2);
            document.getElementById('bill-total').textContent = '₹' + (bookingAmount / 100).toFixed(2);

            // Update label for clarity
            let label = '';
            if(selected === 'full_package') label = '{{ __("Package Price") }}:';
            if(selected === 'pandit_only') label = '{{ __("Pandit Price") }}:';
            if(selected === 'samagri_only') label = '{{ __("Samagri Price") }}:';
            document.getElementById('bill-label').textContent = label;
        }

        document.addEventListener('DOMContentLoaded', updateBillSummary);
    </script>
@endsection
