<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumnos extends Model
{
    use HasFactory;

    protected $primaryKey='idalumno';

    protected $table='alumnos';

    protected $fillable=['nombres','apellidos','edad'];

    public $timestamps=false;
}
