<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pooja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PoojaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $poojas = Pooja::latest()->get();
        return view('admin.poojas.index', ['poojas' => $poojas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.poojas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'title_hi' => 'nullable|string|max:255',
            'description' => 'required|string',
            'description_hi' => 'nullable|string',
            'brief_description' => 'nullable|string|max:255',
            'brief_description_hi' => 'nullable|string|max:255',
            'price_pandit_samagri' => 'required|integer|min:0',
            'price_pandit_only' => 'required|integer|min:0',
            'price_samagri_only' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'hero_banner' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:4096',
        ]);

        $data = [
            'title' => $validated['title'],
            'title_hi' => $validated['title_hi'] ?? null,
            'description' => $validated['description'],
            'description_hi' => $validated['description_hi'] ?? null,
            'brief_description' => $validated['brief_description'] ?? null,
            'brief_description_hi' => $validated['brief_description_hi'] ?? null,
            'price_pandit_samagri' => $validated['price_pandit_samagri'],
            'price_pandit_only' => $validated['price_pandit_only'],
            'price_samagri_only' => $validated['price_samagri_only'],
            'slug' => Str::slug($validated['title']),
        ];

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('poojas', 'public');
        }

        if ($request->hasFile('hero_banner')) {
            $data['hero_banner_path'] = $request->file('hero_banner')->store('poojas/banners', 'public');
        }

        Pooja::create($data);

        return redirect()->route('admin.poojas.index')->with('success', 'Pooja created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pooja $pooja)
    {
        return view('admin.poojas.edit', ['pooja' => $pooja]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pooja $pooja)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'title_hi' => 'nullable|string|max:255',
            'description' => 'required|string',
            'description_hi' => 'nullable|string',
            'brief_description' => 'nullable|string|max:255',
            'brief_description_hi' => 'nullable|string|max:255',
            'price_pandit_samagri' => 'required|integer|min:0',
            'price_pandit_only' => 'required|integer|min:0',
            'price_samagri_only' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'hero_banner' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:4096',
        ]);

        $data = [
            'title' => $validated['title'],
            'title_hi' => $validated['title_hi'] ?? null,
            'description' => $validated['description'],
            'description_hi' => $validated['description_hi'] ?? null,
            'brief_description' => $validated['brief_description'] ?? null,
            'brief_description_hi' => $validated['brief_description_hi'] ?? null,
            'price_pandit_samagri' => $validated['price_pandit_samagri'],
            'price_pandit_only' => $validated['price_pandit_only'],
            'price_samagri_only' => $validated['price_samagri_only'],
        ];

        if ($request->title !== $pooja->title) {
            $data['slug'] = Str::slug($validated['title']);
        }

        if ($request->hasFile('image')) {
            if ($pooja->image_path) {
                Storage::disk('public')->delete($pooja->image_path);
            }
            $data['image_path'] = $request->file('image')->store('poojas', 'public');
        }

        if ($request->hasFile('hero_banner')) {
            if ($pooja->hero_banner_path) {
                Storage::disk('public')->delete($pooja->hero_banner_path);
            }
            $data['hero_banner_path'] = $request->file('hero_banner')->store('poojas/banners', 'public');
        }

        $pooja->update($data);

        return redirect()->route('admin.poojas.index')->with('success', 'Pooja updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pooja $pooja)
    {
        // Optionally delete images from storage
        if ($pooja->image_path) {
            Storage::disk('public')->delete($pooja->image_path);
        }
        if ($pooja->hero_banner_path) {
            Storage::disk('public')->delete($pooja->hero_banner_path);
        }
        $pooja->delete();
        return redirect()->route('admin.poojas.index')->with('success', 'Pooja deleted successfully.');
    }
}
