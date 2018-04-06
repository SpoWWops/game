<?php

use Illuminate\Database\Seeder;

class CharacterClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('character_classes')->insert([
            'name' => 'Mage',
        ]);
        DB::table('character_classes')->insert([
            'name' => 'Warrior',
        ]);
    }
}
