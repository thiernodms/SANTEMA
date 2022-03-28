<?php

namespace App\Models;

use App\Models\Rdv;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agents extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'tel',
        'speciality',
        'quartier',
        'image',
        'parcourt',
    ];


    public function rdvs()
    {
        return $this->hasMany(Rdv::class);
    }
}
