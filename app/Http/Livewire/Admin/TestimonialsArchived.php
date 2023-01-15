<?php

namespace App\Http\Livewire\Admin;

use App\Models\Statut;
use Livewire\Component;

use App\Models\Testimonial;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Validator;

class TestimonialsArchived extends Component
{
    public $testimonials;
    public $statuts;
    public $state = [];

    public $updateMode = false;
    public $createMode = false;

    use WithPagination;

    public function mount()
    {
        $this->testimonials = Testimonial::where('statut_id', 3)->get();
        $this->statuts = Statut::all();
    }

    private function resetInputFields(){
        $this->reset('state');
    }

    public function store()
    {
        $validator = Validator::make($this->state, [
            'content' => 'required|max:255',
            'email' => 'required|max:60|unique:testimonials,email',
            'confirm_rule' => 'required|boolean',
            'statut_id' => 'required|integer',
        ],[  
            'content.required' => 'Un contenu est requis !',
            'content.max' => 'Le contenu ne doit pas dépasser 255 caractères !',
            'email.max' => 'Votre mail ne doit pas dépasser 255 caractères',
            'email.unique' => 'Votre mail a déjà été utilisé',
            'email.required' => 'Vous devez renseigner votre mail',
            'confirm_rule' => 'Les règles doivent être acceptées',
            'statut_id' => 'Merci de choisir un statut',
        ]
        )->validate();

        $confirm_rule = '1';
        $create = Testimonial::create([
            'content' => $this->state['content'],
            'statut_id' => $this->state['statut_id'],
            'email' => $this->state['email'],
            'confirm_rule' => 1,
        ]);

        $this->reset('state');
        $this->createMode = false;
        $this->testimonials = Testimonial::where('statut_id', 3)->get();
    }

    public function edit($id)
    {
        $this->updateMode = true;

        $testimonial = Testimonial::find($id);
        
        $this->state = [
            'id' => $testimonial->id,
            'content' => $testimonial->content,
            'statut_id' => $testimonial->statut_id,
            'email' => $testimonial->email,
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
            'content' => 'required|max:255',
            'email' => 'required|max:60',
            'statut_id' => 'required|integer',
        ],[  
            'content.required' => 'Un contenu est requis !',
            'content.max' => 'Le contenu ne doit pas dépasser 255 caractères !',
            'email.max' => 'Votre mail ne doit pas dépasser 255 caractères',
            'email.required' => 'Vous devez renseigner votre mail',
            'statut_id' => 'Merci de choisir un statut',
        ]
        )->validate();


        if ($this->state['id']) {
            $testimonial = Testimonial::find($this->state['id']);
            $testimonial->update([
                'content' => $this->state['content'],
                'statut_id' => $this->state['statut_id'],
                'email' => $this->state['email'],
            ]);
            

            $this->updateMode = false;
            $this->reset('state');
            $this->testimonials = Testimonial::where('statut_id', 3)->get();
        }
    }

    public function delete($id)
    {
        if($id){
            $testimonial = Testimonial::where('id', $id)->first();
            Testimonial::where('id',$id)->delete();
            $this->testimonials = Testimonial::where('statut_id', 3)->get();
        }
    }
    public function render()
    {
        return view('livewire.admin.testimonials-archived');
    }
}
