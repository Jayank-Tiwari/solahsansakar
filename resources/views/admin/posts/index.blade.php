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
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-3">{{ $post->title }}</td>
                        <td class="py-3">{{ $post->author->name }}</td>
                        <td class="py-3 capitalize">
                            <span class="px-2 py-1 text-xs font-bold rounded-full {{ $post->status === 'published' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                {{ $post->status }}
                            </span>
                        </td>
                        <td class="py-3 text-right">
                            <a href="{{ route('admin.posts.edit', $post) }}" class="text-blue-500 hover:underline mr-4">Edit</a>
                            </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layouts.admin>