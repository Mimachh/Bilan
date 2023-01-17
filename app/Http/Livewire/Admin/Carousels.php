<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Carousel;
use App\Models\Testimonial;
use App\Notifications\TestimonialOnline;
use Illuminate\Notifications\Notifiable;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Validator;

class Carousels extends Component
{
    use Notifiable;
    
    public $testimonials;
    public $carousels;
    public $statuts;
    public $state = [];

    public $updateMode = false;
    public $createMode = false;

    use WithPagination;
    
    private function resetInputFields(){
        $this->reset('state');
    }

    public function mount()
    {
        $this->carousels = Carousel::all();
        $this->testimonials = Testimonial::where('statut_id', 2)->get();
    }

    public function edit($id)
    {
        $this->updateMode = true;

        $carousel = Carousel::find($id);
        
        $this->state = [
            'id' => $carousel->id,
            'testimonial_id' => $carousel->testimonial_id,
        ];

    }

    public function openForm()
    {
        $this->createMode = true;
    }

    public function cancel()
    {
        if($this->updateMode) {
            $this->updateMode = false;
        }
        if($this->createMode) {
            $this->createMode = false;
        }
        

        $this->reset('state');
    }

    public function update()
    {
        $validator = Validator::make($this->state, [
            'testimonial_id' => 'required|integer',
        ],[  

            'testimonial_id' => 'Merci de choisir un témoignage',
        ]
        )->validate();


        if ($this->state['id']) {
            $carousel = Carousel::find($this->state['id']);
            $carousel->update([
                'testimonial_id' => $this->state['testimonial_id'],
            ]);
            

            $this->updateMode = false;
            $this->reset('state');
            $this->carousels = Carousel::all();

            $testimonial = Testimonial::find($carousel->testimonial->id);
            $testimonial->notify(new TestimonialOnline($testimonial));
        }
        
    }


    public function render()
    {
        return view('livewire.admin.carousels');
    }
}
