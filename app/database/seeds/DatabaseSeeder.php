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
		$this->call('AllTableSeeder');
	}

}

class AllTableSeeder extends Seeder {
	public function run(){

		DB::table('users')->delete();
		DB::table('candidates')->delete();
		DB::table('employees')->delete();
		DB::table('corporate_titles')->delete();
		DB::table('depts')->delete();
		DB::table('positions')->delete();
		DB::table('locations')->delete();

//USER
		
		User::create(array(	'user_id' => 4,
							'username' => 'testMan',
							'email' => 'test_man@hotmail.com',
							'password' => '123321',
							'first' => 'Test',
							'last' => 'Man',
							'contact_number' => '012343210',
							'confirmation_code' => 'X8d7SCk0dW4M13dS',
							'confirmed' => true,
							'status' => 0,
							'facebook_uid' => '1234567890'));

		User::create(array(	'user_id' => 1,
							'username' => 'testMan2',
							'email' => 'test_man2@hotmail.com',
							'password' => '112233',
							'first' => 'Test2',
							'last' => 'Man2',
							'contact_number' => '024686420',
							'confirmation_code' => 'AABBCCDDeeffgghh',
							'confirmed' => false,
							'status' => 4,
							'facebook_uid' => '1122334455'));
		User::create(array(	'user_id' => 2,
							'username' => 'testMan3',
							'email' => 'test_man3@hotmail.com',
							'password' => '333333',
							'first' => 'Test3',
							'last' => 'Man3',
							'contact_number' => '033333333',
							'confirmation_code' => 'threethree',
							'confirmed' => false,
							'status' => 1,
							'facebook_uid' => '3333333333333'));
		User::create(array(	'user_id' => 3,
							'username' => 'testMan4',
							'email' => 'test_man4@hotmail.com',
							'password' => '444444',
							'first' => 'Test4',
							'last' => 'Man4',
							'contact_number' => '044444444',
							'confirmation_code' => 'fourfour',
							'confirmed' => true,
							'status' => 2,
							'facebook_uid' => '444444444444'));
		

//CANDIDATE
		Candidate::create(array('user_id' => 1
							));
		Candidate::create(array('user_id' => 3
							));
		Candidate::create(array('user_id' => 4
							));

//POSITION
		Position::create(array('position_id' => 1,
							'name' => 'position1'
							));
		Position::create(array('position_id' => 2,
							'name' => 'position2'
							));
		Position::create(array('position_id' => 3,
							'name' => 'position3'
							));
		Position::create(array('position_id' => 4,
							'name' => 'position4'
							));
		Position::create(array('position_id' => 5,
							'name' => 'position5'
							));

//DEPT
		Dept::create(array(	'dept_id' => 1,
							'name' => 'department1',
							'hrbp_user_id' => 1,
							'recruiter_user_id' => 1
							));
		Dept::create(array(	'dept_id' => 2,
							'name' => 'department2',
							'hrbp_user_id' => 4,
							'recruiter_user_id' => 3
							));
		Dept::create(array(	'dept_id' => 3,
							'name' => 'department3',
							'hrbp_user_id' => 1,
							'recruiter_user_id' => 3
							));
		Dept::create(array(	'dept_id' => 4,
							'name' => 'department4',
							'hrbp_user_id' => 1,
							'recruiter_user_id' => 2
							));
		Dept::create(array(	'dept_id' => 5,
							'name' => 'department4',
							'hrbp_user_id' => 1,
							'recruiter_user_id' => 2
							));

//CORPORRATE TITLE
		CorporateTitle::create(array(	'name' => 'officer1',
							'SLA' => 30
							));
		CorporateTitle::create(array(	'name' => 'officer2',
							'SLA' => 45
							));
		CorporateTitle::create(array(	'name' => 'officer3',
							'SLA' => 60
							));

//LOCATION
		Location::create(array(	'name' => 'location1'
							));
		Location::create(array(	'name' => 'location2'
							));
		Location::create(array(	'name' => 'location3'
							));
		Location::create(array(	'name' => 'location4'
							));
		Location::create(array(	'name' => 'location5'
							));
		Location::create(array(	'name' => 'location6'
							));
		Location::create(array(	'name' => 'location7'
							));
		Location::create(array(	'name' => 'location8'
							));

//EMPLOYEE
		Employee::create(array(	'user_id' => 4,
							'position_id' => 1,
							'dept_id' => 1,
							'employee_supervisor_user_id' => null,
							'is_manager' => false
							));
		Employee::create(array(	'user_id' => 1,
							'position_id' => 2,
							'dept_id' => 1,
							'employee_supervisor_user_id' => 4,
							'is_manager' => false
							));
		Employee::create(array(	'user_id' => 2,
							'position_id' => 3,
							'dept_id' => 3,
							'employee_supervisor_user_id' => 4,
							'is_manager' => false
							));
		Employee::create(array(	'user_id' => 3,
							'position_id' => 4,
							'dept_id' => 5,
							'employee_supervisor_user_id' => 2,
							'is_manager' => false
							));

/*
		::create(array(	'' => '',
							'' => '',
							'' => '',
							'' => '',
							'' => '',
							'' => '',
							'' => '',
							'' => '',));
*/
	}
}