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
        <div class="bg-cover mt-10 flex items-center justify-center h-screen relative z-10" 
            style="background-image: url('{{ asset('images/misa.png') }}');
                    background-position: center; 
                    position: relative;">

            <!-- Background image with overlay -->
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: black; opacity: 0.5;"></div>

            <!-- Text content with animated effect -->
            <div class="flex-col text-center font-montserrat" style="z-index: 1;">
                <!-- Apply the animated-text class to the heading -->
                <h1 class="text-white text-6xl font-bold mb-5 animated-text-fade">Jadwal Misa</h1>
                <h2 class="text-white text-3xl mt-5 animated-text-fade">“Karena perintah-Mu akan kutebarkan jalaku”</h2>
            </div>
        </div>
    </section>  

    <section id="section-4">
        
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
    