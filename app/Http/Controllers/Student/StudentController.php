<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Student;

class StudentController extends Controller
{

public function index(){
    return view('formulario');
}

public function store(Student $request){
    return "Formulario procesado";
}

}
