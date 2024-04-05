<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    protected $fillable = [
        'key',
        'code_theme',
        'Mle',
        'Nom_Prenom',
        'JCM',
        'Metier',
        'Service',
        'Entite',
        'manager',
        'duree',
        'date_debut',
        'date_fin',
        'presence',
        'programe',
        'groupe',
        
    ];
    protected $primaryKey = 'key';
    public $incrementing = false;
    protected $keyType = 'string';
}
