@extends('layouts.main')

@section('container')
{{-- hero --}}
<section class="bg-center bg-no-repeat bg-gray-400  bg-blend-multiply mt-24 bg-cover h-72 mx-auto" style="background-image: url('/img/hero.png') ">
    <div class="px-4 text-center py-32 lg:py-[250px] ">
        <h1 class="mb-7 mt-[-30px] text-3xl font-extrabold tracking-tight leading-none text-white md:text-4xl lg:text-5xl lg:mt-[-180px]">Beli Rumah Impianmu hanya di Homespot</h1>
        
        <div class="bg-gray-600 bg-opacity-50 lg:mx-52 mx-12 rounded-md">
        <form class="flex items-center max-w-sm mx-auto rounded-xl">   
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                      </svg>
                      
                </div>
                <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 " placeholder="Cari lokasi, nama properto atau nama developer" required />
            </div>
            
        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-gray-600 bg-gray-50  hover:bg-gray-300 focus:ring-4 focus:outline-nonefont-medium rounded-lg text-sm px-5 py-2.5 text-center justify-content-between inline-flex items-center ml-2" type="button">Tipe <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
            </button>
            
            <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semua</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Apartmant</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Rumah</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ruko</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Vila</a>
                </li>
                </ul>
            </div>
    
            <button type="submit" class="p-2.5 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
                <span class="sr-only">Search</span>
            </button>
        </form>
    </div>

    </div>
</section>
{{-- end hero --}}

{{-- card --}}
<section id="card" class="pt-20 bg-[#EEF8FF]">
    <div class="container">
        <div class="gap-1 lg:grid lg:grid-cols-4 ">
            <!-- Cards 1 -->
            <div class="w-full mx-auto my-5 block max-w-sm p-6 ">
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow  ">
                    <a href="#">
                        <img class="rounded-lg flex justify-center w-full p-1" src="./img/img3.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-md font-bold tracking-tight text-gray-900 ">Noteworthy technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-lg text-gray-700 0">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
                </div>
            </div>
            <!-- Cards 1 -->
            <div class="w-full mx-auto my-5 block max-w-sm p-6 ">
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow  ">
                    <a href="#">
                        <img class="rounded-lg flex justify-center w-full p-1" src="./img/img3.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-md font-bold tracking-tight text-gray-900 ">Noteworthy technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-lg text-gray-700 0">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
                </div>
            </div>
            <!-- Cards 1 -->
            <div class="w-full mx-auto my-5 block max-w-sm p-6 ">
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow  ">
                    <a href="#">
                        <img class="rounded-lg flex justify-center w-full p-1" src="./img/img3.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-md font-bold tracking-tight text-gray-900 ">Noteworthy technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-lg text-gray-700 0">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
                </div>
            </div>
            <!-- Cards 1 -->
            <div class="w-full mx-auto my-5 block max-w-sm p-6 ">
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow  ">
                    <a href="#">
                        <img class="rounded-lg flex justify-center w-full p-1" src="./img/img3.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-md font-bold tracking-tight text-gray-900 ">Noteworthy technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-lg text-gray-700 0">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- end card --}}

