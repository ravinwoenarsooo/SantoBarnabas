<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Montserrat font using a link tag -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap">
    <title>Paroki Santo Barnabas</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <div class="bg-white h-70 lg:h-100"  style="background-image: url('{{ asset('images/Rectangle.png') }}'); background-size: contain; background-position: center;">
        <div class="container px-5 py-6 mx-auto flex flex-wrap items-center justify-center sm:flex-row flex-col">
            <div class="flex items-center mb-2 sm:mb-0">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-white mt-1 mr-2">
                    <img src="{{ asset('images/email.png') }}" alt="Email Logo" class="w-6 h-auto"> 
                </a>
                <p class="text-md text-white font-bold mr-4">parokisantobarnabas@gmail.com</p>
            </div>
            
            <div class="flex items-center">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-white mr-2">
                    <img src="{{ asset('images/phone.png') }}" alt="Phone Logo" class="w-6 h-auto"> 
                </a>
                <p class="text-md text-white font-bold">(021) 74713567</p>
            </div>
            
            <span class="inline-flex sm:ml-auto justify-center sm:justify-start">
                <a href="https://www.youtube.com/@KomsosBarnabas" class="ml-3 text-white mx-4"
                onmouseover="this.style.color='red'" 
                onmouseout="this.style.color='white'">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-auto" viewBox="0 0 24 24">
                        <path d="M23.2 7.6s-.2-1.6-1-2.3c-.9-1-1.9-1-2.4-1.1C17.4 4 12 4 12 4s-5.4 0-7.8.2c-.5 0-1.5.1-2.4 1.1C.8 6 .8 7.6.8 7.6s-.2 1.7-.2 3.4v1.8c0 1.7.2 3.4.2 3.4s.2 1.6 1 2.3c.9 1 2 1 2.5 1.1 1.8.2 7.5.2 7.5.2s5.4 0 7.8-.2c.5 0 1.5-.1 2.4-1.1.7-.8 1-2.3 1-2.3s.2-1.7.2-3.4v-1.8c0-1.7-.2-3.4-.2-3.4zM9.5 15.8V8.8l6.7 3.5-6.7 3.5z"></path>
                    </svg>
                </a>
                <a href="https://www.instagram.com/komsossantobarnabas/" class="ml-3 text-white"
                onmouseover="this.style.color='purple'" 
                onmouseout="this.style.color='white'">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-auto" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                </a>
            </span>
        </div>
        </div>
        <div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
            <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                <div class="p-4 flex flex-row items-center justify-between">
                    <img class="h-auto w-20 mr-5" src="{{ asset('images/paroki.png') }}" alt="">
                    <a href="/" class="text-lg font-bold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">Paroki Santo Barnabas</a>
                    <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
                <a class="px-4 py-2 mt-2 mx-4 text-md font-semibold text-gray-900 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/">Beranda</a>
                <a class="px-4 py-2 mt-2 text-md font-semibold text-gray-900 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/kontak">Kontak</a>
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-md font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <span>Seksi Kategorial</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                        <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800 relative z-20">
                            <!--  -->
                            <div @click.away="open = false" class="relative" x-data="{ open: false }">
                                <button @click="open = !open" class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                    <span>Bidang Liturgi</span>
                                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </button>
                                <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                                    <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800 relative z-20">
                                        <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Liturgi</a>
                                    </div>
                                </div>
                            </div> 
                            <div @click.away="open = false" class="relative" x-data="{ open: false }">
                                <button @click="open = !open" class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                    <span>Bidang Pelayanan</span>
                                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </button>
                                <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                                    <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800 relative z-20">
                                        <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Pengembangan Sosial Ekonomi (PSE)</a>
                                        <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Orang Muda Katolik (OMK)</a>
                                        <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Kerasulan Keluarga</a>
                                        <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Kerasulan Awam</a>
                                        <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Hubungan Antar Agama dan Kemasyarakatan</a>
                                    </div>
                                </div>
                            </div> 
                            <div @click.away="open = false" class="relative" x-data="{ open: false }">
                                <button @click="open = !open" class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                    <span>Bidang Pewartaan</span>
                                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </button>
                                <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                                    <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800 relative z-20">
                                        <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Komsos</a>
                                        <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Kerasulan Kitab Suci</a>
                                        <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Katekese</a>
                                    </div>
                                </div>
                            </div> 
                            <!--  -->
                            <!-- <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Bidang Liturgi</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Bidang Pelayanan</a> -->
                        </div>
                    </div>
                </div>    
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-md font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <span>Layanan</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                        <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800 relative z-20">
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Reservasi Fasilitas</a>
                        </div>
                    </div>
                </div>    
                </nav>
            </div>
        </div>
    <header>
    <main class="py-0">
        @yield('content')
    </main>
    <footer class="text-gray-400 bg-stone-800 body-font bottom-0 w-full relative">
        <div class="py-8 flex flex-wrap -mb-10 md:text-left text-white order-first md:w-1/2 ml-4">
            <div class="md:w-1/2 w-full px-4">
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-left text-white mx-5 mb-20">
                Paroki Pamulang
                    <br>Gereja St.
                    <br>Barnabas
                </h1>
            </div>
        <div class="md:w-1/2 w-full px-4">  
            <div class="text-4xl font-bold mb-4" style="text-decoration: none;">Lokasi Gereja</div>
                <nav class="list-none mb-10" style="text-decoration: none;">
                    St. Barnabas <br className='md:hidden block' />
                    Jl. Moh. Toha No.3, <br className='md:hidden block' />
                    RT.002/RW.005, Pd. Cabe Udik, <br className='md:hidden block' />
                    Kec. Pamulang, Kota Tangerang Selatan, Banten 15418 <br className='md:hidden block' />
                    <br className='md:hidden block' />
                    <a href="https://www.google.com/maps/place/Saint+Barnabas+Catholic+Church,+Pamulang/@-6.348557,106.7476011,17z/data=!3m1!4b1!4m16!1m9!4m8!1m0!1m6!1m2!1s0x2e69ef0c62f22ac9:0x7f8b5476db79fc14!2sSaint+Barnabas+Catholic+Church,+Pamulang,+Jl.+Moh.+Toha+No.3,+RT.002%2FRW.005,+Pondok+Cabe+Udik,+Pamulang,+South+Tangerang+City,+Banten+15418!2m2!1d106.7502397!2d-6.3485621!3m5!1s0x2e69ef0c62f22ac9:0x7f8b5476db79fc14!8m2!3d-6.3485623!4d106.750176!16s%2Fg%2F1pzq1l0n9?entry=ttu" target="_blank">
                        <button type="button" class="text-2xl font-bold mb-4 px-4 py-2 rounded bg-white border border-gray-400 hover:bg-stone-800 focus:outline-none focus:border-gray-500 focus:shadow-outline-gray" style="color: #3E2723;" onmouseover="this.style.color='#ffffff'" onmouseout="this.style.color='#3E2723'">Google Maps</button>
                    </a>
                </nav>
            </div>
        </div>
        <div class="bg-white" bis_skin_checked="1">
            <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col" bis_skin_checked="1">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
                    <img src="{{ asset('images/paroki.png') }}" alt="Paroki Logo" class="w-8 h-8 rounded-full">
                </a>
                <p class="text-md text-black sm:ml-6 sm:mt-0 mt-4">&copy; {{ date('Y') }}</p>
                <p class="text-md text-black font-bold sm:ml-6 sm:mt-0 mt-4">Komsos St.Barnabas Pamulang</p>
                <p class="text-md text-black sm:ml-6 sm:mt-0 mt-4">All Right Reserved.</p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                    <a href="https://www.youtube.com/@KomsosBarnabas" class="ml-3 text-black"
                    onmouseover="this.style.color='red'" 
                    onmouseout="this.style.color='black'">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-auto" viewBox="0 0 24 24">
                            <path d="M23.2 7.6s-.2-1.6-1-2.3c-.9-1-1.9-1-2.4-1.1C17.4 4 12 4 12 4s-5.4 0-7.8.2c-.5 0-1.5.1-2.4 1.1C.8 6 .8 7.6.8 7.6s-.2 1.7-.2 3.4v1.8c0 1.7.2 3.4.2 3.4s.2 1.6 1 2.3c.9 1 2 1 2.5 1.1 1.8.2 7.5.2 7.5.2s5.4 0 7.8-.2c.5 0 1.5-.1 2.4-1.1.7-.8 1-2.3 1-2.3s.2-1.7.2-3.4v-1.8c0-1.7-.2-3.4-.2-3.4zM9.5 15.8V8.8l6.7 3.5-6.7 3.5z"></path>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/komsossantobarnabas/" class="ml-3 text-black"
                    onmouseover="this.style.color='#962fbf'" 
                    onmouseout="this.style.color='black'">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-auto" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                    </a>
                </span>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</body>
</html>