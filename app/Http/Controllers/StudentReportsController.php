<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
class StudentReportsController extends Controller
{
public function show_cardex ($id){
//obtener los datos del modelo
$student = Student::find($id);
 

$data=[
    'title'=>'Reporte de Estudiantes',
    'details'=>$student
];
//dd($student);
$pdf = App::make('dompdf.wrapper');
$pdf->loadView('reports.cardex',$data);
return $pdf->stream();
return view ();
}
}
