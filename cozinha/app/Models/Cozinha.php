<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cozinha extends Model
{
    protected $fillable = [
      "tipo","pratoprincipal","horarioabertura","horariofechamento"
    ];
    protected $table = "cozinhas";
}
