<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Riwayat Imunisasi</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-6">
  <div id="app" class="container mx-auto">
    <h1 class="text-2xl font-semibold mb-4">Riwayat Imunisasi</h1>
    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
      <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
          <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
          </tr>
        </thead>
         <tbody class="bg-white divide-y divide-gray-200">
          @foreach ($schedules as $schedule)
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">{{ $schedule->id }}</td>
              <td class="px-6 py-4 whitespace-nowrap">{{ $schedule->name }}</td>
              <td class="px-6 py-4 whitespace-nowrap">{{ $schedule->schedule_date }}</td>
              <td class="px-6 py-4 whitespace-nowrap">{{ $schedule->schedule_title }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
  <script>
    new Vue({
    el: '#app',
    data: {
        schedules: []
    },
    mounted() {
        // Lakukan permintaan HTTP GET untuk mengambil data riwayat imunisasi dari server menggunakan Fetch API
        fetch('/api/schedules')
        .then(response => {
            if (!response.ok) {
            throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            this.schedules = data;
            // Tambahkan pengecekan langsung terhadap objek schedule di sini
            console.log(this.schedules); // Contoh: mencetak data schedules ke konsol
        })
        .catch(error => {
            console.error('Error fetching schedules:', error);
        });
    }
    });
  </script>
</body>
</html>
