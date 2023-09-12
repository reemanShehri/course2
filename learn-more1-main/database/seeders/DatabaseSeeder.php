<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Database\Seeder;
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


     /*   User::factory()->create([
            'name' => 'ahmed' ,
            'age' => 33 ,
            'email' => 'admin@admin' ,
            'password' => Hash::make('123456789') ,
        ]);*/
      //  Category::factory(10)->create();

        //  Category::factory(20)->create() ;
        //  SubCategory::factory(40)->create() ;
       // Product::factory(50)->create() ;
    }
}
