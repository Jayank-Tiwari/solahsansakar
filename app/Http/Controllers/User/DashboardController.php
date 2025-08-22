<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // Get the user's upcoming booking (if any)
        $upcomingBooking = auth()->user()->bookings()
            ->where('booking_date', '>=', now()->toDateString())
            ->whereNotIn('status', ['completed', 'cancelled'])
            ->orderBy('booking_date', 'asc')
            ->with('pooja')
            ->first();

        // Get the user's 3 most recent bookings for the history table
        $recentBookings = auth()->user()->bookings()
            ->with('pooja')
            ->latest()
            ->take(3)
            ->get();

        return view('user.dashboard', [
            'upcomingBooking' => $upcomingBooking,
            'recentBookings' => $recentBookings,
        ]);
    }

    public function bookings()
    {
        $bookings = auth()->user()->bookings()->with('pooja')->latest()->paginate(10);
        return view('user.bookings', ['bookings' => $bookings]);
    }
}