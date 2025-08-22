<x-layouts.app>
    <!-- Header -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-ss-brown">Welcome back, {{ auth()->user()->name }}!</h1>
        <p class="text-gray-600 mt-1">Here's a summary of your spiritual journey with us.</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Main Column -->
        <div class="lg:col-span-2 space-y-8">
            <!-- Upcoming Booking Card -->
            <div class="bg-white p-6 rounded-xl shadow-md border border-gray-200">
                <h2 class="text-xl font-semibold text-ss-maroon mb-4">Your Next Pooja</h2>
                @if ($upcomingBooking)
                    <div class="flex items-center space-x-4">
                        <div class="bg-ss-cream p-3 rounded-lg">
                            <svg class="w-8 h-8 text-ss-saffron" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <div>
                            <p class="font-bold text-lg text-ss-brown">{{ $upcomingBooking->pooja->title }}</p>
                            <p class="text-gray-500">{{ $upcomingBooking->booking_date->format('l, F j, Y') }}</p>
                        </div>
                        <div class="ml-auto text-right">
                             <span class="px-3 py-1 text-sm font-semibold rounded-full capitalize
                                {{ $upcomingBooking->status === 'confirmed' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                {{ $upcomingBooking->status }}
                            </span>
                        </div>
                    </div>
                @else
                    <p class="text-gray-500">You have no upcoming poojas scheduled.</p>
                @endif
            </div>

            <!-- Recent Bookings Table -->
            <div class="bg-white p-6 rounded-xl shadow-md border border-gray-200">
                <h2 class="text-xl font-semibold text-ss-maroon mb-4">Recent Activity</h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <tbody>
                            @forelse ($recentBookings as $booking)
                                <tr class="border-b last:border-none">
                                    <td class="py-3 font-semibold text-ss-brown">{{ $booking->pooja->title }}</td>
                                    <td class="py-3 text-gray-500">{{ $booking->booking_date->format('M d, Y') }}</td>
                                    <td class="py-3 text-right capitalize">
                                        <span class="px-2 py-1 text-xs font-bold rounded-full 
                                            @switch($booking->status)
                                                @case('pending') bg-yellow-100 text-yellow-800 @break
                                                @case('confirmed') bg-green-100 text-green-800 @break
                                                @case('completed') bg-blue-100 text-blue-800 @break
                                                @case('cancelled') bg-red-100 text-red-800 @break
                                            @endswitch">
                                            {{ $booking->status }}
                                        </span>
                                    </td>
                                </tr>
                            @empty
                                <tr><td class="py-3 text-gray-500">No recent bookings found.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Side Column -->
        <div class="space-y-8">
             <!-- Quick Actions -->
            <div class="bg-white p-6 rounded-xl shadow-md border border-gray-200">
                <h2 class="text-xl font-semibold text-ss-maroon mb-4">Quick Actions</h2>
                <div class="space-y-3">
                    <a href="{{ route('packages.index') }}" class="block w-full text-center bg-ss-saffron text-white font-bold py-3 px-4 rounded-lg hover:bg-orange-600 transition duration-300">
                        Book a New Pooja
                    </a>
                     <a href="{{ route('user.bookings') }}" class="block w-full text-center bg-ss-cream text-ss-maroon font-bold py-3 px-4 rounded-lg hover:bg-ss-maroon hover:text-white transition duration-300">
                        View All My Bookings
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>