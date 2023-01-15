<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\NewsletterUser;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('testimonials.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $testimonials = Testimonial::where('statut_id', 2)->get();
        return view('testimonials.create', compact('testimonials'));
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
            'content' => 'required|max:255',
            'email' => 'required|max:255|unique:testimonials,email',
            'confirm_rule' => 'required|boolean',
        ], [
            'content.required' => 'Le témoignage doit être renseigné',
            'content.max' => 'Votre témoignage est trop long, ne dépassez pas 255 caractères !',
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
        $create = Testimonial::create($data);
                NewsletterUser::create($data2);
       
        return redirect()->route('testimonials.confirmation');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        //
    }
}
