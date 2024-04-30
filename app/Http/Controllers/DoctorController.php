<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use App\Models\DoctorSchedules;
use Illuminate\Http\Request;

class DoctorController
{
    public function doctor()
    {
        $doctors = Doctor::with('doctors')->get();

        return view('dashboard/doctorlist', compact('doctors'));

    }
    public function getDoctors() {
    $doctors = Doctor::all(); // Misalnya Doctor adalah model Anda
    return response()->json($doctors);
    }
}