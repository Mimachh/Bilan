<x-mail::message>
# Votre témoignage a bien été envoyé.

Notre équipe va en prendre connaissance et vous préviendra par mail lorsque celui sera affiché sur le site. <br><br>
En attendant nous vous remercions d'avoir témoigné?


<x-mail::button :url="''">
Button Text
</x-mail::button>

A bientôt,<br>
L'équipe de {{ config('app.name') }}
</x-mail::message>
