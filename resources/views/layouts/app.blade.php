<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- SEO Meta --}}
    <title>@yield('meta_title', 'SolahSansakar')</title>
    <meta name="description" content="@yield('meta_description', 'Spiritual insights and Vedic traditions.')">
    <meta property="og:title" content="@yield('meta_title', 'SolahSansakar')" />
    <meta property="og:description" content="@yield('meta_description', 'Spiritual insights and Vedic traditions.')" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="@yield('meta_image', asset('assets/default-og.png'))" />

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
    <header class="bg-white/90 backdrop-blur shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-16">
            <a href="{{ route('home') }}" class="flex items-center space-x-2">
                <span class="text-2xl font-serif text-ss-maroon font-bold tracking-wide">SolahSansakar</span>
            </a>
            <nav class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="nav-link">Home</a>
                <a href="{{ route('packages.index') }}" class="nav-link">Pooja Packages</a>
                <a href="{{ route('blogs.index') }}" class="nav-link">Blogs</a>
                <a href="#" class="nav-link">Contact</a>
            </nav>
            <div class="hidden md:flex items-center space-x-4">
                <!-- Language Switcher -->
                <form method="POST" action="{{ route('setLocale') }}">
                    @csrf
                    <select name="locale" onchange="this.form.submit()">
                        <option value="en" {{ app()->getLocale() === 'en' ? 'selected' : '' }}>English</option>
                        <option value="hi" {{ app()->getLocale() === 'hi' ? 'selected' : '' }}>हिन्दी</option>
                    </select>
                </form>
                @guest
                    <a href="{{ route('login') }}" class="btn-outline">Login</a>
                    <a href="{{ route('register') }}" class="btn-primary">Register</a>
                @endguest
                @auth
                    <a href="{{ auth()->user()->role === 'admin' ? route('admin.dashboard') : route('dashboard') }}"
                        class="nav-link">{{ auth()->user()->name }}</a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="nav-link">Logout</button>
                    </form>
                @endauth
            </div>
            <button id="mobile-menu-btn" class="md:hidden text-ss-maroon focus:outline-none" aria-label="Open menu">    
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
        <div id="mobile-menu"
            class="md:hidden fixed top-16 left-0 w-full bg-white/95 shadow-lg border-t border-ss-cream transition-all duration-300 ease-in-out hidden">
            <nav class="flex flex-col space-y-2 px-6 py-4">
                <form method="POST" action="{{ route('setLocale') }}" class="mb-2">
                    @csrf
                    <select name="locale" onchange="this.form.submit()" class="border rounded px-2 py-1 text-sm font-semibold text-ss-maroon bg-white focus:outline-none focus:ring-2 focus:ring-ss-saffron w-full">
                        <option value="en" {{ app()->getLocale() === 'en' ? 'selected' : '' }}>English</option>
                        <option value="hi" {{ app()->getLocale() === 'hi' ? 'selected' : '' }}>हिन्दी</option>
                    </select>
                </form>
                <a href="{{ route('home') }}" class="nav-link-mobile">Home</a>
                <a href="{{ route('packages.index') }}" class="nav-link-mobile">Pooja Packages</a>
                <a href="{{ route('blogs.index') }}" class="nav-link-mobile">Blogs</a>
                <a href="#" class="nav-link-mobile">Contact</a>
                @guest
                    <a href="{{ route('login') }}" class="btn-outline w-full mt-2">Login</a>
                    <a href="{{ route('register') }}" class="btn-primary w-full mt-2">Register</a>
                @endguest
                @auth
                    <a href="{{ auth()->user()->role === 'admin' ? route('admin.dashboard') : route('dashboard') }}"
                        class="nav-link-mobile">{{ auth()->user()->name }}</a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="nav-link-mobile w-full text-left">Logout</button>
                    </form>
                @endauth
            </nav>
        </div>
    </header>

    <!-- Page Content -->
    <main class="min-h-screen">
        {{ $slot ?? '' }}
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-ss-brown text-ss-cream border-t-4 border-ss-saffron mt-12">
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
                    <div class="flex space-x-4 mt-2">
                        <a href="#" class="text-ss-cream hover:text-ss-saffron">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 4.56v14.91c0 .97-.79 1.76-1.76 1.76H1.76A1.76 1.76 0 010 19.47V4.56C0 3.59.79 2.8 1.76 2.8h20.48c.97 0 1.76.79 1.76 1.76zM7.19 20.24V9.56H3.56v10.68h3.63zm-1.81-12.2c-1.16 0-2.1-.94-2.1-2.1s.94-2.1 2.1-2.1c1.16 0 2.1.94 2.1 2.1s-.94 2.1-2.1 2.1zm15.62 12.2v-5.52c0-2.64-1.41-3.87-3.29-3.87-1.51 0-2.19.83-2.57 1.41v-1.21h-3.63c.05.8 0 10.68 0 10.68h3.63v-5.97c0-.32.02-.64.12-.87.26-.64.85-1.3 1.84-1.3 1.3 0 1.82.98 1.82 2.42v5.72h3.63z" />
                            </svg>
                        </a>
                        <a href="#" class="text-ss-cream hover:text-ss-saffron">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-2.72 0-4.924 2.204-4.924 4.924 0 .386.044.762.127 1.124-4.09-.205-7.719-2.165-10.148-5.144-.424.729-.666 1.577-.666 2.476 0 1.708.87 3.216 2.188 4.099-.807-.026-1.566-.247-2.228-.616v.062c0 2.385 1.697 4.374 3.946 4.827-.413.112-.849.171-1.296.171-.317 0-.626-.03-.928-.086.627 1.956 2.444 3.377 4.6 3.417-1.68 1.318-3.809 2.105-6.102 2.105-.396 0-.787-.023-1.175-.069 2.179 1.397 4.768 2.215 7.557 2.215 9.054 0 14.009-7.496 14.009-13.986 0-.213-.005-.425-.014-.636.962-.695 1.797-1.562 2.457-2.549z" />
                            </svg>
                        </a>
                        <a href="#" class="text-ss-cream hover:text-ss-saffron">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.849.07 1.366.062 2.633.334 3.608 1.309.975.975 1.247 2.242 1.309 3.608.058 1.265.069 1.645.069 4.849s-.012 3.584-.07 4.849c-.062 1.366-.334 2.633-1.309 3.608-.975.975-2.242 1.247-3.608 1.309-1.265.058-1.645.069-4.849.069s-3.584-.012-4.849-.07c-1.366-.062-2.633-.334-3.608-1.309-.975-.975-1.247-2.242-1.309-3.608C2.175 15.646 2.163 15.266 2.163 12s.012-3.584.07-4.849c.062-1.366.334-2.633 1.309-3.608.975-.975 2.242-1.247 3.608-1.309C8.416 2.175 8.796 2.163 12 2.163zm0-2.163C8.741 0 8.332.013 7.052.072 5.771.131 4.659.414 3.678 1.395c-.981.981-1.264 2.093-1.323 3.374C2.013 5.668 2 6.077 2 12c0 5.923.013 6.332.072 7.613.059 1.281.342 2.393 1.323 3.374.981.981 2.093 1.264 3.374 1.323C8.332 23.987 8.741 24 12 24s3.668-.013 4.948-.072c1.281-.059 2.393-.342 3.374-1.323.981-.981 1.264-2.093 1.323-3.374.059-1.281.072-1.69.072-7.613 0-5.923-.013-6.332-.072-7.613-.059-1.281-.342-2.393-1.323-3.374-.981-.981-2.093-1.264-3.374-1.323C15.668.013 15.259 0 12 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="text-center text-sm mt-8 border-t border-ss-cream/20 pt-4">
                &copy; {{ date('Y') }} SolahSansakar. All Rights Reserved.
            </div>
        </div>
    </footer>

    <style>
        .nav-link {
            @apply text-ss-brown font-semibold hover:text-ss-saffron transition px-2 py-1 rounded;
        }

        .btn-outline {
            @apply px-4 py-2 rounded-md text-ss-maroon border border-ss-maroon hover:bg-ss-maroon hover:text-white transition font-semibold;
        }

        .btn-primary {
            @apply px-4 py-2 rounded-md bg-ss-saffron text-white hover:bg-orange-600 transition font-semibold;
        }

        .nav-link-mobile {
            @apply text-ss-brown font-semibold hover:text-ss-saffron transition px-2 py-2 rounded block;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-menu');
            btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });
            // Optional: close menu when clicking outside
            document.addEventListener('click', function(e) {
                if (!btn.contains(e.target) && !menu.contains(e.target)) {
                    menu.classList.add('hidden');
                }
            });
        });
    </script>
</body>

</html>
