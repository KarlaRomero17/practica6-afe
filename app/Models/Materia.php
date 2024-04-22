<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    protected $table ='materia';
    protected $fillable = [
        'nombre',
        'descripcion',
        'curso',
    ];
    protected $hidden = ['id'];

    public function obtenerMaterias(){
        return Materia::paginate(10 );
    }

    public function obtenerMateriaPorId($id){
        return Materia::find($id);
    }

    public function inscripciones()
    {
        return $this->belongsToMany(Inscripcion::class, '');
    }

    //Relacion intermedia
    public function alumno()
    {
        return $this->belongsToMany(Alumno::class, 'inscripcion', 'idMateria', 'idAlumno')->withPivot('id');
    }

}
