<x-layouts.admin>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Manage Blog Posts</h1>
        <a href="{{ route('admin.posts.create') }}" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-lg">
            + New Post
        </a>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <table class="w-full">
            <thead>
                <tr class="border-b">
                    <th class="text-left py-2">Title</th>
                    <th class="text-left py-2">Author</th>
                    <th class="text-left py-2">Status</th>
                    <th class="text-right py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr class="border-b hover:bg-blue-50 transition duration-200">
                        <td class="py-3 font-semibold">{{ $post->title }}</td>
                        <td class="py-3">{{ $post->author->name }}</td>
                        <td class="py-3 capitalize">
                            <span class="px-2 py-1 text-xs font-bold rounded-full {{ $post->status === 'published' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                {{ $post->status }}
                            </span>
                        </td>
                        <td class="py-3 text-right flex items-center justify-end space-x-2">
                            <a href="{{ route('admin.posts.edit', $post) }}" class="text-blue-500 hover:underline transition duration-200" title="Edit">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5h2m-1 0v14m-7-7h14" /></svg>
                                Edit
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layouts.admin>