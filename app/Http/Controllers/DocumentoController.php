<?php

namespace App\Http\Controllers;
use App\Models\Documento;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    // Otras funciones del controlador...

    // Almacenar un nuevo documento en la base de datos
    public function create()
        {
            return view('documentos.create');
        }

    public function store(Request $request)
    {   
        
        // Validar los datos del formulario
        $request->validate([
            'fecha' => 'required|date',
            'nroCarta' => 'required',
            'procedencia' => 'required',
            'detalle' => 'nullable|string',
            'archivo' => 'required',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // Agrega más reglas de validación según tus necesidades
        ]);
        // Manejar el archivo de imagen
        if ($request->hasFile('imagen')) {
            $imageName = time().'.'.$request->imagen->extension();
            $request->imagen->move(public_path('images'), $imageName);
            $validatedData['archivo'] = $imageName;
        }

        // Crear un nuevo documento en la base de datos
        Documento::create([
            'nro_carta' => $request->nroCarta,
            'procedencia' => $request->procedencia,
            'detalle' => $request->detalle,
            'archivo' => $request->archivo,
            'repositorio' => 'your_repository_path', // Ajusta según tus necesidades
            // Agrega más campos según tu formulario
        ]);

        // Redireccionar a una página de éxito o a donde desees
        return redirect()->route('tabla')->with('success', 'Documento creado exitosamente.');
    }

    //mostrar la tabla de documentos
    public function index(){
        $documentos = Documento::all();
        return view('layouts.tabla', compact('documentos'));
    }

    public function showAdmission(){
        $documentos = Documento::all();
        //dd($documentos);
        return view('welcome', compact('documentos'));
    }
}