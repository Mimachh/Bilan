<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Faq;
use Illuminate\Support\Facades\Validator;

class FAQS extends Component
{
    public $faqs;
    public $state = [];

    public $updateMode = false;
    public $createMode = false;

    use WithPagination;

    public function mount()
    {
        $this->faqs = Faq::all();
    }

    private function resetInputFields(){
        $this->reset('state');
    }

    public function store()
    {
        $validator = Validator::make($this->state, [
            'question' => 'required|max:60',
            'statut' => 'nullable|boolean',
            'answer' => 'required|max:255',        
        ],[  
            'question.required' => 'Une question est requise !',
            'question.max' => 'La question ne doit pas dépasser 60 caractères !',
            'answer.required' => 'Une réponse est obligatoire !',
            'anwser.max' => 'La réponse est trop longue !',
            'statut.boolean' => 'La valeur n\'est pas bonne !',
        ]
        )->validate();

        $create = Faq::create([
            'question' => $this->state['question'],
            'statut' => $this->state['statut'],
            'answer' => $this->state['answer'],
        ]);

        $this->reset('state');
        $this->createMode = false;
        $this->faqs = Faq::all();
    }

    public function edit($id)
    {
        $this->updateMode = true;

        $faq = Faq::find($id);
        
        $this->state = [
            'id' => $faq->id,
            'question' => $faq->question,
            'statut' => $faq->statut,
            'answer' => $faq->answer,
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
            'question' => 'required|max:60',
            'statut' => 'nullable|boolean',
            'answer' => 'required|max:255',        
        ],[  
            'question.required' => 'Une question est requise !',
            'question.max' => 'La question ne doit pas dépasser 60 caractères !',
            'answer.required' => 'Une réponse est obligatoire !',
            'anwser.max' => 'La réponse est trop longue !',
            'statut.boolean' => 'La valeur n\'est pas bonne !',
        ]
        )->validate();


        if ($this->state['id']) {
            $faq = Faq::find($this->state['id']);

            $faq->update([
                'question' => $this->state['question'],
                'statut' => $this->state['statut'],
                'answer' => $this->state['answer'],
            ]);
            

            $this->updateMode = false;
            $this->reset('state');
            $this->faqs = Faq::all();
        }
    }

    public function delete($id)
    {
        if($id){
            $faq = Faq::where('id', $id)->first();
            Faq::where('id',$id)->delete();
            $this->faqs = Faq::all();
        }
    }
    public function render()
    {
        return view('livewire.admin.f-a-q-s');
    }
}
