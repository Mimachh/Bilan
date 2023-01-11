<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('petitions')->insert([
            ['id' => '1', 'title' => 'Pour ou Contre Macron en 2027?'],

        ]);

        DB::table('responses')->insert([
            ['id' => '1', 'name' => 'Oui'],
            ['id' => '2', 'name' => 'Non'],
            ['id' => '3', 'name' => 'NSP'],

        ]);

        DB::table('statuts')->insert([
 
            ['id'=>'1', 'name' => 'En attente'],
            ['id'=>'2', 'name' => 'Traité'],
            ['id'=>'3', 'name' => 'Archivé'],
            
        ]);

        DB::table('subjects')->insert([
 
            ['id'=>'1', 'name' => 'Réclamation'],
            ['id'=>'2', 'name' => 'Partenariat'],
            ['id'=>'3', 'name' => 'Nous soutenir'],
            ['id'=>'4', 'name' => 'Autre']
        ]);


        DB::table('faqs')->insert([
 
            ['id'=>'1', 'question' => 'Les chiffres sont-ils réels ?', 'answer' => 'patatipatatipatati patatipatati patatipatati patatipatati patatipatati patatipatati patatipatatipatatipatati patatipatati patati patati patati patati patatipatati'],
            ['id'=>'2', 'question' => 'Comment sont calculées les statistiques ?', 'answer' => 'patati'],
            ['id'=>'3', 'question' => 'Pourquoi certains chiffres reviennent en arrière parfois ?', 'answer' => 'patati'],
            ['id'=>'4', 'question' => 'Autre', 'answer' => 'patati'],
        ]);
    }
}
