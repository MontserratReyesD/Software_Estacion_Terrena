<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cohete extends Model
{
    use HasFactory;
    protected $table = 'cohetes';
    protected $fillable = ['id_equipo', 'peso', 'tamano_cohete', 'cap_botella', 'can_agua', 'can_psi', 
                            'tiempo', 'altu_es'];

}
