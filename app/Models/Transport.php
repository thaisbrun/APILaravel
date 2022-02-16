<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    use HasFactory;
    protected $table = "transport";
    protected $primaryKey = 'IDSERVICE';
    protected $fillable = [
        'IDSERVICE',
        'ADRESSEDEPART',
        'ADRESSEARRIVEE',
        'MODELEVOITURE',
        'NOMBREPLACE',
        'LIBELLE',
        'DESCRIPTION',
        'RECHERCHE',
        'PUBLIQUE',
        'IDINSCRIT',
    ];

    public $timestamps = false;
}
