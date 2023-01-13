<div class="container flex justify-center mx-auto">
    <div class="flex flex-col">
        <div class="w-full">
                @if($updateMode || $createMode)
                <form class="bg-white rounded-lg px-4 py-5 mt-2 shadow hover:shadow-xl">
                        <!-- Title -->
                        <div class="mb-3 text-center space-y-2">
                            <label class="underline font-semibold" for="title">Titre de la pétition</label>
                            <input class="w-full border" type="text" wire:model="state.title" id="title"/>
                            @error('title') <small class="text-red-600 italic">{{ $message }}</small> @enderror
                        </div>
                        <div class="mb-3 text-center space-y-2">
                            <label class="underline font-semibold" for="description">Description</label>
                            <textarea class="border w-full" wire:model="state.description" name="description" id="description" cols="30" rows="10"></textarea>
                            @error('description') <small class="text-red-600 italic">{{ $message }}</small> @enderror
                        </div>
                        <div class="mb-3 text-center space-y-2">
                            <label class="underline font-semibold" for="name">En ligne ?</label>
                            <input type="checkbox" wire:model="state.statut" id="statut"/>
                            @error('statut') <small class="text-red-600 italic">{{ $message }}</small> @enderror
                        </div>
                        <div class="mb-3 text-center space-y-2">
                            <label class="underline font-semibold" for="name">Photo</label>
                            <input type="file" wire:model="state.photo" id="photo">
                            @error('photo') <small class="text-red-600 italic">{{ $message }}</small> @enderror
                        </div>
                    <!-- Buttons -->
                    <div class="mb-3 text-center">
                        <button class="text-white px-1 rounded-lg py-1 bg-red-600" type="reset" wire:click.prevent="cancel">Annuler</button>
                        @if ($updateMode)
                            <button class="text-white px-1 rounded-lg py-1 bg-blue-600" type="submit" wire:click.prevent="update">Mettre à jour</button>
                        @else
                            <button class="text-white px-1 rounded-lg py-1 bg-green-600" type="submit" wire:click.prevent="store">Enregistrer</button>
                        @endif
                    </div>
                </form>
                @endif

            <h3 class="text-green-600 text-lg text-center mb-5"> {{ $petitions->count() }} Pétition(s) en ligne</h3>
            <div class="mb-2 text-cyan-600">
                <button type=button wire:click="openForm" class="flex inline space-x-2">
                
                    <p> Créer une nouvelle pétition</p>
                </button>
            </div>    
            <div class="border-b border-gray-200 shadow-lg hover:shadow-2xl hover:shadow-cyan-500/60 shadow-cyan-500/50">
                <table class="divide-y divide-gray-300">
                    <thead class="bg-gray-200">
                        <tr class="px-6 py-2 text-xs text-gray-500 divide-x divide-gray-300">
                            <th class="px-4 py-4" scope="col">#</th>
                            <th class="px-6 py-4"scope="col">Titre de la pétition</th>
                            <th class="px-6 py-4" scope="col">Nombre de signataires</th>
                            <th class="px-6 py-4" scope="col">Statut</th>
                            <th class="px-6 py-4" scope="col"> -- </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-300">
                        @foreach ($petitions as $petition)
                            <tr class="whitespace-nowrap text-xs text-center text-gray-500 divide-x">
                                <th class="bg-gray-200" scope="row">{{ $petition->id }}</th>
                                <td>{{ $petition->title }}</td>
                                <td>{{ $petition->signatures->count() }}</td>
                                <td>
                                    @if($petition->statut === 1)
                                        En ligne
                                    @else
                                        Hors ligne
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    <button wire:click.prevent="edit({{ $petition->id }})" type="button" class="px-4 py-1 text-sm text-blue-600 bg-blue-200 rounded-full">Modifier</button>
                                    <button wire:click.prevent="delete({{ $petition->id }})" type="button" class="px-4 py-1 text-sm text-red-400 bg-red-200 rounded-full">Supprimer</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="bg-white border-t px-4 py-2">
                </div>
            </div>
        </div>
    </div>
</div>

