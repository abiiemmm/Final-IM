<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Hospital;
use App\Models\User;

class ScheduleController
{
    public function schedule()
    {
        $schedules = Schedule::all();
        return view('dashboard/historyimun', ['schedules' => $schedules]);
    }

    public function store(Request $request)
    {
        // Validasi permintaan
        $validatedData = $request->validate([
            'schedule_date' => 'required|date',
            'schedule_title' => 'required|string|max:255',
            'name' => 'required|string|max:255',
        ]);

        // Buat objek Schedule baru
        $schedule = new Schedule();
        $schedule->schedule_date = $validatedData['schedule_date'];
        $schedule->schedule_title = $validatedData['schedule_title'];
        $schedule->name = $validatedData['name'];

        // Simpan data ke database
        $schedule->save();

    }

// THIS IS FOR HOSPITAL FUNCTION
    // Menampilkan semua rumah sakit
        public function hospitals()
    {
        $hospitals = Hospital::all();
        return view('dashboard/hospitalcek', ['hospitals' => $hospitals]);
    }
    
    // Menambahkan rumah sakit baru
    public function stores(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);

        $hospital = new Hospitals(); // fixed typo, changed to singular
        $hospital->name = $validatedData['name'];
        $hospital->address = $validatedData['address'];
        $hospital->save();

        return response()->json($hospital);
    }

    // Mengupdate rumah sakit
    public function update(Request $request, $id)
    {
        $hospital = Hospitals::findOrFail($id); // fixed typo, changed to singular

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);

        $hospital->name = $validatedData['name'];
        $hospital->address = $validatedData['address'];
        $hospital->save();

        return response()->json($hospital);
    }

    // Menghapus rumah sakit
    public function destroy($id)
    {
        $hospital = Hospitals::findOrFail($id); // fixed typo, changed to singular
        $hospital->delete();

        return response()->json(null, 204);
    }

// VACCINATION INFORMATION FUNCTION
    public function vaccine()
    {
        return view ('dashboard/vaksininfo');
    }

//USERS INFORMATION FUNCTION
    public function user()
    {
        // Ambil data user dari database
        $user = User::find(auth()->id());

        // Kirim data user ke halaman profil
        return view('dashboard/users', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        // Validasi permintaan
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'nullable|string|max:20',
            // Tambahkan validasi sesuai kebutuhan untuk data lainnya
        ]);

        // Ambil data user dari database
        $user = User::find(auth()->id());

        // Update data user sesuai dengan data yang dikirimkan melalui permintaan
        $user->update($validatedData);

        // Kembalikan pengguna ke halaman profil dengan pesan sukses
        return redirect()->route('profile')->with('success', 'Profile updated successfully');
    }
    
}