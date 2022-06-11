@extends('layouts.app')

@section('title', 'Main-movilBoxPT')

@section('content')
    <div class="bg-gray-200 rounded-xl shadow-lg  m-4 p-4">
        <div class="text-gray-700 font-bold text-4xl text-center">
            <span>Prueba BackEnd MovilBox</span>
        </div>
        <div class="flex flex-row mt-4 mb-4">
            <div><a href="https://github.com/ladycath5bm"><span class="p-2 mx-2 text-sm text-gray-800 hover:text-pink-600 hover:font-bold text-center">Nombre Aspirante: Leidy C. Benavides</span></a></div>
            <div><span class="p-2 mx-2 text-sm text-gray-800 hover:text-pink-600 hover:font-bold text-center">Correo Aspirante: leidycath.bm@gmail.com</span></div>
            <div><span class="p-2 mx-2 text-sm text-gray-800 hover:text-pink-600 hover:font-bold text-center">Celular Aspirante: 3506489491</span></div>
        </div>
        <div class="text-gray-700 font-bold text-3xl text-center p-4">
            <span>Menú</span>
        </div>
        <div class="border border-md border-gray-600 rounded-md p-4">
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <ol class="list-decimal mx-4">
                        <li><a href="#" class="mx-2 text-md text-gray-700 font-semibold hover:text-pink-600 hover:font-bold">La x</a></li>
                        <li><a href="#" class="mx-2 text-md text-gray-700 font-semibold hover:text-pink-600 hover:font-bold">Histograma</a></li>
                        <li><a href="#" class="mx-2 text-md text-gray-700 font-semibold hover:text-pink-600 hover:font-bold">Matriz</a></li>
                    </ol>
                </div>
                <div>
                    <ol class="list-decimal mx-4" start="4">
                        <li><a href="#" class="mx-2 text-md text-gray-700 font-semibold hover:text-pink-600 hover:font-bold">SQL departamentos</a></li>
                        <li><a href="#" class="mx-2 text-md text-gray-700 font-semibold hover:text-pink-600 hover:font-bold">SQL Json</a></li>
                        <li><a href="#" class="mx-2 text-md text-gray-700 font-semibold hover:text-pink-600 hover:font-bold">SQL trigger</a></li>
                        <li><a href="#" class="mx-2 text-md text-gray-700 font-semibold hover:text-pink-600 hover:font-bold">SQL Json</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection