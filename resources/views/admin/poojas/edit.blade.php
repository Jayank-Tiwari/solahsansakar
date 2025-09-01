<x-layouts.admin>
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Edit Pooja: {{ $pooja->title }}</h1>

    <div class="bg-white p-8 rounded-lg shadow-md">
        <form action="{{ route('admin.poojas.update', $pooja) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="md:col-span-2 mb-4">
                <label for="title" class="block font-semibold text-gray-700">Title (English)</label>
                <input type="text" name="title" id="title"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-400 transition duration-200"
                    value="{{ old('title', $pooja->title) }}" required>
            </div>
            <div class="md:col-span-2 mb-4">
                <label for="title_hi" class="block font-semibold text-gray-700">Title (Hindi)</label>
                <input type="text" name="title_hi" id="title_hi"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-400 transition duration-200"
                    value="{{ old('title_hi', $pooja->title_hi) }}">
                @error('title_hi') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="md:col-span-2 mb-4">
                <label for="description" class="block font-semibold text-gray-700">Description (English)</label>
                <textarea name="description" id="description" rows="4"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-400 transition duration-200"
                    required>{{ old('description', $pooja->description) }}</textarea>
            </div>
            <div class="md:col-span-2 mb-4">
                <label for="description_hi" class="block font-semibold text-gray-700">Description (Hindi)</label>
                <textarea name="description_hi" id="description_hi" rows="4"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-400 transition duration-200"
                    >{{ old('description_hi', $pooja->description_hi) }}</textarea>
            </div>

            <div class="md:col-span-2 mb-4">
                <label for="brief_description" class="block font-semibold text-gray-700">Brief Description (English)</label>
                <input type="text" name="brief_description" id="brief_description"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-400 transition duration-200"
                    value="{{ old('brief_description', $pooja->brief_description) }}">
                @error('brief_description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="md:col-span-2 mb-4">
                <label for="brief_description_hi" class="block font-semibold text-gray-700">Brief Description (Hindi)</label>
                <input type="text" name="brief_description_hi" id="brief_description_hi"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-400 transition duration-200"
                    value="{{ old('brief_description_hi', $pooja->brief_description_hi) }}">
                @error('brief_description_hi') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
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

            <div class="mt-4">
                <label class="block font-semibold text-gray-700">Current Hero Banner</label>
                @if ($pooja->hero_banner_path)
                    <img src="{{ asset('storage/' . $pooja->hero_banner_path) }}" alt="{{ $pooja->title }} Banner" class="w-full h-32 object-cover rounded-md mt-2">
                @else
                    <p>No hero banner uploaded.</p>
                @endif
                <label for="hero_banner" class="block font-semibold text-gray-700 mt-4">Upload New Hero Banner (optional)</label>
                <input type="file" name="hero_banner" id="hero_banner" class="mt-1 block w-full focus:ring-2 focus:ring-blue-400 transition duration-200">
                @error('hero_banner') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="mt-6">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-lg transition duration-200">
                    Update Pooja
                </button>
            </div>
        </form>
    </div>
</x-layouts.admin>