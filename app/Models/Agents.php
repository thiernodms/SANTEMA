<?php

namespace App\Models;

use App\Models\Rdv;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agents extends Model
{
    use HasFactory;

    protected $fillable = [

        'user_id',
        'speciality',
        'image',
        'parcourt',
        'abonnement',
    ];


    public function rdvs()
    {
        return $this->hasMany(Rdv::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
