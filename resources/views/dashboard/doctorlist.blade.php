<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Dokter</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- DaisyUI CSS -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.3.9/dist/full.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-6">
    <div class="container mx-auto ">
        <h1 class="text-2xl font-semibold mb-4">Daftar Dokter</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Loop through doctors data -->
            @foreach($doctors as $doctor)
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-lg font-semibold mb-2">{{ $doctor->name }}</h2>
                    <p class="text-gray-600 mb-4">Jenis Kelamin : {{ $doctor->gender }}</p>
                    <div class="flex items-center justify-between">
                        <p class="text-gray-700">Jam Praktek:</p>
                        <ul class="text-gray-600">
                            <!-- Check if doctor has schedules -->
                            @if(isset($doctor->doctors) && count($doctor->doctors) > 0)
                                <!-- Loop through doctor's schedules -->
                                @foreach($doctor->doctors as $doctors)
                                    <li>{{ $doctors->hospital }} - {{ $doctors->time }}</li>
                                @endforeach
                            @else
                                <li>Tidak ada jadwal tersedia</li>
                            @endif
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
