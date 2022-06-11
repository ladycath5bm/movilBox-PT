@extends('layouts.app')

@section('title', 'Problem 2')

@section('content')
    <div class="bg-gray-200 rounded-xl shadow-lg  m-4 p-4">
        <div class="text-gray-700 font-bold text-3xl text-center">
            <span>2. Histograma</span>
        </div>
        <div class="mt-4 mb-4 border border-gray-700 rounded-lg">
            <span class="flex flex-col items-cetner text-center p-10">Ingrese un arreglo, con valores entre 1 y 5</span>
            <div class="px-6">
                <form action="{{ route('problems.histogram.generate') }}" method="get" id="form-generate" name="form-generate">
                    @csrf
                    <label for="myArray">Arreglo: </label>
                    <select class="rounded-md text-sm text-pink-600" name="p_one" id="p_one">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <select class="rounded-md text-sm text-pink-600" name="p_two" id="p_two">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <select class="rounded-md text-sm text-pink-600" name="p_three" id="p_three">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <select class="rounded-md text-sm text-pink-600" name="p_four" id="p_four">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <select class="rounded-md text-sm text-pink-600" name="p_five" id="p_five">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <select class="rounded-md text-sm text-pink-600" name="p_six" id="p_six">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <select class="rounded-md text-sm text-pink-600" name="p_seven" id="p_seven">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <select class="rounded-md text-sm text-pink-600" name="p_eight" id="p_eight">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <select class="rounded-md text-sm text-pink-600" name="p_nine" id="p_nine">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <select class="rounded-md text-sm text-pink-600" name="p_ten" id="p_ten">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <button class="rounded-md ml-4 px-2 py-1 bg-pink-600 text-white hover:bg-pink-500" type="submit" form="form-generate">Generar</button>
                    <br>
                    <div class="flex flex-col items-center text-center mt-1">
                        @error('p_one')
                            <span class="text-center rounded-md bg-red-100 p-1 text-red-700 text-xs">{{ $message }}</span>
                        @enderror
                        @error('p_two')
                            <span class="text-center rounded-md bg-red-100 p-1 text-red-700 text-xs">{{ $message }}</span>
                        @enderror
                        @error('p_three')
                            <span class="text-center rounded-md bg-red-100 p-1 text-red-700 text-xs">{{ $message }}</span>
                        @enderror
                        @error('p_four')
                            <span class="text-center rounded-md bg-red-100 p-1 text-red-700 text-xs">{{ $message }}</span>
                        @enderror
                        @error('p_five')
                            <span class="text-center rounded-md bg-red-100 p-1 text-red-700 text-xs">{{ $message }}</span>
                        @enderror
                        @error('p_six')
                            <span class="text-center rounded-md bg-red-100 p-1 text-red-700 text-xs">{{ $message }}</span>
                        @enderror
                        @error('p_seven')
                            <span class="text-center rounded-md bg-red-100 p-1 text-red-700 text-xs">{{ $message }}</span>
                        @enderror
                        @error('p_eight')
                            <span class="text-center rounded-md bg-red-100 p-1 text-red-700 text-xs">{{ $message }}</span>
                        @enderror
                        @error('p_nine')
                            <span class="text-center rounded-md bg-red-100 p-1 text-red-700 text-xs">{{ $message }}</span>
                        @enderror
                        @error('p_ten')
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