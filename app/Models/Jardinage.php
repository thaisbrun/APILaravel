<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jardinage extends Model
{
    use HasFactory;
    protected $table = "jardinage";
    protected $primaryKey = 'IDSERVICE';
    protected $fillable = [
        'IDSERVICE',
        'MATERIEL',
        'ADRESSE',
        'EFFECTIF',
        'LIBELLE',
        'DESCRIPTION',
        'RECHERCHE',
        'PUBLIQUE',
        'IDINSCRIT',
    ];

    public $timestamps = false;
}
