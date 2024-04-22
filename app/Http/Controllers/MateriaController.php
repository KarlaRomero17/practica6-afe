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
        return view('materia.lista', ['materias' => $materias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('materia.crear');
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
        return view('materia.ver', ['materias' => $materia]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $materia = $this->materia->obtenerMateriaPorId($id);
        return view('materia.editar', ['materias' => $materia]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $materia = Materia::find($id);
        $materia->update($request->all());
        $materia->save();
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
