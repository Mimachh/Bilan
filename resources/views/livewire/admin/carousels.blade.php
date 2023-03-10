<div class="container flex justify-center mx-auto">
    <div class="flex flex-col">
        <div class="w-full">
                @if($updateMode)
                <form class="bg-white rounded-lg px-4 py-5 mt-2 shadow hover:shadow-xl">
                        <div class="mb-3 text-center space-y-2">
                            <select wire:model="state.testimonial_id" name="testimonial" id="testimonial">
                                <option value="">Choisir un témoignage</option>
                                @foreach($testimonials as $testimonial)
                                    <option value="{{ $testimonial->id }}">{{ $testimonial->content }}</option>
                                @endforeach
                            </select>
                            @error('testimonial_id') <small class="text-red-600 italic">{{ $message }}</small> @enderror
                        </div>
                    <!-- Buttons -->
                    <div class="mb-3 text-center">
                        <button class="text-white px-1 rounded-lg py-1 bg-red-600" type="reset" wire:click.prevent="cancel">Annuler</button>
                        @if ($updateMode)
                            <button class="text-white px-1 rounded-lg py-1 bg-blue-600" type="submit" wire:click.prevent="update">Mettre à jour</button>
                        @endif
                    </div>
                </form>
                @endif

            <h3 class="text-green-600 text-lg text-center mb-5"> Liste des Carousels affichés </h3>   
            <div class="border-b border-gray-200 shadow-lg hover:shadow-2xl hover:shadow-cyan-500/60 shadow-cyan-500/50">
                <table class="divide-y divide-gray-300">
                    <thead class="bg-gray-200">
                        <tr class="px-6 py-2 text-xs text-gray-500 divide-x divide-gray-300">
                            <th class="px-4 py-4" scope="col">#</th>
                            <th class="px-6 py-4"scope="col">Contenu</th>
                            <th class="px-6 py-4" scope="col">Id du témoignage</th>
                            <th class="px-6 py-4" scope="col"> -- </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-300">
                        @foreach ($carousels as $carousel)
                            <tr class="whitespace-nowrap text-xs text-center text-gray-500 divide-x">
                                <th class="bg-gray-200" scope="row">{{ $carousel->id }}</th>
                                <td>{{ $carousel->testimonial->content }}</td>
                                <td>{{ $carousel->testimonial->id }}</td>
                                <td class="px-6 py-4">
                                    <button wire:click.prevent="edit({{ $carousel->id }})" type="button" class="px-4 py-1 text-sm text-blue-600 bg-blue-200 rounded-full">Modifier</button>
                                    <button wire:click.prevent="delete({{ $carousel->id }})" type="button" class="px-4 py-1 text-sm text-red-400 bg-red-200 rounded-full">Supprimer</button>
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