<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - SolahSansakar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Mobile menu button -->
        <div class="md:hidden fixed top-0 left-0 w-full z-50 bg-gray-900 flex items-center justify-between px-4 py-3 shadow">
            <div class="flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v4a1 1 0 001 1h3v4a1 1 0 001 1h4a1 1 0 001-1v-4h3a1 1 0 001-1V7a1 1 0 00-1-1H4a1 1 0 00-1 1z" /></svg>
                <span class="text-xl font-bold tracking-wide text-white">Admin Panel</span>
            </div>
            <button id="mobile-menu-toggle" class="text-white focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
            </button>
        </div>
        <!-- Sidebar -->
        <aside id="admin-sidebar" class="w-64 bg-gray-900 text-white flex flex-col shadow-lg md:relative fixed top-0 left-0 h-full z-40 transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out">
            <div class="p-4 border-b border-gray-700 flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v4a1 1 0 001 1h3v4a1 1 0 001 1h4a1 1 0 001-1v-4h3a1 1 0 001-1V7a1 1 0 00-1-1H4a1 1 0 00-1 1z" /></svg>
                <a href="{{ route('admin.dashboard') }}" class="text-xl font-bold tracking-wide">Admin Panel</a>
            </div>
            <nav class="flex-grow p-4 space-y-2">
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center px-4 py-2 rounded transition duration-200 hover:bg-blue-700 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6" /></svg>
                    Dashboard
                </a>
                <a href="{{ route('admin.poojas.index') }}"
                    class="flex items-center px-4 py-2 rounded transition duration-200 hover:bg-blue-700 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-yellow-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zm0 0V4m0 0a8 8 0 018 8v4a8 8 0 01-8 8 8 8 0 01-8-8v-4a8 8 0 018-8z" /></svg>
                    Manage Poojas
                </a>
                <a href="{{ route('admin.posts.index') }}"
                    class="flex items-center px-4 py-2 rounded transition duration-200 hover:bg-blue-700 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-green-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21H5a2 2 0 01-2-2V7a2 2 0 012-2h14a2 2 0 012 2v12a2 2 0 01-2 2z" /></svg>
                    Manage Blogs
                </a>
                <a href="{{ route('admin.tags.index') }}"
                    class="flex items-center px-4 py-2 rounded transition duration-200 hover:bg-blue-700 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-pink-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7a1 1 0 011-1h8a1 1 0 011 1v8a1 1 0 01-1 1H8a1 1 0 01-1-1V7z" /></svg>
                    Manage Tags
                </a>
                <a href="{{ route('admin.bookings.index') }}"
                    class="flex items-center px-4 py-2 rounded transition duration-200 hover:bg-blue-700 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-purple-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 17l4 4 4-4m-4-5v9" /></svg>
                    View Bookings
                </a>
                <a href="{{ route('admin.users.index') }}"
                    class="flex items-center px-4 py-2 rounded transition duration-200 hover:bg-blue-700 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-red-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 15c2.485 0 4.779.73 6.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                    View Users
                </a>
            </nav>
            <div class="p-4 border-t border-gray-700">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left px-4 py-2 rounded transition duration-200 hover:bg-blue-700 hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-1 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7" /></svg>
                        Logout
                    </button>
                </form>
            </div>
        </aside>
        <script>
            // Mobile menu toggle
            document.addEventListener('DOMContentLoaded', function () {
                const sidebar = document.getElementById('admin-sidebar');
                const toggleBtn = document.getElementById('mobile-menu-toggle');
                if (toggleBtn) {
                    toggleBtn.addEventListener('click', function () {
                        if (sidebar.classList.contains('-translate-x-full')) {
                            sidebar.classList.remove('-translate-x-full');
                        } else {
                            sidebar.classList.add('-translate-x-full');
                        }
                    });
                }
            });
        </script>
    <main class="flex-1 p-4 pt-20 md:p-8 overflow-y-auto">
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
