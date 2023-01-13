<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Petition;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class Petitions extends Component
{
    public $petitions;
    public $state = [];

    public $updateMode = false;
    public $createMode = false;

    use WithFileUploads;
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
            'photo' => 'required|image|max:2048',
            'description' => 'required|max:255',         
        ],[  
            'title.required' => 'Un nom est requis !',
            'title.max' => 'Le nom ne doit pas dépasser 60 caractères !',
            'photo.required' => 'Une photo est requis !',
            'photo.image' => 'La photo n\'est pas au bon format !',
            'photo.max' => 'La photo est trop lourde !',
            'description.required' => 'La description est obligatoire !',
            'description.max' => 'La description est trop longue !',
        ]
        )->validate();

        /* USE FOR AVOID ERROR MESSAGE UNDIFINED ARRAY KEY */
        if(isset($this->state['photo'])) {
            $name_file = md5($this->state['photo'] . microtime()).'.'.$this->state['photo']->extension();
            $this->state['photo']->storeAs('petitions', $name_file);
            $img = Image::make(public_path("/storage/petitions/{$name_file}"))->fit(1795, 1200);
            $img->save();    
        }


        $create = Petition::create([
            'title' => $this->state['title'],
            'statut' => $this->state['statut'],
            'photo' => $name_file,
            'description' => $this->state['description'],
        ]);

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
            'description' => $petition->description,
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
            'photo' => 'nullable|image|max:2048',
            'description' => 'required|max:255',         
        ],[  
            'title.required' => 'Un nom est requis !',
            'title.max' => 'Le nom ne doit pas dépasser 60 caractères !',
            'photo.image' => 'La photo n\'est pas au bon format !',
            'photo.max' => 'La photo est trop lourde !',
            'description.required' => 'La description est obligatoire !',
            'description.max' => 'La description est trop longue !',
        ]
        )->validate();


        if ($this->state['id']) {
            $petition = Petition::find($this->state['id']);

            /* Photo */
            if(isset($this->state['photo']))
            { 
                Storage::delete('petitions/'. $petition->photo);
                $name_file = md5($this->state['photo'] . microtime()).'.'.$this->state['photo']->extension();
                $this->state['photo']->storeAs('petitions', $name_file);
                $img = Image::make(public_path("/storage/petitions/{$name_file}"))->fit(1795, 1200);
                $img->save();
            }
            else {
                $name_file = $petition->photo;
            }
        /* Fin photo */
            $petition->update([
                'title' => $this->state['title'],
                'statut' => $this->state['statut'],
                'photo' => $name_file,
                'description' => $this->state['description'],
            ]);
            

            $this->updateMode = false;
            $this->reset('state');
            $this->petitions = Petition::all();
        }
    }

    public function delete($id)
    {
        if($id){
            $petition = Petition::where('id', $id)->first();
            Petition::where('id',$id)->delete();
            Storage::delete('petitions/'. $petition->photo);
            $this->petitions = Petition::all();
        }
    }
    public function render()
    {
        return view('livewire.admin.petitions');
    }
}
