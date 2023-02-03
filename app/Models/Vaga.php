<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    use HasFactory;

    /**
     * The model's default values for fillable.
     *
     * @var array
     */
    protected $fillable = ["id","tipo","nome","descricao","status"];

    public function candidato()
    {
        return $this->belongsToMany(Candidato::class)->using(Candidatura::class);
    }
}
