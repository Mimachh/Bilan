<div class="container flex justify-center mx-auto">
    <div class="flex flex-col">
        <div class="w-full">
                @if($updateMode || $createMode)
                <form class="bg-white rounded-lg px-4 py-5 mt-2 shadow hover:shadow-xl">
                        <div class="mb-3 text-center space-y-2">
                            <label class="underline font-semibold" for="content">Contenu</label>
                            <textarea class="border w-full" wire:model="state.content" name="content" id="content" cols="30" rows="10"></textarea>
                            @error('content') <small class="text-red-600 italic">{{ $message }}</small> @enderror
                        </div>
                        <div class="mb-3 text-center space-y-2">
                            <label class="underline font-semibold" for="email">Mail</label>
                            <input type="text" class="w-full block border" wire:model="state.email">
                            @error('email') <small class="text-red-600 italic">{{ $message }}</small> @enderror
                        </div>
                        <div class="mb-3 text-center space-y-2">
                            <label class="underline font-semibold" for="name">Statut</label>
                            <select class="w-full block border" name="statut" id="statut" wire:model="state.statut_id">
                                <option value="">Choisir un statut</option>
                                @foreach($statuts as $statut)
                                <option value="{{ $statut->id }}">{{ $statut->name }}</option>
                                @endforeach
                            </select>
                            @error('statut_id') <small class="text-red-600 italic">{{ $message }}</small> @enderror
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

            <h3 class="text-green-600 text-lg text-center mb-5"> {{ $testimonials->count() }} Témoignage(s) en ligne</h3>
            <div class="mb-2 text-cyan-600">
                <button type=button wire:click="openForm" class="flex inline space-x-2">
                    <p> Créer un nouveau témoignage</p>
                </button>
            </div>    
            <div class="border-b border-gray-200 shadow-lg hover:shadow-2xl hover:shadow-cyan-500/60 shadow-cyan-500/50">
                <table class="divide-y divide-gray-300">
                    <thead class="bg-gray-200">
                        <tr class="px-6 py-2 text-xs text-gray-500 divide-x divide-gray-300">
                            <th class="px-4 py-4" scope="col">#</th>
                            <th class="px-6 py-4"scope="col">Contenu</th>
                            <th class="px-6 py-4" scope="col">Mail</th>
                            <th class="px-6 py-4" scope="col">Statut</th>
                            <th class="px-6 py-4" scope="col"> -- </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-300">
                        @foreach ($testimonials as $testimonial)
                            <tr class="whitespace-nowrap text-xs text-center text-gray-500 divide-x">
                                <th class="bg-gray-200" scope="row">{{ $testimonial->id }}</th>
                                <td>{{ $testimonial->content }}</td>
                                <td>{{ $testimonial->email }}</td>
                                <td>{{ $testimonial->statut->name }}</td>
                                <td class="px-6 py-4">
                                    <button wire:click.prevent="edit({{ $testimonial->id }})" type="button" class="px-4 py-1 text-sm text-blue-600 bg-blue-200 rounded-full">Modifier</button>
                                    <button wire:click.prevent="delete({{ $testimonial->id }})" type="button" class="px-4 py-1 text-sm text-red-400 bg-red-200 rounded-full">Supprimer</button>
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




