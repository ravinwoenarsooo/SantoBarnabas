@extends('layouts.home')

@section('content')
<section id="section-2">
    <div class="bg-white h-full relative">
        <hr class="border-b-2 border-stone-500 mx-auto w-90 mb-10">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-stone-800 text-center mt-8">
            Gereja Santo Barnabas
        </h1>
        <h1 class="text-stone-800 max-xs:text-5xl max-sm:pr-0.5 max-sm:pl-0.5 max-sm:text-5xl md:text-5xl lg:text-7xl pr-32 pl-32 pt-2 pb-2 font-bold text-center ">{{ $informasiGereja->Judul }}</h1>
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-stone-800 text-center mt-8">
        {{ $informasiGereja->TanggalUpload }}
        </h1>
        <div class="mx-auto w-full px-10 py-12 md:flex-row items-center">
            <pre class="mb-4 leading-relaxed sm:text-xl md:text-2xl text-3xl relative">
                {{ $informasiGereja->Isi }}
            </pre>
        </div>
    </div>
</section>
@endsection