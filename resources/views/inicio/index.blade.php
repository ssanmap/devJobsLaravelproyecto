@extends('layouts.app')

@section('navegacion')
    @include('ui.categoriasnav')
@endsection

@section('content')
    <h1>Inicio</h1>
    <div class="flex flex-col lg:flex-row shadow bg-white">
        <div class="lg:w-1/2 px-8 lg:px-12 py-12 lg:py-24">
            <p class="text-3xl text-gray-700">
                Dev <span class="font-bold">Jobs</span>
            </p>
            <h1 class="mt-2 sm:mt-4 text-4xl font-bold text-gray-700 leading-tight">Encuentra un trabajo remoto en tu pais
                <span class="text-teal-500 block">Para developers</span>
            </h1>
            @include('ui.buscar')
        </div>
        <div class="lg:w-1/2 block">
            <img class="inset-o h-full w-full object-cover" src="img/4321.jpg" alt="">
        </div>
    </div>

    <div class="my-10 shadow p-10 bg-gray-100">
        <h1 class="text-3xl text-gray-700 m-0">
            Nuevas Vacantes
        </h1>
        @include('ui.listadovacantes')
    </div>
@endsection
