<x-layouts.app>
    <div class="bg-white py-16">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-8">
                    <div class="mb-4">
                        @foreach ($post->tags as $tag)
                            <span class="inline-block bg-ss-cream text-ss-brown text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-full">{{ $tag->name }}</span>
                        @endforeach
                    </div>
                    <h1 class="text-4xl lg:text-5xl font-serif text-ss-maroon">{{ $post->title }}</h1>
                    <p class="text-gray-500 mt-4">
                        Posted by <span class="font-semibold">{{ $post->author->name }}</span> on {{ $post->created_at->format('F j, Y') }}
                    </p>
                </div>

                <div class="bg-gray-200 h-96 rounded-lg mb-8 flex items-center justify-center">
                    <span class="text-gray-500">[Featured Image]</span>
                </div>

                <div class="prose lg:prose-xl max-w-none text-ss-brown leading-relaxed">
                    {!! nl2br(e($post->body)) !!}
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>