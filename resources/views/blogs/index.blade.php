@extends('layouts.app')

@section('content')
    <div class="bg-ss-cream py-16">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h1 class="text-4xl lg:text-5xl font-serif text-ss-maroon">From Our Blog</h1>
                <p class="text-lg text-ss-brown mt-2">Spiritual insights and knowledge on Vedic traditions.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($posts as $post)
                    <article class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col group transition hover:scale-[1.02] hover:shadow-xl">
                        <a href="{{ route('blogs.show', $post) }}">
                            @if($post->featured_image_url)
                                <img src="{{ $post->featured_image_url }}" alt="{{ $post->title }}" class="w-full h-48 object-cover">
                            @else
                                <div class="bg-gray-200 h-48 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v4a1 1 0 001 1h3v4a1 1 0 001 1h4a1 1 0 001-1v-4h3a1 1 0 001-1V7a1 1 0 00-1-1H4a1 1 0 00-1 1z" /></svg>
                                </div>
                            @endif
                        </a>
                        <div class="p-6 flex-grow flex flex-col">
                            <div class="mb-4">
                                @foreach ($post->tags as $tag)
                                    <a href="{{ route('blogs.index', ['tag' => $tag->slug]) }}" class="inline-block bg-ss-saffron/20 text-ss-brown text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-full shadow hover:bg-ss-saffron/40 transition">{{ $tag->name }}</a>
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
                            <div class="mt-auto pt-4 border-t border-gray-200 text-sm text-gray-500 flex items-center gap-2">
                                @if($post->author->avatar)
                                    <img src="{{ $post->author->avatar }}" alt="{{ $post->author->name }}" class="w-6 h-6 rounded-full">
                                @endif
                                <span>By {{ $post->author->name }} on {{ $post->created_at->format('M d, Y') }}</span>
                            </div>
                        </div>
                    </article>
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
@endsection