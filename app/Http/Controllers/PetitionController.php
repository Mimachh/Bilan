<?php

namespace App\Http\Controllers;

use App\Models\Petition;
use App\Models\Response;
use App\Models\Signature;
use Illuminate\Http\Request;

class PetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petitions = Petition::paginate(3);
        
        

        return view('petitions.index', [
            'petitions' => $petitions,
  
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Petition $petition)
    {
        $responses = Response::all();
        return view('petitions.create',[ 
            'petition' => $petition,
            'responses' => $responses,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'response_id' => 'required|integer',
            'petition_id' => 'required|integer',
            'email' => 'required|max:255',
            'confirm_rule' => 'required|boolean',
        ], [
            'response_id.required' => 'Vous devez selectionner une réponse',
            'response_id.integer' => 'La valeur n\'est pas bonne',
            'last_name.required' => 'Votre prénom doit être renseigné',
            'email.max' => 'Votre mail ne doit pas dépasser 255 caractères',
            'email.required' => 'Vous devez renseigner votre mail',
            'email.unique' => 'Ce mail à déjà été utilisé',
            'confirm_rule.required' => 'Vous devez accepter les conditions d\'utilisation',
            'confirm_rule.boolean' => 'Vous devez cocher les conditions d\'utilisation',
        ]);

        $create = Signature::create($data);
       
        return redirect()->route('petitions.confirmation');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function show(Petition $petition)
    {
        $petition_id = $petition->id;
        
        return view('petitions.show',[ 
        'petition_id' => $petition_id,
        'petition' => $petition,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function edit(Petition $petition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Petition $petition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Petition $petition)
    {
        //
    }
}
