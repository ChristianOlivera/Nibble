<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Reservation;
use Carbon\Carbon;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('email', 'user@user.com')->first();

        if ($user) {
            Reservation::create([
                'user_id' => $user->id,
                'name' => 'User User',
                'phone' => '1234567890',
                'reserved_at' => Carbon::create(2024, 7, 11),
                'people' => '4',
                'status' => 'confirmado',
            ]);
        }
    }
}
