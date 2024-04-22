<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Materia;
use App\Models\Inscripcion;
use Carbon\Carbon;


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
        $materias = Materia::all();
        $alumnos = Alumno::all();

        return view('inscripciones.crear', compact('materias', 'alumnos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Obtener los datos enviados desde el formulario
        $materiaId = $request->input('materia');
        $alumnos = $request->input('alumnos');

        // Iterar sobre los alumnos seleccionados y guardar una inscripción para cada uno
        foreach ($alumnos as $alumnoId) {
            // Crear una nueva inscripción
            $inscripcion = new Inscripcion();
            // Asignar el ID de la materia y del alumno a la inscripción
            $inscripcion->idMateria = $materiaId;
            $inscripcion->idAlumno = $alumnoId;
            $inscripcion->fecha_inscripcion = Carbon::now();
            $inscripcion->save();
        }
        return redirect()->action([MateriaController::class, 'index']);
        // $inscripcion = new Inscripcion($request->all());
        // $inscripcion->save();
        // return redirect()->action([InscripcionController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $inscripcion = $this->inscripcion->obtenerInscripcionPorId($id);
        return view('inscripciones.ver', ['inscripcion' => $inscripcion]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {

        $materias = Materia::all();
        $alumnos = Alumno::all();
        $inscripcion = Materia::with('alumno')->findOrFail($id);
        // return $inscripcion;
        return view('inscripciones.editar', ['materiaInscrita' => $inscripcion, 'materias' => $materias, 'alumnos' => $alumnos, 'id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $inscripcion = Inscripcion::find($id);
        $inscripcion->update($request->all());
        $inscripcion->save();
        return redirect()->action([InscripcionController::class, 'edit', 'id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $inscripcion = Inscripcion::find($id);
        $inscripcion->delete();
        return back()->with('success', 'Inscripción eliminada correctamente');
    }
}
