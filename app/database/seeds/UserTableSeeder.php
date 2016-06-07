<?php

class UserTableSeeder extends Seeder {

	public function run()
	{


		$user = new User();
		$user->username = 'remington';
		$user->firstname = 'Remington';
		$user->lastname = 'Williams';
		$user->email = 'remington@email.com';
		$user->password = $_ENV['USER_PASSWORD'];
		$user->save();

		$user = new User();
		$user->username = 'aria';
		$user->firstname = 'Aria';
		$user->lastname = 'Williams';
		$user->email = 'aria@email.com';
		$user->password = $_ENV['USER_PASSWORD'];
		$user->save();

		$user = new User();
		$user->username = 'archer';
		$user->firstname = 'Archer';
		$user->lastname = 'Williams';
		$user->email = 'archer@email.com';
		$user->password = $_ENV['USER_PASSWORD'];
		$user->save();

		$user = new User();
		$user->username = 'dude';
		$user->firstname = 'Bob';
		$user->lastname = 'Kay';
		$user->email = 'dude@email.com';
		$user->password = $_ENV['USER_PASSWORD'];
		$user->save();

		$user = new User();
		$user->username = 'wheresmycar';
		$user->firstname = 'John';
		$user->lastname = 'Apple';
		$user->email = 'wheresmycar@email.com';
		$user->password = $_ENV['USER_PASSWORD'];
		$user->save();
	}

}
