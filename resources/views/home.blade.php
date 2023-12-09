@extends('layouts.home')

@section('content')
    <section id="section-1">
        <div class="bg-cover flex items-center justify-center h-screen relative z-10" 
            style="background-image: url('{{ asset('images/background-1.png') }}');
                    background-position: center; 
                    position: relative;">

            <!-- Background image with overlay -->
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: black; opacity: 0.5;"></div>

            <!-- Text content with animated effect -->
            <div class="flex-col text-center font-montserrat" style="z-index: 1;">
                <!-- Apply the animated-text class to the heading -->
                <h1 class="text-white text-6xl font-bold mb-5 animated-text-fade">IN VERBO AUTEM TUO LAXABO RETE</h1>
                <h2 class="text-white text-3xl mt-5 animated-text-fade">“Karena perintah-Mu akan kutebarkan jalaku”</h2>
            </div>
        </div>
    </section>  

    <section id="section-2">
        <div class="bg-white h-screen relative">
            <h1 class="text-black text-6xl pt-32 font-bold text-center ">Gereja Santo Barnabas</h1>
            <div class="mx-auto w-full flex px-5 py-12 md:flex-row flex-col items-center">
                <div class="xl:w-40rem w-40rem mb-10 md:mb-0">
                    <img class="object-cover h-auto object-center rounded" 
                    alt="hero" 
                    src="{{ asset('images/gereja.png') }}"
                    >
                </div>
                <div class="xl:flex-grow w-1/2 xl:pl-12 md:pl-8 flex flex-col md:items-start md:text-left items-center text-center relative z-20">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Profil Gereja
                    </h1>
                    <p class="mb-8 leading-relaxed sm:text-xl text-3xl relative">
                        Klik tombol dibawah untuk melihat profil.
                    </p>
                    <div class="flex justify-center">
                        <a href="#" class="inline-flex text-white font-bold bg-yellow-700 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-800 rounded text-lg">Selanjutnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- Mario was here-->

    <section id="section-1">
        <div class="bg-cover flex items-center justify-center h-80 relative z-10" 
            style="background-image: url('{{ asset('images/misa.png') }}');
                    background-position: center; 
                    position: relative;">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: black; opacity: 0.5;"></div>
            <div class="flex-col text-center font-montserrat" style="z-index: 1;">
                <h1 class="text-white text-6xl font-bold mb-5 animated-text-fade">Jadwal Misa</h1>
            </div>
        </div>
    </section>  

    <section id="section-4">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-gray-200 p-6 rounded-lg">
                    <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                        </svg>
                    </div>
                    <h1 class="text-lg text-gray-900 font-medium title-font mb-2">Misa Harian</h1>
                    <h2 class="leading-relaxed text-base">06.00 WIB</h2>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-gray-200 p-6 rounded-lg">
                    <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                        <circle cx="6" cy="6" r="3"></circle>
                        <circle cx="6" cy="18" r="3"></circle>
                        <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                        </svg>
                    </div>
                    <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Misa Jumat Pertama</h2>
                    <p class="leading-relaxed text-base">18.00 WIB</p>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-gray-200 p-6 rounded-lg">
                    <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Misa Sabtu</h2>
                    <p class="leading-relaxed text-base">17.00 WIB</p>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-gray-200 p-6 rounded-lg">
                    <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                        <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1zM4 22v-7"></path>
                        </svg>
                    </div>
                    <h2 class="text-lg text-gray-900 font-bold title-font mb-2">Misa Minggu</h2>
                    <p class="leading-relaxed text-base font-normal">05.30 WIB</p>
                    <p class="leading-relaxed text-base font-normal">07.30 WIB</p>
                    <p class="leading-relaxed text-base font-normal">10.00 WIB</p>
                    <p class="leading-relaxed text-base font-normal">17.00 WIB</p>
                    </div>
                </div>
            </div>
        </div>
    <svg width="100%" height="2">
        <line x1="0" y1="1" x2="100%" y2="1" style="stroke:black;stroke-width:2" />
    </svg>
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap w-full mb-20">
            <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                <h1 class="sm:text-6xl font-bold pt-32 mb-2 text-black">WARTA PAROKI</h1>
                <div class="h-1 w-20 bg-yellow-950 rounded"></div>
            </div>
        </div>
        <div class="flex flex-wrap -m-4">
            <!-- forelse($wartaParoki as $item) -->
            <div class="xl:w-1/4 md:w-1/2 p-4">
                <div class="bg-orange-300 bg-opacity-40 p-6 rounded-lg">
                    <img class="h-40 rounded w-full object-cover object-center mb-6" src="{{ asset('images/BannerWP.png') }}" alt="content">
                    <h3 class="tracking-widest text-black text-xs font-medium title-font">01-01-2023</h3>
                    <h2 class="text-lg text-black font-medium title-font mb-4">Judul</h2>
                    <p class="leading-relaxed text-base mb-2">isi kena limit : 25</p>
                    <a href="/" class="px-3 py-2 text-xs font-medium text-center text-black bg-white rounded-lg hover:bg-black hover:text-white">Lihat Warta Paroki</a>
                </div>
            </div>
            <!-- empty -->
            <div class="w-full flex justify-center">
                <div class="bg-orange-300 bg-opacity-40 p-6 rounded-lg font-bold border border-amber-900">
                    <p class="text-black">Tidak ada Warta Paroki!</p>
                </div>
            </div>
            <!-- endforelse -->
        </div>
    </div>  
    <div class="container px-5 py-24 mx-auto" bis_skin_checked="1">
        <div class="flex flex-wrap w-full mb-20">
            <div class="w-full mb-6 lg:mb-0">
                <h1 class="text-black text-1xl font-medium text-center">Gereja Santo Barnabas</h1>
            </div>
            <div class="w-full mb-6 lg:mb-0">
                <h1 class="text-black text-6xl font-bold text-center">Informasi Gereja</h1>
            </div>
        </div>
        <div class="flex flex-wrap" bis_skin_checked="1">
            <!-- foreach($infoPentingCollection as $infoSingle) -->
            <div class="xl:w-1/4 md:w-1/2 p-4">
                <div class="bg-orange-300 bg-opacity-40 p-6 rounded-lg">
                    <img class="h-40 rounded w-full object-cover object-center mb-6" src="{{ asset('images/BannerIF.png') }}" alt="content">
                    <h3 class="tracking-widest text-black text-xs font-medium title-font">01-01-2023</h3>
                    <h2 class="text-lg text-black font-medium title-font mb-4">Judul</h2>
                    <p class="leading-relaxed text-base mb-2">Isi kena limit : 25</p>
                    <a href="/" class="px-3 py-2 text-xs font-medium text-center text-black bg-white rounded-lg hover:bg-black hover:text-white">Lihat Informasi</a>
                </div>
            </div>
            <!-- endforeach -->
            
            <!-- if($infoPentingCollection->isEmpty()) -->
                <div class="w-full flex justify-center">
                    <div class="bg-orange-300 bg-opacity-40 p-6 rounded-lg font-bold border border-amber-900">
                        <p class="text-black">Tidak ada Informasi Penting!</p>
                    </div>
                </div>
            <!-- endif -->
        </div>
    </div>  
    </section>

    <div style="height: 1000px;"></div>

    <!-- Add the CSS styles for the animated text -->
    <style>
        @keyframes fade {
            0%, 100% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        /* Apply the fade transition styles */
        .animated-text-fade {
            animation: fade 2s ; /* Adjust the animation duration */
        }
    </style>
@endsection
    