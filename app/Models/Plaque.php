<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Plaque extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'prenom',
        'age',
        'sexe',
        'address',
        'city',
        'profession',
        'phone',
        'image',
        'immatriculation',
        'type'
    ];

    public function getSlug()
{
    return Str::slug($this->immatriculation ?? '');
}
}
