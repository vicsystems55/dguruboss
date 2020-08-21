<?php

use Illuminate\Database\Seeder;

class ClassCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class_categories')->insert([
            [
            'category_name' => 'Business',
            'status' => 'active',
            'created_at' => now(),
            'updated_at' => now()
            ],
            [
                'category_name' => 'Education',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now()
                ],
            [
            'category_name' => 'Religion',
            'status' => 'active',
            'created_at' => now(),
            'updated_at' => now()
            ],
        ]);
    }
}
