<x-layouts.admin>
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Admin Dashboard</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold text-gray-600">Total Poojas</h3>
            <p class="text-3xl font-bold mt-2">{{\App\Models\Pooja::count()}}</p>
        </div>
        </div>
</x-layouts.admin>