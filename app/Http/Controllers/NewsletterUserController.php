<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsletterUser;
use Illuminate\Support\Facades\Http;

class NewsletterUserController extends Controller
{
    public function unsubscribe ()
    {
        return view('newsletters.unsubscribe');

    }
    public function confirmUnsubscribe($mail, $newsletter_id)
    {
        $email = encrypt($mail);
        $decryptEmail = decrypt($email);
        // dd($email, decrypt($email));


        $user  = NewsletterUser::where('email', $decryptEmail)->first();
        if ($user) {
            // $emailCampaignId         = Request::get('email_campaign_id');
            $user->update([
                'statut' => 0,
            ]);
            // $update = NewsletterUser::updateOrCreate([
            //     'statut' => $statut,
            //     'email' => $decryptEmail,
            // ]);
            // $emailCampaignPreference = EmailCampaignPreference::updateOrCreate(
            //     [
            //         'user_id'           => $user->id,
            //         'email_campaign_id' => $emailCampaignId,
            //     ],
            //     [
            //         'opt_out' => true,
            //         'email'   => $user->email,
            //     ]
            // );

            return redirect()->route('/');
        }
        else {
            // echo 'Erreur 404. Les données fournies sont invalides';
            //  return response()->view('errors.404', [], 404);
            abort(404, 'Page');
        }
            // 'sinon erreur ici'
    }
        

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewsletterUser  $newsletterUser
     * @return \Illuminate\Http\Response
     */
    public function show(NewsletterUser $newsletterUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewsletterUser  $newsletterUser
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsletterUser $newsletterUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewsletterUser  $newsletterUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsletterUser $newsletterUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewsletterUser  $newsletterUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsletterUser $newsletterUser)
    {
        //
    }
}
