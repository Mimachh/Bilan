@extends('layouts.master')
@section('content')

<section class="bg-black-perso min-h-screen md:relative">
<div class="grid text-red-600 md:grid-cols-3 gap-4">
  <div class="md:col-span-2 bg-green-500 space-y-8 px-4 md:pr-8 py-4">
  @livewire('button-back')
    <div>
        image 
    </div>
    <div class="space-y-2">
        <h1 class="font-bold text-md">Titre principal</h1>
        barre de progression
    </div>
    <div class="space-y-2">
        <h1 class="font-bold text-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet error expedita facilis voluptates, repellendus beatae ex. Distinctio delectus, tenetur, aliquam adipisci consequuntur quos dignissimos, rerum cum quis sapiente dolores mollitia!</h1>
        <p class="text-sm lead-tight">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint accusamus commodi perferendis doloribus odio beatae consequuntur quibusdam. Quod asperiores odit et? Autem dicta corporis doloribus repudiandae assumenda quibusdam facere voluptate. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel adipisci minima voluptate, dolore omnis, ea labore nisi voluptatum, ducimus iure quis dolor! Inventore corrupti dolore, quidem earum cum tempore magni.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui earum facilis, alias eligendi voluptatem at, reiciendis nemo, ab rerum porro deleniti laudantium voluptate temporibus nihil eum vero cupiditate impedit totam?
            <br> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto illum harum molestiae esse saepe reprehenderit recusandae vero magni, ipsum minus laboriosam praesentium enim reiciendis id nam? Quidem minus enim repudiandae?
        </p>
    </div>
    <div class="space-y-2">
        <h1 class="font-bold text-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet error expedita facilis voluptates, repellendus beatae ex. Distinctio delectus, tenetur, aliquam adipisci consequuntur quos dignissimos, rerum cum quis sapiente dolores mollitia!</h1>
        <p class="text-sm lead-tight">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint accusamus commodi perferendis doloribus odio beatae consequuntur quibusdam. Quod asperiores odit et? Autem dicta corporis doloribus repudiandae assumenda quibusdam facere voluptate. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel adipisci minima voluptate, dolore omnis, ea labore nisi voluptatum, ducimus iure quis dolor! Inventore corrupti dolore, quidem earum cum tempore magni.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui earum facilis, alias eligendi voluptatem at, reiciendis nemo, ab rerum porro deleniti laudantium voluptate temporibus nihil eum vero cupiditate impedit totam?
            <br> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto illum harum molestiae esse saepe reprehenderit recusandae vero magni, ipsum minus laboriosam praesentium enim reiciendis id nam? Quidem minus enim repudiandae?
        </p>
    </div>
    <div class="space-y-2">
        <h1 class="font-bold text-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet error expedita facilis voluptates, repellendus beatae ex. Distinctio delectus, tenetur, aliquam adipisci consequuntur quos dignissimos, rerum cum quis sapiente dolores mollitia!</h1>
        <p class="text-sm lead-tight">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint accusamus commodi perferendis doloribus odio beatae consequuntur quibusdam. Quod asperiores odit et? Autem dicta corporis doloribus repudiandae assumenda quibusdam facere voluptate. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel adipisci minima voluptate, dolore omnis, ea labore nisi voluptatum, ducimus iure quis dolor! Inventore corrupti dolore, quidem earum cum tempore magni.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui earum facilis, alias eligendi voluptatem at, reiciendis nemo, ab rerum porro deleniti laudantium voluptate temporibus nihil eum vero cupiditate impedit totam?
            <br> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto illum harum molestiae esse saepe reprehenderit recusandae vero magni, ipsum minus laboriosam praesentium enim reiciendis id nam? Quidem minus enim repudiandae?
        </p>
    </div>
    <div class="space-y-2">
        <h1 class="font-bold text-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet error expedita facilis voluptates, repellendus beatae ex. Distinctio delectus, tenetur, aliquam adipisci consequuntur quos dignissimos, rerum cum quis sapiente dolores mollitia!</h1>
        <p class="text-sm lead-tight">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint accusamus commodi perferendis doloribus odio beatae consequuntur quibusdam. Quod asperiores odit et? Autem dicta corporis doloribus repudiandae assumenda quibusdam facere voluptate. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel adipisci minima voluptate, dolore omnis, ea labore nisi voluptatum, ducimus iure quis dolor! Inventore corrupti dolore, quidem earum cum tempore magni.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui earum facilis, alias eligendi voluptatem at, reiciendis nemo, ab rerum porro deleniti laudantium voluptate temporibus nihil eum vero cupiditate impedit totam?
            <br> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto illum harum molestiae esse saepe reprehenderit recusandae vero magni, ipsum minus laboriosam praesentium enim reiciendis id nam? Quidem minus enim repudiandae?
        </p>
    </div>
    <!-- Button share -->
    <div class="flex justify-end space-x-1 pt-4">
        <h3 class="italic text-black">Partager sur :</h3>
        <div>
            <button id="telegram_petition" title="telegram">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" aria-label="Telegram" role="img" viewBox="0 0 512 512" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><rect width="512" height="512" rx="15%" fill="#37aee2"></rect><path fill="#c8daea" d="M199 404c-11 0-10-4-13-14l-32-105 245-144"></path><path fill="#a9c9dd" d="M199 404c7 0 11-4 16-8l45-43-56-34"></path><path fill="#f6fbfe" d="M204 319l135 99c14 9 26 4 30-14l55-258c5-22-9-32-24-25L79 245c-21 8-21 21-4 26l83 26 190-121c9-5 17-3 11 4"></path></g></svg>
            </button>
            <button id="whatsapp_petition" data-action="share/whatsapp/share" title="whatsapp">
                <svg class="w-6 h-6"  xmlns="http://www.w3.org/2000/svg" aria-label="WhatsApp" role="img" viewBox="0 0 512 512" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><rect width="512" height="512" rx="15%" fill="#25d366"></rect><path fill="#25d366" stroke="#ffffff" stroke-width="26" d="M123 393l14-65a138 138 0 1150 47z"></path><path fill="#ffffff" d="M308 273c-3-2-6-3-9 1l-12 16c-3 2-5 3-9 1-15-8-36-17-54-47-1-4 1-6 3-8l9-14c2-2 1-4 0-6l-12-29c-3-8-6-7-9-7h-8c-2 0-6 1-10 5-22 22-13 53 3 73 3 4 23 40 66 59 32 14 39 12 48 10 11-1 22-10 27-19 1-3 6-16 2-18"></path></g></svg>
            </button>
            </div>
            <div>
            <button id="fb_petition" title="facebook">
                <svg class="h-6 w-6" viewBox="0 0 406.065 406.065" xmlns="http://www.w3.org/2000/svg" fill="blue"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="-1383.689" y1="1177.103" x2="-1382.689" y2="1177.103" gradientTransform="rotate(52.827 136349.564 548347.405) scale(276.6438)"><stop offset="0" stop-color="#455e9b"></stop><stop offset="1" stop-color="#5a70b3"></stop></linearGradient><path d="M22.969 144.483v177.765c0 33.643 27.208 60.852 60.847 60.852H322.25c33.641 0 60.848-27.209 60.848-60.852V145.105c-51.462 13.454-112.911 21.27-178.885 21.27-67.007 0-129.314-8.058-181.244-21.892M.055 70.038A74.62 74.62 0 0 0 0 72.882v260.303c0 40.172 32.708 72.881 72.888 72.881H333.18c40.179 0 72.885-32.709 72.885-72.881V72.882c0-.49-.005-.983-.015-1.471v67.114c-3.06.958-6.164 1.897-9.309 2.813v185.867c0 38.336-31.204 69.541-69.539 69.541H78.862c-38.334 0-69.54-31.205-69.54-69.541v-186.56c-3.146-.934-6.25-1.89-9.308-2.866V72.473c.001-.814.014-1.627.041-2.435" fill="url(#a)"></path><path d="M22.969 83.728c0-33.553 27.208-60.845 60.847-60.845H322.25c33.641 0 60.848 27.292 60.848 60.845v238.521c0 33.643-27.207 60.852-60.848 60.852H83.815c-33.639 0-60.847-27.209-60.847-60.852l.001-238.521M9.322 78.86v248.345c0 38.336 31.206 69.541 69.54 69.541h248.341c38.335 0 69.539-31.205 69.539-69.541V78.86c0-38.332-31.204-69.538-69.539-69.538H78.862c-38.334 0-69.54 31.206-69.54 69.538" fill="#8091c1"></path><path d="M336.51 0H68.783c-1.8 0-3.578.091-5.345.226C28.502 4.782 1.239 34.169.055 70.038 1.554 31.175 33.66 0 72.887 0H333.18c39.688 0 72.085 31.912 72.87 71.411v-.141c-.587-35.795-27.114-65.417-61.567-70.8-2.618-.3-5.275-.47-7.973-.47" fill="#d6ddf0"></path><linearGradient id="b" gradientUnits="userSpaceOnUse" x1="-1383.689" y1="1176.838" x2="-1382.689" y2="1176.838" gradientTransform="rotate(52.827 136349.564 548347.405) scale(276.6438)"><stop offset="0" stop-color="#697bb0"></stop><stop offset="1" stop-color="#7688c2"></stop></linearGradient><path d="M322.249 22.882H83.815c-33.639 0-60.847 27.292-60.847 60.845v60.755c51.93 13.834 114.236 21.892 181.242 21.892 65.974 0 127.423-7.816 178.885-21.27V83.728c.001-33.553-27.206-60.846-60.846-60.846M333.18 0H72.887C33.66 0 1.554 31.175.055 70.038c-.026.808-.04 1.621-.04 2.435v65.305a465.32 465.32 0 0 0 9.308 2.866V78.86c0-38.332 31.206-69.538 69.54-69.538h248.341c38.335 0 69.539 31.206 69.539 69.538v62.478a479.45 479.45 0 0 0 9.309-2.813V71.411C405.265 31.912 372.868 0 333.18 0" fill="url(#b)"></path><path d="M327.203 9.322H78.862c-38.334 0-69.54 31.206-69.54 69.538v61.784a503.287 503.287 0 0 0 13.646 3.838V83.728c0-33.553 27.208-60.845 60.847-60.845h238.434c33.641 0 60.848 27.292 60.848 60.845v61.378a509.178 509.178 0 0 0 13.646-3.767V78.86c-.001-38.332-31.205-69.538-69.54-69.538" fill="#8d9fcb"></path><path d="M311.982 109.705h26.031v-52.68h-56.437c-34.275 0-62.062 27.786-62.062 62.062v31.515h-44.521v52.681h44.521v162.21h69.238v-162.21h49.259v-52.681h-49.259V132.93c.004-12.826 10.403-23.225 23.23-23.225z" fill="#ffffff"></path></g></svg>
            </button>
            </div>
            <div>
            <button id="twitter_petition" class="" href="" title="twitter">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" aria-label="Twitter" role="img" viewBox="0 0 512 512" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><rect width="512" height="512" rx="15%" fill="#1da1f2"></rect><path fill="#ffffff" d="M437 152a72 72 0 01-40 12a72 72 0 0032-40a72 72 0 01-45 17a72 72 0 00-122 65a200 200 0 01-145-74a72 72 0 0022 94a72 72 0 01-32-7a72 72 0 0056 69a72 72 0 01-32 1a72 72 0 0067 50a200 200 0 01-105 29a200 200 0 00309-179a200 200 0 0035-37"></path></g></svg>
            </button>
            </div>
            <div>
            <a id="mail_petition" class="" href="mailto:?subject=Signe la pétition&amp;body=Pour que Macron arrête de sucer l'Ukraine http://www.website.com." title="Mail">
                <svg class="w-6 h-6" viewBox="7.086 -169.483 1277.149 1277.149" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="none" d="M1138.734 931.095h.283M1139.017 931.095h-.283"></path><path d="M1179.439 7.087c57.543 0 104.627 47.083 104.627 104.626v30.331l-145.36 103.833-494.873 340.894L148.96 242.419v688.676h-37.247c-57.543 0-104.627-47.082-104.627-104.625V111.742C7.086 54.198 54.17 7.115 111.713 7.115l532.12 394.525L1179.41 7.115l.029-.028z" fill="#e75a4d"></path><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="1959.712" y1="737.107" x2="26066.213" y2="737.107" gradientTransform="matrix(.0283 0 0 -.0283 248.36 225.244)"><stop offset="0" stop-color="#f8f6ef"></stop><stop offset="1" stop-color="#e7e4d6"></stop></linearGradient><path fill="url(#a)" d="M111.713 7.087l532.12 394.525L1179.439 7.087z"></path><path fill="#e7e4d7" d="M148.96 242.419v688.676h989.774V245.877L643.833 586.771z"></path><path fill="#b8b7ae" d="M148.96 931.095l494.873-344.324-2.24-1.586L148.96 923.527z"></path><path fill="#b7b6ad" d="M1138.734 245.877l.283 685.218-495.184-344.324z"></path><path d="M1284.066 142.044l.17 684.51c-2.494 76.082-35.461 103.238-145.219 104.514l-.283-685.219 145.36-103.833-.028.028z" fill="#b2392f"></path><linearGradient id="b" gradientUnits="userSpaceOnUse" x1="1959.712" y1="737.107" x2="26066.213" y2="737.107" gradientTransform="matrix(.0283 0 0 -.0283 248.36 225.244)"><stop offset="0" stop-color="#f8f6ef"></stop><stop offset="1" stop-color="#e7e4d6"></stop></linearGradient><path fill="url(#b)" d="M111.713 7.087l532.12 394.525L1179.439 7.087z"></path><linearGradient id="c" gradientUnits="userSpaceOnUse" x1="1959.712" y1="737.107" x2="26066.213" y2="737.107" gradientTransform="matrix(.0283 0 0 -.0283 248.36 225.244)"><stop offset="0" stop-color="#f8f6ef"></stop><stop offset="1" stop-color="#e7e4d6"></stop></linearGradient><path fill="url(#c)" d="M111.713 7.087l532.12 394.525L1179.439 7.087z"></path><linearGradient id="d" gradientUnits="userSpaceOnUse" x1="1959.712" y1="737.107" x2="26066.213" y2="737.107" gradientTransform="matrix(.0283 0 0 -.0283 248.36 225.244)"><stop offset="0" stop-color="#f8f6ef"></stop><stop offset="1" stop-color="#e7e4d6"></stop></linearGradient><path fill="url(#d)" d="M111.713 7.087l532.12 394.525L1179.439 7.087z"></path><linearGradient id="e" gradientUnits="userSpaceOnUse" x1="1959.712" y1="737.107" x2="26066.213" y2="737.107" gradientTransform="matrix(.0283 0 0 -.0283 248.36 225.244)"><stop offset="0" stop-color="#f8f6ef"></stop><stop offset="1" stop-color="#e7e4d6"></stop></linearGradient><path fill="url(#e)" d="M111.713 7.087l532.12 394.525L1179.439 7.087z"></path><linearGradient id="f" gradientUnits="userSpaceOnUse" x1="1959.712" y1="737.107" x2="26066.213" y2="737.107" gradientTransform="matrix(.0283 0 0 -.0283 248.36 225.244)"><stop offset="0" stop-color="#f8f6ef"></stop><stop offset="1" stop-color="#e7e4d6"></stop></linearGradient><path fill="url(#f)" d="M111.713 7.087l532.12 394.525L1179.439 7.087z"></path><linearGradient id="g" gradientUnits="userSpaceOnUse" x1="1959.712" y1="737.107" x2="26066.213" y2="737.107" gradientTransform="matrix(.0283 0 0 -.0283 248.36 225.244)"><stop offset="0" stop-color="#f8f6ef"></stop><stop offset="1" stop-color="#e7e4d6"></stop></linearGradient><path fill="url(#g)" d="M111.713 7.087l532.12 394.525L1179.439 7.087z"></path><linearGradient id="h" gradientUnits="userSpaceOnUse" x1="1959.712" y1="737.107" x2="26066.213" y2="737.107" gradientTransform="matrix(.0283 0 0 -.0283 248.36 225.244)"><stop offset="0" stop-color="#f8f6ef"></stop><stop offset="1" stop-color="#e7e4d6"></stop></linearGradient><path fill="url(#h)" d="M111.713 7.087l532.12 394.525L1179.439 7.087z"></path><path fill="#f7f5ed" d="M111.713 7.087l532.12 394.525L1179.439 7.087z"></path></g></svg>
            </a>
        </div>  
    </div>
  </div>
  <div class="bg-blue-400 md:fixed md:top-10 md:right-0 lg:right-10 rounded-lg ">
    <div class="pb-12 max-w-[700px] mx-auto px-3 lg:px-6">
        <h2 class="text-2xl font-bold text-center mt-4 mb-2">Signer la pétition</h2>
        <small>Les champs marqué de * sont obligatoires</small>
        <form method='POST' action="{{ route('petitions.store') }}">
            @csrf
            <div class="form-group mb-6">
            <input name="name" type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="name"
                placeholder="Votre nom*">
                @error('name') <small class="text-red-600 italic"> {{ $errors->first('name') }}</small>@enderror
            </div>
            <div class="form-group mb-6">
            <input name="last_name" type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="last_name"
                placeholder="Votre prénom*">
                @error('last_name') <small class="text-red-600 italic"> {{ $errors->first('last_name') }}</small>@enderror
            </div>
            <div class="form-group mb-6">
                <input type="hidden" value="{{$petition->id}}" name="petition_id">
                <input name="email" type="email" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="email"
                placeholder="Votre mail*">
                @error('email') <small class="text-red-600 italic"> {{ $errors->first('email') }}</small>@enderror
            </div>
            <div class="form-group form-check text-center mb-6">
                <input name="confirm_rule" type="checkbox"
                    value="1" class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-red-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
                    id="confirm_rule">
                <label class="form-check-label inline-block text-white" for="confirm_rule">
                    Accepter les conditions d'utilisation*
                </label>
                @error('confirm_rule') <small class="text-red-600 italic"> {{ $errors->first('confirm_rule') }}</small>@enderror
            </div>
            <div class="form-group form-check text-center mb-6">
                <input name="statut" type="checkbox"
                    value="1" class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-red-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
                    id="statut">
                <label class="form-check-label inline-block text-white" for="statut">
                    Recevoir la newsletter
                </label>
                @error('newsletter') <small class="text-red-600 italic"> {{ $errors->first('newsletter') }}</small>@enderror
            </div>
            
            <button type="submit" class="w-full px-6 py-2.5 bg-blue-600 text-white font-medium
            text-md font-bold uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg
            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg 
            transition duration-150 ease-in-out">
            Signer
            </button>
        </form>
    </div>
  </div>
</div>
</section>
@vite('resources/js/petition_share.js')
@endsection