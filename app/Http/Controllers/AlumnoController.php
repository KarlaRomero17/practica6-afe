<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    protected $alumnos;

    public function __construct(Alumno $alumnos)
    {
        $this->alumnos = $alumnos;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = $this->alumnos->obtenerAlumnos();
        return view('alumnos.lista', ['alumnos' => $alumnos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alumnos.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $alumno = new Alumno($request->all());
        $alumno->save();
        return redirect()->action([AlumnoController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $alumno = $this->alumnos->obtenerAlumnoPorId($id);
        return view('alumnos.ver', ['alumno' => $alumno]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $alumno = $this->alumnos->obtenerAlumnoPorId($id);
        return view('alumnos.editar', ['alumno' => $alumno]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $alumno = Alumno::find($id);
        $alumno->update($request->all());
        $alumno->save();
        return redirect()->action([AlumnoController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $alumno  = Alumno::find($id);
        $alumno->delete();
        return redirect()->action([AlumnoController::class, 'index']);
    }
}
