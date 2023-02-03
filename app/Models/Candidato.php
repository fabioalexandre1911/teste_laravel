<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    use HasFactory;

    public function vaga()
    {
        return $this->belongsToMany(Vaga::class)->using(Candidatura::class);
    }
}
