<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Altura extends Model
{
    use HasFactory;
    protected $table = 'cohetes';
    protected $fillable = ['altu_es'];
}
