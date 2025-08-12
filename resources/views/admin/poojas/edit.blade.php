<x-layouts.admin>
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Edit Pooja: {{ $pooja->title }}</h1>

    <div class="bg-white p-8 rounded-lg shadow-md">
        <form action="{{ route('admin.poojas.update', $pooja) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="md:col-span-2">
                <label for="title" class="block font-semibold text-gray-700">Title</label>
                <input type="text" name="title" id="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-400 transition duration-200" value="{{ old('title', $pooja->title) }}" required>
            </div>

            <div class="mt-4">
                <label class="block font-semibold text-gray-700">Current Image</label>
                @if ($pooja->image_path)
                    <img src="{{ asset('storage/' . $pooja->image_path) }}" alt="{{ $pooja->title }}" class="w-32 h-32 object-cover rounded-md mt-2">
                @else
                    <p>No image uploaded.</p>
                @endif
                <label for="image" class="block font-semibold text-gray-700 mt-4">Upload New Image (optional)</label>
                <input type="file" name="image" id="image" class="mt-1 block w-full focus:ring-2 focus:ring-blue-400 transition duration-200">
            </div>

            <div class="mt-6">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-lg transition duration-200">Update Pooja</button>
            </div>
        </form>
    </div>
</x-layouts.admin>