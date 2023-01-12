<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signature extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'petition_id',
        'email',
        'confirm_rule',
        'newsletter',
    ];

    public function petition()
    {
        return $this->belongsTo('App\Models\Petition');
    }
}
