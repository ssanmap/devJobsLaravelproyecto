@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous" />
@endsection
@section('content')
    <h1 class="text-3xl text-center">{{ $vacante->titulo }}</h1>

    <div class="mt-10 mb-20 md:flex items-start">
        <div class="md:w-3/5">
            <p class="block text-gray-700 font-bold my-2">
                Publicado : <span class="font-normal">{{ $vacante->created_at->diffForHumans() }}</span>
                Por : <span class="font-normal">{{ $vacante->reclutador->name }}</span>
            </p>
            <p class="block text-gray-700 font-bold my-2">
                Categoria : <span class="font-normal">{{ $vacante->categoria->nombre }}</span>
            </p>
            <p class="block text-gray-700 font-bold my-2">
                Salario : <span class="font-normal">{{ $vacante->salario->nombre }}</span>
            </p>
            <p class="block text-gray-700 font-bold my-2">
                Ubicación : <span class="font-normal">{{ $vacante->ubicacion->nombre }}</span>
            </p>
            <p class="block text-gray-700 font-bold my-2">
                Experiencia : <span class="font-normal">{{ $vacante->experiencia->nombre }}</span>
            </p>

            <h2 class="text-2xl text-center mt-10 text-gray-700">Conocimientos y Tecnologías</h2>
            @php
            $arraySkills = explode(",", $vacante->skills)
             @endphp
             @foreach($arraySkills as $skill)
             <p class="inline-block border border-gray-500 py-2 px-8 rounded text-gray-700 font-bold my-2 mt-5">

                <span class="font-normal">{{ $skill}}</span>
            </p>
             @endforeach
             <a href="/storage/vacantes/{{$vacante->imagen}}" data-lightbox="imagen">
             <img src="/storage/vacantes/{{$vacante->imagen}}" class="w-40 mt-3 mx-auto" alt="">
            </a>
            <div class="descripcion">
                {!! $vacante->descripcion   !!}
            </div>
        </div>
        <div class="md:w-2/5">
            2
        </div>

    </div>



@endsection
