<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 15) as $index) {

            DB::table('Categories')->insert([

                'name' => Str::random(10),
                'slug' => Str::random(10),
            ]);


        }
    }
}
