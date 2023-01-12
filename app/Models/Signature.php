<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signature extends Model
{
    use HasFactory;

    protected $fillable = [
        'response_id',
        'petition_id',
        'email',
        'confirm_rule',
    ];

    public function petition()
    {
        return $this->belongsTo('App\Models\Petition');
    }
}
