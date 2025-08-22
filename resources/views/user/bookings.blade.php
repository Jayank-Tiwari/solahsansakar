<x-layouts.app>
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-ss-brown">My Bookings</h1>
        <p class="text-gray-600 mt-1">A complete history of all your pooja bookings.</p>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-md border border-gray-200">
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead>
                    <tr class="border-b bg-gray-50">
                        <th class="p-3 font-semibold text-gray-600">Pooja Service</th>
                        <th class="p-3 font-semibold text-gray-600">Booking Date</th>
                        <th class="p-3 font-semibold text-gray-600">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($bookings as $booking)
                        <tr class="border-b last:border-none hover:bg-gray-50">
                            <td class="p-3 font-semibold text-ss-brown">{{ $booking->pooja->title }}</td>
                            <td class="p-3 text-gray-500">{{ $booking->booking_date->format('l, F j, Y') }}</td>
                            <td class="p-3 capitalize">
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
                        <tr>
                            <td colspan="3" class="p-6 text-center text-gray-500">
                                You have not made any bookings yet.
                                <a href="{{ route('packages.index') }}" class="text-ss-maroon font-semibold hover:underline">Book a Pooja</a>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-6">
            {{ $bookings->links() }}
        </div>
    </div>
</x-layouts.app>