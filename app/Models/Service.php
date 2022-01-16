<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = "service_client";

    protected $fillable = [
        'IDSERVICE',
        'LIBELLE',
        'DESCRIPTION',
        'RECHERCHE',
        'PUBLIQUE',
        'IDINSCRIT',
        'NOM',
        'PRENOM',
        'NUMERO_DEP'
    ];
}
