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
                    <div class="grid grid-cols-3 gap-4 mb-4 items-center"zz>
                        <div>
                            <input id="one" name="one" class="rounded-md focus:outline-none focus:ring-1 focus:ring-pink-600 focus:border-pink-600" type="number" min="1" max="9" required>
                        </div>
                        <div>
                            <input id="two" name="two" class="rounded-md focus:outline-none focus:ring-1 focus:ring-pink-600 focus:border-pink-600" type="number" min="1" max="9" required>
                        </div>
                        <div>
                            <input id="three" name="three" class="rounded-md focus:outline-none focus:ring-1 focus:ring-pink-600 focus:border-pink-600" type="number" min="1" max="9" required>
                        </div>
                        <div>
                            <input id="four" name="four" class="rounded-md focus:outline-none focus:ring-1 focus:ring-pink-600 focus:border-pink-600" type="number" min="1" max="9" required>
                        </div>
                        <div>
                            <input id="five" name="five" class="rounded-md focus:outline-none focus:ring-1 focus:ring-pink-600 focus:border-pink-600" type="number" min="1" max="9" required>
                        </div>
                        <div>
                            <input id="six" name="six" class="rounded-md focus:outline-none focus:ring-1 focus:ring-pink-600 focus:border-pink-600" type="number" min="1" max="9" required>
                        </div>
                        <div>
                            <input id="seven" name="seven" class="rounded-md focus:outline-none focus:ring-1 focus:ring-pink-600 focus:border-pink-600" type="number" min="1" max="9" required>
                        </div>
                        <div>
                            <input id="eight" name="eight" class="rounded-md focus:outline-none focus:ring-1 focus:ring-pink-600 focus:border-pink-600" type="number" min="1" max="9" required>
                        </div>
                        <div>
                            <input id="nine" name="nine" class="rounded-md focus:outline-none focus:ring-1 focus:ring-pink-600 focus:border-pink-600" type="number" min="1" max="9" required>
                        </div>
                    </div>
                    
                    <div class="flex flex-col items-center">
                        <button class="rounded-md px-2 py-1 bg-pink-600 text-white hover:bg-pink-500" type="submit" form="form-generate">Generar</button>
                    </div>
                    
                    <div class="flex flex-col items-center text-center mt-1">
                        @error('one')
                            <span class="text-center rounded-md bg-red-100 p-1 text-red-700 text-xs">{{ $message }}</span>
                        @enderror
                        @error('two')
                            <span class="text-center rounded-md bg-red-100 p-1 text-red-700 text-xs">{{ $message }}</span>
                        @enderror
                        @error('three')
                            <span class="text-center rounded-md bg-red-100 p-1 text-red-700 text-xs">{{ $message }}</span>
                        @enderror
                        @error('four')
                            <span class="text-center rounded-md bg-red-100 p-1 text-red-700 text-xs">{{ $message }}</span>
                        @enderror
                        @error('five')
                            <span class="text-center rounded-md bg-red-100 p-1 text-red-700 text-xs">{{ $message }}</span>
                        @enderror
                        @error('six')
                            <span class="text-center rounded-md bg-red-100 p-1 text-red-700 text-xs">{{ $message }}</span>
                        @enderror
                        @error('seven')
                            <span class="text-center rounded-md bg-red-100 p-1 text-red-700 text-xs">{{ $message }}</span>
                        @enderror
                        @error('eight')
                            <span class="text-center rounded-md bg-red-100 p-1 text-red-700 text-xs">{{ $message }}</span>
                        @enderror
                        @error('nine')
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