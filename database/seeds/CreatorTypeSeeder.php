<?php

use Illuminate\Database\Seeder;

class CreatorTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lk_creator_type')->insert(
            [
                'description' => 'System User',
                'sequence' =>  3
            ],
            [
                'description' => 'Role Type',
                'sequence' => 2
            ],
            [
                'description' => 'Institution Type',
                'sequence' => 1
            ]
        );
    }
}
