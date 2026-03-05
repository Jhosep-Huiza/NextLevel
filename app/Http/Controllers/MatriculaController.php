<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MatriculaMail;
use Exception;

class MatriculaController extends Controller
{
    public function enviar(Request $request)
    {

        try {

            // VALIDACIÓN
            $request->validate([

                // alumno
                'nombres' => 'required',
                'apellido_paterno' => 'required',
                'apellido_materno' => 'required',
                'dni' => 'required',
                'correo' => 'nullable|email',

                // padre
                'padre_nombres' => 'required',
                'padre_apellido_paterno' => 'required',
                'padre_apellido_materno' => 'required',
                'padre_dni' => 'required',
                'padre_correo' => 'required|email',

                // matrícula
                'grado' => 'required',
                'nivel' => 'required',
                'direccion' => 'required',
                'tipo_pago' => 'required',

                'archivos' => 'nullable|array',
                'archivos.*' => 'file|mimes:pdf,jpg,jpeg,png,doc,docx|max:5120'

            ]);


            // obtener datos
            $datos = $request->except('archivos');


            // obtener archivos (si no hay, será array vacío)
            $archivos = $request->file('archivos') ?? [];


            // DEBUG opcional
            //dd($datos);


            // enviar correo
            Mail::to('jhosephuiza480@gmail.com')
                ->send(new MatriculaMail($datos, $archivos));


            return response()->json([
                'success' => true,
                'message' => 'Matrícula enviada correctamente'
            ]);


        } catch (Exception $e) {

            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
                'line' => $e->getLine(),
                'file' => $e->getFile()
            ], 500);

        }

    }
}
