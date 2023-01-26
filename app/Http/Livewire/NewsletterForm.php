<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\NewsletterUser;

class NewsletterForm extends Component
{
    public function store()
    {
dd('ok');        
    }
    public function render()
    {
        return view('livewire.newsletter-form');
    }
}
