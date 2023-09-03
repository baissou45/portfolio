<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model{

    use HasFactory;

    protected $fillable = [
        'nom',
        'technologies',
        'equipe',
        'client',
        'description',
        'date',
        'type',
        'cover',
        'lien'
    ];

    protected $casts = [
        'date' => 'datetime',
    ];

    public function images(){
        return $this->hasMany(Image::class);
    }

}
