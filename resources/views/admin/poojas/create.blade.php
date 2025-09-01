<x-layouts.admin>
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Add New Pooja Package</h1>

    <div class="bg-white p-8 rounded-lg shadow-md">
        <form action="{{ route('admin.poojas.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="md:col-span-2">
                    <label for="title" class="block font-semibold text-gray-700">Title (English)</label>
                    <input type="text" name="title" id="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-400 transition duration-200" value="{{ old('title') }}" required>
                    @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                <div class="md:col-span-2">
                    <label for="title_hi" class="block font-semibold text-gray-700">Title (Hindi)</label>
                    <input type="text" name="title_hi" id="title_hi" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-400 transition duration-200" value="{{ old('title_hi') }}">
                    @error('title_hi') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <div class="md:col-span-2">
                    <label for="description" class="block font-semibold text-gray-700">Description (English)</label>
                    <textarea name="description" id="description" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-400 transition duration-200" required>{{ old('description') }}</textarea>
                    @error('description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                <div class="md:col-span-2">
                    <label for="description_hi" class="block font-semibold text-gray-700">Description (Hindi)</label>
                    <textarea name="description_hi" id="description_hi" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-400 transition duration-200">{{ old('description_hi') }}</textarea>
                    @error('description_hi') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <div class="md:col-span-2">
                    <label for="brief_description" class="block font-semibold text-gray-700">Brief Description (English)</label>
                    <input type="text" name="brief_description" id="brief_description"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-400 transition duration-200"
                        value="{{ old('brief_description') }}">
                    @error('brief_description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                <div class="md:col-span-2">
                    <label for="brief_description_hi" class="block font-semibold text-gray-700">Brief Description (Hindi)</label>
                    <input type="text" name="brief_description_hi" id="brief_description_hi"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-400 transition duration-200"
                        value="{{ old('brief_description_hi') }}">
                    @error('brief_description_hi') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="price_pandit_samagri" class="block font-semibold text-gray-700">Price (Pandit + Samagri)</label>
                    <input type="number" name="price_pandit_samagri" id="price_pandit_samagri" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-400 transition duration-200" value="{{ old('price_pandit_samagri') }}" placeholder="e.g., 11000 for ₹110.00" required>
                    @error('price_pandit_samagri') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="price_pandit_only" class="block font-semibold text-gray-700">Price (Pandit Only)</label>
                    <input type="number" name="price_pandit_only" id="price_pandit_only" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-400 transition duration-200" value="{{ old('price_pandit_only') }}" required>
                    @error('price_pandit_only') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                 <div>
                    <label for="price_samagri_only" class="block font-semibold text-gray-700">Price (Samagri Only)</label>
                    <input type="number" name="price_samagri_only" id="price_samagri_only" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-400 transition duration-200" value="{{ old('price_samagri_only') }}" required>
                    @error('price_samagri_only') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="image" class="block font-semibold text-gray-700">Featured Image</label>
                    <input type="file" name="image" id="image" class="mt-1 block w-full focus:ring-2 focus:ring-blue-400 transition duration-200">
                     @error('image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="hero_banner" class="block font-semibold text-gray-700">Hero Banner Image</label>
                    <input type="file" name="hero_banner" id="hero_banner"
                        class="mt-1 block w-full focus:ring-2 focus:ring-blue-400 transition duration-200">
                    @error('hero_banner') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="mt-6">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-lg transition duration-200">Save Pooja</button>
            </div>
        </form>
    </div>
</x-layouts.admin>