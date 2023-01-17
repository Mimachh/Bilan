<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Contact extends Model
{
    use Notifiable;
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'phone',
        'subject_id',
        'message',
        'statut',
        'email',
        'confirm_rule',
        'password',
    ];

    public function subject()
    {
        return $this->belongsTo('App\Models\Subject');
    }
}
