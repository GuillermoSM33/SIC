@extends('plantilla')

@section('titulo')
    Agregar Estudiante
@endsection

@section('contenido')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <div class="max-w-md mx-auto mt-10 px-4">
        <form lass="shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ url('alumnos') }}" method="POST">

            @csrf

            <div class="mb-4">

                <label class="block text-gray-700 text-sm font-bold mb-2" for="name_student">
                    Nombre
                </label>

                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" name="name_student" placeholder="Nombre" value="{{ old('name_student+') }}">

                @error('name_student')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
                

            </div>

            <div class="mb-4">

                <label class="block text-gray-700 text-sm font-bold mb-2" for="id_student">
                    Matricula
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" name="id_student" placeholder="Matricula">
                @error('id_student')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror

            </div>

            <div class="mb-4">

                <label class="block text-gray-700 text-sm font-bold mb-2" for="email_student">
                    Correo
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" name="email_student" placeholder="Correo">
                @error('email_student')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror

            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password_student">
                    Contraseña
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="password" name="password_student" placeholder="Contraseña">
                @error('password_student')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">Registrar</button>

            </div>
        </form>
    </div>
@endsection
