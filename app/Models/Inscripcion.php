<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    use HasFactory;
    protected $table = 'inscripcion';
    protected $hidden = ['id'];
    protected $fillable = [
        'idAlumno',
        'idMateria',
        'fecha_inscripcion',
    ];

    public function obtenerInscripciones(){
        return Inscripcion::all();
    }
    public function obtenerInscripcionPorId($id){
        return Inscripcion::find($id);
    }
    public function obtenerInscripcionPorIdMateria($id){
        return Inscripcion::where('idMateria',$id)->get();
    }

     public function alumno()
    {
        return $this->belongsTo(Alumno::class);
    }

    public function materia()
    {
        return $this->belongsTo(Materia::class);
    }
}
