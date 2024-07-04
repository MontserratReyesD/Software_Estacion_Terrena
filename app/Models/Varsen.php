<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Varsen extends Model
{
    use HasFactory;
    protected $table = 'varsens';
    protected $fillable = ['sensor_id'  , 'variable_id', 'indice'];
}
