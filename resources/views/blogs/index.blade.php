<x-layouts.app>
    <div class="bg-ss-cream py-16">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h1 class="text-4xl lg:text-5xl font-serif text-ss-maroon">From Our Blog</h1>
                <p class="text-lg text-ss-brown mt-2">Spiritual insights and knowledge on Vedic traditions.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($posts as $post)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col group">
                        <div class="relative">
                            <div class="bg-gray-200 h-48 flex items-center justify-center">
                                <span class="text-gray-500">[Featured Image]</span>
                            </div>
                            <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>

                        <div class="p-6 flex-grow flex flex-col">
                            <div class="mb-4">
                                @foreach ($post->tags as $tag)
                                    <span class="inline-block bg-ss-saffron/20 text-ss-brown text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-full">{{ $tag->name }}</span>
                                @endforeach
                            </div>
                            <h2 class="text-xl font-serif text-ss-maroon mb-2 flex-grow">
                                <a href="{{ route('blogs.show', $post) }}" class="group-hover:text-ss-saffron transition duration-300">
                                    {{ $post->title }}
                                </a>
                            </h2>
                            <p class="text-ss-brown font-sans text-base leading-relaxed mb-4">
                                {{ $post->excerpt }}
                            </p>
                            <div class="mt-auto pt-4 border-t border-gray-200 text-sm text-gray-500">
                                <span>By {{ $post->author->name }} on {{ $post->created_at->format('M d, Y') }}</span>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-12">
                        <p class="text-xl text-ss-brown">No blog posts have been published yet. Please check back later.</p>
                    </div>
                @endforelse
            </div>

            <div class="mt-12">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</x-layouts.app>