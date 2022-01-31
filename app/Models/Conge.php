<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static paginate()
 */
class Conge extends Model
{
    use HasFactory;

    protected $fillable = ['type_vac','annee','date_debut','date_fin','date_debut','adjoint'];
}
 