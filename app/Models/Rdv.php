<?php

namespace App\Models;

use App\Models\User;
use App\Models\Agents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rdv extends Model
{
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'nom',
        'email',
        'tel',
        'quartier',
        'service',
        'date',
        'time',
        'description',
        'status',
        'user_id',
        'agent_id',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function agent()
    {
        return $this->belongsTo(Agents::class);
    }
}
