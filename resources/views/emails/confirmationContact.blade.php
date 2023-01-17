<x-mail::message>
# Message reçu

<x-mail::panel>
Sujet : {{ $contact->subject->name }}. <br>
Votre message : {{ $contact->message }}.
</x-mail::panel>

Bonjour {{ $contact->name }} {{ $contact->last_name }}, <br><br>
Nous avons bien reçu ton message. <br>
Notre équipe fait au plus vite pour en prendre connaissance et te répondre.

<x-mail::button :url="''">
Button Text
</x-mail::button>

A bientôt,<br>
L'équire de {{ config('app.name') }}
</x-mail::message>
