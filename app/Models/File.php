<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $hidden = ['id'];
    protected $table  = 'files';
    protected $fillable = ['url'];
}
