<?php

namespace App\Http\Controllers;

use App\Models\NewsletterUser;
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
        $petitions = Petition::where('statut', 1)->paginate(3);
        
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
        $percent_objectif = 0;
        $percent_objectif = ($petition->signatures->count() * 100) / $petition->objectif;

        return view('petitions.create',[ 
            'petition' => $petition,
            'percent_objectif' => $percent_objectif,
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
            'name' => 'required|max:60',
            'last_name' => 'required|max:60',
            'petition_id' => 'required|integer',
            'email' => 'required|max:255|unique:signatures,email',
            'confirm_rule' => 'required|boolean',
        ], [
            'name.required' => 'Votre nom doit être renseigné',
            'name.max' => 'Votre nom est trop long',
            'last_name.required' => 'Votre prénom doit être renseigné',
            'last_name.max' => 'Votre prénom est trop long',
            'email.max' => 'Votre mail ne doit pas dépasser 255 caractères',
            'email.unique' => 'Votre mail a déjà été utilisé',
            'email.required' => 'Vous devez renseigner votre mail',
            'confirm_rule.required' => 'Vous devez accepter les conditions d\'utilisation',
            'confirm_rule.boolean' => 'Vous devez cocher les conditions d\'utilisation',
        ]);

        $data2 = $request->validate([
            'statut' => 'nullable|boolean',
            'email' => 'required|max:255',
        ], [
            'statut.boolean' => 'La valeur est incorrecte',
            'email.max' => 'Votre mail ne doit pas dépasser 255 caractères',
            'email.required' => 'Vous devez renseigner votre mail',
        ]);

        $create = Signature::create($data);
                NewsletterUser::create($data2);
       
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
