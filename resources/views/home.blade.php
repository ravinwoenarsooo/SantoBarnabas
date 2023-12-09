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
        <div class="bg-white h-full relative">
            <h1 class="text-black text-6xl pt-32 font-bold text-center ">Gereja Santo Barnabas</h1>
            <div class="mx-auto w-full flex px-5 py-12 md:flex-row flex-col items-center">
                <div class="xl:w-40rem w-40rem mb-10 md:mb-0">
                    <img class="object-cover h-auto object-center rounded" 
                    alt="hero" 
                    src="{{ asset('images/gereja.png') }}"
                    >
                </div>
                <div class="xl:flex-grow md:w-3/4 w-full xl:pl-12 md:pl-8 flex flex-col md:items-start md:text-left items-center text-center relative z-20">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">
                        Profil Gereja
                    </h1>
                    <p class="mb-4 leading-relaxed sm:text-xl md:text-2xl text-3xl relative">
                        <p class="hidden md:block mb-4">
                            {{ Str::limit($profile->Isi, 250) }}
                        </p>
                    </p>
                    <div class="flex justify-center">
                        <a href="{{ route('profile.show') }}" class="inline-flex text-white font-bold bg-yellow-700 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-800 rounded text-lg">Selanjutnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- Mario was here-->
    <section id="section-1">
        <div class="bg-cover flex items-center justify-center h-96 relative z-10" 
            style="background-image: url('{{ asset('images/misa.png') }}'); background-position: center;  background-size: cover; position: relative;">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: black; opacity: 0.5;"></div>
            <div class="flex-col text-center font-montserrat text-white" style="z-index: 1;">
                <h1 class="text-6xl font-bold mb-5 animated-text-fade">Jadwal Misa</h1>
                <div class="container mx-auto px-4 lg:px-6">
                    <div class="schedule-container max-w-4xl mx-auto mt-8 sm:mt-12 lg:mt-16">
                        <div class="-my-4 divide-y divide-gray-200 dark:divide-white">
                            <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                                <p class="w-32 text-lg font-normal text-white sm:text-right dark:text-white shrink-0">
                                    Misa Harian
                                </p>
                                <h3 class="text-lg font-semibold text-white dark:text-white">
                                    <a class="hover:underline">06.00 WIB</a>
                                </h3>
                            </div>       
                            <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                                <p class="w-32 text-lg font-normal text-white sm:text-right dark:text-white shrink-0">
                                    Misa Jumat Pertama
                                </p>
                                <h3 class="text-lg font-semibold text-white dark:text-white">
                                    <a class="hover:underline">18.00 WIB</a>
                                </h3>
                            </div>
                            <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                                <p class="w-32 text-lg font-normal text-white sm:text-right dark:text-white shrink-0">
                                    Misa Sabtu
                                </p>
                                <h3 class="text-lg font-semibold text-white dark:text-white">
                                    <a class="hover:underline">17.00 WIB</a>
                                </h3>
                            </div>
                            <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                                <p class="w-32 text-lg font-normal text-white sm:text-right dark:text-white shrink-0">
                                    Misa Minggu
                                </p>
                                <h3 class="text-lg font-semibold text-white dark:text-white">
                                    <a class="hover:underline">05.30 WIB</a>
                                </h3>
                                <h3 class="text-lg font-semibold text-white dark:text-white">
                                    <a class="hover:underline">07.30 WIB</a>
                                </h3>
                                <h3 class="text-lg font-semibold text-white dark:text-white">
                                    <a class="hover:underline">10.00 WIB</a>
                                </h3>
                                <h3 class="text-lg font-semibold text-white dark:text-white">
                                    <a class="hover:underline">17.00 WIB</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>   
    <section>
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-full mb-20">
                <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                    <h1 class="sm:text-6xl font-bold pt-32 mb-2 text-black">Warta Paroki Pamulang</h1>
                    <div class="h-1 w-full mt-10 bg-yellow-950 rounded"></div>
                </div>
            </div>
            <div class="flex flex-wrap -m-4">
                @forelse($wartaParoki as $item)
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-orange-300 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="{{ asset('images/BannerWP.png') }}" alt="content">
                        <h3 class="tracking-widest text-black text-xs font-medium title-font">{{ $item->TanggalUpload }}</h3>
                        <h2 class="text-lg text-black font-medium title-font mb-4">{{ $item->Judul }}</h2>
                        <p class="leading-relaxed text-base mb-2">{{ Str::limit($item->Isi, 25) }}</p>
                        <a href="{{ route('warta-paroki.show', ['id' => (string)$item->id]) }}" class="px-3 py-2 text-xs font-medium text-center text-black bg-white rounded-lg hover:bg-black hover:text-white">Lihat Warta Paroki</a>
                    </div>
                </div>
                @empty
                <div class="w-full flex justify-center">
                    <div class="bg-orange-300 bg-opacity-40 p-6 rounded-lg font-bold border border-amber-900">
                        <p class="text-black">Tidak ada Warta Paroki!</p>
                    </div>
                </div>
                @endforelse
            </div>
        </div>  
        <div class="container px-5 py-24 mx-auto" bis_skin_checked="1">
            <div class="flex flex-wrap w-full mb-20">
                
                <div class="flex flex-wrap w-full mb-20">
                    <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                        <h1 class="sm:text-6xl font-bold pt-32 mb-2 text-black">Informasi Gereja</h1>
                        <div class="h-1 w-full mt-10 bg-yellow-950 rounded"></div>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap" bis_skin_checked="1">
                @foreach($informasiGereja as $infoSingle)
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-orange-300 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="{{ asset('images/BannerIF.png') }}" alt="content">
                        <h3 class="tracking-widest text-black text-xs font-medium title-font">{{ $infoSingle->TanggalUpload }}</h3>
                        <h2 class="text-lg text-black font-medium title-font mb-4">{{ $infoSingle->Judul }}</h2>
                        <p class="leading-relaxed text-base mb-2">{{ Str::limit($infoSingle->Isi, 25) }}</p>
                        <a href="{{ route('informasi-gereja.show', ['id' => (string)$infoSingle->id]) }}" class="px-3 py-2 text-xs font-medium text-center text-black bg-white rounded-lg hover:bg-black hover:text-white">Lihat Informasi</a>
                    </div>
                </div>
                @endforeach
                
                @if($informasiGereja->isEmpty())
                    <div class="w-full flex justify-center">
                        <div class="bg-orange-300 bg-opacity-40 p-6 rounded-lg font-bold border border-amber-900">
                            <p class="text-black">Tidak ada Informasi Penting!</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>  
    </section>

    <!-- <div style="height: 1000px;"></div> -->

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
    