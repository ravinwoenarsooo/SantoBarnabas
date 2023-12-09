@extends('layouts.profile')

@section('profil')
<section id="section-2">
    <div class="bg-white h-full relative">
        <h1 class="text-black text-6xl pt-32 font-bold text-center ">Gereja Santo Barnabas</h1>
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900 text-center mt-8">
            Profil Gereja
        </h1>
        <div class="mx-auto w-full flex px-5 py-12 md:flex-row flex-col items-center">
            <div class="xl:w-40rem w-40rem mb-10 md:mb-0">
                <img class="object-cover h-auto object-center rounded" alt="hero" src="{{ asset('images/gereja.png') }}">
            </div>
            <div class="xl:flex-grow md:w-3/4 w-full xl:pl-12 md:pl-8 flex flex-col md:items-start md:text-left items-center text-center relative z-20">
                <p class="mb-4 leading-relaxed sm:text-xl md:text-2xl text-3xl relative">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Etiam nec elit lobortis, vulputate metus quis, lacinia orci. Aliquam auctor sem ac felis suscipit blandit. 
                    Vivamus ante magna, tempor nec massa a, ornare porta mi. Aliquam non vehicula massa, vel pharetra erat. 
                    Nunc eleifend porta ipsum sit amet euismod. Curabitur mi risus, pharetra eget sem in, ultricies ultricies quam. 
                    Nulla hendrerit vitae est ac laoreet.
                </p>
            </div>
        </div>
        <div class="mx-auto w-full px-10 py-12 md:flex-row items-center">
            <p class="mb-4 leading-relaxed sm:text-xl md:text-2xl text-3xl relative">
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
    </div>
</section>
@endsection 