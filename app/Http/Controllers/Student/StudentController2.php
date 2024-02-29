<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Asegúrate de usar el namespace correcto para el modelo Student
use App\Models\Student;

class StudentController2 extends Controller
{

    public function index(){
        return view('formulario');
    }

    public function store(Request $request)
    {
        // Validación de los datos recibidos
        $validated = $request->validate([
            'id_student' => 'required|unique:students|max:255',
            'name_student' => 'required',
            'lastname_student' => 'required',
            'birthday' => 'required|date',
            'comments' => 'nullable', // Opcional
        ]);

        // Creación del estudiante
        $student = new Student();
        $student->id_student = $validated['id_student'];
        $student->name_student = $validated['name_student'];
        $student->lastname_student = $validated['lastname_student'];
        $student->birthday = $validated['birthday'];
        $student->comments = $validated['comments'] ?? ''; // Asigna un valor por defecto si es nulo
        $student->save();

        // Asegúrate de que la ruta de redirección exista y sea correcta
        return redirect()->route('estudiantes.index')->with('success', 'Estudiante agregado con éxito.');
    }
}



