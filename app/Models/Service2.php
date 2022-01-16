<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service2 extends Model
{
    use HasFactory;
    protected $table = "service";
    protected $primaryKey = 'IDSERVICE';
    protected $fillable = [
        'IDSERVICE',
        'LIBELLE',
        'DESCRIPTION',
        'RECHERCHE',
        'PUBLIQUE',
        'IDINSCRIT',
    ];

    public $timestamps = false;
}
