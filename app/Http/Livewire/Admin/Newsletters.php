<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Notifications\Notifiable;
use Livewire\Component;

class Newsletters extends Component
{
    use Notifiable;
    
    public function render()
    {
        return view('livewire.admin.newsletters');
    }
}
