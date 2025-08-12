<x-layouts.admin>
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Create New Blog Post</h1>

    <div class="bg-white p-8 rounded-lg shadow-md">
        <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="title" class="block font-semibold text-gray-700">Title</label>
                <input type="text" name="title" id="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
            </div>
            <div class="mb-4">
                <label for="excerpt" class="block font-semibold text-gray-700">Excerpt</label>
                <textarea name="excerpt" id="excerpt" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required></textarea>
            </div>
            <div class="mb-4">
                <label for="body" class="block font-semibold text-gray-700">Full Content</label>
                <textarea name="body" id="body" rows="10" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required></textarea>
            </div>
             <div class="mb-4">
                <label for="tags" class="block font-semibold text-gray-700">Tags</label>
                <select name="tags[]" id="tags" multiple class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-6">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-lg">Save Post</button>
            </div>
        </form>
    </div>
</x-layouts.admin>