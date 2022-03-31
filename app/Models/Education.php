<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model{

    use HasFactory;

    protected $fillable = [
        'ecole',
        'annee',
        'formation',
        'couleur',
    ];

    protected $table = 'educations';

}
