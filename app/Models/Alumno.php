<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    protected $table = 'alumnos';
    protected $fillable = ['nombre', 'apellido', 'edad', 'direccion'];
    protected $hidden = ['id'];

    public function obtenerAlumnos(){
        return Alumno::paginate(10);
    }
    public function obtenerAlumnoPorId($id){
        return Alumno::find($id);
    }

    public function inscripciones()
    {
        return $this->belongsToMany(Inscripcion::class);
    }

}
