<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Immunization Schedule</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.3.9/dist/full.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
  <div id="app" class="bg-white rounded-lg shadow-lg p-6">
    <div class="flex justify-between items-center mb-4">
      <h1 class="text-lg font-semibold">Immunization Schedule</h1>
      <button @click="openModal" class="btn btn-primary">Tambah Jadwal</button>
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
            <!-- untuk menambahkan jadwal imun-->
            <form action="{{ route('storeSchedule') }}" method="POST">
              @csrf
              <div>
                <label for="scheduleDate">Tanggal:</label>
                <input type="date" id="scheduleDate" name="schedule_date">
              </div>
              <div>
                <label for="scheduleTitle">Deskripsi:</label>
                <input type="text" id="scheduleTitle" name="schedule_title">
              </div>
              <button type="submit">Simpan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

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
        openModal() {
          this.isModalOpen = true;
        },
        closeModal() {
          this.isModalOpen = false;
        },
        addSchedule() {
          if (this.scheduleDate && this.scheduleTitle) {
            this.events.push({
              title: this.scheduleTitle,
              start: this.scheduleDate
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
