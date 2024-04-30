<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Immunization Schedule</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.3.9/dist/full.css" rel="stylesheet">
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-6">
  <div id="app" class="bg-white rounded-lg shadow-lg p-6">
    <div class="flex justify-between items-center mb-4">
      <h1 class="text-lg font-semibold">Immunization Schedule</h1>
      <button @click="openModal" class="btn btn-primary">Add Schedule</button>
    </div>
    <div class="calendar"></div>
    <!-- Modal untuk menambahkan jadwal -->
    <div :class="{ 'block': isModalOpen, 'hidden': !isModalOpen }" class="fixed z-10 inset-0 overflow-y-auto">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <div class="fixed inset-0 transition-opacity" aria-hidden="true">
      <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
    <div :class="{ 'inline-block': isModalOpen, 'align-top': isModalOpen, 'bg-white': isModalOpen, 'p-6': isModalOpen, 'rounded-lg': isModalOpen, 'text-left': isModalOpen, 'overflow-hidden': isModalOpen, 'shadow-xl': isModalOpen, 'transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full': isModalOpen }" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
      <div>
        <h2 class="text-lg font-semibold mb-4">Tambah Jadwal Immunisasi</h2>
        <button @click="closeModal" class="absolute top-4 right-4">
          <svg class="h-6 w-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
          </svg>
        </button>
        <form action="{{ route('storeSchedule') }}" method="POST">
          @csrf
          <div>
            <label for="scheduleDate">Name:</label>
            <input type="text" id="name" name="name">
          </div>
          <div>
            <label for="scheduleDate">Tanggal:</label>
            <input type="date" id="scheduleDate" name="schedule_date">
          </div>
          <div>
            <label for="doctor">Pilih Dokter:</label>
            <select id="doctor" v-model="selectedDoctor">
            </select>
        </div>
            <label for="scheduleTitle">Deskripsi:</label>
            <input type="text" id="scheduleTitle" name="schedule_title" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-black rounded-md">
          </div>
          <button type="submit" class="btn btn-success">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>

  </div>
  <body class="bg-gray-100 p-6">
      <div id="app" class="bg-white rounded-lg shadow-lg p-6">
        <div class="flex justify-between items-center mb-4">
          <h1 class="text-lg font-semibold">Immunization History</h1>
            <a href="{{ route('schedule') }}" class="btn btn-active btn-primary">Check History</a>
        </div>
      </div>
    </body>
   <body class="bg-gray-100 p-6">
      <div id="app" class="bg-white rounded-lg shadow-lg p-6">
        <div class="flex justify-between items-center mb-4">
          <h1 class="text-lg font-semibold">Location Information</h1>
            <a href="{{ route('hospitals') }}" class="btn btn-primary">Check Details!</a>
        </div>
      </div>
    </body>
       <body class="bg-gray-100 p-6">
      <div id="app" class="bg-white rounded-lg shadow-lg p-6">
        <div class="flex justify-between items-center mb-4">
          <h1 class="text-lg font-semibold">Vaccine Information</h1>
            <a href="{{ route('vaccine') }}" class="btn btn-primary">Check Details!</a>
        </div>
      </div>
    </body>
  

  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
  <script>
    new Vue({
      el: '#app',
      data: {
        isModalOpen: false,
        scheduleDate: '',
        scheduleTitle: '',
        calendar: null,
        events: []
      },
      mounted() {
        this.initCalendar();
        this.fetchDoctors();
      },
      methods: {
        initCalendar() {
          this.calendar = new daisyui.Calendar({
            element: '.calendar',
            defaultView: 'month',
            events: this.events
          });
          this.calendar.render();
        },
        fetchDoctors() {
      // Mengambil data dokter dari backend
      axios.get('/get-doctors') // Sesuaikan dengan endpoint Anda
        .then(response => {
          this.doctors = response.data; // Menyimpan data dokter yang diterima dari backend
        })
        .catch(error => {
          console.error('Error fetching doctors', error);
        });
      },
        openModal() {
          this.isModalOpen = true;
        },
        closeModal() {
          this.isModalOpen = false;
        },
        addSchedule() {
          if (this.scheduleDate && this.scheduleTitle && this.selectedDoctor) {
            const selectedDoctor = this.doctors.find(doctor => doctor.id === this.selectedDoctor);
            this.events.push({
              title: this.scheduleTitle,
              start: this.scheduleDate,
              doctor: selectedDoctor.name
            });
            this.calendar.removeAllEvents();
            this.calendar.addEvents(this.events);
            this.closeModal();
            this.showNotification();
          }
        }
      
      }
    });
  </script>
</body>
</html>
