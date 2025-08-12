<x-layouts.app>
    <div class="text-center py-20">
        <h1 class="text-5xl font-serif text-ss-maroon">User Dashboard</h1>
        <p class="mt-4">Welcome, {{ auth()->user()->name }}!</p>
    </div>
</x-layouts.app>