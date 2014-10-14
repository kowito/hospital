<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	public function run()
	{
		User::create([
			'username'   => 'admin1',
			'email'      => 'e@mail.com',
			'password'   => Hash::make('password'),
			'first_name' => 'Admin',
			'last_name'  => '01',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		]);

		User::create([
			'username'   => 'admin2',
			'email'      => 'e@mail.com',
			'password'   => Hash::make('password'),
			'first_name' => 'Admin',
			'last_name'  => '02',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		]);

		User::create([
			'username'   => 'register1',
			'email'      => 'e@mail.com',
			'password'   => Hash::make('password'),
			'first_name' => 'Register',
			'last_name'  => '01',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		]);

		User::create([
			'username'   => 'register2',
			'email'      => 'e@mail.com',
			'password'   => Hash::make('password'),
			'first_name' => 'Register',
			'last_name'  => '02',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		]);

		User::create([
			'username'   => 'doctor1',
			'email'      => 'e@mail.com',
			'password'   => Hash::make('password'),
			'first_name' => 'Doctor',
			'last_name'  => '01',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		]);

		User::create([
			'username'   => 'doctor2',
			'email'      => 'e@mail.com',
			'password'   => Hash::make('password'),
			'first_name' => 'Doctor',
			'last_name'  => '02',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		]);

		User::create([
			'username'   => 'nurse1',
			'email'      => 'e@mail.com',
			'password'   => Hash::make('password'),
			'first_name' => 'Nurse',
			'last_name'  => '01',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		]);

		User::create([
			'username'   => 'nurse2',
			'email'      => 'e@mail.com',
			'password'   => Hash::make('password'),
			'first_name' => 'Nurse',
			'last_name'  => '02',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		]);

		User::create([
			'username'   => 'master1',
			'email'      => 'e@mail.com',
			'password'   => Hash::make('password'),
			'first_name' => 'Master',
			'last_name'  => '01',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		]);

		User::create([
			'username'   => 'master2',
			'email'      => 'e@mail.com',
			'password'   => Hash::make('password'),
			'first_name' => 'Master',
			'last_name'  => '02',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		]);


		User::create([
			'username'   => 'lab',
			'email'      => 'e@mail.com',
			'password'   => Hash::make('password'),
			'first_name' => 'Lab',
			'last_name'  => 'Lastname',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		]);

		User::create([
			'username'   => 'rad',
			'email'      => 'e@mail.com',
			'password'   => Hash::make('password'),
			'first_name' => 'X-Ray',
			'last_name'  => 'Lastname',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		]);

		User::create([
			'username'   => 'phama',
			'email'      => 'e@mail.com',
			'password'   => Hash::make('password'),
			'first_name' => 'Phama',
			'last_name'  => 'Lastname',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		]);

		User::create([
			'username'   => 'cashier',
			'email'      => 'e@mail.com',
			'password'   => Hash::make('password'),
			'first_name' => 'Cashier',
			'last_name'  => 'Lastname',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		]);
	}

}