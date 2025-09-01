<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Pooja;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Eager load the 'user' and 'pooja' relationships to prevent N+1 query problems
        $bookings = Booking::with(['user', 'pooja'])->latest()->get();

        return view('admin.bookings.index', ['bookings' => $bookings]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Pooja $pooja)
    {
        $otherPoojas = Pooja::where('id', '!=', $pooja->id)->take(4)->get();
        return view('bookings.create', compact('pooja', 'otherPoojas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'pooja_id' => 'required|exists:poojas,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
        ]);

        $pooja = Pooja::findOrFail($validated['pooja_id']);
        $total = ($pooja->price_samagri + $pooja->price_pandit_only);

        Booking::create([
            'pooja_id' => $pooja->id,
            'user_id' => auth()->id(),
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'amount' => $total,
            // Add other fields as needed
        ]);

        return redirect()->route('user.bookings')->with('success', 'Booking confirmed!');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        $validated = $request->validate([
            'status' => [
                'required',
                Rule::in(['pending', 'confirmed', 'completed', 'cancelled']),
            ],
        ]);

        $booking->update($validated);

        return redirect()->route('admin.bookings.index')->with('success', 'Booking status updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
