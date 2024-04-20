
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rumah Sakit & Puskesmas</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.9.4/dist/full.css" rel="stylesheet">
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-6">
  <div class="container mx-auto">
    <h1 class="text-2xl font-semibold mb-4">List of Hospitals & Health Centers</h1>
    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
      <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
          <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name Hospitals</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Address</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone Number</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Operation Hours</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          @foreach ($hospitals as $hospital)
          <tr>
            <td class="px-6 py-4 whitespace-nowrap">{{ $hospital->id }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $hospital->name }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $hospital->address }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $hospital->phone }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $hospital->operational_hours }}</td>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  <!-- JavaScript Section -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
  <script>
    new Vue({
      el: '#app',
      data: {
        hospitals: []
      },
      mounted() {
        // Lakukan permintaan HTTP GET untuk mengambil data rumah sakit dari server menggunakan Fetch API
        fetch('/api/hospitals')
          .then(response => {
            if (!response.ok) {
              throw new Error('Network response was not ok');
            }
            return response.json();
          })
          .then(data => {
            this.hospitals = data;
          })
          .catch(error => {
            console.error('Error fetching hospitals:', error);
          });
      }
    });
  </script>
</body>
</html>