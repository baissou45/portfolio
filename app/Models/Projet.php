<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model{

    use HasFactory;

    protected $fillable = [
        'nom',
        'platforme',
        'client',
        'description',
        'date',
        'type',
        'cover',
        'lien'
    ];

    public function images(){
        return $this->hasMany(Image::class);
    }

}
