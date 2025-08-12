<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'SolahSansakar')</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom Tailwind Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Open Sans', 'sans-serif'],
                        serif: ['Lora', 'serif'],
                    },
                    colors: {
                        'ss-maroon': '#A52A2A',
                        'ss-saffron': '#FFA500',
                        'ss-cream': '#F5F5DC',
                        'ss-brown': '#8B4513',
                    }
                }
            }
        }
    </script>
</head>

<body class="font-sans antialiased bg-ss-cream text-ss-brown">
    <!-- Navbar -->
    <header class="bg-white/80 backdrop-blur-md shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-2xl font-serif text-ss-maroon font-bold">SolahSansakar</a>
            <nav class="hidden md:flex items-center space-x-6">
                <a href="{{ route('home') }}" class="hover:text-ss-saffron transition">Home</a>
                <a href="{{ route('packages.index') }}" class="hover:text-ss-saffron transition">Pooja Packages</a>
                <a href="{{ route('blogs.index') }}" class="hover:text-ss-saffron transition">Blogs</a>
                <a href="#" class="hover:text-ss-saffron transition">Contact</a>
            </nav>
            <div class="hidden md:flex items-center space-x-4">
                @guest
                    <a href="{{ route('login') }}"
                        class="px-4 py-2 rounded-md text-ss-maroon border border-ss-maroon hover:bg-ss-maroon hover:text-white transition">Login</a>
                    <a href="{{ route('register') }}"
                        class="px-4 py-2 rounded-md bg-ss-saffron text-white hover:bg-orange-600 transition">Register</a>
                @endguest
                @auth
                    <a href="{{ route('dashboard') }}"
                        class="hover:text-ss-saffron transition">{{ auth()->user()->name }}</a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="ml-4 hover:text-ss-saffron transition">Logout</button>
                    </form>
                @endauth
            </div>
            <!-- Mobile Menu Button can be added here -->
        </div>
    </header>

    <!-- Page Content -->
    <main>
        {{ $slot ?? '' }}
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-ss-brown text-ss-cream border-t-4 border-ss-saffron">
        <div class="container mx-auto px-6 py-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="font-serif text-xl font-bold mb-2">SolahSansakar</h3>
                    <p class="text-sm">Preserving Vedic traditions for the modern world.</p>
                </div>
                <div>
                    <h3 class="font-bold mb-2">Quick Links</h3>
                    <ul class="space-y-1 text-sm">
                        <li><a href="#" class="hover:text-ss-saffron">About Us</a></li>
                        <li><a href="{{ route('packages.index') }}" class="hover:text-ss-saffron">Pooja Packages</a>
                        </li>
                        <li><a href="#" class="hover:text-ss-saffron">Terms of Service</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold mb-2">Contact</h3>
                    <ul class="space-y-1 text-sm">
                        <li>contact@solahsansakar.com</li>
                        <li>+91 12345 67890</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold mb-2">Follow Us</h3>
                    <!-- Social Icons can be added here -->
                </div>
            </div>
            <div class="text-center text-sm mt-8 border-t border-ss-cream/20 pt-4">
                &copy; {{ date('Y') }} SolahSansakar. All Rights Reserved.
            </div>
        </div>
    </footer>
</body>

</html>
