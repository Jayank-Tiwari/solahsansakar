<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - SolahSansakar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Your custom Tailwind config can go here if needed
    </script>
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
        <aside class="w-64 bg-gray-800 text-white flex flex-col">
            <div class="p-4 border-b border-gray-700">
                <a href="{{ route('admin.dashboard') }}" class="text-xl font-bold">Admin Panel</a>
            </div>
            <nav class="flex-grow p-4 space-y-2">
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center px-4 py-2 rounded hover:bg-gray-700">Dashboard</a>
                <a href="{{ route('admin.poojas.index') }}"
                    class="flex items-center px-4 py-2 rounded hover:bg-gray-700">Manage Poojas</a>
                <a href="{{ route('admin.posts.index') }}"
                    class="flex items-center px-4 py-2 rounded hover:bg-gray-700">Manage Blogs</a>
                <a href="{{ route('admin.tags.index') }}"
                    class="flex items-center px-4 py-2 rounded hover:bg-gray-700">Manage Tags</a>
                <a href="{{ route('admin.bookings.index') }}"
                    class="flex items-center px-4 py-2 rounded hover:bg-gray-700">View Bookings</a>
                <a href="{{ route('admin.users.index') }}"
                    class="flex items-center px-4 py-2 rounded hover:bg-gray-700">View Users</a>
            </nav>
            <div class="p-4 border-t border-gray-700">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left px-4 py-2 rounded hover:bg-gray-700">Logout</button>
                </form>
            </div>
        </aside>
        <main class="flex-1 p-8 overflow-y-auto">
            @if (session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-md shadow-md"
                    role="alert">
                    <p class="font-bold">Success</p>
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            {{ $slot }}
        </main>
    </div>
</body>

</html>
