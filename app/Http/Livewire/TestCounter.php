<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class TestCounter extends Component
{
    public $number_day;
    public $migrant_counter;

    public function mount()
    {
        $januaryFirst = 1672527600;
        $today = strtotime(Carbon::now());
        $today_true_hour = $today + 3600;
        $this->number_day = ($today_true_hour - $januaryFirst) / 86400;

        $migrant = 0;
        $migrant_by_day = 86400;
        $this->migrant_counter = $migrant + ($this->number_day * $migrant_by_day);

    }
    
    public function render()
    {
        return view('livewire.test-counter');
    }
}
