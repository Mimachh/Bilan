<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Petition;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Validator;

class Petitions extends Component
{
    public $petitions;
    public $state = [];

    public $updateMode = false;
    public $createMode = false;

    use WithPagination;

    public function mount()
    {
        $this->petitions = Petition::all();
    }

    private function resetInputFields(){
        $this->reset('state');
    }

    public function store()
    {
        $validator = Validator::make($this->state, [
            'title' => 'required|max:60',
            'statut' => 'nullable|boolean',         
        ],[  
            'title.required' => 'Un nom est requis !',
            'title.max' => 'Le nom ne doit pas dépasser 60 caractères !',
        ]
        )->validate();

        Petition::create($this->state);

        $this->reset('state');
        $this->createMode = false;
        $this->petitions = Petition::all();
    }

    public function edit($id)
    {
        $this->updateMode = true;

        $petition = Petition::find($id);
        
        $this->state = [
            'id' => $petition->id,
            'title' => $petition->title,
            'statut' => $petition->statut,
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
            'title' => 'required|max:60',
            'statut' => 'nullable|boolean',         
        ],[  
            'title.required' => 'Un nom est requis !',
            'title.max' => 'Le nom ne doit pas dépasser 60 caractères !',
        ]
        )->validate();


        if ($this->state['id']) {
            $petition = Petition::find($this->state['id']);
            $petition->update([
                'title' => $this->state['title'],
                'statut' => $this->state['statut'],
            ]);
            

            $this->updateMode = false;
            $this->reset('state');
            $this->petitions = Petition::all();
        }
    }

    public function delete($id)
    {
        if($id){
            Petition::where('id',$id)->delete();
            $this->petitions = Petition::all();
        }
    }
    public function render()
    {
        return view('livewire.admin.petitions');
    }
}
