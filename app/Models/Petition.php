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
        'objectif'
    ];

    public function signatures()
    {
        return $this->hasMany('App\Models\Signature');
    }


    public function percent(){
        return round($this->signatures->count() * 100 / $this->objectif, 1);
    }

}
