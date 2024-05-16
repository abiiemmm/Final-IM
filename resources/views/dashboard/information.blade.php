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

<body class="bg-blue-50 min-h-screen flex flex-col">

    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                        aria-controls="logo-sidebar" type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                    <a href="" class="flex ms-2 md:me-24">
                        <img src="" class="h-8 me-3" alt="" />
                        <span
                            class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">IIS
                            Dashboard</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="{{ route('dashboard') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 22 21">
                            <path
                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path
                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="ms-3">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('user') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 18">
                            <path
                                d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('information') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 18 20">
                            <path
                                d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Information</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('doctor') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Doctors</span>
                    </a>
                    <a href="{{ route('aboutus') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M7 2a2 2 0 0 0-2 2v1a1 1 0 0 0 0 2v1a1 1 0 0 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H7Zm3 8a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm-1 7a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3 1 1 0 0 1-1 1h-6a1 1 0 0 1-1-1Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">About Us</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <div class="p-4 sm:ml-64 flex-grow">
        <div class="p-4  rounded-lg mt-8">
            <div id="app" class="bg-white rounded-lg shadow-lg p-6">
                <div class="flex justify-between items-center mb-4">
                    <h1 class="text-lg font-semibold">Immunization Schedule</h1>
                    <button @click="openModal" class="btn btn-primary">Add Schedule</button>
                </div>
                <div class="calendar"></div>
                <!-- Modal untuk menambahkan jadwal -->
                <div :class="{ 'block': isModalOpen, 'hidden': !isModalOpen }"
                    class="fixed z-10 inset-0 overflow-y-auto">
                    <div class="flex items-center justify-center min-h-screen px-4">
                        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                        </div>
                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"
                            aria-hidden="true">&#8203;</span>
                        <div :class="{ 'inline-block': isModalOpen, 'bg-white': isModalOpen, 'p-6': isModalOpen, 'rounded-lg': isModalOpen, 'text-left': isModalOpen, 'overflow-hidden': isModalOpen, 'shadow-xl': isModalOpen, 'transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full': isModalOpen }"
                            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                            <div>
                                <h2 class="text-lg font-semibold mb-4">Add Immunization Schedules</h2>
                                <button @click="closeModal" class="absolute top-4 right-4">
                                    <svg class="h-6 w-6 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 19l-7-7 7-7"></path>
                                    </svg>
                                </button>
                                <form action="{{ route('storeSchedule') }}" method="POST">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="name"
                                            class="block text-sm font-medium text-gray-700">Name:</label>
                                        <input type="text" id="name" name="name"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md bg-white">
                                    </div>
                                    <div class="mb-4">
                                        <label for="scheduleDate"
                                            class="block text-sm font-medium text-gray-700">Date:</label>
                                        <input type="date" id="scheduleDate" name="schedule_date"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md bg-white">
                                    </div>
                                    <div class="mb-4">
                                        <label for="doctors"
                                            class="block text-sm font-medium text-gray-700">Doctors Name:</label>
                                        <input type="text" id="doctors" name="doctors"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md bg-white">
                                    </div>
                                    <div class="mb-4">
                                        <label for="location"
                                            class="block text-sm font-medium text-gray-700">Location:</label>
                                        <input type="text" id="location" name="location"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md bg-white">
                                    </div>
                                    <div class="mb-4">
                                        <label for="gender"
                                            class="block text-sm font-medium text-gray-700">Gender:</label>
                                        <input type="text" id="gender" name="gender"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md bg-white">
                                    </div>
                                    <div class="mb-4">
                                        <label for="age"
                                            class="block text-sm font-medium text-gray-700">Age:</label>
                                        <input type="text" id="age" name="age"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md bg-white">
                                    </div>

                                    <button type="submit" class="btn btn-success">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="bg-white-100 p-4">
            <div id="app" class="bg-white rounded-lg shadow-lg p-6 mb-4">
                <div class="flex justify-between items-center">
                    <h1 class="text-lg font-semibold">Immunization History</h1>
                    <a href="{{ route('schedule') }}" class="btn btn-active btn-primary">Check History</a>
                </div>
            </div>
        </div>

        <div class="bg-white-100 p-4">
            <div id="app" class="bg-white rounded-lg shadow-lg p-6 mb-4">
                <div class="flex justify-between items-center">
                    <h1 class="text-lg font-semibold">Location Information</h1>
                    <a href="{{ route('hospitals') }}" class="btn btn-primary">Check Details!</a>
                </div>
            </div>
        </div>

        <div class="bg-white-100 p-4">
            <div id="app" class="bg-white rounded-lg shadow-lg p-6 mb-4">
                <div class="flex justify-between items-center">
                    <h1 class="text-lg font-semibold">Vaccine Information</h1>
                    <a href="{{ route('vaccine') }}" class="btn btn-primary">Check Details!</a>
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
                    events: [],
                    doctors: [],
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
    </div>
</body>

</html>
