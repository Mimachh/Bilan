<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'email',
        'statut_id',
        'confirm_rule',
    ];

    public function statut()
    {
        return $this->belongsTo('App\Models\Statut');
    }

    public function carousels()
    {
        return $this->belongsToMany('App\Models\Carousel');
    }
}
