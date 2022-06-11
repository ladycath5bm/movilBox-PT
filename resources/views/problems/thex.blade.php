@extends('layouts.app')

@section('title', 'Problem 1')

@section('content')
    <div class="bg-gray-200 rounded-xl shadow-lg  m-4 p-4">
        <div class="text-gray-700 font-bold text-3xl text-center">
            <span>1. La X</span>
        </div>
        <div class="mt-4 mb-4 border border-gray-700 rounded-lg">
            <span class="flex flex-col items-cetner text-center p-10">Ingrese una dimensión para construir la X</span>
            <div class="px-6">
                <form action="{{ route('problems.thex.generated') }}" method="get" id="form-generate" name="form-generate">
                    <label for="dim">Dimensión: </label>
                    <input class="form-control rounded-md focus:border-pink-600 focus:ring-1 focus:outline-none focus:ring-pink-600" type="text" name="dimention" id="dimention">
                    <button class="rounded-md ml-4 px-2 py-1 bg-pink-600 text-white hover:bg-pink-500" type="submit" form="form-generate">Generar</button>
                    <br>
                    <div class="flex flex-col items-center text-center mt-1">
                        @error('dimention')
                            <span class="text-center rounded-md bg-red-100 p-1 text-red-700 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </form>
            </div>
            <div class="flex flex-col text-center items-center mt-4 mb-4">
                @if(isset($arrayX))
                    @foreach ($arrayX as $line)
                        <ul><span class="p-10 text-center text-pink-800 font-bold">{{ $line }}</span></ul>
                    @endforeach
                @endif
            </div>
        </div>
        <div>
            <a href="{{ route('main.index') }}" class="rounded-md ml-4 px-2 py-1 bg-pink-800 text-white hover:bg-pink-500">Regresar</a>
        </div>
    </div>
@endsection