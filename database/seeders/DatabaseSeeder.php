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

        DB::table('users')->insert([
            ['id' => '1', 'name' => 'Karl', 'email' => 'karl.mullr@gmail.com', 'password' => '$2y$10$6Xyl1sJcZaAwGEi9z8sd5OQt7lYJa9UzDnJBTM4GOhPQo.shGwRGu', 'role' => 1],
        ]);

        DB::table('petitions')->insert([
            ['id' => '1', 'title' => 'Pour ou Contre Macron en 2027?', 'statut' => 1, 'description' => 'Une description', 'objectif' => 100],

        ]);

        DB::table('responses')->insert([
            ['id' => '1', 'name' => 'Oui'],
            ['id' => '2', 'name' => 'Non'],
            ['id' => '3', 'name' => 'NSP'],

        ]);

        DB::table('statuts')->insert([
 
            ['id'=>'1', 'name' => 'En attente'],
            ['id'=>'2', 'name' => 'Traité/Accepter'],
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

        DB::table('testimonials')->insert([
            ['id' => '1', 'content' => 'Bonjour', 'name' => 'Muller', 'last_name' => 'Karl', 'email' => 'karl.muller@gmail.com', 'confirm_rule' => true, 'statut_id' => '2'],
            ['id' => '2', 'content' => 'Bonjour', 'name' => 'Muller', 'last_name' => 'Karl', 'email' => 'karl.mulr@gmail.com', 'confirm_rule' => true, 'statut_id' => '2'],
            ['id' => '3', 'content' => 'Bonjour', 'name' => 'Muller', 'last_name' => 'Karl', 'email' => 'karl.mulelr@gmail.com', 'confirm_rule' => true, 'statut_id' => '2'],
            ['id' => '4', 'content' => 'Bonjour', 'name' => 'Muller', 'last_name' => 'Karl', 'email' => 'karl.mulalr@gmail.com', 'confirm_rule' => true, 'statut_id' => '2'],
            ['id' => '5', 'content' => 'Bonjour', 'name' => 'Muller', 'last_name' => 'Karl', 'email' => 'karl.mullzr@gmail.com', 'confirm_rule' => true, 'statut_id' => '2'],
        ]);

        DB::table('carousels')->insert([
            ['id' => '1', 'testimonial_id' => '1'],
            ['id' => '2', 'testimonial_id' => '2'],
            ['id' => '3', 'testimonial_id' => '3'],
            ['id' => '4', 'testimonial_id' => '4'],
            ['id' => '5', 'testimonial_id' => '5'],
        ]);
    }
}
