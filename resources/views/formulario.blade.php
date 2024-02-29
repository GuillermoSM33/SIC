@extends('plantilla')

@section('titulo')
    Agregar Estudiante
@endsection

@section('contenido')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <div class="px-5">
        <h1 class="text-5xl text-center pb-5">Agregar Nuevo Estudiante</h1>

        <form action="{{ route('formulario.store') }}" method="POST" class="w-full max-w-lg mx-auto bg-white p-8 shadow-md rounded-lg">
            @csrf <!-- Token CSRF para protección contra ataques -->

            <!-- Campo ID del Estudiante -->
            <div class="mb-6">
                <label for="id_student" class="block mb-2 text-sm font-medium text-gray-900">ID Estudiante:</label>
                <input type="text" id="id_student" name="id_student" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>

            <!-- Campo Nombre -->
            <div class="mb-6">
                <label for="name_student" class="block mb-2 text-sm font-medium text-gray-900">Nombre:</label>
                <input type="text" id="name_student" name="name_student" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>

            <!-- Campo Apellido -->
            <div class="mb-6">
                <label for="lastname_student" class="block mb-2 text-sm font-medium text-gray-900">Apellido:</label>
                <input type="text" id="lastname_student" name="lastname_student" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>

            <!-- Campo Fecha de Nacimiento -->
            <div class="mb-6">
                <label for="birthday" class="block mb-2 text-sm font-medium text-gray-900">Fecha de Nacimiento:</label>
                <input type="date" id="birthday" name="birthday" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>

            <!-- Campo Comentarios -->
            <div class="mb-6">
                <label for="comments" class="block mb-2 text-sm font-medium text-gray-900">Comentarios (opcional):</label>
                <textarea id="comments" name="comments" rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"></textarea>
            </div>

            <!-- Botón de envío -->
            <div class="mb-6">
                <button type="submit" class="text-white bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Agregar Estudiante</button>
            </div>
        </form>
    </div>

@endsection
