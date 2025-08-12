<x-layouts.admin>
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Edit Post: {{ $post->title }}</h1>

    <div class="bg-white p-8 rounded-lg shadow-md">
        <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="block font-semibold text-gray-700">Title</label>
                <input type="text" name="title" id="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-400 transition duration-200" value="{{ old('title', $post->title) }}" required>
            </div>

            <div class="mb-4">
                <label for="excerpt" class="block font-semibold text-gray-700">Excerpt</label>
                <textarea name="excerpt" id="excerpt" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-400 transition duration-200" required>{{ old('excerpt', $post->excerpt) }}</textarea>
            </div>

            <div class="mb-4">
                <label for="body" class="block font-semibold text-gray-700">Full Content</label>
                <textarea name="body" id="body" rows="10" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-400 transition duration-200" required>{{ old('body', $post->body) }}</textarea>
            </div>

            <div class="mb-4">
                <label for="tags" class="block font-semibold text-gray-700">Tags</label>
                <select name="tags[]" id="tags" multiple class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-400 transition duration-200">
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}" 
                            {{ in_array($tag->id, $post->tags->pluck('id')->toArray()) ? 'selected' : '' }}>
                            {{ $tag->name }}
                        </option>
                    @endforeach
                </select>
                <p class="text-sm text-gray-500 mt-1">Hold Ctrl (or Cmd on Mac) to select multiple tags.</p>
            </div>

            <div class="mb-4">
                 <label class="block font-semibold text-gray-700">Status</label>
                 <select name="status" id="status" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-400 transition duration-200">
                    <option value="draft" {{ old('status', $post->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="published" {{ old('status', $post->status) == 'published' ? 'selected' : '' }}>Published</option>
                 </select>
            </div>
            
            <div class="mt-6">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-lg transition duration-200">Update Post</button>
            </div>
        </form>
    </div>
</x-layouts.admin>