<x-layouts.admin>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Manage Bookings</h1>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="border-b bg-gray-50">
                        <th class="text-left p-3 font-semibold text-gray-600">User</th>
                        <th class="text-left p-3 font-semibold text-gray-600">Pooja Service</th>
                        <th class="text-left p-3 font-semibold text-gray-600">Booking Date</th>
                        <th class="text-left p-3 font-semibold text-gray-600">Status</th>
                        <th class="text-right p-3 font-semibold text-gray-600">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($bookings as $booking)
                        <tr class="border-b hover:bg-blue-50 transition duration-200">
                            <td class="p-3">
                                <div class="font-bold">{{ $booking->user->name }}</div>
                                <div class="text-sm text-gray-500">{{ $booking->user->email }}</div>
                            </td>
                            <td class="p-3">{{ $booking->pooja->title }}</td>
                            <td class="p-3">{{ $booking->booking_date->format('D, M j, Y') }}</td>
                            <td class="p-3">
                                <form action="{{ route('admin.bookings.update', $booking) }}" method="POST"
                                    class="flex items-center space-x-2">
                                    @csrf
                                    @method('PUT')
                                    <select name="status"
                                        class="block w-full rounded-md border-gray-300 shadow-sm text-sm py-1 focus:ring-2 focus:ring-blue-400">
                                        @foreach (['pending', 'confirmed', 'completed', 'cancelled'] as $status)
                                            <option value="{{ $status }}" class="capitalize"
                                                {{ $booking->status == $status ? 'selected' : '' }}>
                                                {{ ucfirst($status) }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <button type="submit"
                                        class="px-3 py-1 text-xs font-semibold text-white bg-blue-500 rounded-md hover:bg-blue-600 transition duration-200"
                                        title="Update status">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                        Update
                                    </button>
                                </form>
                                <span class="inline-block mt-2 px-2 py-1 text-xs rounded-full font-bold
                                    {{ $booking->status == 'pending' ? 'bg-yellow-100 text-yellow-800' : '' }}
                                    {{ $booking->status == 'confirmed' ? 'bg-blue-100 text-blue-800' : '' }}
                                    {{ $booking->status == 'completed' ? 'bg-green-100 text-green-800' : '' }}
                                    {{ $booking->status == 'cancelled' ? 'bg-red-100 text-red-800' : '' }}">
                                    {{ ucfirst($booking->status) }}
                                </span>
                            </td>
                            <td class="p-3 text-right">
                                <a href="#" class="text-blue-500 hover:underline transition duration-200" title="View details">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0zm6 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                    View
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="p-6 text-center text-gray-500">
                                No bookings found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.admin>
