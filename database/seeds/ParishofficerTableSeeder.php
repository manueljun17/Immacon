<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ParishofficerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parishofficers')->truncate();

        $faker = Faker::create();
        $parishofficers = [];

        foreach (range(1, 40) as $index) 
        {
        	$parishofficers[] = [
        		'name' => $faker->name,
        		'position' => $faker->jobTitle,
        		'description' => $faker->email,
        		'user_image' => 'image/profile/'. rand(1, 9) . '.png', 
        		'created_at' => new DateTime,
        		'updated_at' => new DateTime,   
        	];	
        }
        DB::table('parishofficers')->insert($parishofficers);
    }
}
