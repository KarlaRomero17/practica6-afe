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
        return Materia::all();
    }

    public function obtenerMateriaPorId($id){
        return Materia::find($id);
    }

}
