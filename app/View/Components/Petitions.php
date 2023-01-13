<?php

namespace App\View\Components;

use App\Models\Petition;
use Illuminate\View\Component;

class Petitions extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */

    public function render()
    {
        $petitions = Petition::where('statut', 1)->paginate(1);
        $objectif_first_step = 100;
        $objectif_final = 50000;
        $percent_objectif = 0;
        foreach($petitions as $petition){
            
            $percent_objectif = ($petition->signatures->count() * 100) / $objectif_first_step;
        }
        


        return view('components.petitions', [
            'petitions' => $petitions,
            'objectif_first_step' => $objectif_first_step,
            'objectif_final' => $objectif_final,
            'percent_objectif' => $percent_objectif,
        ]);
    }
}
