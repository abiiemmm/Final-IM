<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;

class ScheduleController
{
    public function store(Request $request)
    {
        // Validasi permintaan
        $validatedData = $request->validate([
            'schedule_date' => 'required|date',
            'schedule_title' => 'required|string|max:255',
        ]);

        // Buat objek Schedule baru
        $schedule = new Schedule();
        $schedule->schedule_date = $validatedData['schedule_date'];
        $schedule->schedule_title = $validatedData['schedule_title'];

        // Simpan data ke database
        $schedule->save();

    }
}
