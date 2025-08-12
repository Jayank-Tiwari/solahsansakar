<x-layouts.admin>
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Manage Tags</h1>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="lg:col-span-1">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">Add New Tag</h2>
                <form action="{{ route('admin.tags.store') }}" method="POST">
                    @csrf
                    <div>
                        <label for="name" class="block font-medium text-gray-700">Tag Name</label>
                        <input type="text" name="name" id="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                        @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg">
                            Save Tag
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="lg:col-span-2">
            <div class="bg-white p-6 rounded-lg shadow-md">
                 <table class="w-full">
                    <thead>
                        <tr class="border-b bg-gray-50">
                            <th class="text-left p-3 font-semibold text-gray-600">Name</th>
                            <th class="text-center p-3 font-semibold text-gray-600">Post Count</th>
                            <th class="text-right p-3 font-semibold text-gray-600">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($tags as $tag)
                            <tr class="border-b hover:bg-gray-50">
                                <td class="p-3">{{ $tag->name }}</td>
                                <td class="p-3 text-center">{{ $tag->posts_count }}</td>
                                <td class="p-3 text-right">
                                    <form action="{{ route('admin.tags.destroy', $tag) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this tag?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:underline">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="p-6 text-center text-gray-500">
                                    No tags found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layouts.admin>