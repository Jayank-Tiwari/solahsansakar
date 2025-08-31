<x-layouts.admin>
    <h1 class="text-3xl font-bold text-gray-800 mb-8">Edit Post: {{ $post->title }}</h1>
    <div class="bg-white p-8 rounded-xl shadow-lg max-w-2xl mx-auto">
        <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data" id="postForm">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="title" class="block font-semibold text-gray-700 mb-1">Title</label>
                <input type="text" name="title" id="title" class="input" value="{{ old('title', $post->title) }}" required>
            </div>
            <div class="mb-6">
                <label for="excerpt" class="block font-semibold text-gray-700 mb-1">Excerpt</label>
                <textarea name="excerpt" id="excerpt" rows="3" class="input" required>{{ old('excerpt', $post->excerpt) }}</textarea>
            </div>
            <div class="mb-6">
                <label for="body" class="block font-semibold text-gray-700 mb-1">Full Content</label>
                <textarea name="body" id="body" rows="10" class="input" required>{{ old('body', $post->body) }}</textarea>
            </div>
            <div class="mb-6">
                <label for="tags" class="block font-semibold text-gray-700 mb-1">Tags</label>
                <select name="tags[]" id="tags" multiple class="input">
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}" {{ in_array($tag->id, $post->tags->pluck('id')->toArray()) ? 'selected' : '' }}>
                            {{ $tag->name }}
                        </option>
                    @endforeach
                </select>
                <p class="text-sm text-gray-500 mt-1">You can select multiple tags.</p>
            </div>
            <div class="mb-6">
                <label for="featured_image" class="block font-semibold text-gray-700 mb-1">Featured Image</label>
                <input type="file" name="featured_image" id="featured_image" accept="image/*" class="input">
                <small class="text-gray-500">Recommended: JPG/PNG, max 1MB, 1200x800px</small>
                <div id="imagePreview" class="mt-3">
                    @if($post->featured_image_url)
                        <img src="{{ asset($post->featured_image_url) }}" class="rounded-lg shadow w-full max-w-xs h-auto" alt="Current Image">
                        <p class="text-xs text-gray-400 mt-1">Current image. Upload to replace.</p>
                    @endif
                </div>
            </div>
            <div class="mb-6">
                <label class="block font-semibold text-gray-700 mb-1">Status</label>
                <select name="status" id="status" class="input">
                    <option value="draft" {{ old('status', $post->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="published" {{ old('status', $post->status) == 'published' ? 'selected' : '' }}>Published</option>
                </select>
            </div>
            <div class="mt-8 flex justify-end">
                <button type="submit" class="btn-primary">Update Post</button>
            </div>
        </form>
    </div>

    <!-- Tom Select for tags -->
    <link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.bootstrap5.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>
    <script>
        new TomSelect('#tags', {
            plugins: ['remove_button'],
            create: false,
            maxItems: null,
            placeholder: 'Select tags...',
        });

        // Image preview
        document.getElementById('featured_image').addEventListener('change', function(e) {
            const preview = document.getElementById('imagePreview');
            preview.innerHTML = '';
            if (e.target.files && e.target.files[0]) {
                const reader = new FileReader();
                reader.onload = function(ev) {
                    preview.innerHTML = `<img src="${ev.target.result}" class="rounded-lg shadow w-full max-w-xs h-auto" alt="Preview">`;
                };
                reader.readAsDataURL(e.target.files[0]);
            }
        });
    </script>
    <style>
        .input {
            @apply mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-400 transition duration-200;
        }
        .btn-primary {
            @apply bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg transition duration-200;
        }
    </style>
</x-layouts.admin>