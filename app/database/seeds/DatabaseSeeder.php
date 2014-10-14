<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$user_accounts = 

		DB::table('users')->insert([
			'username'   => 'admin1',
			'email'      => 'e@mail.com',
			'password'   => Hash::make('password'),
			'first_name' => 'Admin',
			'last_name'  => '01',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		]);

		DB::table('users')->insert([
			'username'   => 'admin2',
			'email'      => 'e@mail.com',
			'password'   => Hash::make('password'),
			'first_name' => 'Admin',
			'last_name'  => '02',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		]);

		DB::table('users')->insert([
			'username'   => 'register1',
			'email'      => 'e@mail.com',
			'password'   => Hash::make('password'),
			'first_name' => 'Register',
			'last_name'  => '01',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		]);

		DB::table('users')->insert([
			'username'   => 'register2',
			'email'      => 'e@mail.com',
			'password'   => Hash::make('password'),
			'first_name' => 'Register',
			'last_name'  => '02',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		]);

		DB::table('users')->insert([
			'username'   => 'doctor1',
			'email'      => 'e@mail.com',
			'password'   => Hash::make('password'),
			'first_name' => 'Doctor',
			'last_name'  => '01',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		]);

		DB::table('users')->insert([
			'username'   => 'doctor2',
			'email'      => 'e@mail.com',
			'password'   => Hash::make('password'),
			'first_name' => 'Doctor',
			'last_name'  => '02',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		]);

		DB::table('users')->insert([
			'username'   => 'nurse1',
			'email'      => 'e@mail.com',
			'password'   => Hash::make('password'),
			'first_name' => 'Nurse',
			'last_name'  => '01',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		]);

		DB::table('users')->insert([
			'username'   => 'nurse2',
			'email'      => 'e@mail.com',
			'password'   => Hash::make('password'),
			'first_name' => 'Nurse',
			'last_name'  => '02',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		]);

		DB::table('users')->insert([
			'username'   => 'master1',
			'email'      => 'e@mail.com',
			'password'   => Hash::make('password'),
			'first_name' => 'Master',
			'last_name'  => '01',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		]);

		DB::table('users')->insert([
			'username'   => 'master2',
			'email'      => 'e@mail.com',
			'password'   => Hash::make('password'),
			'first_name' => 'Master',
			'last_name'  => '02',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		]);


		DB::table('users')->insert([
			'username'   => 'lab',
			'email'      => 'e@mail.com',
			'password'   => Hash::make('password'),
			'first_name' => 'Lab',
			'last_name'  => 'Lastname',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		]);

		DB::table('users')->insert([
			'username'   => 'rad',
			'email'      => 'e@mail.com',
			'password'   => Hash::make('password'),
			'first_name' => 'X-Ray',
			'last_name'  => 'Lastname',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		]);

		DB::table('users')->insert([
			'username'   => 'phama',
			'email'      => 'e@mail.com',
			'password'   => Hash::make('password'),
			'first_name' => 'Phama',
			'last_name'  => 'Lastname',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		]);
		
		DB::table('users')->insert([
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
