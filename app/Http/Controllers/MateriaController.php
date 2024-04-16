<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materia;

class MateriaController extends Controller
{
    protected $materia;

    public function __construct(Materia $materia){
        $this->materia = $materia;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materias = $this->materia->obtenerMaterias();
        return view('materias.lista', ['materias' => $materias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('materias.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $materia = new Materia($request->all());
        $materia->save();
        return redirect()->action([MateriaController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $materia = $this->materia->obtenerMateriaPorId($id);
        return view('materias.detalle', ['materia' => $materia]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $materia = $this->materia->obtenerMateriaPorId($id);
        return view('materias.editar', ['materia' => $materia]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $materia = Materia::find($id);
        $materia->update($request->all());
        $alumno->save();
        return redirect()->action([MateriaController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $materia = Materia::find($id);
        $materia->delete();
        return redirect()->action([MateriaController::class, 'index']);
    }
}
