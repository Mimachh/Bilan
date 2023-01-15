<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Dashboard extends Component
{
    public $currentPage = 1;
    
    public $pages = [ 1=>1, 2=>2, 3=>3, 4=>4, 5=>5, 6=>6, 7=>7];

    public function goToHome()
    {
        $this->currentPage = 1;
    }

    public function goToNewsletters()
    {
        $this->currentPage = 2;
    }

    public function goToPetitions()
    {
        $this->currentPage = 3;
    }

    public function goToMessages()
    {
        $this->currentPage = 4;
    }

    public function goToFAQ()
    {
        $this->currentPage = 5;
    }

    public function goToTestimonialsWaiting()
    {
        $this->currentPage = 6;
    }

    public function goToTestimonialsOnline()
    {
        $this->currentPage = 7;
    }
    
    public function goToTestimonialsArchived()
    {
        $this->currentPage = 8;
    }

    public function goToCarousel()
    {
        $this->currentPage = 9;
    }

    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
