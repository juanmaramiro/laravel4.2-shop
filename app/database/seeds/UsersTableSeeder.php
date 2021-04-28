<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

			/*User::create([
				'name' => 'admin',
				'email' => 'admin@laravelshop',
				'password' => 'admin',

			]);*/
	}

}