{{-- jelajahi --}}
<section class="">
    <h1 class="pl-5 text-2xl py-6 font-extrabold ">Jelajahi Properti Dengan Virtual 360</h1>
    <div class="flex justify-center">
        <div class="w-3/10 flex items-center">
            <div class="w-full text-right">
                <button onclick="next()" class="p-3 rounded-full bg-white border border-gray-100 shadow-lg mx-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                    </svg>
                </button>
            </div>
        </div>
        <div id="sliderContainer" class="w-full overflow-hidden">
            <ul id="slider" class="flex w-full duration-700">
                <li class="p-3 ">
                    <div class="bg-white border border-gray-200 shadow-xl rounded-lg p-1 h-full ">
                        {{-- Image --}}
                        <img class="rounded-lg mx-auto mb-5 h-40 w-full object-cover" src="./img/img2.jpg" alt=""/>
                        <div class="text-center">
                            <h1 class=" font-extrabold text-2xl">Umah Melah Banyuning</h1>
                            <p class=" text-xs text-gray-400">Kecamatan Denpasar Barat, Bali</p>
                            <h2 class="text-xl text-primary">RP.290.000.000 - Rp.619.000.000</h2>
                            <p class="text-gray-400">Pengembang <span class="text-orange-600">PT Umah Mesari</span></p>
                        </div>
                        <!-- Button Reservasi -->
                        <div class="mt-4 flex items-center justify-center">
                            <a href="#" class=" items-center px-36  inline-flex py-1.5 text-sm font-medium  text-black bg-white rounded-full border-2 border-black  hover:text-gray-600 focus:z-10 focus:ring-2 focus:ring-black focus:text-black">
                                Liat Detail
                            </a>
                        </div>
                </li>
                <li class="p-3 ">
                    <div class="bg-white border border-gray-200 shadow-xl rounded-lg p-1 h-full ">
                        {{-- Image --}}
                        <img class="rounded-lg mx-auto mb-5 h-40 w-full object-cover" src="./img/img3.jpg" alt=""/>
                        <div class="text-center">
                            <h1 class=" font-extrabold text-2xl">Griya Tabanan</h1>
                            <p class=" text-xs text-gray-400">Kecamatan Denpasar Barat, Bali</p>
                            <h2 class="text-xl text-primary">RP.298.000.000 - Rp.355.000.000</h2>
                            <p class="text-gray-400">Pengembang <span class="text-orange-600">PT Umah Mesari</span></p>
                        </div>
                        <!-- Button Reservasi -->
                        <div class="mt-4 flex items-center justify-center">
                            <a href="#" class="flex items-center px-36 py-1.5 text-sm font-medium  text-black bg-white rounded-full border-2 border-black  hover:text-gray-600 focus:z-10 focus:ring-2 focus:ring-black focus:text-black">
                                Liat Detail
                            </a>
                        </div>
                </li>
                <li class="p-3 ">
                    <div class="bg-white border border-gray-200 shadow-xl rounded-lg p-1 h-full ">
                        {{-- Image --}}
                        <img class="rounded-lg mx-auto mb-5 h-40 w-full object-cover" src="./img/img4.jpg" alt=""/>
                        <div class="text-center">
                            <h1 class=" font-extrabold text-2xl">Kembang Anyelir Residence</h1>
                            <p class=" text-xs text-gray-400">Kecamatan Denpasar Barat, Bali</p>
                            <h2 class="text-xl text-primary">RP.875.000.000 - Rp.950.000.000</h2>
                            <p class="text-gray-400">Pengembang <span class="text-orange-600">CV Rumah Baliku</span></p>
                        </div>
                        <!-- Button Reservasi -->
                        <div class="mt-4 flex items-center justify-center">
                            <a href="#" class="flex items-center px-36 py-1.5 text-sm font-medium  text-black bg-white rounded-full border-2 border-black  hover:text-gray-600 focus:z-10 focus:ring-2 focus:ring-black focus:text-black">
                                Liat Detail
                            </a>
                        </div>
                </li>
                <li class="p-3 ">
                    <div class="bg-white border border-gray-200 shadow-xl rounded-lg p-1 h-full ">
                        {{-- Image --}}
                        <img class="rounded-lg mx-auto mb-5 h-40 w-full object-cover" src="./img/img5.jpg" alt=""/>
                        <div class="text-center">
                            <h1 class=" font-extrabold text-2xl">Taman Sentosa Uma Desa</h1>
                            <p class=" text-xs text-gray-400">Kecamatan Denpasar Barat, Bali</p>
                            <h2 class="text-xl text-primary">RP.550.000.000 - Rp.650.000.000</h2>
                            <p class="text-gray-400">Pengembang <span class="text-orange-600">PPT Wira Mitra Utama</span></p>
                        </div>
                        <!-- Button Reservasi -->
                        <div class="mt-4 flex items-center justify-center">
                            <a href="#" class="flex items-center px-36 py-1.5 text-sm font-medium  text-black bg-white rounded-full border-2 border-black  hover:text-gray-600 focus:z-10 focus:ring-2 focus:ring-black focus:text-black">
                                Liat Detail
                            </a>
                        </div>
                </li>
                <li class="p-3 ">
                    <div class="bg-white border border-gray-200 shadow-xl rounded-lg p-1 h-full ">
                        {{-- Image --}}
                        <img class="rounded-lg mx-auto mb-5 h-40 w-full object-cover" src="./img/img2.jpg" alt=""/>
                        <div class="text-center">
                            <h1 class=" font-extrabold text-2xl">Umah Melah Banyuning</h1>
                            <p class=" text-xs text-gray-400">Kecamatan Denpasar Barat, Bali</p>
                            <h2 class="text-xl text-primary">RP.290.000.000 - Rp.619.000.000</h2>
                            <p class="text-gray-400">Pengembang <span class="text-orange-600">PT Umah Mesari</span></p>
                        </div>
                        <!-- Button Reservasi -->
                        <div class="mt-4 flex items-center justify-center">
                            <a href="#" class="flex items-center px-36 py-1.5 text-sm font-medium  text-black bg-white rounded-full border-2 border-black  hover:text-gray-600 focus:z-10 focus:ring-2 focus:ring-black focus:text-black">
                                Liat Detail
                            </a>
                        </div>
                </li>
    
            </ul>
        </div>
        <div class="w-3/10 flex items-center">
            <div class="w-full">
                <button onclick="prev()" class="p-3 rounded-full bg-white border border-gray-100 shadow-lg mx-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
</section>
{{-- end jelajahi --}}


@endsection
