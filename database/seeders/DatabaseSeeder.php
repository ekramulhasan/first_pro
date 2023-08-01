<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\category;
use App\Models\subcategory;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void

    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([

        //     'name' => "headmaster",
        //     'email' => "headmaster@info.com",
        //     'email_verified_at' => now(),
        //     'password' => Hash::make(488846666), // password
        //     'remember_token' => Str::random(10),
        //     'phone_number' => "01677124241"


        // ]);

    //    $this->call([

    //     UserSeeder::class,

    //    ]);

        if($this->command->confirm("do you want refresh DB?")){

            $this->command->call('migrate:refresh');
            $this->command->info('DB succefully refresh');
        }


        $categories = category::factory(10)->create();
        subcategory::factory(10)->make()->each(function($subcategory) use($categories){

                    $subcategory->categorie_id = $categories->random()->id;
                    $subcategory->save();

               });



    //   $categories = category::factory(10)->create();

    //   subcategory::factory(10)->make()->each(function($subcategory) use($categories){

    //         $subcategory->categorie_id = $categories->random()->id;
    //         $subcategory->save();

    //    });
    }
}
