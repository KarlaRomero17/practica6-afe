<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Materia;
use App\Models\Inscripcion;

class InscripcionController extends Controller
{
    protected $inscripcion;

    public function __construct(Inscripcion $inscripcion)
    {
        $this->inscripcion = $inscripcion;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inscripciones = $this->inscripcion->obtenerInscripciones();
        return view('inscripciones.lista', ['inscripciones' => $inscripciones]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inscripciones.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inscripcion = new Inscripcion($request->all());
        $inscripcion->save();
        return redirect()->action([InscripcionController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $inscripcion = $this->inscripcion->obtenerInscripcionPorId($id);
        return view('inscripciones.detalle', ['inscripcion' => $inscripcion]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $inscripcion = $this->inscripcion->obtenerInscripcionPorId($id);
        return view('inscripciones.editar', ['inscripcion' => $inscripcion]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $inscripcion = Inscripcion::find($id);
        $inscripcion->update($request->all());
        $inscripcion->save();
        return redirect()->action([InscripcionController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $inscripcion = Inscripcion::find($id);
        $inscripcion->delete();
        return redirect()->action([InscripcionController::class, 'index']);
    }
}
