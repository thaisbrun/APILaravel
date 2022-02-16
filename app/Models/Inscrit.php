<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscrit extends Model
{
    use HasFactory;
    protected $table = "inscrit";
    protected $primaryKey = 'IDINSCRIT';
    protected $fillable = [
        'IDINSCRIT',
        'NOM',
        'PRENOM',
        'DATENAISSANCE',
        'EMAIL',
        'TELEPHONE',
        'MOTDEPASSE',
        'CREDIT',
        'IDETAT',
        'IDDEPARTEMENT',
        'IDARRONDISSEMENT',
    ];

    public $timestamps = false;
}
