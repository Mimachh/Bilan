
    <form wire:submit.prevent="store" class="bg-red-500 max-w-fit px-3 py-3 rounded-lg">
    <h2 class="text-white font-normal">Inscrivez-vous à notre Newsletter</h2>
    <div class="form-group w-64 pt-3">
        <input wire:model="email" name="email" type="email" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="email"
            placeholder="Votre mail*">
            @error('email') <small class="text-red-600 italic"> {{ $errors->first('email') }}</small>@enderror
    </div>   
    <div class="mt-2">
        <input wire:model="confirm_rule" name="confirm_rule" type="checkbox"
            value="1" class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-red-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
            id="confirm_rule">
        <label class="form-check-label inline-block text-sm text-white" for="confirm_rule">
            Accepter les conditions d'utilisation*
        </label>
        @error('confirm_rule') <small class="text-red-600 italic"> {{ $errors->first('confirm_rule') }}</small>@enderror
    </div>
    <button type="submit" wire:click.prevent="store" class="animate-pulse w-full px-6 py-2.5 bg-blue-600 text-white font-medium
            text-md font-bold uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg
            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg 
            transition duration-150 ease-in-out">
            S'inscrire
            </button>
    </form>

