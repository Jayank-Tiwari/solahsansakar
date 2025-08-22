<?php

namespace App\Http\Controllers;

use App\Models\Booking;
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'pooja_id' => 'required|exists:poojas,id',
        ]);

        Booking::create([
            'user_id' => auth()->id(),
            'pooja_id' => $validated['pooja_id'],
            'booking_type' => 'pandit_only', // Default for this simple form
            'booking_date' => now()->addDays(7), // Placeholder date
            'address' => 'User needs to provide this', // Placeholder address
            'status' => 'pending',
        ]);

        return redirect()->route('user.bookings')->with('success', 'Your pooja has been booked successfully! We will contact you for details.');
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
