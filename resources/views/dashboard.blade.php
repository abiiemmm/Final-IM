<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IIS Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
        @vite('resources/css/app.css')
</head>

<body class="bg-blue-50">
    {{-- <div class="flex"> --}}


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
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Sign In</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('doctor') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" 
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z" clip-rule="evenodd"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Doctors</span>
                    </a>
                        <a href="{{ route('aboutus') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M7 2a2 2 0 0 0-2 2v1a1 1 0 0 0 0 2v1a1 1 0 0 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H7Zm3 8a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm-1 7a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3 1 1 0 0 1-1 1h-6a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">About Us</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <div class="p-4 sm:ml-64">
        <div class="p-4  rounded-lg mt-8">

            <div class="grid grid-cols-2 gap-4 mb-4 mt-10">
                <a href="#"
                    class="flex flex-col items-center bg-blue-400 border border-gray-200 rounded-lg shadow-md md:flex-row md:max-w-xl  dark:border-gray-700 dark:bg-gray-800 ">
                    <div class="flex flex-col justify-between p-4 leading-normal md:w-1/2">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">"Every immunization shot is a small step towards realizing a big dream: a healthy and strong generation."</h5>
                        <p class="mb-3 font-normal text-white dark:text-gray-400">"Don't let illness get in the way of children's dreams."
                        </p>
                        
                        <button class="bg-white text-blue-400 font-semibold py-2 px-4 rounded-lg shadow">Learn
                            More</button>
                    </div>
                    <div class="hidden md:block md:w-1/2">
                        <img class="object-cover w-full h-96 rounded-full md:h-auto md:rounded-none md:rounded-r-lg"
                            src="https://toppng.com/uploads/thumbnail/doctor-png-11553965769d4byjtq7ip.png"
                            alt="">
                    </div>
                </a>
                <div class=" bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
                    <div class="px-6 py-4">
                        <div class="text-center">
                            <h2 class="text-lg font-semibold text-gray-800 dark:text-white">April 2024</h2>
                        </div>
                        <div class="mt-4 grid grid-cols-7 gap-4">
                            <div class="flex items-center justify-center h-10 bg-gray-100 dark:bg-gray-700">Sun</div>
                            <div class="flex items-center justify-center h-10 bg-gray-100 dark:bg-gray-700">Mon</div>
                            <div class="flex items-center justify-center h-10 bg-gray-100 dark:bg-gray-700">Tue</div>
                            <div class="flex items-center justify-center h-10 bg-gray-100 dark:bg-gray-700">Wed</div>
                            <div class="flex items-center justify-center h-10 bg-gray-100 dark:bg-gray-700">Thu</div>
                            <div class="flex items-center justify-center h-10 bg-gray-100 dark:bg-gray-700">Fri</div>
                            <div class="flex items-center justify-center h-10 bg-gray-100 dark:bg-gray-700">Sat</div>
                           
                            <div class="flex items-center justify-center h-10">1</div>
                            <div class="flex items-center justify-center h-10">2</div>
                            <div class="flex items-center justify-center h-10">3</div>
                            <div class="flex items-center justify-center h-10">4</div>
                            <div class="flex items-center justify-center h-10">5</div>
                            <div class="flex items-center justify-center h-10">6</div>
                            <div class="flex items-center justify-center h-10">7</div>
                            <div class="flex items-center justify-center h-10">8</div>
                            <div class="flex items-center justify-center h-10">9</div>
                            <div class="flex items-center justify-center h-10">10</div>
                            <div class="flex items-center justify-center h-10">11</div>
                            <div class="flex items-center justify-center h-10">12</div>
                            <div class="flex items-center justify-center h-10">13</div>
                            <div class="flex items-center justify-center h-10">14</div>
                            <div class="flex items-center justify-center h-10">15</div>
                            <div class="flex items-center justify-center h-10">16</div>
                            <div class="flex items-center justify-center h-10">17</div>
                            <div class="flex items-center justify-center h-10">18</div>
                            <div class="flex items-center justify-center h-10">19</div>
                            <div class="flex items-center justify-center h-10">20</div>
                            <div class="flex items-center justify-center h-10">21</div>
                            <div class="flex items-center justify-center h-10">22</div>
                            <div class="flex items-center justify-center h-10">23</div>
                            <div class="flex items-center justify-center h-10">24</div>
                            <div class="flex items-center justify-center h-10">25</div>
                            <div class="flex items-center justify-center h-10">26</div>
                            <div class="flex items-center justify-center h-10">27</div>
                            <div class="flex items-center justify-center h-10">28</div>
                            <div class="flex items-center justify-center h-10">29</div>
                            <div class="flex items-center justify-center h-10">30</div>
                        </div>
                    </div>
                </div>


            </div>


            <div class="grid grid-cols-4 gap-4 mb-4 mt-10">

                <a href="#"
                    class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    {{-- <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                        src="https://i.pinimg.com/736x/6c/ff/3f/6cff3f8f19e8894e8f20e655b0c88f22.jpg" alt=""> --}}
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Total
                            Children
                        </h5>
                        <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">00
                            Children
                        </h1>
                    </div>
                </a>


                <a href="#"
                    class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    {{-- <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                        src="https://ditpsd.kemdikbud.go.id/kss/wp-content/uploads/2023/05/4-2-e1684444433736-1024x709.png"
                        alt=""> --}}
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Children
                            Immunized
                        </h5>
                        <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">00
                            Children
                        </h1>
                    </div>
                </a>


                <a href="#"
                    class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    {{-- <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                        src="https://i.pinimg.com/736x/6c/ff/3f/6cff3f8f19e8894e8f20e655b0c88f22.jpg" alt=""> --}}
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Percentage
                            Immunized</h5>
                        <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">0 %
                        </h1>
                    </div>
                </a>
                <a href="#"
                    class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    {{-- <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                        src="https://i.pinimg.com/736x/6c/ff/3f/6cff3f8f19e8894e8f20e655b0c88f22.jpg" alt=""> --}}
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Next
                            Immunized</h5>
                        <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">-
                        </h1>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="p-4 rounded-lg mt-8 grid grid-cols-2 gap-4">

        {{-- Chart pertama --}}
        <div class="bg-gray-50 dark:bg-gray-800 rounded-lg shadow-md p-4">
            <div id="chart" style="width: 100%; height: 100%;"></div>
        </div>

        {{-- Chart kedua --}}
        <div id="column-chart" class="flex bg-gray-50 dark:bg-gray-800 rounded-lg shadow-md p-4">
            <div id="chart2" style="width: 100%; height: 100%;"></div>
        </div>
    </div>
</div>

</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    // Data for graph
    var options = {
        chart: {
            type: 'line',
            height: 350
        },
        series: [{
            name: 'Child',
            data: [30, 40, 35, 50, 49, 60, 70, 91, 125]
        }],
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep']
        }
    }

    
    var chart = new ApexCharts(document.querySelector("#chart"), options);

    
    chart.render();
</script>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    // Data for column chart
    var options = {
        chart: {
            type: 'bar',
            height: 350
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '55%',
                endingShape: 'rounded'
            },
        },
        dataLabels: {
            enabled: false
        },
        series: [{
            name: 'Total Children',
            data: [30, 40, 35, 50, 49, 60, 70, 91, 125]
        }],
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep']
        },
        colors: ['#007bff']
    }

    var chart = new ApexCharts(document.querySelector("#column-chart"), options);
    chart.render();
</script>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    var options = {
        chart: {
            type: 'area',
            height: 350
        },
        series: [{
            name: 'Sales',
            data: [30, 40, 35, 50, 49, 60, 70, 91, 125]
        }],
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep']
        }
    }

    var areaChart = new ApexCharts(document.querySelector("#area-chart"), options);
    areaChart.render();
</script>


<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>



