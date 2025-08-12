<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Pooja;
use App\Models\User;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    public function run(): void
    {
        // Get the admin user and a few poojas to create bookings for
        $user = User::where('role', 'admin')->first();
        $poojas = Pooja::take(2)->get();

        if ($user && $poojas->count() >= 2) {
            // Booking 1
            Booking::create([
                'user_id' => $user->id,
                'pooja_id' => $poojas[0]->id,
                'booking_type' => 'pandit_samagri',
                'booking_date' => now()->addDays(10),
                'address' => '123, ABC Society, Noida, Uttar Pradesh',
                'status' => 'confirmed',
            ]);

            // Booking 2
            Booking::create([
                'user_id' => $user->id,
                'pooja_id' => $poojas[1]->id,
                'booking_type' => 'pandit_only',
                'booking_date' => now()->addDays(25),
                'address' => '456, XYZ Apartments, Ghaziabad, Uttar Pradesh',
                'status' => 'pending',
            ]);
        }
    }
}