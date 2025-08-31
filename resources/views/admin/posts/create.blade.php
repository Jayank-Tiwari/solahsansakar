

<x-layouts.admin>
    
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.default.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>
    <div class="bg-gray-50/75 min-h-screen">
        <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data" id="postForm" class="p-4 sm:p-6 lg:p-8">
            @csrf
            
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Create New Blog Post</h1>
                <p class="mt-1 text-gray-500">Fill in the details below to create your new post.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                <div class="lg:col-span-2 space-y-8">
                    <div class="card">
                        <div class="mb-6">
                            <label for="title" class="label">Title</label>
                            <input type="text" name="title" id="title" class="input" placeholder="e.g., A Guide to Modern Web Design" required>
                        </div>
                        <div class="mb-6">
                            <label for="excerpt" class="label">Excerpt</label>
                            <textarea name="excerpt" id="excerpt" rows="3" class="input" placeholder="A short, catchy summary of your post..." required></textarea>
                            <p class="text-sm text-gray-500 mt-1">This summary is shown on the blog's main page.</p>
                        </div>
                        <div>
                            <label for="body" class="label">Full Content</label>
                            <textarea name="body" id="body" rows="12" class="input" placeholder="Start writing your amazing content here..." required></textarea>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-1">
                    <div class="space-y-8 sticky top-8">
                        <div class="card">
                            <label for="tags" class="label">Tags</label>
                            <select name="tags[]" id="tags" multiple class="input">
                                @foreach ($tags as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                @endforeach
                            </select>
                            <p class="text-sm text-gray-500 mt-1">Select one or more relevant tags.</p>
                        </div>

                        <div class="card">
                            <label class="label">Featured Image</label>
                            <div class="mt-2">
                                <label for="featured_image" id="image-dropzone" class="relative flex flex-col items-center justify-center w-full h-48 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 transition">
                                    <div id="upload-placeholder" class="text-center">
                                        <svg class="mx-auto h-10 w-10 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true"><path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg>
                                        <p class="mt-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span></p>
                                        <p class="text-xs text-gray-500">PNG or JPG (max. 1MB)</p>
                                    </div>
                                    <img id="image-preview" src="" class="hidden object-contain w-full h-full rounded-md" alt="Image preview"/>
                                    <input id="featured_image" name="featured_image" type="file" class="sr-only" accept="image/png, image/jpeg">
                                </label>
                                <button type="button" id="remove-image-btn" class="hidden w-full mt-2 text-sm font-semibold text-red-600 hover:text-red-800 transition">Remove Image</button>
                            </div>
                        </div>
                        
                        <div class="card bg-gray-50/75">
                             <button type="submit" id="submit-button" class="btn-primary w-full">
                                <span id="submit-button-text">Save Post</span>
                            </button>
                        </div>

                    </div>
                </div>

            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Tom Select for Tags (Functionality unchanged)
            new TomSelect('#tags', {
                plugins: ['remove_button'],
                create: false,
                maxItems: null,
                placeholder: 'Select tags...',
            });

            // Enhanced Image Uploader UI
            const imageInput = document.getElementById('featured_image');
            const placeholder = document.getElementById('upload-placeholder');
            const previewImg = document.getElementById('image-preview');
            const removeBtn = document.getElementById('remove-image-btn');

            imageInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(event) {
                        previewImg.src = event.target.result;
                        placeholder.classList.add('hidden');
                        previewImg.classList.remove('hidden');
                        removeBtn.classList.remove('hidden');
                    };
                    reader.readAsDataURL(file);
                }
            });

            removeBtn.addEventListener('click', function() {
                imageInput.value = ''; // Clear the file input
                previewImg.src = '';
                placeholder.classList.remove('hidden');
                previewImg.classList.add('hidden');
                removeBtn.classList.add('hidden');
            });

            // Form Submission Loading State
            const form = document.getElementById('postForm');
            const submitBtn = document.getElementById('submit-button');
            const submitBtnText = document.getElementById('submit-button-text');

            form.addEventListener('submit', function() {
                submitBtn.disabled = true;
                submitBtnText.innerHTML = `
                    <div class="flex items-center justify-center">
                        <svg class="animate-spin -ml-1 mr-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        <span>Saving...</span>
                    </div>
                `;
            });
        });
    </script>
    
    <style>
        .card { @apply bg-white p-6 rounded-xl shadow-sm border border-gray-200/80; }
        .label { @apply block text-sm font-semibold text-gray-700 mb-1; }
        .input { @apply block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 transition duration-150; }
        .btn-primary { @apply bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2.5 px-6 rounded-lg transition duration-200 shadow-md disabled:bg-indigo-400 disabled:cursor-not-allowed; }
    </style>
</x-layouts.admin>