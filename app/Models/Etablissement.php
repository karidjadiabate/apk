<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    use HasFactory;

    protected $fillable = ['code','nomresponsable','prenomresponsable','nometablissement','contact','adresse','logo','email','description'];
}
