<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'statut',
        'photo',
        'description',
    ];

    public function signatures()
    {
        return $this->hasMany('App\Models\Signature');
    }
}
