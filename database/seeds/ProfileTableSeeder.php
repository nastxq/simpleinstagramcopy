<?php

use Illuminate\Database\Seeder;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Profiles')->insert([
            'title'=>str_random(10).'life',
            'user_id'=>rand(),
            'description'=>str_random(40).'super',
            'url'=>'https://www.'.str_random(5).'.com',
        ]);
    }
}
