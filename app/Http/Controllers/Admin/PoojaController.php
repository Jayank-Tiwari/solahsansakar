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
            'description' => 'required|string',
            'price_pandit_samagri' => 'required|integer|min:0',
            'price_pandit_only' => 'required|integer|min:0',
            'price_samagri_only' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $validated['slug'] = Str::slug($validated['title']);

        if ($request->hasFile('image')) {
            $validated['image_path'] = $request->file('image')->store('poojas', 'public');
        }

        Pooja::create($validated);

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
        // Complete validation rules for all fields
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price_pandit_samagri' => 'required|integer|min:0',
            'price_pandit_only' => 'required|integer|min:0',
            'price_samagri_only' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        // Regenerate the slug if the title has changed
        if ($request->title !== $pooja->title) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        // Handle the file upload if a new image is provided
        if ($request->hasFile('image')) {
            // Delete the old image if it exists to save space
            if ($pooja->image_path) {
                Storage::disk('public')->delete($pooja->image_path);
            }
            // Store the new image and get its path
            $validated['image_path'] = $request->file('image')->store('poojas', 'public');
        }

        // Update the pooja model with the validated data
        $pooja->update($validated);

        // Redirect back to the index page with a success message
        return redirect()->route('admin.poojas.index')->with('success', 'Pooja updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pooja $pooja)
    {
        $pooja->delete();
        return redirect()->route('admin.poojas.index')->with('success', 'Pooja deleted successfully.');
    }
}
