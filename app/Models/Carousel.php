<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    use HasFactory;

    protected $fillable = [
        'testimonial_id',
    ];

    public function testimonial()
    {
        return $this->belongsTo('App\Models\Testimonial');
    }
}
