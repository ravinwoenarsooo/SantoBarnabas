@extends('layouts.home')

@section('content')
    <section>
    <section id="section-2">
    <div class="bg-white h-full relative">
    <hr class="border-b-2 border-stone-500 mx-auto w-90 mb-10">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-stone-800 text-center mt-8">
            Gereja Santo Barnabas
        </h1>
        <h1 class="text-stone-800 text-6xl pt-20 font-bold text-center ">Informasi Gereja</h1>

        <div class="mx-auto w-full flex px-5 py-12 md:flex-row flex-col items-center justify-center">
            <div class="xl:w-40rem w-40rem mb-1 md:mb-0">
                <img class="object-cover h-auto object-center rounded" alt="hero" src="{{ asset('images/gereja.png') }}">
            </div>
        </div>
        <div class="title-font sm:text-3xl text-3xl mb-4 font-medium text-stone-800 text-center">
            Profil Gereja Santo Barnabas
        </div>
        <div class="mx-auto w-full px-10 py-12 md:flex-row items-center">
    <p class="mb-4 leading-relaxed sm:text-xl md:text-2xl text-3xl relative text-center">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Etiam nec elit lobortis, vulputate metus quis, lacinia orci. Aliquam auctor sem ac felis suscipit blandit. 
                Vivamus ante magna, tempor nec massa a, ornare porta mi. Aliquam non vehicula massa, vel pharetra erat. 
                Nunc eleifend porta ipsum sit amet euismod. Curabitur mi risus, pharetra eget sem in, ultricies ultricies quam. 
                Nulla hendrerit vitae est ac laoreet.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Etiam nec elit lobortis, vulputate metus quis, lacinia orci. Aliquam auctor sem ac felis suscipit blandit. 
                Vivamus ante magna, tempor nec massa a, ornare porta mi. Aliquam non vehicula massa, vel pharetra erat. 
                Nunc eleifend porta ipsum sit amet euismod. Curabitur mi risus, pharetra eget sem in, ultricies ultricies quam. 
                Nulla hendrerit vitae est ac laoreet.
            </p>
        </div>
        <div class="title-font sm:text-3xl text-3xl mb-4 font-medium text-stone-800 text-center">
            Lokasi Gereja Santo Barnabas
        </div>
        <div class="mx-auto w-full px-10 py-12 md:flex-row items-center flex justify-center">
    <img class="object-cover h-auto object-center rounded" alt="Your Image Description" src="{{ asset('images/peta.png') }}">
</div>

    </div>
</section>
    </section>
@endsection 