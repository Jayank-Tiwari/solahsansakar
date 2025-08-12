<x-layouts.admin>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Manage Users</h1>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="border-b bg-gray-50">
                        <th class="text-left p-3 font-semibold text-gray-600">Name</th>
                        <th class="text-left p-3 font-semibold text-gray-600">Email</th>
                        <th class="text-left p-3 font-semibold text-gray-600">Role</th>
                        <th class="text-center p-3 font-semibold text-gray-600">Total Bookings</th>
                        <th class="text-left p-3 font-semibold text-gray-600">Joined On</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr class="border-b hover:bg-blue-50 transition duration-200">
                            <td class="p-3 font-bold">{{ $user->name }}</td>
                            <td class="p-3 text-gray-600">{{ $user->email }}</td>
                            <td class="p-3">
                                <span class="px-2 py-1 text-xs font-bold rounded-full capitalize
                                    {{ $user->role === 'admin' ? 'bg-ss-saffron text-white' : 'bg-gray-200 text-gray-800' }}">
                                    {{ $user->role }}
                                </span>
                            </td>
                            <td class="p-3 text-center">
                                <span class="px-2 py-1 text-xs font-bold rounded-full bg-blue-100 text-blue-800">{{ $user->bookings_count }}</span>
                            </td>
                            <td class="p-3 text-sm text-gray-500">{{ $user->created_at->format('M d, Y') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="p-6 text-center text-gray-500">
                                No users found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.admin>