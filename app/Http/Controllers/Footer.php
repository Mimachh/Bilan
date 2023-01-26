<?php

namespace App\Http\Controllers;

use App\Models\NewsletterUser;
use Illuminate\Http\Request;

class Footer extends Controller
{
    public function store(Request $request)
    {
        //dd($request);
        $statut = 1;
        $data = $request->validate([
            'email' => 'required|max:255|unique:newsletter_users,email',
            'confirm_rule' => 'required|boolean', 
        ],
        [
            'email.max' => 'Votre mail ne doit pas dépasser 255 caractères',
            'email.unique' => 'Votre mail a déjà été utilisé',
            'email.required' => 'Vous devez renseigner votre mail',
            'confirm_rule.required' => 'Vous devez accepter les conditions d\'utilisation',
            'confirm_rule.boolean' => 'Vous devez cocher les conditions d\'utilisation',
        ]);
        $create = NewsletterUser::create([
            'statut' => $statut,
            'email' => $request->email,
            'confirm_rule' => $request->confirm_rule,
        ]);

        return redirect()->route('newsletters.confirmation');

    }
}
