@extends('layouts.app')

@section('title', 'Problem 4')

@section('content')
    <div class="bg-gray-200 rounded-xl shadow-lg  m-4 p-4">
        <div class="text-gray-700 font-bold text-3xl text-center">
            <span>4. SQL Departamento</span>
        </div>
        <div class="mt-4 mb-4 border border-gray-700 rounded-lg">
            <span class="flex flex-col text-md text-gray-800 text-center p-10">Consulta, listado de dptos con 2 o más empleados.</span>
            <div class="px-6 items-center text-center flex flex-col items-center text-center">
                @if(isset($consult))
                    <div class="text-sm text-gray-800 mb-2">
                        <span class="text-pink-600 font-semibold text-sm">Consulta en SQL puro:</span>
                        <br><br>
                        <span>{{ $consult['sql'] }}</span>
                    </div>
                    <div class="text-sm text-gray-800 mb-4 mt-2">
                        <span class="text-pink-600 font-semibold text-sm">Resultado consulta en formato JSON:</span>
                        <br><br>
                        <span>{{ $consult['json'] }}</span>
                    </div>
                    <table class="w-1/2 rounded-md text-sm text-pink-600 focus:outline-none focus:ring-1 focus:ring-pink-600 focus:border-pink-600">
                        <thead>
                            <th scope="col" class="text-md text-center px-2 py- border-t border-b border-gray-400">Nombre Dpto</th>
                            <th scope="col" class="text-md text-center px-2 py-2 border-t border-b border-gray-400">No. Empleados</th>
                        </thead>
                        <tbody>
                            @foreach ($consult['result'] as $department)
                                <tr class="text-gray-700 border-b border-gray-300">
                                    <td>{{ $department->department_name }}</td>
                                    <td>{{ $department->total_employees }}</td>
                                </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                @endif
            </div>
            <div class="flex flex-col text-center items-center mt-4 mb-4">
            </div>
        </div>
        <div>
            <a href="{{ route('main.index') }}" class="rounded-md ml-4 px-2 py-1 bg-pink-800 text-white hover:bg-pink-500">Regresar</a>
        </div>
    </div>
@endsection