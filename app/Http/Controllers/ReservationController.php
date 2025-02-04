<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function createForm()
    {
        return view('reservations.create-form');
    }

    public function createProcess(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|integer|digits:10',
            'reserved_at' => 'required|date|after:today',
            'people' => 'required|integer|min:1|max:20',
        ]);

        Reservation::create([
            'user_id' => Auth::id(),
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'reserved_at' => $request->input('reserved_at'),
            'people' => $request->input('people'),
            'status' => 'confirmado',
        ]);

        return redirect()
            ->route('menu')
            ->with('feedback.message', 'Reservación exitosa, en breve se comunicaran con usted.')
            ->with('feedback.type', 'success');
    }
}