<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Testimonial extends Model
{
    use HasFactory; use Notifiable;

    protected $fillable = [
        'content',
        'email',
        'statut_id',
        'confirm_rule',
        'name',
        'last_name',
    ];

    public function statut()
    {
        return $this->belongsTo('App\Models\Statut');
    }

    public function carousels()
    {
        return $this->belongsToMany('App\Models\Carousel');
    }

    public function created_at()
    {
        $date = $this->created_at;
        return date('d/m/Y', strtotime($date));
    }
}
