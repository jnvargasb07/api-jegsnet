<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cedula extends Model
{
    use HasFactory;

    protected $table  = 'cedulas';
    protected $fillable = ['CEDULA', 'CODELEC', 'FECHACADUC', 'JUNTA', 'NOMBRE', 'PAPELLIDO', 'SAPELLIDO'];
}
