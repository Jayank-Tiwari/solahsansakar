<x-layouts.admin>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Manage Pooja Packages</h1>
        <a href="{{ route('admin.poojas.create') }}"
            class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-lg">
            + Add New Pooja
        </a>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <table class="w-full">
            <thead>
                <tr class="border-b">
                    <th class="text-left py-2">Title</th>
                    <th class="text-left py-2">Price (Pandit Only)</th>
                    <th class="text-left py-2">Status</th>
                    <th class="text-right py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($poojas as $pooja)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-3">{{ $pooja->title }}</td>
                        <td class="py-3">₹{{ $pooja->price_pandit_only / 100 }}</td>
                        <td class="py-3">
                            <span
                                class="px-2 py-1 text-xs font-bold rounded-full {{ $pooja->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                {{ $pooja->is_active ? 'Active' : 'Inactive' }}
                            </span>
                        </td>
                        <td class="py-3 text-right">
                            <a href="{{ route('admin.poojas.edit', $pooja) }}"
                                class="text-blue-500 hover:underline mr-4">Edit</a>
                            <form action="{{ route('admin.poojas.destroy', $pooja) }}" method="POST" class="inline"
                                onsubmit="return confirm('Are you sure you want to delete this pooja?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layouts.admin>
