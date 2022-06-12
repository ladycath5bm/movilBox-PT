@extends('layouts.app')

@section('title', 'Problem 3')

@section('content')
    <div class="bg-gray-200 rounded-xl shadow-lg m-4 p-4">
        <div class="text-gray-700 font-bold text-3xl text-center">
            <span>3. Matriz</span>
        </div>
        <div class="mt-4 mb-4 border border-gray-700 rounded-lg">
            <span class="flex flex-col text-center text-gray-700 px-10 pt-10 mb-4">Ingrese valores entre 1 y 9 en la matriz</span>
            <div class="px-6">
                <form class="items-center" action="{{ route('problems.matriz.generate') }}" method="get" id="form-generate" name="form-generate">
                    @csrf
                    <label class="text-gray-700 font-semibold">Matriz: </label>
                    <br>
                    <div class="grid grid-cols-3 gap-4 mb-4 items-center" id="matriz">
                        <div>
                            <input id="1" name="1" class="rounded-md focus:outline-none focus:ring-1 focus:ring-pink-600 focus:border-pink-600" type="number" min="1" max="9" required>
                        </div>
                        <div>
                            <input id="2" name="2" class="rounded-md focus:outline-none focus:ring-1 focus:ring-pink-600 focus:border-pink-600" type="number" min="1" max="9" required>
                        </div>
                        <div>
                            <input id="3" name="3" class="rounded-md focus:outline-none focus:ring-1 focus:ring-pink-600 focus:border-pink-600" type="number" min="1" max="9" required>
                        </div>
                        <div>
                            <input id="4" name="4" class="rounded-md focus:outline-none focus:ring-1 focus:ring-pink-600 focus:border-pink-600" type="number" min="1" max="9" required>
                        </div>
                        <div>
                            <input id="5" name="5" class="rounded-md focus:outline-none focus:ring-1 focus:ring-pink-600 focus:border-pink-600" type="number" min="1" max="9" required>
                        </div>
                        <div>
                            <input id="6" name="6" class="rounded-md focus:outline-none focus:ring-1 focus:ring-pink-600 focus:border-pink-600" type="number" min="1" max="9" required>
                        </div>
                        <div>
                            <input id="7" name="7" class="rounded-md focus:outline-none focus:ring-1 focus:ring-pink-600 focus:border-pink-600" type="number" min="1" max="9" required>
                        </div>
                        <div>
                            <input id="8" name="8" class="rounded-md focus:outline-none focus:ring-1 focus:ring-pink-600 focus:border-pink-600" type="number" min="1" max="9" required>
                        </div>
                        <div>
                            <input id="9" name="9" class="rounded-md focus:outline-none focus:ring-1 focus:ring-pink-600 focus:border-pink-600" type="number" min="1" max="9" required>
                        </div>
                    </div>
                    
                    <div class="flex flex-col items-center">
                        <button class="rounded-md px-2 py-1 bg-pink-600 text-white hover:bg-pink-500" type="submit" form="form-generate">Generar</button>
                    </div>
                    
                    <div class="flex flex-col items-center text-center mt-1">
                        @error('1')
                            <span class="text-center rounded-md bg-red-100 p-1 text-red-700 text-xs">{{ $message }}</span>
                        @enderror
                        @error('2')
                            <span class="text-center rounded-md bg-red-100 p-1 text-red-700 text-xs">{{ $message }}</span>
                        @enderror
                        @error('3')
                            <span class="text-center rounded-md bg-red-100 p-1 text-red-700 text-xs">{{ $message }}</span>
                        @enderror
                        @error('4')
                            <span class="text-center rounded-md bg-red-100 p-1 text-red-700 text-xs">{{ $message }}</span>
                        @enderror
                        @error('5')
                            <span class="text-center rounded-md bg-red-100 p-1 text-red-700 text-xs">{{ $message }}</span>
                        @enderror
                        @error('6')
                            <span class="text-center rounded-md bg-red-100 p-1 text-red-700 text-xs">{{ $message }}</span>
                        @enderror
                        @error('7')
                            <span class="text-center rounded-md bg-red-100 p-1 text-red-700 text-xs">{{ $message }}</span>
                        @enderror
                        @error('8')
                            <span class="text-center rounded-md bg-red-100 p-1 text-red-700 text-xs">{{ $message }}</span>
                        @enderror
                        @error('9')
                            <span class="text-center rounded-md bg-red-100 p-1 text-red-700 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </form>
            </div>
            <div class="flex flex-col text-center items-center mt-4 mb-4">
                @if(isset($matriz))
                    <span class="text-center text-pink-800 font-semibold">
                        <span class="text-gray-700">La suma mínima es: </span> {{ $matriz['suma'] }}
                    </span>
                    <span class="text-center text-pink-800 font-semibold">
                        <span class="text-gray-700">Los elementos de la ruta son: </span>{{ $matriz['elementos'][0] }}, {{ $matriz['elementos'][1] }}, {{ $matriz['elementos'][2] }}
                    </span>
                @endif
            </div>
        </div>
        <div>
            <a href="{{ route('main.index') }}" class="rounded-md ml-4 px-2 py-1 bg-pink-800 text-white hover:bg-pink-500">Regresar</a>
        </div>
    </div>
@endsection