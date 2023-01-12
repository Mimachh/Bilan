<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Dashboard extends Component
{
    public $currentPage = 1;
    
    public $pages = [ 1=>1, 2=>2, 3=>3, 4=>4, 5=>5, 6=>6, 7=>7];
    
    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
