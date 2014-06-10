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
		$this->call('UsersTableSeeder');
        $this->call('RolesTableSeeder');
        $this->call('PermissionsTableSeeder');
		$this->call('AllTableSeeder');
	}

}

class AllTableSeeder extends Seeder {
	public function run(){
		DB::connection()->disableQueryLog();
		DB::table('candidates')->delete();
		DB::table('positions')->delete();
		DB::table('depts')->delete();
		DB::table('corporate_title_groups')->delete();
		DB::table('corporate_titles')->delete();
		DB::table('locations')->delete();
		DB::table('employees')->delete();
		DB::table('skill_categories')->delete();
		DB::table('skills')->delete();
		DB::table('educations')->delete();
		DB::table('requisition_current_statuses')->delete();
		DB::table('application_current_statuses')->delete();
		DB::table('SLA_requisitions')->delete();
		DB::table('SLA_candidates')->delete();
		DB::table('requisitions')->delete();
		DB::table('recruitment_objective_templates')->delete();
		DB::table('recruitment_types')->delete();


//CANDIDATE
		$user = User::where('username','=','candidate1')->first();
		$candidate = new candidate;
        $candidate->user_id = $user->user_id;
        $candidate->save();

        $user = User::where('username','=','candidate2')->first();
		$candidate = new candidate;
        $candidate->user_id = $user->user_id;
        $candidate->save();

        $user = User::where('username','=','candidate3')->first();
		$candidate = new candidate;
        $candidate->user_id = $user->user_id;
        $candidate->save();

        $user = User::where('username','=','candidate4')->first();
		$candidate = new candidate;
        $candidate->user_id = $user->user_id;
        $candidate->save();

//POSITION
			Position::create(array('position_id' => 1,
			'group' => 'President',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'President',
			'total' => 1
			));
			Position::create(array('position_id' => 2,
			'group' => 'President',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Secretary to President',
			'total' => 2
			));
			Position::create(array('position_id' => 3,
			'group' => 'Audit and Compliance Group',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Chief Audit and Compliance Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 4,
			'group' => 'Audit and Compliance Group',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Secretary to Chief Audit and Compliance Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 5,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 1',
			'organization' => 'No organization',
			'job_title' => 'Advisor',
			'total' => 1
			));
			Position::create(array('position_id' => 6,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 1',
			'organization' => 'No organization',
			'job_title' => 'Division Head, Audit Division 1',
			'total' => 1
			));
			Position::create(array('position_id' => 7,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 1',
			'organization' => 'No organization',
			'job_title' => 'Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 8,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 1',
			'organization' => 'Audit Development and Subsidiaries',
			'job_title' => 'Auditor',
			'total' => 3
			));
			Position::create(array('position_id' => 9,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 1',
			'organization' => 'Audit Development and Subsidiaries',
			'job_title' => 'Manager, Audit Development and Subsidiaries',
			'total' => 1
			));
			Position::create(array('position_id' => 10,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 1',
			'organization' => 'Audit Development and Subsidiaries',
			'job_title' => 'Team Manager, Audit Development and Subsidiaries',
			'total' => 2
			));
			Position::create(array('position_id' => 11,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 1',
			'organization' => 'Branch Audit',
			'job_title' => 'Auditor',
			'total' => 23
			));
			Position::create(array('position_id' => 12,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 1',
			'organization' => 'Branch Audit',
			'job_title' => 'Branch Audit Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 13,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 1',
			'organization' => 'Branch Audit',
			'job_title' => 'Senior Auditor',
			'total' => 4
			));
			Position::create(array('position_id' => 14,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 1',
			'organization' => 'Branch Audit',
			'job_title' => 'Special Auditor',
			'total' => 6
			));
			Position::create(array('position_id' => 15,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 1',
			'organization' => 'Branch Audit',
			'job_title' => 'Spot Check Audit Team Manager',
			'total' => 2
			));
			Position::create(array('position_id' => 16,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 1',
			'organization' => 'Branch Audit',
			'job_title' => 'Team Manager, Branch Audit',
			'total' => 6
			));
			Position::create(array('position_id' => 17,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 1',
			'organization' => 'Follow up and Support Audit',
			'job_title' => 'Follow up Support Officer',
			'total' => 12
			));
			Position::create(array('position_id' => 18,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 1',
			'organization' => 'Follow up and Support Audit',
			'job_title' => 'Manager - Follow up and Audit Support',
			'total' => 1
			));
			Position::create(array('position_id' => 19,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 1',
			'organization' => 'Information Technology Audit',
			'job_title' => 'Auditor',
			'total' => 14
			));
			Position::create(array('position_id' => 20,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 1',
			'organization' => 'Information Technology Audit',
			'job_title' => 'Manager, Information Technology Audit',
			'total' => 1
			));
			Position::create(array('position_id' => 21,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 1',
			'organization' => 'Information Technology Audit',
			'job_title' => 'Senior Auditor',
			'total' => 1
			));
			Position::create(array('position_id' => 22,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 1',
			'organization' => 'Information Technology Audit',
			'job_title' => 'Team Manager, Information Technology Audit',
			'total' => 4
			));
			Position::create(array('position_id' => 23,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 1',
			'organization' => 'Non - Credit Business Audit',
			'job_title' => 'Auditor',
			'total' => 10
			));
			Position::create(array('position_id' => 24,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 1',
			'organization' => 'Non - Credit Business Audit',
			'job_title' => 'Manager, Non-Credit Business Audit',
			'total' => 1
			));
			Position::create(array('position_id' => 25,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 1',
			'organization' => 'Non - Credit Business Audit',
			'job_title' => 'Senior Auditor',
			'total' => 1
			));
			Position::create(array('position_id' => 26,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 1',
			'organization' => 'Non - Credit Business Audit',
			'job_title' => 'Team Manager, Non - Credit Business Audit',
			'total' => 2
			));
			Position::create(array('position_id' => 27,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 1',
			'organization' => 'Risk and Financial Product Audit',
			'job_title' => 'Auditor',
			'total' => 12
			));
			Position::create(array('position_id' => 28,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 1',
			'organization' => 'Risk and Financial Product Audit',
			'job_title' => 'Manager, Risk and Financial Products Audit',
			'total' => 1
			));
			Position::create(array('position_id' => 29,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 1',
			'organization' => 'Risk and Financial Product Audit',
			'job_title' => 'Team Manager, Risk and Financial Products Audit',
			'total' => 3
			));
			Position::create(array('position_id' => 30,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 2',
			'organization' => 'No organization',
			'job_title' => 'Division Head, Audit Division 2',
			'total' => 1
			));
			Position::create(array('position_id' => 31,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 2',
			'organization' => 'Corporate and Litigation Audit',
			'job_title' => 'Auditor',
			'total' => 8
			));
			Position::create(array('position_id' => 32,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 2',
			'organization' => 'Corporate and Litigation Audit',
			'job_title' => 'Manager, Corporate and Litigation Audit',
			'total' => 1
			));
			Position::create(array('position_id' => 33,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 2',
			'organization' => 'Corporate and Litigation Audit',
			'job_title' => 'Senior Auditor',
			'total' => 1
			));
			Position::create(array('position_id' => 34,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 2',
			'organization' => 'Corporate and Litigation Audit',
			'job_title' => 'Team Manager, Corporate and Litigation Audit',
			'total' => 2
			));
			Position::create(array('position_id' => 35,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 2',
			'organization' => 'Credit Analysis and Retail Credit Audit',
			'job_title' => 'Auditor',
			'total' => 11
			));
			Position::create(array('position_id' => 36,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 2',
			'organization' => 'Credit Analysis and Retail Credit Audit',
			'job_title' => 'Manager, Credit Analysis and Retail Credit Audit',
			'total' => 1
			));
			Position::create(array('position_id' => 37,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 2',
			'organization' => 'Credit Analysis and Retail Credit Audit',
			'job_title' => 'Senior Auditor',
			'total' => 1
			));
			Position::create(array('position_id' => 38,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 2',
			'organization' => 'Credit Analysis and Retail Credit Audit',
			'job_title' => 'Team Manager, Credit Analysis and Retail Credit Audit',
			'total' => 1
			));
			Position::create(array('position_id' => 39,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 2',
			'organization' => 'Credit Review',
			'job_title' => 'Credit Review Officer',
			'total' => 22
			));
			Position::create(array('position_id' => 40,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 2',
			'organization' => 'Credit Review',
			'job_title' => 'Manager, Credit Review',
			'total' => 1
			));
			Position::create(array('position_id' => 41,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 2',
			'organization' => 'Credit Review',
			'job_title' => 'Senior Auditor',
			'total' => 1
			));
			Position::create(array('position_id' => 42,
			'group' => 'Audit and Compliance Group',
			'division' => 'Audit Division 2',
			'organization' => 'Credit Review',
			'job_title' => 'Team Manager, Credit Review',
			'total' => 5
			));
			Position::create(array('position_id' => 43,
			'group' => 'Audit and Compliance Group',
			'division' => 'Compliance & Operational Control Division',
			'organization' => 'No organization',
			'job_title' => 'EVP, Compliance & Operational Control Division',
			'total' => 1
			));
			Position::create(array('position_id' => 44,
			'group' => 'Audit and Compliance Group',
			'division' => 'Compliance & Operational Control Division',
			'organization' => 'No organization',
			'job_title' => 'Secretary to EVP, Compliance & Operational Control Division',
			'total' => 1
			));
			Position::create(array('position_id' => 45,
			'group' => 'Audit and Compliance Group',
			'division' => 'Compliance & Operational Control Division',
			'organization' => 'Anti Money Laundering',
			'job_title' => 'Compliance & Operational Control Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 46,
			'group' => 'Audit and Compliance Group',
			'division' => 'Compliance & Operational Control Division',
			'organization' => 'Anti Money Laundering',
			'job_title' => 'Compliance & Operational Control Officer',
			'total' => 8
			));
			Position::create(array('position_id' => 47,
			'group' => 'Audit and Compliance Group',
			'division' => 'Compliance & Operational Control Division',
			'organization' => 'Anti Money Laundering',
			'job_title' => 'Manager, Anti Money Laundering',
			'total' => 1
			));
			Position::create(array('position_id' => 48,
			'group' => 'Audit and Compliance Group',
			'division' => 'Compliance & Operational Control Division',
			'organization' => 'Anti Money Laundering',
			'job_title' => 'Senior Compliance & Operational Control Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 49,
			'group' => 'Audit and Compliance Group',
			'division' => 'Compliance & Operational Control Division',
			'organization' => 'Internal & Foreign Regulations and Compliance Monitoring',
			'job_title' => 'Compliance & Operational Control Manager',
			'total' => 4
			));
			Position::create(array('position_id' => 50,
			'group' => 'Audit and Compliance Group',
			'division' => 'Compliance & Operational Control Division',
			'organization' => 'Internal & Foreign Regulations and Compliance Monitoring',
			'job_title' => 'Compliance & Operational Control Officer',
			'total' => 10
			));
			Position::create(array('position_id' => 51,
			'group' => 'Audit and Compliance Group',
			'division' => 'Compliance & Operational Control Division',
			'organization' => 'Internal & Foreign Regulations and Compliance Monitoring',
			'job_title' => 'Mgr., Internal & Foreign Regulations & Compliance Monitoring',
			'total' => 1
			));
			Position::create(array('position_id' => 52,
			'group' => 'Audit and Compliance Group',
			'division' => 'Compliance & Operational Control Division',
			'organization' => 'Internal & Foreign Regulations and Compliance Monitoring',
			'job_title' => 'Senior Compliance & Operational Control Officer',
			'total' => 8
			));
			Position::create(array('position_id' => 53,
			'group' => 'Audit and Compliance Group',
			'division' => 'Compliance & Operational Control Division',
			'organization' => 'Retail Banking Regulations',
			'job_title' => 'Compliance & Operational Control Manager',
			'total' => 2
			));
			Position::create(array('position_id' => 54,
			'group' => 'Audit and Compliance Group',
			'division' => 'Compliance & Operational Control Division',
			'organization' => 'Retail Banking Regulations',
			'job_title' => 'Compliance & Operational Control Officer',
			'total' => 13
			));
			Position::create(array('position_id' => 55,
			'group' => 'Audit and Compliance Group',
			'division' => 'Compliance & Operational Control Division',
			'organization' => 'Retail Banking Regulations',
			'job_title' => 'Manager, Retail Banking Regulations',
			'total' => 1
			));
			Position::create(array('position_id' => 56,
			'group' => 'Audit and Compliance Group',
			'division' => 'Compliance & Operational Control Division',
			'organization' => 'Retail Banking Regulations',
			'job_title' => 'Senior Compliance & Operational Control Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 57,
			'group' => 'Audit and Compliance Group',
			'division' => 'Compliance & Operational Control Division',
			'organization' => 'Securities Regulations',
			'job_title' => 'Compliance & Operational Control Manager',
			'total' => 3
			));
			Position::create(array('position_id' => 58,
			'group' => 'Audit and Compliance Group',
			'division' => 'Compliance & Operational Control Division',
			'organization' => 'Securities Regulations',
			'job_title' => 'Compliance & Operational Control Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 59,
			'group' => 'Audit and Compliance Group',
			'division' => 'Compliance & Operational Control Division',
			'organization' => 'Securities Regulations',
			'job_title' => 'Manager, Securities Regulations',
			'total' => 1
			));
			Position::create(array('position_id' => 60,
			'group' => 'Audit and Compliance Group',
			'division' => 'Compliance & Operational Control Division',
			'organization' => 'Securities Regulations',
			'job_title' => 'Officer, Compliance',
			'total' => 2
			));
			Position::create(array('position_id' => 61,
			'group' => 'Audit and Compliance Group',
			'division' => 'Compliance & Operational Control Division',
			'organization' => 'Wholesale Banking Regulations',
			'job_title' => 'Compliance & Operational Control Manager',
			'total' => 5
			));
			Position::create(array('position_id' => 62,
			'group' => 'Audit and Compliance Group',
			'division' => 'Compliance & Operational Control Division',
			'organization' => 'Wholesale Banking Regulations',
			'job_title' => 'Compliance & Operational Control Officer',
			'total' => 7
			));
			Position::create(array('position_id' => 63,
			'group' => 'Audit and Compliance Group',
			'division' => 'Compliance & Operational Control Division',
			'organization' => 'Wholesale Banking Regulations',
			'job_title' => 'Manager, Wholesale Banking Regulations',
			'total' => 1
			));
			Position::create(array('position_id' => 64,
			'group' => 'Audit and Compliance Group',
			'division' => 'Compliance & Operational Control Division',
			'organization' => 'Wholesale Banking Regulations',
			'job_title' => 'Senior Compliance & Operational Control Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 65,
			'group' => 'Business Banking Group',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Advisor',
			'total' => 1
			));
			Position::create(array('position_id' => 66,
			'group' => 'Business Banking Group',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'BBG Trainee',
			'total' => 14
			));
			Position::create(array('position_id' => 67,
			'group' => 'Business Banking Group',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Personal Assistant',
			'total' => 1
			));
			Position::create(array('position_id' => 68,
			'group' => 'Business Banking Group',
			'division' => 'BBG Strategy & Development',
			'organization' => 'No organization',
			'job_title' => 'Division Head, RBG Strategy and BBG Strategy & Development',
			'total' => 1
			));
			Position::create(array('position_id' => 69,
			'group' => 'Business Banking Group',
			'division' => 'BBG Strategy & Development',
			'organization' => 'No organization',
			'job_title' => 'Manager, BBG Business Alliance Relationship',
			'total' => 1
			));
			Position::create(array('position_id' => 70,
			'group' => 'Business Banking Group',
			'division' => 'BBG Strategy & Development',
			'organization' => 'No organization',
			'job_title' => 'Secretary to Division Head, RBG Strategy&BBG Strategy&Dev',
			'total' => 1
			));
			Position::create(array('position_id' => 71,
			'group' => 'Business Banking Group',
			'division' => 'BBG Strategy & Development',
			'organization' => 'BBG Business Supports',
			'job_title' => 'Assistant Manager, YEP & IEP 1',
			'total' => 1
			));
			Position::create(array('position_id' => 72,
			'group' => 'Business Banking Group',
			'division' => 'BBG Strategy & Development',
			'organization' => 'BBG Business Supports',
			'job_title' => 'Assistant Manager, YEP & IEP 2',
			'total' => 1
			));
			Position::create(array('position_id' => 73,
			'group' => 'Business Banking Group',
			'division' => 'BBG Strategy & Development',
			'organization' => 'BBG Business Supports',
			'job_title' => 'Internal Communication & Supports Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 74,
			'group' => 'Business Banking Group',
			'division' => 'BBG Strategy & Development',
			'organization' => 'BBG Business Supports',
			'job_title' => 'Team Manager, Internal Communication & Supports',
			'total' => 1
			));
			Position::create(array('position_id' => 75,
			'group' => 'Business Banking Group',
			'division' => 'BBG Strategy & Development',
			'organization' => 'BBG Business Supports',
			'job_title' => 'YEP & IEP Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 76,
			'group' => 'Business Banking Group',
			'division' => 'BBG Strategy & Development',
			'organization' => 'BBG Compliance and ORM',
			'job_title' => 'BBG Compliance and ORM Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 77,
			'group' => 'Business Banking Group',
			'division' => 'BBG Strategy & Development',
			'organization' => 'BBG Compliance and ORM',
			'job_title' => 'Manager, BBG Compliance and ORM',
			'total' => 1
			));
			Position::create(array('position_id' => 78,
			'group' => 'Business Banking Group',
			'division' => 'BBG Strategy & Development',
			'organization' => 'BBG Strategic Planning',
			'job_title' => 'Manager, BBG Strategic Planning',
			'total' => 1
			));
			Position::create(array('position_id' => 79,
			'group' => 'Business Banking Group',
			'division' => 'BBG Strategy & Development',
			'organization' => 'BBG Strategic Planning',
			'job_title' => 'Manager, Business Alliance Development',
			'total' => 1
			));
			Position::create(array('position_id' => 80,
			'group' => 'Business Banking Group',
			'division' => 'BBG Strategy & Development',
			'organization' => 'BBG Strategic Planning',
			'job_title' => 'Manager, Planning & PMO',
			'total' => 1
			));
			Position::create(array('position_id' => 81,
			'group' => 'Business Banking Group',
			'division' => 'BBG Strategy & Development',
			'organization' => 'BBG Strategic Planning',
			'job_title' => 'Manager, Sale Management (Insurance)',
			'total' => 1
			));
			Position::create(array('position_id' => 82,
			'group' => 'Business Banking Group',
			'division' => 'BBG Strategy & Development',
			'organization' => 'BBG Strategic Planning',
			'job_title' => 'Planning & PMO Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 83,
			'group' => 'Business Banking Group',
			'division' => 'BBG Strategy & Development',
			'organization' => 'BBG Strategic Planning',
			'job_title' => 'Sale Management (Insurance) Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 84,
			'group' => 'Business Banking Group',
			'division' => 'BBG Strategy & Development',
			'organization' => 'BBG Strategic Planning',
			'job_title' => 'Sales Performance Management Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 85,
			'group' => 'Business Banking Group',
			'division' => 'BBG Strategy & Development',
			'organization' => 'BBG Strategic Planning',
			'job_title' => 'Team Manager, Business Alliance Development',
			'total' => 1
			));
			Position::create(array('position_id' => 86,
			'group' => 'Business Banking Group',
			'division' => 'BBG Strategy & Development',
			'organization' => 'BBG Strategic Planning',
			'job_title' => 'Team Manager, Sale Management (Insurance)',
			'total' => 1
			));
			Position::create(array('position_id' => 87,
			'group' => 'Business Banking Group',
			'division' => 'BBG Strategy & Development',
			'organization' => 'Business Process Management',
			'job_title' => 'Assistant Manager, Lower MB & SB Business Process Management',
			'total' => 1
			));
			Position::create(array('position_id' => 88,
			'group' => 'Business Banking Group',
			'division' => 'BBG Strategy & Development',
			'organization' => 'Business Process Management',
			'job_title' => 'Assistant Manager, MB Business Process Management',
			'total' => 1
			));
			Position::create(array('position_id' => 89,
			'group' => 'Business Banking Group',
			'division' => 'BBG Strategy & Development',
			'organization' => 'Business Process Management',
			'job_title' => 'Lower MB & SB Business Process Management Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 90,
			'group' => 'Business Banking Group',
			'division' => 'BBG Strategy & Development',
			'organization' => 'Business Process Management',
			'job_title' => 'Manager, Business Process Management',
			'total' => 1
			));
			Position::create(array('position_id' => 91,
			'group' => 'Business Banking Group',
			'division' => 'BBG Strategy & Development',
			'organization' => 'Business Process Management',
			'job_title' => 'MB Business Process Management Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 92,
			'group' => 'Business Banking Group',
			'division' => 'BBG Strategy & Development',
			'organization' => 'Lower MB and SB Segment Management',
			'job_title' => 'Lower MB & SB Segment Solution & Go-To-Market Strategy',
			'total' => 2
			));
			Position::create(array('position_id' => 93,
			'group' => 'Business Banking Group',
			'division' => 'BBG Strategy & Development',
			'organization' => 'Lower MB and SB Segment Management',
			'job_title' => 'Manager, Lower MB & SB Segment Management',
			'total' => 1
			));
			Position::create(array('position_id' => 94,
			'group' => 'Business Banking Group',
			'division' => 'BBG Strategy & Development',
			'organization' => 'Lower MB and SB Segment Management',
			'job_title' => 'Manager, Lower MB & SB Segment Solution & Go-To-Mkt Strategy',
			'total' => 3
			));
			Position::create(array('position_id' => 95,
			'group' => 'Business Banking Group',
			'division' => 'BBG Strategy & Development',
			'organization' => 'Lower MB and SB Segment Management',
			'job_title' => 'Manager, Lower MB & SB Segment Strategy & Portfolio Mgmt',
			'total' => 2
			));
			Position::create(array('position_id' => 96,
			'group' => 'Business Banking Group',
			'division' => 'BBG Strategy & Development',
			'organization' => 'MB Segment Management',
			'job_title' => 'Manager, MB Segment Management',
			'total' => 1
			));
			Position::create(array('position_id' => 97,
			'group' => 'Business Banking Group',
			'division' => 'BBG Strategy & Development',
			'organization' => 'MB Segment Management',
			'job_title' => 'Manager, MB Segment Solution & Go To Market Strategy',
			'total' => 2
			));
			Position::create(array('position_id' => 98,
			'group' => 'Business Banking Group',
			'division' => 'BBG Strategy & Development',
			'organization' => 'MB Segment Management',
			'job_title' => 'Manager, MB Segment Strategy & Portfolio Management',
			'total' => 2
			));
			Position::create(array('position_id' => 99,
			'group' => 'Business Banking Group',
			'division' => 'BBG Strategy & Development',
			'organization' => 'MB Segment Management',
			'job_title' => 'MB Segment Solution & Go To Market Strategy Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 100,
			'group' => 'Business Banking Group',
			'division' => 'BBG Strategy & Development',
			'organization' => 'MB Segment Management',
			'job_title' => 'MB Segment Strategy & Portfolio Management Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 101,
			'group' => 'Business Banking Group',
			'division' => 'Deputy Business Banking',
			'organization' => 'No organization',
			'job_title' => 'Secretary to FEVP, Deputy Group Head, Business Banking',
			'total' => 1
			));
			Position::create(array('position_id' => 102,
			'group' => 'Business Banking Group',
			'division' => 'Deputy Business Banking',
			'organization' => 'Medium Business',
			'job_title' => 'Account Analyst',
			'total' => 236
			));
			Position::create(array('position_id' => 103,
			'group' => 'Business Banking Group',
			'division' => 'Deputy Business Banking',
			'organization' => 'Medium Business',
			'job_title' => 'BRC Manager',
			'total' => 38
			));
			Position::create(array('position_id' => 104,
			'group' => 'Business Banking Group',
			'division' => 'Deputy Business Banking',
			'organization' => 'Medium Business',
			'job_title' => 'Business Coordinator',
			'total' => 3
			));
			Position::create(array('position_id' => 105,
			'group' => 'Business Banking Group',
			'division' => 'Deputy Business Banking',
			'organization' => 'Medium Business',
			'job_title' => 'Business Development Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 106,
			'group' => 'Business Banking Group',
			'division' => 'Deputy Business Banking',
			'organization' => 'Medium Business',
			'job_title' => 'Manager, Business Development',
			'total' => 21
			));
			Position::create(array('position_id' => 107,
			'group' => 'Business Banking Group',
			'division' => 'Deputy Business Banking',
			'organization' => 'Medium Business',
			'job_title' => 'Regional Manager',
			'total' => 4
			));
			Position::create(array('position_id' => 108,
			'group' => 'Business Banking Group',
			'division' => 'Deputy Business Banking',
			'organization' => 'Medium Business',
			'job_title' => 'Relationship Manager',
			'total' => 223
			));
			Position::create(array('position_id' => 109,
			'group' => 'Business Banking Group',
			'division' => 'Deputy Business Banking',
			'organization' => 'Medium Business',
			'job_title' => 'Support Officer',
			'total' => 12
			));
			Position::create(array('position_id' => 110,
			'group' => 'Business Banking Group',
			'division' => 'Deputy Business Banking',
			'organization' => 'Small Business',
			'job_title' => 'Business Analyst Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 111,
			'group' => 'Business Banking Group',
			'division' => 'Deputy Business Banking',
			'organization' => 'Small Business',
			'job_title' => 'Business Banker',
			'total' => 132
			));
			Position::create(array('position_id' => 112,
			'group' => 'Business Banking Group',
			'division' => 'Deputy Business Banking',
			'organization' => 'Small Business',
			'job_title' => 'Business Center Manager',
			'total' => 38
			));
			Position::create(array('position_id' => 113,
			'group' => 'Business Banking Group',
			'division' => 'Deputy Business Banking',
			'organization' => 'Small Business',
			'job_title' => 'Business Coordinator',
			'total' => 3
			));
			Position::create(array('position_id' => 114,
			'group' => 'Business Banking Group',
			'division' => 'Deputy Business Banking',
			'organization' => 'Small Business',
			'job_title' => 'Business Development Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 115,
			'group' => 'Business Banking Group',
			'division' => 'Deputy Business Banking',
			'organization' => 'Small Business',
			'job_title' => 'Business Manager',
			'total' => 162
			));
			Position::create(array('position_id' => 116,
			'group' => 'Business Banking Group',
			'division' => 'Deputy Business Banking',
			'organization' => 'Small Business',
			'job_title' => 'Head of Small Business',
			'total' => 1
			));
			Position::create(array('position_id' => 117,
			'group' => 'Business Banking Group',
			'division' => 'Deputy Business Banking',
			'organization' => 'Small Business',
			'job_title' => 'Manager, Business Development',
			'total' => 15
			));
			Position::create(array('position_id' => 118,
			'group' => 'Business Banking Group',
			'division' => 'Deputy Business Banking',
			'organization' => 'Small Business',
			'job_title' => 'Manager, SB Marketing',
			'total' => 3
			));
			Position::create(array('position_id' => 119,
			'group' => 'Business Banking Group',
			'division' => 'Deputy Business Banking',
			'organization' => 'Small Business',
			'job_title' => 'Regional Manager',
			'total' => 4
			));
			Position::create(array('position_id' => 120,
			'group' => 'Business Banking Group',
			'division' => 'Deputy Business Banking',
			'organization' => 'Small Business',
			'job_title' => 'Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 121,
			'group' => 'Business Banking Group',
			'division' => 'Deputy Business Banking',
			'organization' => 'Small Business',
			'job_title' => 'Support Officer',
			'total' => 10
			));
			Position::create(array('position_id' => 122,
			'group' => 'Business Banking Group',
			'division' => 'Deputy Business Banking',
			'organization' => 'Small Business',
			'job_title' => 'Team Manager, SB Marketing',
			'total' => 1
			));
			Position::create(array('position_id' => 123,
			'group' => 'Business Banking Group',
			'division' => 'Deputy Business Banking',
			'organization' => 'Small Business Credit Underwriting,BBG',
			'job_title' => 'Manager, Credit Underwriting',
			'total' => 1
			));
			Position::create(array('position_id' => 124,
			'group' => 'Business Banking Group',
			'division' => 'WIN Application Service Team',
			'organization' => 'No organization',
			'job_title' => 'Deal Builder Officer',
			'total' => 7
			));
			Position::create(array('position_id' => 125,
			'group' => 'Business Banking Group',
			'division' => 'WIN Application Service Team',
			'organization' => 'No organization',
			'job_title' => 'Team Manager, WIN Application Service',
			'total' => 1
			));
			Position::create(array('position_id' => 126,
			'group' => 'Business Banking Group',
			'division' => 'WIN Application Service Team',
			'organization' => 'No organization',
			'job_title' => 'WIN Application Service Officer',
			'total' => 17
			));
			Position::create(array('position_id' => 127,
			'group' => 'Change Program',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Secretary to SEVP, Change Program',
			'total' => 1
			));
			Position::create(array('position_id' => 128,
			'group' => 'Change Program',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'SEVP, Chief Financial Officer, Finance Group&Change Program',
			'total' => 1
			));
			Position::create(array('position_id' => 129,
			'group' => 'Change Program',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Strategy Coordination & Special Projects',
			'total' => 1
			));
			Position::create(array('position_id' => 130,
			'group' => 'Change Program',
			'division' => 'ATM Switch Replacement Project',
			'organization' => 'No organization',
			'job_title' => 'IT Development Lead',
			'total' => 1
			));
			Position::create(array('position_id' => 131,
			'group' => 'Change Program',
			'division' => 'ATM Switch Replacement Project',
			'organization' => 'No organization',
			'job_title' => 'IT Tandem System Lead',
			'total' => 1
			));
			Position::create(array('position_id' => 132,
			'group' => 'Change Program',
			'division' => 'ATM Switch Replacement Project',
			'organization' => 'No organization',
			'job_title' => 'Project Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 133,
			'group' => 'Change Program',
			'division' => 'ATM Switch Replacement Project',
			'organization' => 'No organization',
			'job_title' => 'Project Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 134,
			'group' => 'Change Program',
			'division' => 'Change Program Management Office',
			'organization' => 'No organization',
			'job_title' => 'Manager, Change Program Management Office',
			'total' => 1
			));
			Position::create(array('position_id' => 135,
			'group' => 'Change Program',
			'division' => 'Change Program Management Office',
			'organization' => 'No organization',
			'job_title' => 'Project Support Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 136,
			'group' => 'Change Program',
			'division' => 'Change Program Management Office',
			'organization' => 'Change Program Management Office - Project Management',
			'job_title' => 'Project Manager',
			'total' => 2
			));
			Position::create(array('position_id' => 137,
			'group' => 'Change Program',
			'division' => 'Change Program Management Office',
			'organization' => 'Change Program Management Office - Project Management',
			'job_title' => 'Project Support Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 138,
			'group' => 'Change Program',
			'division' => 'Change Program Management Office',
			'organization' => 'Change Program Management Office - Secretariat',
			'job_title' => 'Change Program Support Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 139,
			'group' => 'Change Program',
			'division' => 'Change Program Management Office',
			'organization' => 'Change Program Management Office - Secretariat',
			'job_title' => 'Manager, Change Program Communication',
			'total' => 1
			));
			Position::create(array('position_id' => 140,
			'group' => 'Change Program',
			'division' => 'Change Program Management Office',
			'organization' => 'Change Program Management Office - Secretariat',
			'job_title' => 'Manager, Change Program Support',
			'total' => 1
			));
			Position::create(array('position_id' => 141,
			'group' => 'Change Program',
			'division' => 'Change Program Management Office',
			'organization' => 'Change Program Management Office - Secretariat',
			'job_title' => 'Project Support Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 142,
			'group' => 'Change Program',
			'division' => 'Change Program Management Office',
			'organization' => 'Change Program Management Office - Secretariat',
			'job_title' => 'Support Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 143,
			'group' => 'Change Program',
			'division' => 'Cheque Collection Project',
			'organization' => 'No organization',
			'job_title' => 'Project Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 144,
			'group' => 'Change Program',
			'division' => 'Collections Debt Management System Project',
			'organization' => 'No organization',
			'job_title' => 'Project Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 145,
			'group' => 'Change Program',
			'division' => 'Collections Debt Management System Project',
			'organization' => 'No organization',
			'job_title' => 'Project Officer',
			'total' => 15
			));
			Position::create(array('position_id' => 146,
			'group' => 'Change Program',
			'division' => 'Collections Debt Management System Project',
			'organization' => 'No organization',
			'job_title' => 'Project Team Manager - Business',
			'total' => 1
			));
			Position::create(array('position_id' => 147,
			'group' => 'Change Program',
			'division' => 'Corebank Deposit Customer Upgrade Project',
			'organization' => 'No organization',
			'job_title' => 'Consultant, Systematic Application for Core Bank upgrade',
			'total' => 2
			));
			Position::create(array('position_id' => 148,
			'group' => 'Change Program',
			'division' => 'Corebank Deposit Customer Upgrade Project',
			'organization' => 'No organization',
			'job_title' => 'Project Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 149,
			'group' => 'Change Program',
			'division' => 'Corebank Deposit Customer Upgrade Project',
			'organization' => 'No organization',
			'job_title' => 'Project Officer',
			'total' => 21
			));
			Position::create(array('position_id' => 150,
			'group' => 'Change Program',
			'division' => 'Corebank Deposit Customer Upgrade Project',
			'organization' => 'No organization',
			'job_title' => 'Relationship Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 151,
			'group' => 'Change Program',
			'division' => 'Corebank Upgrade Project',
			'organization' => 'No organization',
			'job_title' => 'ALS Application Lead',
			'total' => 1
			));
			Position::create(array('position_id' => 152,
			'group' => 'Change Program',
			'division' => 'Corebank Upgrade Project',
			'organization' => 'No organization',
			'job_title' => 'Project Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 153,
			'group' => 'Change Program',
			'division' => 'Corebank Upgrade Project',
			'organization' => 'No organization',
			'job_title' => 'Project Officer',
			'total' => 17
			));
			Position::create(array('position_id' => 154,
			'group' => 'Change Program',
			'division' => 'Foreign Account Tax Compliance Act Project',
			'organization' => 'No organization',
			'job_title' => 'Project Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 155,
			'group' => 'Change Program',
			'division' => 'Foreign Account Tax Compliance Act Project',
			'organization' => 'No organization',
			'job_title' => 'Project Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 156,
			'group' => 'Change Program',
			'division' => 'Governance Risk & Compliance Project',
			'organization' => 'No organization',
			'job_title' => 'Project Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 157,
			'group' => 'Change Program',
			'division' => 'Governance Risk & Compliance Project',
			'organization' => 'No organization',
			'job_title' => 'Project Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 158,
			'group' => 'Change Program',
			'division' => 'Intelligent Payment System Project',
			'organization' => 'No organization',
			'job_title' => 'IT Management Trainee',
			'total' => 2
			));
			Position::create(array('position_id' => 159,
			'group' => 'Change Program',
			'division' => 'Intelligent Payment System Project',
			'organization' => 'No organization',
			'job_title' => 'Project Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 160,
			'group' => 'Change Program',
			'division' => 'Intelligent Payment System Project',
			'organization' => 'No organization',
			'job_title' => 'Project Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 161,
			'group' => 'Change Program',
			'division' => 'IT and Change Program Procurement',
			'organization' => 'Contract Management',
			'job_title' => 'IT Contract Management Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 162,
			'group' => 'Change Program',
			'division' => 'IT and Change Program Procurement',
			'organization' => 'Contract Management',
			'job_title' => 'Manager, IT Contract Management',
			'total' => 1
			));
			Position::create(array('position_id' => 163,
			'group' => 'Change Program',
			'division' => 'IT and Change Program Procurement',
			'organization' => 'IT Procurement',
			'job_title' => 'IT Procurement Officer',
			'total' => 7
			));
			Position::create(array('position_id' => 164,
			'group' => 'Change Program',
			'division' => 'IT and Change Program Procurement',
			'organization' => 'IT Procurement',
			'job_title' => 'IT Procurement Specialist',
			'total' => 1
			));
			Position::create(array('position_id' => 165,
			'group' => 'Change Program',
			'division' => 'IT and Change Program Procurement',
			'organization' => 'IT Procurement',
			'job_title' => 'Team Manager, IT Procurement',
			'total' => 2
			));
			Position::create(array('position_id' => 166,
			'group' => 'Change Program',
			'division' => 'Know Your Customer/Customer Due Diligence Project',
			'organization' => 'No organization',
			'job_title' => 'Project Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 167,
			'group' => 'Change Program',
			'division' => 'Know Your Customer/Customer Due Diligence Project',
			'organization' => 'No organization',
			'job_title' => 'Project Manager (IT)',
			'total' => 1
			));
			Position::create(array('position_id' => 168,
			'group' => 'Change Program',
			'division' => 'Lending Approval and Decision System Project',
			'organization' => 'No organization',
			'job_title' => 'Project Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 169,
			'group' => 'Change Program',
			'division' => 'Lending Approval and Decision System Project',
			'organization' => 'No organization',
			'job_title' => 'Project Manager (IT)',
			'total' => 2
			));
			Position::create(array('position_id' => 170,
			'group' => 'Change Program',
			'division' => 'Lending Approval and Decision System Project',
			'organization' => 'No organization',
			'job_title' => 'Project Officer',
			'total' => 17
			));
			Position::create(array('position_id' => 171,
			'group' => 'Change Program',
			'division' => 'New Top Level Domain Project',
			'organization' => 'No organization',
			'job_title' => 'Project Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 172,
			'group' => 'Change Program',
			'division' => 'One Loyalty System Project',
			'organization' => 'No organization',
			'job_title' => 'Project Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 173,
			'group' => 'Change Program',
			'division' => 'One Loyalty System Project',
			'organization' => 'No organization',
			'job_title' => 'Project Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 174,
			'group' => 'Change Program',
			'division' => 'Quantitative Models and Enterprise Analytics',
			'organization' => 'No organization',
			'job_title' => 'Manager, Quantitative Models and Enterprise Analystics',
			'total' => 1
			));
			Position::create(array('position_id' => 175,
			'group' => 'Change Program',
			'division' => 'Quantitative Models and Enterprise Analytics',
			'organization' => 'No organization',
			'job_title' => 'Quantitative Analyst',
			'total' => 5
			));
			Position::create(array('position_id' => 176,
			'group' => 'Corporate Communications Division',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Division Head, Corporate Communications Division',
			'total' => 1
			));
			Position::create(array('position_id' => 177,
			'group' => 'Corporate Communications Division',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Secretary to Division Head, Corp. Communications Division',
			'total' => 1
			));
			Position::create(array('position_id' => 178,
			'group' => 'Corporate Communications Division',
			'division' => 'Corporate Branding and Communications',
			'organization' => 'No organization',
			'job_title' => 'Manager, Corporate Branding & Communications',
			'total' => 1
			));
			Position::create(array('position_id' => 179,
			'group' => 'Corporate Communications Division',
			'division' => 'Corporate Branding and Communications',
			'organization' => 'No organization',
			'job_title' => 'Public Relations Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 180,
			'group' => 'Corporate Communications Division',
			'division' => 'Corporate Branding and Communications',
			'organization' => 'Corporate Branding Management',
			'job_title' => 'Brand Communications Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 181,
			'group' => 'Corporate Communications Division',
			'division' => 'Corporate Branding and Communications',
			'organization' => 'Corporate Branding Management',
			'job_title' => 'Manager, Corporate Brand Planning',
			'total' => 1
			));
			Position::create(array('position_id' => 182,
			'group' => 'Corporate Communications Division',
			'division' => 'Corporate Branding and Communications',
			'organization' => 'Corporate Branding Management',
			'job_title' => 'Manager, Corporate Branding',
			'total' => 1
			));
			Position::create(array('position_id' => 183,
			'group' => 'Corporate Communications Division',
			'division' => 'Corporate Branding and Communications',
			'organization' => 'Electronic Media Management',
			'job_title' => 'Electronics Media Planner',
			'total' => 1
			));
			Position::create(array('position_id' => 184,
			'group' => 'Corporate Communications Division',
			'division' => 'Corporate Branding and Communications',
			'organization' => 'Electronic Media Management',
			'job_title' => 'Manager, Electronics Media Management',
			'total' => 1
			));
			Position::create(array('position_id' => 185,
			'group' => 'Corporate Communications Division',
			'division' => 'Corporate Branding and Communications',
			'organization' => 'Electronic Media Management',
			'job_title' => 'Manager, Multimedia',
			'total' => 1
			));
			Position::create(array('position_id' => 186,
			'group' => 'Corporate Communications Division',
			'division' => 'Corporate Branding and Communications',
			'organization' => 'Electronic Media Management',
			'job_title' => 'Manager, Online Media',
			'total' => 1
			));
			Position::create(array('position_id' => 187,
			'group' => 'Corporate Communications Division',
			'division' => 'Corporate Branding and Communications',
			'organization' => 'Electronic Media Management',
			'job_title' => 'Multimedia Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 188,
			'group' => 'Corporate Communications Division',
			'division' => 'Corporate Branding and Communications',
			'organization' => 'Electronic Media Management',
			'job_title' => 'Online Media Editor',
			'total' => 1
			));
			Position::create(array('position_id' => 189,
			'group' => 'Corporate Communications Division',
			'division' => 'Corporate Branding and Communications',
			'organization' => 'Electronic Media Management',
			'job_title' => 'Online Media Officer',
			'total' => 8
			));
			Position::create(array('position_id' => 190,
			'group' => 'Corporate Communications Division',
			'division' => 'Corporate Branding and Communications',
			'organization' => 'PR and Media Management',
			'job_title' => 'Manager, Media Relations',
			'total' => 1
			));
			Position::create(array('position_id' => 191,
			'group' => 'Corporate Communications Division',
			'division' => 'Corporate Branding and Communications',
			'organization' => 'PR and Media Management',
			'job_title' => 'Manager, Public Relations',
			'total' => 1
			));
			Position::create(array('position_id' => 192,
			'group' => 'Corporate Communications Division',
			'division' => 'Corporate Branding and Communications',
			'organization' => 'PR and Media Management',
			'job_title' => 'Media Relations - Special Project Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 193,
			'group' => 'Corporate Communications Division',
			'division' => 'Corporate Branding and Communications',
			'organization' => 'PR and Media Management',
			'job_title' => 'Media Relations Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 194,
			'group' => 'Corporate Communications Division',
			'division' => 'Corporate Branding and Communications',
			'organization' => 'PR and Media Management',
			'job_title' => 'Public Relations Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 195,
			'group' => 'Corporate Communications Division',
			'division' => 'Corporate Branding and Communications',
			'organization' => 'PR and Media Management',
			'job_title' => 'Specialist, Public Relations',
			'total' => 1
			));
			Position::create(array('position_id' => 196,
			'group' => 'Corporate Communications Division',
			'division' => 'Corporate Social Responsibilities',
			'organization' => 'No organization',
			'job_title' => 'Corporate Social Activities Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 197,
			'group' => 'Corporate Communications Division',
			'division' => 'Corporate Social Responsibilities',
			'organization' => 'No organization',
			'job_title' => 'Manager, Corporate Social Activities',
			'total' => 1
			));
			Position::create(array('position_id' => 198,
			'group' => 'Corporate Communications Division',
			'division' => 'Corporate Social Responsibilities',
			'organization' => 'No organization',
			'job_title' => 'Manager, Corporate Social Network Relation',
			'total' => 1
			));
			Position::create(array('position_id' => 199,
			'group' => 'Corporate Communications Division',
			'division' => 'Corporate Social Responsibilities',
			'organization' => 'No organization',
			'job_title' => 'Manager, Corporate Social Responsibilities',
			'total' => 1
			));
			Position::create(array('position_id' => 200,
			'group' => 'Corporate Communications Division',
			'division' => 'Corporate Social Responsibilities',
			'organization' => 'No organization',
			'job_title' => 'Manager, CSR Communications',
			'total' => 1
			));
			Position::create(array('position_id' => 201,
			'group' => 'Corporate Communications Division',
			'division' => 'Corporate Social Responsibilities',
			'organization' => 'Thai Bank Museum',
			'job_title' => 'Thai Bank Museum Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 202,
			'group' => 'Corporate Communications Division',
			'division' => 'Internal Communications Management',
			'organization' => 'No organization',
			'job_title' => 'Manager, Internal Communications Management',
			'total' => 1
			));
			Position::create(array('position_id' => 203,
			'group' => 'Corporate Communications Division',
			'division' => 'Internal Communications Management',
			'organization' => 'Event Arrangement',
			'job_title' => 'Manager, Event Arrangement',
			'total' => 1
			));
			Position::create(array('position_id' => 204,
			'group' => 'Corporate Communications Division',
			'division' => 'Internal Communications Management',
			'organization' => 'Event Arrangement',
			'job_title' => 'Manager, Pooled Administration',
			'total' => 1
			));
			Position::create(array('position_id' => 205,
			'group' => 'Corporate Communications Division',
			'division' => 'Internal Communications Management',
			'organization' => 'Event Arrangement',
			'job_title' => 'Pooled Administration Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 206,
			'group' => 'Corporate Communications Division',
			'division' => 'Internal Communications Management',
			'organization' => 'Internal Publication and Content',
			'job_title' => 'Manager, Internal Publication and Content',
			'total' => 1
			));
			Position::create(array('position_id' => 207,
			'group' => 'Corporate Communications Division',
			'division' => 'Internal Communications Management',
			'organization' => 'Internal Publication and Content',
			'job_title' => 'Senior Translator',
			'total' => 2
			));
			Position::create(array('position_id' => 208,
			'group' => 'Corporate Communications Division',
			'division' => 'Internal Communications Management',
			'organization' => 'Internal Publication and Content',
			'job_title' => 'Specialist, Public Relations',
			'total' => 1
			));
			Position::create(array('position_id' => 209,
			'group' => 'Corporate Communications Division',
			'division' => 'Internal Communications Management',
			'organization' => 'Internal Publication and Content',
			'job_title' => 'Translator',
			'total' => 1
			));
			Position::create(array('position_id' => 210,
			'group' => 'Corporate Communications Division',
			'division' => 'Internal Communications Management',
			'organization' => 'Special Project',
			'job_title' => 'Special Project Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 211,
			'group' => 'Finance Group',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Executive Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 212,
			'group' => 'Finance Group',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Finance Management Trainee',
			'total' => 20
			));
			Position::create(array('position_id' => 213,
			'group' => 'Finance Group',
			'division' => 'Financial Management',
			'organization' => 'No organization',
			'job_title' => 'EVP, Head of Financial Management',
			'total' => 1
			));
			Position::create(array('position_id' => 214,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'No organization',
			'job_title' => 'FEVP, Financial Reporting and Controls',
			'total' => 1
			));
			Position::create(array('position_id' => 215,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'No organization',
			'job_title' => 'Secretary to Head of Financial Reporting and Controls',
			'total' => 1
			));
			Position::create(array('position_id' => 216,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Balance Sheet Monitoring Division',
			'job_title' => 'Balance Sheet Monitoring & Control Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 217,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Balance Sheet Monitoring Division',
			'job_title' => 'Finance Management Trainee',
			'total' => 2
			));
			Position::create(array('position_id' => 218,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Balance Sheet Monitoring Division',
			'job_title' => 'Fixed Assets Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 219,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Balance Sheet Monitoring Division',
			'job_title' => 'Head of Balance Sheet Monitoring Division',
			'total' => 1
			));
			Position::create(array('position_id' => 220,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Balance Sheet Monitoring Division',
			'job_title' => 'Manager, Balance Sheet Monitoring & Control',
			'total' => 1
			));
			Position::create(array('position_id' => 221,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Balance Sheet Monitoring Division',
			'job_title' => 'Manager, Fixed Assets',
			'total' => 1
			));
			Position::create(array('position_id' => 222,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Balance Sheet Monitoring Division',
			'job_title' => 'Manager, Reconciliation Analysis',
			'total' => 1
			));
			Position::create(array('position_id' => 223,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Balance Sheet Monitoring Division',
			'job_title' => 'Manager, Report and Data Management',
			'total' => 1
			));
			Position::create(array('position_id' => 224,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Balance Sheet Monitoring Division',
			'job_title' => 'Reconciliation Analyst',
			'total' => 5
			));
			Position::create(array('position_id' => 225,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Balance Sheet Monitoring Division',
			'job_title' => 'Report and Data Management Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 226,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Capital Management',
			'job_title' => 'Capital Management Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 227,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Capital Management',
			'job_title' => 'Finance Management Trainee',
			'total' => 1
			));
			Position::create(array('position_id' => 228,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Capital Management',
			'job_title' => 'Manager, Capital Management',
			'total' => 1
			));
			Position::create(array('position_id' => 229,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Capital Management',
			'job_title' => 'Specialist, Risk Assets and Capital Fund',
			'total' => 1
			));
			Position::create(array('position_id' => 230,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Centralized Accounting Management Division',
			'job_title' => 'Accounting Officer',
			'total' => 18
			));
			Position::create(array('position_id' => 231,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Centralized Accounting Management Division',
			'job_title' => 'Division Head, Centralized Accounting Management Div.',
			'total' => 1
			));
			Position::create(array('position_id' => 232,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Centralized Accounting Management Division',
			'job_title' => 'Finance Management Trainee',
			'total' => 1
			));
			Position::create(array('position_id' => 233,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Centralized Accounting Management Division',
			'job_title' => 'Financial Analyst',
			'total' => 12
			));
			Position::create(array('position_id' => 234,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Centralized Accounting Management Division',
			'job_title' => 'Manager, Accounting System Control',
			'total' => 1
			));
			Position::create(array('position_id' => 235,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Centralized Accounting Management Division',
			'job_title' => 'Manager, Group Accounting Services 1',
			'total' => 1
			));
			Position::create(array('position_id' => 236,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Centralized Accounting Management Division',
			'job_title' => 'Manager, Group Accounting Services 2',
			'total' => 1
			));
			Position::create(array('position_id' => 237,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Centralized Accounting Management Division',
			'job_title' => 'Manager, Payment Processing',
			'total' => 1
			));
			Position::create(array('position_id' => 238,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Centralized Accounting Management Division',
			'job_title' => 'Manager, Payment Support',
			'total' => 1
			));
			Position::create(array('position_id' => 239,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Centralized Accounting Management Division',
			'job_title' => 'Manager,Loan Classification & Accounting System Control',
			'total' => 1
			));
			Position::create(array('position_id' => 240,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Centralized Accounting Management Division',
			'job_title' => 'Payment Processing Officer',
			'total' => 11
			));
			Position::create(array('position_id' => 241,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Centralized Accounting Management Division',
			'job_title' => 'Payment Support Officer',
			'total' => 9
			));
			Position::create(array('position_id' => 242,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Centralized Accounting Management Division',
			'job_title' => 'Supervisor, Group Accounting Services 1',
			'total' => 3
			));
			Position::create(array('position_id' => 243,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Centralized Accounting Management Division',
			'job_title' => 'Supervisor, Payment Processing',
			'total' => 1
			));
			Position::create(array('position_id' => 244,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Equity Investment Management',
			'job_title' => 'Finance Management Trainee',
			'total' => 1
			));
			Position::create(array('position_id' => 245,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Equity Investment Management',
			'job_title' => 'Investment Analyst',
			'total' => 5
			));
			Position::create(array('position_id' => 246,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Equity Investment Management',
			'job_title' => 'Manager, Equity Investment',
			'total' => 1
			));
			Position::create(array('position_id' => 247,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Financial Report Procedure & International Accounting',
			'job_title' => 'Accounting Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 248,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Financial Report Procedure & International Accounting',
			'job_title' => 'Manager, Accounting Policy & Procedures',
			'total' => 1
			));
			Position::create(array('position_id' => 249,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Financial Report Procedure & International Accounting',
			'job_title' => 'Manager,Financial Report Procedure&International Accounting',
			'total' => 1
			));
			Position::create(array('position_id' => 250,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Financial Reporting',
			'job_title' => 'Accounting Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 251,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Financial Reporting',
			'job_title' => 'Finance Management Trainee',
			'total' => 3
			));
			Position::create(array('position_id' => 252,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Financial Reporting',
			'job_title' => 'Financial Reporting Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 253,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Financial Reporting',
			'job_title' => 'Manager, Financial Reporting',
			'total' => 1
			));
			Position::create(array('position_id' => 254,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Financial Reporting',
			'job_title' => 'Supervisor, Accounting',
			'total' => 1
			));
			Position::create(array('position_id' => 255,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Investor Relations',
			'job_title' => 'Finance Management Trainee',
			'total' => 1
			));
			Position::create(array('position_id' => 256,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Investor Relations',
			'job_title' => 'Financial Analyst',
			'total' => 3
			));
			Position::create(array('position_id' => 257,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Investor Relations',
			'job_title' => 'Manager, Investor Relation',
			'total' => 1
			));
			Position::create(array('position_id' => 258,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Regulatory Reporting',
			'job_title' => 'Manager, Regulatory Reporting',
			'total' => 1
			));
			Position::create(array('position_id' => 259,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Regulatory Reporting',
			'job_title' => 'Reporting Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 260,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Tax Compliance',
			'job_title' => 'Manager, Tax Compliance',
			'total' => 1
			));
			Position::create(array('position_id' => 261,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Tax Compliance',
			'job_title' => 'Tax Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 262,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Treasury Accounting',
			'job_title' => 'Accounting Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 263,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Treasury Accounting',
			'job_title' => 'Finance Management Trainee',
			'total' => 1
			));
			Position::create(array('position_id' => 264,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Treasury Accounting',
			'job_title' => 'Manager, Treasury Accounting',
			'total' => 1
			));
			Position::create(array('position_id' => 265,
			'group' => 'Finance Group',
			'division' => 'Financial Reporting and Controls',
			'organization' => 'Treasury Accounting',
			'job_title' => 'Supervisor, Treasury Accounting & Control',
			'total' => 1
			));
			Position::create(array('position_id' => 266,
			'group' => 'Finance Group',
			'division' => 'MIS and Client Services',
			'organization' => 'No organization',
			'job_title' => 'EVP, Head of MIS and Client Services',
			'total' => 1
			));
			Position::create(array('position_id' => 267,
			'group' => 'Finance Group',
			'division' => 'MIS and Client Services',
			'organization' => 'No organization',
			'job_title' => 'Secretary to Head of MIS and Client Service',
			'total' => 1
			));
			Position::create(array('position_id' => 268,
			'group' => 'Finance Group',
			'division' => 'MIS and Client Services',
			'organization' => 'Capital Expenditure Management & IT Finance',
			'job_title' => 'Financial Analyst',
			'total' => 5
			));
			Position::create(array('position_id' => 269,
			'group' => 'Finance Group',
			'division' => 'MIS and Client Services',
			'organization' => 'Capital Expenditure Management & IT Finance',
			'job_title' => 'Manager,Capital Expenditure Management & IT Finance',
			'total' => 1
			));
			Position::create(array('position_id' => 270,
			'group' => 'Finance Group',
			'division' => 'MIS and Client Services',
			'organization' => 'Client Services',
			'job_title' => 'Finance Management Trainee',
			'total' => 2
			));
			Position::create(array('position_id' => 271,
			'group' => 'Finance Group',
			'division' => 'MIS and Client Services',
			'organization' => 'Financial Planning and Expense Management',
			'job_title' => 'Financial Analyst',
			'total' => 3
			));
			Position::create(array('position_id' => 272,
			'group' => 'Finance Group',
			'division' => 'MIS and Client Services',
			'organization' => 'Management Information Analytics',
			'job_title' => 'Financial Analyst',
			'total' => 5
			));
			Position::create(array('position_id' => 273,
			'group' => 'Finance Group',
			'division' => 'MIS and Client Services',
			'organization' => 'Management Information Analytics',
			'job_title' => 'Manager, Management Information Analytics',
			'total' => 1
			));
			Position::create(array('position_id' => 274,
			'group' => 'Finance Group',
			'division' => 'MIS and Client Services',
			'organization' => 'Management Report / Financial Planning and Analysis(28-02-2014)',
			'job_title' => 'Finance Management Trainee',
			'total' => 1
			));
			Position::create(array('position_id' => 275,
			'group' => 'Finance Group',
			'division' => 'MIS and Client Services',
			'organization' => 'Management Report and Analysis',
			'job_title' => 'Financial Analyst',
			'total' => 8
			));
			Position::create(array('position_id' => 276,
			'group' => 'Finance Group',
			'division' => 'MIS and Client Services',
			'organization' => 'Management Report and Analysis',
			'job_title' => 'Manager, Management Report and Analysis',
			'total' => 1
			));
			Position::create(array('position_id' => 277,
			'group' => 'Finance Group',
			'division' => 'MIS and Client Services',
			'organization' => 'MIS & Client Services - Subsidiaries',
			'job_title' => 'Financial Analyst',
			'total' => 3
			));
			Position::create(array('position_id' => 278,
			'group' => 'Finance Group',
			'division' => 'MIS and Client Services',
			'organization' => 'MIS & Client Services - Subsidiaries',
			'job_title' => 'Manager,MIS & Client Services - Subsidiaries',
			'total' => 1
			));
			Position::create(array('position_id' => 279,
			'group' => 'General Counsel Group',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Law and Language Specialist',
			'total' => 1
			));
			Position::create(array('position_id' => 280,
			'group' => 'General Counsel Group',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Lawyer',
			'total' => 3
			));
			Position::create(array('position_id' => 281,
			'group' => 'General Counsel Group',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Legal Advisor',
			'total' => 1
			));
			Position::create(array('position_id' => 282,
			'group' => 'General Counsel Group',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Legal Advisor for General Counsel Group',
			'total' => 4
			));
			Position::create(array('position_id' => 283,
			'group' => 'General Counsel Group',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Secretary SEVP, General Counsel Group',
			'total' => 1
			));
			Position::create(array('position_id' => 284,
			'group' => 'General Counsel Group',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'SEVP, Group General Counsel',
			'total' => 1
			));
			Position::create(array('position_id' => 285,
			'group' => 'General Counsel Group',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Tax Advisor',
			'total' => 1
			));
			Position::create(array('position_id' => 286,
			'group' => 'General Counsel Group',
			'division' => 'Banking Finance 1 & Capital Market Division',
			'organization' => 'No organization',
			'job_title' => 'EVP, Banking Finance 1 & Capital Market Division',
			'total' => 1
			));
			Position::create(array('position_id' => 287,
			'group' => 'General Counsel Group',
			'division' => 'Banking Finance 1 & Capital Market Division',
			'organization' => 'No organization',
			'job_title' => 'Secretary to EVP, Banking Finance 1 & Capital Market Div.',
			'total' => 1
			));
			Position::create(array('position_id' => 288,
			'group' => 'General Counsel Group',
			'division' => 'Banking Finance 1 & Capital Market Division',
			'organization' => 'Banking Finance 1',
			'job_title' => 'Lawyer',
			'total' => 17
			));
			Position::create(array('position_id' => 289,
			'group' => 'General Counsel Group',
			'division' => 'Banking Finance 1 & Capital Market Division',
			'organization' => 'Banking Finance 1',
			'job_title' => 'Legal Services Support Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 290,
			'group' => 'General Counsel Group',
			'division' => 'Banking Finance 1 & Capital Market Division',
			'organization' => 'Banking Finance 1',
			'job_title' => 'Manager, Banking Finance 1',
			'total' => 1
			));
			Position::create(array('position_id' => 291,
			'group' => 'General Counsel Group',
			'division' => 'Banking Finance 1 & Capital Market Division',
			'organization' => 'Banking Finance 1',
			'job_title' => 'Senior Lawyer',
			'total' => 4
			));
			Position::create(array('position_id' => 292,
			'group' => 'General Counsel Group',
			'division' => 'Banking Finance 1 & Capital Market Division',
			'organization' => 'Capital Market Team 1',
			'job_title' => 'Lawyer',
			'total' => 4
			));
			Position::create(array('position_id' => 293,
			'group' => 'General Counsel Group',
			'division' => 'Banking Finance 1 & Capital Market Division',
			'organization' => 'Capital Market Team 1',
			'job_title' => 'Legal Services Support Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 294,
			'group' => 'General Counsel Group',
			'division' => 'Banking Finance 1 & Capital Market Division',
			'organization' => 'Capital Market Team 1',
			'job_title' => 'Manager, Capital Market Team 1',
			'total' => 1
			));
			Position::create(array('position_id' => 295,
			'group' => 'General Counsel Group',
			'division' => 'Banking Finance 1 & Capital Market Division',
			'organization' => 'Capital Market Team 1',
			'job_title' => 'Senior Lawyer',
			'total' => 2
			));
			Position::create(array('position_id' => 296,
			'group' => 'General Counsel Group',
			'division' => 'Banking Finance 1 & Capital Market Division',
			'organization' => 'Capital Market Team 2',
			'job_title' => 'Lawyer',
			'total' => 7
			));
			Position::create(array('position_id' => 297,
			'group' => 'General Counsel Group',
			'division' => 'Banking Finance 1 & Capital Market Division',
			'organization' => 'Capital Market Team 2',
			'job_title' => 'Legal Services Support Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 298,
			'group' => 'General Counsel Group',
			'division' => 'Banking Finance 1 & Capital Market Division',
			'organization' => 'Capital Market Team 2',
			'job_title' => 'Manager, Capital Market Team 2',
			'total' => 1
			));
			Position::create(array('position_id' => 299,
			'group' => 'General Counsel Group',
			'division' => 'Banking Finance 1 & Capital Market Division',
			'organization' => 'Capital Market Team 2',
			'job_title' => 'Paralegal',
			'total' => 1
			));
			Position::create(array('position_id' => 300,
			'group' => 'General Counsel Group',
			'division' => 'Banking Finance 2 Division',
			'organization' => 'No organization',
			'job_title' => 'Division Head, Banking Finance 2 Division',
			'total' => 1
			));
			Position::create(array('position_id' => 301,
			'group' => 'General Counsel Group',
			'division' => 'Banking Finance 2 Division',
			'organization' => 'No organization',
			'job_title' => 'Secretary to EVP, Banking Finance 2',
			'total' => 1
			));
			Position::create(array('position_id' => 302,
			'group' => 'General Counsel Group',
			'division' => 'Banking Finance 2 Division',
			'organization' => 'Banking Finance 2 Team 1',
			'job_title' => 'Lawyer',
			'total' => 4
			));
			Position::create(array('position_id' => 303,
			'group' => 'General Counsel Group',
			'division' => 'Banking Finance 2 Division',
			'organization' => 'Banking Finance 2 Team 1',
			'job_title' => 'Legal Services Support Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 304,
			'group' => 'General Counsel Group',
			'division' => 'Banking Finance 2 Division',
			'organization' => 'Banking Finance 2 Team 1',
			'job_title' => 'Manager, Banking Finance 2 Team 1',
			'total' => 1
			));
			Position::create(array('position_id' => 305,
			'group' => 'General Counsel Group',
			'division' => 'Banking Finance 2 Division',
			'organization' => 'Banking Finance 2 Team 1',
			'job_title' => 'Senior Lawyer',
			'total' => 2
			));
			Position::create(array('position_id' => 306,
			'group' => 'General Counsel Group',
			'division' => 'Banking Finance 2 Division',
			'organization' => 'Banking Finance 2 Team 2',
			'job_title' => 'Lawyer',
			'total' => 3
			));
			Position::create(array('position_id' => 307,
			'group' => 'General Counsel Group',
			'division' => 'Banking Finance 2 Division',
			'organization' => 'Banking Finance 2 Team 2',
			'job_title' => 'Legal Services Support Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 308,
			'group' => 'General Counsel Group',
			'division' => 'Banking Finance 2 Division',
			'organization' => 'Banking Finance 2 Team 2',
			'job_title' => 'Manager, Banking Finance 2 Team 2',
			'total' => 1
			));
			Position::create(array('position_id' => 309,
			'group' => 'General Counsel Group',
			'division' => 'Board Secretariat and Shareholder Services',
			'organization' => 'No organization',
			'job_title' => 'Company Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 310,
			'group' => 'General Counsel Group',
			'division' => 'Board Secretariat and Shareholder Services',
			'organization' => 'No organization',
			'job_title' => 'Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 311,
			'group' => 'General Counsel Group',
			'division' => 'Board Secretariat and Shareholder Services',
			'organization' => 'No organization',
			'job_title' => 'Translator',
			'total' => 1
			));
			Position::create(array('position_id' => 312,
			'group' => 'General Counsel Group',
			'division' => 'Board Secretariat and Shareholder Services',
			'organization' => 'Board of Directors',
			'job_title' => 'Board of Director Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 313,
			'group' => 'General Counsel Group',
			'division' => 'Board Secretariat and Shareholder Services',
			'organization' => 'Board of Directors',
			'job_title' => 'Manager, Board of Director',
			'total' => 1
			));
			Position::create(array('position_id' => 314,
			'group' => 'General Counsel Group',
			'division' => 'Board Secretariat and Shareholder Services',
			'organization' => 'Board of Directors',
			'job_title' => 'Team Manager, Board Secretariat',
			'total' => 1
			));
			Position::create(array('position_id' => 315,
			'group' => 'General Counsel Group',
			'division' => 'Board Secretariat and Shareholder Services',
			'organization' => 'Boards of Subsidiaries',
			'job_title' => 'Boards of Subsidiaries Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 316,
			'group' => 'General Counsel Group',
			'division' => 'Board Secretariat and Shareholder Services',
			'organization' => 'Boards of Subsidiaries',
			'job_title' => 'Manager, Boards of Subsidiaries',
			'total' => 1
			));
			Position::create(array('position_id' => 317,
			'group' => 'General Counsel Group',
			'division' => 'Board Secretariat and Shareholder Services',
			'organization' => 'Shareholders Services and Corporate Governance',
			'job_title' => 'Shareholder Services and Corporate Governance Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 318,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'No organization',
			'job_title' => 'Division Head, Legal Services and Litigation Division',
			'total' => 1
			));
			Position::create(array('position_id' => 319,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'Legal Administration',
			'job_title' => 'Legal Administration Officer',
			'total' => 23
			));
			Position::create(array('position_id' => 320,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'Legal Administration',
			'job_title' => 'Manager, Legal Administration Support',
			'total' => 1
			));
			Position::create(array('position_id' => 321,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'Legal Services',
			'job_title' => 'Lawyer',
			'total' => 12
			));
			Position::create(array('position_id' => 322,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'Legal Services',
			'job_title' => 'Legal Services Support Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 323,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'Legal Services',
			'job_title' => 'Manager, Legal Services',
			'total' => 1
			));
			Position::create(array('position_id' => 324,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'Legal Services',
			'job_title' => 'Senior Lawyer',
			'total' => 1
			));
			Position::create(array('position_id' => 325,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'Litigation Team 1',
			'job_title' => 'Attorney',
			'total' => 37
			));
			Position::create(array('position_id' => 326,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'Litigation Team 1',
			'job_title' => 'Attorney, Legal Execution',
			'total' => 2
			));
			Position::create(array('position_id' => 327,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'Litigation Team 1',
			'job_title' => 'Litigation Execution Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 328,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'Litigation Team 1',
			'job_title' => 'Litigation Services Support Officer',
			'total' => 9
			));
			Position::create(array('position_id' => 329,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'Litigation Team 1',
			'job_title' => 'Manager, Central Litigation',
			'total' => 1
			));
			Position::create(array('position_id' => 330,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'Litigation Team 1',
			'job_title' => 'Manager, Legal Execution',
			'total' => 1
			));
			Position::create(array('position_id' => 331,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'Litigation Team 1',
			'job_title' => 'Manager, Litigation Region 2',
			'total' => 1
			));
			Position::create(array('position_id' => 332,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'Litigation Team 1',
			'job_title' => 'Manager, Litigation Team 1',
			'total' => 1
			));
			Position::create(array('position_id' => 333,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'Litigation Team 1',
			'job_title' => 'Manager, LTS. Ayutthaya',
			'total' => 1
			));
			Position::create(array('position_id' => 334,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'Litigation Team 1',
			'job_title' => 'Manager, LTS. Chachoengsao',
			'total' => 1
			));
			Position::create(array('position_id' => 335,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'Litigation Team 1',
			'job_title' => 'Manager, LTS. Chiang Rai',
			'total' => 1
			));
			Position::create(array('position_id' => 336,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'Litigation Team 1',
			'job_title' => 'Manager, LTS. Chiangmai',
			'total' => 1
			));
			Position::create(array('position_id' => 337,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'Litigation Team 1',
			'job_title' => 'Manager, LTS. Chonburi',
			'total' => 1
			));
			Position::create(array('position_id' => 338,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'Litigation Team 1',
			'job_title' => 'Manager, LTS. Khon Kaen',
			'total' => 1
			));
			Position::create(array('position_id' => 339,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'Litigation Team 1',
			'job_title' => 'Manager, LTS. Nakornratsima',
			'total' => 1
			));
			Position::create(array('position_id' => 340,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'Litigation Team 1',
			'job_title' => 'Manager, LTS. Nakornsithammarat',
			'total' => 1
			));
			Position::create(array('position_id' => 341,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'Litigation Team 1',
			'job_title' => 'Manager, LTS. Pathom',
			'total' => 1
			));
			Position::create(array('position_id' => 342,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'Litigation Team 1',
			'job_title' => 'Manager, LTS. Phisanulok',
			'total' => 1
			));
			Position::create(array('position_id' => 343,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'Litigation Team 1',
			'job_title' => 'Manager, LTS. Phuket',
			'total' => 1
			));
			Position::create(array('position_id' => 344,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'Litigation Team 1',
			'job_title' => 'Manager, LTS. Ratchaburi',
			'total' => 1
			));
			Position::create(array('position_id' => 345,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'Litigation Team 1',
			'job_title' => 'Manager, LTS. Rayong',
			'total' => 1
			));
			Position::create(array('position_id' => 346,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'Litigation Team 1',
			'job_title' => 'Manager, LTS. Songkla',
			'total' => 1
			));
			Position::create(array('position_id' => 347,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'Litigation Team 1',
			'job_title' => 'Manager, LTS. Suratthani',
			'total' => 1
			));
			Position::create(array('position_id' => 348,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'Litigation Team 1',
			'job_title' => 'Manager, LTS. Ubon Ratchathani',
			'total' => 1
			));
			Position::create(array('position_id' => 349,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'Litigation Team 1',
			'job_title' => 'Manager, LTS. Udon Thani',
			'total' => 1
			));
			Position::create(array('position_id' => 350,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'Litigation Team 2',
			'job_title' => 'Attorney, Special Case Litigation',
			'total' => 11
			));
			Position::create(array('position_id' => 351,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'Litigation Team 2',
			'job_title' => 'Litigation Coordination Officer',
			'total' => 16
			));
			Position::create(array('position_id' => 352,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'Litigation Team 2',
			'job_title' => 'Litigation Information & Control Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 353,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'Litigation Team 2',
			'job_title' => 'Litigation Services Support Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 354,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'Litigation Team 2',
			'job_title' => 'Manager, Litigation Control and Coordination',
			'total' => 1
			));
			Position::create(array('position_id' => 355,
			'group' => 'General Counsel Group',
			'division' => 'Legal Services and Litigation Division',
			'organization' => 'Litigation Team 2',
			'job_title' => 'Manager, Litigation Team2 and Special Case Litigation',
			'total' => 1
			));
			Position::create(array('position_id' => 356,
			'group' => 'General Counsel Group',
			'division' => 'Taxation Law',
			'organization' => 'No organization',
			'job_title' => 'Manager, Taxation Law',
			'total' => 1
			));
			Position::create(array('position_id' => 357,
			'group' => 'General Counsel Group',
			'division' => 'Taxation Law',
			'organization' => 'No organization',
			'job_title' => 'Tax Lawyer',
			'total' => 6
			));
			Position::create(array('position_id' => 358,
			'group' => 'General Counsel Group',
			'division' => 'Taxation Law',
			'organization' => 'No organization',
			'job_title' => 'Taxation Law Support Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 359,
			'group' => 'Group Treasury',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Head of Group Treasury',
			'total' => 1
			));
			Position::create(array('position_id' => 360,
			'group' => 'Group Treasury',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Secretary to Head of Group Treasury',
			'total' => 1
			));
			Position::create(array('position_id' => 361,
			'group' => 'Group Treasury',
			'division' => 'Balance Sheet Analytic Management',
			'organization' => 'No organization',
			'job_title' => 'Balance Sheet Analytic & Monitoring Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 362,
			'group' => 'Group Treasury',
			'division' => 'Balance Sheet Analytic Management',
			'organization' => 'No organization',
			'job_title' => 'Head of Balance Sheet Analytic Management',
			'total' => 1
			));
			Position::create(array('position_id' => 363,
			'group' => 'Group Treasury',
			'division' => 'Balance Sheet Strategy & Management',
			'organization' => 'No organization',
			'job_title' => 'EVP, Head of Balance Sheet Strategy & Management',
			'total' => 1
			));
			Position::create(array('position_id' => 364,
			'group' => 'Group Treasury',
			'division' => 'Balance Sheet Strategy & Management',
			'organization' => 'Balance Sheet Management and Funding',
			'job_title' => 'Balance Sheet Management and Funding Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 365,
			'group' => 'Group Treasury',
			'division' => 'Balance Sheet Strategy & Management',
			'organization' => 'Balance Sheet Management and Funding',
			'job_title' => 'Manager, Balance Sheet Management and Funding',
			'total' => 2
			));
			Position::create(array('position_id' => 366,
			'group' => 'Group Treasury',
			'division' => 'Balance Sheet Strategy & Management',
			'organization' => 'Investment & IRRBB Management',
			'job_title' => 'Manager, Investment & IRRBB Management',
			'total' => 1
			));
			Position::create(array('position_id' => 367,
			'group' => 'Group Treasury',
			'division' => 'Balance Sheet Strategy & Management',
			'organization' => 'Liquidity Management',
			'job_title' => 'Liquidity Management Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 368,
			'group' => 'Group Treasury',
			'division' => 'Balance Sheet Strategy & Management',
			'organization' => 'Liquidity Management',
			'job_title' => 'Manager, Liquidity Management',
			'total' => 1
			));
			Position::create(array('position_id' => 369,
			'group' => 'Human Resources Group',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Advisor to Chairman of the Executive Committee',
			'total' => 1
			));
			Position::create(array('position_id' => 370,
			'group' => 'Human Resources Group',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'FEVP, Group Head, Human Resources Group',
			'total' => 1
			));
			Position::create(array('position_id' => 371,
			'group' => 'Human Resources Group',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Manager, HR Transformation Project',
			'total' => 1
			));
			Position::create(array('position_id' => 372,
			'group' => 'Human Resources Group',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Secretary to Group Head, Human Resources Group',
			'total' => 1
			));
			Position::create(array('position_id' => 373,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'No organization',
			'job_title' => 'Head of HR Center of Expertise',
			'total' => 1
			));
			Position::create(array('position_id' => 374,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'No organization',
			'job_title' => 'Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 375,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'Learning and Development',
			'job_title' => '-',
			'total' => 1
			));
			Position::create(array('position_id' => 376,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'Learning and Development',
			'job_title' => 'Assistant Manager, Learning Delivery 2',
			'total' => 1
			));
			Position::create(array('position_id' => 377,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'Learning and Development',
			'job_title' => 'e-Learning Graphic Designer',
			'total' => 2
			));
			Position::create(array('position_id' => 378,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'Learning and Development',
			'job_title' => 'Learning & Development Strategy Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 379,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'Learning and Development',
			'job_title' => 'Learning & Development Support Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 380,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'Learning and Development',
			'job_title' => 'Manager, e-Learning',
			'total' => 1
			));
			Position::create(array('position_id' => 381,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'Learning and Development',
			'job_title' => 'Manager, Learning & Development Strategy',
			'total' => 1
			));
			Position::create(array('position_id' => 382,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'Learning and Development',
			'job_title' => 'Manager, Learning Delivery 1',
			'total' => 1
			));
			Position::create(array('position_id' => 383,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'Learning and Development',
			'job_title' => 'Mgr.,Learning & Development Support',
			'total' => 1
			));
			Position::create(array('position_id' => 384,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'Learning and Development',
			'job_title' => 'Senior Audio - Visual Officer, Alternate Learning',
			'total' => 1
			));
			Position::create(array('position_id' => 385,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'Learning and Development',
			'job_title' => 'Senior e-Learning Graphic Designer',
			'total' => 1
			));
			Position::create(array('position_id' => 386,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'Learning and Development',
			'job_title' => 'Senior e-Learning Instructional Designer',
			'total' => 1
			));
			Position::create(array('position_id' => 387,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'Learning and Development',
			'job_title' => 'Senior Program Designer',
			'total' => 3
			));
			Position::create(array('position_id' => 388,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'Learning and Development',
			'job_title' => 'Trainer',
			'total' => 6
			));
			Position::create(array('position_id' => 389,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'Organization Development',
			'job_title' => 'HR officer, Organization Development',
			'total' => 1
			));
			Position::create(array('position_id' => 390,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'Organization Development',
			'job_title' => 'Management Associate',
			'total' => 2
			));
			Position::create(array('position_id' => 391,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'Organization Development',
			'job_title' => 'Manager Talent Management',
			'total' => 1
			));
			Position::create(array('position_id' => 392,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'Organization Development',
			'job_title' => 'Senior officer, Organization Development',
			'total' => 1
			));
			Position::create(array('position_id' => 393,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'Recruitment Channels Management',
			'job_title' => 'Manager, Channel Management',
			'total' => 1
			));
			Position::create(array('position_id' => 394,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'Recruitment Channels Management',
			'job_title' => 'Manager, Channels Management',
			'total' => 1
			));
			Position::create(array('position_id' => 395,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'Recruitment Channels Management',
			'job_title' => 'Recruitment Channels Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 396,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'Recruitment Channels Management',
			'job_title' => 'Senior Officer, Recruitment Channels Management',
			'total' => 1
			));
			Position::create(array('position_id' => 397,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'Remuneration Management',
			'job_title' => 'Head of Remuneration Management',
			'total' => 1
			));
			Position::create(array('position_id' => 398,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'Remuneration Management',
			'job_title' => 'HR Business Partner Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 399,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'Remuneration Management',
			'job_title' => 'HR Busniess Partner Officer - Executive Services',
			'total' => 2
			));
			Position::create(array('position_id' => 400,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'Remuneration Management',
			'job_title' => 'HR Data Analyst',
			'total' => 2
			));
			Position::create(array('position_id' => 401,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'Remuneration Management',
			'job_title' => 'Manager, Compensation & Benefits and Information Management',
			'total' => 1
			));
			Position::create(array('position_id' => 402,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'Remuneration Management',
			'job_title' => 'Manager, Compensation and Benefits',
			'total' => 1
			));
			Position::create(array('position_id' => 403,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'Remuneration Management',
			'job_title' => 'Manager, HR Business Partner - Executive Services',
			'total' => 1
			));
			Position::create(array('position_id' => 404,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'Remuneration Management',
			'job_title' => 'Manager, HR Information Management',
			'total' => 1
			));
			Position::create(array('position_id' => 405,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'Remuneration Management',
			'job_title' => 'Manager,Performance Management System',
			'total' => 1
			));
			Position::create(array('position_id' => 406,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'Remuneration Management',
			'job_title' => 'Secretary',
			'total' => 2
			));
			Position::create(array('position_id' => 407,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'Remuneration Management',
			'job_title' => 'Senior Officer, Compensation and Benefits',
			'total' => 1
			));
			Position::create(array('position_id' => 408,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'Strategic Engagement and Executive Coaching',
			'job_title' => 'Head of Strategic Engagement and Executive Coaching',
			'total' => 1
			));
			Position::create(array('position_id' => 409,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'Strategic Engagement and Executive Coaching',
			'job_title' => 'Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 410,
			'group' => 'Human Resources Group',
			'division' => 'Center of Expertise',
			'organization' => 'Strategic Engagement and Executive Coaching',
			'job_title' => 'Strategic Engagement Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 411,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner - Retail Banking Group',
			'organization' => 'Training and Development - Retail Banking',
			'job_title' => 'Advisor',
			'total' => 1
			));
			Position::create(array('position_id' => 412,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner - Retail Banking Group',
			'organization' => 'Training and Development - Retail Banking',
			'job_title' => 'Trainer',
			'total' => 1
			));
			Position::create(array('position_id' => 413,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'No organization',
			'job_title' => 'Head of HR Business Partner 1',
			'total' => 1
			));
			Position::create(array('position_id' => 414,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'No organization',
			'job_title' => 'Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 415,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'HR Business Partner - Head Office Direct Sales',
			'job_title' => 'Manager, HRBP - Head Office Direct Sales',
			'total' => 1
			));
			Position::create(array('position_id' => 416,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'HR Business Partner - Process Improvement Project',
			'job_title' => 'Manager, HRBP- Improvement Project',
			'total' => 1
			));
			Position::create(array('position_id' => 417,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'HR Business Partner - Retail Banking Branch Network Bangkok',
			'job_title' => 'HR Business Partner Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 418,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'HR Business Partner - Retail Banking Branch Network Bangkok',
			'job_title' => 'Mgr., HRBP - Retail Banking Branch Network Bangkok',
			'total' => 1
			));
			Position::create(array('position_id' => 419,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'HR Business Partner - Retail Banking Branch Network Bangkok',
			'job_title' => 'Senior Officer, HR Business Partner',
			'total' => 2
			));
			Position::create(array('position_id' => 420,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'HR Business Partner - Technology and Operations Group',
			'job_title' => 'HR Business Partner Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 421,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'HR Business Partner - Technology and Operations Group',
			'job_title' => 'Manager, HRBP - Technology and Operations Group',
			'total' => 1
			));
			Position::create(array('position_id' => 422,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'HR Business Partner - Technology and Operations Group',
			'job_title' => 'Senior Officer, HR Business Partner',
			'total' => 2
			));
			Position::create(array('position_id' => 423,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'HR Business Partner and Employee Relations',
			'job_title' => 'Employee Communication Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 424,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'HR Business Partner and Employee Relations',
			'job_title' => 'Employee Discipline Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 425,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'HR Business Partner and Employee Relations',
			'job_title' => 'Head of HR Business Partner and Employee Relations',
			'total' => 1
			));
			Position::create(array('position_id' => 426,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'HR Business Partner and Employee Relations',
			'job_title' => 'HR Business Partner Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 427,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'HR Business Partner and Employee Relations',
			'job_title' => 'HRBP Mgr., Retail Banking, Branch Network UPC',
			'total' => 1
			));
			Position::create(array('position_id' => 428,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'HR Business Partner and Employee Relations',
			'job_title' => 'HRCS Manager, Business Banking',
			'total' => 1
			));
			Position::create(array('position_id' => 429,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'HR Business Partner and Employee Relations',
			'job_title' => 'Labor Relation Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 430,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'HR Business Partner and Employee Relations',
			'job_title' => 'Manager, Employee Activities',
			'total' => 1
			));
			Position::create(array('position_id' => 431,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'HR Business Partner and Employee Relations',
			'job_title' => 'Manager, HR Business Partner - Special Business Group',
			'total' => 1
			));
			Position::create(array('position_id' => 432,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'HR Business Partner and Employee Relations',
			'job_title' => 'Manager, Labor Relations',
			'total' => 1
			));
			Position::create(array('position_id' => 433,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'HR Business Partner and Employee Relations',
			'job_title' => 'Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 434,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'HR Business Partner and Employee Relations',
			'job_title' => 'Senior Officer, Employee Activities',
			'total' => 1
			));
			Position::create(array('position_id' => 435,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'HR Business Partner and Employee Relations',
			'job_title' => 'Senior Officer, Employee Discipline',
			'total' => 1
			));
			Position::create(array('position_id' => 436,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'HR Business Partner and Employee Relations',
			'job_title' => 'Senior Officer, HR Business Partner',
			'total' => 3
			));
			Position::create(array('position_id' => 437,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'HR Business Partner and Employee Relations',
			'job_title' => 'Senior Officer, Investigation',
			'total' => 2
			));
			Position::create(array('position_id' => 438,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'HR Business Partner and Employee Relations',
			'job_title' => 'Senior Officer, Labor Relations',
			'total' => 2
			));
			Position::create(array('position_id' => 439,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'HR Business Partner Data Management',
			'job_title' => 'Assistant Manager, HR Business Partner - Data Management',
			'total' => 1
			));
			Position::create(array('position_id' => 440,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'HR Business Partner Data Management',
			'job_title' => 'HR Business Partner - Data Management Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 441,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'HR Business Partner Data Management',
			'job_title' => 'HRCS Information Management Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 442,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'HR Business Partner Data Management',
			'job_title' => 'Senior Officer, HR Business Partner - Data Management',
			'total' => 1
			));
			Position::create(array('position_id' => 443,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'HR Business Partner-Retail Banking Products&Customer Segment',
			'job_title' => 'Head of HR Business Partner - Head Office Product',
			'total' => 1
			));
			Position::create(array('position_id' => 444,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'HR Business Partner-Retail Banking Products&Customer Segment',
			'job_title' => 'HR Business Partner Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 445,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'HR Business Partner-Retail Banking Products&Customer Segment',
			'job_title' => 'Manager, HR Business Partner - Product',
			'total' => 1
			));
			Position::create(array('position_id' => 446,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'HR Business Partner-Retail Banking Products&Customer Segment',
			'job_title' => 'Senior Officer, HR Business Partner',
			'total' => 1
			));
			Position::create(array('position_id' => 447,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'Recruitment - Retail and Business Banking Groups',
			'job_title' => 'Manager, Recruitment - Retail and Business Banking Groups',
			'total' => 1
			));
			Position::create(array('position_id' => 448,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'Recruitment - Retail and Business Banking Groups',
			'job_title' => 'Recruitment - Retail and Business Banking Groups Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 449,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'Recruitment - Retail and Business Banking Groups',
			'job_title' => 'Senior Officer, Recruitment - RBBG',
			'total' => 2
			));
			Position::create(array('position_id' => 450,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'Training and Development - HR Business Partner 1',
			'job_title' => 'Branch Network Training Officer',
			'total' => 7
			));
			Position::create(array('position_id' => 451,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'Training and Development - HR Business Partner 1',
			'job_title' => 'Budgeting and Documentation Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 452,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'Training and Development - HR Business Partner 1',
			'job_title' => 'Manager, Network Training',
			'total' => 1
			));
			Position::create(array('position_id' => 453,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'Training and Development - HR Business Partner 1',
			'job_title' => 'Manager, Training & Development-Retail Banking',
			'total' => 1
			));
			Position::create(array('position_id' => 454,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'Training and Development - HR Business Partner 1',
			'job_title' => 'Manager, Training and Development - HR Business Partner 1',
			'total' => 1
			));
			Position::create(array('position_id' => 455,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'Training and Development - HR Business Partner 1',
			'job_title' => 'Manager, Training and Development - Retail Banking HO',
			'total' => 1
			));
			Position::create(array('position_id' => 456,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'Training and Development - HR Business Partner 1',
			'job_title' => 'Mgr., Training & Development - Technology & Operations Group',
			'total' => 1
			));
			Position::create(array('position_id' => 457,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'Training and Development - HR Business Partner 1',
			'job_title' => 'Senior Officer, Branch Network Training',
			'total' => 3
			));
			Position::create(array('position_id' => 458,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'Training and Development - HR Business Partner 1',
			'job_title' => 'Senior Officer, Training & Development-Retail Banking',
			'total' => 2
			));
			Position::create(array('position_id' => 459,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'Training and Development - HR Business Partner 1',
			'job_title' => 'Talent Mgt.&Training Development-Business Banking Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 460,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 1',
			'organization' => 'Training and Development - HR Business Partner 1',
			'job_title' => 'Training and Development - Retail Banking HO Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 461,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 2',
			'organization' => 'No organization',
			'job_title' => 'Head of HR Business Partner 2',
			'total' => 1
			));
			Position::create(array('position_id' => 462,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 2',
			'organization' => 'No organization',
			'job_title' => 'Manager, Training and Development - WBG & BBG(30-03-2014)',
			'total' => 1
			));
			Position::create(array('position_id' => 463,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 2',
			'organization' => 'HR Business Partner - International Banking Business',
			'job_title' => 'Manager, HRBP - International Banking Business',
			'total' => 1
			));
			Position::create(array('position_id' => 464,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 2',
			'organization' => 'HR Business Partner - Support Functions',
			'job_title' => 'HR Business Partner Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 465,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 2',
			'organization' => 'HR Business Partner - Support Functions',
			'job_title' => 'Manager, HR Business Partner - Support Functions',
			'total' => 2
			));
			Position::create(array('position_id' => 466,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 2',
			'organization' => 'HR Business Partner - Wholesale Coverage',
			'job_title' => 'Manager, HR Business Partner - Wholesale Coverage',
			'total' => 1
			));
			Position::create(array('position_id' => 467,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 2',
			'organization' => 'HR Business Partner - Wholesale Coverage',
			'job_title' => 'Senior Officer, HR Business Partner',
			'total' => 1
			));
			Position::create(array('position_id' => 468,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 2',
			'organization' => 'HR Business Partner - Wholesale Product',
			'job_title' => 'HR Business Partner Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 469,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 2',
			'organization' => 'HR Business Partner - Wholesale Product',
			'job_title' => 'Manager, HR Business Partner - Wholesale Product',
			'total' => 2
			));
			Position::create(array('position_id' => 470,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 2',
			'organization' => 'Recruitment - Wholesale Banking and Support Functions',
			'job_title' => 'Mgr., Recruitment - Wholesale Banking & Support Functions',
			'total' => 1
			));
			Position::create(array('position_id' => 471,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 2',
			'organization' => 'Recruitment - Wholesale Banking and Support Functions',
			'job_title' => 'Recruitment - Wholesale Banking & Support Functions Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 472,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 2',
			'organization' => 'Recruitment - Wholesale Banking and Support Functions',
			'job_title' => 'Sr. Officer, Recruitment-Wholesale Banking&Support Functions',
			'total' => 2
			));
			Position::create(array('position_id' => 473,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 2',
			'organization' => 'Traning and Development - HR Business Partner 2',
			'job_title' => 'Training and Development - Support Functions Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 474,
			'group' => 'Human Resources Group',
			'division' => 'HR Business Partner 2',
			'organization' => 'Traning and Development - HR Business Partner 2',
			'job_title' => 'Training and Development - Wholesale Banking Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 475,
			'group' => 'Human Resources Group',
			'division' => 'HR Operations',
			'organization' => 'No organization',
			'job_title' => 'Head of HR Operations',
			'total' => 1
			));
			Position::create(array('position_id' => 476,
			'group' => 'Human Resources Group',
			'division' => 'HR Operations',
			'organization' => 'No organization',
			'job_title' => 'Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 477,
			'group' => 'Human Resources Group',
			'division' => 'HR Operations',
			'organization' => 'Authority Signature and Power Of Attorney',
			'job_title' => 'Authority Signature & Power of Attorney Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 478,
			'group' => 'Human Resources Group',
			'division' => 'HR Operations',
			'organization' => 'Authority Signature and Power Of Attorney',
			'job_title' => 'Manager, Authority Signature & Power of Attorney',
			'total' => 1
			));
			Position::create(array('position_id' => 479,
			'group' => 'Human Resources Group',
			'division' => 'HR Operations',
			'organization' => 'Authority Signature and Power Of Attorney',
			'job_title' => 'Senior Officer, Authority Signature & Power of Attorney',
			'total' => 1
			));
			Position::create(array('position_id' => 480,
			'group' => 'Human Resources Group',
			'division' => 'HR Operations',
			'organization' => 'Benefits Administration and Employee Welfare',
			'job_title' => 'Benefit Officer',
			'total' => 10
			));
			Position::create(array('position_id' => 481,
			'group' => 'Human Resources Group',
			'division' => 'HR Operations',
			'organization' => 'Benefits Administration and Employee Welfare',
			'job_title' => 'Manager, Benefits 1',
			'total' => 1
			));
			Position::create(array('position_id' => 482,
			'group' => 'Human Resources Group',
			'division' => 'HR Operations',
			'organization' => 'Benefits Administration and Employee Welfare',
			'job_title' => 'Manager, Benefits Administration & Employee Welfare',
			'total' => 1
			));
			Position::create(array('position_id' => 483,
			'group' => 'Human Resources Group',
			'division' => 'HR Operations',
			'organization' => 'Employee Services',
			'job_title' => 'Assistant Manager, Employee Service',
			'total' => 2
			));
			Position::create(array('position_id' => 484,
			'group' => 'Human Resources Group',
			'division' => 'HR Operations',
			'organization' => 'Employee Services',
			'job_title' => 'Employee Service Officer',
			'total' => 9
			));
			Position::create(array('position_id' => 485,
			'group' => 'Human Resources Group',
			'division' => 'HR Operations',
			'organization' => 'Employee Services',
			'job_title' => 'Manager, Employee Service',
			'total' => 1
			));
			Position::create(array('position_id' => 486,
			'group' => 'Human Resources Group',
			'division' => 'HR Operations',
			'organization' => 'Employee Services',
			'job_title' => 'Senior Officer, Employee Service',
			'total' => 1
			));
			Position::create(array('position_id' => 487,
			'group' => 'Human Resources Group',
			'division' => 'HR Operations',
			'organization' => 'Human Resource Management System',
			'job_title' => 'HR Business Analyst Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 488,
			'group' => 'Human Resources Group',
			'division' => 'HR Operations',
			'organization' => 'Human Resource Management System',
			'job_title' => 'Manager, HR Business Analyst',
			'total' => 2
			));
			Position::create(array('position_id' => 489,
			'group' => 'Human Resources Group',
			'division' => 'HR Operations',
			'organization' => 'Human Resource Management System',
			'job_title' => 'Manager, HR Management System',
			'total' => 1
			));
			Position::create(array('position_id' => 490,
			'group' => 'Human Resources Group',
			'division' => 'HR Operations',
			'organization' => 'Human Resource Management System',
			'job_title' => 'Senior Officer, HR Business Analyst',
			'total' => 2
			));
			Position::create(array('position_id' => 491,
			'group' => 'Human Resources Group',
			'division' => 'HR Operations',
			'organization' => 'Payroll Administration(31-03-2014)',
			'job_title' => 'Manager, Payroll Administration',
			'total' => 2
			));
			Position::create(array('position_id' => 492,
			'group' => 'Human Resources Group',
			'division' => 'HR Operations',
			'organization' => 'Payroll Administration(31-03-2014)',
			'job_title' => 'Payroll Administration Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 493,
			'group' => 'Human Resources Group',
			'division' => 'HR Operations',
			'organization' => 'Payroll Administration(31-03-2014)',
			'job_title' => 'Senior Officer, Payroll Administration',
			'total' => 2
			));
			Position::create(array('position_id' => 494,
			'group' => 'Human Resources Group',
			'division' => 'HR Operations Division',
			'organization' => 'No organization',
			'job_title' => '-',
			'total' => 1
			));
			Position::create(array('position_id' => 495,
			'group' => 'Human Resources Group',
			'division' => 'HR Strategy and Policy',
			'organization' => 'No organization',
			'job_title' => 'Head of HR Strategy and Policy',
			'total' => 1
			));
			Position::create(array('position_id' => 496,
			'group' => 'Human Resources Group',
			'division' => 'HR Strategy and Policy',
			'organization' => 'No organization',
			'job_title' => 'HR Strategy Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 497,
			'group' => 'Human Resources Group',
			'division' => 'HR Strategy and Policy',
			'organization' => 'No organization',
			'job_title' => 'Manager, HR Analytics',
			'total' => 1
			));
			Position::create(array('position_id' => 498,
			'group' => 'Human Resources Group',
			'division' => 'HR Strategy and Policy',
			'organization' => 'No organization',
			'job_title' => 'Manager, HR Strategy',
			'total' => 2
			));
			Position::create(array('position_id' => 499,
			'group' => 'Human Resources Group',
			'division' => 'Staff attached to HR Group',
			'organization' => 'No organization',
			'job_title' => '-',
			'total' => 1
			));
			Position::create(array('position_id' => 500,
			'group' => 'Human Resources Group',
			'division' => 'Staff attached to HR Group',
			'organization' => 'No organization',
			'job_title' => 'Secretary of Executive Committee',
			'total' => 1
			));
			Position::create(array('position_id' => 501,
			'group' => 'Human Resources Group',
			'division' => 'Staff attached to HR Group',
			'organization' => 'Executive Services',
			'job_title' => 'Consultant',
			'total' => 1
			));
			Position::create(array('position_id' => 502,
			'group' => 'Human Resources Group',
			'division' => 'Staff attached to HR Group',
			'organization' => 'Executive Services',
			'job_title' => 'Executive Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 503,
			'group' => 'Human Resources Group',
			'division' => 'Staff attached to HR Group',
			'organization' => 'Executive Services',
			'job_title' => 'Secretary to Chairman of the Executive Committee and CEO',
			'total' => 2
			));
			Position::create(array('position_id' => 504,
			'group' => 'Human Resources Group',
			'division' => 'Staff attached to HR Group',
			'organization' => 'Long Term Disability',
			'job_title' => 'Staff Pending for Medical Treatment',
			'total' => 3
			));
			Position::create(array('position_id' => 505,
			'group' => 'Human Resources Group',
			'division' => 'Transition Staff',
			'organization' => 'Scholarship Staff',
			'job_title' => 'Scholarship Staff',
			'total' => 3
			));
			Position::create(array('position_id' => 506,
			'group' => 'i-OFFICE',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Business Coordinator',
			'total' => 1
			));
			Position::create(array('position_id' => 507,
			'group' => 'i-OFFICE',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Head of Innovation',
			'total' => 1
			));
			Position::create(array('position_id' => 508,
			'group' => 'i-OFFICE',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Idea Communication',
			'total' => 1
			));
			Position::create(array('position_id' => 509,
			'group' => 'i-OFFICE',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Innovation Strategist',
			'total' => 1
			));
			Position::create(array('position_id' => 510,
			'group' => 'i-OFFICE',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Manager, Program Management',
			'total' => 1
			));
			Position::create(array('position_id' => 511,
			'group' => 'i-OFFICE',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Project Manager',
			'total' => 2
			));
			Position::create(array('position_id' => 512,
			'group' => 'i-OFFICE',
			'division' => 'Idea Communication Management',
			'organization' => 'No organization',
			'job_title' => 'Idea Communication',
			'total' => 2
			));
			Position::create(array('position_id' => 513,
			'group' => 'Retail Banking Group',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'FEVP, Division Head, Auto Finance and Personal Loan',
			'total' => 1
			));
			Position::create(array('position_id' => 514,
			'group' => 'Retail Banking Group',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Group Head, Retail and Business Banking Groups',
			'total' => 1
			));
			Position::create(array('position_id' => 515,
			'group' => 'Retail Banking Group',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Secretary to Group Head, Retail and Business Banking Groups',
			'total' => 1
			));
			Position::create(array('position_id' => 516,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'No organization',
			'job_title' => 'Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 517,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Auto Finance Sales - New Car',
			'job_title' => 'Area Manager, Auto Finance Sales',
			'total' => 7
			));
			Position::create(array('position_id' => 518,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Auto Finance Sales - New Car',
			'job_title' => 'Auto Finance Sales Marketing Officer',
			'total' => 242
			));
			Position::create(array('position_id' => 519,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Auto Finance Sales - New Car',
			'job_title' => 'Auto Finance Sales Support Officer',
			'total' => 19
			));
			Position::create(array('position_id' => 520,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Auto Finance Sales - New Car',
			'job_title' => 'Manager, Auto Finance Sales - New Car',
			'total' => 1
			));
			Position::create(array('position_id' => 521,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Auto Finance Sales - New Car',
			'job_title' => 'Support Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 522,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Auto Finance Sales - New Car',
			'job_title' => 'Team Manager, Auto Finance Sales',
			'total' => 29
			));
			Position::create(array('position_id' => 523,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Auto Finance Sales - Used Car',
			'job_title' => 'Area Manager, Auto Finance Sales',
			'total' => 5
			));
			Position::create(array('position_id' => 524,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Auto Finance Sales - Used Car',
			'job_title' => 'Auto Finance Sales Marketing Officer',
			'total' => 121
			));
			Position::create(array('position_id' => 525,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Auto Finance Sales - Used Car',
			'job_title' => 'Auto Finance Sales Support Officer',
			'total' => 22
			));
			Position::create(array('position_id' => 526,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Auto Finance Sales - Used Car',
			'job_title' => 'Manager, Auto Finance Sales - Used Car',
			'total' => 1
			));
			Position::create(array('position_id' => 527,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Auto Finance Sales - Used Car',
			'job_title' => 'Quality Assurance Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 528,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Auto Finance Sales - Used Car',
			'job_title' => 'Quality Control 1 Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 529,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Auto Finance Sales - Used Car',
			'job_title' => 'Sales Quality Assurance Officer',
			'total' => 7
			));
			Position::create(array('position_id' => 530,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Auto Finance Sales - Used Car',
			'job_title' => 'Team Manager, Auto Finance Sales',
			'total' => 29
			));
			Position::create(array('position_id' => 531,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Business Development and Strategic Planning',
			'job_title' => 'Auto Insurance Renewal Officer',
			'total' => 8
			));
			Position::create(array('position_id' => 532,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Business Development and Strategic Planning',
			'job_title' => 'Auto Insurance Renewal Officer (Contract)',
			'total' => 15
			));
			Position::create(array('position_id' => 533,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Business Development and Strategic Planning',
			'job_title' => 'Expense Control Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 534,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Business Development and Strategic Planning',
			'job_title' => 'Manager, Business Development and Strategic Planning',
			'total' => 1
			));
			Position::create(array('position_id' => 535,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Business Development and Strategic Planning',
			'job_title' => 'Sales Compensation Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 536,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Business Development and Strategic Planning',
			'job_title' => 'Sales MIS Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 537,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Business Development and Strategic Planning',
			'job_title' => 'Supervisor, Auto Insurance Renewal Channel',
			'total' => 2
			));
			Position::create(array('position_id' => 538,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Business Development and Strategic Planning',
			'job_title' => 'Team Manager, Auto Insurance Renewal Channel',
			'total' => 1
			));
			Position::create(array('position_id' => 539,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Business Development and Strategic Planning',
			'job_title' => 'Team Manager, Sales MIS',
			'total' => 1
			));
			Position::create(array('position_id' => 540,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Direct Sales',
			'job_title' => 'Supervisor, Direct Sales',
			'total' => 11
			));
			Position::create(array('position_id' => 541,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Direct Sales',
			'job_title' => 'Support Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 542,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Direct Sales',
			'job_title' => 'Team Manager, Direct Sales (Unsecured)',
			'total' => 7
			));
			Position::create(array('position_id' => 543,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Marketing and Partnership Management',
			'job_title' => 'Campaign Evaluation and Report Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 544,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Marketing and Partnership Management',
			'job_title' => 'Marketing Campaign and Promotion Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 545,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Marketing and Partnership Management',
			'job_title' => 'Premium and Gift Dealer Support Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 546,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Marketing and Partnership Management',
			'job_title' => 'Product Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 547,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Marketing and Partnership Management',
			'job_title' => 'Team Manager, Usage',
			'total' => 1
			));
			Position::create(array('position_id' => 548,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'MCMC Business',
			'job_title' => 'Cross Sales and Top up Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 549,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'MCMC Business',
			'job_title' => 'Sale Support Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 550,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'MCMC Business',
			'job_title' => 'Supervisor, Telesales MCMC',
			'total' => 2
			));
			Position::create(array('position_id' => 551,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'MCMC Business',
			'job_title' => 'Team Leader, Telesales',
			'total' => 1
			));
			Position::create(array('position_id' => 552,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'MCMC Business',
			'job_title' => 'Team Manager, MCMC',
			'total' => 1
			));
			Position::create(array('position_id' => 553,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'MCMC Business',
			'job_title' => 'Team Manager, New Acquisition',
			'total' => 1
			));
			Position::create(array('position_id' => 554,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'MCMC Business',
			'job_title' => 'Telesales Tip Up & MCMC',
			'total' => 1
			));
			Position::create(array('position_id' => 555,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Personal Loan Product',
			'job_title' => 'Manager, Product Management - Revolving Cash',
			'total' => 1
			));
			Position::create(array('position_id' => 556,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Personal Loan Product',
			'job_title' => 'Manager, Product Management - Speedy Loan',
			'total' => 1
			));
			Position::create(array('position_id' => 557,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Personal Loan Product',
			'job_title' => 'Product Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 558,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Product Management',
			'job_title' => 'General Admin and Control Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 559,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Product Management',
			'job_title' => 'Process Improvement',
			'total' => 1
			));
			Position::create(array('position_id' => 560,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Product Management',
			'job_title' => 'Product and Policy Development Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 561,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Product Management',
			'job_title' => 'Product Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 562,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Product Management',
			'job_title' => 'Sale Support Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 563,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Product Management',
			'job_title' => 'Sales Administration Support Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 564,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Product Management',
			'job_title' => 'Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 565,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Product Management',
			'job_title' => 'Team Manager, HP Product Development and Implementation',
			'total' => 1
			));
			Position::create(array('position_id' => 566,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Product Management',
			'job_title' => 'Team Manager, Sales Administration Support & Quality Control',
			'total' => 1
			));
			Position::create(array('position_id' => 567,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Sales Governance',
			'job_title' => 'Sale Support Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 568,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Sales Governance',
			'job_title' => 'Sales Database and MIS Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 569,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Sales Governance',
			'job_title' => 'Sales Governance & Support Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 570,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Sales Governance',
			'job_title' => 'Sales Governance and Process Improvement Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 571,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Sales Governance',
			'job_title' => 'Sales Recruiter',
			'total' => 3
			));
			Position::create(array('position_id' => 572,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Sales Governance',
			'job_title' => 'Sales Support Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 573,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Sales Governance',
			'job_title' => 'Sales Trainer',
			'total' => 5
			));
			Position::create(array('position_id' => 574,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Sales Governance',
			'job_title' => 'Team Manager, Sales Governance and Process Improvement',
			'total' => 1
			));
			Position::create(array('position_id' => 575,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Sales Governance',
			'job_title' => 'Team Manager, Sales Recruitment',
			'total' => 1
			));
			Position::create(array('position_id' => 576,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Sales Governance',
			'job_title' => 'Team Manager, Sales Support',
			'total' => 1
			));
			Position::create(array('position_id' => 577,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Sales Governance',
			'job_title' => 'Team Manager, Sales Training',
			'total' => 1
			));
			Position::create(array('position_id' => 578,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Telesales',
			'job_title' => 'Supervisor, Telesales',
			'total' => 12
			));
			Position::create(array('position_id' => 579,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Telesales',
			'job_title' => 'Support Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 580,
			'group' => 'Retail Banking Group',
			'division' => 'Auto Finance and Personal Loan Division',
			'organization' => 'Telesales',
			'job_title' => 'Team Manager, Telesales',
			'total' => 9
			));
			Position::create(array('position_id' => 581,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'No organization',
			'job_title' => 'FEVP, Division Head, Bancassurance',
			'total' => 1
			));
			Position::create(array('position_id' => 582,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Bancassurance Products',
			'job_title' => 'Bancassurance Direct Sales Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 583,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Bancassurance Products',
			'job_title' => 'Distribution Management Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 584,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Bancassurance Products',
			'job_title' => 'Marketing and Campaign Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 585,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Bancassurance Products',
			'job_title' => 'Portfolio Analysis Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 586,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Bancassurance Products',
			'job_title' => 'Product and Partnership Management Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 587,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Bancassurance Products',
			'job_title' => 'Product Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 588,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Bancassurance Products',
			'job_title' => 'System and Regulations Support Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 589,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Bancassurance Products',
			'job_title' => 'Team Manager, Distribution Management',
			'total' => 1
			));
			Position::create(array('position_id' => 590,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Bancassurance Products',
			'job_title' => 'Team Manager, Marketing and Campaign',
			'total' => 1
			));
			Position::create(array('position_id' => 591,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Bancassurance Products',
			'job_title' => 'Team Manager, Products',
			'total' => 1
			));
			Position::create(array('position_id' => 592,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Bancassurance Products',
			'job_title' => 'Team Manager, System and Regulations Support',
			'total' => 1
			));
			Position::create(array('position_id' => 593,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Bancassurance Telesales Management',
			'job_title' => 'Bancassurance Telesales Officer',
			'total' => 56
			));
			Position::create(array('position_id' => 594,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Bancassurance Telesales Management',
			'job_title' => 'Bancassurance Telesales Portfolio Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 595,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Bancassurance Telesales Management',
			'job_title' => 'Bancassurance Telesales Support Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 596,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Bancassurance Telesales Management',
			'job_title' => 'Bancassurance Telesales System and Process Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 597,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Bancassurance Telesales Management',
			'job_title' => 'Manager, Telesales',
			'total' => 1
			));
			Position::create(array('position_id' => 598,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Bancassurance Telesales Management',
			'job_title' => 'Sales Quality Assurance Officer (Telesales)',
			'total' => 5
			));
			Position::create(array('position_id' => 599,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Bancassurance Telesales Management',
			'job_title' => 'Supervisor, Bancassurance Telesales',
			'total' => 5
			));
			Position::create(array('position_id' => 600,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Bancassurance Telesales Management',
			'job_title' => 'Supervisor, Bancassurance Telesales Support',
			'total' => 1
			));
			Position::create(array('position_id' => 601,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Bancassurance Telesales Management',
			'job_title' => 'Team Manager, Bancassurance Telesales',
			'total' => 1
			));
			Position::create(array('position_id' => 602,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Bancassurance Telesales Management',
			'job_title' => 'Telesales Officer - Life Insurance (Contract)',
			'total' => 1
			));
			Position::create(array('position_id' => 603,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Bancassurance Telesales Management',
			'job_title' => 'Telesales Officer - Non-Life Insurance (Contract)',
			'total' => 4
			));
			Position::create(array('position_id' => 604,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Customer Service Center',
			'job_title' => 'Automatic Information & Support Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 605,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Customer Service Center',
			'job_title' => 'AVP (Project)',
			'total' => 1
			));
			Position::create(array('position_id' => 606,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Customer Service Center',
			'job_title' => 'Business Process Development Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 607,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Customer Service Center',
			'job_title' => 'Call Center Agent',
			'total' => 442
			));
			Position::create(array('position_id' => 608,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Customer Service Center',
			'job_title' => 'Call Center Agent (Retention)',
			'total' => 9
			));
			Position::create(array('position_id' => 609,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Customer Service Center',
			'job_title' => 'Call Center Operations Support Officer',
			'total' => 15
			));
			Position::create(array('position_id' => 610,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Customer Service Center',
			'job_title' => 'Customer Satisfaction Survey Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 611,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Customer Service Center',
			'job_title' => 'Customer Service and Sales Excellence Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 612,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Customer Service Center',
			'job_title' => 'Knowledge Based Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 613,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Customer Service Center',
			'job_title' => 'Manager, Call Center Operations',
			'total' => 1
			));
			Position::create(array('position_id' => 614,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Customer Service Center',
			'job_title' => 'Manager, Retail Customer Service 1',
			'total' => 1
			));
			Position::create(array('position_id' => 615,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Customer Service Center',
			'job_title' => 'Manager, Retail Customer Service 2',
			'total' => 1
			));
			Position::create(array('position_id' => 616,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Customer Service Center',
			'job_title' => 'Manager, Retail Customer Service 4',
			'total' => 1
			));
			Position::create(array('position_id' => 617,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Customer Service Center',
			'job_title' => 'Manager, Retail Customer Service 5',
			'total' => 1
			));
			Position::create(array('position_id' => 618,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Customer Service Center',
			'job_title' => 'Operating Support Assistant',
			'total' => 1
			));
			Position::create(array('position_id' => 619,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Customer Service Center',
			'job_title' => 'Performance Management & Strategic Planning Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 620,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Customer Service Center',
			'job_title' => 'Quality Assurance Officer',
			'total' => 9
			));
			Position::create(array('position_id' => 621,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Customer Service Center',
			'job_title' => 'Scheduling & Planning Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 622,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Customer Service Center',
			'job_title' => 'Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 623,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Customer Service Center',
			'job_title' => 'Supervisor, Call Center Agent',
			'total' => 33
			));
			Position::create(array('position_id' => 624,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Customer Service Center',
			'job_title' => 'Support Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 625,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Customer Service Center',
			'job_title' => 'Team Manager, Administration',
			'total' => 1
			));
			Position::create(array('position_id' => 626,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Customer Service Center',
			'job_title' => 'Team Manager, Automatic Information & Support',
			'total' => 1
			));
			Position::create(array('position_id' => 627,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Customer Service Center',
			'job_title' => 'Team Manager, Business Process Development',
			'total' => 1
			));
			Position::create(array('position_id' => 628,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Customer Service Center',
			'job_title' => 'Team Manager, Call Center Operations Support',
			'total' => 1
			));
			Position::create(array('position_id' => 629,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Customer Service Center',
			'job_title' => 'Team Manager, Customer Satisfaction Survey',
			'total' => 1
			));
			Position::create(array('position_id' => 630,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Customer Service Center',
			'job_title' => 'Team Manager, Customer Service',
			'total' => 12
			));
			Position::create(array('position_id' => 631,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Customer Service Center',
			'job_title' => 'Team Manager, Customer Service Training',
			'total' => 1
			));
			Position::create(array('position_id' => 632,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Customer Service Center',
			'job_title' => 'Team Manager, Knowledge Based',
			'total' => 1
			));
			Position::create(array('position_id' => 633,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Customer Service Center',
			'job_title' => 'Team Manager, Performance Management & Strategic Planning',
			'total' => 1
			));
			Position::create(array('position_id' => 634,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Customer Service Center',
			'job_title' => 'Team Manager, Service Quality Assurance',
			'total' => 1
			));
			Position::create(array('position_id' => 635,
			'group' => 'Retail Banking Group',
			'division' => 'Bancassurance Division',
			'organization' => 'Customer Service Center',
			'job_title' => 'Training and Development Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 636,
			'group' => 'Retail Banking Group',
			'division' => 'Credit and Debit Cards Division',
			'organization' => 'No organization',
			'job_title' => 'EVP, Division Head, Credit & Debit Cards',
			'total' => 1
			));
			Position::create(array('position_id' => 637,
			'group' => 'Retail Banking Group',
			'division' => 'Credit and Debit Cards Division',
			'organization' => 'No organization',
			'job_title' => 'Secretary to EVP, Division Head, Credit & Debit Cards',
			'total' => 1
			));
			Position::create(array('position_id' => 638,
			'group' => 'Retail Banking Group',
			'division' => 'Credit and Debit Cards Division',
			'organization' => 'Credit Card Acquiring',
			'job_title' => 'Account Analyst',
			'total' => 1
			));
			Position::create(array('position_id' => 639,
			'group' => 'Retail Banking Group',
			'division' => 'Credit and Debit Cards Division',
			'organization' => 'Credit Card Acquiring',
			'job_title' => 'Manager, Credit Card Acquiring',
			'total' => 1
			));
			Position::create(array('position_id' => 640,
			'group' => 'Retail Banking Group',
			'division' => 'Credit and Debit Cards Division',
			'organization' => 'Credit Card Acquiring',
			'job_title' => 'Manager, Merchant Acquisition',
			'total' => 9
			));
			Position::create(array('position_id' => 641,
			'group' => 'Retail Banking Group',
			'division' => 'Credit and Debit Cards Division',
			'organization' => 'Credit Card Acquiring',
			'job_title' => 'Merchant Acquisition Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 642,
			'group' => 'Retail Banking Group',
			'division' => 'Credit and Debit Cards Division',
			'organization' => 'Credit Card Acquiring',
			'job_title' => 'Senior Business Analyst - Credit Card Acquiring',
			'total' => 1
			));
			Position::create(array('position_id' => 643,
			'group' => 'Retail Banking Group',
			'division' => 'Credit and Debit Cards Division',
			'organization' => 'Credit Card Acquiring',
			'job_title' => 'Team Manager, Merchant Products',
			'total' => 1
			));
			Position::create(array('position_id' => 644,
			'group' => 'Retail Banking Group',
			'division' => 'Credit and Debit Cards Division',
			'organization' => 'Credit Card Products',
			'job_title' => 'Installment Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 645,
			'group' => 'Retail Banking Group',
			'division' => 'Credit and Debit Cards Division',
			'organization' => 'Credit Card Products',
			'job_title' => 'Manager, Credit Card Products',
			'total' => 1
			));
			Position::create(array('position_id' => 646,
			'group' => 'Retail Banking Group',
			'division' => 'Credit and Debit Cards Division',
			'organization' => 'Credit Card Products',
			'job_title' => 'Manager, Portfolio Management',
			'total' => 1
			));
			Position::create(array('position_id' => 647,
			'group' => 'Retail Banking Group',
			'division' => 'Credit and Debit Cards Division',
			'organization' => 'Credit Card Products',
			'job_title' => 'Product Officer',
			'total' => 22
			));
			Position::create(array('position_id' => 648,
			'group' => 'Retail Banking Group',
			'division' => 'Credit and Debit Cards Division',
			'organization' => 'Credit Card Products',
			'job_title' => 'Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 649,
			'group' => 'Retail Banking Group',
			'division' => 'Credit and Debit Cards Division',
			'organization' => 'Credit Card Products',
			'job_title' => 'Support Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 650,
			'group' => 'Retail Banking Group',
			'division' => 'Credit and Debit Cards Division',
			'organization' => 'Credit Card Products',
			'job_title' => 'Team Manager, Excellent Operation',
			'total' => 1
			));
			Position::create(array('position_id' => 651,
			'group' => 'Retail Banking Group',
			'division' => 'Credit and Debit Cards Division',
			'organization' => 'Credit Card Products',
			'job_title' => 'Team Manager, Installment',
			'total' => 1
			));
			Position::create(array('position_id' => 652,
			'group' => 'Retail Banking Group',
			'division' => 'Credit and Debit Cards Division',
			'organization' => 'Credit Card Products',
			'job_title' => 'Team Manager, Usage',
			'total' => 1
			));
			Position::create(array('position_id' => 653,
			'group' => 'Retail Banking Group',
			'division' => 'Credit and Debit Cards Division',
			'organization' => 'Fee Based & Debit Card Products',
			'job_title' => 'Product Officer',
			'total' => 7
			));
			Position::create(array('position_id' => 654,
			'group' => 'Retail Banking Group',
			'division' => 'Credit and Debit Cards Division',
			'organization' => 'Strategic Planning and New Business Development',
			'job_title' => 'Product Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 655,
			'group' => 'Retail Banking Group',
			'division' => 'Credit and Debit Cards Division',
			'organization' => 'Strategic Planning and New Business Development',
			'job_title' => 'Team Manager, Credit Cards',
			'total' => 1
			));
			Position::create(array('position_id' => 656,
			'group' => 'Retail Banking Group',
			'division' => 'Credit Card and Personal Loan Division',
			'organization' => 'No organization',
			'job_title' => 'Manager, Direct Sales and Telesales Management',
			'total' => 1
			));
			Position::create(array('position_id' => 657,
			'group' => 'Retail Banking Group',
			'division' => 'Credit Card and Personal Loan Division',
			'organization' => 'No organization',
			'job_title' => 'Manager, Sales Governance & Support',
			'total' => 1
			));
			Position::create(array('position_id' => 658,
			'group' => 'Retail Banking Group',
			'division' => 'Credit Card and Personal Loan Division',
			'organization' => 'No organization',
			'job_title' => 'Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 659,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'No organization',
			'job_title' => 'FEVP, Division Head, Customer Segment',
			'total' => 1
			));
			Position::create(array('position_id' => 660,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'No organization',
			'job_title' => 'Secretary to Division Head, Customer Segment',
			'total' => 1
			));
			Position::create(array('position_id' => 661,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Affluent & Private Banking Customer Marketing',
			'job_title' => 'Consumer Market Insight Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 662,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Affluent & Private Banking Customer Marketing',
			'job_title' => 'Manager, Brand Building & Club Loyalty Management',
			'total' => 1
			));
			Position::create(array('position_id' => 663,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Affluent & Private Banking Customer Marketing',
			'job_title' => 'Manager, Customer Insight-Affluent',
			'total' => 1
			));
			Position::create(array('position_id' => 664,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Affluent & Private Banking Customer Marketing',
			'job_title' => 'Manager, Customer Segment Strategy',
			'total' => 1
			));
			Position::create(array('position_id' => 665,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Affluent & Private Banking Customer Marketing',
			'job_title' => 'Manager, Marketing and Customer Service',
			'total' => 1
			));
			Position::create(array('position_id' => 666,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Affluent & Private Banking Customer Marketing',
			'job_title' => 'Manager, Product Innovation & Branch Transformation',
			'total' => 1
			));
			Position::create(array('position_id' => 667,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Affluent & Private Banking Customer Marketing',
			'job_title' => 'Marketing Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 668,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Affluent & Private Banking Customer Marketing',
			'job_title' => 'PB Event & Customer Relations Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 669,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Affluent & Private Banking Customer Marketing',
			'job_title' => 'SCB First Brand Building & Loyalty Program Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 670,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Affluent & Private Banking Customer Marketing',
			'job_title' => 'Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 671,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Affluent & Private Banking Customer Marketing',
			'job_title' => 'Team Manager, Consumer Market Insight',
			'total' => 1
			));
			Position::create(array('position_id' => 672,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Affluent Customer Segment',
			'job_title' => 'EVP, Affluent',
			'total' => 1
			));
			Position::create(array('position_id' => 673,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'BBG Customer Relationship Mgt Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 674,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'CI Investigation, Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 675,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'CI Investigation, Supervisor',
			'total' => 1
			));
			Position::create(array('position_id' => 676,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'CI. Data Capture Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 677,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'CI. Inspection & Quality Assurance Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 678,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'CI. Maintenance Officer',
			'total' => 9
			));
			Position::create(array('position_id' => 679,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Commercial Cross Sales, Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 680,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'CRM Business Innovation,Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 681,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Customer Information Correction Officer',
			'total' => 7
			));
			Position::create(array('position_id' => 682,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Exposure Control, Supervisor',
			'total' => 1
			));
			Position::create(array('position_id' => 683,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Manager, Commercial Cross-Sell & Total Employee Solution',
			'total' => 1
			));
			Position::create(array('position_id' => 684,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Manager, CRM Analytics',
			'total' => 1
			));
			Position::create(array('position_id' => 685,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Manager, Data Investigation and Signature Control',
			'total' => 1
			));
			Position::create(array('position_id' => 686,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Manager, Total Employee Solution',
			'total' => 1
			));
			Position::create(array('position_id' => 687,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Manager,Customer Database Management',
			'total' => 1
			));
			Position::create(array('position_id' => 688,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Manager,Customer Information Management',
			'total' => 1
			));
			Position::create(array('position_id' => 689,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Manager,Customer Relationship Management',
			'total' => 1
			));
			Position::create(array('position_id' => 690,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Retail Planning Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 691,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 692,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Senior Specialist, Business Intelligence',
			'total' => 1
			));
			Position::create(array('position_id' => 693,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Senior Specialist, CI Maintenance Unit',
			'total' => 1
			));
			Position::create(array('position_id' => 694,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Senior Specialist, CRM Datamart',
			'total' => 1
			));
			Position::create(array('position_id' => 695,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Senior Specialist, CRM MIS and reports',
			'total' => 1
			));
			Position::create(array('position_id' => 696,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Senior Specialist, CRM Solution',
			'total' => 1
			));
			Position::create(array('position_id' => 697,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Senior Specialist, Database Management - Lending products',
			'total' => 1
			));
			Position::create(array('position_id' => 698,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Senior Specialist, Database Management - Wealth products',
			'total' => 1
			));
			Position::create(array('position_id' => 699,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Senior Specialist,CRM Campaign Planning & Process-Lending',
			'total' => 1
			));
			Position::create(array('position_id' => 700,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Senior Specialist,CRM Campaign Planning & Process-Wealth',
			'total' => 1
			));
			Position::create(array('position_id' => 701,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Senior Specialist,CRM Campaign Planning&Process-Customer',
			'total' => 1
			));
			Position::create(array('position_id' => 702,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Senior Specialist,Customer Analytics-Wealth & Upper Segment',
			'total' => 1
			));
			Position::create(array('position_id' => 703,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Signature Control Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 704,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Specialist',
			'total' => 1
			));
			Position::create(array('position_id' => 705,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Specialist, Business Intelligence',
			'total' => 2
			));
			Position::create(array('position_id' => 706,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Specialist, Business Intelligence - Event Based Marketing',
			'total' => 2
			));
			Position::create(array('position_id' => 707,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Specialist, CI Correction',
			'total' => 1
			));
			Position::create(array('position_id' => 708,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Specialist, CI Inspection and Quality Assurance',
			'total' => 1
			));
			Position::create(array('position_id' => 709,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Specialist, CI Investigation & ECU',
			'total' => 1
			));
			Position::create(array('position_id' => 710,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Specialist, CI Maintenance Unit 1',
			'total' => 1
			));
			Position::create(array('position_id' => 711,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Specialist, CI Maintenance Unit 2',
			'total' => 1
			));
			Position::create(array('position_id' => 712,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Specialist, CI Signature Control',
			'total' => 1
			));
			Position::create(array('position_id' => 713,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Specialist, CI Strategic Planning',
			'total' => 2
			));
			Position::create(array('position_id' => 714,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Specialist, CRM Campaign Planning & Process',
			'total' => 1
			));
			Position::create(array('position_id' => 715,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Specialist, CRM Datamart',
			'total' => 3
			));
			Position::create(array('position_id' => 716,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Specialist, CRM MIS and reports',
			'total' => 1
			));
			Position::create(array('position_id' => 717,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Specialist, Customer Analytics - Lending & Mass Segment',
			'total' => 4
			));
			Position::create(array('position_id' => 718,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Specialist, Customer Analytics - Wealth & Upper Segment',
			'total' => 5
			));
			Position::create(array('position_id' => 719,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Specialist, Customer Complaint Resolution',
			'total' => 3
			));
			Position::create(array('position_id' => 720,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Specialist, Database Management - Lending products',
			'total' => 2
			));
			Position::create(array('position_id' => 721,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Specialist, Database Management - Wealth products',
			'total' => 4
			));
			Position::create(array('position_id' => 722,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Specialist, New Business & Process Development',
			'total' => 2
			));
			Position::create(array('position_id' => 723,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Specialist, RM-Total Employee Solution',
			'total' => 1
			));
			Position::create(array('position_id' => 724,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Specialist,CI Data Capture',
			'total' => 1
			));
			Position::create(array('position_id' => 725,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Specialist,CRM Campaign Planning & Process-Customer Segment',
			'total' => 1
			));
			Position::create(array('position_id' => 726,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Specialist,CRM Campaign Planning & Process-Lending products',
			'total' => 1
			));
			Position::create(array('position_id' => 727,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Team Manager, CI Operation & Quality Control',
			'total' => 1
			));
			Position::create(array('position_id' => 728,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Team Manager, CI Strategic Planning',
			'total' => 1
			));
			Position::create(array('position_id' => 729,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Team Manager, CRM Business Innovation',
			'total' => 1
			));
			Position::create(array('position_id' => 730,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Team Manager, CRM Campaign Management',
			'total' => 1
			));
			Position::create(array('position_id' => 731,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Team Manager, Customer Complaint Resolution',
			'total' => 1
			));
			Position::create(array('position_id' => 732,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Team Manager, New Business & Process Development',
			'total' => 1
			));
			Position::create(array('position_id' => 733,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'Team Mgr, BBG Customer Relationship Management',
			'total' => 1
			));
			Position::create(array('position_id' => 734,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Relationship Management',
			'job_title' => 'VP (Level)',
			'total' => 1
			));
			Position::create(array('position_id' => 735,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Segment Strategy',
			'job_title' => 'Customer Segment Strategy, Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 736,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Customer Segment Strategy',
			'job_title' => 'Manager, Customer Segment Strategy',
			'total' => 1
			));
			Position::create(array('position_id' => 737,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Mass Customer Segment',
			'job_title' => 'AVP',
			'total' => 1
			));
			Position::create(array('position_id' => 738,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Mass Customer Segment',
			'job_title' => 'Content Management Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 739,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Mass Customer Segment',
			'job_title' => 'Digital Strategist',
			'total' => 4
			));
			Position::create(array('position_id' => 740,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Mass Customer Segment',
			'job_title' => 'E-Channels Customer Experience Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 741,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Mass Customer Segment',
			'job_title' => 'E-Channels Customer Experience Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 742,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Mass Customer Segment',
			'job_title' => 'E-Channels Products Development Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 743,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Mass Customer Segment',
			'job_title' => 'E-Channels Products Development Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 744,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Mass Customer Segment',
			'job_title' => 'E-Channels Strategy and Communication Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 745,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Mass Customer Segment',
			'job_title' => 'E-Channels Strategy and Communication Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 746,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Mass Customer Segment',
			'job_title' => 'Editor',
			'total' => 1
			));
			Position::create(array('position_id' => 747,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Mass Customer Segment',
			'job_title' => 'EVP, Head of Mass Customer Segment and Future Banking',
			'total' => 1
			));
			Position::create(array('position_id' => 748,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Mass Customer Segment',
			'job_title' => 'Graphic Designer',
			'total' => 2
			));
			Position::create(array('position_id' => 749,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Mass Customer Segment',
			'job_title' => 'Manager, Digital & Customer Experience',
			'total' => 1
			));
			Position::create(array('position_id' => 750,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Mass Customer Segment',
			'job_title' => 'Manager, Insight & Strategic Planning',
			'total' => 1
			));
			Position::create(array('position_id' => 751,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Mass Customer Segment',
			'job_title' => 'Manager, Security - Founder Segment',
			'total' => 1
			));
			Position::create(array('position_id' => 752,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Mass Customer Segment',
			'job_title' => 'Mass Analytics & Strategic Planning Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 753,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Mass Customer Segment',
			'job_title' => 'Officer 1 (Pending)',
			'total' => 1
			));
			Position::create(array('position_id' => 754,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Mass Customer Segment',
			'job_title' => 'Product Development Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 755,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Mass Customer Segment',
			'job_title' => 'Product Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 756,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Mass Customer Segment',
			'job_title' => 'Project Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 757,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Mass Customer Segment',
			'job_title' => 'Secretary to Head of Mass Customer Segment & Future Banking',
			'total' => 1
			));
			Position::create(array('position_id' => 758,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Mass Customer Segment',
			'job_title' => 'Strategist - BSD',
			'total' => 1
			));
			Position::create(array('position_id' => 759,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Mass Customer Segment',
			'job_title' => 'SVP, Head of Digital Banking',
			'total' => 1
			));
			Position::create(array('position_id' => 760,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Mass Customer Segment',
			'job_title' => 'UX Designer',
			'total' => 4
			));
			Position::create(array('position_id' => 761,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Retail Marketing',
			'job_title' => 'Consumer Market lnsight Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 762,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Retail Marketing',
			'job_title' => 'Content Design Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 763,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Retail Marketing',
			'job_title' => 'Editor',
			'total' => 1
			));
			Position::create(array('position_id' => 764,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Retail Marketing',
			'job_title' => 'Event Promotions Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 765,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Retail Marketing',
			'job_title' => 'Graphic Designer',
			'total' => 6
			));
			Position::create(array('position_id' => 766,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Retail Marketing',
			'job_title' => 'Manager, Marketing Communication',
			'total' => 1
			));
			Position::create(array('position_id' => 767,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Retail Marketing',
			'job_title' => 'Manager, Strategic Communication Planning',
			'total' => 1
			));
			Position::create(array('position_id' => 768,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Retail Marketing',
			'job_title' => 'Marketing Intelligence, Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 769,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Retail Marketing',
			'job_title' => 'Marketing Officer',
			'total' => 17
			));
			Position::create(array('position_id' => 770,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Retail Marketing',
			'job_title' => 'Secretary',
			'total' => 2
			));
			Position::create(array('position_id' => 771,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Retail Marketing',
			'job_title' => 'Strategic Communication Planning Officer',
			'total' => 10
			));
			Position::create(array('position_id' => 772,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Retail Marketing',
			'job_title' => 'Strategic Communication Planning Staff',
			'total' => 5
			));
			Position::create(array('position_id' => 773,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Retail Marketing',
			'job_title' => 'Team Manager, Campaign Promotions',
			'total' => 1
			));
			Position::create(array('position_id' => 774,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Retail Marketing',
			'job_title' => 'Team Manager, Channel Implementation',
			'total' => 1
			));
			Position::create(array('position_id' => 775,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Retail Marketing',
			'job_title' => 'Team Manager, Event Promotions',
			'total' => 1
			));
			Position::create(array('position_id' => 776,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Retail Marketing',
			'job_title' => 'Team Manager, Media',
			'total' => 1
			));
			Position::create(array('position_id' => 777,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Retail Marketing',
			'job_title' => 'Team Manager, Premiums and Promotions',
			'total' => 1
			));
			Position::create(array('position_id' => 778,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Special Market',
			'job_title' => 'Manager, Customer Service',
			'total' => 8
			));
			Position::create(array('position_id' => 779,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Special Market',
			'job_title' => 'Manager, Special Market',
			'total' => 1
			));
			Position::create(array('position_id' => 780,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Special Market',
			'job_title' => 'Manager,Customer Service',
			'total' => 1
			));
			Position::create(array('position_id' => 781,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Special Market',
			'job_title' => 'Marketing Operation, Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 782,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Special Market',
			'job_title' => 'Relationship Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 783,
			'group' => 'Retail Banking Group',
			'division' => 'Customer Segment Division',
			'organization' => 'Special Market',
			'job_title' => 'Special Market Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 784,
			'group' => 'Retail Banking Group',
			'division' => 'Financial Crime & Security Services Division',
			'organization' => 'No organization',
			'job_title' => 'FEVP, Division Head, Financial Crime & Security Services',
			'total' => 1
			));
			Position::create(array('position_id' => 785,
			'group' => 'Retail Banking Group',
			'division' => 'Financial Crime & Security Services Division',
			'organization' => 'No organization',
			'job_title' => 'Secretary to Division Head,Financial Crime&Security Services',
			'total' => 1
			));
			Position::create(array('position_id' => 786,
			'group' => 'Retail Banking Group',
			'division' => 'Financial Crime & Security Services Division',
			'organization' => 'Corporate Security Management',
			'job_title' => 'Manager, Building Security - Head Office & Branches',
			'total' => 1
			));
			Position::create(array('position_id' => 787,
			'group' => 'Retail Banking Group',
			'division' => 'Financial Crime & Security Services Division',
			'organization' => 'Corporate Security Management',
			'job_title' => 'Manager, Corporate Security Management',
			'total' => 1
			));
			Position::create(array('position_id' => 788,
			'group' => 'Retail Banking Group',
			'division' => 'Financial Crime & Security Services Division',
			'organization' => 'Corporate Security Management',
			'job_title' => 'SC-Access & Alam Center Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 789,
			'group' => 'Retail Banking Group',
			'division' => 'Financial Crime & Security Services Division',
			'organization' => 'Corporate Security Management',
			'job_title' => 'SC-CCTV Center Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 790,
			'group' => 'Retail Banking Group',
			'division' => 'Financial Crime & Security Services Division',
			'organization' => 'Corporate Security Management',
			'job_title' => 'Supervisor, Building Security-Chaengwattana Center',
			'total' => 1
			));
			Position::create(array('position_id' => 791,
			'group' => 'Retail Banking Group',
			'division' => 'Financial Crime & Security Services Division',
			'organization' => 'Corporate Security Management',
			'job_title' => 'Supervisor, Building Security-Chidlom Center',
			'total' => 1
			));
			Position::create(array('position_id' => 792,
			'group' => 'Retail Banking Group',
			'division' => 'Financial Crime & Security Services Division',
			'organization' => 'Corporate Security Management',
			'job_title' => 'Supervisor, Building Security-Ratchayothin',
			'total' => 1
			));
			Position::create(array('position_id' => 793,
			'group' => 'Retail Banking Group',
			'division' => 'Financial Crime & Security Services Division',
			'organization' => 'External Security and Investigation',
			'job_title' => 'External Security & Investigation Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 794,
			'group' => 'Retail Banking Group',
			'division' => 'Financial Crime & Security Services Division',
			'organization' => 'External Security and Investigation',
			'job_title' => 'Manager, External Security & Investigation',
			'total' => 1
			));
			Position::create(array('position_id' => 795,
			'group' => 'Retail Banking Group',
			'division' => 'Financial Crime & Security Services Division',
			'organization' => 'External Security and Investigation',
			'job_title' => 'Prevention & Investigation Banking Loan Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 796,
			'group' => 'Retail Banking Group',
			'division' => 'Financial Crime & Security Services Division',
			'organization' => 'External Security and Investigation',
			'job_title' => 'Supervisor, Prevention & Investigation Banking Loan',
			'total' => 1
			));
			Position::create(array('position_id' => 797,
			'group' => 'Retail Banking Group',
			'division' => 'Financial Crime & Security Services Division',
			'organization' => 'Fraud Analytical & MIS',
			'job_title' => 'Credit Card Fraud Monitoring Officer',
			'total' => 8
			));
			Position::create(array('position_id' => 798,
			'group' => 'Retail Banking Group',
			'division' => 'Financial Crime & Security Services Division',
			'organization' => 'Fraud Analytical & MIS',
			'job_title' => 'Fraud Analytical & MIS Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 799,
			'group' => 'Retail Banking Group',
			'division' => 'Financial Crime & Security Services Division',
			'organization' => 'Fraud Analytical & MIS',
			'job_title' => 'Manager, Fraud Analytical & MIS',
			'total' => 1
			));
			Position::create(array('position_id' => 800,
			'group' => 'Retail Banking Group',
			'division' => 'Financial Crime & Security Services Division',
			'organization' => 'Fraud Analytical & MIS',
			'job_title' => 'Supervisor, Credit Card Fraud Monitoring',
			'total' => 1
			));
			Position::create(array('position_id' => 801,
			'group' => 'Retail Banking Group',
			'division' => 'Financial Crime & Security Services Division',
			'organization' => 'Fraud Analytical & MIS',
			'job_title' => 'Supervisor, Fraud Analytical & MIS',
			'total' => 1
			));
			Position::create(array('position_id' => 802,
			'group' => 'Retail Banking Group',
			'division' => 'Financial Crime & Security Services Division',
			'organization' => 'Fraud Control',
			'job_title' => 'Acquirer Fraud Investigation Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 803,
			'group' => 'Retail Banking Group',
			'division' => 'Financial Crime & Security Services Division',
			'organization' => 'Fraud Control',
			'job_title' => 'Fraud Control (Debit Card & Other Products) Officer',
			'total' => 7
			));
			Position::create(array('position_id' => 804,
			'group' => 'Retail Banking Group',
			'division' => 'Financial Crime & Security Services Division',
			'organization' => 'Fraud Control',
			'job_title' => 'Fraud Investigation (Debit Card & Other Products) Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 805,
			'group' => 'Retail Banking Group',
			'division' => 'Financial Crime & Security Services Division',
			'organization' => 'Fraud Control',
			'job_title' => 'Issuer Fraud Investigation Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 806,
			'group' => 'Retail Banking Group',
			'division' => 'Financial Crime & Security Services Division',
			'organization' => 'Fraud Control',
			'job_title' => 'Manager,Fraud Control',
			'total' => 1
			));
			Position::create(array('position_id' => 807,
			'group' => 'Retail Banking Group',
			'division' => 'Financial Crime & Security Services Division',
			'organization' => 'Fraud Control',
			'job_title' => 'Team Manager, Acquirer Fraud Investigation',
			'total' => 1
			));
			Position::create(array('position_id' => 808,
			'group' => 'Retail Banking Group',
			'division' => 'Financial Crime & Security Services Division',
			'organization' => 'Fraud Control',
			'job_title' => 'Team Manager, Fraud Control (Debit Card & Other Products)',
			'total' => 1
			));
			Position::create(array('position_id' => 809,
			'group' => 'Retail Banking Group',
			'division' => 'Financial Crime & Security Services Division',
			'organization' => 'Fraud Control',
			'job_title' => 'Team Manager, Issuer Fraud Investigation',
			'total' => 1
			));
			Position::create(array('position_id' => 810,
			'group' => 'Retail Banking Group',
			'division' => 'Financial Crime & Security Services Division',
			'organization' => 'Fraud Control',
			'job_title' => 'Team Manager,Fraud Investigation (Debit Card&Other Products)',
			'total' => 1
			));
			Position::create(array('position_id' => 811,
			'group' => 'Retail Banking Group',
			'division' => 'Financial Crime & Security Services Division',
			'organization' => 'Security & Investigation',
			'job_title' => 'Investigation Officer',
			'total' => 8
			));
			Position::create(array('position_id' => 812,
			'group' => 'Retail Banking Group',
			'division' => 'Financial Crime & Security Services Division',
			'organization' => 'Security & Investigation',
			'job_title' => 'Manager, Security & Investigation',
			'total' => 1
			));
			Position::create(array('position_id' => 813,
			'group' => 'Retail Banking Group',
			'division' => 'Financial Crime & Security Services Division',
			'organization' => 'Security & Investigation',
			'job_title' => 'Supervisor, Investigation',
			'total' => 1
			));
			Position::create(array('position_id' => 814,
			'group' => 'Retail Banking Group',
			'division' => 'Financial Crime & Security Services Division',
			'organization' => 'Security & Investigation',
			'job_title' => 'Team Manager, Security & Investigation',
			'total' => 2
			));
			Position::create(array('position_id' => 815,
			'group' => 'Retail Banking Group',
			'division' => 'Financial Crime & Security Services Division',
			'organization' => 'System Develop and Support',
			'job_title' => 'System Develop & Support Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 816,
			'group' => 'Retail Banking Group',
			'division' => 'Financial Crime & Security Services Division',
			'organization' => 'System Develop and Support',
			'job_title' => 'Team Manager, System Develop & Support',
			'total' => 1
			));
			Position::create(array('position_id' => 817,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'No organization',
			'job_title' => 'Legal Expense Control Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 818,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'No organization',
			'job_title' => 'Manager, Corporate Communications Support',
			'total' => 1
			));
			Position::create(array('position_id' => 819,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'No organization',
			'job_title' => 'Manager, Legal Expense Control',
			'total' => 1
			));
			Position::create(array('position_id' => 820,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'No organization',
			'job_title' => 'Manager, MIS, Administration and Support Management',
			'total' => 1
			));
			Position::create(array('position_id' => 821,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'No organization',
			'job_title' => 'MSRO Management Trainee',
			'total' => 6
			));
			Position::create(array('position_id' => 822,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'No organization',
			'job_title' => 'Team Manager, New Initiative Project Management',
			'total' => 2
			));
			Position::create(array('position_id' => 823,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Building Management',
			'job_title' => 'Building Operations & Maintenance-Data Center&ICT Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 824,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Building Management',
			'job_title' => 'Building Operations & Maintenance-East, West & RCP Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 825,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Building Management',
			'job_title' => 'Building Operations and Maintenance-Chidlom Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 826,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Building Management',
			'job_title' => 'Building Operations and Maintenance-HO Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 827,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Building Management',
			'job_title' => 'Building Services Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 828,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Building Management',
			'job_title' => 'Construction, Renovation of Branch and other Premise Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 829,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Building Management',
			'job_title' => 'Design Layout and Configurations Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 830,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Building Management',
			'job_title' => 'Maintenance of Branch Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 831,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Building Management',
			'job_title' => 'Manager, Building Management',
			'total' => 1
			));
			Position::create(array('position_id' => 832,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Building Management',
			'job_title' => 'Manager, Building Operations and Maintenance',
			'total' => 1
			));
			Position::create(array('position_id' => 833,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Building Management',
			'job_title' => 'Manager, Building Services',
			'total' => 1
			));
			Position::create(array('position_id' => 834,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Building Management',
			'job_title' => 'Manager, Design Layout and Configurations',
			'total' => 2
			));
			Position::create(array('position_id' => 835,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Building Management',
			'job_title' => 'MIS-Building Management Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 836,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Building Management',
			'job_title' => 'Supervisor, Building Operations and Maintenance-Chidlom',
			'total' => 1
			));
			Position::create(array('position_id' => 837,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Building Management',
			'job_title' => 'Team Manager, Building Operations and Maintenance-Chidlom',
			'total' => 1
			));
			Position::create(array('position_id' => 838,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Building Management',
			'job_title' => 'Team Manager, Building Operations and Maintenance-HO',
			'total' => 1
			));
			Position::create(array('position_id' => 839,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Building Management',
			'job_title' => 'Team Manager, Building Services',
			'total' => 2
			));
			Position::create(array('position_id' => 840,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Building Management',
			'job_title' => 'Team Manager, Construction, Renovation and Maintenance',
			'total' => 1
			));
			Position::create(array('position_id' => 841,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Building Management',
			'job_title' => 'Team Manager, Maintenance of Branch',
			'total' => 1
			));
			Position::create(array('position_id' => 842,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Building Management',
			'job_title' => 'Team Manager, MIS and Support',
			'total' => 1
			));
			Position::create(array('position_id' => 843,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Building Management',
			'job_title' => 'TM, Building Operations & Maintenance-East, West & RCP',
			'total' => 1
			));
			Position::create(array('position_id' => 844,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Performance Management',
			'job_title' => 'Team Manager, Wealth Financial Analysis',
			'total' => 1
			));
			Position::create(array('position_id' => 845,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Performance Management',
			'job_title' => 'Wealth Financial Analysis Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 846,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Performance Management-BBG',
			'job_title' => 'BBG Budgeting Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 847,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Performance Management-BBG',
			'job_title' => 'Consolidation and Reporting Officer',
			'total' => 7
			));
			Position::create(array('position_id' => 848,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Performance Management-BBG',
			'job_title' => 'Manager, Performance Management-BBG',
			'total' => 1
			));
			Position::create(array('position_id' => 849,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Performance Management-BBG',
			'job_title' => 'Team Manager, BBG Budgeting',
			'total' => 1
			));
			Position::create(array('position_id' => 850,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Performance Management-BBG',
			'job_title' => 'Team Manager, Consolidation and Reporting',
			'total' => 1
			));
			Position::create(array('position_id' => 851,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Performance Management-BBG',
			'job_title' => 'Team Manager, Medium Business Financial Analysis',
			'total' => 1
			));
			Position::create(array('position_id' => 852,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Performance Management-BBG',
			'job_title' => 'Team Manager, Small Business Financial Analysis',
			'total' => 1
			));
			Position::create(array('position_id' => 853,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Performance Management-RBG',
			'job_title' => 'Auto and Speedy Financial Analysis Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 854,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Performance Management-RBG',
			'job_title' => 'Budgeting, Controlling and Branches KPI Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 855,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Performance Management-RBG',
			'job_title' => 'Customer Segment and Card Financial Analysis Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 856,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Performance Management-RBG',
			'job_title' => 'Manager, Auto and Speedy Financial Analysis',
			'total' => 1
			));
			Position::create(array('position_id' => 857,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Performance Management-RBG',
			'job_title' => 'Manager, Budgeting, Controlling and Branches KPI',
			'total' => 1
			));
			Position::create(array('position_id' => 858,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Performance Management-RBG',
			'job_title' => 'Manager, Customer Segment and Card Financial Analysis',
			'total' => 1
			));
			Position::create(array('position_id' => 859,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Performance Management-RBG',
			'job_title' => 'Manager, MIS and Data Analysis-RBG',
			'total' => 1
			));
			Position::create(array('position_id' => 860,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Performance Management-RBG',
			'job_title' => 'Manager, Mortgage and SSME Financial Analysis',
			'total' => 1
			));
			Position::create(array('position_id' => 861,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Performance Management-RBG',
			'job_title' => 'Manager, Performance Management-RBG',
			'total' => 1
			));
			Position::create(array('position_id' => 862,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Performance Management-RBG',
			'job_title' => 'Manager, Premium Management',
			'total' => 1
			));
			Position::create(array('position_id' => 863,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Performance Management-RBG',
			'job_title' => 'MIS and Data Analysis-RBG Officer',
			'total' => 13
			));
			Position::create(array('position_id' => 864,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Performance Management-RBG',
			'job_title' => 'Mortgage and SSME Financial Analysis Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 865,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Performance Management-RBG',
			'job_title' => 'PFM-Warehouse Management Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 866,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Performance Management-RBG',
			'job_title' => 'Team Manager, Auto and Speedy Financial Analysis',
			'total' => 1
			));
			Position::create(array('position_id' => 867,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Performance Management-RBG',
			'job_title' => 'Team Manager, MIS and Data Analysis-RBG',
			'total' => 1
			));
			Position::create(array('position_id' => 868,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Performance Management-RBG',
			'job_title' => 'Team Mgr., Customer Segment and Card Financial Analysis',
			'total' => 1
			));
			Position::create(array('position_id' => 869,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Procurement',
			'job_title' => 'General Procurement-Building and Branches Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 870,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Procurement',
			'job_title' => 'General Procurement-Contract & Process Control Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 871,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Procurement',
			'job_title' => 'General Procurement-General and Premium Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 872,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Procurement',
			'job_title' => 'General Procurement-Outsource Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 873,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Procurement',
			'job_title' => 'General Procurement-Support Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 874,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Procurement',
			'job_title' => 'Manager, General Procurement-Building and Branches',
			'total' => 1
			));
			Position::create(array('position_id' => 875,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Procurement',
			'job_title' => 'Manager, General Procurement-General and Premium',
			'total' => 1
			));
			Position::create(array('position_id' => 876,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Procurement',
			'job_title' => 'Manager, General Procurement-Outsource',
			'total' => 1
			));
			Position::create(array('position_id' => 877,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Procurement',
			'job_title' => 'Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 878,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Procurement',
			'job_title' => 'Team Manager, Contract/Insurance Administration',
			'total' => 1
			));
			Position::create(array('position_id' => 879,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Procurement',
			'job_title' => 'Team Manager, General Procurement-Building and Branches',
			'total' => 1
			));
			Position::create(array('position_id' => 880,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Procurement',
			'job_title' => 'Team Manager, General Procurement-Support',
			'total' => 1
			));
			Position::create(array('position_id' => 881,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Procurement',
			'job_title' => 'Team Mgr., General Procurement-Contract & Process Control',
			'total' => 1
			));
			Position::create(array('position_id' => 882,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Retail Planning, Optimization & Project Management',
			'job_title' => 'ATM Optimization Officer',
			'total' => 7
			));
			Position::create(array('position_id' => 883,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Retail Planning, Optimization & Project Management',
			'job_title' => 'Branch Optimization Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 884,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Retail Planning, Optimization & Project Management',
			'job_title' => 'Cash Center Optimization Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 885,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Retail Planning, Optimization & Project Management',
			'job_title' => 'Cash Planner - ATM',
			'total' => 1
			));
			Position::create(array('position_id' => 886,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Retail Planning, Optimization & Project Management',
			'job_title' => 'Cash Planner-ATM Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 887,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Retail Planning, Optimization & Project Management',
			'job_title' => 'Manager, Cash Forecasting and Optimization',
			'total' => 1
			));
			Position::create(array('position_id' => 888,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Retail Planning, Optimization & Project Management',
			'job_title' => 'Manager, Zoning and Routing Optimization',
			'total' => 1
			));
			Position::create(array('position_id' => 889,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Retail Planning, Optimization & Project Management',
			'job_title' => 'Mgr., Retail Planning, Optimization & Project Management',
			'total' => 1
			));
			Position::create(array('position_id' => 890,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Retail Planning, Optimization & Project Management',
			'job_title' => 'Project Manager',
			'total' => 2
			));
			Position::create(array('position_id' => 891,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Retail Planning, Optimization & Project Management',
			'job_title' => 'Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 892,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Retail Planning, Optimization & Project Management',
			'job_title' => 'Supervisor, Cash Planner - ATM',
			'total' => 2
			));
			Position::create(array('position_id' => 893,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Retail Planning, Optimization & Project Management',
			'job_title' => 'Team Manager, ATM Optimization',
			'total' => 1
			));
			Position::create(array('position_id' => 894,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Retail Planning, Optimization & Project Management',
			'job_title' => 'Team Manager, Branch Optimization',
			'total' => 1
			));
			Position::create(array('position_id' => 895,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Retail Planning, Optimization & Project Management',
			'job_title' => 'Team Manager, Cash Center Optimization',
			'total' => 1
			));
			Position::create(array('position_id' => 896,
			'group' => 'Retail Banking Group',
			'division' => 'Management Services and Retail Operations Division',
			'organization' => 'Retail Planning, Optimization & Project Management',
			'job_title' => 'Zoning and Routing Optimization Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 897,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'No organization',
			'job_title' => 'FEVP, Division Head, Mortgage Business',
			'total' => 1
			));
			Position::create(array('position_id' => 898,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'No organization',
			'job_title' => 'Secreatary to Division Head, Mortgage Business',
			'total' => 1
			));
			Position::create(array('position_id' => 899,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'No organization',
			'job_title' => 'Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 900,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'No organization',
			'job_title' => 'Team Manager, Mortgage Sales',
			'total' => 1
			));
			Position::create(array('position_id' => 901,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Corporate Welfare',
			'job_title' => 'Corporate Welfare Sales Officer',
			'total' => 53
			));
			Position::create(array('position_id' => 902,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Corporate Welfare',
			'job_title' => 'Network Manager, Corporate Welfare',
			'total' => 1
			));
			Position::create(array('position_id' => 903,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Corporate Welfare',
			'job_title' => 'Team Manager, Corporate Welfare Sales',
			'total' => 7
			));
			Position::create(array('position_id' => 904,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Homesure',
			'job_title' => 'Home Sure Sales Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 905,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Homesure',
			'job_title' => 'Mortgage Sales Support Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 906,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Homesure',
			'job_title' => 'Product Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 907,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Homesure',
			'job_title' => 'Team Manager, Home Sure - Products',
			'total' => 1
			));
			Position::create(array('position_id' => 908,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Homesure',
			'job_title' => 'Team Manager,Home Sure Sales',
			'total' => 2
			));
			Position::create(array('position_id' => 909,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Customer & Academy',
			'job_title' => 'After Sales Service Officer',
			'total' => 15
			));
			Position::create(array('position_id' => 910,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Customer & Academy',
			'job_title' => 'Manager, Customer Support Management',
			'total' => 1
			));
			Position::create(array('position_id' => 911,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Customer & Academy',
			'job_title' => 'Manager, Mortgage - Customer Relation',
			'total' => 1
			));
			Position::create(array('position_id' => 912,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Customer & Academy',
			'job_title' => 'Manager,Mortgage Sale Expertise',
			'total' => 1
			));
			Position::create(array('position_id' => 913,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Customer & Academy',
			'job_title' => 'Mortgage - After Sales Service Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 914,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Customer & Academy',
			'job_title' => 'Mortgage - Customer Relationship Officer',
			'total' => 27
			));
			Position::create(array('position_id' => 915,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Customer & Academy',
			'job_title' => 'Mortgage - Preventive Officer',
			'total' => 17
			));
			Position::create(array('position_id' => 916,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Customer & Academy',
			'job_title' => 'Mortgage Sale Expertise Assistant',
			'total' => 1
			));
			Position::create(array('position_id' => 917,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Customer & Academy',
			'job_title' => 'Network Manager, Mortgage Sales - General Account',
			'total' => 1
			));
			Position::create(array('position_id' => 918,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Customer & Academy',
			'job_title' => 'Team Manager, Mortgage - After Sales Service',
			'total' => 1
			));
			Position::create(array('position_id' => 919,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Customer & Academy',
			'job_title' => 'Team Manager, Mortgage - Preventive',
			'total' => 1
			));
			Position::create(array('position_id' => 920,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Customer & Academy',
			'job_title' => 'Team Manager, Mortgage Relationship',
			'total' => 2
			));
			Position::create(array('position_id' => 921,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Customer & Academy',
			'job_title' => 'Team Manager, Mortgage Sales',
			'total' => 1
			));
			Position::create(array('position_id' => 922,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Products',
			'job_title' => 'Manager, Mortgage Products',
			'total' => 1
			));
			Position::create(array('position_id' => 923,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Products',
			'job_title' => 'Manager, Mortgage Products - Project Relationship',
			'total' => 1
			));
			Position::create(array('position_id' => 924,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Products',
			'job_title' => 'Product Officer',
			'total' => 18
			));
			Position::create(array('position_id' => 925,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Products',
			'job_title' => 'Team Manager, Mortgage Products - Key Account Project',
			'total' => 1
			));
			Position::create(array('position_id' => 926,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Products',
			'job_title' => 'Team Manager, Mortgage Products - Project Relationship 1',
			'total' => 1
			));
			Position::create(array('position_id' => 927,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Products',
			'job_title' => 'Team Manager, Mortgage Products - Refinance and Initiatives',
			'total' => 1
			));
			Position::create(array('position_id' => 928,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Products',
			'job_title' => 'Team Manager, Mortgage Sales - Project Relationship 1',
			'total' => 1
			));
			Position::create(array('position_id' => 929,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Products',
			'job_title' => 'Team Manager,Mortgage Products - Mortgage Project',
			'total' => 1
			));
			Position::create(array('position_id' => 930,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Products',
			'job_title' => 'Team Mgr, Mortgage Products - Home Builder and Corp Welfare',
			'total' => 1
			));
			Position::create(array('position_id' => 931,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Products',
			'job_title' => 'Team Mgr, Mortgage Products - Major Acct & Mortgage Project',
			'total' => 1
			));
			Position::create(array('position_id' => 932,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Products - Portfolio Management',
			'job_title' => 'Manager, Mortgage Products - Portfolio and Mortgage Finance',
			'total' => 1
			));
			Position::create(array('position_id' => 933,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Products - Portfolio Management',
			'job_title' => 'Product Officer',
			'total' => 9
			));
			Position::create(array('position_id' => 934,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Products - Portfolio Management',
			'job_title' => 'Team Manager, ISA Management & Business Support',
			'total' => 1
			));
			Position::create(array('position_id' => 935,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Products - Portfolio Management',
			'job_title' => 'Team Manager,Mortgage Products - Sales Intelligence',
			'total' => 1
			));
			Position::create(array('position_id' => 936,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Products - Portfolio Management',
			'job_title' => 'Team Manager,Mortgage Products - Strategy and Portfolio',
			'total' => 1
			));
			Position::create(array('position_id' => 937,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Sales - Bangkok',
			'job_title' => 'Network Manager, Mortgage Sales - General Account',
			'total' => 2
			));
			Position::create(array('position_id' => 938,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Sales - Bangkok',
			'job_title' => 'Team Manager, Mortgage Sales',
			'total' => 1
			));
			Position::create(array('position_id' => 939,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Sales - Bangkok A',
			'job_title' => 'Mortgage Sales Officer',
			'total' => 10
			));
			Position::create(array('position_id' => 940,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Sales - Bangkok A',
			'job_title' => 'Mortgage Sales Support Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 941,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Sales - Bangkok A',
			'job_title' => 'Network Manager, Mortgage Sales - General Account',
			'total' => 1
			));
			Position::create(array('position_id' => 942,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Sales - Bangkok A',
			'job_title' => 'Regional Manager, Mortgage Sales - General Account',
			'total' => 2
			));
			Position::create(array('position_id' => 943,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Sales - Bangkok A',
			'job_title' => 'Team Manager, Mortgage Sales',
			'total' => 2
			));
			Position::create(array('position_id' => 944,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Sales - Bangkok A',
			'job_title' => 'Team Manager, Mortgage Sales - General Account',
			'total' => 9
			));
			Position::create(array('position_id' => 945,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Sales - Bangkok B',
			'job_title' => 'Mortgage Sales Officer',
			'total' => 7
			));
			Position::create(array('position_id' => 946,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Sales - Bangkok B',
			'job_title' => 'Mortgage Sales Support Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 947,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Sales - Bangkok B',
			'job_title' => 'Regional Manager, Mortgage Sales - General Account',
			'total' => 2
			));
			Position::create(array('position_id' => 948,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Sales - Bangkok B',
			'job_title' => 'Team Manager, Mortgage Sales',
			'total' => 4
			));
			Position::create(array('position_id' => 949,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Sales - Bangkok B',
			'job_title' => 'Team Manager, Mortgage Sales - General Account',
			'total' => 9
			));
			Position::create(array('position_id' => 950,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Sales - Key Account',
			'job_title' => 'Area Manager,Mortgage sales',
			'total' => 2
			));
			Position::create(array('position_id' => 951,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Sales - Key Account',
			'job_title' => 'Area Manager,Mortgage sales - Key Account',
			'total' => 7
			));
			Position::create(array('position_id' => 952,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Sales - Key Account',
			'job_title' => 'Mortgage sales - Sales Development',
			'total' => 3
			));
			Position::create(array('position_id' => 953,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Sales - Key Account',
			'job_title' => 'Mortgage Sales Officer',
			'total' => 118
			));
			Position::create(array('position_id' => 954,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Sales - Key Account',
			'job_title' => 'Mortgage Sales Support Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 955,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Sales - Key Account',
			'job_title' => 'Network Manager, Mortgage Sales - Key Account',
			'total' => 3
			));
			Position::create(array('position_id' => 956,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Sales - Key Account',
			'job_title' => 'Regional Manager, Mortgage sales - Key Account',
			'total' => 1
			));
			Position::create(array('position_id' => 957,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Sales - Key Account',
			'job_title' => 'Team Manager, Mortgage Sales',
			'total' => 7
			));
			Position::create(array('position_id' => 958,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Sales - Key Account',
			'job_title' => 'Team Manager, Mortgage sales - Key Account',
			'total' => 27
			));
			Position::create(array('position_id' => 959,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Sales - Key Account',
			'job_title' => 'Team Manager, Mortgage sales - Sales Development',
			'total' => 4
			));
			Position::create(array('position_id' => 960,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Sales - Upcountry 1',
			'job_title' => 'Area Manager,Mortgage sales',
			'total' => 1
			));
			Position::create(array('position_id' => 961,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Sales - Upcountry 1',
			'job_title' => 'Mortgage Sales Officer',
			'total' => 72
			));
			Position::create(array('position_id' => 962,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Sales - Upcountry 1',
			'job_title' => 'Network Manager, Mortgage Sales - Upcountry',
			'total' => 1
			));
			Position::create(array('position_id' => 963,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Sales - Upcountry 1',
			'job_title' => 'Regional Manager, Mortgage sales - Central Area',
			'total' => 1
			));
			Position::create(array('position_id' => 964,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Sales - Upcountry 1',
			'job_title' => 'Regional Manager, Mortgage sales - North Area',
			'total' => 1
			));
			Position::create(array('position_id' => 965,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Sales - Upcountry 1',
			'job_title' => 'Regional Manager, Mortgage sales - South Area',
			'total' => 1
			));
			Position::create(array('position_id' => 966,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Sales - Upcountry 1',
			'job_title' => 'Team Manager, Mortgage Sales',
			'total' => 20
			));
			Position::create(array('position_id' => 967,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Sales - Upcountry 2',
			'job_title' => 'Area Manager,Mortgage sales',
			'total' => 2
			));
			Position::create(array('position_id' => 968,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Sales - Upcountry 2',
			'job_title' => 'Mortgage Sales Officer',
			'total' => 47
			));
			Position::create(array('position_id' => 969,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Sales - Upcountry 2',
			'job_title' => 'Network Manager, Mortgage Sales - Upcountry',
			'total' => 1
			));
			Position::create(array('position_id' => 970,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Sales - Upcountry 2',
			'job_title' => 'Regional Manager, Mortgage sales - North East Area',
			'total' => 1
			));
			Position::create(array('position_id' => 971,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'Mortgage Sales - Upcountry 2',
			'job_title' => 'Team Manager, Mortgage Sales',
			'total' => 12
			));
			Position::create(array('position_id' => 972,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'My Home My Cash',
			'job_title' => 'Manager, MHMC Expertise',
			'total' => 4
			));
			Position::create(array('position_id' => 973,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'My Home My Cash',
			'job_title' => 'MHMC Sales Officer',
			'total' => 8
			));
			Position::create(array('position_id' => 974,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'My Home My Cash',
			'job_title' => 'MHMC Specialist',
			'total' => 15
			));
			Position::create(array('position_id' => 975,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'My Home My Cash',
			'job_title' => 'Network Manager, My Home My Cash',
			'total' => 2
			));
			Position::create(array('position_id' => 976,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'My Home My Cash',
			'job_title' => 'Product Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 977,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'My Home My Cash',
			'job_title' => 'Regional Manager, My Home My Cash Bangkok',
			'total' => 1
			));
			Position::create(array('position_id' => 978,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'My Home My Cash',
			'job_title' => 'Regional Manager, My Home My Cash Upcountry',
			'total' => 1
			));
			Position::create(array('position_id' => 979,
			'group' => 'Retail Banking Group',
			'division' => 'Mortgage Business Division',
			'organization' => 'My Home My Cash',
			'job_title' => 'Team Manager, Special Project',
			'total' => 1
			));
			Position::create(array('position_id' => 980,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'No organization',
			'job_title' => 'Branch Network Support Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 981,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'No organization',
			'job_title' => 'EVP, Channel Strategic Planning and Branch Transformation',
			'total' => 1
			));
			Position::create(array('position_id' => 982,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'No organization',
			'job_title' => 'FEVP, Network Division',
			'total' => 1
			));
			Position::create(array('position_id' => 983,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'No organization',
			'job_title' => 'Financial Advisor Trainee',
			'total' => 20
			));
			Position::create(array('position_id' => 984,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'No organization',
			'job_title' => 'Project Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 985,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'No organization',
			'job_title' => 'Relationship Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 986,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'No organization',
			'job_title' => 'Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 987,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'No organization',
			'job_title' => 'Secretary to Division Head, Network',
			'total' => 1
			));
			Position::create(array('position_id' => 988,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'ATM Channel Management',
			'job_title' => 'ATM Analysis and Business Development Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 989,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'ATM Channel Management',
			'job_title' => 'ATM Business Channels Development Team Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 990,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'ATM Channel Management',
			'job_title' => 'ATM Business Channels Develpment Officer',
			'total' => 10
			));
			Position::create(array('position_id' => 991,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'ATM Channel Management',
			'job_title' => 'ATM Installation and Maintenance Officer',
			'total' => 8
			));
			Position::create(array('position_id' => 992,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'ATM Channel Management',
			'job_title' => 'ATM Service Management Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 993,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'ATM Channel Management',
			'job_title' => 'Manager, ATM Channel Management',
			'total' => 1
			));
			Position::create(array('position_id' => 994,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'ATM Channel Management',
			'job_title' => 'Team Manager, ATM Installation and Maintenance',
			'total' => 1
			));
			Position::create(array('position_id' => 995,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'ATM Channel Management',
			'job_title' => 'Team Manager, ATM Service Management',
			'total' => 1
			));
			Position::create(array('position_id' => 996,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'ATM Channel Management',
			'job_title' => 'Team Manager,ATM Analysis and Business Development',
			'total' => 1
			));
			Position::create(array('position_id' => 997,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network',
			'job_title' => 'Bancassurance Direct Sales Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 998,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network',
			'job_title' => 'Lending Relationship Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 999,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network',
			'job_title' => 'Team Manager, Bancassurance Direct Sales',
			'total' => 1
			));
			Position::create(array('position_id' => 1000,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'MAID',
			'total' => 3
			));
			Position::create(array('position_id' => 1001,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Driver',
			'total' => 10
			));
			Position::create(array('position_id' => 1002,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Area Manager',
			'total' => 3
			));
			Position::create(array('position_id' => 1003,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Assistant Branch Manager',
			'total' => 150
			));
			Position::create(array('position_id' => 1004,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Branch Call Center Officer',
			'total' => 14
			));
			Position::create(array('position_id' => 1005,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Branch Call Center Supervisor(14-07-2014)',
			'total' => 2
			));
			Position::create(array('position_id' => 1006,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Branch Control Specialist',
			'total' => 3
			));
			Position::create(array('position_id' => 1007,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Branch Management Specialist',
			'total' => 6
			));
			Position::create(array('position_id' => 1008,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Branch Manager',
			'total' => 303
			));
			Position::create(array('position_id' => 1009,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Branch Office Manager',
			'total' => 8
			));
			Position::create(array('position_id' => 1010,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Branch Operation Control Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1011,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Communications Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 1012,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Credit Systems&Other Systems Supports Officer(14-07-2014)',
			'total' => 3
			));
			Position::create(array('position_id' => 1013,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Financial Advisor Trainee',
			'total' => 11
			));
			Position::create(array('position_id' => 1014,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Lending Operation Officer',
			'total' => 31
			));
			Position::create(array('position_id' => 1015,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Lending Relationship Manager',
			'total' => 41
			));
			Position::create(array('position_id' => 1016,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Maid (Pending)',
			'total' => 6
			));
			Position::create(array('position_id' => 1017,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Manager, Standards Branch Systems',
			'total' => 1
			));
			Position::create(array('position_id' => 1018,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Network Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1019,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Personal Banker',
			'total' => 531
			));
			Position::create(array('position_id' => 1020,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Personal Banker Supervisor',
			'total' => 188
			));
			Position::create(array('position_id' => 1021,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'RB Front Systems Supports Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 1022,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Regional Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1023,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 1024,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Senior Personal Banker',
			'total' => 147
			));
			Position::create(array('position_id' => 1025,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Senior Teller',
			'total' => 47
			));
			Position::create(array('position_id' => 1026,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Service Planner Officer',
			'total' => 23
			));
			Position::create(array('position_id' => 1027,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Standard Operating Procedure Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 1028,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Support Officer',
			'total' => 27
			));
			Position::create(array('position_id' => 1029,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Team Manager, Branch Investigation and Follow up',
			'total' => 1
			));
			Position::create(array('position_id' => 1030,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Team Manager, Branch Network Support and Development',
			'total' => 1
			));
			Position::create(array('position_id' => 1031,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Team Manager, Branch Operations and Control',
			'total' => 1
			));
			Position::create(array('position_id' => 1032,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Team Manager, Communications',
			'total' => 1
			));
			Position::create(array('position_id' => 1033,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Team Manager, Credit Systems and Other Systems',
			'total' => 1
			));
			Position::create(array('position_id' => 1034,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Team Manager, RB Front Systems',
			'total' => 1
			));
			Position::create(array('position_id' => 1035,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Team Manager, Retail Contact Center',
			'total' => 1
			));
			Position::create(array('position_id' => 1036,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Team Manager, Standard Operating Procedure',
			'total' => 1
			));
			Position::create(array('position_id' => 1037,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Teller',
			'total' => 900
			));
			Position::create(array('position_id' => 1038,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Teller Supervisor',
			'total' => 379
			));
			Position::create(array('position_id' => 1039,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Teller Trainee',
			'total' => 94
			));
			Position::create(array('position_id' => 1040,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Wealth Relationship Manager',
			'total' => 16
			));
			Position::create(array('position_id' => 1041,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 1',
			'job_title' => 'Wealth Relationship Officer',
			'total' => 12
			));
			Position::create(array('position_id' => 1042,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 2',
			'job_title' => 'MAID',
			'total' => 2
			));
			Position::create(array('position_id' => 1043,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 2',
			'job_title' => 'Driver',
			'total' => 17
			));
			Position::create(array('position_id' => 1044,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 2',
			'job_title' => 'Area Manager',
			'total' => 5
			));
			Position::create(array('position_id' => 1045,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 2',
			'job_title' => 'Assistant Branch Manager',
			'total' => 149
			));
			Position::create(array('position_id' => 1046,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 2',
			'job_title' => 'Branch Equipment Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 1047,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 2',
			'job_title' => 'Branch Management Specialist',
			'total' => 9
			));
			Position::create(array('position_id' => 1048,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 2',
			'job_title' => 'Branch Manager',
			'total' => 352
			));
			Position::create(array('position_id' => 1049,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 2',
			'job_title' => 'Branch Office Manager',
			'total' => 10
			));
			Position::create(array('position_id' => 1050,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 2',
			'job_title' => 'Branch Opening Support Officer',
			'total' => 7
			));
			Position::create(array('position_id' => 1051,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 2',
			'job_title' => 'Branch Site Selection and Relocation Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 1052,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 2',
			'job_title' => 'Budgeting and Documentation Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 1053,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 2',
			'job_title' => 'Direct Relationship Management Manager',
			'total' => 3
			));
			Position::create(array('position_id' => 1054,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 2',
			'job_title' => 'EVP, Branch Network Upcountry 2',
			'total' => 1
			));
			Position::create(array('position_id' => 1055,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 2',
			'job_title' => 'Financial Advisor Trainee',
			'total' => 6
			));
			Position::create(array('position_id' => 1056,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 2',
			'job_title' => 'Investment Relationship Manager (IRM)',
			'total' => 1
			));
			Position::create(array('position_id' => 1057,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 2',
			'job_title' => 'Lending Operation Officer',
			'total' => 30
			));
			Position::create(array('position_id' => 1058,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 2',
			'job_title' => 'Lending Relationship Manager',
			'total' => 40
			));
			Position::create(array('position_id' => 1059,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 2',
			'job_title' => 'Maid (Pending)',
			'total' => 3
			));
			Position::create(array('position_id' => 1060,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 2',
			'job_title' => 'Manager, Branch Network Support',
			'total' => 1
			));
			Position::create(array('position_id' => 1061,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 2',
			'job_title' => 'Manager, Branch Site Selection and Relocation',
			'total' => 1
			));
			Position::create(array('position_id' => 1062,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 2',
			'job_title' => 'Personal Banker',
			'total' => 447
			));
			Position::create(array('position_id' => 1063,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 2',
			'job_title' => 'Personal Banker Supervisor',
			'total' => 176
			));
			Position::create(array('position_id' => 1064,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 2',
			'job_title' => 'Regional Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1065,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 2',
			'job_title' => 'Regional Manager - Branch Network',
			'total' => 1
			));
			Position::create(array('position_id' => 1066,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 2',
			'job_title' => 'Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 1067,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 2',
			'job_title' => 'Senior Personal Banker',
			'total' => 261
			));
			Position::create(array('position_id' => 1068,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 2',
			'job_title' => 'Senior Teller',
			'total' => 63
			));
			Position::create(array('position_id' => 1069,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 2',
			'job_title' => 'Service Planner Officer',
			'total' => 34
			));
			Position::create(array('position_id' => 1070,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 2',
			'job_title' => 'Support Officer',
			'total' => 32
			));
			Position::create(array('position_id' => 1071,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 2',
			'job_title' => 'Team Manager, Branch Equipment',
			'total' => 1
			));
			Position::create(array('position_id' => 1072,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 2',
			'job_title' => 'Team Manager, Branch Opening Support',
			'total' => 1
			));
			Position::create(array('position_id' => 1073,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 2',
			'job_title' => 'Team Manager, Budgeting and Documentation',
			'total' => 1
			));
			Position::create(array('position_id' => 1074,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 2',
			'job_title' => 'Teller',
			'total' => 1054
			));
			Position::create(array('position_id' => 1075,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 2',
			'job_title' => 'Teller Supervisor',
			'total' => 458
			));
			Position::create(array('position_id' => 1076,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 2',
			'job_title' => 'Teller Trainee',
			'total' => 117
			));
			Position::create(array('position_id' => 1077,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 2',
			'job_title' => 'Wealth Relationship Manager',
			'total' => 27
			));
			Position::create(array('position_id' => 1078,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network - Upcountry 2',
			'job_title' => 'Wealth Relationship Officer',
			'total' => 18
			));
			Position::create(array('position_id' => 1079,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 1',
			'job_title' => 'Assistant Branch Manager',
			'total' => 23
			));
			Position::create(array('position_id' => 1080,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 1',
			'job_title' => 'Branch Management Specialist',
			'total' => 4
			));
			Position::create(array('position_id' => 1081,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 1',
			'job_title' => 'Branch Manager',
			'total' => 90
			));
			Position::create(array('position_id' => 1082,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 1',
			'job_title' => 'Branch Office Manager',
			'total' => 4
			));
			Position::create(array('position_id' => 1083,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 1',
			'job_title' => 'Lending Operation Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1084,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 1',
			'job_title' => 'Lending Relationship Manager',
			'total' => 7
			));
			Position::create(array('position_id' => 1085,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 1',
			'job_title' => 'Personal Banker',
			'total' => 168
			));
			Position::create(array('position_id' => 1086,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 1',
			'job_title' => 'Personal Banker Supervisor',
			'total' => 100
			));
			Position::create(array('position_id' => 1087,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 1',
			'job_title' => 'Regional Manager - Branch Network',
			'total' => 1
			));
			Position::create(array('position_id' => 1088,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 1',
			'job_title' => 'Senior Personal Banker',
			'total' => 62
			));
			Position::create(array('position_id' => 1089,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 1',
			'job_title' => 'Senior Teller',
			'total' => 24
			));
			Position::create(array('position_id' => 1090,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 1',
			'job_title' => 'Service Planner Officer',
			'total' => 40
			));
			Position::create(array('position_id' => 1091,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 1',
			'job_title' => 'Support Officer',
			'total' => 8
			));
			Position::create(array('position_id' => 1092,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 1',
			'job_title' => 'Teller',
			'total' => 355
			));
			Position::create(array('position_id' => 1093,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 1',
			'job_title' => 'Teller Supervisor',
			'total' => 168
			));
			Position::create(array('position_id' => 1094,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 1',
			'job_title' => 'Teller Trainee',
			'total' => 14
			));
			Position::create(array('position_id' => 1095,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 1',
			'job_title' => 'Wealth Relationship Manager',
			'total' => 6
			));
			Position::create(array('position_id' => 1096,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 1',
			'job_title' => 'Wealth Relationship Officer',
			'total' => 9
			));
			Position::create(array('position_id' => 1097,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 2',
			'job_title' => 'Area Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1098,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 2',
			'job_title' => 'Assistant Branch Manager',
			'total' => 36
			));
			Position::create(array('position_id' => 1099,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 2',
			'job_title' => 'Assurance of Physical Standard Officer',
			'total' => 7
			));
			Position::create(array('position_id' => 1100,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 2',
			'job_title' => 'Bangkok Service Excellence Team Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1101,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 2',
			'job_title' => 'Branch Management Specialist',
			'total' => 4
			));
			Position::create(array('position_id' => 1102,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 2',
			'job_title' => 'Branch Manager',
			'total' => 94
			));
			Position::create(array('position_id' => 1103,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 2',
			'job_title' => 'Branch Office Manager',
			'total' => 3
			));
			Position::create(array('position_id' => 1104,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 2',
			'job_title' => 'Lending Relationship Manager',
			'total' => 8
			));
			Position::create(array('position_id' => 1105,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 2',
			'job_title' => 'Organization Management & Support Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1106,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 2',
			'job_title' => 'Organization Management & Support Team Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1107,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 2',
			'job_title' => 'Personal Banker',
			'total' => 202
			));
			Position::create(array('position_id' => 1108,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 2',
			'job_title' => 'Personal Banker Supervisor',
			'total' => 131
			));
			Position::create(array('position_id' => 1109,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 2',
			'job_title' => 'Regional Manager - Branch Network',
			'total' => 1
			));
			Position::create(array('position_id' => 1110,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 2',
			'job_title' => 'Senior Personal Banker',
			'total' => 46
			));
			Position::create(array('position_id' => 1111,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 2',
			'job_title' => 'Senior Teller',
			'total' => 23
			));
			Position::create(array('position_id' => 1112,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 2',
			'job_title' => 'Service Planner Officer',
			'total' => 47
			));
			Position::create(array('position_id' => 1113,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 2',
			'job_title' => 'Service Quality Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 1114,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 2',
			'job_title' => 'Support Officer',
			'total' => 11
			));
			Position::create(array('position_id' => 1115,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 2',
			'job_title' => 'Team Manager, APS (Assurance of Physical Standard)',
			'total' => 1
			));
			Position::create(array('position_id' => 1116,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 2',
			'job_title' => 'Team Manager, Services Excellence',
			'total' => 1
			));
			Position::create(array('position_id' => 1117,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 2',
			'job_title' => 'Teller',
			'total' => 395
			));
			Position::create(array('position_id' => 1118,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 2',
			'job_title' => 'Teller Supervisor',
			'total' => 141
			));
			Position::create(array('position_id' => 1119,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 2',
			'job_title' => 'Teller Trainee',
			'total' => 20
			));
			Position::create(array('position_id' => 1120,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 2',
			'job_title' => 'Upcountry 1 Service Excellence Team Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1121,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 2',
			'job_title' => 'Wealth Relationship Manager',
			'total' => 3
			));
			Position::create(array('position_id' => 1122,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok - In Mall 2',
			'job_title' => 'Wealth Relationship Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1123,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 1',
			'job_title' => 'Area Manager',
			'total' => 5
			));
			Position::create(array('position_id' => 1124,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 1',
			'job_title' => 'Assistant Branch Manager',
			'total' => 107
			));
			Position::create(array('position_id' => 1125,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 1',
			'job_title' => 'Branch Management Specialist',
			'total' => 6
			));
			Position::create(array('position_id' => 1126,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 1',
			'job_title' => 'Branch Manager',
			'total' => 170
			));
			Position::create(array('position_id' => 1127,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 1',
			'job_title' => 'Branch Relationship Management Team Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1128,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 1',
			'job_title' => 'Deputy Area Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1129,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 1',
			'job_title' => 'EVP, Branch Network Bangkok 1',
			'total' => 1
			));
			Position::create(array('position_id' => 1130,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 1',
			'job_title' => 'Financial Advisor Trainee',
			'total' => 12
			));
			Position::create(array('position_id' => 1131,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 1',
			'job_title' => 'Investment Planning Strategist',
			'total' => 1
			));
			Position::create(array('position_id' => 1132,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 1',
			'job_title' => 'Investment Relationship Manager (IRM)',
			'total' => 4
			));
			Position::create(array('position_id' => 1133,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 1',
			'job_title' => 'Investment Strategics Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1134,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 1',
			'job_title' => 'Lending Operation Officer',
			'total' => 22
			));
			Position::create(array('position_id' => 1135,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 1',
			'job_title' => 'Lending Relationship Manager',
			'total' => 23
			));
			Position::create(array('position_id' => 1136,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 1',
			'job_title' => 'LRM-Operation Team Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1137,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 1',
			'job_title' => 'Maid (Pending)',
			'total' => 1
			));
			Position::create(array('position_id' => 1138,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 1',
			'job_title' => 'Manager, Branch Relationship Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1139,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 1',
			'job_title' => 'Personal Banker',
			'total' => 229
			));
			Position::create(array('position_id' => 1140,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 1',
			'job_title' => 'Personal Banker Supervisor',
			'total' => 94
			));
			Position::create(array('position_id' => 1141,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 1',
			'job_title' => 'Personal Financial Supervisor',
			'total' => 1
			));
			Position::create(array('position_id' => 1142,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 1',
			'job_title' => 'Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 1143,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 1',
			'job_title' => 'Senior Personal Banker',
			'total' => 155
			));
			Position::create(array('position_id' => 1144,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 1',
			'job_title' => 'Senior Personal Banker Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1145,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 1',
			'job_title' => 'Senior Teller',
			'total' => 42
			));
			Position::create(array('position_id' => 1146,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 1',
			'job_title' => 'Service Planner Officer',
			'total' => 40
			));
			Position::create(array('position_id' => 1147,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 1',
			'job_title' => 'Support Officer',
			'total' => 17
			));
			Position::create(array('position_id' => 1148,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 1',
			'job_title' => 'Teller',
			'total' => 490
			));
			Position::create(array('position_id' => 1149,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 1',
			'job_title' => 'Teller Supervisor',
			'total' => 177
			));
			Position::create(array('position_id' => 1150,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 1',
			'job_title' => 'Teller Trainee',
			'total' => 61
			));
			Position::create(array('position_id' => 1151,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 1',
			'job_title' => 'Wealth Relationship Manager',
			'total' => 55
			));
			Position::create(array('position_id' => 1152,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 1',
			'job_title' => 'Wealth Relationship Officer',
			'total' => 50
			));
			Position::create(array('position_id' => 1153,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 2',
			'job_title' => 'Area Manager',
			'total' => 2
			));
			Position::create(array('position_id' => 1154,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 2',
			'job_title' => 'Assistant Branch Manager',
			'total' => 104
			));
			Position::create(array('position_id' => 1155,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 2',
			'job_title' => 'Branch Management Specialist',
			'total' => 5
			));
			Position::create(array('position_id' => 1156,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 2',
			'job_title' => 'Branch Manager',
			'total' => 151
			));
			Position::create(array('position_id' => 1157,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 2',
			'job_title' => 'Branch Office Manager',
			'total' => 3
			));
			Position::create(array('position_id' => 1158,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 2',
			'job_title' => 'Financial Advisor Trainee',
			'total' => 4
			));
			Position::create(array('position_id' => 1159,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 2',
			'job_title' => 'Investment Relationship Manager (IRM)',
			'total' => 3
			));
			Position::create(array('position_id' => 1160,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 2',
			'job_title' => 'Lending Operation Officer',
			'total' => 20
			));
			Position::create(array('position_id' => 1161,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 2',
			'job_title' => 'Lending Relationship Manager',
			'total' => 18
			));
			Position::create(array('position_id' => 1162,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 2',
			'job_title' => 'Maid (Pending)',
			'total' => 2
			));
			Position::create(array('position_id' => 1163,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 2',
			'job_title' => 'Manager, Direct Relationship Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1164,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 2',
			'job_title' => 'Manager, Investment Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1165,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 2',
			'job_title' => 'Network Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1166,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 2',
			'job_title' => 'Personal Banker',
			'total' => 210
			));
			Position::create(array('position_id' => 1167,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 2',
			'job_title' => 'Personal Banker Supervisor',
			'total' => 75
			));
			Position::create(array('position_id' => 1168,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 2',
			'job_title' => 'Senior Personal Banker',
			'total' => 146
			));
			Position::create(array('position_id' => 1169,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 2',
			'job_title' => 'Senior Personal Banker Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 1170,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 2',
			'job_title' => 'Senior Teller',
			'total' => 45
			));
			Position::create(array('position_id' => 1171,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 2',
			'job_title' => 'Senior Teller Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1172,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 2',
			'job_title' => 'Service Planner Officer',
			'total' => 26
			));
			Position::create(array('position_id' => 1173,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 2',
			'job_title' => 'Support Officer',
			'total' => 15
			));
			Position::create(array('position_id' => 1174,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 2',
			'job_title' => 'Teller',
			'total' => 418
			));
			Position::create(array('position_id' => 1175,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 2',
			'job_title' => 'Teller Supervisor',
			'total' => 147
			));
			Position::create(array('position_id' => 1176,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 2',
			'job_title' => 'Teller Trainee',
			'total' => 52
			));
			Position::create(array('position_id' => 1177,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 2',
			'job_title' => 'Wealth Relationship Manager',
			'total' => 30
			));
			Position::create(array('position_id' => 1178,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Branch Network Bangkok 2',
			'job_title' => 'Wealth Relationship Officer',
			'total' => 20
			));
			Position::create(array('position_id' => 1179,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Channel Strategic Planning',
			'job_title' => 'Budgeting and Branch Efficiency Management Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 1180,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Channel Strategic Planning',
			'job_title' => 'Channel Analysis Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 1181,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Channel Strategic Planning',
			'job_title' => 'Channel Execution Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1182,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Channel Strategic Planning',
			'job_title' => 'Channel Marketing Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1183,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Channel Strategic Planning',
			'job_title' => 'Internal Marketing Communication Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1184,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Channel Strategic Planning',
			'job_title' => 'Manager, Budgeting and Branch Efficiency Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1185,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Channel Strategic Planning',
			'job_title' => 'Manager, Channel Analysis',
			'total' => 1
			));
			Position::create(array('position_id' => 1186,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Channel Strategic Planning',
			'job_title' => 'Manager, Channel Strategic Planning',
			'total' => 1
			));
			Position::create(array('position_id' => 1187,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Channel Strategic Planning',
			'job_title' => 'Team Manager, Channel Analysis',
			'total' => 2
			));
			Position::create(array('position_id' => 1188,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Channel Strategic Planning',
			'job_title' => 'Team Manager, Channel Execution',
			'total' => 1
			));
			Position::create(array('position_id' => 1189,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Channel Strategic Planning',
			'job_title' => 'Team Manager, Internal Marketing Communication',
			'total' => 1
			));
			Position::create(array('position_id' => 1190,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Control and Branch Network Development',
			'job_title' => 'Branch Control Specialist',
			'total' => 2
			));
			Position::create(array('position_id' => 1191,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Control and Branch Network Development',
			'job_title' => 'Branch Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1192,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Control and Branch Network Development',
			'job_title' => 'Support Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 1193,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Multi Channel Sales and Service',
			'job_title' => 'MSS Analysis Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1194,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Multi Channel Sales and Service',
			'job_title' => 'MSS Enhancement Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1195,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Multi Channel Sales and Service',
			'job_title' => 'MSS Monitoring OfficerS Monitoring Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 1196,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Multi Channel Sales and Service',
			'job_title' => 'Multi Channel Sales and Service Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1197,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Multi Channel Sales and Service',
			'job_title' => 'Project Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1198,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Multi Channel Sales and Service',
			'job_title' => 'Smart Sales Officer 1',
			'total' => 4
			));
			Position::create(array('position_id' => 1199,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Multi Channel Sales and Service',
			'job_title' => 'Smart Sales Officer 2',
			'total' => 3
			));
			Position::create(array('position_id' => 1200,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Multi Channel Sales and Service',
			'job_title' => 'Smart Sales Officer 3',
			'total' => 3
			));
			Position::create(array('position_id' => 1201,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Multi Channel Sales and Service',
			'job_title' => 'Smart Sales Officer 4',
			'total' => 3
			));
			Position::create(array('position_id' => 1202,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Multi Channel Sales and Service',
			'job_title' => 'Smart Sales Officer 5',
			'total' => 3
			));
			Position::create(array('position_id' => 1203,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Multi Channel Sales and Service',
			'job_title' => 'Smart Sales Officer 6',
			'total' => 3
			));
			Position::create(array('position_id' => 1204,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Multi Channel Sales and Service',
			'job_title' => 'Smart Sales Team Manager 2',
			'total' => 1
			));
			Position::create(array('position_id' => 1205,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Multi Channel Sales and Service',
			'job_title' => 'Smart Sales Team Manager 3',
			'total' => 1
			));
			Position::create(array('position_id' => 1206,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Multi Channel Sales and Service',
			'job_title' => 'Smart Sales Team Manager 4',
			'total' => 1
			));
			Position::create(array('position_id' => 1207,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Multi Channel Sales and Service',
			'job_title' => 'Smart Sales Team Manager 5',
			'total' => 1
			));
			Position::create(array('position_id' => 1208,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Multi Channel Sales and Service',
			'job_title' => 'Smart Sales Team Manager 6',
			'total' => 1
			));
			Position::create(array('position_id' => 1209,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Network Change Management Project',
			'job_title' => 'Project Team Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1210,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Retail Exchange and Remittance',
			'job_title' => 'Bangkok and Upcountry Exchange Booth Management Supervisor',
			'total' => 2
			));
			Position::create(array('position_id' => 1211,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Retail Exchange and Remittance',
			'job_title' => 'Bangkok and Upcountry Exchange Booth Management Team Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1212,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Retail Exchange and Remittance',
			'job_title' => 'Bangkok Exchange Booth Officer',
			'total' => 78
			));
			Position::create(array('position_id' => 1213,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Retail Exchange and Remittance',
			'job_title' => 'Exchange Analysis and Development Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1214,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Retail Exchange and Remittance',
			'job_title' => 'Exchange Analysis and Development Team Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1215,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Retail Exchange and Remittance',
			'job_title' => 'Exchange and Remittance Support Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 1216,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Retail Exchange and Remittance',
			'job_title' => 'Exchange and Remittance Support Supervisor',
			'total' => 1
			));
			Position::create(array('position_id' => 1217,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Retail Exchange and Remittance',
			'job_title' => 'Exchange Booth Control and Support Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1218,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Retail Exchange and Remittance',
			'job_title' => 'Exchange Booth Control and Support Supervisor',
			'total' => 2
			));
			Position::create(array('position_id' => 1219,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Retail Exchange and Remittance',
			'job_title' => 'Exchange Booth Control and Support Team Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1220,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Retail Exchange and Remittance',
			'job_title' => 'Exchange Control and Support Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1221,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Retail Exchange and Remittance',
			'job_title' => 'Manager, Retail Exchange and Remittance',
			'total' => 1
			));
			Position::create(array('position_id' => 1222,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Retail Exchange and Remittance',
			'job_title' => 'Retail Exchange and Remittance Specialist',
			'total' => 1
			));
			Position::create(array('position_id' => 1223,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Retail Exchange and Remittance',
			'job_title' => 'Suvarnabhumi Exchange Booth Management Supervisor',
			'total' => 3
			));
			Position::create(array('position_id' => 1224,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Retail Exchange and Remittance',
			'job_title' => 'Suvarnabhumi Exchange Booth Management Team Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1225,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Retail Exchange and Remittance',
			'job_title' => 'Suvarnabhumi Exchange Booth Officer',
			'total' => 159
			));
			Position::create(array('position_id' => 1226,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Standards Banking Procedures',
			'job_title' => 'Manager, Standards Banking Procedures',
			'total' => 1
			));
			Position::create(array('position_id' => 1227,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Standards Banking Procedures',
			'job_title' => 'Manager, Standards Banking Procedures 1',
			'total' => 1
			));
			Position::create(array('position_id' => 1228,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Standards Banking Procedures',
			'job_title' => 'Manager, Standards Banking Procedures 2',
			'total' => 1
			));
			Position::create(array('position_id' => 1229,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Standards Banking Procedures',
			'job_title' => 'Manager, Standards Banking Procedures 3',
			'total' => 1
			));
			Position::create(array('position_id' => 1230,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Standards Banking Procedures',
			'job_title' => 'Officer, Standards Banking Procedures 1',
			'total' => 4
			));
			Position::create(array('position_id' => 1231,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Standards Banking Procedures',
			'job_title' => 'Officer, Standards Banking Procedures 2',
			'total' => 8
			));
			Position::create(array('position_id' => 1232,
			'group' => 'Retail Banking Group',
			'division' => 'Network Division',
			'organization' => 'Standards Banking Procedures',
			'job_title' => 'Officer, Standards Banking Procedures 3',
			'total' => 5
			));
			Position::create(array('position_id' => 1233,
			'group' => 'Retail Banking Group',
			'division' => 'Private Banking',
			'organization' => 'No organization',
			'job_title' => 'VP',
			'total' => 1
			));
			Position::create(array('position_id' => 1234,
			'group' => 'Retail Banking Group',
			'division' => 'Private Banking',
			'organization' => 'No organization',
			'job_title' => 'AVP',
			'total' => 1
			));
			Position::create(array('position_id' => 1235,
			'group' => 'Retail Banking Group',
			'division' => 'Private Banking',
			'organization' => 'No organization',
			'job_title' => 'Assistant Banker',
			'total' => 7
			));
			Position::create(array('position_id' => 1236,
			'group' => 'Retail Banking Group',
			'division' => 'Private Banking',
			'organization' => 'No organization',
			'job_title' => 'Business Coordinator',
			'total' => 1
			));
			Position::create(array('position_id' => 1237,
			'group' => 'Retail Banking Group',
			'division' => 'Private Banking',
			'organization' => 'No organization',
			'job_title' => 'Head of Private Banking',
			'total' => 1
			));
			Position::create(array('position_id' => 1238,
			'group' => 'Retail Banking Group',
			'division' => 'Private Banking',
			'organization' => 'No organization',
			'job_title' => 'Investment Management Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1239,
			'group' => 'Retail Banking Group',
			'division' => 'Private Banking',
			'organization' => 'No organization',
			'job_title' => 'Investment Strategics Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1240,
			'group' => 'Retail Banking Group',
			'division' => 'Private Banking',
			'organization' => 'No organization',
			'job_title' => 'Operations Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1241,
			'group' => 'Retail Banking Group',
			'division' => 'Private Banking',
			'organization' => 'No organization',
			'job_title' => 'Private Banker',
			'total' => 3
			));
			Position::create(array('position_id' => 1242,
			'group' => 'Retail Banking Group',
			'division' => 'Private Banking',
			'organization' => 'No organization',
			'job_title' => 'Private Banking Assistant',
			'total' => 2
			));
			Position::create(array('position_id' => 1243,
			'group' => 'Retail Banking Group',
			'division' => 'Private Banking',
			'organization' => 'No organization',
			'job_title' => 'Relationship Associate',
			'total' => 17
			));
			Position::create(array('position_id' => 1244,
			'group' => 'Retail Banking Group',
			'division' => 'Private Banking',
			'organization' => 'No organization',
			'job_title' => 'Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 1245,
			'group' => 'Retail Banking Group',
			'division' => 'Private Banking',
			'organization' => 'No organization',
			'job_title' => 'Senior Private Banker',
			'total' => 1
			));
			Position::create(array('position_id' => 1246,
			'group' => 'Retail Banking Group',
			'division' => 'Private Banking',
			'organization' => 'No organization',
			'job_title' => 'Team Leader Private Banking',
			'total' => 2
			));
			Position::create(array('position_id' => 1247,
			'group' => 'Retail Banking Group',
			'division' => 'Private Banking',
			'organization' => 'No organization',
			'job_title' => 'Team Leader, Business Improvement',
			'total' => 1
			));
			Position::create(array('position_id' => 1248,
			'group' => 'Retail Banking Group',
			'division' => 'Private Banking',
			'organization' => 'No organization',
			'job_title' => 'Team Leader, Private Banking Operation',
			'total' => 1
			));
			Position::create(array('position_id' => 1249,
			'group' => 'Retail Banking Group',
			'division' => 'Private Banking',
			'organization' => 'No organization',
			'job_title' => 'Team Manager, Private Banking',
			'total' => 4
			));
			Position::create(array('position_id' => 1250,
			'group' => 'Retail Banking Group',
			'division' => 'Private Banking',
			'organization' => 'Marketing and Customer Service',
			'job_title' => 'Marketing Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1251,
			'group' => 'Retail Banking Group',
			'division' => 'Private Banking',
			'organization' => 'Private Banking - Investment Consultant',
			'job_title' => 'Relationship Associate',
			'total' => 2
			));
			Position::create(array('position_id' => 1252,
			'group' => 'Retail Banking Group',
			'division' => 'Private Banking',
			'organization' => 'Private Banking - Investment Consultant',
			'job_title' => 'Relationship Manager, Private Banking 4',
			'total' => 1
			));
			Position::create(array('position_id' => 1253,
			'group' => 'Retail Banking Group',
			'division' => 'Private Banking',
			'organization' => 'Private Banking - Investment Consultant',
			'job_title' => 'Team Manager, Private Banking 8',
			'total' => 1
			));
			Position::create(array('position_id' => 1254,
			'group' => 'Retail Banking Group',
			'division' => 'Private Banking',
			'organization' => 'Private Banking Administration(31-01-2013)',
			'job_title' => 'Management Information Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1255,
			'group' => 'Retail Banking Group',
			'division' => 'Private Banking',
			'organization' => 'Private Banking Administration(31-01-2013)',
			'job_title' => 'Management Information Team Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1256,
			'group' => 'Retail Banking Group',
			'division' => 'Private Banking',
			'organization' => 'Private Banking Administration(31-01-2013)',
			'job_title' => 'Manager, Administrator',
			'total' => 1
			));
			Position::create(array('position_id' => 1257,
			'group' => 'Retail Banking Group',
			'division' => 'Private Banking',
			'organization' => 'Private Banking Administration(31-01-2013)',
			'job_title' => 'Operation Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1258,
			'group' => 'Retail Banking Group',
			'division' => 'Private Banking',
			'organization' => 'Private Banking Administration(31-01-2013)',
			'job_title' => 'Support Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1259,
			'group' => 'Retail Banking Group',
			'division' => 'Private Banking',
			'organization' => 'Private Banking Administration(31-01-2013)',
			'job_title' => 'VIP Credit Card Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1260,
			'group' => 'Retail Banking Group',
			'division' => 'Private Banking',
			'organization' => 'Product and Investment Management',
			'job_title' => 'Product Management Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1261,
			'group' => 'Retail Banking Group',
			'division' => 'Private Banking',
			'organization' => 'Relationship Management 1',
			'job_title' => 'Relationship Manager, Private Banking 1',
			'total' => 1
			));
			Position::create(array('position_id' => 1262,
			'group' => 'Retail Banking Group',
			'division' => 'Private Banking',
			'organization' => 'Relationship Management 2',
			'job_title' => 'Assistant Banker',
			'total' => 1
			));
			Position::create(array('position_id' => 1263,
			'group' => 'Retail Banking Group',
			'division' => 'Private Banking',
			'organization' => 'Relationship Management 2',
			'job_title' => 'Manager, Relationship Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1264,
			'group' => 'Retail Banking Group',
			'division' => 'Private Banking',
			'organization' => 'Relationship Management 2',
			'job_title' => 'Relationship Associate',
			'total' => 2
			));
			Position::create(array('position_id' => 1265,
			'group' => 'Retail Banking Group',
			'division' => 'Private Banking',
			'organization' => 'Relationship Management 2',
			'job_title' => 'Relationship Manager, Private Banking 2',
			'total' => 1
			));
			Position::create(array('position_id' => 1266,
			'group' => 'Retail Banking Group',
			'division' => 'Private Banking',
			'organization' => 'Relationship Management 2',
			'job_title' => 'Team Manager, Private Banking',
			'total' => 2
			));
			Position::create(array('position_id' => 1267,
			'group' => 'Retail Banking Group',
			'division' => 'Private Banking',
			'organization' => 'Relationship Management 3',
			'job_title' => 'Relationship Manager, Private Banking 3',
			'total' => 1
			));
			Position::create(array('position_id' => 1268,
			'group' => 'Retail Banking Group',
			'division' => 'Private Banking',
			'organization' => 'Relationship Management 3',
			'job_title' => 'Team Manager, Private Banking 7',
			'total' => 1
			));
			Position::create(array('position_id' => 1269,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'No organization',
			'job_title' => 'Division Head, Retail Credit Division',
			'total' => 1
			));
			Position::create(array('position_id' => 1270,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'No organization',
			'job_title' => 'RC Management Trainee',
			'total' => 1
			));
			Position::create(array('position_id' => 1271,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'No organization',
			'job_title' => 'Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 1272,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Car Loan',
			'job_title' => 'Administrations Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 1273,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Car Loan',
			'job_title' => 'Call Verify Officer',
			'total' => 36
			));
			Position::create(array('position_id' => 1274,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Car Loan',
			'job_title' => 'Credit Officer - Car Loan',
			'total' => 101
			));
			Position::create(array('position_id' => 1275,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Car Loan',
			'job_title' => 'External Verify Officer',
			'total' => 38
			));
			Position::create(array('position_id' => 1276,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Car Loan',
			'job_title' => 'External Verify Supervisor',
			'total' => 3
			));
			Position::create(array('position_id' => 1277,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Car Loan',
			'job_title' => 'Manager, Car Loan Credit',
			'total' => 1
			));
			Position::create(array('position_id' => 1278,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Car Loan',
			'job_title' => 'Manager, Credit Verification',
			'total' => 1
			));
			Position::create(array('position_id' => 1279,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Car Loan',
			'job_title' => 'Manager, MCMC Loan',
			'total' => 1
			));
			Position::create(array('position_id' => 1280,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Car Loan',
			'job_title' => 'Manager, New Car Loan',
			'total' => 1
			));
			Position::create(array('position_id' => 1281,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Car Loan',
			'job_title' => 'Manager, Use Car Loan',
			'total' => 1
			));
			Position::create(array('position_id' => 1282,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Car Loan',
			'job_title' => 'Team Manager, Car Loan Credit',
			'total' => 12
			));
			Position::create(array('position_id' => 1283,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'MIS and Support',
			'job_title' => 'Administrations Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 1284,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'MIS and Support',
			'job_title' => 'Team Manager, Administration',
			'total' => 1
			));
			Position::create(array('position_id' => 1285,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Mortgage',
			'job_title' => 'Manager, Retail Credit 1',
			'total' => 1
			));
			Position::create(array('position_id' => 1286,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Mortgage',
			'job_title' => 'Manager, Retail Credit 2',
			'total' => 1
			));
			Position::create(array('position_id' => 1287,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Mortgage',
			'job_title' => 'Manager, Retail Credit 3',
			'total' => 1
			));
			Position::create(array('position_id' => 1288,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Mortgage',
			'job_title' => 'Manager, Retail Credit 4',
			'total' => 1
			));
			Position::create(array('position_id' => 1289,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Mortgage',
			'job_title' => 'Retail Credit Officer',
			'total' => 79
			));
			Position::create(array('position_id' => 1290,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Mortgage',
			'job_title' => 'Senior Retail Credit Officer',
			'total' => 17
			));
			Position::create(array('position_id' => 1291,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Mortgage',
			'job_title' => 'Team Manager, Team 1',
			'total' => 4
			));
			Position::create(array('position_id' => 1292,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Mortgage',
			'job_title' => 'Team Manager, Team 2',
			'total' => 4
			));
			Position::create(array('position_id' => 1293,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Mortgage',
			'job_title' => 'Team Manager, Team 3',
			'total' => 4
			));
			Position::create(array('position_id' => 1294,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Mortgage',
			'job_title' => 'Team Manager, Team 4',
			'total' => 4
			));
			Position::create(array('position_id' => 1295,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Retail Credit Management',
			'job_title' => 'Manager, Retail Credit Information Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1296,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Retail Credit Management',
			'job_title' => 'Manager, Retail Credit Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1297,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Retail Credit Management',
			'job_title' => 'Retail Credit Information Management Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 1298,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Retail Credit Management',
			'job_title' => 'Retail Credit Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 1299,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Retail Credit Management',
			'job_title' => 'Senior Retail Credit Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1300,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Retail Credit Management',
			'job_title' => 'Team Manager, Retail Credit',
			'total' => 1
			));
			Position::create(array('position_id' => 1301,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Retail Credit SSME',
			'job_title' => 'Manager,Retail Credit SSME',
			'total' => 1
			));
			Position::create(array('position_id' => 1302,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Retail Credit SSME',
			'job_title' => 'Retail Credit SSME Officer',
			'total' => 20
			));
			Position::create(array('position_id' => 1303,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Retail Credit SSME',
			'job_title' => 'Senior Retail Credit SSME Officer',
			'total' => 8
			));
			Position::create(array('position_id' => 1304,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Retail Credit SSME',
			'job_title' => 'Senior Staff Loans & TDR Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 1305,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Retail Credit SSME',
			'job_title' => 'Staff Loans & Troubled Debt Restructuring Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 1306,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Retail Credit SSME',
			'job_title' => 'Team Manager, Staff Loans & TDR.',
			'total' => 1
			));
			Position::create(array('position_id' => 1307,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Retail Credit SSME',
			'job_title' => 'Team Manager,Retail Credit SSME',
			'total' => 5
			));
			Position::create(array('position_id' => 1308,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Retail Credit Strategy',
			'job_title' => 'Manager, Retail Credit Strategy',
			'total' => 1
			));
			Position::create(array('position_id' => 1309,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Retail Credit Strategy',
			'job_title' => 'Retail Credit Strategy Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1310,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Small Business Credit Underwriting',
			'job_title' => 'Business Support Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1311,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Small Business Credit Underwriting',
			'job_title' => 'SB Credit Officer',
			'total' => 19
			));
			Position::create(array('position_id' => 1312,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Small Business Credit Underwriting',
			'job_title' => 'Team Manager, Credit Underwriting 1',
			'total' => 1
			));
			Position::create(array('position_id' => 1313,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Small Business Credit Underwriting',
			'job_title' => 'Team Manager, Credit Underwriting 2',
			'total' => 1
			));
			Position::create(array('position_id' => 1314,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Small Business Credit Underwriting',
			'job_title' => 'Team Manager, Credit Underwriting 3',
			'total' => 1
			));
			Position::create(array('position_id' => 1315,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Small Business Credit Underwriting',
			'job_title' => 'Team Manager, Credit Underwriting 4',
			'total' => 1
			));
			Position::create(array('position_id' => 1316,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Small Business Credit Underwriting',
			'job_title' => 'Team Manager, Credit Underwriting 5',
			'total' => 1
			));
			Position::create(array('position_id' => 1317,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Unsecure Approval',
			'job_title' => 'Administrations Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 1318,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Unsecure Approval',
			'job_title' => 'Authorization Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1319,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Unsecure Approval',
			'job_title' => 'Credits Officer',
			'total' => 84
			));
			Position::create(array('position_id' => 1320,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Unsecure Approval',
			'job_title' => 'Manager, Credit Card Approval',
			'total' => 1
			));
			Position::create(array('position_id' => 1321,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Unsecure Approval',
			'job_title' => 'Supervisor, Authorization',
			'total' => 1
			));
			Position::create(array('position_id' => 1322,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Unsecure Approval',
			'job_title' => 'Supervisor, Shift Authorization',
			'total' => 10
			));
			Position::create(array('position_id' => 1323,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Unsecure Approval',
			'job_title' => 'Team Manager, Administration',
			'total' => 1
			));
			Position::create(array('position_id' => 1324,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Unsecure Approval',
			'job_title' => 'Team Manager, Authorization',
			'total' => 1
			));
			Position::create(array('position_id' => 1325,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Unsecure Approval',
			'job_title' => 'Team Manager, Merchant Services & Line Increases',
			'total' => 1
			));
			Position::create(array('position_id' => 1326,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Unsecure Approval',
			'job_title' => 'Team Manager, Team 1',
			'total' => 1
			));
			Position::create(array('position_id' => 1327,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Unsecure Approval',
			'job_title' => 'Team Manager, Team 2',
			'total' => 1
			));
			Position::create(array('position_id' => 1328,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Unsecure Approval',
			'job_title' => 'Team Manager, Team 3',
			'total' => 1
			));
			Position::create(array('position_id' => 1329,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Unsecure Approval',
			'job_title' => 'Team Manager, Team 4',
			'total' => 1
			));
			Position::create(array('position_id' => 1330,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Unsecure Approval',
			'job_title' => 'Team Manager, Team 5',
			'total' => 1
			));
			Position::create(array('position_id' => 1331,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Unsecure Approval',
			'job_title' => 'Team Manager, Team 6',
			'total' => 1
			));
			Position::create(array('position_id' => 1332,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Unsecure Approval',
			'job_title' => 'Team Manager, Team 7',
			'total' => 1
			));
			Position::create(array('position_id' => 1333,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Credit Division',
			'organization' => 'Unsecure Approval',
			'job_title' => 'Team Manager, Team 8',
			'total' => 1
			));
			Position::create(array('position_id' => 1334,
			'group' => 'Retail Banking Group',
			'division' => 'Retail Strategy Division',
			'organization' => 'Retail Strategic Planning',
			'job_title' => 'Retail Planning Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1335,
			'group' => 'Retail Banking Group',
			'division' => 'SSME Business Division',
			'organization' => 'Northern Area, SSME Business',
			'job_title' => 'Area Manager Northern, SSME Business',
			'total' => 1
			));
			Position::create(array('position_id' => 1336,
			'group' => 'Retail Banking Group',
			'division' => 'SSME Business Division',
			'organization' => 'Southern Area, SSME Business',
			'job_title' => 'Area Manager Southern, SSME Business',
			'total' => 1
			));
			Position::create(array('position_id' => 1337,
			'group' => 'Retail Banking Group',
			'division' => 'SSME Business Division',
			'organization' => 'SSME Business Development',
			'job_title' => 'Area Manager Bangkok 1, SSME Business',
			'total' => 1
			));
			Position::create(array('position_id' => 1338,
			'group' => 'Retail Banking Group',
			'division' => 'SSME Business Division',
			'organization' => 'SSME Business Development',
			'job_title' => 'Area Manager Bangkok 2, SSME Business',
			'total' => 1
			));
			Position::create(array('position_id' => 1339,
			'group' => 'Retail Banking Group',
			'division' => 'SSME Business Division',
			'organization' => 'SSME Business Development',
			'job_title' => 'Area Manager Eastern, SSME Business',
			'total' => 1
			));
			Position::create(array('position_id' => 1340,
			'group' => 'Retail Banking Group',
			'division' => 'SSME Business Division',
			'organization' => 'SSME Business Development',
			'job_title' => 'Area Manager North Eastern, SSME Business',
			'total' => 1
			));
			Position::create(array('position_id' => 1341,
			'group' => 'Retail Banking Group',
			'division' => 'SSME Business Division',
			'organization' => 'SSME Business Development',
			'job_title' => 'Area Manager,SSME Business',
			'total' => 1
			));
			Position::create(array('position_id' => 1342,
			'group' => 'Retail Banking Group',
			'division' => 'SSME Business Division',
			'organization' => 'SSME Business Development',
			'job_title' => 'Area Manager,SSME Business Key Account',
			'total' => 1
			));
			Position::create(array('position_id' => 1343,
			'group' => 'Retail Banking Group',
			'division' => 'SSME Business Division',
			'organization' => 'SSME Business Development',
			'job_title' => 'Manager, SSME Network Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1344,
			'group' => 'Retail Banking Group',
			'division' => 'SSME Business Division',
			'organization' => 'SSME Business Development',
			'job_title' => 'Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 1345,
			'group' => 'Retail Banking Group',
			'division' => 'SSME Business Division',
			'organization' => 'SSME Business Development',
			'job_title' => 'SSME Business Relationship Manager',
			'total' => 119
			));
			Position::create(array('position_id' => 1346,
			'group' => 'Retail Banking Group',
			'division' => 'SSME Business Division',
			'organization' => 'SSME Business Development',
			'job_title' => 'SSME Business Relationship Officer',
			'total' => 42
			));
			Position::create(array('position_id' => 1347,
			'group' => 'Retail Banking Group',
			'division' => 'SSME Business Division',
			'organization' => 'SSME Business Development',
			'job_title' => 'Team Manager, SSME Business Development',
			'total' => 17
			));
			Position::create(array('position_id' => 1348,
			'group' => 'Retail Banking Group',
			'division' => 'SSME Business Division',
			'organization' => 'SSME Business, Partners Relationship Management',
			'job_title' => 'Manager, MHMC Expertise',
			'total' => 1
			));
			Position::create(array('position_id' => 1349,
			'group' => 'Retail Banking Group',
			'division' => 'SSME Business Division',
			'organization' => 'SSME Business, Partners Relationship Management',
			'job_title' => 'Specialist',
			'total' => 3
			));
			Position::create(array('position_id' => 1350,
			'group' => 'Retail Banking Group',
			'division' => 'SSME Business Division',
			'organization' => 'SSME Business, Partners Relationship Management',
			'job_title' => 'SSME Marketing & Sales Support Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1351,
			'group' => 'Retail Banking Group',
			'division' => 'SSME Business Division',
			'organization' => 'SSME Business, Partners Relationship Management',
			'job_title' => 'SSME Specialist',
			'total' => 3
			));
			Position::create(array('position_id' => 1352,
			'group' => 'Retail Banking Group',
			'division' => 'SSME Business Division',
			'organization' => 'SSME Product',
			'job_title' => 'Manager, SSME Supply Chain Financing',
			'total' => 1
			));
			Position::create(array('position_id' => 1353,
			'group' => 'Retail Banking Group',
			'division' => 'SSME Business Division',
			'organization' => 'SSME Product & Portfolio Management',
			'job_title' => 'Manager, SSME Business Sales And Product Strategy',
			'total' => 1
			));
			Position::create(array('position_id' => 1354,
			'group' => 'Retail Banking Group',
			'division' => 'SSME Business Division',
			'organization' => 'SSME Product & Portfolio Management',
			'job_title' => 'Product Officer',
			'total' => 9
			));
			Position::create(array('position_id' => 1355,
			'group' => 'Retail Banking Group',
			'division' => 'SSME Business Division',
			'organization' => 'SSME Product & Portfolio Management',
			'job_title' => 'Specialist',
			'total' => 1
			));
			Position::create(array('position_id' => 1356,
			'group' => 'Retail Banking Group',
			'division' => 'SSME Business Division',
			'organization' => 'SSME Product & Portfolio Management',
			'job_title' => 'SSME Specialist',
			'total' => 2
			));
			Position::create(array('position_id' => 1357,
			'group' => 'Retail Banking Group',
			'division' => 'SSME Business Division',
			'organization' => 'SSME Product & Portfolio Management',
			'job_title' => 'Team Manager, Campaign Roll-out',
			'total' => 1
			));
			Position::create(array('position_id' => 1358,
			'group' => 'Retail Banking Group',
			'division' => 'SSME Business Division',
			'organization' => 'SSME Product & Portfolio Management',
			'job_title' => 'Team Manager, Channel Performance and Campaign',
			'total' => 1
			));
			Position::create(array('position_id' => 1359,
			'group' => 'Retail Banking Group',
			'division' => 'SSME Business Division',
			'organization' => 'SSME Product & Portfolio Management',
			'job_title' => 'Team Manager, Customer Relations',
			'total' => 1
			));
			Position::create(array('position_id' => 1360,
			'group' => 'Retail Banking Group',
			'division' => 'Wealth Division',
			'organization' => 'No organization',
			'job_title' => 'FEVP, Division Head, Wealth',
			'total' => 1
			));
			Position::create(array('position_id' => 1361,
			'group' => 'Retail Banking Group',
			'division' => 'Wealth Division',
			'organization' => 'No organization',
			'job_title' => 'Head of Wealth Academy',
			'total' => 1
			));
			Position::create(array('position_id' => 1362,
			'group' => 'Retail Banking Group',
			'division' => 'Wealth Division',
			'organization' => 'No organization',
			'job_title' => 'Project Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1363,
			'group' => 'Retail Banking Group',
			'division' => 'Wealth Division',
			'organization' => 'No organization',
			'job_title' => 'SCB First Relationship Management Officer',
			'total' => 18
			));
			Position::create(array('position_id' => 1364,
			'group' => 'Retail Banking Group',
			'division' => 'Wealth Division',
			'organization' => 'No organization',
			'job_title' => 'Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 1365,
			'group' => 'Retail Banking Group',
			'division' => 'Wealth Division',
			'organization' => 'No organization',
			'job_title' => 'Secretary to Division Head, Wealth',
			'total' => 1
			));
			Position::create(array('position_id' => 1366,
			'group' => 'Retail Banking Group',
			'division' => 'Wealth Division',
			'organization' => 'No organization',
			'job_title' => 'Strategic Planning Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1367,
			'group' => 'Retail Banking Group',
			'division' => 'Wealth Division',
			'organization' => 'No organization',
			'job_title' => 'Team Manager, SCB First Relationship Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1368,
			'group' => 'Retail Banking Group',
			'division' => 'Wealth Division',
			'organization' => 'No organization',
			'job_title' => 'VP (Level)',
			'total' => 1
			));
			Position::create(array('position_id' => 1369,
			'group' => 'Retail Banking Group',
			'division' => 'Wealth Division',
			'organization' => 'No organization',
			'job_title' => 'Wealth Advisor Trainer',
			'total' => 3
			));
			Position::create(array('position_id' => 1370,
			'group' => 'Retail Banking Group',
			'division' => 'Wealth Division',
			'organization' => 'No organization',
			'job_title' => 'Wealth Trainee',
			'total' => 28
			));
			Position::create(array('position_id' => 1371,
			'group' => 'Retail Banking Group',
			'division' => 'Wealth Division',
			'organization' => 'Bancassurance Direct Sales',
			'job_title' => 'Bancassurance Direct Sales Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1372,
			'group' => 'Retail Banking Group',
			'division' => 'Wealth Division',
			'organization' => 'Bancassurance Direct Sales',
			'job_title' => 'Supervisor, Bancassurance Direct Sales',
			'total' => 3
			));
			Position::create(array('position_id' => 1373,
			'group' => 'Retail Banking Group',
			'division' => 'Wealth Division',
			'organization' => 'Banking Products',
			'job_title' => 'Product Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 1374,
			'group' => 'Retail Banking Group',
			'division' => 'Wealth Division',
			'organization' => 'Banking Products',
			'job_title' => 'Team Manager, Deposit Products',
			'total' => 1
			));
			Position::create(array('position_id' => 1375,
			'group' => 'Retail Banking Group',
			'division' => 'Wealth Division',
			'organization' => 'Banking Products',
			'job_title' => 'Team Manager, Fee Based & Debit / ATM Card Products',
			'total' => 1
			));
			Position::create(array('position_id' => 1376,
			'group' => 'Retail Banking Group',
			'division' => 'Wealth Division',
			'organization' => 'Investment Products',
			'job_title' => 'Investment Sales Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 1377,
			'group' => 'Retail Banking Group',
			'division' => 'Wealth Division',
			'organization' => 'Investment Products',
			'job_title' => 'Manager, Investment Products',
			'total' => 1
			));
			Position::create(array('position_id' => 1378,
			'group' => 'Retail Banking Group',
			'division' => 'Wealth Division',
			'organization' => 'Investment Products',
			'job_title' => 'Manager, Investment Sales',
			'total' => 1
			));
			Position::create(array('position_id' => 1379,
			'group' => 'Retail Banking Group',
			'division' => 'Wealth Division',
			'organization' => 'Investment Products',
			'job_title' => 'Product Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 1380,
			'group' => 'Retail Banking Group',
			'division' => 'Wealth Division',
			'organization' => 'Investment Products',
			'job_title' => 'Team Manager, Investment Products',
			'total' => 1
			));
			Position::create(array('position_id' => 1381,
			'group' => 'Risk Management Group',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Chief Risk Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1382,
			'group' => 'Risk Management Group',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Secretary to Chief Risk Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1383,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Analytics',
			'organization' => 'Portfolio Management',
			'job_title' => 'Manager, Portfolio Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1384,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Analytics',
			'organization' => 'Portfolio Management',
			'job_title' => 'Portfolio Management Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 1385,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Analytics',
			'organization' => 'Retail Risk Modeling',
			'job_title' => 'Retail Risk Modeling Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1386,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Analytics',
			'organization' => 'Retail Risk Modeling',
			'job_title' => 'Retail Risk Modeling Officer',
			'total' => 10
			));
			Position::create(array('position_id' => 1387,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Analytics',
			'organization' => 'Risk Information System',
			'job_title' => 'Manager, Risk Information System',
			'total' => 1
			));
			Position::create(array('position_id' => 1388,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Analytics',
			'organization' => 'Risk Information System',
			'job_title' => 'Risk Information System Officer',
			'total' => 13
			));
			Position::create(array('position_id' => 1389,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Analytics',
			'organization' => 'Risk Information System',
			'job_title' => 'VP, Risk Information System',
			'total' => 1
			));
			Position::create(array('position_id' => 1390,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Analytics',
			'organization' => 'Wholesale Risk Modeling',
			'job_title' => 'VP, Wholesale Risk Modeling',
			'total' => 1
			));
			Position::create(array('position_id' => 1391,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Analytics',
			'organization' => 'Wholesale Risk Modeling',
			'job_title' => 'Wholesales Risk Modeling Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1392,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Analytics',
			'organization' => 'Wholesale Risk Modeling',
			'job_title' => 'Wholesales Risk Modeling Officer',
			'total' => 9
			));
			Position::create(array('position_id' => 1393,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'No organization',
			'job_title' => 'Head of Credit Risk Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1394,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Policies & Procedures',
			'job_title' => 'Credit Policies and Procedures Officer',
			'total' => 7
			));
			Position::create(array('position_id' => 1395,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Policies & Procedures',
			'job_title' => 'Manager, Credit Policies and Procedures',
			'total' => 1
			));
			Position::create(array('position_id' => 1396,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 1',
			'job_title' => 'Credit Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1397,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 1',
			'job_title' => 'Credit Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 1398,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 1',
			'job_title' => 'Credit Risk Trainee',
			'total' => 1
			));
			Position::create(array('position_id' => 1399,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 10',
			'job_title' => 'Credit Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1400,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 10',
			'job_title' => 'Credit Officer',
			'total' => 10
			));
			Position::create(array('position_id' => 1401,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 10',
			'job_title' => 'Credit Risk Trainee',
			'total' => 1
			));
			Position::create(array('position_id' => 1402,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 11',
			'job_title' => 'Credit Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1403,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 11',
			'job_title' => 'Credit Officer',
			'total' => 10
			));
			Position::create(array('position_id' => 1404,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 11',
			'job_title' => 'Credit Risk Trainee',
			'total' => 1
			));
			Position::create(array('position_id' => 1405,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 12',
			'job_title' => 'Assistant Credit Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1406,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 12',
			'job_title' => 'Credit Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1407,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 12',
			'job_title' => 'Credit Officer',
			'total' => 10
			));
			Position::create(array('position_id' => 1408,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 12',
			'job_title' => 'Credit Risk Trainee',
			'total' => 1
			));
			Position::create(array('position_id' => 1409,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 2',
			'job_title' => 'Assistant Credit Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1410,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 2',
			'job_title' => 'Credit Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1411,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 2',
			'job_title' => 'Credit Officer',
			'total' => 7
			));
			Position::create(array('position_id' => 1412,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 2',
			'job_title' => 'Credit Risk Trainee',
			'total' => 1
			));
			Position::create(array('position_id' => 1413,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 3',
			'job_title' => 'Credit Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1414,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 3',
			'job_title' => 'Credit Officer',
			'total' => 10
			));
			Position::create(array('position_id' => 1415,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 3',
			'job_title' => 'Credit Risk Trainee',
			'total' => 1
			));
			Position::create(array('position_id' => 1416,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 4',
			'job_title' => 'Assistant Credit Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1417,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 4',
			'job_title' => 'Credit Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1418,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 4',
			'job_title' => 'Credit Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 1419,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 5',
			'job_title' => 'Assistant Credit Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1420,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 5',
			'job_title' => 'Credit Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1421,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 5',
			'job_title' => 'Credit Officer',
			'total' => 9
			));
			Position::create(array('position_id' => 1422,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 5',
			'job_title' => 'Credit Risk Trainee',
			'total' => 1
			));
			Position::create(array('position_id' => 1423,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 6',
			'job_title' => 'Assistant Credit Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1424,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 6',
			'job_title' => 'Credit Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1425,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 6',
			'job_title' => 'Credit Officer',
			'total' => 11
			));
			Position::create(array('position_id' => 1426,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 7',
			'job_title' => 'Assistant Credit Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1427,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 7',
			'job_title' => 'Credit Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1428,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 7',
			'job_title' => 'Credit Officer',
			'total' => 9
			));
			Position::create(array('position_id' => 1429,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 7',
			'job_title' => 'Credit Risk Trainee',
			'total' => 1
			));
			Position::create(array('position_id' => 1430,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 8',
			'job_title' => 'Assistant Credit Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1431,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 8',
			'job_title' => 'Credit Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1432,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 8',
			'job_title' => 'Credit Officer',
			'total' => 11
			));
			Position::create(array('position_id' => 1433,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 8',
			'job_title' => 'Credit Risk Trainee',
			'total' => 1
			));
			Position::create(array('position_id' => 1434,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 9',
			'job_title' => 'Assistant Credit Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1435,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 9',
			'job_title' => 'Credit Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1436,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 9',
			'job_title' => 'Credit Officer',
			'total' => 10
			));
			Position::create(array('position_id' => 1437,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk Management 9',
			'job_title' => 'Credit Risk Trainee',
			'total' => 1
			));
			Position::create(array('position_id' => 1438,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk MIS',
			'job_title' => 'Business Coordinator',
			'total' => 3
			));
			Position::create(array('position_id' => 1439,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk MIS',
			'job_title' => 'Credit Risk MIS Officer',
			'total' => 7
			));
			Position::create(array('position_id' => 1440,
			'group' => 'Risk Management Group',
			'division' => 'Credit Risk Management',
			'organization' => 'Credit Risk MIS',
			'job_title' => 'Manager, Credit Risk MIS',
			'total' => 1
			));
			Position::create(array('position_id' => 1441,
			'group' => 'Risk Management Group',
			'division' => 'Market and Operational Risk',
			'organization' => 'No organization',
			'job_title' => 'FEVP, Head of Market and Operational Risk',
			'total' => 1
			));
			Position::create(array('position_id' => 1442,
			'group' => 'Risk Management Group',
			'division' => 'Market and Operational Risk',
			'organization' => 'No organization',
			'job_title' => 'Secretary to FEVP, Market and Operational Risk',
			'total' => 1
			));
			Position::create(array('position_id' => 1443,
			'group' => 'Risk Management Group',
			'division' => 'Market and Operational Risk',
			'organization' => 'Market Risk Management',
			'job_title' => 'Counterparty and Country Risk Management  Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1444,
			'group' => 'Risk Management Group',
			'division' => 'Market and Operational Risk',
			'organization' => 'Market Risk Management',
			'job_title' => 'Counterparty and Country Risk Management  Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1445,
			'group' => 'Risk Management Group',
			'division' => 'Market and Operational Risk',
			'organization' => 'Market Risk Management',
			'job_title' => 'Head of Market Risk Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1446,
			'group' => 'Risk Management Group',
			'division' => 'Market and Operational Risk',
			'organization' => 'Market Risk Management',
			'job_title' => 'Market Risk Analysis and Methodology  Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1447,
			'group' => 'Risk Management Group',
			'division' => 'Market and Operational Risk',
			'organization' => 'Market Risk Management',
			'job_title' => 'Market Risk Analysis and Methodology Officer  ',
			'total' => 4
			));
			Position::create(array('position_id' => 1448,
			'group' => 'Risk Management Group',
			'division' => 'Market and Operational Risk',
			'organization' => 'Market Risk Management',
			'job_title' => 'Market Risk Measurement and Reporting Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1449,
			'group' => 'Risk Management Group',
			'division' => 'Market and Operational Risk',
			'organization' => 'Market Risk Management',
			'job_title' => 'Market Risk Measurement and Reporting Officer',
			'total' => 10
			));
			Position::create(array('position_id' => 1450,
			'group' => 'Risk Management Group',
			'division' => 'Market and Operational Risk',
			'organization' => 'Market Risk Management',
			'job_title' => 'Market Risk Policies and Procedures Manager       ',
			'total' => 1
			));
			Position::create(array('position_id' => 1451,
			'group' => 'Risk Management Group',
			'division' => 'Market and Operational Risk',
			'organization' => 'Market Risk Management',
			'job_title' => 'Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 1452,
			'group' => 'Risk Management Group',
			'division' => 'Market and Operational Risk',
			'organization' => 'Operational Risk Management',
			'job_title' => 'BCP Development Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1453,
			'group' => 'Risk Management Group',
			'division' => 'Market and Operational Risk',
			'organization' => 'Operational Risk Management',
			'job_title' => 'BCP Quality Assurance Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1454,
			'group' => 'Risk Management Group',
			'division' => 'Market and Operational Risk',
			'organization' => 'Operational Risk Management',
			'job_title' => 'Business Coordinator',
			'total' => 1
			));
			Position::create(array('position_id' => 1455,
			'group' => 'Risk Management Group',
			'division' => 'Market and Operational Risk',
			'organization' => 'Operational Risk Management',
			'job_title' => 'Head of Operational Risk Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1456,
			'group' => 'Risk Management Group',
			'division' => 'Market and Operational Risk',
			'organization' => 'Operational Risk Management',
			'job_title' => 'Incident Response Management Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1457,
			'group' => 'Risk Management Group',
			'division' => 'Market and Operational Risk',
			'organization' => 'Operational Risk Management',
			'job_title' => 'Manager, Business Continuity Plan Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1458,
			'group' => 'Risk Management Group',
			'division' => 'Market and Operational Risk',
			'organization' => 'Operational Risk Management',
			'job_title' => 'Manager, Operational Risk Analytics',
			'total' => 1
			));
			Position::create(array('position_id' => 1459,
			'group' => 'Risk Management Group',
			'division' => 'Market and Operational Risk',
			'organization' => 'Operational Risk Management',
			'job_title' => 'Manager, Operational Risk and Control Assessment',
			'total' => 1
			));
			Position::create(array('position_id' => 1460,
			'group' => 'Risk Management Group',
			'division' => 'Market and Operational Risk',
			'organization' => 'Operational Risk Management',
			'job_title' => 'Operational Risk Analytics Officer',
			'total' => 7
			));
			Position::create(array('position_id' => 1461,
			'group' => 'Risk Management Group',
			'division' => 'Market and Operational Risk',
			'organization' => 'Operational Risk Management',
			'job_title' => 'Operational Risk and Control Assessment Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 1462,
			'group' => 'Risk Management Group',
			'division' => 'Market and Operational Risk',
			'organization' => 'Operational Risk Management',
			'job_title' => 'Operational Risk Trainee',
			'total' => 1
			));
			Position::create(array('position_id' => 1463,
			'group' => 'Risk Management Group',
			'division' => 'Market and Operational Risk',
			'organization' => 'Risk Information Management',
			'job_title' => 'Manager, Risk Information Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1464,
			'group' => 'Risk Management Group',
			'division' => 'Market and Operational Risk',
			'organization' => 'Risk Information Management',
			'job_title' => 'Risk Information Management Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 1465,
			'group' => 'Risk Management Group',
			'division' => 'Retail Credit Risk Management',
			'organization' => 'Auto',
			'job_title' => 'Manager, Auto',
			'total' => 1
			));
			Position::create(array('position_id' => 1466,
			'group' => 'Risk Management Group',
			'division' => 'Retail Credit Risk Management',
			'organization' => 'Auto',
			'job_title' => 'Retail Credit Risk Management Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 1467,
			'group' => 'Risk Management Group',
			'division' => 'Retail Credit Risk Management',
			'organization' => 'Customer Risk and Pricing Strategy',
			'job_title' => 'Retail Credit Risk Management Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1468,
			'group' => 'Risk Management Group',
			'division' => 'Retail Credit Risk Management',
			'organization' => 'Customer Risk and Pricing Strategy',
			'job_title' => 'SVP, Manager, Customer Risk and Pricing Strategy',
			'total' => 1
			));
			Position::create(array('position_id' => 1469,
			'group' => 'Risk Management Group',
			'division' => 'Retail Credit Risk Management',
			'organization' => 'Portfolio Performance Monitoring',
			'job_title' => 'Manager, Portfolio Performance Monitoring',
			'total' => 1
			));
			Position::create(array('position_id' => 1470,
			'group' => 'Risk Management Group',
			'division' => 'Retail Credit Risk Management',
			'organization' => 'Portfolio Performance Monitoring',
			'job_title' => 'Manager, Retail Risk Solution',
			'total' => 1
			));
			Position::create(array('position_id' => 1471,
			'group' => 'Risk Management Group',
			'division' => 'Retail Credit Risk Management',
			'organization' => 'Portfolio Performance Monitoring',
			'job_title' => 'Retail Credit Risk Management Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1472,
			'group' => 'Risk Management Group',
			'division' => 'Retail Credit Risk Management',
			'organization' => 'Portfolio Performance Monitoring',
			'job_title' => 'Retail Portfolio Performance Monitoring Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 1473,
			'group' => 'Risk Management Group',
			'division' => 'Retail Credit Risk Management',
			'organization' => 'Portfolio Performance Monitoring',
			'job_title' => 'Team Manager, Retail Portfolio Performance Monitoring',
			'total' => 1
			));
			Position::create(array('position_id' => 1474,
			'group' => 'Risk Management Group',
			'division' => 'Retail Credit Risk Management',
			'organization' => 'Secured and Risk Policy',
			'job_title' => 'Manager, Retail Cr. Risk Management-SSME',
			'total' => 1
			));
			Position::create(array('position_id' => 1475,
			'group' => 'Risk Management Group',
			'division' => 'Retail Credit Risk Management',
			'organization' => 'Secured and Risk Policy',
			'job_title' => 'Manager, Secured Products',
			'total' => 1
			));
			Position::create(array('position_id' => 1476,
			'group' => 'Risk Management Group',
			'division' => 'Retail Credit Risk Management',
			'organization' => 'Secured and Risk Policy',
			'job_title' => 'Retail Credit Risk Management Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 1477,
			'group' => 'Risk Management Group',
			'division' => 'Retail Credit Risk Management',
			'organization' => 'Secured and Risk Policy',
			'job_title' => 'Team Manager, Secured and Risk Policy',
			'total' => 1
			));
			Position::create(array('position_id' => 1478,
			'group' => 'Risk Management Group',
			'division' => 'Retail Credit Risk Management',
			'organization' => 'Unsecured Products',
			'job_title' => 'Manager, Unsecured Products',
			'total' => 1
			));
			Position::create(array('position_id' => 1479,
			'group' => 'Risk Management Group',
			'division' => 'Retail Credit Risk Management',
			'organization' => 'Unsecured Products',
			'job_title' => 'Retail Credit Risk Management Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 1480,
			'group' => 'Risk Management Group',
			'division' => 'Retail Credit Risk Management',
			'organization' => 'Unsecured Products',
			'job_title' => 'Team Manager, Unsecured Products',
			'total' => 1
			));
			Position::create(array('position_id' => 1481,
			'group' => 'Risk Management Group',
			'division' => 'Risk Management SCBAM',
			'organization' => 'No organization',
			'job_title' => 'Head of Risk Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1482,
			'group' => 'Risk Management Group',
			'division' => 'Risk Management SCBAM',
			'organization' => 'No organization',
			'job_title' => 'Risk Management Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 1483,
			'group' => 'Risk Management Group',
			'division' => 'Risk Management SCBAM',
			'organization' => 'No organization',
			'job_title' => 'Team Manager, Risk Management - SCBAM',
			'total' => 1
			));
			Position::create(array('position_id' => 1484,
			'group' => 'Risk Management Group',
			'division' => 'Risk Management SCBS',
			'organization' => 'No organization',
			'job_title' => 'Head of Risk Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1485,
			'group' => 'Risk Management Group',
			'division' => 'Risk Management SCBS',
			'organization' => 'No organization',
			'job_title' => 'Risk Management Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 1486,
			'group' => 'Special Business Group',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Group Head, Special Business Group',
			'total' => 1
			));
			Position::create(array('position_id' => 1487,
			'group' => 'Special Business Group',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Secretary to Group Head, Special Assets Group',
			'total' => 1
			));
			Position::create(array('position_id' => 1488,
			'group' => 'Special Business Group',
			'division' => 'Central & Southern Region, Special Business',
			'organization' => 'No organization',
			'job_title' => 'Business Coordinator',
			'total' => 1
			));
			Position::create(array('position_id' => 1489,
			'group' => 'Special Business Group',
			'division' => 'Central & Southern Region, Special Business',
			'organization' => 'No organization',
			'job_title' => 'Manager Business Development',
			'total' => 1
			));
			Position::create(array('position_id' => 1490,
			'group' => 'Special Business Group',
			'division' => 'Central & Southern Region, Special Business',
			'organization' => 'No organization',
			'job_title' => 'Sector Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1491,
			'group' => 'Special Business Group',
			'division' => 'Central & Southern Region, Special Business',
			'organization' => 'Special Business, Kaeng Khoi (Saraburi)',
			'job_title' => 'District Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1492,
			'group' => 'Special Business Group',
			'division' => 'Central & Southern Region, Special Business',
			'organization' => 'Special Business, Kaeng Khoi (Saraburi)',
			'job_title' => 'Special Business Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1493,
			'group' => 'Special Business Group',
			'division' => 'Central & Southern Region, Special Business',
			'organization' => 'Special Business, Kaeng Khoi (Saraburi)',
			'job_title' => 'Special Business Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 1494,
			'group' => 'Special Business Group',
			'division' => 'Central & Southern Region, Special Business',
			'organization' => 'Special Business, Suphan Buri',
			'job_title' => 'District Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1495,
			'group' => 'Special Business Group',
			'division' => 'Central & Southern Region, Special Business',
			'organization' => 'Special Business, Suphan Buri',
			'job_title' => 'Special Business Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1496,
			'group' => 'Special Business Group',
			'division' => 'Central & Southern Region, Special Business',
			'organization' => 'Special Business, Thanon Chaofa (Phuket)',
			'job_title' => 'District Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1497,
			'group' => 'Special Business Group',
			'division' => 'Central & Southern Region, Special Business',
			'organization' => 'Special Business, Thanon Chaofa (Phuket)',
			'job_title' => 'Special Business Manager',
			'total' => 3
			));
			Position::create(array('position_id' => 1498,
			'group' => 'Special Business Group',
			'division' => 'Central & Southern Region, Special Business',
			'organization' => 'Special Business, Thanon Chaofa (Phuket)',
			'job_title' => 'Special Business Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1499,
			'group' => 'Special Business Group',
			'division' => 'Central & Southern Region, Special Business',
			'organization' => 'Special Business, Thanon Kanchanawithi (Surat Thani)',
			'job_title' => 'District Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1500,
			'group' => 'Special Business Group',
			'division' => 'Central & Southern Region, Special Business',
			'organization' => 'Special Business, Thanon Kanchanawithi (Surat Thani)',
			'job_title' => 'Special Business Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1501,
			'group' => 'Special Business Group',
			'division' => 'Central & Southern Region, Special Business',
			'organization' => 'Special Business, Thanon Kanchanawithi (Surat Thani)',
			'job_title' => 'Special Business Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 1502,
			'group' => 'Special Business Group',
			'division' => 'Central & Southern Region, Special Business',
			'organization' => 'Special Business, Thanon Rat Yindi (Hat Yai)',
			'job_title' => 'District Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1503,
			'group' => 'Special Business Group',
			'division' => 'Central & Southern Region, Special Business',
			'organization' => 'Special Business, Thanon Rat Yindi (Hat Yai)',
			'job_title' => 'Special Business Manager',
			'total' => 2
			));
			Position::create(array('position_id' => 1504,
			'group' => 'Special Business Group',
			'division' => 'Central & Southern Region, Special Business',
			'organization' => 'Special Business, Thanon Rat Yindi (Hat Yai)',
			'job_title' => 'Special Business Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1505,
			'group' => 'Special Business Group',
			'division' => 'Central & Southern Region, Special Business',
			'organization' => 'Special Business, Thanon Srisuriyawong (Rajchaburi)',
			'job_title' => 'Special Business Manager',
			'total' => 3
			));
			Position::create(array('position_id' => 1506,
			'group' => 'Special Business Group',
			'division' => 'Central & Southern Region, Special Business',
			'organization' => 'Special Business, Thanon Srisuriyawong (Rajchaburi)',
			'job_title' => 'Special Business Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 1507,
			'group' => 'Special Business Group',
			'division' => 'MIS and Planning',
			'organization' => 'Budget',
			'job_title' => 'MIS and planning Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 1508,
			'group' => 'Special Business Group',
			'division' => 'MIS and Planning',
			'organization' => 'Compliance Special Business',
			'job_title' => 'MIS and planning Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1509,
			'group' => 'Special Business Group',
			'division' => 'MIS and Planning',
			'organization' => 'Prevention MIS',
			'job_title' => 'MIS and planning Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 1510,
			'group' => 'Special Business Group',
			'division' => 'MIS and Planning',
			'organization' => 'Strategy and MIS',
			'job_title' => 'Manager Strategy & MIS',
			'total' => 1
			));
			Position::create(array('position_id' => 1511,
			'group' => 'Special Business Group',
			'division' => 'MIS and Planning',
			'organization' => 'Strategy and MIS',
			'job_title' => 'MIS and planning Officer',
			'total' => 7
			));
			Position::create(array('position_id' => 1512,
			'group' => 'Special Business Group',
			'division' => 'Northern and Northeastern Region, Special Business',
			'organization' => 'No organization',
			'job_title' => 'Business Coordinator',
			'total' => 1
			));
			Position::create(array('position_id' => 1513,
			'group' => 'Special Business Group',
			'division' => 'Northern and Northeastern Region, Special Business',
			'organization' => 'No organization',
			'job_title' => 'Manager Business Development',
			'total' => 1
			));
			Position::create(array('position_id' => 1514,
			'group' => 'Special Business Group',
			'division' => 'Northern and Northeastern Region, Special Business',
			'organization' => 'No organization',
			'job_title' => 'Sector Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1515,
			'group' => 'Special Business Group',
			'division' => 'Northern and Northeastern Region, Special Business',
			'organization' => 'Special Business, Chiang Rai',
			'job_title' => 'District Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1516,
			'group' => 'Special Business Group',
			'division' => 'Northern and Northeastern Region, Special Business',
			'organization' => 'Special Business, Chiang Rai',
			'job_title' => 'Special Business Manager',
			'total' => 3
			));
			Position::create(array('position_id' => 1517,
			'group' => 'Special Business Group',
			'division' => 'Northern and Northeastern Region, Special Business',
			'organization' => 'Special Business, Chiang Rai',
			'job_title' => 'Special Business Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1518,
			'group' => 'Special Business Group',
			'division' => 'Northern and Northeastern Region, Special Business',
			'organization' => 'Special Business, Lampang',
			'job_title' => 'District Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1519,
			'group' => 'Special Business Group',
			'division' => 'Northern and Northeastern Region, Special Business',
			'organization' => 'Special Business, Lampang',
			'job_title' => 'Special Business Manager',
			'total' => 2
			));
			Position::create(array('position_id' => 1520,
			'group' => 'Special Business Group',
			'division' => 'Northern and Northeastern Region, Special Business',
			'organization' => 'Special Business, Lampang',
			'job_title' => 'Special Business Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1521,
			'group' => 'Special Business Group',
			'division' => 'Northern and Northeastern Region, Special Business',
			'organization' => 'Special Business, Nakhon Sawan',
			'job_title' => 'District Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1522,
			'group' => 'Special Business Group',
			'division' => 'Northern and Northeastern Region, Special Business',
			'organization' => 'Special Business, Nakhon Sawan',
			'job_title' => 'Special Business Manager',
			'total' => 4
			));
			Position::create(array('position_id' => 1523,
			'group' => 'Special Business Group',
			'division' => 'Northern and Northeastern Region, Special Business',
			'organization' => 'Special Business, Nakhon Sawan',
			'job_title' => 'Special Business Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1524,
			'group' => 'Special Business Group',
			'division' => 'Northern and Northeastern Region, Special Business',
			'organization' => 'Special Business, Si Yaek Maliwan (Khon Kaen)',
			'job_title' => 'District Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1525,
			'group' => 'Special Business Group',
			'division' => 'Northern and Northeastern Region, Special Business',
			'organization' => 'Special Business, Si Yaek Maliwan (Khon Kaen)',
			'job_title' => 'Special Business Manager',
			'total' => 4
			));
			Position::create(array('position_id' => 1526,
			'group' => 'Special Business Group',
			'division' => 'Northern and Northeastern Region, Special Business',
			'organization' => 'Special Business, Si Yaek Maliwan (Khon Kaen)',
			'job_title' => 'Special Business Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1527,
			'group' => 'Special Business Group',
			'division' => 'Northern and Northeastern Region, Special Business',
			'organization' => 'Special Business, Tha Phae (Chiang Mai)',
			'job_title' => 'District Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1528,
			'group' => 'Special Business Group',
			'division' => 'Northern and Northeastern Region, Special Business',
			'organization' => 'Special Business, Tha Phae (Chiang Mai)',
			'job_title' => 'Special Business Manager',
			'total' => 2
			));
			Position::create(array('position_id' => 1529,
			'group' => 'Special Business Group',
			'division' => 'Northern and Northeastern Region, Special Business',
			'organization' => 'Special Business, Tha Phae (Chiang Mai)',
			'job_title' => 'Special Business Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 1530,
			'group' => 'Special Business Group',
			'division' => 'Northern and Northeastern Region, Special Business',
			'organization' => 'Special Business, Thanon Mittraphap (Nakhonratchasima)',
			'job_title' => 'District Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1531,
			'group' => 'Special Business Group',
			'division' => 'Northern and Northeastern Region, Special Business',
			'organization' => 'Special Business, Thanon Mittraphap (Nakhonratchasima)',
			'job_title' => 'Special Business Manager',
			'total' => 2
			));
			Position::create(array('position_id' => 1532,
			'group' => 'Special Business Group',
			'division' => 'Northern and Northeastern Region, Special Business',
			'organization' => 'Special Business, Thanon Mittraphap (Nakhonratchasima)',
			'job_title' => 'Special Business Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1533,
			'group' => 'Special Business Group',
			'division' => 'Northern and Northeastern Region, Special Business',
			'organization' => 'Special Business, Thanon Pho Si(Udon Thani)',
			'job_title' => 'District Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1534,
			'group' => 'Special Business Group',
			'division' => 'Northern and Northeastern Region, Special Business',
			'organization' => 'Special Business, Thanon Pho Si(Udon Thani)',
			'job_title' => 'Special Business Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1535,
			'group' => 'Special Business Group',
			'division' => 'Northern and Northeastern Region, Special Business',
			'organization' => 'Special Business, Thanon Pho Si(Udon Thani)',
			'job_title' => 'Special Business Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 1536,
			'group' => 'Special Business Group',
			'division' => 'Northern and Northeastern Region, Special Business',
			'organization' => 'Special Business, Ubon Ratchathani',
			'job_title' => 'District Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1537,
			'group' => 'Special Business Group',
			'division' => 'Northern and Northeastern Region, Special Business',
			'organization' => 'Special Business, Ubon Ratchathani',
			'job_title' => 'Special Business Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1538,
			'group' => 'Special Business Group',
			'division' => 'Northern and Northeastern Region, Special Business',
			'organization' => 'Special Business, Ubon Ratchathani',
			'job_title' => 'Special Business Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1539,
			'group' => 'Special Business Group',
			'division' => 'NPA Management',
			'organization' => 'Assets Marketing',
			'job_title' => 'Manager, Marketing',
			'total' => 1
			));
			Position::create(array('position_id' => 1540,
			'group' => 'Special Business Group',
			'division' => 'NPA Management',
			'organization' => 'Assets Marketing',
			'job_title' => 'Marketing Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 1541,
			'group' => 'Special Business Group',
			'division' => 'NPA Management',
			'organization' => 'NPA Sale',
			'job_title' => 'Manager, NPA Sales',
			'total' => 1
			));
			Position::create(array('position_id' => 1542,
			'group' => 'Special Business Group',
			'division' => 'NPA Management',
			'organization' => 'NPA Sale',
			'job_title' => 'NPA Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 1543,
			'group' => 'Special Business Group',
			'division' => 'Process Improvement',
			'organization' => 'No organization',
			'job_title' => 'Manager, Process Improvement, Special Business Group',
			'total' => 1
			));
			Position::create(array('position_id' => 1544,
			'group' => 'Special Business Group',
			'division' => 'Process Improvement',
			'organization' => 'No organization',
			'job_title' => 'Process Improvement Officer, Special Business Group',
			'total' => 5
			));
			Position::create(array('position_id' => 1545,
			'group' => 'Special Business Group',
			'division' => 'Retail Special Business',
			'organization' => 'No organization',
			'job_title' => 'Business Coordinator',
			'total' => 1
			));
			Position::create(array('position_id' => 1546,
			'group' => 'Special Business Group',
			'division' => 'Retail Special Business',
			'organization' => 'No organization',
			'job_title' => 'Manager Business Development',
			'total' => 1
			));
			Position::create(array('position_id' => 1547,
			'group' => 'Special Business Group',
			'division' => 'Retail Special Business',
			'organization' => 'No organization',
			'job_title' => 'Sector Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1548,
			'group' => 'Special Business Group',
			'division' => 'Retail Special Business',
			'organization' => 'Retail Monitoring',
			'job_title' => 'Manager, Retail Monitoring',
			'total' => 1
			));
			Position::create(array('position_id' => 1549,
			'group' => 'Special Business Group',
			'division' => 'Retail Special Business',
			'organization' => 'Retail Monitoring',
			'job_title' => 'Special Business Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 1550,
			'group' => 'Special Business Group',
			'division' => 'Retail Special Business',
			'organization' => 'Retail Special Business 1',
			'job_title' => 'Manager, Retail Special Business 1',
			'total' => 1
			));
			Position::create(array('position_id' => 1551,
			'group' => 'Special Business Group',
			'division' => 'Retail Special Business',
			'organization' => 'Retail Special Business 1',
			'job_title' => 'Special Business Manager',
			'total' => 6
			));
			Position::create(array('position_id' => 1552,
			'group' => 'Special Business Group',
			'division' => 'Retail Special Business',
			'organization' => 'Retail Special Business 1',
			'job_title' => 'Special Business Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 1553,
			'group' => 'Special Business Group',
			'division' => 'Retail Special Business',
			'organization' => 'Retail Special Business 2',
			'job_title' => 'Manager, Retail Special Business 2',
			'total' => 1
			));
			Position::create(array('position_id' => 1554,
			'group' => 'Special Business Group',
			'division' => 'Retail Special Business',
			'organization' => 'Retail Special Business 2',
			'job_title' => 'Special Business Manager',
			'total' => 4
			));
			Position::create(array('position_id' => 1555,
			'group' => 'Special Business Group',
			'division' => 'Retail Special Business',
			'organization' => 'Retail Special Business 2',
			'job_title' => 'Special Business Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 1556,
			'group' => 'Special Business Group',
			'division' => 'Retail Special Business',
			'organization' => 'Retail Special Business 3',
			'job_title' => 'Manager, Retail Special Business 3',
			'total' => 1
			));
			Position::create(array('position_id' => 1557,
			'group' => 'Special Business Group',
			'division' => 'Retail Special Business',
			'organization' => 'Retail Special Business 3',
			'job_title' => 'Special Business Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1558,
			'group' => 'Special Business Group',
			'division' => 'Retail Special Business',
			'organization' => 'Retail Special Business 3',
			'job_title' => 'Special Business Officer',
			'total' => 7
			));
			Position::create(array('position_id' => 1559,
			'group' => 'Special Business Group',
			'division' => 'Special Industry',
			'organization' => 'No organization',
			'job_title' => 'Special Business Manager',
			'total' => 2
			));
			Position::create(array('position_id' => 1560,
			'group' => 'Special Business Group',
			'division' => 'Wholesale and Bangkok, Special Business',
			'organization' => 'No organization',
			'job_title' => 'Business Coordinator',
			'total' => 1
			));
			Position::create(array('position_id' => 1561,
			'group' => 'Special Business Group',
			'division' => 'Wholesale and Bangkok, Special Business',
			'organization' => 'No organization',
			'job_title' => 'Manager Business Development',
			'total' => 1
			));
			Position::create(array('position_id' => 1562,
			'group' => 'Special Business Group',
			'division' => 'Wholesale and Bangkok, Special Business',
			'organization' => 'No organization',
			'job_title' => 'Sector Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1563,
			'group' => 'Special Business Group',
			'division' => 'Wholesale and Bangkok, Special Business',
			'organization' => 'SB Special Business',
			'job_title' => 'Manager, SB Special Business',
			'total' => 1
			));
			Position::create(array('position_id' => 1564,
			'group' => 'Special Business Group',
			'division' => 'Wholesale and Bangkok, Special Business',
			'organization' => 'SB Special Business',
			'job_title' => 'Special Business Manager',
			'total' => 3
			));
			Position::create(array('position_id' => 1565,
			'group' => 'Special Business Group',
			'division' => 'Wholesale and Bangkok, Special Business',
			'organization' => 'SB Special Business',
			'job_title' => 'Special Business Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 1566,
			'group' => 'Special Business Group',
			'division' => 'Wholesale and Bangkok, Special Business',
			'organization' => 'Special Business, Thanon Prayasajja (Cholburi)',
			'job_title' => 'District Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1567,
			'group' => 'Special Business Group',
			'division' => 'Wholesale and Bangkok, Special Business',
			'organization' => 'Special Business, Thanon Prayasajja (Cholburi)',
			'job_title' => 'Special Business Manager',
			'total' => 2
			));
			Position::create(array('position_id' => 1568,
			'group' => 'Special Business Group',
			'division' => 'Wholesale and Bangkok, Special Business',
			'organization' => 'Special Business, Thanon Prayasajja (Cholburi)',
			'job_title' => 'Special Business Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1569,
			'group' => 'Special Business Group',
			'division' => 'Wholesale and Bangkok, Special Business',
			'organization' => 'WBG & BBG Special Business',
			'job_title' => 'Manager, WBG & BBG Special Business',
			'total' => 1
			));
			Position::create(array('position_id' => 1570,
			'group' => 'Special Business Group',
			'division' => 'Wholesale and Bangkok, Special Business',
			'organization' => 'WBG & BBG Special Business',
			'job_title' => 'Special Business Manager',
			'total' => 2
			));
			Position::create(array('position_id' => 1571,
			'group' => 'Special Business Group',
			'division' => 'Wholesale and Bangkok, Special Business',
			'organization' => 'WBG & BBG Special Business',
			'job_title' => 'Special Business Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 1572,
			'group' => 'Special Business Group',
			'division' => 'Wholesale and Bangkok, Special Business',
			'organization' => 'Wholesale & MB Special Business 1',
			'job_title' => 'Manager, Wholesale and MB 1',
			'total' => 1
			));
			Position::create(array('position_id' => 1573,
			'group' => 'Special Business Group',
			'division' => 'Wholesale and Bangkok, Special Business',
			'organization' => 'Wholesale & MB Special Business 1',
			'job_title' => 'Special Business Manager',
			'total' => 2
			));
			Position::create(array('position_id' => 1574,
			'group' => 'Special Business Group',
			'division' => 'Wholesale and Bangkok, Special Business',
			'organization' => 'Wholesale & MB Special Business 1',
			'job_title' => 'Special Business Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1575,
			'group' => 'Special Business Group',
			'division' => 'Wholesale and Bangkok, Special Business',
			'organization' => 'Wholesale & MB Special Business 2',
			'job_title' => 'Manager, Wholesale and MB 2',
			'total' => 1
			));
			Position::create(array('position_id' => 1576,
			'group' => 'Special Business Group',
			'division' => 'Wholesale and Bangkok, Special Business',
			'organization' => 'Wholesale & MB Special Business 2',
			'job_title' => 'Special Business Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1577,
			'group' => 'Special Business Group',
			'division' => 'Wholesale and Bangkok, Special Business',
			'organization' => 'Wholesale & MB Special Business 2',
			'job_title' => 'Special Business Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 1578,
			'group' => 'Special Business Group',
			'division' => 'Wholesale and Bangkok, Special Business',
			'organization' => 'Wholesale & MB Special Business 3',
			'job_title' => 'Manager, Wholesale and MB 3',
			'total' => 1
			));
			Position::create(array('position_id' => 1579,
			'group' => 'Special Business Group',
			'division' => 'Wholesale and Bangkok, Special Business',
			'organization' => 'Wholesale & MB Special Business 3',
			'job_title' => 'Special Business Manager',
			'total' => 2
			));
			Position::create(array('position_id' => 1580,
			'group' => 'Special Business Group',
			'division' => 'Wholesale and Bangkok, Special Business',
			'organization' => 'Wholesale & MB Special Business 3',
			'job_title' => 'Special Business Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1581,
			'group' => 'Special Business Group',
			'division' => 'Workout Execution',
			'organization' => 'No organization',
			'job_title' => 'Sector Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1582,
			'group' => 'Special Business Group',
			'division' => 'Workout Execution',
			'organization' => 'Foreclosure Origination',
			'job_title' => 'Manager, Contract & Closing',
			'total' => 1
			));
			Position::create(array('position_id' => 1583,
			'group' => 'Special Business Group',
			'division' => 'Workout Execution',
			'organization' => 'Foreclosure Origination',
			'job_title' => 'Manager, Enforcement & Auction',
			'total' => 1
			));
			Position::create(array('position_id' => 1584,
			'group' => 'Special Business Group',
			'division' => 'Workout Execution',
			'organization' => 'Foreclosure Origination',
			'job_title' => 'Manager, Foreclosure Origination',
			'total' => 1
			));
			Position::create(array('position_id' => 1585,
			'group' => 'Special Business Group',
			'division' => 'Workout Execution',
			'organization' => 'Foreclosure Origination',
			'job_title' => 'Manager, Litigation',
			'total' => 1
			));
			Position::create(array('position_id' => 1586,
			'group' => 'Special Business Group',
			'division' => 'Workout Execution',
			'organization' => 'Foreclosure Origination',
			'job_title' => 'Workout Execution Officer',
			'total' => 26
			));
			Position::create(array('position_id' => 1587,
			'group' => 'Special Business Group',
			'division' => 'Workout Execution',
			'organization' => 'Workout Operation',
			'job_title' => 'Manager, Appraisal Control',
			'total' => 1
			));
			Position::create(array('position_id' => 1588,
			'group' => 'Special Business Group',
			'division' => 'Workout Execution',
			'organization' => 'Workout Operation',
			'job_title' => 'Manager, OP Servicing',
			'total' => 1
			));
			Position::create(array('position_id' => 1589,
			'group' => 'Special Business Group',
			'division' => 'Workout Execution',
			'organization' => 'Workout Operation',
			'job_title' => 'Manager, Workout Allocation',
			'total' => 1
			));
			Position::create(array('position_id' => 1590,
			'group' => 'Special Business Group',
			'division' => 'Workout Execution',
			'organization' => 'Workout Operation',
			'job_title' => 'Manager, Workout Operation',
			'total' => 1
			));
			Position::create(array('position_id' => 1591,
			'group' => 'Special Business Group',
			'division' => 'Workout Execution',
			'organization' => 'Workout Operation',
			'job_title' => 'Workout Execution Officer',
			'total' => 19
			));
			Position::create(array('position_id' => 1592,
			'group' => 'Special Business Group',
			'division' => 'Workout Execution',
			'organization' => 'Workout Origination and Execution',
			'job_title' => 'Manager, Credit Origination',
			'total' => 1
			));
			Position::create(array('position_id' => 1593,
			'group' => 'Special Business Group',
			'division' => 'Workout Execution',
			'organization' => 'Workout Origination and Execution',
			'job_title' => 'Manager, Credit Origination 1',
			'total' => 1
			));
			Position::create(array('position_id' => 1594,
			'group' => 'Special Business Group',
			'division' => 'Workout Execution',
			'organization' => 'Workout Origination and Execution',
			'job_title' => 'Manager, Credit Origination 2',
			'total' => 1
			));
			Position::create(array('position_id' => 1595,
			'group' => 'Special Business Group',
			'division' => 'Workout Execution',
			'organization' => 'Workout Origination and Execution',
			'job_title' => 'Workout Execution Officer',
			'total' => 10
			));
			Position::create(array('position_id' => 1596,
			'group' => 'Technology and Operations Group',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Consultant, Systematic Application for Core Bank upgrade',
			'total' => 1
			));
			Position::create(array('position_id' => 1597,
			'group' => 'Technology and Operations Group',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Secretary to Group Head, Technology and Operations Group',
			'total' => 1
			));
			Position::create(array('position_id' => 1598,
			'group' => 'Technology and Operations Group',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'SEVP, Group Head, Technology and Operations',
			'total' => 1
			));
			Position::create(array('position_id' => 1599,
			'group' => 'Technology and Operations Group',
			'division' => 'Enterprise Architecture',
			'organization' => 'No organization',
			'job_title' => 'Manager, Enterprise Architecture',
			'total' => 1
			));
			Position::create(array('position_id' => 1600,
			'group' => 'Technology and Operations Group',
			'division' => 'Enterprise Architecture',
			'organization' => 'Application Architecture',
			'job_title' => 'Application Architect',
			'total' => 2
			));
			Position::create(array('position_id' => 1601,
			'group' => 'Technology and Operations Group',
			'division' => 'Enterprise Architecture',
			'organization' => 'Application Architecture',
			'job_title' => 'IT Architect',
			'total' => 1
			));
			Position::create(array('position_id' => 1602,
			'group' => 'Technology and Operations Group',
			'division' => 'Enterprise Architecture',
			'organization' => 'Application Architecture',
			'job_title' => 'Manager, Application Architecture',
			'total' => 1
			));
			Position::create(array('position_id' => 1603,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Business Alignment',
			'organization' => 'No organization',
			'job_title' => 'EVP, CIO, IT Business Alignment Division',
			'total' => 1
			));
			Position::create(array('position_id' => 1604,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Business Alignment',
			'organization' => 'No organization',
			'job_title' => 'IT Client Service Manager and Team Lead, Lending',
			'total' => 1
			));
			Position::create(array('position_id' => 1605,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Business Alignment',
			'organization' => 'No organization',
			'job_title' => 'IT Client Service Manager, Digital Banking and Innovation',
			'total' => 1
			));
			Position::create(array('position_id' => 1606,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Business Alignment',
			'organization' => 'No organization',
			'job_title' => 'Secretary to EVP, CIO, Business Alignment',
			'total' => 1
			));
			Position::create(array('position_id' => 1607,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Business Alignment',
			'organization' => 'IT Client Services, Channel',
			'job_title' => 'IT Client Service Manager & Team Lead, Channel',
			'total' => 1
			));
			Position::create(array('position_id' => 1608,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Business Alignment',
			'organization' => 'IT Client Services, Digital Banking and Innovation',
			'job_title' => 'IT Client Service Officer, Digital Banking',
			'total' => 1
			));
			Position::create(array('position_id' => 1609,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Business Alignment',
			'organization' => 'IT Client Services, Digital Banking and Innovation',
			'job_title' => 'IT Management Trainee',
			'total' => 1
			));
			Position::create(array('position_id' => 1610,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Business Alignment',
			'organization' => 'IT Client Services, Lending',
			'job_title' => 'IT Client Service Manager, Lending',
			'total' => 1
			));
			Position::create(array('position_id' => 1611,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Business Alignment',
			'organization' => 'IT Client Services, Lending',
			'job_title' => 'IT Client Service Officer, Lending',
			'total' => 1
			));
			Position::create(array('position_id' => 1612,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Business Alignment',
			'organization' => 'IT Client Services, Risk, Audit & Compliance, General Counsel & Support Group',
			'job_title' => 'IT Client Service Manager & Team Lead, Risk & Support Group',
			'total' => 1
			));
			Position::create(array('position_id' => 1613,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Business Alignment',
			'organization' => 'IT Client Services, Risk, Audit & Compliance, General Counsel & Support Group',
			'job_title' => 'IT Client Service Officer, Risk & Support Group',
			'total' => 3
			));
			Position::create(array('position_id' => 1614,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Business Alignment',
			'organization' => 'IT Client Services, Support',
			'job_title' => 'End User Computing Standard Analyst',
			'total' => 2
			));
			Position::create(array('position_id' => 1615,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Business Alignment',
			'organization' => 'IT Client Services, Support',
			'job_title' => 'IT Client Service Support',
			'total' => 2
			));
			Position::create(array('position_id' => 1616,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Business Alignment',
			'organization' => 'IT Client Services, Transaction Banking, Financial Market, IBB and Group Treasury',
			'job_title' => 'IT Client Service Manager & Team Lead, Transaction Banking',
			'total' => 1
			));
			Position::create(array('position_id' => 1617,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Business Alignment',
			'organization' => 'IT Client Services, Transaction Banking, Financial Market, IBB and Group Treasury',
			'job_title' => 'IT Client Service Officer, Transaction Banking',
			'total' => 5
			));
			Position::create(array('position_id' => 1618,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Business Alignment',
			'organization' => 'IT Client Services, Transaction Banking, Financial Market, IBB and Group Treasury',
			'job_title' => 'IT Client Services Specialist',
			'total' => 1
			));
			Position::create(array('position_id' => 1619,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Business Alignment',
			'organization' => 'IT Client Services, Transaction Banking, Financial Market, IBB and Group Treasury',
			'job_title' => 'IT Management Trainee',
			'total' => 1
			));
			Position::create(array('position_id' => 1620,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Business Alignment',
			'organization' => 'IT Client Services, Wealth',
			'job_title' => 'IT Client Service Officer, Wealth',
			'total' => 2
			));
			Position::create(array('position_id' => 1621,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Business Alignment',
			'organization' => 'IT Client Services, Wealth',
			'job_title' => 'IT Management Trainee',
			'total' => 1
			));
			Position::create(array('position_id' => 1622,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Business Alignment',
			'organization' => 'IT Performance Measurement',
			'job_title' => 'IT Performance Measurement Analyst',
			'total' => 3
			));
			Position::create(array('position_id' => 1623,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Business Alignment',
			'organization' => 'IT Performance Measurement',
			'job_title' => 'IT Performance Measurement Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1624,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Business Alignment',
			'organization' => 'IT Performance Measurement',
			'job_title' => 'Manager, IT Performance Measurement',
			'total' => 1
			));
			Position::create(array('position_id' => 1625,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Business Alignment',
			'organization' => 'IT Risk & Incident Management',
			'job_title' => 'IT Risk Management Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1626,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Business Alignment',
			'organization' => 'IT Risk & Incident Management',
			'job_title' => 'Manager, Incident and Problem Performance Improvement',
			'total' => 1
			));
			Position::create(array('position_id' => 1627,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Business Alignment',
			'organization' => 'Partner Relations',
			'job_title' => 'Partner Relations Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1628,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'No organization',
			'job_title' => 'EVP, CIO, IT Development Division',
			'total' => 1
			));
			Position::create(array('position_id' => 1629,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'No organization',
			'job_title' => 'Secretary to EVP,CIO, Development',
			'total' => 1
			));
			Position::create(array('position_id' => 1630,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'Demand , Supply and Resource Pool',
			'job_title' => 'Developer Team Lead',
			'total' => 1
			));
			Position::create(array('position_id' => 1631,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'Demand , Supply and Resource Pool',
			'job_title' => 'IT Management Trainee',
			'total' => 43
			));
			Position::create(array('position_id' => 1632,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'Demand , Supply and Resource Pool',
			'job_title' => 'Manager, Demand, Supply & COE Team',
			'total' => 1
			));
			Position::create(array('position_id' => 1633,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'Demand , Supply and Resource Pool',
			'job_title' => 'Manager, Demand, Supply and Resource Pool',
			'total' => 1
			));
			Position::create(array('position_id' => 1634,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'Demand , Supply and Resource Pool',
			'job_title' => 'Manager, Developer Team & Off Shore Development Center',
			'total' => 1
			));
			Position::create(array('position_id' => 1635,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'Demand , Supply and Resource Pool',
			'job_title' => 'Manager, IT Development Performance Monitoring & Control',
			'total' => 1
			));
			Position::create(array('position_id' => 1636,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'Demand , Supply and Resource Pool',
			'job_title' => 'Manager, IT Project Management Pool',
			'total' => 1
			));
			Position::create(array('position_id' => 1637,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'Demand , Supply and Resource Pool',
			'job_title' => 'Manager, Rapid Response Team',
			'total' => 1
			));
			Position::create(array('position_id' => 1638,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'Demand , Supply and Resource Pool',
			'job_title' => 'Manager, System Integrated Test Team',
			'total' => 1
			));
			Position::create(array('position_id' => 1639,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'Demand , Supply and Resource Pool',
			'job_title' => 'Manager, Technical Business Analysis',
			'total' => 1
			));
			Position::create(array('position_id' => 1640,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'Demand , Supply and Resource Pool',
			'job_title' => 'Off Shore Development Center Lead',
			'total' => 1
			));
			Position::create(array('position_id' => 1641,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'Demand , Supply and Resource Pool',
			'job_title' => 'Officer, IT Development Performance Monitoring & Control',
			'total' => 5
			));
			Position::create(array('position_id' => 1642,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'Demand , Supply and Resource Pool',
			'job_title' => 'Project Manager',
			'total' => 9
			));
			Position::create(array('position_id' => 1643,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'Demand , Supply and Resource Pool',
			'job_title' => 'Rapid Response Team Lead',
			'total' => 3
			));
			Position::create(array('position_id' => 1644,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'Demand , Supply and Resource Pool',
			'job_title' => 'Senior Developer',
			'total' => 42
			));
			Position::create(array('position_id' => 1645,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'Demand , Supply and Resource Pool',
			'job_title' => 'Senior Officer,IT Development Performance Monitoring&Control',
			'total' => 2
			));
			Position::create(array('position_id' => 1646,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'Demand , Supply and Resource Pool',
			'job_title' => 'Senior System Integrated Test Designer',
			'total' => 5
			));
			Position::create(array('position_id' => 1647,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'Demand , Supply and Resource Pool',
			'job_title' => 'System Integrated Test Design Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1648,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'Demand , Supply and Resource Pool',
			'job_title' => 'System Integrated Tester',
			'total' => 10
			));
			Position::create(array('position_id' => 1649,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'Demand , Supply and Resource Pool',
			'job_title' => 'Technical Analyst',
			'total' => 9
			));
			Position::create(array('position_id' => 1650,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'Demand , Supply and Resource Pool',
			'job_title' => 'Technical Business Analyst',
			'total' => 16
			));
			Position::create(array('position_id' => 1651,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution Cards & Loyalty',
			'job_title' => 'Senior Solution Design Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1652,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution Cards & Loyalty',
			'job_title' => 'Senior Technical Analyst',
			'total' => 3
			));
			Position::create(array('position_id' => 1653,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution Cards & Loyalty',
			'job_title' => 'Solution Design Manager',
			'total' => 2
			));
			Position::create(array('position_id' => 1654,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution Cards & Loyalty',
			'job_title' => 'Technical Analyst',
			'total' => 1
			));
			Position::create(array('position_id' => 1655,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution Channels & Innovation',
			'job_title' => 'Manager, Application Area - Branch & Booth',
			'total' => 1
			));
			Position::create(array('position_id' => 1656,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution Channels & Innovation',
			'job_title' => 'Manager, Application Area - Corporate Internet',
			'total' => 1
			));
			Position::create(array('position_id' => 1657,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution Channels & Innovation',
			'job_title' => 'Manager, Application Area - Retail Internet & Mobile',
			'total' => 1
			));
			Position::create(array('position_id' => 1658,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution Channels & Innovation',
			'job_title' => 'Manager, IT Solution Channels & Innovation',
			'total' => 1
			));
			Position::create(array('position_id' => 1659,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution Channels & Innovation',
			'job_title' => 'Senior Technical Analyst',
			'total' => 3
			));
			Position::create(array('position_id' => 1660,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution Channels & Innovation',
			'job_title' => 'Solution Design Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1661,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution Channels & Innovation',
			'job_title' => 'Technical Analyst',
			'total' => 11
			));
			Position::create(array('position_id' => 1662,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution EDW, Finance & others',
			'job_title' => 'Manager, Application Area - EDW & BI',
			'total' => 1
			));
			Position::create(array('position_id' => 1663,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution EDW, Finance & others',
			'job_title' => 'Manager, Application Area - Finance & HRMS',
			'total' => 1
			));
			Position::create(array('position_id' => 1664,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution EDW, Finance & others',
			'job_title' => 'Manager, Application Area - Regulatory',
			'total' => 1
			));
			Position::create(array('position_id' => 1665,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution EDW, Finance & others',
			'job_title' => 'Manager, Application Area - Risk & Support Functions',
			'total' => 1
			));
			Position::create(array('position_id' => 1666,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution EDW, Finance & others',
			'job_title' => 'Manager, IT Solution EDW, Finance & others',
			'total' => 1
			));
			Position::create(array('position_id' => 1667,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution EDW, Finance & others',
			'job_title' => 'Senior Technical Analyst',
			'total' => 4
			));
			Position::create(array('position_id' => 1668,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution EDW, Finance & others',
			'job_title' => 'Solution Design Manager',
			'total' => 4
			));
			Position::create(array('position_id' => 1669,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution EDW, Finance & others',
			'job_title' => 'Technical Analyst',
			'total' => 18
			));
			Position::create(array('position_id' => 1670,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution Lending',
			'job_title' => 'Manager, Application Area - Origination',
			'total' => 1
			));
			Position::create(array('position_id' => 1671,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution Lending',
			'job_title' => 'Manager, Application Area - Servicing Trade Finance',
			'total' => 1
			));
			Position::create(array('position_id' => 1672,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution Lending',
			'job_title' => 'Manager, Application Area–Collection & Collateral Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1673,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution Lending',
			'job_title' => 'Solution Design Manager',
			'total' => 2
			));
			Position::create(array('position_id' => 1674,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution Lending',
			'job_title' => 'Technical Analyst',
			'total' => 8
			));
			Position::create(array('position_id' => 1675,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution Salesforce , Call Center & IVR',
			'job_title' => 'Manager, IT Solution Salesforce, Call Center & IVR',
			'total' => 1
			));
			Position::create(array('position_id' => 1676,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution Salesforce , Call Center & IVR',
			'job_title' => 'Solution Design Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1677,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution Salesforce , Call Center & IVR',
			'job_title' => 'Technical Analyst',
			'total' => 5
			));
			Position::create(array('position_id' => 1678,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution Securities',
			'job_title' => 'Manager, IT Solution Securities',
			'total' => 1
			));
			Position::create(array('position_id' => 1679,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution Securities',
			'job_title' => 'Senior Technical Analyst',
			'total' => 1
			));
			Position::create(array('position_id' => 1680,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution Securities',
			'job_title' => 'Technical Analyst',
			'total' => 3
			));
			Position::create(array('position_id' => 1681,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution Treasury & GTS',
			'job_title' => 'Manager, Application Area - GTS',
			'total' => 1
			));
			Position::create(array('position_id' => 1682,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution Treasury & GTS',
			'job_title' => 'Manager, Application Area - Investment Products & SCBAM',
			'total' => 1
			));
			Position::create(array('position_id' => 1683,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution Treasury & GTS',
			'job_title' => 'Manager, Application Area - Payment & Cheque Clearing',
			'total' => 1
			));
			Position::create(array('position_id' => 1684,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution Treasury & GTS',
			'job_title' => 'Manager, Application Area - Treasury',
			'total' => 1
			));
			Position::create(array('position_id' => 1685,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution Treasury & GTS',
			'job_title' => 'Manager, IT Solution Treasury & GTS',
			'total' => 1
			));
			Position::create(array('position_id' => 1686,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution Treasury & GTS',
			'job_title' => 'Senior Solution Design Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 1687,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution Treasury & GTS',
			'job_title' => 'Senior Technical Analyst',
			'total' => 2
			));
			Position::create(array('position_id' => 1688,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution Treasury & GTS',
			'job_title' => 'Solution Design Manager',
			'total' => 5
			));
			Position::create(array('position_id' => 1689,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution Treasury & GTS',
			'job_title' => 'Technical Analyst',
			'total' => 7
			));
			Position::create(array('position_id' => 1690,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution University Value Chain',
			'job_title' => 'Manager, IT Solution University Value Chain',
			'total' => 1
			));
			Position::create(array('position_id' => 1691,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Development Division',
			'organization' => 'IT Solution University Value Chain',
			'job_title' => 'Technical Analyst',
			'total' => 1
			));
			Position::create(array('position_id' => 1692,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'No organization',
			'job_title' => 'EVP, CIO, IT Operations Division',
			'total' => 1
			));
			Position::create(array('position_id' => 1693,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'No organization',
			'job_title' => 'Secretary to EVP, CIO, Operations',
			'total' => 1
			));
			Position::create(array('position_id' => 1694,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Data and Process Management',
			'job_title' => 'BI & DLP Management Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 1695,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Data and Process Management',
			'job_title' => 'Business Data Analyst',
			'total' => 3
			));
			Position::create(array('position_id' => 1696,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Data and Process Management',
			'job_title' => 'Data Extractor',
			'total' => 8
			));
			Position::create(array('position_id' => 1697,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Data and Process Management',
			'job_title' => 'IT Process and Capacity Management Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 1698,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Data and Process Management',
			'job_title' => 'IT Resource Development Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 1699,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Data and Process Management',
			'job_title' => 'ITG Support Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 1700,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Data and Process Management',
			'job_title' => 'Manager, Business Data Analysis',
			'total' => 1
			));
			Position::create(array('position_id' => 1701,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Data and Process Management',
			'job_title' => 'Manager, Data Extraction',
			'total' => 1
			));
			Position::create(array('position_id' => 1702,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Data and Process Management',
			'job_title' => 'Manager, IT Data and Process Management(28-02-2014)',
			'total' => 1
			));
			Position::create(array('position_id' => 1703,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Data and Process Management',
			'job_title' => 'Manager, IT Process and Capacity Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1704,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Data and Process Management',
			'job_title' => 'Manager, IT Resource Development',
			'total' => 1
			));
			Position::create(array('position_id' => 1705,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Data and Process Management',
			'job_title' => 'Manager, ITG Support',
			'total' => 1
			));
			Position::create(array('position_id' => 1706,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Data and Process Management',
			'job_title' => 'Specialist',
			'total' => 2
			));
			Position::create(array('position_id' => 1707,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Data and Process Management',
			'job_title' => 'Supervisor, IT Process and Capacity Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1708,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Data Center Processing',
			'job_title' => 'Mainframe Processing officer',
			'total' => 14
			));
			Position::create(array('position_id' => 1709,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Data Center Processing',
			'job_title' => 'Mainframe System Scheduler officer',
			'total' => 3
			));
			Position::create(array('position_id' => 1710,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Data Center Processing',
			'job_title' => 'Manager, Mainframe Processing',
			'total' => 1
			));
			Position::create(array('position_id' => 1711,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Data Center Processing',
			'job_title' => 'Manager, Open Processing',
			'total' => 1
			));
			Position::create(array('position_id' => 1712,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Data Center Processing',
			'job_title' => 'Open Processing Officer',
			'total' => 10
			));
			Position::create(array('position_id' => 1713,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Data Center Processing',
			'job_title' => 'Open System Scheduler officer',
			'total' => 6
			));
			Position::create(array('position_id' => 1714,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Data Center Processing',
			'job_title' => 'Shift Supervisor, Mainframe Processing',
			'total' => 4
			));
			Position::create(array('position_id' => 1715,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Data Center Processing',
			'job_title' => 'Shift Supervisor, Open Processing',
			'total' => 4
			));
			Position::create(array('position_id' => 1716,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Data Center Processing',
			'job_title' => 'Supervisor, Mainframe System Scheduler',
			'total' => 1
			));
			Position::create(array('position_id' => 1717,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Data Center Processing',
			'job_title' => 'Supervisor, Open System Scheduler',
			'total' => 1
			));
			Position::create(array('position_id' => 1718,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Network Management',
			'job_title' => 'Data Center Infrastructure officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1719,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Network Management',
			'job_title' => 'Manager, Advance IT Network and Architect',
			'total' => 1
			));
			Position::create(array('position_id' => 1720,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Network Management',
			'job_title' => 'Manager, Data Center Infrastructure',
			'total' => 1
			));
			Position::create(array('position_id' => 1721,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Network Management',
			'job_title' => 'Manager, IT Infrastructure Network',
			'total' => 1
			));
			Position::create(array('position_id' => 1722,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Network Management',
			'job_title' => 'Manager, IT Infrastructure Network - LAN',
			'total' => 1
			));
			Position::create(array('position_id' => 1723,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Network Management',
			'job_title' => 'Manager, IT Network Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1724,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Network Management',
			'job_title' => 'Officer, IT Advance Network',
			'total' => 4
			));
			Position::create(array('position_id' => 1725,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Network Management',
			'job_title' => 'Officer, IT Infrastructure Network',
			'total' => 6
			));
			Position::create(array('position_id' => 1726,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Network Management',
			'job_title' => 'Officer, IT Infrastructure Network - LAN',
			'total' => 5
			));
			Position::create(array('position_id' => 1727,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Network Management',
			'job_title' => 'Officer, IT Network Architect',
			'total' => 1
			));
			Position::create(array('position_id' => 1728,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Network Management',
			'job_title' => 'Officer, IT Network Facility Management',
			'total' => 2
			));
			Position::create(array('position_id' => 1729,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Network Management',
			'job_title' => 'Officer, IT Network Operation Center',
			'total' => 6
			));
			Position::create(array('position_id' => 1730,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Network Management',
			'job_title' => 'Senior Officer, IT Advance Network',
			'total' => 1
			));
			Position::create(array('position_id' => 1731,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Network Management',
			'job_title' => 'Senior Officer, IT Infrastructure Network - LAN',
			'total' => 2
			));
			Position::create(array('position_id' => 1732,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Network Management',
			'job_title' => 'Senior Officer, IT Network Architect',
			'total' => 2
			));
			Position::create(array('position_id' => 1733,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Network Management',
			'job_title' => 'Supervisor, IT Advance Network',
			'total' => 1
			));
			Position::create(array('position_id' => 1734,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Network Management',
			'job_title' => 'Supervisor, IT Infrastructure Network - WAN',
			'total' => 1
			));
			Position::create(array('position_id' => 1735,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'IT Network Management',
			'job_title' => 'Supervisor, IT Network Operation Center',
			'total' => 1
			));
			Position::create(array('position_id' => 1736,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'ATM Monitoring 1 Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 1737,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'ATM Monitoring 2 Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 1738,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'ATM Monitoring 3 Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 1739,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'ATM Support Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1740,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'ATM Support Supervisor',
			'total' => 1
			));
			Position::create(array('position_id' => 1741,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'Data Base Administration Analyst',
			'total' => 7
			));
			Position::create(array('position_id' => 1742,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'Database Administration Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1743,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'Duty Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1744,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'Incident and Problem Management Technical Analyst',
			'total' => 3
			));
			Position::create(array('position_id' => 1745,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'IT Help Desk 1 Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 1746,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'IT Help Desk 2 Officer',
			'total' => 7
			));
			Position::create(array('position_id' => 1747,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'IT Help Desk 3 Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 1748,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'IT Help Desk Performance Management Team',
			'total' => 3
			));
			Position::create(array('position_id' => 1749,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'IT Management Trainee',
			'total' => 3
			));
			Position::create(array('position_id' => 1750,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'IT Rollout 1 Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 1751,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'IT Roll-out 1 Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1752,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'IT Rollout 1 Supervisor',
			'total' => 1
			));
			Position::create(array('position_id' => 1753,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'IT Rollout 2 Officer',
			'total' => 7
			));
			Position::create(array('position_id' => 1754,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'IT Rollout 2 Supervisor',
			'total' => 1
			));
			Position::create(array('position_id' => 1755,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'IT Rollout 3 Officer',
			'total' => 7
			));
			Position::create(array('position_id' => 1756,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'IT Rollout 3 Supervisor',
			'total' => 1
			));
			Position::create(array('position_id' => 1757,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'IT Rollout 4 Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 1758,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'IT Roll-out 4 Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1759,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'IT Rollout 5 Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 1760,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'IT Rollout 5 Supervisor',
			'total' => 1
			));
			Position::create(array('position_id' => 1761,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'Mainframe System Programming Analyst',
			'total' => 6
			));
			Position::create(array('position_id' => 1762,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'Manager, ATM Self Service Operation',
			'total' => 1
			));
			Position::create(array('position_id' => 1763,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'Manager, Database Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1764,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'Manager, Incident and Problem Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1765,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'Manager, IT Help Desk',
			'total' => 1
			));
			Position::create(array('position_id' => 1766,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'Manager, IT Operation Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1767,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'Manager, IT Rollout Branch',
			'total' => 1
			));
			Position::create(array('position_id' => 1768,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'Manager, IT Rollout HO',
			'total' => 1
			));
			Position::create(array('position_id' => 1769,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'Manager, IT System and Services Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1770,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'Manager, IT System Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1771,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'Manager, Mainframe System',
			'total' => 1
			));
			Position::create(array('position_id' => 1772,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'Manager, Server - Windows',
			'total' => 1
			));
			Position::create(array('position_id' => 1773,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'Manager, Server- Group Services',
			'total' => 1
			));
			Position::create(array('position_id' => 1774,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'Manager, Server-Unix',
			'total' => 1
			));
			Position::create(array('position_id' => 1775,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'Manager, Storage Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1776,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'Manager, Technology Architecture',
			'total' => 1
			));
			Position::create(array('position_id' => 1777,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'Manager, Teradata Data Base Administration',
			'total' => 1
			));
			Position::create(array('position_id' => 1778,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'Server - Windows System Programming Analyst',
			'total' => 7
			));
			Position::create(array('position_id' => 1779,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'Server- Group Services System Programming Analyst',
			'total' => 2
			));
			Position::create(array('position_id' => 1780,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'Server-Unix System Programming Analyst',
			'total' => 6
			));
			Position::create(array('position_id' => 1781,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'Service Availability Administrator',
			'total' => 2
			));
			Position::create(array('position_id' => 1782,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'Service Availability Technical Analyst',
			'total' => 2
			));
			Position::create(array('position_id' => 1783,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'Service Monitoring Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 1784,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'Supervisor, ATM Monitoring 1',
			'total' => 1
			));
			Position::create(array('position_id' => 1785,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'Supervisor, ATM Monitoring 2',
			'total' => 1
			));
			Position::create(array('position_id' => 1786,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'Supervisor, ATM Monitoring 3',
			'total' => 1
			));
			Position::create(array('position_id' => 1787,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'Supervisor, IT Help Desk Performance Management Team',
			'total' => 1
			));
			Position::create(array('position_id' => 1788,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'Supervisor, IT Rollout 4',
			'total' => 1
			));
			Position::create(array('position_id' => 1789,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'Tandem System Programming Analyst',
			'total' => 3
			));
			Position::create(array('position_id' => 1790,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'Technology Architect',
			'total' => 4
			));
			Position::create(array('position_id' => 1791,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Operations Division',
			'organization' => 'System and Services Management',
			'job_title' => 'Teradata Data Base Administration Analyst',
			'total' => 2
			));
			Position::create(array('position_id' => 1792,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Security and IT Solution Quality Division',
			'organization' => 'No organization',
			'job_title' => 'IT Management Trainee',
			'total' => 4
			));
			Position::create(array('position_id' => 1793,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Security and IT Solution Quality Division',
			'organization' => 'No organization',
			'job_title' => 'Manager, Data Breach Investigation',
			'total' => 1
			));
			Position::create(array('position_id' => 1794,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Security and IT Solution Quality Division',
			'organization' => 'No organization',
			'job_title' => 'Manager, IT Security',
			'total' => 1
			));
			Position::create(array('position_id' => 1795,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Security and IT Solution Quality Division',
			'organization' => 'No organization',
			'job_title' => 'Manager, IT Solution Quality',
			'total' => 1
			));
			Position::create(array('position_id' => 1796,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Security and IT Solution Quality Division',
			'organization' => 'No organization',
			'job_title' => 'Secure Coding Specialist',
			'total' => 1
			));
			Position::create(array('position_id' => 1797,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Security and IT Solution Quality Division',
			'organization' => 'Application Deployment Administration',
			'job_title' => 'Application Deployment Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 1798,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Security and IT Solution Quality Division',
			'organization' => 'Application Deployment Administration',
			'job_title' => 'Manager, Application Deployment Administration',
			'total' => 1
			));
			Position::create(array('position_id' => 1799,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Security and IT Solution Quality Division',
			'organization' => 'IT Infrastructure Security',
			'job_title' => 'IT Infrastructure Security Specialist',
			'total' => 1
			));
			Position::create(array('position_id' => 1800,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Security and IT Solution Quality Division',
			'organization' => 'IT Infrastructure Security',
			'job_title' => 'IT Network Security Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 1801,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Security and IT Solution Quality Division',
			'organization' => 'IT Infrastructure Security',
			'job_title' => 'IT System & Application Security Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 1802,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Security and IT Solution Quality Division',
			'organization' => 'IT Infrastructure Security',
			'job_title' => 'Manager, IT Infrastructure Security',
			'total' => 1
			));
			Position::create(array('position_id' => 1803,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Security and IT Solution Quality Division',
			'organization' => 'IT Security Operations',
			'job_title' => 'Manager, IT Security Operations',
			'total' => 1
			));
			Position::create(array('position_id' => 1804,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Security and IT Solution Quality Division',
			'organization' => 'IT Security Operations',
			'job_title' => 'Manager, PIN Code & Encryption Key Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1805,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Security and IT Solution Quality Division',
			'organization' => 'IT Security Operations',
			'job_title' => 'Manager,User Security Administration',
			'total' => 1
			));
			Position::create(array('position_id' => 1806,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Security and IT Solution Quality Division',
			'organization' => 'IT Security Operations',
			'job_title' => 'PIN Code & Encryption Key Management Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 1807,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Security and IT Solution Quality Division',
			'organization' => 'IT Security Operations',
			'job_title' => 'User Security Administration Officer',
			'total' => 10
			));
			Position::create(array('position_id' => 1808,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Security and IT Solution Quality Division',
			'organization' => 'IT Security Policy',
			'job_title' => 'IT Security Policy Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 1809,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Security and IT Solution Quality Division',
			'organization' => 'IT Security Policy',
			'job_title' => 'Manager, IT Security Policy',
			'total' => 1
			));
			Position::create(array('position_id' => 1810,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Security and IT Solution Quality Division',
			'organization' => 'IT Solution Quality',
			'job_title' => 'Manager, Test Design - Finance & Others',
			'total' => 1
			));
			Position::create(array('position_id' => 1811,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Security and IT Solution Quality Division',
			'organization' => 'IT Solution Quality',
			'job_title' => 'Manager, Test Design - Retail Business',
			'total' => 1
			));
			Position::create(array('position_id' => 1812,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Security and IT Solution Quality Division',
			'organization' => 'IT Solution Quality',
			'job_title' => 'Manager, Tester Team',
			'total' => 1
			));
			Position::create(array('position_id' => 1813,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Security and IT Solution Quality Division',
			'organization' => 'IT Solution Quality',
			'job_title' => 'Senior Test Designer',
			'total' => 11
			));
			Position::create(array('position_id' => 1814,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Security and IT Solution Quality Division',
			'organization' => 'IT Solution Quality',
			'job_title' => 'Senior Tester',
			'total' => 5
			));
			Position::create(array('position_id' => 1815,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Security and IT Solution Quality Division',
			'organization' => 'IT Solution Quality',
			'job_title' => 'Test Design Manager',
			'total' => 9
			));
			Position::create(array('position_id' => 1816,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Security and IT Solution Quality Division',
			'organization' => 'IT Solution Quality',
			'job_title' => 'Test Designer',
			'total' => 1
			));
			Position::create(array('position_id' => 1817,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Security and IT Solution Quality Division',
			'organization' => 'IT Solution Quality',
			'job_title' => 'Tester',
			'total' => 10
			));
			Position::create(array('position_id' => 1818,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Security and IT Solution Quality Division',
			'organization' => 'IT System Security Administration',
			'job_title' => 'Manager, System Security Administration',
			'total' => 1
			));
			Position::create(array('position_id' => 1819,
			'group' => 'Technology and Operations Group',
			'division' => 'IT Security and IT Solution Quality Division',
			'organization' => 'IT System Security Administration',
			'job_title' => 'System Security Administration Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 1820,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'No organization',
			'job_title' => 'FEVP, Division Head, Retail Operations',
			'total' => 1
			));
			Position::create(array('position_id' => 1821,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'No organization',
			'job_title' => 'Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 1822,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Adjustment Operations Officer',
			'total' => 9
			));
			Position::create(array('position_id' => 1823,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Collateral Information Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 1824,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Customer Registrar Services Officer',
			'total' => 15
			));
			Position::create(array('position_id' => 1825,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Dealer & Marketer Management Officer',
			'total' => 12
			));
			Position::create(array('position_id' => 1826,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Dealer Disbursement Officer',
			'total' => 8
			));
			Position::create(array('position_id' => 1827,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Defer Vat and Counter Cheque Officer',
			'total' => 7
			));
			Position::create(array('position_id' => 1828,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Document Follow up and Assignment Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 1829,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Document Verification Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1830,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Fire Insurance Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 1831,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Follow Up Blue Book Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 1832,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'FT - RMO Data Entry Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1833,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'HP Customer Support Officer',
			'total' => 10
			));
			Position::create(array('position_id' => 1834,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'HP Data Entry Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 1835,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'HP Operations Officer (Contract)',
			'total' => 13
			));
			Position::create(array('position_id' => 1836,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Insurance Disbursement Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 1837,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Insurance Policy Control Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 1838,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Legal Documentation Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 1839,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Manager, Auto Finance Operations',
			'total' => 1
			));
			Position::create(array('position_id' => 1840,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Manager, Auto Finance Operations-Back-End',
			'total' => 1
			));
			Position::create(array('position_id' => 1841,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Manager, Auto Finance Operations-Front-Line',
			'total' => 1
			));
			Position::create(array('position_id' => 1842,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Manager, Dealer and Disburse Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1843,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Manager, HP Origination',
			'total' => 1
			));
			Position::create(array('position_id' => 1844,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Manager, Insurance Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1845,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Manager, Registrar and Collateral Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1846,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Original Documentation Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 1847,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Payment Channel Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 1848,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Registrar Control Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 1849,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Supervisor, Collateral Information',
			'total' => 1
			));
			Position::create(array('position_id' => 1850,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Supervisor, Customer Registrar Services',
			'total' => 1
			));
			Position::create(array('position_id' => 1851,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Supervisor, Dealer & Marketer Management',
			'total' => 3
			));
			Position::create(array('position_id' => 1852,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Supervisor, Dealer Disbursement',
			'total' => 2
			));
			Position::create(array('position_id' => 1853,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Supervisor, Document Follow up and Assignment',
			'total' => 1
			));
			Position::create(array('position_id' => 1854,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Supervisor, Document Verification',
			'total' => 1
			));
			Position::create(array('position_id' => 1855,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Supervisor, Fire Insurance',
			'total' => 3
			));
			Position::create(array('position_id' => 1856,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Supervisor, Follow Up Blue Book',
			'total' => 1
			));
			Position::create(array('position_id' => 1857,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Supervisor, HP Data Entry',
			'total' => 1
			));
			Position::create(array('position_id' => 1858,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Supervisor, Legal Documentation',
			'total' => 1
			));
			Position::create(array('position_id' => 1859,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Supervisor, Original Documentation',
			'total' => 1
			));
			Position::create(array('position_id' => 1860,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Supervisor, Payment Channel',
			'total' => 1
			));
			Position::create(array('position_id' => 1861,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Supervisor, Registrar Support',
			'total' => 1
			));
			Position::create(array('position_id' => 1862,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Support Officer',
			'total' => 8
			));
			Position::create(array('position_id' => 1863,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Suspense Control Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 1864,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Team Manager, Account and Tax Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1865,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Team Manager, Adjustment Operationsr, Adjustment Operations',
			'total' => 1
			));
			Position::create(array('position_id' => 1866,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Team Manager, Application Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1867,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Team Manager, Dealer & Marketer Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1868,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Team Manager, Fire Insurance',
			'total' => 1
			));
			Position::create(array('position_id' => 1869,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Team Manager, HP Customer Support',
			'total' => 1
			));
			Position::create(array('position_id' => 1870,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Team Manager, Insurance Disbursement',
			'total' => 1
			));
			Position::create(array('position_id' => 1871,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Team Manager, Insurance Policy Control',
			'total' => 1
			));
			Position::create(array('position_id' => 1872,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Team Manager, Project and Data Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1873,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Team Manager, Registrar Control',
			'total' => 1
			));
			Position::create(array('position_id' => 1874,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Team Manager, Registrar Support',
			'total' => 1
			));
			Position::create(array('position_id' => 1875,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Team Manager, Suspense ControlTeam Manager, Suspense Control',
			'total' => 1
			));
			Position::create(array('position_id' => 1876,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Telesales Support Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 1877,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Auto Finance Operations',
			'job_title' => 'Telesales Support Supervisor',
			'total' => 1
			));
			Position::create(array('position_id' => 1878,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Office Clerk',
			'total' => 1
			));
			Position::create(array('position_id' => 1879,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Card And Cheque Book Production Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 1880,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Card Credit Limit Control Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 1881,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Card Holder Chargeback Officer',
			'total' => 8
			));
			Position::create(array('position_id' => 1882,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Card Operating Regulations Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1883,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Card Operations Officer (Contract)',
			'total' => 2
			));
			Position::create(array('position_id' => 1884,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Counter and Administration Services Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 1885,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Customer Data Maintenance Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 1886,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Document Warehousing - Unsecured Loan Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1887,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Financial Adjustment Officer',
			'total' => 7
			));
			Position::create(array('position_id' => 1888,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Manager, Card and Personal Loan Operations',
			'total' => 1
			));
			Position::create(array('position_id' => 1889,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Manager, Merchant and Administration Services',
			'total' => 1
			));
			Position::create(array('position_id' => 1890,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Manager, Process & System Improvement',
			'total' => 1
			));
			Position::create(array('position_id' => 1891,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Manager, Settlement and Dispute Resolution',
			'total' => 1
			));
			Position::create(array('position_id' => 1892,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Merchant Chargeback Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 1893,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Merchant Equipment Support and Control Officer',
			'total' => 7
			));
			Position::create(array('position_id' => 1894,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Merchant Payment Officer',
			'total' => 11
			));
			Position::create(array('position_id' => 1895,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Merchant Services Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 1896,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Mgr, Customer Support Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1897,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Mgr., New Account & Reward Redemption Operation Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1898,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Mgr.Card/Pin Issuing & Unsecured Loan Document Warehousing',
			'total' => 1
			));
			Position::create(array('position_id' => 1899,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'MIS and Support Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1900,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'New Account Operation Center Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 1901,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'New Account Operation Support Enhancement Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1902,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Payment and Card Settlement Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 1903,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Payment Plan and Recurring Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 1904,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Pin And Document Printing Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1905,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Rewards Redemption and Premium Operation Center Officer',
			'total' => 11
			));
			Position::create(array('position_id' => 1906,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Rewards Redemption and Vendor Operation Control Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 1907,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Supervisor, Cardholder Chargeback',
			'total' => 2
			));
			Position::create(array('position_id' => 1908,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Supervisor, Customer Data Maintenance',
			'total' => 2
			));
			Position::create(array('position_id' => 1909,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Supervisor, Merchant Chargeback',
			'total' => 1
			));
			Position::create(array('position_id' => 1910,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Supervisor, New Account Operation Support Enhancement',
			'total' => 1
			));
			Position::create(array('position_id' => 1911,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Supervisor, Payment and Card Settlement',
			'total' => 2
			));
			Position::create(array('position_id' => 1912,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Supervisor, Rewards Redemption and Vendor Operation Control',
			'total' => 1
			));
			Position::create(array('position_id' => 1913,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Team Manager, Card And Cheque Book Production',
			'total' => 1
			));
			Position::create(array('position_id' => 1914,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Team Manager, Card Holder Chargeback',
			'total' => 1
			));
			Position::create(array('position_id' => 1915,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Team Manager, Counter and Administration Services',
			'total' => 1
			));
			Position::create(array('position_id' => 1916,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Team Manager, Document Warehousing - Unsecured loan',
			'total' => 1
			));
			Position::create(array('position_id' => 1917,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Team Manager, Financial Adjustment',
			'total' => 1
			));
			Position::create(array('position_id' => 1918,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Team Manager, Merchant Chargeback',
			'total' => 1
			));
			Position::create(array('position_id' => 1919,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Team Manager, Merchant Equipment Support and Control',
			'total' => 1
			));
			Position::create(array('position_id' => 1920,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Team Manager, Merchant Payment',
			'total' => 1
			));
			Position::create(array('position_id' => 1921,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Team Manager, Merchant Services',
			'total' => 1
			));
			Position::create(array('position_id' => 1922,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Team Manager, New Account Operation Center',
			'total' => 1
			));
			Position::create(array('position_id' => 1923,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Team Manager, Payment and Card Settlement',
			'total' => 1
			));
			Position::create(array('position_id' => 1924,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Team Manager, Payment Plan and Recurring',
			'total' => 1
			));
			Position::create(array('position_id' => 1925,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Team Manager, Pin And Document Printing',
			'total' => 1
			));
			Position::create(array('position_id' => 1926,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Team Manager, Rewards Redemption & Premium Operation Center',
			'total' => 1
			));
			Position::create(array('position_id' => 1927,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Card and Personal Loan Operations',
			'job_title' => 'Team Manager, Rewards Redemption & Vendor Operation Control',
			'total' => 1
			));
			Position::create(array('position_id' => 1928,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Central Services Management',
			'job_title' => 'Messenger',
			'total' => 12
			));
			Position::create(array('position_id' => 1929,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Central Services Management',
			'job_title' => 'Central Services Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1930,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Central Services Management',
			'job_title' => 'Internal Services Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 1931,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Central Services Management',
			'job_title' => 'Manager, Central Services',
			'total' => 1
			));
			Position::create(array('position_id' => 1932,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Central Services Management',
			'job_title' => 'Manager, Central Services Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1933,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Central Services Management',
			'job_title' => 'Manager, House Keeping Management',
			'total' => 1
			));
			Position::create(array('position_id' => 1934,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Central Services Management',
			'job_title' => 'Manager, Internal Services',
			'total' => 1
			));
			Position::create(array('position_id' => 1935,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Central Services Management',
			'job_title' => 'MIS and Central Payment Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1936,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Central Services Management',
			'job_title' => 'Motorcycle Rider',
			'total' => 52
			));
			Position::create(array('position_id' => 1937,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Central Services Management',
			'job_title' => 'Supervisor, Central Services',
			'total' => 2
			));
			Position::create(array('position_id' => 1938,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Central Services Management',
			'job_title' => 'Team Manager, Central Services',
			'total' => 1
			));
			Position::create(array('position_id' => 1939,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Central Services Management',
			'job_title' => 'Team Manager, MIS and Central Payment',
			'total' => 1
			));
			Position::create(array('position_id' => 1940,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'ATM Customer Refund Services, Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 1941,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'ATM Customer Refund Services, Supervisor',
			'total' => 2
			));
			Position::create(array('position_id' => 1942,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'ATM Fixing and Maintenance Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1943,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'ATM, Fixing & Maintenance Officer',
			'total' => 12
			));
			Position::create(array('position_id' => 1944,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'Balancing & Reconciliation Officer',
			'total' => 12
			));
			Position::create(array('position_id' => 1945,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'Balancing and Reconciliation Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1946,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'BCM and FX Operations Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1947,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'BKK Outsource Cash Operations Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 1948,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'Branch Management Specialist',
			'total' => 6
			));
			Position::create(array('position_id' => 1949,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'Cash Center Operations Support - UPC Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1950,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'Cash Inventory Control Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 1951,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'Cash Preparation Services Officer',
			'total' => 8
			));
			Position::create(array('position_id' => 1952,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'CDM Customer Refund Services, Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 1953,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'CDM Customer Refund Services, Supervisor',
			'total' => 1
			));
			Position::create(array('position_id' => 1954,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'Foreign Notes&Travelers Cheque Services Assistant',
			'total' => 12
			));
			Position::create(array('position_id' => 1955,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'Logistic Operations Officer (Contract)',
			'total' => 14
			));
			Position::create(array('position_id' => 1956,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'Manager, BCM, FX and Reconciliation',
			'total' => 1
			));
			Position::create(array('position_id' => 1957,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'Manager, BKK Cash Operations',
			'total' => 1
			));
			Position::create(array('position_id' => 1958,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'Manager, Branch Relationship and Cash Advisor',
			'total' => 1
			));
			Position::create(array('position_id' => 1959,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'Manager, Performance, Finance and Administration',
			'total' => 1
			));
			Position::create(array('position_id' => 1960,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'Manager, UPC Cash Operations',
			'total' => 1
			));
			Position::create(array('position_id' => 1961,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'Preparation EMR. and Balancing',
			'total' => 5
			));
			Position::create(array('position_id' => 1962,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'Preparation, EMR and Balancing Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 1963,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'Settlement Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 1964,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'Supervisor, Balancing & Reconciliation',
			'total' => 1
			));
			Position::create(array('position_id' => 1965,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'Supervisor, BCM and FX Operations',
			'total' => 2
			));
			Position::create(array('position_id' => 1966,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'Supervisor, Settlement',
			'total' => 1
			));
			Position::create(array('position_id' => 1967,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'Supervisor, UPC Outsource Cash Operations',
			'total' => 2
			));
			Position::create(array('position_id' => 1968,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'Support Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1969,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'Team Manager, ATM Customer Refund Services',
			'total' => 1
			));
			Position::create(array('position_id' => 1970,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'Team Manager, ATM Fixing and Maintenance',
			'total' => 1
			));
			Position::create(array('position_id' => 1971,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'Team Manager, Balancing and Reconciliation',
			'total' => 1
			));
			Position::create(array('position_id' => 1972,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'Team Manager, BKK Outsource Cash Operations',
			'total' => 1
			));
			Position::create(array('position_id' => 1973,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'Team Manager, Cash Center Operations Support - UPC',
			'total' => 1
			));
			Position::create(array('position_id' => 1974,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'Team Manager, Cash Inventory Control',
			'total' => 1
			));
			Position::create(array('position_id' => 1975,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'Team Manager, Cash Preparation Services',
			'total' => 1
			));
			Position::create(array('position_id' => 1976,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'Team Manager, CDM Customer Refund Services',
			'total' => 1
			));
			Position::create(array('position_id' => 1977,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'Team Manager, Preparation, EMR and Balancing',
			'total' => 1
			));
			Position::create(array('position_id' => 1978,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'Team Manager, Settlement',
			'total' => 1
			));
			Position::create(array('position_id' => 1979,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'Team Manager, Transportation and Services',
			'total' => 1
			));
			Position::create(array('position_id' => 1980,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'Team Manager, UPC Outsource Cash Operations',
			'total' => 1
			));
			Position::create(array('position_id' => 1981,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'Transportation & Services Officer',
			'total' => 21
			));
			Position::create(array('position_id' => 1982,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'Transportation and Services Officer',
			'total' => 7
			));
			Position::create(array('position_id' => 1983,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'UPC Outsource Cash Operations Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 1984,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Logistics Operations',
			'job_title' => 'UPC Strategy and Process Compliance Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1985,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Administration and Support Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 1986,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Application and NCB Searching Management Officer',
			'total' => 10
			));
			Position::create(array('position_id' => 1987,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'C.A. Mortgage Development 1 Officer',
			'total' => 11
			));
			Position::create(array('position_id' => 1988,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'C.A. Mortgage Development 2 Officer',
			'total' => 10
			));
			Position::create(array('position_id' => 1989,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'C.A. Mortgage Development 3 Officer',
			'total' => 11
			));
			Position::create(array('position_id' => 1990,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'C.A. Mortgage Development 4 Officer',
			'total' => 10
			));
			Position::create(array('position_id' => 1991,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'C.A. Mortgage Development 5 Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 1992,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Consent Management Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 1993,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Data Sending & Complaint Management Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 1994,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Document Archiving & Retrieval Control Officer',
			'total' => 10
			));
			Position::create(array('position_id' => 1995,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Document Custody Follow UP Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 1996,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Documents Control Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 1997,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Follow Up Management Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 1998,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'FT-RMO Data Entry Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 1999,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Legal Documentation-Existing Account Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 2000,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Legal Documentation-Mortgage Registration Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 2001,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Legal Documentation-New Loan Account Officer',
			'total' => 11
			));
			Position::create(array('position_id' => 2002,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Legal Documentation-Release Collateral Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 2003,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Manager, Application and NCB Searching Management',
			'total' => 1
			));
			Position::create(array('position_id' => 2004,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Manager, C.A. Mortgage Development',
			'total' => 1
			));
			Position::create(array('position_id' => 2005,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Manager, Credit Bureau Management',
			'total' => 1
			));
			Position::create(array('position_id' => 2006,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Manager, Data Entry & C.A. Mortgage Development Management',
			'total' => 1
			));
			Position::create(array('position_id' => 2007,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Manager, Document Custody Management',
			'total' => 1
			));
			Position::create(array('position_id' => 2008,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Manager, FT-RMO Data Entry',
			'total' => 1
			));
			Position::create(array('position_id' => 2009,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Manager, Operation Support(31-12-2012)',
			'total' => 1
			));
			Position::create(array('position_id' => 2010,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Manager, Quality Control Management',
			'total' => 1
			));
			Position::create(array('position_id' => 2011,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Manager, Retail Mortgage and Customer Operations',
			'total' => 1
			));
			Position::create(array('position_id' => 2012,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Manager, Retail Mortgage Operations',
			'total' => 1
			));
			Position::create(array('position_id' => 2013,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Manager, Retail Mortgage Register & Operation Support',
			'total' => 1
			));
			Position::create(array('position_id' => 2014,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Manager, Support Customer Operations',
			'total' => 1
			));
			Position::create(array('position_id' => 2015,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'MIS and Administration Supervisor',
			'total' => 1
			));
			Position::create(array('position_id' => 2016,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Operation Support Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 2017,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Quality Control Management Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 2018,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Retail Exposure Control Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 2019,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Retail Exposure Control Supervisor',
			'total' => 4
			));
			Position::create(array('position_id' => 2020,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Retail Loan Processing 1 Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 2021,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Retail Loan Processing 2 Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 2022,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Retail Loan Processing 3 Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 2023,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Retail Loan Processing 4 Officer',
			'total' => 8
			));
			Position::create(array('position_id' => 2024,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Searching Service Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 2025,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Secretary',
			'total' => 2
			));
			Position::create(array('position_id' => 2026,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Supervisor, Application and NCB Searching Management',
			'total' => 1
			));
			Position::create(array('position_id' => 2027,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Supervisor, Consent Management',
			'total' => 1
			));
			Position::create(array('position_id' => 2028,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Supervisor, Data Sending & Complaint Management',
			'total' => 1
			));
			Position::create(array('position_id' => 2029,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Supervisor, Document Archiving and Retrieval Control',
			'total' => 4
			));
			Position::create(array('position_id' => 2030,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Supervisor, Document Control',
			'total' => 4
			));
			Position::create(array('position_id' => 2031,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Supervisor, Legal Documentation-Existing Account',
			'total' => 2
			));
			Position::create(array('position_id' => 2032,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Supervisor, Legal Documentation-Mortgage Registration',
			'total' => 1
			));
			Position::create(array('position_id' => 2033,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Supervisor, Legal Documentation-New Loan Account',
			'total' => 9
			));
			Position::create(array('position_id' => 2034,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Supervisor, Legal Documentation-Release Collateral',
			'total' => 4
			));
			Position::create(array('position_id' => 2035,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Supervisor, Retail Loan Processing 1',
			'total' => 4
			));
			Position::create(array('position_id' => 2036,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Supervisor, Retail Loan Processing 2',
			'total' => 2
			));
			Position::create(array('position_id' => 2037,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Supervisor, Retail Loan Processing 3',
			'total' => 4
			));
			Position::create(array('position_id' => 2038,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Supervisor, Retail Loan Processing 4',
			'total' => 4
			));
			Position::create(array('position_id' => 2039,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Supervisor, Searching Service',
			'total' => 2
			));
			Position::create(array('position_id' => 2040,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Supervisor, Verification and Approval',
			'total' => 2
			));
			Position::create(array('position_id' => 2041,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Support Customer Operations Officer',
			'total' => 7
			));
			Position::create(array('position_id' => 2042,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Team Manager, Administration and Support',
			'total' => 1
			));
			Position::create(array('position_id' => 2043,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Team Manager, C.A. Mortgage Development 2',
			'total' => 1
			));
			Position::create(array('position_id' => 2044,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Team Manager, C.A. Mortgage Development 3',
			'total' => 1
			));
			Position::create(array('position_id' => 2045,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Team Manager, C.A. Mortgage Development 4',
			'total' => 1
			));
			Position::create(array('position_id' => 2046,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Team Manager, C.A. Mortgage Development 5',
			'total' => 1
			));
			Position::create(array('position_id' => 2047,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Team Manager, Consent Management',
			'total' => 1
			));
			Position::create(array('position_id' => 2048,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Team Manager, Data Sending & Complaint Management',
			'total' => 1
			));
			Position::create(array('position_id' => 2049,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Team Manager, Document Archiving and Retrieval Control',
			'total' => 1
			));
			Position::create(array('position_id' => 2050,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Team Manager, Document Custody Follow UP',
			'total' => 1
			));
			Position::create(array('position_id' => 2051,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Team Manager, Follow Up Management',
			'total' => 1
			));
			Position::create(array('position_id' => 2052,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Team Manager, Legal Documentation-Existing Account',
			'total' => 1
			));
			Position::create(array('position_id' => 2053,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Team Manager, Legal Documentation-Mortgage Registration',
			'total' => 1
			));
			Position::create(array('position_id' => 2054,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Team Manager, Legal Documentation-New Loan Account',
			'total' => 1
			));
			Position::create(array('position_id' => 2055,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Team Manager, Legal Documentation-Release Collateral',
			'total' => 1
			));
			Position::create(array('position_id' => 2056,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Team Manager, Retail Exposure Control',
			'total' => 1
			));
			Position::create(array('position_id' => 2057,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Team Manager, Retail Loan Processing 1',
			'total' => 1
			));
			Position::create(array('position_id' => 2058,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Team Manager, Retail Loan Processing 2',
			'total' => 1
			));
			Position::create(array('position_id' => 2059,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Team Manager, Retail Loan Processing 3',
			'total' => 1
			));
			Position::create(array('position_id' => 2060,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Team Manager, Searching Service',
			'total' => 1
			));
			Position::create(array('position_id' => 2061,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Team Manager,Verification and Approval',
			'total' => 1
			));
			Position::create(array('position_id' => 2062,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Team Mgr, Document Control',
			'total' => 1
			));
			Position::create(array('position_id' => 2063,
			'group' => 'Technology and Operations Group',
			'division' => 'Retail Operations Division',
			'organization' => 'Retail Mortgage and Customer Operations',
			'job_title' => 'Verification & Approval Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 2064,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'No organization',
			'job_title' => 'FEVP, Division Head, Wholesales Operations',
			'total' => 1
			));
			Position::create(array('position_id' => 2065,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'No organization',
			'job_title' => 'Secretary to Group Head, Operations',
			'total' => 1
			));
			Position::create(array('position_id' => 2066,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Branch-Business Credit Operations Support',
			'job_title' => 'Manager, Branch-Business Credit Operations Support',
			'total' => 1
			));
			Position::create(array('position_id' => 2067,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Branch-Business Credit Operations Support',
			'job_title' => 'Operations Client Services Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 2068,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Appraisal Value Acceptance, Officer',
			'total' => 10
			));
			Position::create(array('position_id' => 2069,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Appraisal Value Accepttance Support, Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 2070,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Centralized Confirmation Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 2071,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Centralized Confirmation Supervisor',
			'total' => 2
			));
			Position::create(array('position_id' => 2072,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Corporate Contingent Liability Officer',
			'total' => 18
			));
			Position::create(array('position_id' => 2073,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Corporate Contingent Liability Supervisor',
			'total' => 8
			));
			Position::create(array('position_id' => 2074,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Corporate Contingent Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 2075,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Corporate Exposure Control Officer',
			'total' => 12
			));
			Position::create(array('position_id' => 2076,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Corporate Exposure Control Supervisor',
			'total' => 7
			));
			Position::create(array('position_id' => 2077,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Corporate Legal Documentation Officer',
			'total' => 30
			));
			Position::create(array('position_id' => 2078,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Corporate Loan Processing Officer',
			'total' => 8
			));
			Position::create(array('position_id' => 2079,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Corporate Short-Term Loan Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 2080,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Corporate Short-Term Loan Supervisor',
			'total' => 10
			));
			Position::create(array('position_id' => 2081,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Credit Information Operations, Officer',
			'total' => 18
			));
			Position::create(array('position_id' => 2082,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Credit Information Operations, Supervisor',
			'total' => 6
			));
			Position::create(array('position_id' => 2083,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Division Head, Business Credit Operations Division',
			'total' => 1
			));
			Position::create(array('position_id' => 2084,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Exposure Control and Monitoring Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 2085,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Exposure Control and Monitoring Supervisor',
			'total' => 1
			));
			Position::create(array('position_id' => 2086,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Manager Appraisal Value Acceptance',
			'total' => 1
			));
			Position::create(array('position_id' => 2087,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Manager Credit Information Operations',
			'total' => 1
			));
			Position::create(array('position_id' => 2088,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Manager, Contingent Liability and Overdraft',
			'total' => 1
			));
			Position::create(array('position_id' => 2089,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Manager, Exposure Control',
			'total' => 1
			));
			Position::create(array('position_id' => 2090,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Manager, Legal Documentation',
			'total' => 1
			));
			Position::create(array('position_id' => 2091,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Manager, Loan and Special Limit',
			'total' => 1
			));
			Position::create(array('position_id' => 2092,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Manager, Quality Assurance and Administration',
			'total' => 1
			));
			Position::create(array('position_id' => 2093,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Manager, Special Business Operations',
			'total' => 1
			));
			Position::create(array('position_id' => 2094,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'MIS and Administration Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 2095,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'MIS and Administration Supervisor',
			'total' => 1
			));
			Position::create(array('position_id' => 2096,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'O/D Limit Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 2097,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'O/D Limit Supervisor',
			'total' => 3
			));
			Position::create(array('position_id' => 2098,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'P/N Preparation, Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 2099,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'P/N Preparation, Supervisor',
			'total' => 4
			));
			Position::create(array('position_id' => 2100,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Quality Assurance&Processing Control Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 2101,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Quality Assurance&Processing Control Supervisor',
			'total' => 1
			));
			Position::create(array('position_id' => 2102,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Retail Contingent Liability Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 2103,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 2104,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Special Business Legal Documentation Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 2105,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Special Business Legal Documentation Supervisor',
			'total' => 4
			));
			Position::create(array('position_id' => 2106,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Special Business NPA Processing Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 2107,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Special Business NPA Processing Supervisor',
			'total' => 2
			));
			Position::create(array('position_id' => 2108,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Special Business Processing Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 2109,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Special Business Processing Supervisor',
			'total' => 3
			));
			Position::create(array('position_id' => 2110,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Special Credit Product Legal Documentation Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 2111,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Special Credit Product Legal Documentation Supervisor',
			'total' => 3
			));
			Position::create(array('position_id' => 2112,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Special Credit Product Processing Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 2113,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Special Credit Product Processing Supervisor',
			'total' => 3
			));
			Position::create(array('position_id' => 2114,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Special Limit Operations Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 2115,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Special Limit Operations Supervisor',
			'total' => 2
			));
			Position::create(array('position_id' => 2116,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Stock Checking Officer',
			'total' => 7
			));
			Position::create(array('position_id' => 2117,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Stock Checking Supervisor',
			'total' => 1
			));
			Position::create(array('position_id' => 2118,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Supervisor, Corporate Legal Documentation',
			'total' => 12
			));
			Position::create(array('position_id' => 2119,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Supervisor, Corporate Loan Processing',
			'total' => 6
			));
			Position::create(array('position_id' => 2120,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Supervisor, Retail Contingent Liability',
			'total' => 2
			));
			Position::create(array('position_id' => 2121,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Team Manager Business Banking Exposure Control',
			'total' => 1
			));
			Position::create(array('position_id' => 2122,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Team Manager Centralized Confirmation',
			'total' => 1
			));
			Position::create(array('position_id' => 2123,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Team Manager Credit Information Operations 1',
			'total' => 1
			));
			Position::create(array('position_id' => 2124,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Team Manager Credit Information Operations 2',
			'total' => 1
			));
			Position::create(array('position_id' => 2125,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Team Manager Credit Information Operations 3',
			'total' => 1
			));
			Position::create(array('position_id' => 2126,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Team Manager Credit Information Operations 4',
			'total' => 1
			));
			Position::create(array('position_id' => 2127,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Team Manager Exposure Control and Monitoring',
			'total' => 1
			));
			Position::create(array('position_id' => 2128,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Team Manager P/N Preparation',
			'total' => 1
			));
			Position::create(array('position_id' => 2129,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Team Manager Quality Assurance&Processing Control',
			'total' => 1
			));
			Position::create(array('position_id' => 2130,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Team Manager Special Business Legal Documentation',
			'total' => 1
			));
			Position::create(array('position_id' => 2131,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Team Manager Special Business NPA Processing',
			'total' => 1
			));
			Position::create(array('position_id' => 2132,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Team Manager Special Business Processing',
			'total' => 1
			));
			Position::create(array('position_id' => 2133,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Team Manager Special Limit Operations',
			'total' => 1
			));
			Position::create(array('position_id' => 2134,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Team Manager, Appraisal Value Acceptance 1',
			'total' => 1
			));
			Position::create(array('position_id' => 2135,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Team Manager, Appraisal Value Acceptance 2',
			'total' => 1
			));
			Position::create(array('position_id' => 2136,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Team Manager, Appraisal Value Acceptance 3',
			'total' => 1
			));
			Position::create(array('position_id' => 2137,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Team Manager, Appraisal Value Accepttance Support',
			'total' => 1
			));
			Position::create(array('position_id' => 2138,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Team Manager, Contingent Liability 1',
			'total' => 1
			));
			Position::create(array('position_id' => 2139,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Team Manager, Contingent Liability 2',
			'total' => 1
			));
			Position::create(array('position_id' => 2140,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Team Manager, Contingent Liability 3',
			'total' => 1
			));
			Position::create(array('position_id' => 2141,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Team Manager, Contingent Liability 4',
			'total' => 1
			));
			Position::create(array('position_id' => 2142,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Team Manager, Corporate Exposure Control',
			'total' => 1
			));
			Position::create(array('position_id' => 2143,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Team Manager, Legal Documentation 1',
			'total' => 1
			));
			Position::create(array('position_id' => 2144,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Team Manager, Legal Documentation 2',
			'total' => 1
			));
			Position::create(array('position_id' => 2145,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Team Manager, Legal Documentation 3',
			'total' => 1
			));
			Position::create(array('position_id' => 2146,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Team Manager, Legal Documentation 4',
			'total' => 1
			));
			Position::create(array('position_id' => 2147,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Team Manager, Long-Term Loan 1',
			'total' => 1
			));
			Position::create(array('position_id' => 2148,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Team Manager, Long-Term Loan 2',
			'total' => 1
			));
			Position::create(array('position_id' => 2149,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Team Manager, Long-Term Loan 3',
			'total' => 1
			));
			Position::create(array('position_id' => 2150,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Team Manager, MIS and Administration',
			'total' => 1
			));
			Position::create(array('position_id' => 2151,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Team Manager, O/D Limit',
			'total' => 1
			));
			Position::create(array('position_id' => 2152,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Team Manager, Short-Term Loan 1',
			'total' => 1
			));
			Position::create(array('position_id' => 2153,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Team Manager, Short-Term Loan 2',
			'total' => 1
			));
			Position::create(array('position_id' => 2154,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Team Manager, Short-Term Loan 3',
			'total' => 1
			));
			Position::create(array('position_id' => 2155,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Team Manager, Special Credit Product Legal Documentation',
			'total' => 1
			));
			Position::create(array('position_id' => 2156,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Team Manager, Special Credit Product Processing',
			'total' => 1
			));
			Position::create(array('position_id' => 2157,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Business Credit Operations Division',
			'job_title' => 'Team Manager, Stock Checking',
			'total' => 1
			));
			Position::create(array('position_id' => 2158,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'International Trade and Remittance Operations Division',
			'job_title' => 'VP',
			'total' => 2
			));
			Position::create(array('position_id' => 2159,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'International Trade and Remittance Operations Division',
			'job_title' => 'Debt Business Credit Operations Officer',
			'total' => 8
			));
			Position::create(array('position_id' => 2160,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'International Trade and Remittance Operations Division',
			'job_title' => 'Exp Bill Settlement Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 2161,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'International Trade and Remittance Operations Division',
			'job_title' => 'Exp Bill Settlement Supervisor',
			'total' => 3
			));
			Position::create(array('position_id' => 2162,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'International Trade and Remittance Operations Division',
			'job_title' => 'Export Documents Preparation Officer',
			'total' => 21
			));
			Position::create(array('position_id' => 2163,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'International Trade and Remittance Operations Division',
			'job_title' => 'Export Documents Preparation Supervisor',
			'total' => 6
			));
			Position::create(array('position_id' => 2164,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'International Trade and Remittance Operations Division',
			'job_title' => 'Export LC Advise, Transfer, Confirm/Assign Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 2165,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'International Trade and Remittance Operations Division',
			'job_title' => 'IB And TR And SG Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 2166,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'International Trade and Remittance Operations Division',
			'job_title' => 'IBLC/IBC/TR and SG Officer',
			'total' => 10
			));
			Position::create(array('position_id' => 2167,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'International Trade and Remittance Operations Division',
			'job_title' => 'IBLC/IBC/TR and SG Supervisor',
			'total' => 5
			));
			Position::create(array('position_id' => 2168,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'International Trade and Remittance Operations Division',
			'job_title' => 'ITSC Manager',
			'total' => 46
			));
			Position::create(array('position_id' => 2169,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'International Trade and Remittance Operations Division',
			'job_title' => 'ITSC Operations Officer',
			'total' => 6
			));
			Position::create(array('position_id' => 2170,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'International Trade and Remittance Operations Division',
			'job_title' => 'ITSC Operations Supervisor',
			'total' => 1
			));
			Position::create(array('position_id' => 2171,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'International Trade and Remittance Operations Division',
			'job_title' => 'ITSC Service Officer',
			'total' => 95
			));
			Position::create(array('position_id' => 2172,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'International Trade and Remittance Operations Division',
			'job_title' => 'LC& DLC Issuance and Amendment Officer',
			'total' => 9
			));
			Position::create(array('position_id' => 2173,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'International Trade and Remittance Operations Division',
			'job_title' => 'LC& DLC Issuance and Amendment Supervisor',
			'total' => 1
			));
			Position::create(array('position_id' => 2174,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'International Trade and Remittance Operations Division',
			'job_title' => 'Lending Operation Officer',
			'total' => 9
			));
			Position::create(array('position_id' => 2175,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'International Trade and Remittance Operations Division',
			'job_title' => 'Lending Support Officer',
			'total' => 8
			));
			Position::create(array('position_id' => 2176,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'International Trade and Remittance Operations Division',
			'job_title' => 'Manager, Export',
			'total' => 1
			));
			Position::create(array('position_id' => 2177,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'International Trade and Remittance Operations Division',
			'job_title' => 'Manager, Foreign Cheque and Investigation',
			'total' => 1
			));
			Position::create(array('position_id' => 2178,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'International Trade and Remittance Operations Division',
			'job_title' => 'Manager, Import',
			'total' => 1
			));
			Position::create(array('position_id' => 2179,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'International Trade and Remittance Operations Division',
			'job_title' => 'Manager, ITSC Management Bangkok',
			'total' => 1
			));
			Position::create(array('position_id' => 2180,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'International Trade and Remittance Operations Division',
			'job_title' => 'Manager, ITSC Management Upcountry',
			'total' => 1
			));
			Position::create(array('position_id' => 2181,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'International Trade and Remittance Operations Division',
			'job_title' => 'PC/Export Bill/Purchase/Negotiation/Collect Off.',
			'total' => 14
			));
			Position::create(array('position_id' => 2182,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'International Trade and Remittance Operations Division',
			'job_title' => 'PC/Export Bill/Purchase/Negotiation/Collect Sup.',
			'total' => 10
			));
			Position::create(array('position_id' => 2183,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'International Trade and Remittance Operations Division',
			'job_title' => 'Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 2184,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'International Trade and Remittance Operations Division',
			'job_title' => 'Team Manager, Exp Bill Settlement',
			'total' => 1
			));
			Position::create(array('position_id' => 2185,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'International Trade and Remittance Operations Division',
			'job_title' => 'Team Manager, Export Documents Preparation',
			'total' => 1
			));
			Position::create(array('position_id' => 2186,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'International Trade and Remittance Operations Division',
			'job_title' => 'Team Manager, IB and TR and SG Team 1',
			'total' => 1
			));
			Position::create(array('position_id' => 2187,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'International Trade and Remittance Operations Division',
			'job_title' => 'Team Manager, IB and TR and SG Team 2',
			'total' => 1
			));
			Position::create(array('position_id' => 2188,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'International Trade and Remittance Operations Division',
			'job_title' => 'Team Manager, ITSC Operations',
			'total' => 1
			));
			Position::create(array('position_id' => 2189,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'International Trade and Remittance Operations Division',
			'job_title' => 'Team Manager, LC& DLC Issuance and Amendment',
			'total' => 1
			));
			Position::create(array('position_id' => 2190,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'International Trade and Remittance Operations Division',
			'job_title' => 'Team Mgr, PC/Export Bill/Purchase/Negotiation',
			'total' => 1
			));
			Position::create(array('position_id' => 2191,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'International Trade and Remittance Operations Division',
			'job_title' => 'Team Mgr, PC/Export Bill/Purchase/Negotiation 2',
			'total' => 1
			));
			Position::create(array('position_id' => 2192,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Administrations Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 2193,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Agency Services Officer',
			'total' => 7
			));
			Position::create(array('position_id' => 2194,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Agency Services Supervisor',
			'total' => 1
			));
			Position::create(array('position_id' => 2195,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Compliance and QA Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 2196,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Corporate Actions and Securities Control Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 2197,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Corporate Actions&Securities Control Supervisor',
			'total' => 2
			));
			Position::create(array('position_id' => 2198,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Custodial Services Officer',
			'total' => 13
			));
			Position::create(array('position_id' => 2199,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Custodial Services Supervisor',
			'total' => 5
			));
			Position::create(array('position_id' => 2200,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Debt Securities Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 2201,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Debt Securities Operations Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 2202,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Debt Securities Settlement and Equity Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 2203,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Debt Securities Supervisor',
			'total' => 1
			));
			Position::create(array('position_id' => 2204,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Derivatives Operations Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 2205,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Division Head, Markets Operations Division',
			'total' => 1
			));
			Position::create(array('position_id' => 2206,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'FX Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 2207,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'FX Supervisor',
			'total' => 3
			));
			Position::create(array('position_id' => 2208,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Investment Operations, Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 2209,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Manager, Custodial and Trustee Services',
			'total' => 1
			));
			Position::create(array('position_id' => 2210,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Manager, FX and Derivatives Operations',
			'total' => 1
			));
			Position::create(array('position_id' => 2211,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Manager, Registrar Services&Investment Operations',
			'total' => 1
			));
			Position::create(array('position_id' => 2212,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Manager, Securities Operations',
			'total' => 1
			));
			Position::create(array('position_id' => 2213,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Manager, Securities Settlement and Control',
			'total' => 1
			));
			Position::create(array('position_id' => 2214,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Mgr., Process Performance Management and Control',
			'total' => 1
			));
			Position::create(array('position_id' => 2215,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'MIS and Control Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 2216,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'MM Operations Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 2217,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Payment and Settlement Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 2218,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Payment and Settlement Supervisor',
			'total' => 1
			));
			Position::create(array('position_id' => 2219,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Process Development Support Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 2220,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Process Development Support Supervisor',
			'total' => 1
			));
			Position::create(array('position_id' => 2221,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Registrar Officer',
			'total' => 9
			));
			Position::create(array('position_id' => 2222,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Registrar Supervisor',
			'total' => 1
			));
			Position::create(array('position_id' => 2223,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 2224,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Securities Settlement Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 2225,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Securities Settlement Supervisor',
			'total' => 1
			));
			Position::create(array('position_id' => 2226,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Settlement Instructions Officer',
			'total' => 8
			));
			Position::create(array('position_id' => 2227,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Settlement Instructions Supervisor',
			'total' => 1
			));
			Position::create(array('position_id' => 2228,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Supervisor, Debt Securities Operations',
			'total' => 1
			));
			Position::create(array('position_id' => 2229,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Supervisor, Debt Securities Settlement and Equity',
			'total' => 1
			));
			Position::create(array('position_id' => 2230,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Supervisor, Derivatives Operations',
			'total' => 2
			));
			Position::create(array('position_id' => 2231,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Supervisor, Investment Operations',
			'total' => 5
			));
			Position::create(array('position_id' => 2232,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Support Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 2233,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Team Manager, Administration',
			'total' => 1
			));
			Position::create(array('position_id' => 2234,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Team Manager, Agency Services',
			'total' => 1
			));
			Position::create(array('position_id' => 2235,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Team Manager, Compliance and QA',
			'total' => 1
			));
			Position::create(array('position_id' => 2236,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Team Manager, Custodial Services',
			'total' => 4
			));
			Position::create(array('position_id' => 2237,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Team Manager, Debt Securities Settlement and Equity',
			'total' => 1
			));
			Position::create(array('position_id' => 2238,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Team Manager, FX Operations',
			'total' => 1
			));
			Position::create(array('position_id' => 2239,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Team Manager, Investment Operations',
			'total' => 1
			));
			Position::create(array('position_id' => 2240,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Team Manager, MIS and Control',
			'total' => 1
			));
			Position::create(array('position_id' => 2241,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Team Manager, MM Operations',
			'total' => 1
			));
			Position::create(array('position_id' => 2242,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Team Manager, Payment and Settlement',
			'total' => 1
			));
			Position::create(array('position_id' => 2243,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Team Manager, Process Performance',
			'total' => 1
			));
			Position::create(array('position_id' => 2244,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Team Manager, Registrar 1',
			'total' => 1
			));
			Position::create(array('position_id' => 2245,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Team Manager, Registrar 2',
			'total' => 1
			));
			Position::create(array('position_id' => 2246,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Team Manager, Securities Settlement',
			'total' => 1
			));
			Position::create(array('position_id' => 2247,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Team Manager, Settlement Instructions',
			'total' => 1
			));
			Position::create(array('position_id' => 2248,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Team Manager, Trustee',
			'total' => 1
			));
			Position::create(array('position_id' => 2249,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Team Mgr, Corporate Actions and Securities Control',
			'total' => 1
			));
			Position::create(array('position_id' => 2250,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Trustee Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 2251,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Markets Operations Division',
			'job_title' => 'Trustee Supervisor',
			'total' => 1
			));
			Position::create(array('position_id' => 2252,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Operations MIS',
			'job_title' => 'Manager, Operations MIS',
			'total' => 1
			));
			Position::create(array('position_id' => 2253,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Administrations Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 2254,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Bathnet Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 2255,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Bathnet Supervisor',
			'total' => 1
			));
			Position::create(array('position_id' => 2256,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Bill Payment Operations Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 2257,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Bulk Accounts Opening Officer',
			'total' => 9
			));
			Position::create(array('position_id' => 2258,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Card Data Ops.&E-Channel Services, Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 2259,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Card Data Ops.&E-Channel Services, Supervisor',
			'total' => 1
			));
			Position::create(array('position_id' => 2260,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Cash Collection Operation, Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 2261,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Cash Collection Operations Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 2262,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Centralized Accounting Control Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 2263,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Centralized Accounting Control Supervisor',
			'total' => 1
			));
			Position::create(array('position_id' => 2264,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Cheque Issurance and Domestic Transfer Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 2265,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Cheque Issurance and Domestic Transfer Supervisor',
			'total' => 3
			));
			Position::create(array('position_id' => 2266,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Cheque Processing and Clearing Officer',
			'total' => 64
			));
			Position::create(array('position_id' => 2267,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Direct Debit and Credit Data Operations Officer',
			'total' => 8
			));
			Position::create(array('position_id' => 2268,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Direct Debit and Credit Data Operations Supervisor',
			'total' => 1
			));
			Position::create(array('position_id' => 2269,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Division Head, Payment and Settlement Division',
			'total' => 1
			));
			Position::create(array('position_id' => 2270,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'E-Channel Data Operations Assistant',
			'total' => 5
			));
			Position::create(array('position_id' => 2271,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'E-Channel Data Operations Supervisor',
			'total' => 1
			));
			Position::create(array('position_id' => 2272,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Foreign Cheque Collection Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 2273,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Foreign Cheque Collection Supervisor',
			'total' => 1
			));
			Position::create(array('position_id' => 2274,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Investigate and Reconcile Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 2275,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Investigate and Reconcile Supervisor',
			'total' => 2
			));
			Position::create(array('position_id' => 2276,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Inward and Money Gram Officer',
			'total' => 8
			));
			Position::create(array('position_id' => 2277,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Inward and Money Gram Supervisor',
			'total' => 3
			));
			Position::create(array('position_id' => 2278,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'LMS and Corporate Saving Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 2279,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'LMS and Corporate Saving Supervisor',
			'total' => 1
			));
			Position::create(array('position_id' => 2280,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Manager, Baht Account Remittance',
			'total' => 1
			));
			Position::create(array('position_id' => 2281,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Manager, Centralized Accounting Control&Data Ops.',
			'total' => 1
			));
			Position::create(array('position_id' => 2282,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Manager, Cheque Data Entry Center',
			'total' => 1
			));
			Position::create(array('position_id' => 2283,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Manager, Cheque processing and Clearing',
			'total' => 1
			));
			Position::create(array('position_id' => 2284,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Manager, Inward Remittance',
			'total' => 1
			));
			Position::create(array('position_id' => 2285,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Manager, Outward Remittance',
			'total' => 1
			));
			Position::create(array('position_id' => 2286,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Manager, Payment and Liquidity Operations',
			'total' => 1
			));
			Position::create(array('position_id' => 2287,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Non-Resident Baht Account Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 2288,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Non-Resident Baht Account Supervisor',
			'total' => 2
			));
			Position::create(array('position_id' => 2289,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Outward Officer',
			'total' => 7
			));
			Position::create(array('position_id' => 2290,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Outward Supervisor',
			'total' => 3
			));
			Position::create(array('position_id' => 2291,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Process Development Support Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 2292,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 2293,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Smart Operations Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 2294,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Supervisor, Bill Payment Operations',
			'total' => 1
			));
			Position::create(array('position_id' => 2295,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Supervisor, Bulk Accounts Opening',
			'total' => 3
			));
			Position::create(array('position_id' => 2296,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Supervisor, Cheque Processing and Clearing',
			'total' => 22
			));
			Position::create(array('position_id' => 2297,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Supervisor, Smart Operations',
			'total' => 3
			));
			Position::create(array('position_id' => 2298,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Team Manager, Bahtnet',
			'total' => 1
			));
			Position::create(array('position_id' => 2299,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Team Manager, Bill Payment Operations',
			'total' => 1
			));
			Position::create(array('position_id' => 2300,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Team Manager, Bulk Accounts Opening',
			'total' => 1
			));
			Position::create(array('position_id' => 2301,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Team Manager, Card Data Ops.&E-Channel Services',
			'total' => 1
			));
			Position::create(array('position_id' => 2302,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Team Manager, Centralized Accounting Control',
			'total' => 1
			));
			Position::create(array('position_id' => 2303,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Team Manager, Cheque Capturing and Control',
			'total' => 1
			));
			Position::create(array('position_id' => 2304,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Team Manager, Cheque Receiving Center',
			'total' => 1
			));
			Position::create(array('position_id' => 2305,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Team Manager, Cheque Signature Verification',
			'total' => 1
			));
			Position::create(array('position_id' => 2306,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Team Manager, E-Channel Data Operations',
			'total' => 1
			));
			Position::create(array('position_id' => 2307,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Team Manager, Foreign Cheque Collection',
			'total' => 1
			));
			Position::create(array('position_id' => 2308,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Team Manager, Investigate and Reconcile',
			'total' => 1
			));
			Position::create(array('position_id' => 2309,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Team Manager, Inward and Money Gram',
			'total' => 1
			));
			Position::create(array('position_id' => 2310,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Team Manager, MIS and Administration',
			'total' => 1
			));
			Position::create(array('position_id' => 2311,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Team Manager, Outward',
			'total' => 1
			));
			Position::create(array('position_id' => 2312,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Team Manager, Smart Operations',
			'total' => 1
			));
			Position::create(array('position_id' => 2313,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Team Manager, Trade Outward',
			'total' => 1
			));
			Position::create(array('position_id' => 2314,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Team Mgr, Cheque Issuance and Domestic Transfer',
			'total' => 1
			));
			Position::create(array('position_id' => 2315,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Team Mgr, Direct Debit & Credit Data Operations',
			'total' => 1
			));
			Position::create(array('position_id' => 2316,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Trade Outward Office',
			'total' => 9
			));
			Position::create(array('position_id' => 2317,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Payments and Settlements Division',
			'job_title' => 'Trade Outward Supervisor',
			'total' => 4
			));
			Position::create(array('position_id' => 2318,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Quality and Productivity Improvement',
			'job_title' => 'International Processing Center Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 2319,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Quality and Productivity Improvement',
			'job_title' => 'International Processing Center Supervisor',
			'total' => 4
			));
			Position::create(array('position_id' => 2320,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Quality and Productivity Improvement',
			'job_title' => 'Manager Regulatory Report/General Support&MIS',
			'total' => 1
			));
			Position::create(array('position_id' => 2321,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Quality and Productivity Improvement',
			'job_title' => 'Manager SWIFT/System Support&PPM',
			'total' => 1
			));
			Position::create(array('position_id' => 2322,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Quality and Productivity Improvement',
			'job_title' => 'Manager, Quality and Productivity Improvement',
			'total' => 1
			));
			Position::create(array('position_id' => 2323,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Quality and Productivity Improvement',
			'job_title' => 'MIS and Administration Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 2324,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Quality and Productivity Improvement',
			'job_title' => 'Quality and Productivity Improvement Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 2325,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Quality and Productivity Improvement',
			'job_title' => 'Regulatory Report Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 2326,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Quality and Productivity Improvement',
			'job_title' => 'Regulatory Report Supervisor',
			'total' => 1
			));
			Position::create(array('position_id' => 2327,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Quality and Productivity Improvement',
			'job_title' => 'Swift Operations Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 2328,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Quality and Productivity Improvement',
			'job_title' => 'Swift Operations Supervisor',
			'total' => 1
			));
			Position::create(array('position_id' => 2329,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Quality and Productivity Improvement',
			'job_title' => 'System Support Operations Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 2330,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Quality and Productivity Improvement',
			'job_title' => 'Team Manager, International Processing Center',
			'total' => 1
			));
			Position::create(array('position_id' => 2331,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Quality and Productivity Improvement',
			'job_title' => 'Team Manager, Regulatory Report',
			'total' => 1
			));
			Position::create(array('position_id' => 2332,
			'group' => 'Technology and Operations Group',
			'division' => 'Wholesale Operations Division',
			'organization' => 'Quality and Productivity Improvement',
			'job_title' => 'Team Manager, System Support Operations',
			'total' => 1
			));
			Position::create(array('position_id' => 2333,
			'group' => 'Wholesale Banking Group',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Group Head, Wholesale Banking Group',
			'total' => 1
			));
			Position::create(array('position_id' => 2334,
			'group' => 'Wholesale Banking Group',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Personal Assistant',
			'total' => 1
			));
			Position::create(array('position_id' => 2335,
			'group' => 'Wholesale Banking Group',
			'division' => 'No division',
			'organization' => 'No organization',
			'job_title' => 'Secretary to Group Head, Wholesale Banking Group',
			'total' => 1
			));
			Position::create(array('position_id' => 2336,
			'group' => 'Wholesale Banking Group',
			'division' => 'Capital Markets Division',
			'organization' => 'No organization',
			'job_title' => 'Business Coordinator',
			'total' => 1
			));
			Position::create(array('position_id' => 2337,
			'group' => 'Wholesale Banking Group',
			'division' => 'Capital Markets Division',
			'organization' => 'No organization',
			'job_title' => 'Division Head, Capital Markets Division',
			'total' => 1
			));
			Position::create(array('position_id' => 2338,
			'group' => 'Wholesale Banking Group',
			'division' => 'Capital Markets Division',
			'organization' => 'No organization',
			'job_title' => 'Secretary to Division Head, Capital Markets Division',
			'total' => 1
			));
			Position::create(array('position_id' => 2339,
			'group' => 'Wholesale Banking Group',
			'division' => 'Capital Markets Division',
			'organization' => 'Industry Group',
			'job_title' => 'Associate - CM Industry Group',
			'total' => 5
			));
			Position::create(array('position_id' => 2340,
			'group' => 'Wholesale Banking Group',
			'division' => 'Capital Markets Division',
			'organization' => 'Industry Group',
			'job_title' => 'Manager - CM Industry Group',
			'total' => 4
			));
			Position::create(array('position_id' => 2341,
			'group' => 'Wholesale Banking Group',
			'division' => 'Capital Markets Division',
			'organization' => 'Industry Group',
			'job_title' => 'Sector Head, Capital Markets Division',
			'total' => 4
			));
			Position::create(array('position_id' => 2342,
			'group' => 'Wholesale Banking Group',
			'division' => 'Capital Markets Division',
			'organization' => 'Industry Group',
			'job_title' => 'Senior Manager - CM Industry Group',
			'total' => 4
			));
			Position::create(array('position_id' => 2343,
			'group' => 'Wholesale Banking Group',
			'division' => 'Capital Markets Division',
			'organization' => 'Industry Group',
			'job_title' => 'Sr. Associate - CM Industry Group',
			'total' => 5
			));
			Position::create(array('position_id' => 2344,
			'group' => 'Wholesale Banking Group',
			'division' => 'Capital Markets Division',
			'organization' => 'Products Control and Administration',
			'job_title' => 'Associate - Products Control and Administration',
			'total' => 1
			));
			Position::create(array('position_id' => 2345,
			'group' => 'Wholesale Banking Group',
			'division' => 'Capital Markets Division',
			'organization' => 'Products Control and Administration',
			'job_title' => 'Head of Products Control & Administration',
			'total' => 1
			));
			Position::create(array('position_id' => 2346,
			'group' => 'Wholesale Banking Group',
			'division' => 'Capital Markets Division',
			'organization' => 'Products Group',
			'job_title' => 'Associate - CM',
			'total' => 2
			));
			Position::create(array('position_id' => 2347,
			'group' => 'Wholesale Banking Group',
			'division' => 'Capital Markets Division',
			'organization' => 'Products Group',
			'job_title' => 'Product Head - DCM, Capital Markets',
			'total' => 1
			));
			Position::create(array('position_id' => 2348,
			'group' => 'Wholesale Banking Group',
			'division' => 'Capital Markets Division',
			'organization' => 'Products Group',
			'job_title' => 'Product Manager - CM',
			'total' => 1
			));
			Position::create(array('position_id' => 2349,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 1',
			'organization' => 'No organization',
			'job_title' => 'Head of Corporate Banking 1',
			'total' => 1
			));
			Position::create(array('position_id' => 2350,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 1',
			'organization' => 'No organization',
			'job_title' => 'Secretary to Head of Corporate Banking 1',
			'total' => 1
			));
			Position::create(array('position_id' => 2351,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 1',
			'organization' => 'Corporate Banking 1 Division 1',
			'job_title' => 'Business Coordinator',
			'total' => 1
			));
			Position::create(array('position_id' => 2352,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 1',
			'organization' => 'Corporate Banking 1 Division 1',
			'job_title' => 'Division Head, Division 1',
			'total' => 1
			));
			Position::create(array('position_id' => 2353,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 1',
			'organization' => 'Corporate Banking 1 Division 1',
			'job_title' => 'Relationship Manager',
			'total' => 5
			));
			Position::create(array('position_id' => 2354,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 1',
			'organization' => 'Corporate Banking 1 Division 1',
			'job_title' => 'Secretary to Division Head, Division 1',
			'total' => 1
			));
			Position::create(array('position_id' => 2355,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 1',
			'organization' => 'Corporate Banking 1 Division 1',
			'job_title' => 'Sector Head',
			'total' => 2
			));
			Position::create(array('position_id' => 2356,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 1',
			'organization' => 'Corporate Banking 1 Division 2',
			'job_title' => 'Business Coordinator',
			'total' => 1
			));
			Position::create(array('position_id' => 2357,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 1',
			'organization' => 'Corporate Banking 1 Division 2',
			'job_title' => 'Division Head, Division 2',
			'total' => 1
			));
			Position::create(array('position_id' => 2358,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 1',
			'organization' => 'Corporate Banking 1 Division 2',
			'job_title' => 'Relationship Manager',
			'total' => 3
			));
			Position::create(array('position_id' => 2359,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 1',
			'organization' => 'Corporate Banking 1 Division 2',
			'job_title' => 'Secretary to Division Head, Division 2',
			'total' => 1
			));
			Position::create(array('position_id' => 2360,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 1',
			'organization' => 'Corporate Banking 1 Division 2',
			'job_title' => 'Sector Head',
			'total' => 1
			));
			Position::create(array('position_id' => 2361,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 1',
			'organization' => 'Corporate Banking 1 Division 3',
			'job_title' => 'Business Coordinator',
			'total' => 1
			));
			Position::create(array('position_id' => 2362,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 1',
			'organization' => 'Corporate Banking 1 Division 3',
			'job_title' => 'Division Head, Division 3',
			'total' => 1
			));
			Position::create(array('position_id' => 2363,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 1',
			'organization' => 'Corporate Banking 1 Division 3',
			'job_title' => 'Relationship Manager',
			'total' => 5
			));
			Position::create(array('position_id' => 2364,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 1',
			'organization' => 'Corporate Banking 1 Division 3',
			'job_title' => 'Secretary to Division Head, Division 3',
			'total' => 1
			));
			Position::create(array('position_id' => 2365,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 1',
			'organization' => 'Corporate Banking 1 Division 3',
			'job_title' => 'Sector Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 2366,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 1',
			'organization' => 'Corporate Banking 1 Division 4',
			'job_title' => 'Business Coordinator',
			'total' => 1
			));
			Position::create(array('position_id' => 2367,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 1',
			'organization' => 'Corporate Banking 1 Division 4',
			'job_title' => 'Division Head, Division 4',
			'total' => 1
			));
			Position::create(array('position_id' => 2368,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 1',
			'organization' => 'Corporate Banking 1 Division 4',
			'job_title' => 'Relationship Manager',
			'total' => 4
			));
			Position::create(array('position_id' => 2369,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 1',
			'organization' => 'Corporate Banking 1 Division 4',
			'job_title' => 'Secretary to Division Head, Division 4',
			'total' => 1
			));
			Position::create(array('position_id' => 2370,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 1',
			'organization' => 'Corporate Banking 1 Division 4',
			'job_title' => 'Sector Head',
			'total' => 1
			));
			Position::create(array('position_id' => 2371,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 1',
			'organization' => 'Corporate Banking 1 Sector 9',
			'job_title' => 'EVP, Ministry of Finance',
			'total' => 1
			));
			Position::create(array('position_id' => 2372,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 1',
			'organization' => 'Corporate Banking 1 Sector 9',
			'job_title' => 'Relationship Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 2373,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 1',
			'organization' => 'Corporate Banking 1 Sector 9',
			'job_title' => 'Secretary to EVP, Ministry of Finance',
			'total' => 1
			));
			Position::create(array('position_id' => 2374,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 2',
			'organization' => 'No organization',
			'job_title' => 'Head of Corporate Banking 2',
			'total' => 1
			));
			Position::create(array('position_id' => 2375,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 2',
			'organization' => 'No organization',
			'job_title' => 'Secretary to Head of Corporate Banking 2',
			'total' => 1
			));
			Position::create(array('position_id' => 2376,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 2',
			'organization' => 'Corporate Banking 2 Division 1',
			'job_title' => 'Business Coordinator',
			'total' => 1
			));
			Position::create(array('position_id' => 2377,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 2',
			'organization' => 'Corporate Banking 2 Division 1',
			'job_title' => 'Division Head, Division 1, Corporate Banking 1, WBG',
			'total' => 1
			));
			Position::create(array('position_id' => 2378,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 2',
			'organization' => 'Corporate Banking 2 Division 1',
			'job_title' => 'Relationship Manager',
			'total' => 4
			));
			Position::create(array('position_id' => 2379,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 2',
			'organization' => 'Corporate Banking 2 Division 1',
			'job_title' => 'Secretary to Division Head, Division 1, Corporate Banking 1',
			'total' => 1
			));
			Position::create(array('position_id' => 2380,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 2',
			'organization' => 'Corporate Banking 2 Division 1',
			'job_title' => 'Sector Head',
			'total' => 1
			));
			Position::create(array('position_id' => 2381,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 2',
			'organization' => 'Corporate Banking 2 Division 1',
			'job_title' => 'Sector Manager, Corporate',
			'total' => 1
			));
			Position::create(array('position_id' => 2382,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 2',
			'organization' => 'Corporate Banking 2 Division 2',
			'job_title' => 'Business Coordinator',
			'total' => 1
			));
			Position::create(array('position_id' => 2383,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 2',
			'organization' => 'Corporate Banking 2 Division 2',
			'job_title' => 'Division Head, Division 2',
			'total' => 1
			));
			Position::create(array('position_id' => 2384,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 2',
			'organization' => 'Corporate Banking 2 Division 2',
			'job_title' => 'Relationship Manager',
			'total' => 3
			));
			Position::create(array('position_id' => 2385,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 2',
			'organization' => 'Corporate Banking 2 Division 2',
			'job_title' => 'Secretary to Division Head, Division 2',
			'total' => 1
			));
			Position::create(array('position_id' => 2386,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 2',
			'organization' => 'Corporate Banking 2 Division 2',
			'job_title' => 'Sector Head',
			'total' => 1
			));
			Position::create(array('position_id' => 2387,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 2',
			'organization' => 'Corporate Banking 2 Division 2',
			'job_title' => 'Sector Manager, Corporate',
			'total' => 1
			));
			Position::create(array('position_id' => 2388,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 2',
			'organization' => 'Corporate Banking 2 Division 3',
			'job_title' => 'Business Coordinator',
			'total' => 1
			));
			Position::create(array('position_id' => 2389,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 2',
			'organization' => 'Corporate Banking 2 Division 3',
			'job_title' => 'Relationship Manager',
			'total' => 6
			));
			Position::create(array('position_id' => 2390,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 2',
			'organization' => 'Corporate Banking 2 Division 3',
			'job_title' => 'Sector Head',
			'total' => 2
			));
			Position::create(array('position_id' => 2391,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 2',
			'organization' => 'Corporate Banking 2 Division 4',
			'job_title' => 'Business Coordinator',
			'total' => 1
			));
			Position::create(array('position_id' => 2392,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 2',
			'organization' => 'Corporate Banking 2 Division 4',
			'job_title' => 'Division Head, Division 4, Corporate Banking 2',
			'total' => 1
			));
			Position::create(array('position_id' => 2393,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 2',
			'organization' => 'Corporate Banking 2 Division 4',
			'job_title' => 'Relationship Manager',
			'total' => 10
			));
			Position::create(array('position_id' => 2394,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 2',
			'organization' => 'Corporate Banking 2 Division 4',
			'job_title' => 'Sector Head',
			'total' => 1
			));
			Position::create(array('position_id' => 2395,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 2',
			'organization' => 'Corporate Banking 2 Division 4',
			'job_title' => 'Sector Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 2396,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 2',
			'organization' => 'Corporate Banking 2 Division 5',
			'job_title' => 'Business Coordinator',
			'total' => 2
			));
			Position::create(array('position_id' => 2397,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 2',
			'organization' => 'Corporate Banking 2 Division 5',
			'job_title' => 'Division Head, Division 5, Corporate Banking 2',
			'total' => 1
			));
			Position::create(array('position_id' => 2398,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 2',
			'organization' => 'Corporate Banking 2 Division 5',
			'job_title' => 'Relationship Manager',
			'total' => 11
			));
			Position::create(array('position_id' => 2399,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 2',
			'organization' => 'Corporate Banking 2 Division 5',
			'job_title' => 'Secretary to Division Head, Division 5, Corporate Banking 2',
			'total' => 1
			));
			Position::create(array('position_id' => 2400,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 2',
			'organization' => 'Corporate Banking 2 Division 5',
			'job_title' => 'Sector Head',
			'total' => 2
			));
			Position::create(array('position_id' => 2401,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 2',
			'organization' => 'Corporate Banking 2 Division 6',
			'job_title' => 'Business Coordinator',
			'total' => 2
			));
			Position::create(array('position_id' => 2402,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 2',
			'organization' => 'Corporate Banking 2 Division 6',
			'job_title' => 'Division Head, Division 6',
			'total' => 1
			));
			Position::create(array('position_id' => 2403,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 2',
			'organization' => 'Corporate Banking 2 Division 6',
			'job_title' => 'Relationship Manager',
			'total' => 10
			));
			Position::create(array('position_id' => 2404,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 2',
			'organization' => 'Corporate Banking 2 Division 6',
			'job_title' => 'Secretary to Division Head, Division 6',
			'total' => 1
			));
			Position::create(array('position_id' => 2405,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 2',
			'organization' => 'Corporate Banking 2 Division 6',
			'job_title' => 'Sector Head',
			'total' => 1
			));
			Position::create(array('position_id' => 2406,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 3',
			'organization' => 'No organization',
			'job_title' => 'Head of Corporate Banking 3',
			'total' => 1
			));
			Position::create(array('position_id' => 2407,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 3',
			'organization' => 'No organization',
			'job_title' => 'Secretary to Head of Corporate Banking 3',
			'total' => 1
			));
			Position::create(array('position_id' => 2408,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 3',
			'organization' => 'Corporate Banking 3 Division 1',
			'job_title' => 'Business Coordinator',
			'total' => 1
			));
			Position::create(array('position_id' => 2409,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 3',
			'organization' => 'Corporate Banking 3 Division 1',
			'job_title' => 'Relationship Manager',
			'total' => 6
			));
			Position::create(array('position_id' => 2410,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 3',
			'organization' => 'Corporate Banking 3 Division 1',
			'job_title' => 'Sector Head',
			'total' => 1
			));
			Position::create(array('position_id' => 2411,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 3',
			'organization' => 'Corporate Banking 3 Division 1',
			'job_title' => 'Sector Manager, Corporate',
			'total' => 1
			));
			Position::create(array('position_id' => 2412,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 3',
			'organization' => 'Corporate Banking 3 Division 2',
			'job_title' => 'Business Coordinator',
			'total' => 1
			));
			Position::create(array('position_id' => 2413,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 3',
			'organization' => 'Corporate Banking 3 Division 2',
			'job_title' => 'Relationship Manager',
			'total' => 6
			));
			Position::create(array('position_id' => 2414,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 3',
			'organization' => 'Corporate Banking 3 Division 2',
			'job_title' => 'Sector Head',
			'total' => 2
			));
			Position::create(array('position_id' => 2415,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 3',
			'organization' => 'Corporate Banking 3 Division 3',
			'job_title' => 'Business Coordinator',
			'total' => 1
			));
			Position::create(array('position_id' => 2416,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 3',
			'organization' => 'Corporate Banking 3 Division 3',
			'job_title' => 'Division Head, Division 3, Corporate Banking 3',
			'total' => 1
			));
			Position::create(array('position_id' => 2417,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 3',
			'organization' => 'Corporate Banking 3 Division 3',
			'job_title' => 'Regional Manager',
			'total' => 5
			));
			Position::create(array('position_id' => 2418,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 3',
			'organization' => 'Corporate Banking 3 Division 3',
			'job_title' => 'Relationship Manager',
			'total' => 15
			));
			Position::create(array('position_id' => 2419,
			'group' => 'Wholesale Banking Group',
			'division' => 'Corporate Banking 3',
			'organization' => 'Corporate Banking 3 Division 3',
			'job_title' => 'Secretary to Division Head, Division 3, Corporate Banking 3',
			'total' => 1
			));
			Position::create(array('position_id' => 2420,
			'group' => 'Wholesale Banking Group',
			'division' => 'Economic Intelligence Center',
			'organization' => 'No organization',
			'job_title' => 'Chief Economist, Economic Intelligence Center and Sectorial',
			'total' => 1
			));
			Position::create(array('position_id' => 2421,
			'group' => 'Wholesale Banking Group',
			'division' => 'Economic Intelligence Center',
			'organization' => 'No organization',
			'job_title' => 'Financial Economist',
			'total' => 1
			));
			Position::create(array('position_id' => 2422,
			'group' => 'Wholesale Banking Group',
			'division' => 'Economic Intelligence Center',
			'organization' => 'Knowledge Management and Networking',
			'job_title' => 'Knowledge Management System Product Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 2423,
			'group' => 'Wholesale Banking Group',
			'division' => 'Economic Intelligence Center',
			'organization' => 'Knowledge Management and Networking',
			'job_title' => 'Knowledge Portal Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 2424,
			'group' => 'Wholesale Banking Group',
			'division' => 'Economic Intelligence Center',
			'organization' => 'Knowledge Management and Networking',
			'job_title' => 'SVP, Head of Knowledge Management & Networking',
			'total' => 1
			));
			Position::create(array('position_id' => 2425,
			'group' => 'Wholesale Banking Group',
			'division' => 'Economic Intelligence Center',
			'organization' => 'Macro Economics',
			'job_title' => 'Analyst',
			'total' => 3
			));
			Position::create(array('position_id' => 2426,
			'group' => 'Wholesale Banking Group',
			'division' => 'Economic Intelligence Center',
			'organization' => 'Macro Economics',
			'job_title' => 'Senior Economist',
			'total' => 3
			));
			Position::create(array('position_id' => 2427,
			'group' => 'Wholesale Banking Group',
			'division' => 'Economic Intelligence Center',
			'organization' => 'Sectorial Strategy',
			'job_title' => 'Analyst',
			'total' => 9
			));
			Position::create(array('position_id' => 2428,
			'group' => 'Wholesale Banking Group',
			'division' => 'Economic Intelligence Center',
			'organization' => 'Sectorial Strategy',
			'job_title' => 'FSVP, Head of Sectorial Strategy',
			'total' => 1
			));
			Position::create(array('position_id' => 2429,
			'group' => 'Wholesale Banking Group',
			'division' => 'Economic Intelligence Center',
			'organization' => 'Sectorial Strategy',
			'job_title' => 'Senior Analyst',
			'total' => 9
			));
			Position::create(array('position_id' => 2430,
			'group' => 'Wholesale Banking Group',
			'division' => 'Financial Market Division',
			'organization' => 'No organization',
			'job_title' => 'Business Coordinator',
			'total' => 1
			));
			Position::create(array('position_id' => 2431,
			'group' => 'Wholesale Banking Group',
			'division' => 'Financial Market Division',
			'organization' => 'No organization',
			'job_title' => 'FEVP, Head of Financial Market Division',
			'total' => 1
			));
			Position::create(array('position_id' => 2432,
			'group' => 'Wholesale Banking Group',
			'division' => 'Financial Market Division',
			'organization' => 'No organization',
			'job_title' => 'Secretary to FEVP,Financial Market Division',
			'total' => 1
			));
			Position::create(array('position_id' => 2433,
			'group' => 'Wholesale Banking Group',
			'division' => 'Financial Market Division',
			'organization' => 'Financial Market Product Control',
			'job_title' => 'Business Coordinator',
			'total' => 1
			));
			Position::create(array('position_id' => 2434,
			'group' => 'Wholesale Banking Group',
			'division' => 'Financial Market Division',
			'organization' => 'Financial Market Product Control',
			'job_title' => 'Financial Marekt MIS and Reporting officer',
			'total' => 1
			));
			Position::create(array('position_id' => 2435,
			'group' => 'Wholesale Banking Group',
			'division' => 'Financial Market Division',
			'organization' => 'Financial Market Product Control',
			'job_title' => 'Financial Market MIS and Reporting Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 2436,
			'group' => 'Wholesale Banking Group',
			'division' => 'Financial Market Division',
			'organization' => 'Financial Market Product Control',
			'job_title' => 'Financial Market Process and Control officer',
			'total' => 3
			));
			Position::create(array('position_id' => 2437,
			'group' => 'Wholesale Banking Group',
			'division' => 'Financial Market Division',
			'organization' => 'Financial Market Product Control',
			'job_title' => 'Financial Market Regulation and Document officer',
			'total' => 2
			));
			Position::create(array('position_id' => 2438,
			'group' => 'Wholesale Banking Group',
			'division' => 'Financial Market Division',
			'organization' => 'Financial Market Product Control',
			'job_title' => 'Head of Financial Market Product Control',
			'total' => 1
			));
			Position::create(array('position_id' => 2439,
			'group' => 'Wholesale Banking Group',
			'division' => 'Financial Market Division',
			'organization' => 'Financial Market Product Control',
			'job_title' => 'Indirect FX Management officer',
			'total' => 1
			));
			Position::create(array('position_id' => 2440,
			'group' => 'Wholesale Banking Group',
			'division' => 'Financial Market Division',
			'organization' => 'Financial Market Product Control',
			'job_title' => 'Manager, Financial Market IT&Service(31-01-2013)',
			'total' => 1
			));
			Position::create(array('position_id' => 2441,
			'group' => 'Wholesale Banking Group',
			'division' => 'Financial Market Division',
			'organization' => 'Financial Market Product Control',
			'job_title' => 'Manager, Indirect FX Management officer',
			'total' => 1
			));
			Position::create(array('position_id' => 2442,
			'group' => 'Wholesale Banking Group',
			'division' => 'Financial Market Division',
			'organization' => 'Financial Market Product Control',
			'job_title' => 'Manager,Financial Market Process and Control',
			'total' => 1
			));
			Position::create(array('position_id' => 2443,
			'group' => 'Wholesale Banking Group',
			'division' => 'Financial Market Division',
			'organization' => 'Financial Market Product Control',
			'job_title' => 'Manager,Financial Market Regulation and Document',
			'total' => 1
			));
			Position::create(array('position_id' => 2444,
			'group' => 'Wholesale Banking Group',
			'division' => 'Financial Market Division',
			'organization' => 'Financial Market Products and Structuring',
			'job_title' => 'Financial Market Products and Structuring Officer',
			'total' => 3
			));
			Position::create(array('position_id' => 2445,
			'group' => 'Wholesale Banking Group',
			'division' => 'Financial Market Division',
			'organization' => 'Financial Market Products and Structuring',
			'job_title' => 'Head of Financial Market Products and Structuring',
			'total' => 1
			));
			Position::create(array('position_id' => 2446,
			'group' => 'Wholesale Banking Group',
			'division' => 'Financial Market Division',
			'organization' => 'Financial Market Products and Structuring',
			'job_title' => 'Manager, Financial Market Products and Structuring',
			'total' => 2
			));
			Position::create(array('position_id' => 2447,
			'group' => 'Wholesale Banking Group',
			'division' => 'Financial Market Division',
			'organization' => 'Financial Market Sales - Corporate Banking 1',
			'job_title' => 'Financial Market Sales Officer',
			'total' => 7
			));
			Position::create(array('position_id' => 2448,
			'group' => 'Wholesale Banking Group',
			'division' => 'Financial Market Division',
			'organization' => 'Financial Market Sales - Corporate Banking 1',
			'job_title' => 'Head of Financial Market Sales - Corporate Banking 1',
			'total' => 1
			));
			Position::create(array('position_id' => 2449,
			'group' => 'Wholesale Banking Group',
			'division' => 'Financial Market Division',
			'organization' => 'Financial Market Sales - Corporate Banking 1',
			'job_title' => 'Manager, Financial Market Sales',
			'total' => 1
			));
			Position::create(array('position_id' => 2450,
			'group' => 'Wholesale Banking Group',
			'division' => 'Financial Market Division',
			'organization' => 'Financial Market Sales - Corporate Banking 2',
			'job_title' => 'Financial Market Sales Officer',
			'total' => 8
			));
			Position::create(array('position_id' => 2451,
			'group' => 'Wholesale Banking Group',
			'division' => 'Financial Market Division',
			'organization' => 'Financial Market Sales - Corporate Banking 2',
			'job_title' => 'Head of Financial Market Sales - Corporate Banking 2',
			'total' => 1
			));
			Position::create(array('position_id' => 2452,
			'group' => 'Wholesale Banking Group',
			'division' => 'Financial Market Division',
			'organization' => 'Financial Market Sales - Corporate Banking 2',
			'job_title' => 'Manager, Financial Market Sales',
			'total' => 2
			));
			Position::create(array('position_id' => 2453,
			'group' => 'Wholesale Banking Group',
			'division' => 'Financial Market Division',
			'organization' => 'Financial Market Sales - Corporate Banking 3 & BBG',
			'job_title' => 'Financial Market Sales Officer',
			'total' => 11
			));
			Position::create(array('position_id' => 2454,
			'group' => 'Wholesale Banking Group',
			'division' => 'Financial Market Division',
			'organization' => 'Financial Market Sales - Corporate Banking 3 & BBG',
			'job_title' => 'Head of Financial Market Sales - Corporate Banking 3 & BBG',
			'total' => 1
			));
			Position::create(array('position_id' => 2455,
			'group' => 'Wholesale Banking Group',
			'division' => 'Financial Market Division',
			'organization' => 'Financial Market Sales - Corporate Banking 3 & BBG',
			'job_title' => 'Senior Manager, Financial Market Sales',
			'total' => 1
			));
			Position::create(array('position_id' => 2456,
			'group' => 'Wholesale Banking Group',
			'division' => 'Financial Market Division',
			'organization' => 'Financial Market Sales - Financial Institution',
			'job_title' => 'Financial Market Sales Officer',
			'total' => 5
			));
			Position::create(array('position_id' => 2457,
			'group' => 'Wholesale Banking Group',
			'division' => 'Financial Market Division',
			'organization' => 'Financial Market Sales - Financial Institution',
			'job_title' => 'Head of Financial Market Sales - Financial Institution',
			'total' => 1
			));
			Position::create(array('position_id' => 2458,
			'group' => 'Wholesale Banking Group',
			'division' => 'Financial Market Division',
			'organization' => 'Financial Market Trading',
			'job_title' => 'FX Trader',
			'total' => 2
			));
			Position::create(array('position_id' => 2459,
			'group' => 'Wholesale Banking Group',
			'division' => 'Financial Market Division',
			'organization' => 'Financial Market Trading',
			'job_title' => 'Head of Financial Market Trading',
			'total' => 1
			));
			Position::create(array('position_id' => 2460,
			'group' => 'Wholesale Banking Group',
			'division' => 'Financial Market Division',
			'organization' => 'Financial Market Trading',
			'job_title' => 'Manager, Rates Trading',
			'total' => 2
			));
			Position::create(array('position_id' => 2461,
			'group' => 'Wholesale Banking Group',
			'division' => 'Financial Market Division',
			'organization' => 'Financial Market Trading',
			'job_title' => 'Non-Linear Trader',
			'total' => 1
			));
			Position::create(array('position_id' => 2462,
			'group' => 'Wholesale Banking Group',
			'division' => 'Financial Market Division',
			'organization' => 'Financial Market Trading',
			'job_title' => 'Rates Trader',
			'total' => 2
			));
			Position::create(array('position_id' => 2463,
			'group' => 'Wholesale Banking Group',
			'division' => 'Financial Market Division',
			'organization' => 'Financial Market Trading',
			'job_title' => 'Senior Manager, FX Trading',
			'total' => 1
			));
			Position::create(array('position_id' => 2464,
			'group' => 'Wholesale Banking Group',
			'division' => 'Financial Market Division',
			'organization' => 'Financial Market Trading',
			'job_title' => 'Senior Manager, Non - Linear Trading',
			'total' => 1
			));
			Position::create(array('position_id' => 2465,
			'group' => 'Wholesale Banking Group',
			'division' => 'Financial Market Division',
			'organization' => 'Financial Market Trading',
			'job_title' => 'Senior Manager, Rates Trading',
			'total' => 1
			));
			Position::create(array('position_id' => 2466,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'No organization',
			'job_title' => 'Business Coordinator',
			'total' => 1
			));
			Position::create(array('position_id' => 2467,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'No organization',
			'job_title' => 'Head of GTS',
			'total' => 1
			));
			Position::create(array('position_id' => 2468,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'No organization',
			'job_title' => 'Secretary to EVP,GTS Division',
			'total' => 1
			));
			Position::create(array('position_id' => 2469,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'Corporate Trust',
			'job_title' => 'Business Coordinator',
			'total' => 1
			));
			Position::create(array('position_id' => 2470,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'Corporate Trust',
			'job_title' => 'Head of Corporate Trust',
			'total' => 1
			));
			Position::create(array('position_id' => 2471,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'Corporate Trust',
			'job_title' => 'Manager, Corporate Trust Product',
			'total' => 3
			));
			Position::create(array('position_id' => 2472,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'Corporate Trust',
			'job_title' => 'Manager, Corporate Trust Sales',
			'total' => 2
			));
			Position::create(array('position_id' => 2473,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'Corporate Trust',
			'job_title' => 'Manager,Corporate Trust Client Services',
			'total' => 1
			));
			Position::create(array('position_id' => 2474,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'Corporate Trust',
			'job_title' => 'Manager,Corporate Trust Sales & Client Services',
			'total' => 1
			));
			Position::create(array('position_id' => 2475,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'International Transaction Banking & Trade Specialist',
			'job_title' => 'Business Coordinator',
			'total' => 1
			));
			Position::create(array('position_id' => 2476,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'International Transaction Banking & Trade Specialist',
			'job_title' => 'Head of International Transaction Banking & Trade Specialist',
			'total' => 1
			));
			Position::create(array('position_id' => 2477,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'International Transaction Banking & Trade Specialist',
			'job_title' => 'Manager, International Transaction Banking&Trade Specialist',
			'total' => 4
			));
			Position::create(array('position_id' => 2478,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'International Transaction Banking & Trade Specialist',
			'job_title' => 'Manager, Trade Service Specialist',
			'total' => 7
			));
			Position::create(array('position_id' => 2479,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'Solution Delivery',
			'job_title' => 'Business Coordinator',
			'total' => 1
			));
			Position::create(array('position_id' => 2480,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'Solution Delivery',
			'job_title' => 'Document Management Officer',
			'total' => 4
			));
			Position::create(array('position_id' => 2481,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'Solution Delivery',
			'job_title' => 'E-Integration Consultant Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 2482,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'Solution Delivery',
			'job_title' => 'GTS Client Services Officer',
			'total' => 13
			));
			Position::create(array('position_id' => 2483,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'Solution Delivery',
			'job_title' => 'GTS Project Manager',
			'total' => 3
			));
			Position::create(array('position_id' => 2484,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'Solution Delivery',
			'job_title' => 'Implementation Specialist',
			'total' => 10
			));
			Position::create(array('position_id' => 2485,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'Solution Delivery',
			'job_title' => 'Manager, E-Integration Consultant',
			'total' => 4
			));
			Position::create(array('position_id' => 2486,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'Solution Delivery',
			'job_title' => 'Manager, GTS Client Services',
			'total' => 1
			));
			Position::create(array('position_id' => 2487,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'Solution Delivery',
			'job_title' => 'Manager, GTS Client Services & Control',
			'total' => 1
			));
			Position::create(array('position_id' => 2488,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'Solution Delivery',
			'job_title' => 'Manager, GTS Implementation',
			'total' => 1
			));
			Position::create(array('position_id' => 2489,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'Solution Delivery',
			'job_title' => 'Manager, Implementation Specialist',
			'total' => 9
			));
			Position::create(array('position_id' => 2490,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'Solution Delivery',
			'job_title' => 'Manager, Service Specialist',
			'total' => 4
			));
			Position::create(array('position_id' => 2491,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'Solution Delivery',
			'job_title' => 'Senior Implementation Specialist',
			'total' => 1
			));
			Position::create(array('position_id' => 2492,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'Solution Delivery',
			'job_title' => 'Senior Officer, GTS Client Services',
			'total' => 1
			));
			Position::create(array('position_id' => 2493,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'Solution Delivery',
			'job_title' => 'Service Control Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 2494,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'Solution Delivery',
			'job_title' => 'Service Specialist',
			'total' => 2
			));
			Position::create(array('position_id' => 2495,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'Solution Delivery',
			'job_title' => 'Team Lead, Document Management',
			'total' => 2
			));
			Position::create(array('position_id' => 2496,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'Solution Delivery',
			'job_title' => 'Team Manager, E-Integration Consultant',
			'total' => 1
			));
			Position::create(array('position_id' => 2497,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'Solution Delivery',
			'job_title' => 'Team Manager, Implementation Specialist',
			'total' => 1
			));
			Position::create(array('position_id' => 2498,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'Solution Delivery',
			'job_title' => 'Team Manager, Project Management',
			'total' => 1
			));
			Position::create(array('position_id' => 2499,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'Solution Delivery',
			'job_title' => 'Team Manager, Service Specialist',
			'total' => 1
			));
			Position::create(array('position_id' => 2500,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Channel Management',
			'job_title' => 'Business Coordinator',
			'total' => 1
			));
			Position::create(array('position_id' => 2501,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Channel Management',
			'job_title' => 'Channel Manager, Business E-Channel',
			'total' => 7
			));
			Position::create(array('position_id' => 2502,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Channel Management',
			'job_title' => 'Channel Manager, Consumer E-Channel',
			'total' => 2
			));
			Position::create(array('position_id' => 2503,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Channel Management',
			'job_title' => 'Channel Manager, Physical Channel',
			'total' => 3
			));
			Position::create(array('position_id' => 2504,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Channel Management',
			'job_title' => 'Head of TB Product & Channel',
			'total' => 1
			));
			Position::create(array('position_id' => 2505,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Channel Management',
			'job_title' => 'Manager, Services Quality Assurance',
			'total' => 2
			));
			Position::create(array('position_id' => 2506,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Channel Management',
			'job_title' => 'Services Quality Assurance Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 2507,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Channel Management',
			'job_title' => 'Team Manager, Consumer E-Channel',
			'total' => 1
			));
			Position::create(array('position_id' => 2508,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Channel Management',
			'job_title' => 'Team Manager, Physical Channel',
			'total' => 1
			));
			Position::create(array('position_id' => 2509,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Product Management',
			'job_title' => 'Business Coordinator',
			'total' => 2
			));
			Position::create(array('position_id' => 2510,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Product Management',
			'job_title' => 'Manager, Cash Management Product',
			'total' => 1
			));
			Position::create(array('position_id' => 2511,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Product Management',
			'job_title' => 'Manager, TB Product Planning',
			'total' => 1
			));
			Position::create(array('position_id' => 2512,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Product Management',
			'job_title' => 'Manager, Trade Advisor',
			'total' => 3
			));
			Position::create(array('position_id' => 2513,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Product Management',
			'job_title' => 'Manager, Trade Advisory Center',
			'total' => 1
			));
			Position::create(array('position_id' => 2514,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Product Management',
			'job_title' => 'Manager, Trade Product',
			'total' => 1
			));
			Position::create(array('position_id' => 2515,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Product Management',
			'job_title' => 'Product Manager, Cash Management - Collection',
			'total' => 9
			));
			Position::create(array('position_id' => 2516,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Product Management',
			'job_title' => 'Product Manager, Cash Management - Liquidity',
			'total' => 3
			));
			Position::create(array('position_id' => 2517,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Product Management',
			'job_title' => 'Product Manager, Cash Management - Payment',
			'total' => 8
			));
			Position::create(array('position_id' => 2518,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Product Management',
			'job_title' => 'Product Manager, Specialized Trade Product',
			'total' => 1
			));
			Position::create(array('position_id' => 2519,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Product Management',
			'job_title' => 'Product Manager, TB Product Planning',
			'total' => 3
			));
			Position::create(array('position_id' => 2520,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Product Management',
			'job_title' => 'Product Manager, Trade Finance Product',
			'total' => 2
			));
			Position::create(array('position_id' => 2521,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Product Management',
			'job_title' => 'Product Manager, Trade Service Product',
			'total' => 4
			));
			Position::create(array('position_id' => 2522,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Product Management',
			'job_title' => 'Team Manager, Cash Management - Collection Product',
			'total' => 1
			));
			Position::create(array('position_id' => 2523,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Product Management',
			'job_title' => 'Team Manager, Cash Management - Liquidity Product',
			'total' => 1
			));
			Position::create(array('position_id' => 2524,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Product Management',
			'job_title' => 'Team Manager, Cash Management - Payment Product',
			'total' => 1
			));
			Position::create(array('position_id' => 2525,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Product Management',
			'job_title' => 'Team Manager, Specialized Trade Product',
			'total' => 1
			));
			Position::create(array('position_id' => 2526,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Product Management',
			'job_title' => 'Team Manager, Trade Finance Product',
			'total' => 1
			));
			Position::create(array('position_id' => 2527,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Product Management',
			'job_title' => 'Team Manager, Trade Service Product',
			'total' => 1
			));
			Position::create(array('position_id' => 2528,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Structuring & Solution',
			'job_title' => 'Area Manager, Regional Solution',
			'total' => 2
			));
			Position::create(array('position_id' => 2529,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Structuring & Solution',
			'job_title' => 'Business Coordinator',
			'total' => 4
			));
			Position::create(array('position_id' => 2530,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Structuring & Solution',
			'job_title' => 'Department Manager, GTS Cluster',
			'total' => 1
			));
			Position::create(array('position_id' => 2531,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Structuring & Solution',
			'job_title' => 'Department Manager, Regional Cluster - BKK1 & UPC',
			'total' => 1
			));
			Position::create(array('position_id' => 2532,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Structuring & Solution',
			'job_title' => 'Department Manager, Regional Cluster - BKK2',
			'total' => 1
			));
			Position::create(array('position_id' => 2533,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Structuring & Solution',
			'job_title' => 'Department Manager, Strategic Cluster',
			'total' => 1
			));
			Position::create(array('position_id' => 2534,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Structuring & Solution',
			'job_title' => 'Manager, GTS Solution',
			'total' => 19
			));
			Position::create(array('position_id' => 2535,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Structuring & Solution',
			'job_title' => 'Manager, Regional Solution',
			'total' => 40
			));
			Position::create(array('position_id' => 2536,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Structuring & Solution',
			'job_title' => 'Manager, Strategic Solution',
			'total' => 8
			));
			Position::create(array('position_id' => 2537,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Structuring & Solution',
			'job_title' => 'Team Manager, GTS Solution',
			'total' => 4
			));
			Position::create(array('position_id' => 2538,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Structuring & Solution',
			'job_title' => 'Team Manager, Regional Solution',
			'total' => 16
			));
			Position::create(array('position_id' => 2539,
			'group' => 'Wholesale Banking Group',
			'division' => 'GTS Division',
			'organization' => 'TB Structuring & Solution',
			'job_title' => 'Team Manager, Strategic Solution',
			'total' => 2
			));
			Position::create(array('position_id' => 2540,
			'group' => 'Wholesale Banking Group',
			'division' => 'International Banking Business Division',
			'organization' => 'No organization',
			'job_title' => '-',
			'total' => 1
			));
			Position::create(array('position_id' => 2541,
			'group' => 'Wholesale Banking Group',
			'division' => 'International Banking Business Division',
			'organization' => 'No organization',
			'job_title' => 'Assistant Branch Manager, Vientiane Branch',
			'total' => 1
			));
			Position::create(array('position_id' => 2542,
			'group' => 'Wholesale Banking Group',
			'division' => 'International Banking Business Division',
			'organization' => 'No organization',
			'job_title' => 'Branch Manager, Hong Kong Branch',
			'total' => 1
			));
			Position::create(array('position_id' => 2543,
			'group' => 'Wholesale Banking Group',
			'division' => 'International Banking Business Division',
			'organization' => 'No organization',
			'job_title' => 'Branch Manager, Phnom Penh, Cambodian Commercial Bank Ltd.',
			'total' => 1
			));
			Position::create(array('position_id' => 2544,
			'group' => 'Wholesale Banking Group',
			'division' => 'International Banking Business Division',
			'organization' => 'No organization',
			'job_title' => 'Branch Manager,Vientiane Branch',
			'total' => 1
			));
			Position::create(array('position_id' => 2545,
			'group' => 'Wholesale Banking Group',
			'division' => 'International Banking Business Division',
			'organization' => 'No organization',
			'job_title' => 'Business Analyst - Greater China',
			'total' => 1
			));
			Position::create(array('position_id' => 2546,
			'group' => 'Wholesale Banking Group',
			'division' => 'International Banking Business Division',
			'organization' => 'No organization',
			'job_title' => 'Business Coordinator',
			'total' => 1
			));
			Position::create(array('position_id' => 2547,
			'group' => 'Wholesale Banking Group',
			'division' => 'International Banking Business Division',
			'organization' => 'No organization',
			'job_title' => 'Business Development Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 2548,
			'group' => 'Wholesale Banking Group',
			'division' => 'International Banking Business Division',
			'organization' => 'No organization',
			'job_title' => 'Chinese Coordinator',
			'total' => 1
			));
			Position::create(array('position_id' => 2549,
			'group' => 'Wholesale Banking Group',
			'division' => 'International Banking Business Division',
			'organization' => 'No organization',
			'job_title' => 'Deputy GM Vina Siam Bank',
			'total' => 1
			));
			Position::create(array('position_id' => 2550,
			'group' => 'Wholesale Banking Group',
			'division' => 'International Banking Business Division',
			'organization' => 'No organization',
			'job_title' => 'Director & GM Cambodian Commercial Bank Limited',
			'total' => 1
			));
			Position::create(array('position_id' => 2551,
			'group' => 'Wholesale Banking Group',
			'division' => 'International Banking Business Division',
			'organization' => 'No organization',
			'job_title' => 'EVP, Head of China',
			'total' => 1
			));
			Position::create(array('position_id' => 2552,
			'group' => 'Wholesale Banking Group',
			'division' => 'International Banking Business Division',
			'organization' => 'No organization',
			'job_title' => 'FSVP, Head of Greater China, China Chief Representative',
			'total' => 1
			));
			Position::create(array('position_id' => 2553,
			'group' => 'Wholesale Banking Group',
			'division' => 'International Banking Business Division',
			'organization' => 'No organization',
			'job_title' => 'Head of Asean Strategy',
			'total' => 1
			));
			Position::create(array('position_id' => 2554,
			'group' => 'Wholesale Banking Group',
			'division' => 'International Banking Business Division',
			'organization' => 'No organization',
			'job_title' => 'Manager, Business Development',
			'total' => 2
			));
			Position::create(array('position_id' => 2555,
			'group' => 'Wholesale Banking Group',
			'division' => 'International Banking Business Division',
			'organization' => 'No organization',
			'job_title' => 'Relationship Manager, CCB',
			'total' => 1
			));
			Position::create(array('position_id' => 2556,
			'group' => 'Wholesale Banking Group',
			'division' => 'International Banking Business Division',
			'organization' => 'No organization',
			'job_title' => 'Secretary to EVP, Head of China',
			'total' => 1
			));
			Position::create(array('position_id' => 2557,
			'group' => 'Wholesale Banking Group',
			'division' => 'International Banking Business Division',
			'organization' => 'No organization',
			'job_title' => 'Sector Head',
			'total' => 1
			));
			Position::create(array('position_id' => 2558,
			'group' => 'Wholesale Banking Group',
			'division' => 'International Banking Business Division',
			'organization' => 'No organization',
			'job_title' => 'Senior Business Development Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 2559,
			'group' => 'Wholesale Banking Group',
			'division' => 'International Banking Business Division',
			'organization' => 'No organization',
			'job_title' => 'Senior Strategist',
			'total' => 1
			));
			Position::create(array('position_id' => 2560,
			'group' => 'Wholesale Banking Group',
			'division' => 'International Banking Business Division',
			'organization' => 'No organization',
			'job_title' => 'Strategist - Asean',
			'total' => 2
			));
			Position::create(array('position_id' => 2561,
			'group' => 'Wholesale Banking Group',
			'division' => 'Investment Banking Division',
			'organization' => 'No organization',
			'job_title' => 'Associate - IB',
			'total' => 1
			));
			Position::create(array('position_id' => 2562,
			'group' => 'Wholesale Banking Group',
			'division' => 'Investment Banking Division',
			'organization' => 'Equity Capital Markets',
			'job_title' => 'Head of Equity Capital Markets',
			'total' => 1
			));
			Position::create(array('position_id' => 2563,
			'group' => 'Wholesale Banking Group',
			'division' => 'Investment Banking Division',
			'organization' => 'Equity Product',
			'job_title' => 'Head of Equity Product',
			'total' => 1
			));
			Position::create(array('position_id' => 2564,
			'group' => 'Wholesale Banking Group',
			'division' => 'Investment Banking Division',
			'organization' => 'Equity Product',
			'job_title' => 'Manager - IB',
			'total' => 1
			));
			Position::create(array('position_id' => 2565,
			'group' => 'Wholesale Banking Group',
			'division' => 'Investment Banking Division',
			'organization' => 'General Resource Pool',
			'job_title' => 'Assistant Manager - IB',
			'total' => 5
			));
			Position::create(array('position_id' => 2566,
			'group' => 'Wholesale Banking Group',
			'division' => 'Investment Banking Division',
			'organization' => 'General Resource Pool',
			'job_title' => 'Associate - IB',
			'total' => 14
			));
			Position::create(array('position_id' => 2567,
			'group' => 'Wholesale Banking Group',
			'division' => 'Investment Banking Division',
			'organization' => 'General Resource Pool',
			'job_title' => 'Manager - IB',
			'total' => 2
			));
			Position::create(array('position_id' => 2568,
			'group' => 'Wholesale Banking Group',
			'division' => 'Investment Banking Division',
			'organization' => 'General Resource Pool',
			'job_title' => 'Senior Associate - IB',
			'total' => 2
			));
			Position::create(array('position_id' => 2569,
			'group' => 'Wholesale Banking Group',
			'division' => 'Investment Banking Division',
			'organization' => 'Investment Banking Division 1',
			'job_title' => 'Head of Investment Banking Division 1',
			'total' => 1
			));
			Position::create(array('position_id' => 2570,
			'group' => 'Wholesale Banking Group',
			'division' => 'Investment Banking Division',
			'organization' => 'Investment Banking Division 1',
			'job_title' => 'Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 2571,
			'group' => 'Wholesale Banking Group',
			'division' => 'Investment Banking Division',
			'organization' => 'Investment Banking Division 1',
			'job_title' => 'Sector Head, Investment Banking Division',
			'total' => 3
			));
			Position::create(array('position_id' => 2572,
			'group' => 'Wholesale Banking Group',
			'division' => 'Investment Banking Division',
			'organization' => 'Investment Banking Division 2',
			'job_title' => 'Business Coordinator',
			'total' => 1
			));
			Position::create(array('position_id' => 2573,
			'group' => 'Wholesale Banking Group',
			'division' => 'Investment Banking Division',
			'organization' => 'Investment Banking Division 2',
			'job_title' => 'Head of Investment Banking Division 2',
			'total' => 1
			));
			Position::create(array('position_id' => 2574,
			'group' => 'Wholesale Banking Group',
			'division' => 'Investment Banking Division',
			'organization' => 'Investment Banking Division 2',
			'job_title' => 'Sector Head, Investment Banking Division',
			'total' => 2
			));
			Position::create(array('position_id' => 2575,
			'group' => 'Wholesale Banking Group',
			'division' => 'Investment Banking Division',
			'organization' => 'Investment Banking Division 3',
			'job_title' => 'EVP, Head of Investment Banking Division 3',
			'total' => 1
			));
			Position::create(array('position_id' => 2576,
			'group' => 'Wholesale Banking Group',
			'division' => 'Investment Banking Division',
			'organization' => 'Investment Banking Division 3',
			'job_title' => 'Sector Head, Investment Banking Division',
			'total' => 2
			));
			Position::create(array('position_id' => 2577,
			'group' => 'Wholesale Banking Group',
			'division' => 'Investment Banking Division',
			'organization' => 'Products Control & Administration',
			'job_title' => 'Business Coordinator',
			'total' => 2
			));
			Position::create(array('position_id' => 2578,
			'group' => 'Wholesale Banking Group',
			'division' => 'Investment Banking Division',
			'organization' => 'Products Control & Administration',
			'job_title' => 'Business Support Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 2579,
			'group' => 'Wholesale Banking Group',
			'division' => 'Investment Banking Division',
			'organization' => 'Products Control & Administration',
			'job_title' => 'Business Support Officer - ECM',
			'total' => 1
			));
			Position::create(array('position_id' => 2580,
			'group' => 'Wholesale Banking Group',
			'division' => 'Investment Banking Division',
			'organization' => 'Products Control & Administration',
			'job_title' => 'Secretary',
			'total' => 2
			));
			Position::create(array('position_id' => 2581,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Banking - Business Strategy and Development Division',
			'organization' => 'Business Intelligence and Platform(28-02-2014)',
			'job_title' => 'Head of Business Intelligence and Platform',
			'total' => 1
			));
			Position::create(array('position_id' => 2582,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Banking - Business Strategy and Development Division',
			'organization' => 'Business Intelligence and Platform(28-02-2014)',
			'job_title' => 'Senior Analyst',
			'total' => 6
			));
			Position::create(array('position_id' => 2583,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Banking - Business Strategy and Development Division',
			'organization' => 'Business Strategy and Performance Management',
			'job_title' => 'Analyst',
			'total' => 12
			));
			Position::create(array('position_id' => 2584,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Banking - Business Strategy and Development Division',
			'organization' => 'Business Strategy and Performance Management',
			'job_title' => 'Business Coordinator',
			'total' => 1
			));
			Position::create(array('position_id' => 2585,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Banking - Business Strategy and Development Division',
			'organization' => 'Business Strategy and Performance Management',
			'job_title' => 'Head of Performance Management and Analytic',
			'total' => 1
			));
			Position::create(array('position_id' => 2586,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Banking - Business Strategy and Development Division',
			'organization' => 'Business Strategy and Performance Management',
			'job_title' => 'Head of WBG - MIS',
			'total' => 1
			));
			Position::create(array('position_id' => 2587,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Banking - Business Strategy and Development Division',
			'organization' => 'Business Strategy and Performance Management',
			'job_title' => 'Manager',
			'total' => 12
			));
			Position::create(array('position_id' => 2588,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Banking - Business Strategy and Development Division',
			'organization' => 'Business Strategy and Performance Management',
			'job_title' => 'Senior Analyst',
			'total' => 16
			));
			Position::create(array('position_id' => 2589,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Banking - Business Strategy and Development Division',
			'organization' => 'Business Strategy and Performance Management',
			'job_title' => 'Senior Strategist',
			'total' => 1
			));
			Position::create(array('position_id' => 2590,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Banking - Business Strategy and Development Division',
			'organization' => 'Management Support',
			'job_title' => 'Business Coordinator',
			'total' => 1
			));
			Position::create(array('position_id' => 2591,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Banking - Business Strategy and Development Division',
			'organization' => 'Marketing Strategy',
			'job_title' => 'Analyst',
			'total' => 1
			));
			Position::create(array('position_id' => 2592,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Banking - Business Strategy and Development Division',
			'organization' => 'Marketing Strategy',
			'job_title' => 'Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 2593,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Banking - Business Strategy and Development Division',
			'organization' => 'Operational Excellence',
			'job_title' => 'Head of Operational Excellence',
			'total' => 1
			));
			Position::create(array('position_id' => 2594,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Banking - Business Strategy and Development Division',
			'organization' => 'Operational Excellence',
			'job_title' => 'Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 2595,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Banking - Business Strategy and Development Division',
			'organization' => 'Operational Excellence',
			'job_title' => 'Manager, Operational Excellence',
			'total' => 1
			));
			Position::create(array('position_id' => 2596,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Banking - Business Strategy and Development Division',
			'organization' => 'Operational Excellence',
			'job_title' => 'Senior Analyst',
			'total' => 2
			));
			Position::create(array('position_id' => 2597,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Banking - Business Strategy and Development Division',
			'organization' => 'Strategy and Market Intelligence',
			'job_title' => 'Senior Analyst',
			'total' => 1
			));
			Position::create(array('position_id' => 2598,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Banking - Business Strategy and Development Division',
			'organization' => 'WBG Marketing Event and Campaign',
			'job_title' => 'Event Promotions Officer',
			'total' => 1
			));
			Position::create(array('position_id' => 2599,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Banking - Business Strategy and Development Division',
			'organization' => 'WBG Marketing Event and Campaign',
			'job_title' => 'Manager',
			'total' => 1
			));
			Position::create(array('position_id' => 2600,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Banking - Business Strategy and Development Division',
			'organization' => 'WBG Marketing Event and Campaign',
			'job_title' => 'Marketing Event Officer',
			'total' => 10
			));
			Position::create(array('position_id' => 2601,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Banking Academy Division',
			'organization' => 'No organization',
			'job_title' => 'Strategist - Wholesale Banking Academy',
			'total' => 1
			));
			Position::create(array('position_id' => 2602,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'No organization',
			'job_title' => 'Head of Wholesale Credit Product&Biz Strategy&Dvlp Division',
			'total' => 1
			));
			Position::create(array('position_id' => 2603,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'No organization',
			'job_title' => 'Secretary to FEVP, Wholesale Credit Product Division',
			'total' => 1
			));
			Position::create(array('position_id' => 2604,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Credit Origination & Administration 1',
			'job_title' => 'Analyst, Credit Product Origination',
			'total' => 15
			));
			Position::create(array('position_id' => 2605,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Credit Origination & Administration 1',
			'job_title' => 'Head of Wholesale Credit Origination & Administration 1',
			'total' => 1
			));
			Position::create(array('position_id' => 2606,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Credit Origination & Administration 1',
			'job_title' => 'Manager, Credit Product Origination',
			'total' => 6
			));
			Position::create(array('position_id' => 2607,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Credit Origination & Administration 1',
			'job_title' => 'Officer, Credit Admin & Services',
			'total' => 14
			));
			Position::create(array('position_id' => 2608,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Credit Origination & Administration 1',
			'job_title' => 'Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 2609,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Credit Origination & Administration 1',
			'job_title' => 'Sector Head, Credit Admin & Services',
			'total' => 1
			));
			Position::create(array('position_id' => 2610,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Credit Origination & Administration 1',
			'job_title' => 'Team Leader, Credit Admin & Services',
			'total' => 4
			));
			Position::create(array('position_id' => 2611,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Credit Origination & Administration 1',
			'job_title' => 'Team Leader, Credit Product Origination',
			'total' => 6
			));
			Position::create(array('position_id' => 2612,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Credit Origination & Administration 2',
			'job_title' => 'Analyst, Credit Product Origination',
			'total' => 37
			));
			Position::create(array('position_id' => 2613,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Credit Origination & Administration 2',
			'job_title' => 'Business Coordinator',
			'total' => 1
			));
			Position::create(array('position_id' => 2614,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Credit Origination & Administration 2',
			'job_title' => 'Checker Officer',
			'total' => 2
			));
			Position::create(array('position_id' => 2615,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Credit Origination & Administration 2',
			'job_title' => 'Deal Builder',
			'total' => 4
			));
			Position::create(array('position_id' => 2616,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Credit Origination & Administration 2',
			'job_title' => 'Head of Wholesale Credit Origination & Administration 2',
			'total' => 1
			));
			Position::create(array('position_id' => 2617,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Credit Origination & Administration 2',
			'job_title' => 'Manager, Credit Product Origination',
			'total' => 8
			));
			Position::create(array('position_id' => 2618,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Credit Origination & Administration 2',
			'job_title' => 'Officer, Credit Admin & Services',
			'total' => 34
			));
			Position::create(array('position_id' => 2619,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Credit Origination & Administration 2',
			'job_title' => 'Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 2620,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Credit Origination & Administration 2',
			'job_title' => 'Sector Head, Credit Admin & Services',
			'total' => 1
			));
			Position::create(array('position_id' => 2621,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Credit Origination & Administration 2',
			'job_title' => 'Sector Head, Credit Product Origination',
			'total' => 2
			));
			Position::create(array('position_id' => 2622,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Credit Origination & Administration 2',
			'job_title' => 'Team Leader, Credit Admin & Services',
			'total' => 11
			));
			Position::create(array('position_id' => 2623,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Credit Origination & Administration 2',
			'job_title' => 'Team Leader, Credit Product Origination',
			'total' => 11
			));
			Position::create(array('position_id' => 2624,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Credit Origination & Administration 3',
			'job_title' => 'Analyst, Credit Product Origination',
			'total' => 36
			));
			Position::create(array('position_id' => 2625,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Credit Origination & Administration 3',
			'job_title' => 'Head of Wholesale Credit Origination & Administration 3',
			'total' => 1
			));
			Position::create(array('position_id' => 2626,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Credit Origination & Administration 3',
			'job_title' => 'Manager, Credit Product Origination',
			'total' => 10
			));
			Position::create(array('position_id' => 2627,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Credit Origination & Administration 3',
			'job_title' => 'Officer, Credit Admin & Services',
			'total' => 33
			));
			Position::create(array('position_id' => 2628,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Credit Origination & Administration 3',
			'job_title' => 'Secretary',
			'total' => 1
			));
			Position::create(array('position_id' => 2629,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Credit Origination & Administration 3',
			'job_title' => 'Sector Head, Credit Admin & Services',
			'total' => 1
			));
			Position::create(array('position_id' => 2630,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Credit Origination & Administration 3',
			'job_title' => 'Sector Head, Credit Product Origination',
			'total' => 3
			));
			Position::create(array('position_id' => 2631,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Credit Origination & Administration 3',
			'job_title' => 'Team Leader, Credit Admin & Services',
			'total' => 8
			));
			Position::create(array('position_id' => 2632,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Credit Origination & Administration 3',
			'job_title' => 'Team Leader, Credit Product Origination',
			'total' => 11
			));
			Position::create(array('position_id' => 2633,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Wholesale Credit Portfolio Management',
			'job_title' => 'Analyst, Credit Portfolio Management',
			'total' => 18
			));
			Position::create(array('position_id' => 2634,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Wholesale Credit Portfolio Management',
			'job_title' => 'Business Coordinator',
			'total' => 2
			));
			Position::create(array('position_id' => 2635,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Wholesale Credit Portfolio Management',
			'job_title' => 'Head of Wholesale Credit Portfolio Management',
			'total' => 1
			));
			Position::create(array('position_id' => 2636,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Wholesale Credit Portfolio Management',
			'job_title' => 'Manager, Credit Portfolio Management',
			'total' => 9
			));
			Position::create(array('position_id' => 2637,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Wholesale Credit Portfolio Management',
			'job_title' => 'Officer, Credit Admin & Services',
			'total' => 11
			));
			Position::create(array('position_id' => 2638,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Wholesale Credit Portfolio Management',
			'job_title' => 'Sector Head, Business and Product Development',
			'total' => 1
			));
			Position::create(array('position_id' => 2639,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Wholesale Credit Portfolio Management',
			'job_title' => 'Sector Head, Credit Compliance, Control and Monitoring',
			'total' => 1
			));
			Position::create(array('position_id' => 2640,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Wholesale Credit Portfolio Management',
			'job_title' => 'Sector Head, Financial Institution',
			'total' => 1
			));
			Position::create(array('position_id' => 2641,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Wholesale Credit Portfolio Management',
			'job_title' => 'Sector Head, Portfolio Management',
			'total' => 1
			));
			Position::create(array('position_id' => 2642,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Wholesale Credit Portfolio Management',
			'job_title' => 'Team Leader, Credit Admin & Services',
			'total' => 1
			));
			Position::create(array('position_id' => 2643,
			'group' => 'Wholesale Banking Group',
			'division' => 'Wholesale Credit Product Division',
			'organization' => 'Wholesale Credit Portfolio Management',
			'job_title' => 'Team Leader, Credit Portfolio Management',
			'total' => 5
			));

//DEPT

		$user = User::where('username','=','hrbp1')->first();
		$user1 = User::where('username','=','recruiter1')->first();
		$user2 = User::where('username','=','recruiter2')->first();
		$user3 = User::where('username','=','recruiter3')->first();
		$user4 = User::where('username','=','recruiter4')->first();
		Dept::create(array(	'dept_id' => 1,
			'name' => 'President',
			'hrbp_user_id' => $user->user_id,
			'recruiter_user_id' => $user1->user_id
			));
			Dept::create(array(	'dept_id' => 2,
			'name' => 'Audit and Compliance Group',
			'hrbp_user_id' => $user->user_id,
			'recruiter_user_id' => $user1->user_id
			));
			Dept::create(array(	'dept_id' => 3,
			'name' => 'Business Banking Group',
			'hrbp_user_id' => $user->user_id,
			'recruiter_user_id' => $user1->user_id
			));
			Dept::create(array(	'dept_id' => 4,
			'name' => 'Change Program',
			'hrbp_user_id' => $user->user_id,
			'recruiter_user_id' => $user1->user_id
			));
			$user = User::where('username','=','hrbp2')->first();
			Dept::create(array(	'dept_id' => 5,
			'name' => 'Corporate Communications Division',
			'hrbp_user_id' => $user->user_id,
			'recruiter_user_id' => $user2->user_id
			));
			Dept::create(array(	'dept_id' => 6,
			'name' => 'Finance Group',
			'hrbp_user_id' => $user->user_id,
			'recruiter_user_id' => $user2->user_id
			));
			Dept::create(array(	'dept_id' => 7,
			'name' => 'General Counsel Group',
			'hrbp_user_id' => $user->user_id,
			'recruiter_user_id' => $user2->user_id
			));
			Dept::create(array(	'dept_id' => 8,
			'name' => 'Group Treasury',
			'hrbp_user_id' => $user->user_id,
			'recruiter_user_id' => $user2->user_id
			));
			$user = User::where('username','=','hrbp3')->first();
			Dept::create(array(	'dept_id' => 9,
			'name' => 'Human Resources Group',
			'hrbp_user_id' => $user->user_id,
			'recruiter_user_id' => $user3->user_id
			));
			Dept::create(array(	'dept_id' => 10,
			'name' => 'i-OFFICE',
			'hrbp_user_id' => $user->user_id,
			'recruiter_user_id' => $user3->user_id
			));
			Dept::create(array(	'dept_id' => 11,
			'name' => 'Retail Banking Group',
			'hrbp_user_id' => $user->user_id,
			'recruiter_user_id' => $user3->user_id
			));
			Dept::create(array(	'dept_id' => 12,
			'name' => 'Risk Management Group',
			'hrbp_user_id' => $user->user_id,
			'recruiter_user_id' => $user3->user_id
			));
			$user = User::where('username','=','hrbp4')->first();
			Dept::create(array(	'dept_id' => 13,
			'name' => 'Special Business Group',
			'hrbp_user_id' => $user->user_id,
			'recruiter_user_id' => $user4->user_id
			));
			Dept::create(array(	'dept_id' => 14,
			'name' => 'Technology and Operations Group',
			'hrbp_user_id' => $user->user_id,
			'recruiter_user_id' => $user4->user_id
			));
			Dept::create(array(	'dept_id' => 15,
			'name' => 'Wholesale Banking Group',
			'hrbp_user_id' => $user->user_id,
			'recruiter_user_id' => $user4->user_id
			));
			Dept::create(array(	'dept_id' => 16,
			'name' => 'Wholesale Banking Group',
			'hrbp_user_id' => $user->user_id,
			'recruiter_user_id' => $user4->user_id
			));

//CORPORRATE TITLE GROUP
		CorporateTitleGroup::create(array(	'corporate_title_group_id' => 1,
							'name' => 'Officer',
							'total_SLA' => 30
							));
		CorporateTitleGroup::create(array(	'corporate_title_group_id' => 2,
							'name' => 'AVP/VP',
							'total_SLA' => 45
							));
		CorporateTitleGroup::create(array(	'corporate_title_group_id' => 3,
							'name' => 'SVP up',
							'total_SLA' => 60
							));

//CORPORRATE TITLE
		CorporateTitle::create(array(	'corporate_title_id' => 1,
							'name' => 'Staff 1',
							'corporate_title_group_id' => 1
							));
		CorporateTitle::create(array(	'corporate_title_id' => 2,
							'name' => 'Staff 2',
							'corporate_title_group_id' => 1
							));
		CorporateTitle::create(array(	'corporate_title_id' => 3,
							'name' => 'Staff 3',
							'corporate_title_group_id' => 1
							));
		CorporateTitle::create(array(	'corporate_title_id' => 4,
							'name' => 'Staff 4',
							'corporate_title_group_id' => 1
							));
		CorporateTitle::create(array(	'corporate_title_id' => 5,
							'name' => 'Associate',
							'corporate_title_group_id' => 1
							));
		CorporateTitle::create(array(	'corporate_title_id' => 6,
							'name' => 'Officer 1',
							'corporate_title_group_id' => 1
							));
		CorporateTitle::create(array(	'corporate_title_id' => 7,
							'name' => 'Officer 2',
							'corporate_title_group_id' => 1
							));
		CorporateTitle::create(array(	'corporate_title_id' => 8,
							'name' => 'Officer 3',
							'corporate_title_group_id' => 1
							));
		CorporateTitle::create(array(	'corporate_title_id' => 9,
							'name' => 'Officer 4',
							'corporate_title_group_id' => 1
							));
		CorporateTitle::create(array(	'corporate_title_id' => 10,
							'name' => 'AVP',
							'corporate_title_group_id' => 2
							));
		CorporateTitle::create(array(	'corporate_title_id' => 11,
							'name' => 'VP',
							'corporate_title_group_id' => 2
							));
		CorporateTitle::create(array(	'corporate_title_id' => 12,
							'name' => 'SVP',
							'corporate_title_group_id' => 3
							));
		CorporateTitle::create(array(	'corporate_title_id' => 13,
							'name' => 'FSVP',
							'corporate_title_group_id' => 3
							));
		CorporateTitle::create(array(	'corporate_title_id' => 14,
							'name' => 'EVP',
							'corporate_title_group_id' => 3
							));
		CorporateTitle::create(array(	'corporate_title_id' => 15,
							'name' => 'FEVP',
							'corporate_title_group_id' => 3
							));
		CorporateTitle::create(array(	'corporate_title_id' => 16,
							'name' => 'SEVP',
							'corporate_title_group_id' => 3
							));
		CorporateTitle::create(array(	'corporate_title_id' => 17,
							'name' => 'President',
							'corporate_title_group_id' => 3
							));

//LOCATION
			Location::create(array('location_id' => 1,
			'name' => '333 แฟคทอรี่แลนด์ บางบัวทอง'
			));
			Location::create(array('location_id' => 2,
			'name' => 'Chidlom Training Center'
			));
			Location::create(array('location_id' => 3,
			'name' => 'Green Place (ซอยวัดไผ่เงิน)'
			));
			Location::create(array('location_id' => 4,
			'name' => 'Head Office'
			));
			Location::create(array('location_id' => 5,
			'name' => 'Mega Bangna'
			));
			Location::create(array('location_id' => 6,
			'name' => 'New Data Center'
			));
			Location::create(array('location_id' => 7,
			'name' => 'เก้าเลี้ยว'
			));
			Location::create(array('location_id' => 8,
			'name' => 'เกาะเต่า (สุราษฎร์ธานี)'
			));
			Location::create(array('location_id' => 9,
			'name' => 'เกาะคา (ลำปาง)'
			));
			Location::create(array('location_id' => 10,
			'name' => 'เกาะช้าง(ตราด)'
			));
			Location::create(array('location_id' => 11,
			'name' => 'เกาะพะงัน'
			));
			Location::create(array('location_id' => 12,
			'name' => 'เกาะพีพี (กระบี่)'
			));
			Location::create(array('location_id' => 13,
			'name' => 'เกาะลันตา (กระบี่)'
			));
			Location::create(array('location_id' => 14,
			'name' => 'เกาะสมุย'
			));
			Location::create(array('location_id' => 15,
			'name' => 'เขาตาโล (พัทยา)'
			));
			Location::create(array('location_id' => 16,
			'name' => 'เขาปีบ (ชุมพร)'
			));
			Location::create(array('location_id' => 17,
			'name' => 'เขาพนม (กระบี่)'
			));
			Location::create(array('location_id' => 18,
			'name' => 'เขาวัง (เพชรบุรี)'
			));
			Location::create(array('location_id' => 19,
			'name' => 'เขาหลัก (พังงา)'
			));
			Location::create(array('location_id' => 20,
			'name' => 'เคหะร่มเกล้า'
			));
			Location::create(array('location_id' => 21,
			'name' => 'เคียนซา'
			));
			Location::create(array('location_id' => 22,
			'name' => 'เจ อเวนิว ทองหล่อ'
			));
			Location::create(array('location_id' => 23,
			'name' => 'เจ.เจ.มอลล์'
			));
			Location::create(array('location_id' => 24,
			'name' => 'เจ-เวนิว (นวนคร)'
			));
			Location::create(array('location_id' => 25,
			'name' => 'เจริญกรุง ซอย 107'
			));
			Location::create(array('location_id' => 26,
			'name' => 'เจริญกรุง ซอย 72'
			));
			Location::create(array('location_id' => 27,
			'name' => 'เจริญนคร'
			));
			Location::create(array('location_id' => 28,
			'name' => 'เฉลิมนคร'
			));
			Location::create(array('location_id' => 29,
			'name' => 'เฉวง'
			));
			Location::create(array('location_id' => 30,
			'name' => 'เฉวง 2 (เกาะสมุย)'
			));
			Location::create(array('location_id' => 31,
			'name' => 'เชิงทะเล (ภูเก็ต)'
			));
			Location::create(array('location_id' => 32,
			'name' => 'เชียงแสน'
			));
			Location::create(array('location_id' => 33,
			'name' => 'เชียงของ'
			));
			Location::create(array('location_id' => 34,
			'name' => 'เชียงคาน (เลย)'
			));
			Location::create(array('location_id' => 35,
			'name' => 'เชียงคำ (พะเยา)'
			));
			Location::create(array('location_id' => 36,
			'name' => 'เชียงดาว'
			));
			Location::create(array('location_id' => 37,
			'name' => 'เชียงราย'
			));
			Location::create(array('location_id' => 38,
			'name' => 'เซ็นเตอร์ วัน ช้อปปิ้ง พลาซ่า'
			));
			Location::create(array('location_id' => 39,
			'name' => 'เซ็นจูรี่ เดอะ มูฟวี่ พลาซ่า'
			));
			Location::create(array('location_id' => 40,
			'name' => 'เซนต์คาเบรียล'
			));
			Location::create(array('location_id' => 41,
			'name' => 'เซ็นทรัล เฟสติวัล เซ็นเตอร์ พัทยา'
			));
			Location::create(array('location_id' => 42,
			'name' => 'เซ็นทรัล เวิลด์'
			));
			Location::create(array('location_id' => 43,
			'name' => 'เซ็นทรัล เวิลด์ ทาวเวอร์'
			));
			Location::create(array('location_id' => 44,
			'name' => 'เซ็นทรัล ชิดลม'
			));
			Location::create(array('location_id' => 45,
			'name' => 'เซ็นทรัล ปิ่นเกล้า'
			));
			Location::create(array('location_id' => 46,
			'name' => 'เซ็นทรัล ปิ่นเกล้า 2'
			));
			Location::create(array('location_id' => 47,
			'name' => 'เซ็นทรัล พระราม 2'
			));
			Location::create(array('location_id' => 48,
			'name' => 'เซ็นทรัล พระราม 3'
			));
			Location::create(array('location_id' => 49,
			'name' => 'เซ็นทรัล ภูเก็ต'
			));
			Location::create(array('location_id' => 50,
			'name' => 'เซ็นทรัล รัตนาธิเบศร์'
			));
			Location::create(array('location_id' => 51,
			'name' => 'เซ็นทรัล รามอินทรา'
			));
			Location::create(array('location_id' => 52,
			'name' => 'เซ็นทรัล ลาดพร้าว'
			));
			Location::create(array('location_id' => 53,
			'name' => 'เซ็นทรัล วงศ์สว่าง'
			));
			Location::create(array('location_id' => 54,
			'name' => 'เซ็นทรัลเฟสติวัล เชียงใหม่'
			));
			Location::create(array('location_id' => 55,
			'name' => 'เซ็นทรัลเฟสติวัล พัทยา บีช'
			));
			Location::create(array('location_id' => 56,
			'name' => 'เซ็นทรัลเฟสติวัล หาดใหญ่'
			));
			Location::create(array('location_id' => 57,
			'name' => 'เซ็นทรัลแอร์พอร์ต เชียงใหม่'
			));
			Location::create(array('location_id' => 58,
			'name' => 'เซ็นทรัลพลาซา (อุดรธานี)'
			));
			Location::create(array('location_id' => 59,
			'name' => 'เซ็นทรัลพลาซา เชียงราย'
			));
			Location::create(array('location_id' => 60,
			'name' => 'เซ็นทรัลพลาซา แกรนด์ พระราม 9'
			));
			Location::create(array('location_id' => 61,
			'name' => 'เซ็นทรัลพลาซา แจ้งวัฒนะ'
			));
			Location::create(array('location_id' => 62,
			'name' => 'เซ็นทรัลพลาซา ขอนแก่น'
			));
			Location::create(array('location_id' => 63,
			'name' => 'เซ็นทรัลพลาซา ชลบุรี'
			));
			Location::create(array('location_id' => 64,
			'name' => 'เซ็นทรัลพลาซา บางนา'
			));
			Location::create(array('location_id' => 65,
			'name' => 'เซ็นทรัลพลาซ่า พิษณุโลก'
			));
			Location::create(array('location_id' => 66,
			'name' => 'เซ็นทรัลพลาซา ลาดพร้าว'
			));
			Location::create(array('location_id' => 67,
			'name' => 'เซ็นทรัลพลาซา ลำปาง'
			));
			Location::create(array('location_id' => 68,
			'name' => 'เซ็นทรัลพลาซา สุราษฎร์ธานี'
			));
			Location::create(array('location_id' => 69,
			'name' => 'เซ็นทรัลพลาซา อุบลราชธานี'
			));
			Location::create(array('location_id' => 70,
			'name' => 'เซียร์ รังสิต'
			));
			Location::create(array('location_id' => 71,
			'name' => 'เดชอุดม (อุบลราชธานี)'
			));
			Location::create(array('location_id' => 72,
			'name' => 'เดอะ แพลทินัม แฟชั่น มอลล์'
			));
			Location::create(array('location_id' => 73,
			'name' => 'เดอะเซอร์เคิล ราชพฤกษ์'
			));
			Location::create(array('location_id' => 74,
			'name' => 'เดอะคริสตัล พาร์ค (ถนนประดิษฐ์มนูธรรม)'
			));
			Location::create(array('location_id' => 75,
			'name' => 'เดอะคอมพาวด์ (ถนนพระยาสุเรนทร์)'
			));
			Location::create(array('location_id' => 76,
			'name' => 'เดอะมอลล์ 3 รามคำแหง'
			));
			Location::create(array('location_id' => 77,
			'name' => 'เดอะมอลล์ 4 รามคำแหง'
			));
			Location::create(array('location_id' => 78,
			'name' => 'เดอะมอลล์ งามวงศ์วาน'
			));
			Location::create(array('location_id' => 79,
			'name' => 'เดอะมอลล์ ท่าพระ'
			));
			Location::create(array('location_id' => 80,
			'name' => 'เดอะมอลล์ นครราชสีมา'
			));
			Location::create(array('location_id' => 81,
			'name' => 'เดอะมอลล์ บางแค'
			));
			Location::create(array('location_id' => 82,
			'name' => 'เดอะมอลล์ บางกะปิ'
			));
			Location::create(array('location_id' => 83,
			'name' => 'เดอะมอลล์ บางกะปิ 2'
			));
			Location::create(array('location_id' => 84,
			'name' => 'เดอะวอล์ค ราชพฤกษ์'
			));
			Location::create(array('location_id' => 85,
			'name' => 'เตาปูน'
			));
			Location::create(array('location_id' => 86,
			'name' => 'เถิน'
			));
			Location::create(array('location_id' => 87,
			'name' => 'เทเวศร์'
			));
			Location::create(array('location_id' => 88,
			'name' => 'เทคโนโลยีฯ เจ้าคุณทหาร'
			));
			Location::create(array('location_id' => 89,
			'name' => 'เทพารักษ์'
			));
			Location::create(array('location_id' => 90,
			'name' => 'เทพารักษ์ กม.16'
			));
			Location::create(array('location_id' => 91,
			'name' => 'เทสโก้ โลตัส เจ้าฟ้า'
			));
			Location::create(array('location_id' => 92,
			'name' => 'เทสโก้ โลตัส เชียงใหม่ - กาดคำเที่ยง'
			));
			Location::create(array('location_id' => 93,
			'name' => 'เทสโก้ โลตัส เดอะ วอล์ค (นครสวรรค์)'
			));
			Location::create(array('location_id' => 94,
			'name' => 'เทสโก้ โลตัส เพชรเกษม 81'
			));
			Location::create(array('location_id' => 95,
			'name' => 'เทสโก้ โลตัส เพชรบูรณ์'
			));
			Location::create(array('location_id' => 96,
			'name' => 'เทสโก้ โลตัส เลย'
			));
			Location::create(array('location_id' => 97,
			'name' => 'เทสโก้ โลตัส เสนา'
			));
			Location::create(array('location_id' => 98,
			'name' => 'เทสโก้ โลตัส แก่งคอย (สระบุรี)'
			));
			Location::create(array('location_id' => 99,
			'name' => 'เทสโก้ โลตัส แจ้งวัฒนะ'
			));
			Location::create(array('location_id' => 100,
			'name' => 'เทสโก้ โลตัส แม่สอด'
			));
			Location::create(array('location_id' => 101,
			'name' => 'เทสโก้ โลตัส แม่สอด (ถนนสายเอเซีย)'
			));
			Location::create(array('location_id' => 102,
			'name' => 'เทสโก้ โลตัส โคราช 2'
			));
			Location::create(array('location_id' => 103,
			'name' => 'เทสโก้ โลตัส โรจนะ(อยุธยา)'
			));
			Location::create(array('location_id' => 104,
			'name' => 'เทสโก้ โลตัส กระทุ่มแบน'
			));
			Location::create(array('location_id' => 105,
			'name' => 'เทสโก้ โลตัส กระบี่'
			));
			Location::create(array('location_id' => 106,
			'name' => 'เทสโก้ โลตัส กัลปพฤกษ์'
			));
			Location::create(array('location_id' => 107,
			'name' => 'เทสโก้ โลตัส กาญจนบุรี'
			));
			Location::create(array('location_id' => 108,
			'name' => 'เทสโก้ โลตัส กาฬสินธุ์'
			));
			Location::create(array('location_id' => 109,
			'name' => 'เทสโก้ โลตัส กำแพงแสน'
			));
			Location::create(array('location_id' => 110,
			'name' => 'เทสโก้ โลตัส ขอนแก่น'
			));
			Location::create(array('location_id' => 111,
			'name' => 'เทสโก้ โลตัส ขอนแก่น 2'
			));
			Location::create(array('location_id' => 112,
			'name' => 'เทสโก้ โลตัส จรัญสนิทวงศ์'
			));
			Location::create(array('location_id' => 113,
			'name' => 'เทสโก้ โลตัส จันทบุรี'
			));
			Location::create(array('location_id' => 114,
			'name' => 'เทสโก้ โลตัส ฉลอง (ภูเก็ต)'
			));
			Location::create(array('location_id' => 115,
			'name' => 'เทสโก้ โลตัส ชลบุรี'
			));
			Location::create(array('location_id' => 116,
			'name' => 'เทสโก้ โลตัส ชุมแพ'
			));
			Location::create(array('location_id' => 117,
			'name' => 'เทสโก้ โลตัส ชุมพร'
			));
			Location::create(array('location_id' => 118,
			'name' => 'เทสโก้ โลตัส ซิตี้พาร์ค บางพลี'
			));
			Location::create(array('location_id' => 119,
			'name' => 'เทสโก้ โลตัส ตรัง'
			));
			Location::create(array('location_id' => 120,
			'name' => 'เทสโก้ โลตัส ตราด'
			));
			Location::create(array('location_id' => 121,
			'name' => 'เทสโก้ โลตัส ตาก'
			));
			Location::create(array('location_id' => 122,
			'name' => 'เทสโก้ โลตัส ถลาง (ภูเก็ต)'
			));
			Location::create(array('location_id' => 123,
			'name' => 'เทสโก้ โลตัส ท็อปแลนด์ พิษณุโลก'
			));
			Location::create(array('location_id' => 124,
			'name' => 'เทสโก้ โลตัส ท่าทอง พิษณุโลก'
			));
			Location::create(array('location_id' => 125,
			'name' => 'เทสโก้ โลตัส ท่ายาง'
			));
			Location::create(array('location_id' => 126,
			'name' => 'เทสโก้ โลตัส ทาวน์ อิน ทาวน์'
			));
			Location::create(array('location_id' => 127,
			'name' => 'เทสโก้ โลตัส ท่าศาลา'
			));
			Location::create(array('location_id' => 128,
			'name' => 'เทสโก้ โลตัส ทุ่งสง'
			));
			Location::create(array('location_id' => 129,
			'name' => 'เทสโก้ โลตัส นครปฐม'
			));
			Location::create(array('location_id' => 130,
			'name' => 'เทสโก้ โลตัส นครราชสีมา'
			));
			Location::create(array('location_id' => 131,
			'name' => 'เทสโก้ โลตัส นครศรีธรรมราช'
			));
			Location::create(array('location_id' => 132,
			'name' => 'เทสโก้ โลตัส นครอินทร์'
			));
			Location::create(array('location_id' => 133,
			'name' => 'เทสโก้ โลตัส นวนคร'
			));
			Location::create(array('location_id' => 134,
			'name' => 'เทสโก้ โลตัส นาดี อุดรธานี'
			));
			Location::create(array('location_id' => 135,
			'name' => 'เทสโก้ โลตัส บ่อวิน'
			));
			Location::create(array('location_id' => 136,
			'name' => 'เทสโก้ โลตัส บางแค'
			));
			Location::create(array('location_id' => 137,
			'name' => 'เทสโก้ โลตัส บางกะปิ'
			));
			Location::create(array('location_id' => 138,
			'name' => 'เทสโก้ โลตัส บางนา-ตราด'
			));
			Location::create(array('location_id' => 139,
			'name' => 'เทสโก้ โลตัส บางบัวทอง'
			));
			Location::create(array('location_id' => 140,
			'name' => 'เทสโก้ โลตัส บางปะกอก'
			));
			Location::create(array('location_id' => 141,
			'name' => 'เทสโก้ โลตัส บางปู'
			));
			Location::create(array('location_id' => 142,
			'name' => 'เทสโก้ โลตัส บ้านเพ (ระยอง)'
			));
			Location::create(array('location_id' => 143,
			'name' => 'เทสโก้ โลตัส บ้านแพ้ว'
			));
			Location::create(array('location_id' => 144,
			'name' => 'เทสโก้ โลตัส บ้านโป่ง'
			));
			Location::create(array('location_id' => 145,
			'name' => 'เทสโก้ โลตัส บ้านฉาง'
			));
			Location::create(array('location_id' => 146,
			'name' => 'เทสโก้ โลตัส บ้านบึง'
			));
			Location::create(array('location_id' => 147,
			'name' => 'เทสโก้ โลตัส บ้านบึง - แกลง'
			));
			Location::create(array('location_id' => 148,
			'name' => 'เทสโก้ โลตัส บ้านฟ้าลำลูกกา'
			));
			Location::create(array('location_id' => 149,
			'name' => 'เทสโก้ โลตัส ประจวบคีรีขันธ์'
			));
			Location::create(array('location_id' => 150,
			'name' => 'เทสโก้ โลตัส ประชาชื่น'
			));
			Location::create(array('location_id' => 151,
			'name' => 'เทสโก้ โลตัส ปราจีนบุรี'
			));
			Location::create(array('location_id' => 152,
			'name' => 'เทสโก้ โลตัส ปราณบุรี'
			));
			Location::create(array('location_id' => 153,
			'name' => 'เทสโก้ โลตัส ปากช่อง'
			));
			Location::create(array('location_id' => 154,
			'name' => 'เทสโก้ โลตัส ปิ่นเกล้า'
			));
			Location::create(array('location_id' => 155,
			'name' => 'เทสโก้ โลตัส พนมสารคาม'
			));
			Location::create(array('location_id' => 156,
			'name' => 'เทสโก้ โลตัส พระราม 1'
			));
			Location::create(array('location_id' => 157,
			'name' => 'เทสโก้ โลตัส พระราม 2'
			));
			Location::create(array('location_id' => 158,
			'name' => 'เทสโก้ โลตัส พระราม 3'
			));
			Location::create(array('location_id' => 159,
			'name' => 'เทสโก้ โลตัส พระราม 4'
			));
			Location::create(array('location_id' => 160,
			'name' => 'เทสโก้ โลตัส พัฒนาการ'
			));
			Location::create(array('location_id' => 161,
			'name' => 'เทสโก้ โลตัส พัทยาเหนือ'
			));
			Location::create(array('location_id' => 162,
			'name' => 'เทสโก้ โลตัส พัทยาใต้'
			));
			Location::create(array('location_id' => 163,
			'name' => 'เทสโก้ โลตัส พัทลุง'
			));
			Location::create(array('location_id' => 164,
			'name' => 'เทสโก้ โลตัส พาต้า ปิ่นเกล้า'
			));
			Location::create(array('location_id' => 165,
			'name' => 'เทสโก้ โลตัส พิษณุโลก'
			));
			Location::create(array('location_id' => 166,
			'name' => 'เทสโก้ โลตัส ฟอร์จูน ทาวน์'
			));
			Location::create(array('location_id' => 167,
			'name' => 'เทสโก้ โลตัส ภูเก็ต'
			));
			Location::create(array('location_id' => 168,
			'name' => 'เทสโก้ โลตัส รวมโชค (เชียงใหม่)'
			));
			Location::create(array('location_id' => 169,
			'name' => 'เทสโก้ โลตัส ระยอง'
			));
			Location::create(array('location_id' => 170,
			'name' => 'เทสโก้ โลตัส รังสิต'
			));
			Location::create(array('location_id' => 171,
			'name' => 'เทสโก้ โลตัส รังสิตคลอง 7'
			));
			Location::create(array('location_id' => 172,
			'name' => 'เทสโก้ โลตัส รังสิต-นครนายก'
			));
			Location::create(array('location_id' => 173,
			'name' => 'เทสโก้ โลตัส รัตนาธิเบศร์'
			));
			Location::create(array('location_id' => 174,
			'name' => 'เทสโก้ โลตัส ราไวย์'
			));
			Location::create(array('location_id' => 175,
			'name' => 'เทสโก้ โลตัส รามอินทรา'
			));
			Location::create(array('location_id' => 176,
			'name' => 'เทสโก้ โลตัส ลาดพร้าว'
			));
			Location::create(array('location_id' => 177,
			'name' => 'เทสโก้ โลตัส ลำลูกกา (คลอง 2)'
			));
			Location::create(array('location_id' => 178,
			'name' => 'เทสโก้ โลตัส วังหิน'
			));
			Location::create(array('location_id' => 179,
			'name' => 'เทสโก้ โลตัส ศรีนครินทร์'
			));
			Location::create(array('location_id' => 180,
			'name' => 'เทสโก้ โลตัส ศรีสะเกษ'
			));
			Location::create(array('location_id' => 181,
			'name' => 'เทสโก้ โลตัส ศาลายา'
			));
			Location::create(array('location_id' => 182,
			'name' => 'เทสโก้ โลตัส สกลนคร'
			));
			Location::create(array('location_id' => 183,
			'name' => 'เทสโก้ โลตัส สงขลา'
			));
			Location::create(array('location_id' => 184,
			'name' => 'เทสโก้ โลตัส สตูล'
			));
			Location::create(array('location_id' => 185,
			'name' => 'เทสโก้ โลตัส สมุทรสงคราม'
			));
			Location::create(array('location_id' => 186,
			'name' => 'เทสโก้ โลตัส สมุย ละไม'
			));
			Location::create(array('location_id' => 187,
			'name' => 'เทสโก้ โลตัส สระบุรี'
			));
			Location::create(array('location_id' => 188,
			'name' => 'เทสโก้ โลตัส สะเดา'
			));
			Location::create(array('location_id' => 189,
			'name' => 'เทสโก้ โลตัส สามชุก'
			));
			Location::create(array('location_id' => 190,
			'name' => 'เทสโก้ โลตัส สามพราน'
			));
			Location::create(array('location_id' => 191,
			'name' => 'เทสโก้ โลตัส สิงห์บุรี'
			));
			Location::create(array('location_id' => 192,
			'name' => 'เทสโก้ โลตัส สุขาภิบาล 3'
			));
			Location::create(array('location_id' => 193,
			'name' => 'เทสโก้ โลตัส สุขุมวิท 50'
			));
			Location::create(array('location_id' => 194,
			'name' => 'เทสโก้ โลตัส สุพรรณบุรี'
			));
			Location::create(array('location_id' => 195,
			'name' => 'เทสโก้ โลตัส สุราษฎร์ธานี'
			));
			Location::create(array('location_id' => 196,
			'name' => 'เทสโก้ โลตัส สุรินทร์พลาซ่า'
			));
			Location::create(array('location_id' => 197,
			'name' => 'เทสโก้ โลตัส หนองจอก'
			));
			Location::create(array('location_id' => 198,
			'name' => 'เทสโก้ โลตัส หนองบัวลำภู'
			));
			Location::create(array('location_id' => 199,
			'name' => 'เทสโก้ โลตัส หลักสี่'
			));
			Location::create(array('location_id' => 200,
			'name' => 'เทสโก้ โลตัส หลังสวน'
			));
			Location::create(array('location_id' => 201,
			'name' => 'เทสโก้ โลตัส หางดง (เชียงใหม่)'
			));
			Location::create(array('location_id' => 202,
			'name' => 'เทสโก้ โลตัส หาดใหญ่'
			));
			Location::create(array('location_id' => 203,
			'name' => 'เทสโก้ โลตัส หาดใหญ่ใน'
			));
			Location::create(array('location_id' => 204,
			'name' => 'เทสโก้ โลตัส อมตะนคร'
			));
			Location::create(array('location_id' => 205,
			'name' => 'เทสโก้ โลตัส อรัญประเทศ'
			));
			Location::create(array('location_id' => 206,
			'name' => 'เทสโก้ โลตัส อุดรธานี'
			));
			Location::create(array('location_id' => 207,
			'name' => 'เทสโก้ โลตัส อุทุมพรพิสัย'
			));
			Location::create(array('location_id' => 208,
			'name' => 'เทสโก้ โลตัส อุบลราชธานี'
			));
			Location::create(array('location_id' => 209,
			'name' => 'เทสโก้ มอลล์ นิชาดาธานี'
			));
			Location::create(array('location_id' => 210,
			'name' => 'เทสโก้โลตัส ขุขันธ์ (ศรีสะเกษ)'
			));
			Location::create(array('location_id' => 211,
			'name' => 'เทสโก้โลตัส ระนอง'
			));
			Location::create(array('location_id' => 212,
			'name' => 'เทสโก้โลตัส สุขาภิบาล 1'
			));
			Location::create(array('location_id' => 213,
			'name' => 'เทอร์มินอล 21'
			));
			Location::create(array('location_id' => 214,
			'name' => 'เทิง (เชียงราย)'
			));
			Location::create(array('location_id' => 215,
			'name' => 'เพชรเกษม ซอย 114'
			));
			Location::create(array('location_id' => 216,
			'name' => 'เพชรเกษม ซอย 18'
			));
			Location::create(array('location_id' => 217,
			'name' => 'เพชรเกษม ซอย 29'
			));
			Location::create(array('location_id' => 218,
			'name' => 'เพชรเกษม ซอย 69'
			));
			Location::create(array('location_id' => 219,
			'name' => 'เพชรเกษม อเวนิว'
			));
			Location::create(array('location_id' => 220,
			'name' => 'เพชรบุรี'
			));
			Location::create(array('location_id' => 221,
			'name' => 'เพชรบูรณ์'
			));
			Location::create(array('location_id' => 222,
			'name' => 'เพ็ญ'
			));
			Location::create(array('location_id' => 223,
			'name' => 'เพลินจิต'
			));
			Location::create(array('location_id' => 224,
			'name' => 'เพลินจิต เซ็นเตอร์'
			));
			Location::create(array('location_id' => 225,
			'name' => 'เพียวเพลส ราชพฤกษ์'
			));
			Location::create(array('location_id' => 226,
			'name' => 'เมืองใหม่บางพลี'
			));
			Location::create(array('location_id' => 227,
			'name' => 'เมืองไทยภัทร'
			));
			Location::create(array('location_id' => 228,
			'name' => 'เมืองทองธานี'
			));
			Location::create(array('location_id' => 229,
			'name' => 'เมืองทองธานี ซิตี้เซ็นเตอร์'
			));
			Location::create(array('location_id' => 230,
			'name' => 'เมืองทองธานีซิตี้เซ็นเตอร์ 2'
			));
			Location::create(array('location_id' => 231,
			'name' => 'เมืองพล'
			));
			Location::create(array('location_id' => 232,
			'name' => 'เยส บางพลี'
			));
			Location::create(array('location_id' => 233,
			'name' => 'เยาวราช'
			));
			Location::create(array('location_id' => 234,
			'name' => 'เลย'
			));
			Location::create(array('location_id' => 235,
			'name' => 'เวเนเซีย หัวหิน'
			));
			Location::create(array('location_id' => 236,
			'name' => 'เวียงชัย'
			));
			Location::create(array('location_id' => 237,
			'name' => 'เวียงป่าเป้า'
			));
			Location::create(array('location_id' => 238,
			'name' => 'เวียงสระ'
			));
			Location::create(array('location_id' => 239,
			'name' => 'เสนา (อยุธยา)'
			));
			Location::create(array('location_id' => 240,
			'name' => 'เสนาเฟสท์ (เจริญนคร)'
			));
			Location::create(array('location_id' => 241,
			'name' => 'เสนาสฤษดิ์เดช'
			));
			Location::create(array('location_id' => 242,
			'name' => 'เสริมไทย คอมเพล็กซ์ (มหาสารคาม)'
			));
			Location::create(array('location_id' => 243,
			'name' => 'เสริมไทย พลาซ่า (มหาสารคาม)'
			));
			Location::create(array('location_id' => 244,
			'name' => 'เสลภูมิ'
			));
			Location::create(array('location_id' => 245,
			'name' => 'เหนือคลอง (กระบี่)'
			));
			Location::create(array('location_id' => 246,
			'name' => 'เอเชียทีค'
			));
			Location::create(array('location_id' => 247,
			'name' => 'เอ็กเชน ทาวเวอร์'
			));
			Location::create(array('location_id' => 248,
			'name' => 'เอกมัย'
			));
			Location::create(array('location_id' => 249,
			'name' => 'เอกมัย พาวเวอร์ เซ็นเตอร์'
			));
			Location::create(array('location_id' => 250,
			'name' => 'เอนเนอร์ยี่ คอมเพล็กซ์'
			));
			Location::create(array('location_id' => 251,
			'name' => 'เอ็นมาร์ค พลาซ่า (บางกะปิ)'
			));
			Location::create(array('location_id' => 252,
			'name' => 'เอส เอส พี ทาวเวอร์ 3'
			));
			Location::create(array('location_id' => 253,
			'name' => 'เอสพละนาด'
			));
			Location::create(array('location_id' => 254,
			'name' => 'แก้งคร้อ (ชัยภูมิ)'
			));
			Location::create(array('location_id' => 255,
			'name' => 'แก่งคอย'
			));
			Location::create(array('location_id' => 256,
			'name' => 'แกลง'
			));
			Location::create(array('location_id' => 257,
			'name' => 'แจ้งวัฒนะ ซอย 13'
			));
			Location::create(array('location_id' => 258,
			'name' => 'แพร่'
			));
			Location::create(array('location_id' => 259,
			'name' => 'แฟรี่แลนด์ (นครสวรรค์)'
			));
			Location::create(array('location_id' => 260,
			'name' => 'แม่โจ้'
			));
			Location::create(array('location_id' => 261,
			'name' => 'แม็กซ์แวลู พัฒนาการ'
			));
			Location::create(array('location_id' => 262,
			'name' => 'แม่ขรี (พัทลุง)'
			));
			Location::create(array('location_id' => 263,
			'name' => 'แม่จัน (เชียงราย)'
			));
			Location::create(array('location_id' => 264,
			'name' => 'แม่ริม (เชียงใหม่)'
			));
			Location::create(array('location_id' => 265,
			'name' => 'แม่สอด'
			));
			Location::create(array('location_id' => 266,
			'name' => 'แม่สาย'
			));
			Location::create(array('location_id' => 267,
			'name' => 'แม่ฮ่องสอน'
			));
			Location::create(array('location_id' => 268,
			'name' => 'แยกบางรัก'
			));
			Location::create(array('location_id' => 269,
			'name' => 'แสนตุ้ง (ตราด)'
			));
			Location::create(array('location_id' => 270,
			'name' => 'แหลมฉบัง'
			));
			Location::create(array('location_id' => 271,
			'name' => 'แหลมทอง'
			));
			Location::create(array('location_id' => 272,
			'name' => 'แหลมทอง บางแสน'
			));
			Location::create(array('location_id' => 273,
			'name' => 'แฮปปี้ พลาซ่า (พิจิตร)'
			));
			Location::create(array('location_id' => 274,
			'name' => 'โกลเด้นเพลส (ประดิษฐ์มนูธรรม)'
			));
			Location::create(array('location_id' => 275,
			'name' => 'โกสุมพิสัย'
			));
			Location::create(array('location_id' => 276,
			'name' => 'โคกกลอย (พังงา)'
			));
			Location::create(array('location_id' => 277,
			'name' => 'โคกสำโรง (ลพบุรี)'
			));
			Location::create(array('location_id' => 278,
			'name' => 'โชคชัย 4 พลาซ่า'
			));
			Location::create(array('location_id' => 279,
			'name' => 'โนนสะอาด'
			));
			Location::create(array('location_id' => 280,
			'name' => 'โบ๊เบ๊'
			));
			Location::create(array('location_id' => 281,
			'name' => 'โพธาราม'
			));
			Location::create(array('location_id' => 282,
			'name' => 'โพธิ์แจ้ (สมุทรสาคร)'
			));
			Location::create(array('location_id' => 283,
			'name' => 'โพนพิสัย (หนองคาย)'
			));
			Location::create(array('location_id' => 284,
			'name' => 'โรงพยาบาลเซนต์หลุยส์'
			));
			Location::create(array('location_id' => 285,
			'name' => 'โรงพยาบาลเวชศาสตร์เขตร้อน'
			));
			Location::create(array('location_id' => 286,
			'name' => 'โรงพยาบาลแมคคอร์มิค (เชียงใหม่)'
			));
			Location::create(array('location_id' => 287,
			'name' => 'โรงพยาบาลจุฬาลงกรณ์ (อาคาร ภปร.)'
			));
			Location::create(array('location_id' => 288,
			'name' => 'โรงพยาบาลธรรมศาสตร์เฉลิมพระเกียรติ'
			));
			Location::create(array('location_id' => 289,
			'name' => 'โรงพยาบาลราชวิถี'
			));
			Location::create(array('location_id' => 290,
			'name' => 'โรงพยาบาลศิริราช'
			));
			Location::create(array('location_id' => 291,
			'name' => 'โรงพยาบาลสุราษฎร์ธานี'
			));
			Location::create(array('location_id' => 292,
			'name' => 'โรงพยาบาลหัวเฉียว (ยศเส)'
			));
			Location::create(array('location_id' => 293,
			'name' => 'โรบินสัน'
			));
			Location::create(array('location_id' => 294,
			'name' => 'โรบินสัน กาญจนบุรี'
			));
			Location::create(array('location_id' => 295,
			'name' => 'โรบินสัน จันทบุรี'
			));
			Location::create(array('location_id' => 296,
			'name' => 'โรบินสัน ตรัง'
			));
			Location::create(array('location_id' => 297,
			'name' => 'โรบินสัน นครศรีธรรมราช'
			));
			Location::create(array('location_id' => 298,
			'name' => 'โรบินสัน ภูเก็ต'
			));
			Location::create(array('location_id' => 299,
			'name' => 'โรบินสัน ราชบุรี'
			));
			Location::create(array('location_id' => 300,
			'name' => 'โรบินสัน ศรีราชา'
			));
			Location::create(array('location_id' => 301,
			'name' => 'โรบินสัน สกลนคร'
			));
			Location::create(array('location_id' => 302,
			'name' => 'โรบินสัน สระบุรี'
			));
			Location::create(array('location_id' => 303,
			'name' => 'โรบินสัน สุรินทร์'
			));
			Location::create(array('location_id' => 304,
			'name' => 'โรบินสัน หาดใหญ่'
			));
			Location::create(array('location_id' => 305,
			'name' => 'โฮมเวิร์ค ราชพฤกษ์'
			));
			Location::create(array('location_id' => 306,
			'name' => 'โฮมโปร ประชาชื่น'
			));
			Location::create(array('location_id' => 307,
			'name' => 'โฮมโปร ราชพฤกษ์'
			));
			Location::create(array('location_id' => 308,
			'name' => 'โฮมโปร สุวรรณภูมิ'
			));
			Location::create(array('location_id' => 309,
			'name' => 'ไชโย'
			));
			Location::create(array('location_id' => 310,
			'name' => 'ไชยา'
			));
			Location::create(array('location_id' => 311,
			'name' => 'ไทมส์ สแควร์'
			));
			Location::create(array('location_id' => 312,
			'name' => 'ไทยธานี (นวนคร-ปทุมธานี)'
			));
			Location::create(array('location_id' => 313,
			'name' => 'ไทรน้อย (นนทบุรี)'
			));
			Location::create(array('location_id' => 314,
			'name' => 'ไอเพลส (นิคมอุตสาหกรรมลาดกระบัง)'
			));
			Location::create(array('location_id' => 315,
			'name' => 'ไอที สแควร์ (หลักสี่)'
			));
			Location::create(array('location_id' => 316,
			'name' => 'กบินทร์บุรี'
			));
			Location::create(array('location_id' => 317,
			'name' => 'กมลา (ภูเก็ต)'
			));
			Location::create(array('location_id' => 318,
			'name' => 'กมลาไสย (กาฬสินธุ์)'
			));
			Location::create(array('location_id' => 319,
			'name' => 'กรมการขนส่งทางบก'
			));
			Location::create(array('location_id' => 320,
			'name' => 'กรมศุลกากร'
			));
			Location::create(array('location_id' => 321,
			'name' => 'กระทรวงสาธารณสุข'
			));
			Location::create(array('location_id' => 322,
			'name' => 'กระทุ่มแบน'
			));
			Location::create(array('location_id' => 323,
			'name' => 'กระนวน (ขอนแก่น)'
			));
			Location::create(array('location_id' => 324,
			'name' => 'กระบี่'
			));
			Location::create(array('location_id' => 325,
			'name' => 'กะตะ (ภูเก็ต)'
			));
			Location::create(array('location_id' => 326,
			'name' => 'กันทรลักษ์ (ศรีสะเกษ)'
			));
			Location::create(array('location_id' => 327,
			'name' => 'กาญจนดิษฐ์'
			));
			Location::create(array('location_id' => 328,
			'name' => 'กาญจนบุรี'
			));
			Location::create(array('location_id' => 329,
			'name' => 'กาดสวนแก้ว (เชียงใหม่)'
			));
			Location::create(array('location_id' => 330,
			'name' => 'การไฟฟ้าฝ่ายผลิต (บางกรวย)'
			));
			Location::create(array('location_id' => 331,
			'name' => 'การตลาดสินเชื่อรถยนต์ SCB สาขาถนนรัตนาธิเบศร์'
			));
			Location::create(array('location_id' => 332,
			'name' => 'กาฬสินธุ์'
			));
			Location::create(array('location_id' => 333,
			'name' => 'กำแพงเพชร'
			));
			Location::create(array('location_id' => 334,
			'name' => 'กำแพงแสน (มหาวิทยาลัยเกษตรศาสตร์)'
			));
			Location::create(array('location_id' => 335,
			'name' => 'กุฉินารายณ์ (กาฬสินธุ์)'
			));
			Location::create(array('location_id' => 336,
			'name' => 'กุดบาก (สกลนคร)'
			));
			Location::create(array('location_id' => 337,
			'name' => 'กุมภวาปี (อุดรธานี)'
			));
			Location::create(array('location_id' => 338,
			'name' => 'ขนอม'
			));
			Location::create(array('location_id' => 339,
			'name' => 'ขอนแก่น'
			));
			Location::create(array('location_id' => 340,
			'name' => 'ขุขันธ์'
			));
			Location::create(array('location_id' => 341,
			'name' => 'คณะแพทยศาสตร์เชียงใหม่'
			));
			Location::create(array('location_id' => 342,
			'name' => 'ครบุรี'
			));
			Location::create(array('location_id' => 343,
			'name' => 'คริสตัล ดีไซน์ เซ็นเตอร์'
			));
			Location::create(array('location_id' => 344,
			'name' => 'คลอง 10 (ธัญบุรี)'
			));
			Location::create(array('location_id' => 345,
			'name' => 'คลอง 16'
			));
			Location::create(array('location_id' => 346,
			'name' => 'คลอง 2 (ธัญบุรี)'
			));
			Location::create(array('location_id' => 347,
			'name' => 'คลอง 6 (ธัญบุรี)'
			));
			Location::create(array('location_id' => 348,
			'name' => 'คลองแงะ (สงขลา)'
			));
			Location::create(array('location_id' => 349,
			'name' => 'คลองใหญ่'
			));
			Location::create(array('location_id' => 350,
			'name' => 'คลองจั่น'
			));
			Location::create(array('location_id' => 351,
			'name' => 'คลองตัน'
			));
			Location::create(array('location_id' => 352,
			'name' => 'คลองท่อม (กระบี่)'
			));
			Location::create(array('location_id' => 353,
			'name' => 'คลองรั้ง (ศรีมหาโพธิ)'
			));
			Location::create(array('location_id' => 354,
			'name' => 'คลองหลวง'
			));
			Location::create(array('location_id' => 355,
			'name' => 'คลินิกศูนย์แพทย์พัฒนา'
			));
			Location::create(array('location_id' => 356,
			'name' => 'คาร์ฟูร์ เชียงใหม่'
			));
			Location::create(array('location_id' => 357,
			'name' => 'คาร์ฟูร์ เพชรเกษม'
			));
			Location::create(array('location_id' => 358,
			'name' => 'คาร์ฟูร์ แจ้งวัฒนะ'
			));
			Location::create(array('location_id' => 359,
			'name' => 'คาร์ฟูร์ บางใหญ่'
			));
			Location::create(array('location_id' => 360,
			'name' => 'คาร์ฟูร์ บางบอน'
			));
			Location::create(array('location_id' => 361,
			'name' => 'คาร์ฟูร์ บางปะกอก'
			));
			Location::create(array('location_id' => 362,
			'name' => 'คาร์ฟูร์ พระราม 2'
			));
			Location::create(array('location_id' => 363,
			'name' => 'คาร์ฟูร์ พระราม 4'
			));
			Location::create(array('location_id' => 364,
			'name' => 'คาร์ฟูร์ พัทยา'
			));
			Location::create(array('location_id' => 365,
			'name' => 'คาร์ฟูร์ ร่มเกล้า'
			));
			Location::create(array('location_id' => 366,
			'name' => 'คาร์ฟูร์ รังสิต'
			));
			Location::create(array('location_id' => 367,
			'name' => 'คาร์ฟูร์ รังสิต คลอง 3'
			));
			Location::create(array('location_id' => 368,
			'name' => 'คาร์ฟูร์ รัชดาภิเษก'
			));
			Location::create(array('location_id' => 369,
			'name' => 'คาร์ฟูร์ รัตนาธิเบศร์'
			));
			Location::create(array('location_id' => 370,
			'name' => 'คาร์ฟูร์ รามอินทรา'
			));
			Location::create(array('location_id' => 371,
			'name' => 'คาร์ฟูร์ ลพบุรี'
			));
			Location::create(array('location_id' => 372,
			'name' => 'คาร์ฟูร์ ลาดพร้าว'
			));
			Location::create(array('location_id' => 373,
			'name' => 'คาร์ฟูร์ ศรีนครินทร์'
			));
			Location::create(array('location_id' => 374,
			'name' => 'คาร์ฟูร์ สวนหลวง'
			));
			Location::create(array('location_id' => 375,
			'name' => 'คาร์ฟูร์ สำโรง'
			));
			Location::create(array('location_id' => 376,
			'name' => 'คาร์ฟูร์ สุขาภิบาล 5'
			));
			Location::create(array('location_id' => 377,
			'name' => 'คาร์ฟูร์ สุวินทวงศ์'
			));
			Location::create(array('location_id' => 378,
			'name' => 'คาร์ฟูร์ อ่อนนุช'
			));
			Location::create(array('location_id' => 379,
			'name' => 'คีรีรัฐนิคม'
			));
			Location::create(array('location_id' => 380,
			'name' => 'คูคต (คลอง 2)'
			));
			Location::create(array('location_id' => 381,
			'name' => 'คู้บอน'
			));
			Location::create(array('location_id' => 382,
			'name' => 'งามวงศ์วาน'
			));
			Location::create(array('location_id' => 383,
			'name' => 'จรัลสนิทวงศ์ ซอย 13'
			));
			Location::create(array('location_id' => 384,
			'name' => 'จรัลสนิทวงศ์ ซอย 48'
			));
			Location::create(array('location_id' => 385,
			'name' => 'จอมเทียน'
			));
			Location::create(array('location_id' => 386,
			'name' => 'จอมทอง'
			));
			Location::create(array('location_id' => 387,
			'name' => 'จอมทอง 19 (วันสีสุก)'
			));
			Location::create(array('location_id' => 388,
			'name' => 'จอมบึง'
			));
			Location::create(array('location_id' => 389,
			'name' => 'จอหอ'
			));
			Location::create(array('location_id' => 390,
			'name' => 'จังซีลอน ภูเก็ต'
			));
			Location::create(array('location_id' => 391,
			'name' => 'จัตุรัส'
			));
			Location::create(array('location_id' => 392,
			'name' => 'จัตุรัสจามจุรี'
			));
			Location::create(array('location_id' => 393,
			'name' => 'จันดี (นครศรีธรรมราช)'
			));
			Location::create(array('location_id' => 394,
			'name' => 'จันทบุรี'
			));
			Location::create(array('location_id' => 395,
			'name' => 'จุฬาลงกรณ์มหาวิทยาลัย'
			));
			Location::create(array('location_id' => 396,
			'name' => 'ฉะเชิงเทรา'
			));
			Location::create(array('location_id' => 397,
			'name' => 'ชนบท'
			));
			Location::create(array('location_id' => 398,
			'name' => 'ชลบุรี'
			));
			Location::create(array('location_id' => 399,
			'name' => 'ช่องเม็ก (อุบลราชธานี)'
			));
			Location::create(array('location_id' => 400,
			'name' => 'ชะอวด (นครศรีึธรรมราช)'
			));
			Location::create(array('location_id' => 401,
			'name' => 'ชะอำ'
			));
			Location::create(array('location_id' => 402,
			'name' => 'ชัยนาท'
			));
			Location::create(array('location_id' => 403,
			'name' => 'ชัยภูมิ'
			));
			Location::create(array('location_id' => 404,
			'name' => 'ชิดลม'
			));
			Location::create(array('location_id' => 405,
			'name' => 'ชุมแพ'
			));
			Location::create(array('location_id' => 406,
			'name' => 'ชุมพร'
			));
			Location::create(array('location_id' => 407,
			'name' => 'ซอยเซ็นต์หลุยส์ 3'
			));
			Location::create(array('location_id' => 408,
			'name' => 'ซอยเนินพลับหวาน (พัทยา)'
			));
			Location::create(array('location_id' => 409,
			'name' => 'ซอยโชคชัย 4'
			));
			Location::create(array('location_id' => 410,
			'name' => 'ซอยไชยยศ'
			));
			Location::create(array('location_id' => 411,
			'name' => 'ซอยทองหล่อ'
			));
			Location::create(array('location_id' => 412,
			'name' => 'ซอยบัวขาว (พัทยา)'
			));
			Location::create(array('location_id' => 413,
			'name' => 'ซอยประชาสงเคราะห์ 30'
			));
			Location::create(array('location_id' => 414,
			'name' => 'ซอยมหาดไทย'
			));
			Location::create(array('location_id' => 415,
			'name' => 'ซอยรามคำแหง 24'
			));
			Location::create(array('location_id' => 416,
			'name' => 'ซอยลาซาล'
			));
			Location::create(array('location_id' => 417,
			'name' => 'ซอยลาดพร้าว 101 (วัดบึงทองหลาง)'
			));
			Location::create(array('location_id' => 418,
			'name' => 'ซอยวัดด่านสำโรง'
			));
			Location::create(array('location_id' => 419,
			'name' => 'ซอยวัดบัวขวัญ (นนทบุรี)'
			));
			Location::create(array('location_id' => 420,
			'name' => 'ซอยวัดบุญสัมพันธ์ (พัทยา)'
			));
			Location::create(array('location_id' => 421,
			'name' => 'ซอยสยามคันทรีคลับ (พัทยา)'
			));
			Location::create(array('location_id' => 422,
			'name' => 'ซอยสาครพิทักษ์ (ชลบุรี)'
			));
			Location::create(array('location_id' => 423,
			'name' => 'ซอยหมู่บ้านเศรษฐกิจ'
			));
			Location::create(array('location_id' => 424,
			'name' => 'ซอยหมู่บ้านเสนานิเวศน์'
			));
			Location::create(array('location_id' => 425,
			'name' => 'ซอยอารีสัมพันธ์'
			));
			Location::create(array('location_id' => 426,
			'name' => 'ซิตี้ รีสอร์ท สุขุมวิท 39'
			));
			Location::create(array('location_id' => 427,
			'name' => 'ซิตี้คอมเพล็กซ์ ประตูน้ำ'
			));
			Location::create(array('location_id' => 428,
			'name' => 'ซี.เค พลาซ่า (ระยอง)'
			));
			Location::create(array('location_id' => 429,
			'name' => 'ซีคอน บางแค'
			));
			Location::create(array('location_id' => 430,
			'name' => 'ซีคอนสแควร์ 2'
			));
			Location::create(array('location_id' => 431,
			'name' => 'ดอนเจดีย์'
			));
			Location::create(array('location_id' => 432,
			'name' => 'ดอนยายหอม (นครปฐม)'
			));
			Location::create(array('location_id' => 433,
			'name' => 'ด่านขุนทด (นครราชสีมา)'
			));
			Location::create(array('location_id' => 434,
			'name' => 'ด่านช้าง (สุพรรณบุรี)'
			));
			Location::create(array('location_id' => 435,
			'name' => 'ด่านซ้าย'
			));
			Location::create(array('location_id' => 436,
			'name' => 'ด่านมะขามเตี้ย'
			));
			Location::create(array('location_id' => 437,
			'name' => 'ดาวคะนอง'
			));
			Location::create(array('location_id' => 438,
			'name' => 'ดำเนินสะดวก'
			));
			Location::create(array('location_id' => 439,
			'name' => 'ตรัง'
			));
			Location::create(array('location_id' => 440,
			'name' => 'ตราด'
			));
			Location::create(array('location_id' => 441,
			'name' => 'ตรีเพชร'
			));
			Location::create(array('location_id' => 442,
			'name' => 'ตลาดเขต'
			));
			Location::create(array('location_id' => 443,
			'name' => 'ตลาดเจ้าพระยา (บางใหญ่)'
			));
			Location::create(array('location_id' => 444,
			'name' => 'ตลาดเทศบาลตราด'
			));
			Location::create(array('location_id' => 445,
			'name' => 'ตลาดเมืองใหม่บางพลี'
			));
			Location::create(array('location_id' => 446,
			'name' => 'ตลาดแพรกษา'
			));
			Location::create(array('location_id' => 447,
			'name' => 'ตลาดโรงเกลือ (อรัญประเทศ)'
			));
			Location::create(array('location_id' => 448,
			'name' => 'ตลาดโรงโป๊ะ (ชลบุรี)'
			));
			Location::create(array('location_id' => 449,
			'name' => 'ตลาดใหม่ (ชลบุรี)'
			));
			Location::create(array('location_id' => 450,
			'name' => 'ตลาดใหม่ทุ่งครุ'
			));
			Location::create(array('location_id' => 451,
			'name' => 'ตลาดไท'
			));
			Location::create(array('location_id' => 452,
			'name' => 'ตลาดไท 2'
			));
			Location::create(array('location_id' => 453,
			'name' => 'ตลาดกำแพงแสน (นครปฐม)'
			));
			Location::create(array('location_id' => 454,
			'name' => 'ตลาดฉัตรไชย (หัวหิน)'
			));
			Location::create(array('location_id' => 455,
			'name' => 'ตลาดดวงแก้ว'
			));
			Location::create(array('location_id' => 456,
			'name' => 'ตลาดดอนหัวฬ่อ (อมตะนคร-ชลบุรี)'
			));
			Location::create(array('location_id' => 457,
			'name' => 'ตลาดท่าม่วง (กาญจนบุรี)'
			));
			Location::create(array('location_id' => 458,
			'name' => 'ตลาดน้อย'
			));
			Location::create(array('location_id' => 459,
			'name' => 'ตลาดนาเกลือ (พัทยา)'
			));
			Location::create(array('location_id' => 460,
			'name' => 'ตลาดนานาเจริญ (ถนนเสมาฟ้าคราม)'
			));
			Location::create(array('location_id' => 461,
			'name' => 'ตลาดบอง มาร์เช่'
			));
			Location::create(array('location_id' => 462,
			'name' => 'ตลาดบ่อบัว (ฉะเชิงเทรา)'
			));
			Location::create(array('location_id' => 463,
			'name' => 'ตลาดบ่อผุด (เกาะสมุย)'
			));
			Location::create(array('location_id' => 464,
			'name' => 'ตลาดบางแค'
			));
			Location::create(array('location_id' => 465,
			'name' => 'ตลาดบางศรีเมือง (นนทบุรี)'
			));
			Location::create(array('location_id' => 466,
			'name' => 'ตลาดบ้านดู่(อุบลราชธานี)'
			));
			Location::create(array('location_id' => 467,
			'name' => 'ตลาดบูรพาซิตี้(บางวัว)'
			));
			Location::create(array('location_id' => 468,
			'name' => 'ตลาดพลู'
			));
			Location::create(array('location_id' => 469,
			'name' => 'ตลาดพูนทรัพย์ (ปทุมธานี)'
			));
			Location::create(array('location_id' => 470,
			'name' => 'ตลาดมหาชัย'
			));
			Location::create(array('location_id' => 471,
			'name' => 'ตลาดมีนบุรี'
			));
			Location::create(array('location_id' => 472,
			'name' => 'ตลาดย่านยาว'
			));
			Location::create(array('location_id' => 473,
			'name' => 'ตลาดยิ่งเจริญ'
			));
			Location::create(array('location_id' => 474,
			'name' => 'ตลาดศรีเมือง (ราชบุรี)'
			));
			Location::create(array('location_id' => 475,
			'name' => 'ตลาดศรีย่าน'
			));
			Location::create(array('location_id' => 476,
			'name' => 'ตลาดศาลายา'
			));
			Location::create(array('location_id' => 477,
			'name' => 'ตลาดสดสะพาน 4 (ระยอง)'
			));
			Location::create(array('location_id' => 478,
			'name' => 'ตลาดสมเพชร (เชียงใหม่)'
			));
			Location::create(array('location_id' => 479,
			'name' => 'ตลาดสระทอง'
			));
			Location::create(array('location_id' => 480,
			'name' => 'ตลาดสะพานแดง (รังสิตคลอง 1)'
			));
			Location::create(array('location_id' => 481,
			'name' => 'ตลาดสันทราย (เชียงใหม่)'
			));
			Location::create(array('location_id' => 482,
			'name' => 'ตลาดสุวินทวงศ์ พลาซ่า (ฉะเชิงเทรา)'
			));
			Location::create(array('location_id' => 483,
			'name' => 'ตลาดหนองบัว (อุบลราชธานี)'
			));
			Location::create(array('location_id' => 484,
			'name' => 'ตลาดหนองมน (ชลบุรี)'
			));
			Location::create(array('location_id' => 485,
			'name' => 'ตลาดหนามแดง (เทพารักษ์)'
			));
			Location::create(array('location_id' => 486,
			'name' => 'ตลาดหัวอิฐ (นครศรีธรรมราช)'
			));
			Location::create(array('location_id' => 487,
			'name' => 'ตลาดอำเภอบางกรวย'
			));
			Location::create(array('location_id' => 488,
			'name' => 'ตลาดอุดมสุข (กบินทร์บุรี)'
			));
			Location::create(array('location_id' => 489,
			'name' => 'ตะพานหิน'
			));
			Location::create(array('location_id' => 490,
			'name' => 'ตาก'
			));
			Location::create(array('location_id' => 491,
			'name' => 'ตาคลี'
			));
			Location::create(array('location_id' => 492,
			'name' => 'ตึกคอม'
			));
			Location::create(array('location_id' => 493,
			'name' => 'ตึกคอม ขอนแก่น'
			));
			Location::create(array('location_id' => 494,
			'name' => 'ตึกคอม พัทยา'
			));
			Location::create(array('location_id' => 495,
			'name' => 'ตึกคอม ศรีราชา'
			));
			Location::create(array('location_id' => 496,
			'name' => 'ตึกคอม อุดรธานี'
			));
			Location::create(array('location_id' => 497,
			'name' => 'ตึกภคินทร์'
			));
			Location::create(array('location_id' => 498,
			'name' => 'ถนนเจริญกรุง (คลองถม)'
			));
			Location::create(array('location_id' => 499,
			'name' => 'ถนนเจริญราษฎร์ (ลำพูน)'
			));
			Location::create(array('location_id' => 500,
			'name' => 'ถนนเจ้าฟ้า (ภูเก็ต)'
			));
			Location::create(array('location_id' => 501,
			'name' => 'ถนนเจ้าฟ้า 2 (ภูเก็ต)'
			));
			Location::create(array('location_id' => 502,
			'name' => 'ถนนเฉลิมพระเกียรติ ร.9 (วัดตะกล่ำ)'
			));
			Location::create(array('location_id' => 503,
			'name' => 'ถนนเชิดวุฒากาศ (ดอนเมือง)'
			));
			Location::create(array('location_id' => 504,
			'name' => 'ถนนเตชะวนิช (ปูนซีเมนต์ไทย)'
			));
			Location::create(array('location_id' => 505,
			'name' => 'ถนนเทพกระษัตรี (ภูเก็ต)'
			));
			Location::create(array('location_id' => 506,
			'name' => 'ถนนเทพประสิทธิ์ (พัทยา)'
			));
			Location::create(array('location_id' => 507,
			'name' => 'ถนนเทพารักษ์ (อาคารมาลีรมย์)'
			));
			Location::create(array('location_id' => 508,
			'name' => 'ถนนเพชรบุรี'
			));
			Location::create(array('location_id' => 509,
			'name' => 'ถนนเพชรบุรีตัดใหม่'
			));
			Location::create(array('location_id' => 510,
			'name' => 'ถนนเพชรบุรีตัดใหม่ (อาคารธนภูมิ)'
			));
			Location::create(array('location_id' => 511,
			'name' => 'ถนนเพชรบุรีตัดใหม่ (อาคารอิตัลไทยทาวเวอร์)'
			));
			Location::create(array('location_id' => 512,
			'name' => 'ถนนเมืองสมุทร (เชียงใหม่)'
			));
			Location::create(array('location_id' => 513,
			'name' => 'ถนนเลียบคลองสอง (ซาฟารีเวิล์ด)'
			));
			Location::create(array('location_id' => 514,
			'name' => 'ถนนเลียบคลองสาม (รังสิต-นครนายก)'
			));
			Location::create(array('location_id' => 515,
			'name' => 'ถนนเลียบชายหาดจอมเทียน (โค้งดงตาล)'
			));
			Location::create(array('location_id' => 516,
			'name' => 'ถนนเศรษฐกิจ 1 (กระทุ่มแบน)'
			));
			Location::create(array('location_id' => 517,
			'name' => 'ถนนเศรษฐกิจ 1 (สมุทรสาคร)'
			));
			Location::create(array('location_id' => 518,
			'name' => 'ถนนเสรีไทย (สวนสยาม)'
			));
			Location::create(array('location_id' => 519,
			'name' => 'ถนนเอกชัย'
			));
			Location::create(array('location_id' => 520,
			'name' => 'ถนนแจ้งวัฒนะ'
			));
			Location::create(array('location_id' => 521,
			'name' => 'ถนนแจ้งวัฒนะ (ทีโอที)'
			));
			Location::create(array('location_id' => 522,
			'name' => 'ถนนโชตนา (เชียงใหม่)'
			));
			Location::create(array('location_id' => 523,
			'name' => 'ถนนโพศรี (อุดรธานี)'
			));
			Location::create(array('location_id' => 524,
			'name' => 'ถนนโรจนะ (อยุธยา)'
			));
			Location::create(array('location_id' => 525,
			'name' => 'ถนนกาญจนวิถี (สุราษฎร์ธานี)'
			));
			Location::create(array('location_id' => 526,
			'name' => 'ถนนกาญจนาภิเษก (บางแวก)'
			));
			Location::create(array('location_id' => 527,
			'name' => 'ถนนกาญจนาภิเษก (บ้านบัวทอง)'
			));
			Location::create(array('location_id' => 528,
			'name' => 'ถนนกาญจนาภิเษก (ปตท. วงแหวนบางแค 2)'
			));
			Location::create(array('location_id' => 529,
			'name' => 'ถนนกิ่งแก้ว (อ่อนนุช)'
			));
			Location::create(array('location_id' => 530,
			'name' => 'ถนนจันทน์'
			));
			Location::create(array('location_id' => 531,
			'name' => 'ถนนช้างคลาน (เชียงใหม่)'
			));
			Location::create(array('location_id' => 532,
			'name' => 'ถนนดินแดง'
			));
			Location::create(array('location_id' => 533,
			'name' => 'ถนนตรีรัตน์ (จันทบุรี)'
			));
			Location::create(array('location_id' => 534,
			'name' => 'ถนนตากสิน'
			));
			Location::create(array('location_id' => 535,
			'name' => 'ถนนทรงพล (นครปฐม)'
			));
			Location::create(array('location_id' => 536,
			'name' => 'ถนนทรงวาด'
			));
			Location::create(array('location_id' => 537,
			'name' => 'ถนนทวีราษฎร์ภักดี (เฉวง)'
			));
			Location::create(array('location_id' => 538,
			'name' => 'ถนนทหาร (อุดรธานี)'
			));
			Location::create(array('location_id' => 539,
			'name' => 'ถนนท่ามะนาว (ลำนารายณ์)'
			));
			Location::create(array('location_id' => 540,
			'name' => 'ถนนนครเขื่อนขันธ์ (สมุทรปราการ)'
			));
			Location::create(array('location_id' => 541,
			'name' => 'ถนนนวมินทร์'
			));
			Location::create(array('location_id' => 542,
			'name' => 'ถนนนวลจันทร์'
			));
			Location::create(array('location_id' => 543,
			'name' => 'ถนนนาใน (ป่าตอง)'
			));
			Location::create(array('location_id' => 544,
			'name' => 'ถนนนิพัทธ์สงเคราะห์ 1 (หาดใหญ่)'
			));
			Location::create(array('location_id' => 545,
			'name' => 'ถนนนิมมานเหมินท์ (เชียงใหม่)'
			));
			Location::create(array('location_id' => 546,
			'name' => 'ถนนนิมิตรใหม่'
			));
			Location::create(array('location_id' => 547,
			'name' => 'ถนนบรมไตรโลกนาถ (พิษณุโลก)'
			));
			Location::create(array('location_id' => 548,
			'name' => 'ถนนบางขันธ์ - คลองหลวง (วัดพระธรรมกาย)'
			));
			Location::create(array('location_id' => 549,
			'name' => 'ถนนบางขุนเทียน - ชายทะเล'
			));
			Location::create(array('location_id' => 550,
			'name' => 'ถนนบายพาส (ชลบุรี)'
			));
			Location::create(array('location_id' => 551,
			'name' => 'ถนนบุญวาทย์ (ลำปาง)'
			));
			Location::create(array('location_id' => 552,
			'name' => 'ถนนประชาราษฎร์ สาย1 (บางโพ)'
			));
			Location::create(array('location_id' => 553,
			'name' => 'ถนนประชาสงเคราะห์'
			));
			Location::create(array('location_id' => 554,
			'name' => 'ถนนประชาอุทิศ'
			));
			Location::create(array('location_id' => 555,
			'name' => 'ถนนประชาอุทิศ (เหม่งจ๋าย)'
			));
			Location::create(array('location_id' => 556,
			'name' => 'ถนนปู่เจ้าสมิงพราย'
			));
			Location::create(array('location_id' => 557,
			'name' => 'ถนนพระยาสัจจา (ชลบุรี)'
			));
			Location::create(array('location_id' => 558,
			'name' => 'ถนนพระราม 2 กม.13 (พันท้ายนรสิงห์)'
			));
			Location::create(array('location_id' => 559,
			'name' => 'ถนนพังงา (ภูเก็ต)'
			));
			Location::create(array('location_id' => 560,
			'name' => 'ถนนพัฒนาการ'
			));
			Location::create(array('location_id' => 561,
			'name' => 'ถนนพัทยากลาง'
			));
			Location::create(array('location_id' => 562,
			'name' => 'ถนนพิชัยรณรงค์สงคราม'
			));
			Location::create(array('location_id' => 563,
			'name' => 'ถนนพุทธมณฑลสาย 2'
			));
			Location::create(array('location_id' => 564,
			'name' => 'ถนนพุทธมณฑลสาย 4'
			));
			Location::create(array('location_id' => 565,
			'name' => 'ถนนพุทธมณฑลสาย 5'
			));
			Location::create(array('location_id' => 566,
			'name' => 'ถนนมิตรภาพ (นครราชสีมา)'
			));
			Location::create(array('location_id' => 567,
			'name' => 'ถนนมุขมนตรี (นครราชสีมา)'
			));
			Location::create(array('location_id' => 568,
			'name' => 'ถนนร่มเกล้า (รุ่งกิจ 7)'
			));
			Location::create(array('location_id' => 569,
			'name' => 'ถนนรัชดาภิเษก'
			));
			Location::create(array('location_id' => 570,
			'name' => 'ถนนรัชดาภิเษก (ท่าพระ)'
			));
			Location::create(array('location_id' => 571,
			'name' => 'ถนนรัชดาภิเษก 2'
			));
			Location::create(array('location_id' => 572,
			'name' => 'ถนนรัชดาภิเษก 3 (ทรูทาวเวอร์)'
			));
			Location::create(array('location_id' => 573,
			'name' => 'ถนนรัตนโกสินทร์สมโภช (บ้านแมกไม้)'
			));
			Location::create(array('location_id' => 574,
			'name' => 'ถนนรัตนาธิเบศร์'
			));
			Location::create(array('location_id' => 575,
			'name' => 'ถนนรัถการ (หาดใหญ่)'
			));
			Location::create(array('location_id' => 576,
			'name' => 'ถนนรัษฎา (ตรัง)'
			));
			Location::create(array('location_id' => 577,
			'name' => 'ถนนรามคำแหง'
			));
			Location::create(array('location_id' => 578,
			'name' => 'ถนนรามคำแหง (สัมมากร)'
			));
			Location::create(array('location_id' => 579,
			'name' => 'ถนนรามอินทรา (แฟชั่นไอส์แลนด์ 2)'
			));
			Location::create(array('location_id' => 580,
			'name' => 'ถนนรามอินทรา (แฟชั่นไอส์แลนด์)'
			));
			Location::create(array('location_id' => 581,
			'name' => 'ถนนราษฎร์ยินดี (หาดใหญ่)'
			));
			Location::create(array('location_id' => 582,
			'name' => 'ถนนลาดกระบัง (ตลาด 999)'
			));
			Location::create(array('location_id' => 583,
			'name' => 'ถนนลาดปลาดุก (หมู่บ้านพฤกษา 3)'
			));
			Location::create(array('location_id' => 584,
			'name' => 'ถนนวัดศรีวารีน้อย'
			));
			Location::create(array('location_id' => 585,
			'name' => 'ถนนวิทยุ'
			));
			Location::create(array('location_id' => 586,
			'name' => 'ถนนวิทยุ (All Seasons Place)'
			));
			Location::create(array('location_id' => 587,
			'name' => 'ถนนวุฒากาศ'
			));
			Location::create(array('location_id' => 588,
			'name' => 'ถนนศรีนครินทร์ (กรุงเทพกรีฑา)'
			));
			Location::create(array('location_id' => 589,
			'name' => 'ถนนศรีนครินทร์ (ซอยลาซาล)'
			));
			Location::create(array('location_id' => 590,
			'name' => 'ถนนศรีนครินทร์ (ซีคอนสแควร์)'
			));
			Location::create(array('location_id' => 591,
			'name' => 'ถนนศรีนครินทร์ (อ่อนนุช)'
			));
			Location::create(array('location_id' => 592,
			'name' => 'ถนนศรีนครินทร์ (อุดมสุข)'
			));
			Location::create(array('location_id' => 593,
			'name' => 'ถนนศรีภูวนารถ'
			));
			Location::create(array('location_id' => 594,
			'name' => 'ถนนศรีสมุทร (สมุทรปราการ)'
			));
			Location::create(array('location_id' => 595,
			'name' => 'ถนนศรีสุริยวงศ์ (ราชบุรี)'
			));
			Location::create(array('location_id' => 596,
			'name' => 'ถนนสรงประภา (ดอนเมือง)'
			));
			Location::create(array('location_id' => 597,
			'name' => 'ถนนสรรพาวุธ'
			));
			Location::create(array('location_id' => 598,
			'name' => 'ถนนสวนผัก (ตลาดกรุงนนท์)'
			));
			Location::create(array('location_id' => 599,
			'name' => 'ถนนสะแกงาม (พระราม 2)'
			));
			Location::create(array('location_id' => 600,
			'name' => 'ถนนสาทร'
			));
			Location::create(array('location_id' => 601,
			'name' => 'ถนนสามัคคี (นนทบุรี)'
			));
			Location::create(array('location_id' => 602,
			'name' => 'ถนนสายไหม'
			));
			Location::create(array('location_id' => 603,
			'name' => 'ถนนสิรินธร'
			));
			Location::create(array('location_id' => 604,
			'name' => 'ถนนสีลม (CP TOWER)'
			));
			Location::create(array('location_id' => 605,
			'name' => 'ถนนสุขสวัสดิ์'
			));
			Location::create(array('location_id' => 606,
			'name' => 'ถนนสุขาภิบาล 1 (ท่าเกษตร-บางแค)'
			));
			Location::create(array('location_id' => 607,
			'name' => 'ถนนสุขุมวิท - พัทยากลาง'
			));
			Location::create(array('location_id' => 608,
			'name' => 'ถนนสุขุมวิท (สมุทรปราการ)'
			));
			Location::create(array('location_id' => 609,
			'name' => 'ถนนหน้าเมือง (ขอนแก่น)'
			));
			Location::create(array('location_id' => 610,
			'name' => 'ถนนอัสสัมชัญศรีราชา'
			));
			Location::create(array('location_id' => 611,
			'name' => 'ถนนอิสรภาพ'
			));
			Location::create(array('location_id' => 612,
			'name' => 'ถลาง (ภูเก็ต)'
			));
			Location::create(array('location_id' => 613,
			'name' => 'ท็อปส์ มาร์เก็ตเพลส สีลม'
			));
			Location::create(array('location_id' => 614,
			'name' => 'ท็อปส์ สุขาภิบาล 3'
			));
			Location::create(array('location_id' => 615,
			'name' => 'ทับสะแก (ประจวบคีริขันธ์)'
			));
			Location::create(array('location_id' => 616,
			'name' => 'ท่าเรือ (อยุธยา)'
			));
			Location::create(array('location_id' => 617,
			'name' => 'ท่าเรือพระแท่น'
			));
			Location::create(array('location_id' => 618,
			'name' => 'ท่าแซะ (ชุมพร)'
			));
			Location::create(array('location_id' => 619,
			'name' => 'ท่าแพ'
			));
			Location::create(array('location_id' => 620,
			'name' => 'ท่าโขลง'
			));
			Location::create(array('location_id' => 621,
			'name' => 'ท่าขอนยาง (มหาวิทยาลัยมหาสารคาม)'
			));
			Location::create(array('location_id' => 622,
			'name' => 'ท่าฉลอม'
			));
			Location::create(array('location_id' => 623,
			'name' => 'ท่าชนะ'
			));
			Location::create(array('location_id' => 624,
			'name' => 'ท่าทราย (สมุทรสาคร)'
			));
			Location::create(array('location_id' => 625,
			'name' => 'ทานพอ'
			));
			Location::create(array('location_id' => 626,
			'name' => 'ท่าน้ำนนทบุรี'
			));
			Location::create(array('location_id' => 627,
			'name' => 'ท่าน้ำพรานนก'
			));
			Location::create(array('location_id' => 628,
			'name' => 'ท่าบ่อ (หนองคาย)'
			));
			Location::create(array('location_id' => 629,
			'name' => 'ท่าพระ'
			));
			Location::create(array('location_id' => 630,
			'name' => 'ท่าพระจันทร์'
			));
			Location::create(array('location_id' => 631,
			'name' => 'ท่ามะเขือ (คลองขลุง)'
			));
			Location::create(array('location_id' => 632,
			'name' => 'ท่ายาง (เพชรบุรี)'
			));
			Location::create(array('location_id' => 633,
			'name' => 'ทาวเวอร์ เวสท์ 1'
			));
			Location::create(array('location_id' => 634,
			'name' => 'ทาวเวอร์ เวสท์ 2'
			));
			Location::create(array('location_id' => 635,
			'name' => 'ท่าหลวง (ลพบุรี)'
			));
			Location::create(array('location_id' => 636,
			'name' => 'ท่าอากาศยานสุวรรณภูมิ (อาคารศูนย์ปฏิบัติการการบินไทย)'
			));
			Location::create(array('location_id' => 637,
			'name' => 'ท่าอากาศยานสุวรรณภูมิ 2 E'
			));
			Location::create(array('location_id' => 638,
			'name' => 'ท่าอากาศยานสุวรรณภูมิ 3 M'
			));
			Location::create(array('location_id' => 639,
			'name' => 'ท่าอากาศยานสุวรรณภูมิ 4 W'
			));
			Location::create(array('location_id' => 640,
			'name' => 'ท่าอากาศยานสุวรรณภูมิ 6 W'
			));
			Location::create(array('location_id' => 641,
			'name' => 'ท่าอิฐ (นนทบุรี)'
			));
			Location::create(array('location_id' => 642,
			'name' => 'ทุ่งเสี้ยว (สันป่าตอง)'
			));
			Location::create(array('location_id' => 643,
			'name' => 'ทุ่งโฮ้ง (แพร่)'
			));
			Location::create(array('location_id' => 644,
			'name' => 'ทุ่งใหญ่ (นครศรีธรรมราช)'
			));
			Location::create(array('location_id' => 645,
			'name' => 'ทุ่งยาว (ตรัง)'
			));
			Location::create(array('location_id' => 646,
			'name' => 'ทุ่งลุง (สงขลา)'
			));
			Location::create(array('location_id' => 647,
			'name' => 'ทุ่งสง'
			));
			Location::create(array('location_id' => 648,
			'name' => 'ธัญยะ ช็อปปิ้ง พาร์ค (ศรีนครินทร์)'
			));
			Location::create(array('location_id' => 649,
			'name' => 'ธาตุพนม'
			));
			Location::create(array('location_id' => 650,
			'name' => 'นครไทย'
			));
			Location::create(array('location_id' => 651,
			'name' => 'นครชัยศรี'
			));
			Location::create(array('location_id' => 652,
			'name' => 'นครนายก'
			));
			Location::create(array('location_id' => 653,
			'name' => 'นครปฐม'
			));
			Location::create(array('location_id' => 654,
			'name' => 'นครพนม'
			));
			Location::create(array('location_id' => 655,
			'name' => 'นครราชสีมา'
			));
			Location::create(array('location_id' => 656,
			'name' => 'นครศรีธรรมราช'
			));
			Location::create(array('location_id' => 657,
			'name' => 'นครสวรรค์'
			));
			Location::create(array('location_id' => 658,
			'name' => 'นนทบุรี'
			));
			Location::create(array('location_id' => 659,
			'name' => 'นราธิวาส'
			));
			Location::create(array('location_id' => 660,
			'name' => 'นวมินทร์ ซิตี้ อเวนิว'
			));
			Location::create(array('location_id' => 661,
			'name' => 'นาเกลือ'
			));
			Location::create(array('location_id' => 662,
			'name' => 'นาเฉลียง'
			));
			Location::create(array('location_id' => 663,
			'name' => 'นาก่วม (ลำปาง)'
			));
			Location::create(array('location_id' => 664,
			'name' => 'นางรอง (บุรีรัมย์)'
			));
			Location::create(array('location_id' => 665,
			'name' => 'นาทวี (สงขลา)'
			));
			Location::create(array('location_id' => 666,
			'name' => 'น่าน'
			));
			Location::create(array('location_id' => 667,
			'name' => 'นาหว้า (นครพนม)'
			));
			Location::create(array('location_id' => 668,
			'name' => 'น้ำโสม'
			));
			Location::create(array('location_id' => 669,
			'name' => 'น้ำพอง'
			));
			Location::create(array('location_id' => 670,
			'name' => 'นิคมพัฒนา (ระยอง)'
			));
			Location::create(array('location_id' => 671,
			'name' => 'นิคมอุตสาหกรรม 304 (ปราจีนบุรี)'
			));
			Location::create(array('location_id' => 672,
			'name' => 'นิคมอุตสาหกรรม ไฮเทค'
			));
			Location::create(array('location_id' => 673,
			'name' => 'นิคมอุตสาหกรรมเวลโกรว์'
			));
			Location::create(array('location_id' => 674,
			'name' => 'นิคมอุตสาหกรรมเอส ไอ แอล (สระบุรี)'
			));
			Location::create(array('location_id' => 675,
			'name' => 'นิคมอุตสาหกรรมแหลมฉบัง'
			));
			Location::create(array('location_id' => 676,
			'name' => 'นิคมอุตสาหกรรมโรจนะ'
			));
			Location::create(array('location_id' => 677,
			'name' => 'นิคมอุตสาหกรรมนวนคร (ปทุมธานี)'
			));
			Location::create(array('location_id' => 678,
			'name' => 'นิคมอุตสาหกรรมบางปะอิน'
			));
			Location::create(array('location_id' => 679,
			'name' => 'นิคมอุตสาหกรรมบางปู'
			));
			Location::create(array('location_id' => 680,
			'name' => 'นิคมอุตสาหกรรมบางปู 2'
			));
			Location::create(array('location_id' => 681,
			'name' => 'นิคมอุตสาหกรรมปิ่นทอง'
			));
			Location::create(array('location_id' => 682,
			'name' => 'นิคมอุตสาหกรรมภาคเหนือ (ลำพูน)'
			));
			Location::create(array('location_id' => 683,
			'name' => 'นิคมอุตสาหกรรมราชบุรี'
			));
			Location::create(array('location_id' => 684,
			'name' => 'นิคมอุตสาหกรรมลาดกระบัง'
			));
			Location::create(array('location_id' => 685,
			'name' => 'นิคมอุตสาหกรรมสมุทรสาคร'
			));
			Location::create(array('location_id' => 686,
			'name' => 'นิคมอุตสาหกรรมสหพัฒนพิบูล(ชลบุรี)'
			));
			Location::create(array('location_id' => 687,
			'name' => 'นิคมอุตสาหกรรมอมตะซิตี้ (ระยอง)'
			));
			Location::create(array('location_id' => 688,
			'name' => 'นิคมอุตสาหกรรมอมตะนคร'
			));
			Location::create(array('location_id' => 689,
			'name' => 'นิคมอุตสาหกรรมอมตะนคร 2'
			));
			Location::create(array('location_id' => 690,
			'name' => 'นิคมอุตสาหกรรมอีสเทิร์น ซีบอร์ด (ระยอง)'
			));
			Location::create(array('location_id' => 691,
			'name' => 'บรรทัดทอง'
			));
			Location::create(array('location_id' => 692,
			'name' => 'บรรพตพิสัย'
			));
			Location::create(array('location_id' => 693,
			'name' => 'บ่อทอง (ชลบุรี)'
			));
			Location::create(array('location_id' => 694,
			'name' => 'บ่อวิน (ชลบุรี)'
			));
			Location::create(array('location_id' => 695,
			'name' => 'บ่อสร้าง (เชียงใหม่)'
			));
			Location::create(array('location_id' => 696,
			'name' => 'บัวใหญ่ (นครราชสีมา)'
			));
			Location::create(array('location_id' => 697,
			'name' => 'บัวทองสแควร์ (ถนนบางกรวย-ไทรน้อย)'
			));
			Location::create(array('location_id' => 698,
			'name' => 'บางเขน'
			));
			Location::create(array('location_id' => 699,
			'name' => 'บางเลน (นครปฐม)'
			));
			Location::create(array('location_id' => 700,
			'name' => 'บางแค'
			));
			Location::create(array('location_id' => 701,
			'name' => 'บางแพ (ราชบุรี)'
			));
			Location::create(array('location_id' => 702,
			'name' => 'บางแสน'
			));
			Location::create(array('location_id' => 703,
			'name' => 'บางโคล่'
			));
			Location::create(array('location_id' => 704,
			'name' => 'บางโพ'
			));
			Location::create(array('location_id' => 705,
			'name' => 'บางใหญ่'
			));
			Location::create(array('location_id' => 706,
			'name' => 'บางใหญ่ (วัดคงคา)'
			));
			Location::create(array('location_id' => 707,
			'name' => 'บางกระดี (ปทุมธานี)'
			));
			Location::create(array('location_id' => 708,
			'name' => 'บางกระบือ'
			));
			Location::create(array('location_id' => 709,
			'name' => 'บางกะปิ (สุขุมวิท 45)'
			));
			Location::create(array('location_id' => 710,
			'name' => 'บางขุนนนท์'
			));
			Location::create(array('location_id' => 711,
			'name' => 'บางครุ (พระประแดง)'
			));
			Location::create(array('location_id' => 712,
			'name' => 'บางคล้า'
			));
			Location::create(array('location_id' => 713,
			'name' => 'บางคอแหลม'
			));
			Location::create(array('location_id' => 714,
			'name' => 'บางคูวัด (ปทุมธานี)'
			));
			Location::create(array('location_id' => 715,
			'name' => 'บางจาก'
			));
			Location::create(array('location_id' => 716,
			'name' => 'บางนา'
			));
			Location::create(array('location_id' => 717,
			'name' => 'บางนา-ตราด (บางนาทาวเวอร์)'
			));
			Location::create(array('location_id' => 718,
			'name' => 'บางน้ำเปรี้ยว (ฉะเชิงเทรา)'
			));
			Location::create(array('location_id' => 719,
			'name' => 'บางบ่อ (สมุทรปราการ)'
			));
			Location::create(array('location_id' => 720,
			'name' => 'บางบอน'
			));
			Location::create(array('location_id' => 721,
			'name' => 'บางบัว'
			));
			Location::create(array('location_id' => 722,
			'name' => 'บางบัวทอง'
			));
			Location::create(array('location_id' => 723,
			'name' => 'บางปลาสร้อย (ชลบุรี)'
			));
			Location::create(array('location_id' => 724,
			'name' => 'บางปะกง'
			));
			Location::create(array('location_id' => 725,
			'name' => 'บางปะอิน'
			));
			Location::create(array('location_id' => 726,
			'name' => 'บางปะอิน (อยุธยา)'
			));
			Location::create(array('location_id' => 727,
			'name' => 'บางพระ'
			));
			Location::create(array('location_id' => 728,
			'name' => 'บางพลัด'
			));
			Location::create(array('location_id' => 729,
			'name' => 'บางมด'
			));
			Location::create(array('location_id' => 730,
			'name' => 'บางมูลนาก'
			));
			Location::create(array('location_id' => 731,
			'name' => 'บางระจัน (สิงห์บุรี)'
			));
			Location::create(array('location_id' => 732,
			'name' => 'บางรัก'
			));
			Location::create(array('location_id' => 733,
			'name' => 'บางลำพู'
			));
			Location::create(array('location_id' => 734,
			'name' => 'บางสะพาน'
			));
			Location::create(array('location_id' => 735,
			'name' => 'บ้านเขว้า'
			));
			Location::create(array('location_id' => 736,
			'name' => 'บ้านแพง'
			));
			Location::create(array('location_id' => 737,
			'name' => 'บ้านแม่น้ำ (เกาะสมุย)'
			));
			Location::create(array('location_id' => 738,
			'name' => 'บ้านแหลม (เพชรบุรี)'
			));
			Location::create(array('location_id' => 739,
			'name' => 'บ้านโป่ง (ราชบุรี)'
			));
			Location::create(array('location_id' => 740,
			'name' => 'บ้านโพธิ์ (ฉะเชิงเทรา)'
			));
			Location::create(array('location_id' => 741,
			'name' => 'บ้านไทย - จังโหลน (สงขลา)'
			));
			Location::create(array('location_id' => 742,
			'name' => 'บ้านไผ่'
			));
			Location::create(array('location_id' => 743,
			'name' => 'บ้านค่าย (ชัยภูมิ)'
			));
			Location::create(array('location_id' => 744,
			'name' => 'บ้านฉาง'
			));
			Location::create(array('location_id' => 745,
			'name' => 'บ้านดุง (อุดรธานี)'
			));
			Location::create(array('location_id' => 746,
			'name' => 'บ้านดู่ (เชียงราย)'
			));
			Location::create(array('location_id' => 747,
			'name' => 'บ้านตาขุน (สุราษฏร์ธานี)'
			));
			Location::create(array('location_id' => 748,
			'name' => 'บ้านนา'
			));
			Location::create(array('location_id' => 749,
			'name' => 'บ้านนาสาร (สุราษฎร์ธานี)'
			));
			Location::create(array('location_id' => 750,
			'name' => 'บ้านบึง'
			));
			Location::create(array('location_id' => 751,
			'name' => 'บ้านพรุ (หาดใหญ่)'
			));
			Location::create(array('location_id' => 752,
			'name' => 'บ้านฟ้าปิยรมย์ (ลำลูกกา)'
			));
			Location::create(array('location_id' => 753,
			'name' => 'บ้านสร้าง'
			));
			Location::create(array('location_id' => 754,
			'name' => 'บ้านอำเภอ (สัตหีบ)'
			));
			Location::create(array('location_id' => 755,
			'name' => 'บิ๊กซี (ภูเก็ต)'
			));
			Location::create(array('location_id' => 756,
			'name' => 'บิ๊กซี เกาะสมุย'
			));
			Location::create(array('location_id' => 757,
			'name' => 'บิ๊กซี เคหะร่มเกล้า'
			));
			Location::create(array('location_id' => 758,
			'name' => 'บิ๊กซี เชียงใหม่'
			));
			Location::create(array('location_id' => 759,
			'name' => 'บิ๊กซี เชียงใหม่ 2'
			));
			Location::create(array('location_id' => 760,
			'name' => 'บิ๊กซี เชียงราย'
			));
			Location::create(array('location_id' => 761,
			'name' => 'บิ๊กซี เพชรเกษม 2'
			));
			Location::create(array('location_id' => 762,
			'name' => 'บิ๊กซี เพชรบุรี'
			));
			Location::create(array('location_id' => 763,
			'name' => 'บิ๊กซี เพชรบูรณ์'
			));
			Location::create(array('location_id' => 764,
			'name' => 'บิ๊กซี เลย'
			));
			Location::create(array('location_id' => 765,
			'name' => 'บิ๊กซี เอ็กซ์ตร้า สุขาภิบาล 3'
			));
			Location::create(array('location_id' => 766,
			'name' => 'บิ๊กซี เอ๊กซ์ตร้า หาดใหญ่'
			));
			Location::create(array('location_id' => 767,
			'name' => 'บิ๊กซี แจ้งวัฒนะ'
			));
			Location::create(array('location_id' => 768,
			'name' => 'บิ๊กซี แจ้งวัฒนะ 2'
			));
			Location::create(array('location_id' => 769,
			'name' => 'บิ๊กซี แพร่'
			));
			Location::create(array('location_id' => 770,
			'name' => 'บิ๊กซี กระบี่'
			));
			Location::create(array('location_id' => 771,
			'name' => 'บิ๊กซี กาฬสินธ์'
			));
			Location::create(array('location_id' => 772,
			'name' => 'บิ๊กซี กำแพงเพชร'
			));
			Location::create(array('location_id' => 773,
			'name' => 'บิ๊กซี ขอนแก่น'
			));
			Location::create(array('location_id' => 774,
			'name' => 'บิ๊กซี จันทบุรี'
			));
			Location::create(array('location_id' => 775,
			'name' => 'บิ๊กซี ฉะเชิงเทรา'
			));
			Location::create(array('location_id' => 776,
			'name' => 'บิ๊กซี ชลบุรี'
			));
			Location::create(array('location_id' => 777,
			'name' => 'บิ๊กซี ชัยภูมิ'
			));
			Location::create(array('location_id' => 778,
			'name' => 'บิ๊กซี ชุมพร'
			));
			Location::create(array('location_id' => 779,
			'name' => 'บิ๊กซี ดาวคะนอง'
			));
			Location::create(array('location_id' => 780,
			'name' => 'บิ๊กซี ตรัง'
			));
			Location::create(array('location_id' => 781,
			'name' => 'บิ๊กซี ติวานนท์'
			));
			Location::create(array('location_id' => 782,
			'name' => 'บิ๊กซี นครปฐม'
			));
			Location::create(array('location_id' => 783,
			'name' => 'บิ๊กซี นครราชสีมา'
			));
			Location::create(array('location_id' => 784,
			'name' => 'บิ๊กซี นครศรีธรรมราช'
			));
			Location::create(array('location_id' => 785,
			'name' => 'บิ๊กซี นครสวรรค์'
			));
			Location::create(array('location_id' => 786,
			'name' => 'บิ๊กซี นครสวรรค์ 2'
			));
			Location::create(array('location_id' => 787,
			'name' => 'บิ๊กซี นวนคร'
			));
			Location::create(array('location_id' => 788,
			'name' => 'บิ๊กซี บางใหญ่'
			));
			Location::create(array('location_id' => 789,
			'name' => 'บิ๊กซี บางนา-ตราด กม.3'
			));
			Location::create(array('location_id' => 790,
			'name' => 'บิ๊กซี บางบอน'
			));
			Location::create(array('location_id' => 791,
			'name' => 'บิ๊กซี บางปะกอก'
			));
			Location::create(array('location_id' => 792,
			'name' => 'บิ๊กซี บางพลี'
			));
			Location::create(array('location_id' => 793,
			'name' => 'บิ๊กซี บ้านโป่ง'
			));
			Location::create(array('location_id' => 794,
			'name' => 'บิ๊กซี บุรีรัมย์'
			));
			Location::create(array('location_id' => 795,
			'name' => 'บิ๊กซี ประชาอุทิศ 90'
			));
			Location::create(array('location_id' => 796,
			'name' => 'บิ๊กซี ปราจีนบุรี'
			));
			Location::create(array('location_id' => 797,
			'name' => 'บิ๊กซี พระราม 2'
			));
			Location::create(array('location_id' => 798,
			'name' => 'บิ๊กซี พระราม 2 (กม.7)'
			));
			Location::create(array('location_id' => 799,
			'name' => 'บิ๊กซี พระราม 4'
			));
			Location::create(array('location_id' => 800,
			'name' => 'บิ๊กซี พัทยาใต้'
			));
			Location::create(array('location_id' => 801,
			'name' => 'บิ๊กซี พัทยากลาง'
			));
			Location::create(array('location_id' => 802,
			'name' => 'บิ๊กซี พิษณุโลก'
			));
			Location::create(array('location_id' => 803,
			'name' => 'บิ๊กซี มหาชัย'
			));
			Location::create(array('location_id' => 804,
			'name' => 'บิ๊กซี มหาสารคาม'
			));
			Location::create(array('location_id' => 805,
			'name' => 'บิ๊กซี มุกดาหาร'
			));
			Location::create(array('location_id' => 806,
			'name' => 'บิ๊กซี ยโสธร'
			));
			Location::create(array('location_id' => 807,
			'name' => 'บิ๊กซี ร่มเกล้า'
			));
			Location::create(array('location_id' => 808,
			'name' => 'บิ๊กซี ร้อยเอ็ด'
			));
			Location::create(array('location_id' => 809,
			'name' => 'บิ๊กซี ระยอง'
			));
			Location::create(array('location_id' => 810,
			'name' => 'บิ๊กซี รังสิต'
			));
			Location::create(array('location_id' => 811,
			'name' => 'บิ๊กซี รังสิต 2'
			));
			Location::create(array('location_id' => 812,
			'name' => 'บิ๊กซี รังสิต คลอง 3'
			));
			Location::create(array('location_id' => 813,
			'name' => 'บิ๊กซี รังสิตคลอง 6'
			));
			Location::create(array('location_id' => 814,
			'name' => 'บิ๊กซี รัชดาภิเษก'
			));
			Location::create(array('location_id' => 815,
			'name' => 'บิ๊กซี รัตนาธิเบศร์'
			));
			Location::create(array('location_id' => 816,
			'name' => 'บิ๊กซี รัตนาธิเบศร์ 2'
			));
			Location::create(array('location_id' => 817,
			'name' => 'บิ๊กซี ราชดำริ'
			));
			Location::create(array('location_id' => 818,
			'name' => 'บิ๊กซี ราชบุรี'
			));
			Location::create(array('location_id' => 819,
			'name' => 'บิ๊กซี รามอินทรา'
			));
			Location::create(array('location_id' => 820,
			'name' => 'บิ๊กซี ราษฎร์บูรณะ'
			));
			Location::create(array('location_id' => 821,
			'name' => 'บิ๊กซี ลพบุรี'
			));
			Location::create(array('location_id' => 822,
			'name' => 'บิ๊กซี ลพบุรี 2'
			));
			Location::create(array('location_id' => 823,
			'name' => 'บิ๊กซี ลาดพร้าว 2'
			));
			Location::create(array('location_id' => 824,
			'name' => 'บิ๊กซี ลำปาง'
			));
			Location::create(array('location_id' => 825,
			'name' => 'บิ๊กซี ลำพูน'
			));
			Location::create(array('location_id' => 826,
			'name' => 'บิ๊กซี ลำลูกกา'
			));
			Location::create(array('location_id' => 827,
			'name' => 'บิ๊กซี ลำลูกกา 2 (คลอง 4)'
			));
			Location::create(array('location_id' => 828,
			'name' => 'บิ๊กซี วารินชำราบ'
			));
			Location::create(array('location_id' => 829,
			'name' => 'บิ๊กซี ศรีนครินทร์'
			));
			Location::create(array('location_id' => 830,
			'name' => 'บิ๊กซี ศรีสะเกษ'
			));
			Location::create(array('location_id' => 831,
			'name' => 'บิ๊กซี สมุทรปราการ'
			));
			Location::create(array('location_id' => 832,
			'name' => 'บิ๊กซี สมุทรสงคราม'
			));
			Location::create(array('location_id' => 833,
			'name' => 'บิ๊กซี สระแก้ว'
			));
			Location::create(array('location_id' => 834,
			'name' => 'บิ๊กซี สวนหลวง'
			));
			Location::create(array('location_id' => 835,
			'name' => 'บิ๊กซี สะพานใหม่ดอนเมือง'
			));
			Location::create(array('location_id' => 836,
			'name' => 'บิ๊กซี สะพานควาย'
			));
			Location::create(array('location_id' => 837,
			'name' => 'บิ๊กซี สายไหม'
			));
			Location::create(array('location_id' => 838,
			'name' => 'บิ๊กซี สำโรง 2'
			));
			Location::create(array('location_id' => 839,
			'name' => 'บิ๊กซี สุโขทัย'
			));
			Location::create(array('location_id' => 840,
			'name' => 'บิ๊กซี สุขสวัสดิ์'
			));
			Location::create(array('location_id' => 841,
			'name' => 'บิ๊กซี สุขาภิบาล 3'
			));
			Location::create(array('location_id' => 842,
			'name' => 'บิ๊กซี สุขาภิบาล 5'
			));
			Location::create(array('location_id' => 843,
			'name' => 'บิ๊กซี สุพรรณบุรี'
			));
			Location::create(array('location_id' => 844,
			'name' => 'บิ๊กซี สุราษฎร์ธานี'
			));
			Location::create(array('location_id' => 845,
			'name' => 'บิ๊กซี สุวินทวงศ์'
			));
			Location::create(array('location_id' => 846,
			'name' => 'บิ๊กซี หทัยราษฎร์'
			));
			Location::create(array('location_id' => 847,
			'name' => 'บิ๊กซี หนองจอก'
			));
			Location::create(array('location_id' => 848,
			'name' => 'บิ๊กซี หัวหมาก'
			));
			Location::create(array('location_id' => 849,
			'name' => 'บิ๊กซี หางดง'
			));
			Location::create(array('location_id' => 850,
			'name' => 'บิ๊กซี หางดง 2'
			));
			Location::create(array('location_id' => 851,
			'name' => 'บิ๊กซี หาดใหญ่'
			));
			Location::create(array('location_id' => 852,
			'name' => 'บิ๊กซี อยุธยา'
			));
			Location::create(array('location_id' => 853,
			'name' => 'บิ๊กซี อ่อนนุช'
			));
			Location::create(array('location_id' => 854,
			'name' => 'บิ๊กซี อ้อมใหญ่'
			));
			Location::create(array('location_id' => 855,
			'name' => 'บิ๊กซี อ่างทอง'
			));
			Location::create(array('location_id' => 856,
			'name' => 'บิ๊กซี อำนาจเจริญ'
			));
			Location::create(array('location_id' => 857,
			'name' => 'บิ๊กซี อุดรธานี'
			));
			Location::create(array('location_id' => 858,
			'name' => 'บิ๊กซี อุบลราชธานี'
			));
			Location::create(array('location_id' => 859,
			'name' => 'บึงกาฬ'
			));
			Location::create(array('location_id' => 860,
			'name' => 'บึงบูรพ์ (ศรีสะเกษ)'
			));
			Location::create(array('location_id' => 861,
			'name' => 'บึงสามพัน (เพชรบูรณ์)'
			));
			Location::create(array('location_id' => 862,
			'name' => 'บื๊กซี ซูเปอร์เซ็นเตอร์'
			));
			Location::create(array('location_id' => 863,
			'name' => 'บุรีรัมย์'
			));
			Location::create(array('location_id' => 864,
			'name' => 'ปทุมธานี'
			));
			Location::create(array('location_id' => 865,
			'name' => 'ประโคนชัย'
			));
			Location::create(array('location_id' => 866,
			'name' => 'ประจวบคีรีขันธ์'
			));
			Location::create(array('location_id' => 867,
			'name' => 'ประจันตคาม (ปราจีนบุรี)'
			));
			Location::create(array('location_id' => 868,
			'name' => 'ประชาชื่น'
			));
			Location::create(array('location_id' => 869,
			'name' => 'ประชานิเวศน์ 1'
			));
			Location::create(array('location_id' => 870,
			'name' => 'ประตูเชียงใหม่'
			));
			Location::create(array('location_id' => 871,
			'name' => 'ประตูชัย (ลำปาง)'
			));
			Location::create(array('location_id' => 872,
			'name' => 'ประตูช้างเผือก'
			));
			Location::create(array('location_id' => 873,
			'name' => 'ประตูท่าแพ'
			));
			Location::create(array('location_id' => 874,
			'name' => 'ประตูน้ำพระอินทร์'
			));
			Location::create(array('location_id' => 875,
			'name' => 'ปราจีนบุรี'
			));
			Location::create(array('location_id' => 876,
			'name' => 'ปราณบุรี (ประจวบคีรีขันธ์)'
			));
			Location::create(array('location_id' => 877,
			'name' => 'ปราสาท (สุรินทร์)'
			));
			Location::create(array('location_id' => 878,
			'name' => 'ปักธงชัย'
			));
			Location::create(array('location_id' => 879,
			'name' => 'ปัตตานี'
			));
			Location::create(array('location_id' => 880,
			'name' => 'ปัว (น่าน)'
			));
			Location::create(array('location_id' => 881,
			'name' => 'ปากเกร็ด'
			));
			Location::create(array('location_id' => 882,
			'name' => 'ปากคลองตลาด 1'
			));
			Location::create(array('location_id' => 883,
			'name' => 'ปากช่อง (นครราชสีมา)'
			));
			Location::create(array('location_id' => 884,
			'name' => 'ปากท่อ (ราชบุรี)'
			));
			Location::create(array('location_id' => 885,
			'name' => 'ปากน้ำ (ชุมพร)'
			));
			Location::create(array('location_id' => 886,
			'name' => 'ปากน้ำ หลังสวน'
			));
			Location::create(array('location_id' => 887,
			'name' => 'ปากบาง (พรหมบุรี)'
			));
			Location::create(array('location_id' => 888,
			'name' => 'ปากพนัง'
			));
			Location::create(array('location_id' => 889,
			'name' => 'ปาดังเบซาร์'
			));
			Location::create(array('location_id' => 890,
			'name' => 'ป่าตอง (ภูเก็ต)'
			));
			Location::create(array('location_id' => 891,
			'name' => 'ปาร์คพลาซ่า (พัฒนาการ 20)'
			));
			Location::create(array('location_id' => 892,
			'name' => 'ปิ่นเกล้า'
			));
			Location::create(array('location_id' => 893,
			'name' => 'ฝาง'
			));
			Location::create(array('location_id' => 894,
			'name' => 'พนมสารคาม'
			));
			Location::create(array('location_id' => 895,
			'name' => 'พนัสนิคม'
			));
			Location::create(array('location_id' => 896,
			'name' => 'พยัคฆภูมิพิสัย (มหาสารคาม)'
			));
			Location::create(array('location_id' => 897,
			'name' => 'พรหมคีรี (นครศรีธรรมราช)'
			));
			Location::create(array('location_id' => 898,
			'name' => 'พรอมเมนาดา'
			));
			Location::create(array('location_id' => 899,
			'name' => 'พระแสง (สุราษฎร์ธานี)'
			));
			Location::create(array('location_id' => 900,
			'name' => 'พระบรมมหาราชวัง'
			));
			Location::create(array('location_id' => 901,
			'name' => 'พระประแดง'
			));
			Location::create(array('location_id' => 902,
			'name' => 'พระประโทน (นครปฐม)'
			));
			Location::create(array('location_id' => 903,
			'name' => 'พระพุทธบาท (สระบุรี)'
			));
			Location::create(array('location_id' => 904,
			'name' => 'พระราม 2 (กม. 7)'
			));
			Location::create(array('location_id' => 905,
			'name' => 'พระราม 4'
			));
			Location::create(array('location_id' => 906,
			'name' => 'พระราม 4 (อาคารสิรินรัตน์)'
			));
			Location::create(array('location_id' => 907,
			'name' => 'พระราม 9'
			));
			Location::create(array('location_id' => 908,
			'name' => 'พลับพลาไชย'
			));
			Location::create(array('location_id' => 909,
			'name' => 'พลิ้ว (จันทบุรี)'
			));
			Location::create(array('location_id' => 910,
			'name' => 'พหลโยธิน'
			));
			Location::create(array('location_id' => 911,
			'name' => 'พหลโยธิน ซอย 52'
			));
			Location::create(array('location_id' => 912,
			'name' => 'พอร์โต้ ชิโน่'
			));
			Location::create(array('location_id' => 913,
			'name' => 'พะเยา'
			));
			Location::create(array('location_id' => 914,
			'name' => 'พังโคน (สกลนคร)'
			));
			Location::create(array('location_id' => 915,
			'name' => 'พังงา'
			));
			Location::create(array('location_id' => 916,
			'name' => 'พัฒนานิคม (ลพบุรี)'
			));
			Location::create(array('location_id' => 917,
			'name' => 'พัทยา'
			));
			Location::create(array('location_id' => 918,
			'name' => 'พัทยาสาย 2'
			));
			Location::create(array('location_id' => 919,
			'name' => 'พัทลุง'
			));
			Location::create(array('location_id' => 920,
			'name' => 'พันธ์ทิพย์ พลาซ่า งามวงศ์วาน'
			));
			Location::create(array('location_id' => 921,
			'name' => 'พาน (เชียงราย)'
			));
			Location::create(array('location_id' => 922,
			'name' => 'พานทอง'
			));
			Location::create(array('location_id' => 923,
			'name' => 'พาราไดซ์ พาร์ค'
			));
			Location::create(array('location_id' => 924,
			'name' => 'พิจิตร'
			));
			Location::create(array('location_id' => 925,
			'name' => 'พิมาย (นครราชสีมา)'
			));
			Location::create(array('location_id' => 926,
			'name' => 'พิษณุโลก'
			));
			Location::create(array('location_id' => 927,
			'name' => 'พุนพิน (สุราษฎร์ธานี)'
			));
			Location::create(array('location_id' => 928,
			'name' => 'ฟรายเดย์ (อุตรดิตถ์)'
			));
			Location::create(array('location_id' => 929,
			'name' => 'ฟิวเจอร์ พาร์ค รังสิต'
			));
			Location::create(array('location_id' => 930,
			'name' => 'ฟิวเจอร์ พาร์ค รังสิต 2'
			));
			Location::create(array('location_id' => 931,
			'name' => 'ภาชี'
			));
			Location::create(array('location_id' => 932,
			'name' => 'ภูเก็ต'
			));
			Location::create(array('location_id' => 933,
			'name' => 'ภูเก็ต โบ๊ทลากูน'
			));
			Location::create(array('location_id' => 934,
			'name' => 'ภูเขียว (ชัยภูมิ)'
			));
			Location::create(array('location_id' => 935,
			'name' => 'ภูเรือ (เลย)'
			));
			Location::create(array('location_id' => 936,
			'name' => 'มหาชนะชัย'
			));
			Location::create(array('location_id' => 937,
			'name' => 'มหาชัยเมืองใหม่ (สมุทรสาคร)'
			));
			Location::create(array('location_id' => 938,
			'name' => 'มหาวิทยาลัยเกษตรศาสตร์'
			));
			Location::create(array('location_id' => 939,
			'name' => 'มหาวิทยาลัยเกษตรศาสตร์ (บางเขน)'
			));
			Location::create(array('location_id' => 940,
			'name' => 'มหาวิทยาลัยเชียงใหม่'
			));
			Location::create(array('location_id' => 941,
			'name' => 'มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี'
			));
			Location::create(array('location_id' => 942,
			'name' => 'มหาวิทยาลัยเทคโนสุรนารี'
			));
			Location::create(array('location_id' => 943,
			'name' => 'มหาวิทยาลัยขอนแก่น'
			));
			Location::create(array('location_id' => 944,
			'name' => 'มหาวิทยาลัยทักษิณ (พัทลุง)'
			));
			Location::create(array('location_id' => 945,
			'name' => 'มหาวิทยาลัยธุรกิจบัณฑิตย์'
			));
			Location::create(array('location_id' => 946,
			'name' => 'มหาวิทยาลัยพะเยา'
			));
			Location::create(array('location_id' => 947,
			'name' => 'มหาวิทยาลัยพายัพ (เชียงใหม่)'
			));
			Location::create(array('location_id' => 948,
			'name' => 'มหาวิทยาลัยมหิดล'
			));
			Location::create(array('location_id' => 949,
			'name' => 'มหาวิทยาลัยรังสิต'
			));
			Location::create(array('location_id' => 950,
			'name' => 'มหาวิทยาลัยราชภัฏ บ้านสมเด็จเจ้าพระยา'
			));
			Location::create(array('location_id' => 951,
			'name' => 'มหาวิทยาลัยราชภัฏเชียงใหม่'
			));
			Location::create(array('location_id' => 952,
			'name' => 'มหาวิทยาลัยรามคำแหง (หัวหมาก)'
			));
			Location::create(array('location_id' => 953,
			'name' => 'มหาวิทยาลัยศรีนครินทรวิโรฒ องครักษ์'
			));
			Location::create(array('location_id' => 954,
			'name' => 'มหาวิทยาลัยสงขลานครินทร์'
			));
			Location::create(array('location_id' => 955,
			'name' => 'มหาวิทยาลัยสงขลานครินทร์ (ภูเก็ต)'
			));
			Location::create(array('location_id' => 956,
			'name' => 'มหาวิทยาลัยอุบลราชธานี'
			));
			Location::create(array('location_id' => 957,
			'name' => 'มหาสารคาม'
			));
			Location::create(array('location_id' => 958,
			'name' => 'มาบตาพุด'
			));
			Location::create(array('location_id' => 959,
			'name' => 'มาบอำมฤต (ชุมพร)'
			));
			Location::create(array('location_id' => 960,
			'name' => 'มาบุญครอง'
			));
			Location::create(array('location_id' => 961,
			'name' => 'มาบุญครอง 2'
			));
			Location::create(array('location_id' => 962,
			'name' => 'มีโชค (เชียงใหม่)'
			));
			Location::create(array('location_id' => 963,
			'name' => 'มีนบุรี'
			));
			Location::create(array('location_id' => 964,
			'name' => 'มุกดาหาร'
			));
			Location::create(array('location_id' => 965,
			'name' => 'ยโสธร'
			));
			Location::create(array('location_id' => 966,
			'name' => 'ยะลา'
			));
			Location::create(array('location_id' => 967,
			'name' => 'ยางตลาด (กาฬสินธุ์)'
			));
			Location::create(array('location_id' => 968,
			'name' => 'ย่านตาขาว (ตรัง)'
			));
			Location::create(array('location_id' => 969,
			'name' => 'รองเมือง'
			));
			Location::create(array('location_id' => 970,
			'name' => 'ร่อนพิบูลย์ (นครศรีธรรมราช)'
			));
			Location::create(array('location_id' => 971,
			'name' => 'ร้อยเอ็ด'
			));
			Location::create(array('location_id' => 972,
			'name' => 'รอยัลพารากอน'
			));
			Location::create(array('location_id' => 973,
			'name' => 'ระนอง'
			));
			Location::create(array('location_id' => 974,
			'name' => 'ระยอง'
			));
			Location::create(array('location_id' => 975,
			'name' => 'รังสิต (ปทุมธานี)'
			));
			Location::create(array('location_id' => 976,
			'name' => 'รัชโยธิน'
			));
			Location::create(array('location_id' => 977,
			'name' => 'รัตนบุรี (สุรินทร์)'
			));
			Location::create(array('location_id' => 978,
			'name' => 'รัตภูมิ (สงขลา)'
			));
			Location::create(array('location_id' => 979,
			'name' => 'รัษฎา (ตรัง)'
			));
			Location::create(array('location_id' => 980,
			'name' => 'ราไวย์ (ภูเก็ต)'
			));
			Location::create(array('location_id' => 981,
			'name' => 'ราชดำเนินกลาง'
			));
			Location::create(array('location_id' => 982,
			'name' => 'ราชบุรี'
			));
			Location::create(array('location_id' => 983,
			'name' => 'ราชวงศ์'
			));
			Location::create(array('location_id' => 984,
			'name' => 'ราชวัตร'
			));
			Location::create(array('location_id' => 985,
			'name' => 'รามคำแหง 2'
			));
			Location::create(array('location_id' => 986,
			'name' => 'รามอินทรา กม. 4.5'
			));
			Location::create(array('location_id' => 987,
			'name' => 'รามอินทรา กม.10'
			));
			Location::create(array('location_id' => 988,
			'name' => 'รามาธิบดี'
			));
			Location::create(array('location_id' => 989,
			'name' => 'ลพบุรี'
			));
			Location::create(array('location_id' => 990,
			'name' => 'ละแม'
			));
			Location::create(array('location_id' => 991,
			'name' => 'ละงู (สตูล)'
			));
			Location::create(array('location_id' => 992,
			'name' => 'ลาดกระบัง'
			));
			Location::create(array('location_id' => 993,
			'name' => 'ลาดพร้าว ซอย 10'
			));
			Location::create(array('location_id' => 994,
			'name' => 'ลาดพร้าว ซอย 111'
			));
			Location::create(array('location_id' => 995,
			'name' => 'ลาดพร้าว ซอย 59'
			));
			Location::create(array('location_id' => 996,
			'name' => 'ลาดพร้าว ซอย 71'
			));
			Location::create(array('location_id' => 997,
			'name' => 'ลาดยาว (นครสวรรค์)'
			));
			Location::create(array('location_id' => 998,
			'name' => 'ลาดหญ้า'
			));
			Location::create(array('location_id' => 999,
			'name' => 'ลาดหลุมแก้ว'
			));
			Location::create(array('location_id' => 1000,
			'name' => 'ลำทับ (กระบี่)'
			));
			Location::create(array('location_id' => 1001,
			'name' => 'ลำนารายณ์'
			));
			Location::create(array('location_id' => 1002,
			'name' => 'ลำปลายมาศ(บุรีรัมย์)'
			));
			Location::create(array('location_id' => 1003,
			'name' => 'ลำปาง'
			));
			Location::create(array('location_id' => 1004,
			'name' => 'ลำพูน (ป่าเห็ว)'
			));
			Location::create(array('location_id' => 1005,
			'name' => 'ลำลูกกา'
			));
			Location::create(array('location_id' => 1006,
			'name' => 'ลุมพินี'
			));
			Location::create(array('location_id' => 1007,
			'name' => 'ลูกแก'
			));
			Location::create(array('location_id' => 1008,
			'name' => 'วงเวียน 22 กรกฎา'
			));
			Location::create(array('location_id' => 1009,
			'name' => 'วงเวียนโอเดี้ยน'
			));
			Location::create(array('location_id' => 1010,
			'name' => 'วงเวียนสระแก้ว (ลพบุรี)'
			));
			Location::create(array('location_id' => 1011,
			'name' => 'วงแหวน เซ็นเตอร์ (ถนนกาญจนาภิเษก)'
			));
			Location::create(array('location_id' => 1012,
			'name' => 'วงศ์อำมาตย์ (นาเกลือ ซอย 18)'
			));
			Location::create(array('location_id' => 1013,
			'name' => 'วังน้อย'
			));
			Location::create(array('location_id' => 1014,
			'name' => 'วังน้ำเย็น (สระแก้ว)'
			));
			Location::create(array('location_id' => 1015,
			'name' => 'วังม่วง (สระบุรี)'
			));
			Location::create(array('location_id' => 1016,
			'name' => 'วังสะพุง'
			));
			Location::create(array('location_id' => 1017,
			'name' => 'วัชรพล(รามอินทรา)'
			));
			Location::create(array('location_id' => 1018,
			'name' => 'วัดไร่ขิง (สามพราน)'
			));
			Location::create(array('location_id' => 1019,
			'name' => 'วัดศรีประวัติ (นนทบุรี)'
			));
			Location::create(array('location_id' => 1020,
			'name' => 'วัดสิงห์'
			));
			Location::create(array('location_id' => 1021,
			'name' => 'วาปีปทุม (มหาสารคาม)'
			));
			Location::create(array('location_id' => 1022,
			'name' => 'วารินชำราบ'
			));
			Location::create(array('location_id' => 1023,
			'name' => 'วิภาวดีรังสิต (จักรพงษภูวนารถ)'
			));
			Location::create(array('location_id' => 1024,
			'name' => 'วิภาวดีรังสิต (หมู่บ้านธนินทร)'
			));
			Location::create(array('location_id' => 1025,
			'name' => 'วิสุทธิกษัตริย์'
			));
			Location::create(array('location_id' => 1026,
			'name' => 'วิหารแดง'
			));
			Location::create(array('location_id' => 1027,
			'name' => 'ศรีเทพ'
			));
			Location::create(array('location_id' => 1028,
			'name' => 'ศรีนครพิงค์'
			));
			Location::create(array('location_id' => 1029,
			'name' => 'ศรีบุญเรือง (หนองบัวลำภู)'
			));
			Location::create(array('location_id' => 1030,
			'name' => 'ศรีประจันต์'
			));
			Location::create(array('location_id' => 1031,
			'name' => 'ศรีมหาโพธิ'
			));
			Location::create(array('location_id' => 1032,
			'name' => 'ศรีราชา'
			));
			Location::create(array('location_id' => 1033,
			'name' => 'ศรีสะเกษ'
			));
			Location::create(array('location_id' => 1034,
			'name' => 'ศาลายา'
			));
			Location::create(array('location_id' => 1035,
			'name' => 'ศิริราช'
			));
			Location::create(array('location_id' => 1036,
			'name' => 'ศุภาลัย แกรนด์ ทาวเวอร์ (พระราม 3)'
			));
			Location::create(array('location_id' => 1037,
			'name' => 'ศูนย์เอนเนอร์ยี่คอมเพล็กซ์'
			));
			Location::create(array('location_id' => 1038,
			'name' => 'ศูนย์แจ้งวัฒนะ'
			));
			Location::create(array('location_id' => 1039,
			'name' => 'ศูนย์การแพทย์กาญจนาภิเษก'
			));
			Location::create(array('location_id' => 1040,
			'name' => 'ศูนย์การแพทย์สมเด็จพระเทพรัตน์ (รพ.รามาธิบดี)'
			));
			Location::create(array('location_id' => 1041,
			'name' => 'ศูนย์การค้า เอ็น อาร์ คอมเพล็คซ์ (บ้านผือ)'
			));
			Location::create(array('location_id' => 1042,
			'name' => 'ศูนย์การค้าเกตเวย์'
			));
			Location::create(array('location_id' => 1043,
			'name' => 'ศูนย์การค้าเดอะพาซิโอ (ลาดกระบัง)'
			));
			Location::create(array('location_id' => 1044,
			'name' => 'ศูนย์การค้าเดอะพาซิโอ ทาวน์ (สุขาภิบาล3)'
			));
			Location::create(array('location_id' => 1045,
			'name' => 'ศูนย์การค้าสีลม คอมเพล็กซ์'
			));
			Location::create(array('location_id' => 1046,
			'name' => 'ศูนย์คอมเพล็กซ์ มหาวิทยาลัยขอนแก่น'
			));
			Location::create(array('location_id' => 1047,
			'name' => 'ศูนย์ราชการเฉลิมพระเกียรติ แจ้งวัฒนะ (อาคาร A)'
			));
			Location::create(array('location_id' => 1048,
			'name' => 'ศูนย์ราชการเฉลิมพระเกียรติ แจ้งวัฒนะ (อาคาร B)'
			));
			Location::create(array('location_id' => 1049,
			'name' => 'สกลนคร'
			));
			Location::create(array('location_id' => 1050,
			'name' => 'สงขลา'
			));
			Location::create(array('location_id' => 1051,
			'name' => 'สงขลานครินทร์ (ปัตตานี)'
			));
			Location::create(array('location_id' => 1052,
			'name' => 'สตึก (บุรีรัมย์)'
			));
			Location::create(array('location_id' => 1053,
			'name' => 'สตูล'
			));
			Location::create(array('location_id' => 1054,
			'name' => 'สถาบัน เอไอที'
			));
			Location::create(array('location_id' => 1055,
			'name' => 'สถาบันบัณฑิตศึกษาจุฬาภรณ์'
			));
			Location::create(array('location_id' => 1056,
			'name' => 'สนามบินน้ำ'
			));
			Location::create(array('location_id' => 1057,
			'name' => 'สบปราบ'
			));
			Location::create(array('location_id' => 1058,
			'name' => 'สภากาชาดไทย'
			));
			Location::create(array('location_id' => 1059,
			'name' => 'สมเด็จ (กาฬสินธุ์)'
			));
			Location::create(array('location_id' => 1060,
			'name' => 'สมุทรปราการ'
			));
			Location::create(array('location_id' => 1061,
			'name' => 'สมุทรสงคราม'
			));
			Location::create(array('location_id' => 1062,
			'name' => 'สมุทรสาคร'
			));
			Location::create(array('location_id' => 1063,
			'name' => 'สยามพารากอน'
			));
			Location::create(array('location_id' => 1064,
			'name' => 'สยามสแควร์'
			));
			Location::create(array('location_id' => 1065,
			'name' => 'สระแก้ว'
			));
			Location::create(array('location_id' => 1066,
			'name' => 'สระบุรี'
			));
			Location::create(array('location_id' => 1067,
			'name' => 'สลกบาตร (กำแพงเพชร)'
			));
			Location::create(array('location_id' => 1068,
			'name' => 'สวนจตุจักร'
			));
			Location::create(array('location_id' => 1069,
			'name' => 'สวนจิตรลดา'
			));
			Location::create(array('location_id' => 1070,
			'name' => 'สวรรคโลก'
			));
			Location::create(array('location_id' => 1071,
			'name' => 'สว่างแดนดิน(สกลนคร)'
			));
			Location::create(array('location_id' => 1072,
			'name' => 'สหัสขันธ์ (กาฬสินธุ์)'
			));
			Location::create(array('location_id' => 1073,
			'name' => 'สองพี่น้อง'
			));
			Location::create(array('location_id' => 1074,
			'name' => 'สอยดาว (จันทบุรี)'
			));
			Location::create(array('location_id' => 1075,
			'name' => 'สะเดา (สงขลา)'
			));
			Location::create(array('location_id' => 1076,
			'name' => 'สะพานเดชาติวงศ์ (นครสวรรค์)'
			));
			Location::create(array('location_id' => 1077,
			'name' => 'สะพานเหลือง'
			));
			Location::create(array('location_id' => 1078,
			'name' => 'สะพานใหม่ดอนเมือง'
			));
			Location::create(array('location_id' => 1079,
			'name' => 'สะพานปลา (ระนอง)'
			));
			Location::create(array('location_id' => 1080,
			'name' => 'สะพานพระนั่งเกล้า'
			));
			Location::create(array('location_id' => 1081,
			'name' => 'สะพานพระพุทธเลิศหล้า (สมุทรสงคราม)'
			));
			Location::create(array('location_id' => 1082,
			'name' => 'สังขละบุรี'
			));
			Location::create(array('location_id' => 1083,
			'name' => 'สังขะ (สุรินทร์)'
			));
			Location::create(array('location_id' => 1084,
			'name' => 'สัตหีบ'
			));
			Location::create(array('location_id' => 1085,
			'name' => 'สันกำแพง (เชียงใหม่)'
			));
			Location::create(array('location_id' => 1086,
			'name' => 'สันป่าตอง (เชียงใหม่)'
			));
			Location::create(array('location_id' => 1087,
			'name' => 'สาขาเทสโก้ โลตัส นครสวรรค์'
			));
			Location::create(array('location_id' => 1088,
			'name' => 'สาธุประดิษฐ์'
			));
			Location::create(array('location_id' => 1089,
			'name' => 'สามเสน'
			));
			Location::create(array('location_id' => 1090,
			'name' => 'สามแยกไฟฉาย'
			));
			Location::create(array('location_id' => 1091,
			'name' => 'สามแยกบางบอน'
			));
			Location::create(array('location_id' => 1092,
			'name' => 'สามแยกสำโรง (สงขลา)'
			));
			Location::create(array('location_id' => 1093,
			'name' => 'สามแยกหมี (ตรัง)'
			));
			Location::create(array('location_id' => 1094,
			'name' => 'สามโคก'
			));
			Location::create(array('location_id' => 1095,
			'name' => 'สามกอง (ภูเก็ต)'
			));
			Location::create(array('location_id' => 1096,
			'name' => 'สามชุก (สุพรรณบุรี)'
			));
			Location::create(array('location_id' => 1097,
			'name' => 'สามพราน'
			));
			Location::create(array('location_id' => 1098,
			'name' => 'สามร้อยยอด (ประจวบคีรีขันธ์)'
			));
			Location::create(array('location_id' => 1099,
			'name' => 'สำเพ็ง'
			));
			Location::create(array('location_id' => 1100,
			'name' => 'สำโรง'
			));
			Location::create(array('location_id' => 1101,
			'name' => 'สำนักพระราชวัง (สนามเสือป่า)'
			));
			Location::create(array('location_id' => 1102,
			'name' => 'สำนักอธิการบดี มหาวิทยาลัยขอนแก่น'
			));
			Location::create(array('location_id' => 1103,
			'name' => 'สิงห์บุรี'
			));
			Location::create(array('location_id' => 1104,
			'name' => 'สิชล'
			));
			Location::create(array('location_id' => 1105,
			'name' => 'สิริบรรณช้อปปิ้งเซ็นเตอร์ (ตรัง)'
			));
			Location::create(array('location_id' => 1106,
			'name' => 'สี่แยกเกษตร'
			));
			Location::create(array('location_id' => 1107,
			'name' => 'สี่แยกแม่กรณ์ (เชียงราย)'
			));
			Location::create(array('location_id' => 1108,
			'name' => 'สี่แยกแสงเพชร (สุราษฎร์ธานี)'
			));
			Location::create(array('location_id' => 1109,
			'name' => 'สี่แยกกะทู้ (ภูเก็ต)'
			));
			Location::create(array('location_id' => 1110,
			'name' => 'สี่แยกทศกัณฐ์'
			));
			Location::create(array('location_id' => 1111,
			'name' => 'สี่แยกท่าเรือ (ภูเก็ต)'
			));
			Location::create(array('location_id' => 1112,
			'name' => 'สี่แยกมะลิวัลย์ (ขอนแก่น)'
			));
			Location::create(array('location_id' => 1113,
			'name' => 'สี่แยกศรีวรา'
			));
			Location::create(array('location_id' => 1114,
			'name' => 'สี่แยกสนามบินเชียงใหม่'
			));
			Location::create(array('location_id' => 1115,
			'name' => 'สี่แยกสันกำแพง (หนองป่าครั่ง)'
			));
			Location::create(array('location_id' => 1116,
			'name' => 'สี่แยกหนองหอย (เชียงใหม่)'
			));
			Location::create(array('location_id' => 1117,
			'name' => 'สี่แยกหัวถนน (นครศรีธรรมราช)'
			));
			Location::create(array('location_id' => 1118,
			'name' => 'สี่กั๊กเสาชิงช้า'
			));
			Location::create(array('location_id' => 1119,
			'name' => 'สีคิ้ว'
			));
			Location::create(array('location_id' => 1120,
			'name' => 'สี่มุมเมือง (หมู่บ้านสีวลี)'
			));
			Location::create(array('location_id' => 1121,
			'name' => 'สีลม'
			));
			Location::create(array('location_id' => 1122,
			'name' => 'สุโขทัย'
			));
			Location::create(array('location_id' => 1123,
			'name' => 'สุไหงโก-ลก'
			));
			Location::create(array('location_id' => 1124,
			'name' => 'สุขุมวิท ซอย 101/1'
			));
			Location::create(array('location_id' => 1125,
			'name' => 'สุขุมวิท ซอย 3/1'
			));
			Location::create(array('location_id' => 1126,
			'name' => 'สุขุมวิท ซอย 71'
			));
			Location::create(array('location_id' => 1127,
			'name' => 'สุทธิสาร'
			));
			Location::create(array('location_id' => 1128,
			'name' => 'สุนีย์ทาวเวอร์ (อุบลราชธานี)'
			));
			Location::create(array('location_id' => 1129,
			'name' => 'สุพรรณบุรี'
			));
			Location::create(array('location_id' => 1130,
			'name' => 'สุพรีม คอมเพล็กซ์'
			));
			Location::create(array('location_id' => 1131,
			'name' => 'สุรวงศ์ 2'
			));
			Location::create(array('location_id' => 1132,
			'name' => 'สุรวงศ์ 3'
			));
			Location::create(array('location_id' => 1133,
			'name' => 'สุรวงษ์'
			));
			Location::create(array('location_id' => 1134,
			'name' => 'สุราษฎร์ธานี'
			));
			Location::create(array('location_id' => 1135,
			'name' => 'สุรินทร์'
			));
			Location::create(array('location_id' => 1136,
			'name' => 'สุวรรณภูมิ'
			));
			Location::create(array('location_id' => 1137,
			'name' => 'หนองเสือ'
			));
			Location::create(array('location_id' => 1138,
			'name' => 'หนองแค'
			));
			Location::create(array('location_id' => 1139,
			'name' => 'หนองคาย'
			));
			Location::create(array('location_id' => 1140,
			'name' => 'หนองบัวแดง (ชัยภูมิ)'
			));
			Location::create(array('location_id' => 1141,
			'name' => 'หนองบัวลำภู'
			));
			Location::create(array('location_id' => 1142,
			'name' => 'หนองบุญมาก (นครราชสีมา)'
			));
			Location::create(array('location_id' => 1143,
			'name' => 'หนองหิน (ภูกระดึง)'
			));
			Location::create(array('location_id' => 1144,
			'name' => 'หมู่บ้านดีเค (บางบอน)'
			));
			Location::create(array('location_id' => 1145,
			'name' => 'หมู่บ้านนักกีฬาแหลมทอง (กรุงเทพกรีฑา)'
			));
			Location::create(array('location_id' => 1146,
			'name' => 'หล่มสัก'
			));
			Location::create(array('location_id' => 1147,
			'name' => 'หลักสี่'
			));
			Location::create(array('location_id' => 1148,
			'name' => 'หลักห้า'
			));
			Location::create(array('location_id' => 1149,
			'name' => 'หลังสวน (ชุมพร)'
			));
			Location::create(array('location_id' => 1150,
			'name' => 'ห้วยแถลง (นครราชสีมา)'
			));
			Location::create(array('location_id' => 1151,
			'name' => 'ห้วยยอด (ตรัง)'
			));
			Location::create(array('location_id' => 1152,
			'name' => 'หันคา (ชัยนาท)'
			));
			Location::create(array('location_id' => 1153,
			'name' => 'หัวเม็ด'
			));
			Location::create(array('location_id' => 1154,
			'name' => 'หัวไทร'
			));
			Location::create(array('location_id' => 1155,
			'name' => 'หัวทะเล (นครราชสีมา)'
			));
			Location::create(array('location_id' => 1156,
			'name' => 'หัวหมาก'
			));
			Location::create(array('location_id' => 1157,
			'name' => 'หัวหิน'
			));
			Location::create(array('location_id' => 1158,
			'name' => 'หัวหิน มาร์เก็ต วิลเลจ'
			));
			Location::create(array('location_id' => 1159,
			'name' => 'ห้าแยกโคกมะตูม (พิษณุโลก)'
			));
			Location::create(array('location_id' => 1160,
			'name' => 'ห้าแยกฉลอง (ภูเก็ต)'
			));
			Location::create(array('location_id' => 1161,
			'name' => 'หาดใหญ่'
			));
			Location::create(array('location_id' => 1162,
			'name' => 'หาดใหญ่ใน'
			));
			Location::create(array('location_id' => 1163,
			'name' => 'หาดกะรน (ภูเก็ต)'
			));
			Location::create(array('location_id' => 1164,
			'name' => 'หาดริ้น (เกาะพะงัน)'
			));
			Location::create(array('location_id' => 1165,
			'name' => 'หาดสุรินทร์ (ภูเก็ต)'
			));
			Location::create(array('location_id' => 1166,
			'name' => 'หินกอง (สระบุรี)'
			));
			Location::create(array('location_id' => 1167,
			'name' => 'อเวนิว รัชโยธิน'
			));
			Location::create(array('location_id' => 1168,
			'name' => 'อโศก'
			));
			Location::create(array('location_id' => 1169,
			'name' => 'อโศกทาวเวอร์ส'
			));
			Location::create(array('location_id' => 1170,
			'name' => 'องครักษ์ (นครนายก)'
			));
			Location::create(array('location_id' => 1171,
			'name' => 'อนุสาวรีย์ชัยสมรภูมิ'
			));
			Location::create(array('location_id' => 1172,
			'name' => 'อยุธยา'
			));
			Location::create(array('location_id' => 1173,
			'name' => 'อยุธยาพาร์ค'
			));
			Location::create(array('location_id' => 1174,
			'name' => 'อยุธยาพาร์ค 2'
			));
			Location::create(array('location_id' => 1175,
			'name' => 'อรัญประเทศ'
			));
			Location::create(array('location_id' => 1176,
			'name' => 'อ่อนนุช'
			));
			Location::create(array('location_id' => 1177,
			'name' => 'อ้อมใหญ่'
			));
			Location::create(array('location_id' => 1178,
			'name' => 'อ้อมน้อย'
			));
			Location::create(array('location_id' => 1179,
			'name' => 'อัมพวา (สมุทรสงคราม)'
			));
			Location::create(array('location_id' => 1180,
			'name' => 'อัศวรรณ ช้อปปิ้ง คอมเพล็กซ์ หนองคาย'
			));
			Location::create(array('location_id' => 1181,
			'name' => 'อาคารเสริมมิตร ทาวเวอร์'
			));
			Location::create(array('location_id' => 1182,
			'name' => 'อาคารเอส วี ซิตี้ (พระราม 3)'
			));
			Location::create(array('location_id' => 1183,
			'name' => 'อาคารไซเบอร์เวิร์ลด'
			));
			Location::create(array('location_id' => 1184,
			'name' => 'อาคารไทยศรี (สะพานสมเด็จพระเจ้าตากสินมหาราช)'
			));
			Location::create(array('location_id' => 1185,
			'name' => 'อาคารคิวเฮ้าส์ ลุมพินี'
			));
			Location::create(array('location_id' => 1186,
			'name' => 'อาคารซันทาวเวอร์ส (ถนนวิภาวดี - รังสิต)'
			));
			Location::create(array('location_id' => 1187,
			'name' => 'อาคารซิโน-ไทย'
			));
			Location::create(array('location_id' => 1188,
			'name' => 'อาคารธนิยะ (สีลม)'
			));
			Location::create(array('location_id' => 1189,
			'name' => 'อาคารบริษัทผลิตไฟฟ้าราชบุรีโฮลดิ้ง (งามวงศ์วาน)'
			));
			Location::create(array('location_id' => 1190,
			'name' => 'อาคารยูไนเต็ด เซ็นเตอร์ (สีลม)'
			));
			Location::create(array('location_id' => 1191,
			'name' => 'อาคารลิเบอร์ตี้ สแควร์ (สีลม)'
			));
			Location::create(array('location_id' => 1192,
			'name' => 'อาคารศรีอยุธยา'
			));
			Location::create(array('location_id' => 1193,
			'name' => 'อาคารสวนพลู คอร์เนอร์'
			));
			Location::create(array('location_id' => 1194,
			'name' => 'อาคารสหประชาชาติ'
			));
			Location::create(array('location_id' => 1195,
			'name' => 'อาคารสาทร สแควร์'
			));
			Location::create(array('location_id' => 1196,
			'name' => 'อาคารสิริภิญโญ (ถนนศรีอยุธยา)'
			));
			Location::create(array('location_id' => 1197,
			'name' => 'อาคารอับดุลลาฮิม'
			));
			Location::create(array('location_id' => 1198,
			'name' => 'อาคารอินเตอร์เชนจ 21 (สุขุมวิท)'
			));
			Location::create(array('location_id' => 1199,
			'name' => 'อ่างทอง'
			));
			Location::create(array('location_id' => 1200,
			'name' => 'อาร์ เอส ยู ทาวเวอร์ (สุขุมวิท 31)'
			));
			Location::create(array('location_id' => 1201,
			'name' => 'อ่าวพระนาง (กระบี่)'
			));
			Location::create(array('location_id' => 1202,
			'name' => 'อ่าวลึก'
			));
			Location::create(array('location_id' => 1203,
			'name' => 'อำนาจเจริญ'
			));
			Location::create(array('location_id' => 1204,
			'name' => 'อิมพีเรียล เวิล์ด ลาดพร้าว'
			));
			Location::create(array('location_id' => 1205,
			'name' => 'อิมพีเรียลเวิลด์ (สำโรง)'
			));
			Location::create(array('location_id' => 1206,
			'name' => 'อิมพีเรียลเวิลด์ สำโรง 2'
			));
			Location::create(array('location_id' => 1207,
			'name' => 'อุดมสุข (ซอยสุขุมวิท 103)'
			));
			Location::create(array('location_id' => 1208,
			'name' => 'อุดรธานี'
			));
			Location::create(array('location_id' => 1209,
			'name' => 'อุตรดิตถ์'
			));
			Location::create(array('location_id' => 1210,
			'name' => 'อุทยานการอาชีพชัยพัฒนา (นครปฐม)'
			));
			Location::create(array('location_id' => 1211,
			'name' => 'อุทัยธานี'
			));
			Location::create(array('location_id' => 1212,
			'name' => 'อุทุมพรพิสัย'
			));
			Location::create(array('location_id' => 1213,
			'name' => 'อุบลราชธานี'
			));
			Location::create(array('location_id' => 1214,
			'name' => 'อู่ทอง'
			));
			Location::create(array('location_id' => 1215,
			'name' => 'ฮาร์เบอร์ มอลล์ (แหลมฉบัง)'
			));

//EMPLOYEE
		$user1 = User::where('username','=','hrbp1')->first();
		$user2 = User::where('username','=','hrbp2')->first();
		$user3 = User::where('username','=','hiringmanager')->first();
		$user4 = User::where('username','=','nexthiringmanager')->first();
		Employee::create(array(	'user_id' => $user3->user_id,
							'position_id' => 2,
							'dept_id' => 1,
							'next_level_user_id' => $user4->user_id
							));
		Employee::create(array(	'user_id' => $user1->user_id,
							'position_id' => 3,
							'dept_id' => 3,
							'next_level_user_id' => $user2->user_id
							));
		Employee::create(array(	'user_id' => $user2->user_id,
							'position_id' => 4,
							'dept_id' => 5,
							'next_level_user_id' => $user3->user_id
							));
		Employee::create(array(	'user_id' => $user4->user_id,
							'position_id' => 1,
							'dept_id' => 1,
							'next_level_user_id' => null
							));

//SKILL CATEGORY
		SkillCategory::create(array(	'skill_category_id' => 1,
							'name' => 'Programming Language'
							));
		SkillCategory::create(array(	'skill_category_id' => 2,
							'name' => 'Sport'
							));
		SkillCategory::create(array(	'skill_category_id' => 3,
							'name' => 'English Test Score'
							));
		SkillCategory::create(array(	'skill_category_id' => 4,
							'name' => 'Communication'
							));
		SkillCategory::create(array(	'skill_category_id' => 5,
							'name' => 'Banking'
							));

//SKILL
		Skill::create(array(	'skill_id' => 1,
							'name' => 'JAVA',
							'skill_category_id' => 1,
							'is_star' => true
							));
		Skill::create(array(	'skill_id' => 2,
							'name' => 'PHP',
							'skill_category_id' => 1,
							'is_star' => true
							));
		Skill::create(array(	'skill_id' => 3,
							'name' => 'C',
							'skill_category_id' => 1,
							'is_star' => true
							));
		Skill::create(array(	'skill_id' => 4,
							'name' => 'JavaScript',
							'skill_category_id' => 1,
							'is_star' => true
							));
		Skill::create(array(	'skill_id' => 5,
							'name' => 'Running',
							'skill_category_id' => 2,
							'is_star' => true
							));
		Skill::create(array(	'skill_id' => 6,
							'name' => 'Swimming',
							'skill_category_id' => 2,
							'is_star' => true
							));
		Skill::create(array(	'skill_id' => 7,
							'name' => 'Scuba Diving',
							'skill_category_id' => 2,
							'is_star' => true
							));
		Skill::create(array(	'skill_id' => 8,
							'name' => 'TOFEL',
							'skill_category_id' => 3,
							'is_star' => false
							));
		Skill::create(array(	'skill_id' => 9,
							'name' => 'CU-TEP',
							'skill_category_id' => 3,
							'is_star' => false
							));
		Skill::create(array(	'skill_id' => 10,
							'name' => 'Negotiation',
							'skill_category_id' => 4,
							'is_star' => true
							));
		Skill::create(array(	'skill_id' => 11,
							'name' => 'Price Bargain',
							'skill_category_id' => 4,
							'is_star' => true
							));
		Skill::create(array(	'skill_id' => 12,
							'name' => 'Persuasion',
							'skill_category_id' => 4,
							'is_star' => true
							));
		Skill::create(array(	'skill_id' => 13,
							'name' => 'Compromise',
							'skill_category_id' => 4,
							'is_star' => true
							));
		Skill::create(array(	'skill_id' => 14,
							'name' => 'Taking on Loan',
							'skill_category_id' => 5,
							'is_star' => true
							));
		Skill::create(array(	'skill_id' => 15,
							'name' => 'Stock Market',
							'skill_category_id' => 5,
							'is_star' => true
							));
		Skill::create(array(	'skill_id' => 16,
							'name' => 'Credit Analysis',
							'skill_category_id' => 5,
							'is_star' => true
							));

//EDUCATION

		$user = User::where('username','=','candidate1')->first();
		Education::create(array(	
							'candidate_user_id' => $user->user_id,
							'school_name' => 'mini bear nursery school',
							'year_start' => null,
							'year_end' => null,
							'level' => 'nursery school',
							'field_of_study' => null,
							'major' => null,
							'GPA' => 3.98
							));
		Education::create(array(	
							'candidate_user_id' => $user->user_id,
							'school_name' => 'kob monkey temple',
							'year_start' => null,
							'year_end' => null,
							'level' => 'primary school',
							'field_of_study' => null,
							'major' => null,
							'GPA' => 4.00
							));
		Education::create(array(	
							'candidate_user_id' => $user->user_id,
							'school_name' => 'noname',
							'year_start' => null,
							'year_end' => null,
							'level' => 'high school',
							'field_of_study' => 'math-science',
							'major' => null,
							'GPA' => 0.36
							));
		Education::create(array(	
							'candidate_user_id' => $user->user_id,
							'school_name' => 'CU',
							'level' => 'primary school',
							'field_of_study' => 'engineering',
							'major' => 'computer',
							'GPA' => 1.23
							));

//REQUISITION CURRENT STATUS
		RequisitionCurrentStatus::create(array(	'requisition_current_status_id' => 1,
							'name' => 'Saved Requisition'
							));
		RequisitionCurrentStatus::create(array(	'requisition_current_status_id' => 2,
							'name' => 'Waiting for Next Level Approve'
							));
		RequisitionCurrentStatus::create(array(	'requisition_current_status_id' => 3,
							'name' => 'Waiting for HRBP Approve'
							));
		RequisitionCurrentStatus::create(array(	'requisition_current_status_id' => 4,
							'name' => 'Waiting for Post Job'
							));
		RequisitionCurrentStatus::create(array(	'requisition_current_status_id' => 5,
							'name' => 'Waiting for Send Shortlist'
							));
		RequisitionCurrentStatus::create(array(	'requisition_current_status_id' => 6,
							'name' => 'Waiting for all aplication to finish'
							));
		RequisitionCurrentStatus::create(array(	'requisition_current_status_id' => 7,
							'name' => 'END SLA'
							));

//APPLICATION CURRENT STATUS
		ApplicationCurrentStatus::create(array(	'application_current_status_id' => 1,
							'name' => 'Waiting for Send Shortlist'
							));
		ApplicationCurrentStatus::create(array(	'application_current_status_id' => 2,
							'name' => 'Waiting for Review candidate\'s resume'
							));
		ApplicationCurrentStatus::create(array(	'application_current_status_id' => 3,
							'name' => 'Waiting for Schedule Interview & Confirm'
							));
		ApplicationCurrentStatus::create(array(	'application_current_status_id' => 4,
							'name' => 'Waiting for Receive Interview Feedbacks'
							));
		ApplicationCurrentStatus::create(array(	'application_current_status_id' => 5,
							'name' => 'Waiting for Prepare offer package'
							));
		ApplicationCurrentStatus::create(array(	'application_current_status_id' => 6,
							'name' => 'Waiting for Confirm package with Head of HRBP'
							));
		ApplicationCurrentStatus::create(array(	'application_current_status_id' => 7,
							'name' => 'Waiting for Make offre to candidate'
							));
		ApplicationCurrentStatus::create(array(	'application_current_status_id' => 8,
							'name' => 'Waiting for Accept Job Offer'
							));
		ApplicationCurrentStatus::create(array(	'application_current_status_id' => 9,
							'name' => 'END SLA'
							));
//RECRUITMENT OBJECTIVE TEMPLATE
		DB::table('recruitment_objective_templates')->insert(array(
							'recruitment_objective_template_id' => 1,
							'message' => 'Replace Resignation of'
							));
		DB::table('recruitment_objective_templates')->insert(array(
							'recruitment_objective_template_id' => 2,
							'message' => 'New'
							));

//RECRUITMENT TYPE
		DB::table('recruitment_types')->insert(array(
							'recruitment_type_id' => 1,
							'name' => 'Fulltime'
							));
		DB::table('recruitment_types')->insert(array(
							'recruitment_type_id' => 2,
							'name' => 'Parttime'
							));

//Requisition
		for($i=0; $i<10;$i++)
		{
        	$user = User::where('username','=','candidate'.rand(1,4))->first();
       		$requisition = new Requisition;
			$requisition->total_number=rand(1, 10);
			$requisition->get_number=0;
			$requisition->employee_user_id = $user->user_id;
			$requisition->datetime_create = Carbon::now();
			$requisition->location_id = rand(1,1215);;
			$requisition->corporate_title_id = rand(1, 17);
			$requisition->position_id =  rand(1, 2643);
			$dep= $requisition->position()->first()->group;
			$a = Dept::where('name','=',$dep)->firstOrFail()->dept_id;
			$requisition->dept_id =$a;
			$requisition->requisition_current_status_id =rand(1, 7);
			//Input::get('requisition_current_status_id');
			$requisition->recruitment_type_id = rand(1, 2);
			$requisition->recruitment_obj_template_id=rand(1, 2);
			$requisition->recruitment_objective = str_random(40);
			$requisition->year_of_experience = rand(1, 5);
			//$requisition->recruitment_objective = Input::get('recruitment_objective');
			$requisition->responsibility = str_random(40);
			$requisition->qualification = str_random(40);
			$requisition->note = str_random(40);
			$requisition->save();
		}
		
//SLA REQUISITION
		DB::table('SLA_requisitions')->insert(array(
							'corporate_tg_id' => 1,
							'requisition_cs_id' => 1,
							'SLA' => 6
							));
		DB::table('SLA_requisitions')->insert(array(
							'corporate_tg_id' => 1,
							'requisition_cs_id' => 2,
							'SLA' => 4
							));
		DB::table('SLA_requisitions')->insert(array(
							'corporate_tg_id' => 1,
							'requisition_cs_id' => 3,
							'SLA' => 7
							));
		DB::table('SLA_requisitions')->insert(array(
							'corporate_tg_id' => 1,
							'requisition_cs_id' => 4,
							'SLA' => 4
							));
		DB::table('SLA_requisitions')->insert(array(
							'corporate_tg_id' => 2,
							'requisition_cs_id' => 1,
							'SLA' => 7
							));
		DB::table('SLA_requisitions')->insert(array(
							'corporate_tg_id' => 2,
							'requisition_cs_id' => 2,
							'SLA' => 5
							));
		DB::table('SLA_requisitions')->insert(array(
							'corporate_tg_id' => 2,
							'requisition_cs_id' => 3,
							'SLA' => 9
							));
		DB::table('SLA_requisitions')->insert(array(
							'corporate_tg_id' => 2,
							'requisition_cs_id' => 4,
							'SLA' => 5
							));
		DB::table('SLA_requisitions')->insert(array(
							'corporate_tg_id' => 3,
							'requisition_cs_id' => 1,
							'SLA' => 8
							));
		DB::table('SLA_requisitions')->insert(array(
							'corporate_tg_id' => 3,
							'requisition_cs_id' => 2,
							'SLA' => 7
							));
		DB::table('SLA_requisitions')->insert(array(
							'corporate_tg_id' => 3,
							'requisition_cs_id' => 3,
							'SLA' => 12
							));
		DB::table('SLA_requisitions')->insert(array(
							'corporate_tg_id' => 3,
							'requisition_cs_id' => 4,
							'SLA' => 6
							));

//SLA CANDIDATE
		DB::table('SLA_candidates')->insert(array(
							'corporate_tg_id' => 1,
							'app_cs_id' => 1,
							'visit_number' => 1,
							'SLA' => 6
							));
		DB::table('SLA_candidates')->insert(array(
							'corporate_tg_id' => 1,
							'app_cs_id' => 1,
							'visit_number' => 2,
							'SLA' => 8
							));
		DB::table('SLA_candidates')->insert(array(
							'corporate_tg_id' => 1,
							'app_cs_id' => 2,
							'visit_number' => 1,
							'SLA' => 4
							));
		DB::table('SLA_candidates')->insert(array(
							'corporate_tg_id' => 1,
							'app_cs_id' => 2,
							'visit_number' => 2,
							'SLA' => 5
							));
		DB::table('SLA_candidates')->insert(array(
							'corporate_tg_id' => 1,
							'app_cs_id' => 3,
							'visit_number' => 1,
							'SLA' => 2
							));
		DB::table('SLA_candidates')->insert(array(
							'corporate_tg_id' => 2,
							'app_cs_id' => 1,
							'visit_number' => 1,
							'SLA' => 7
							));
		DB::table('SLA_candidates')->insert(array(
							'corporate_tg_id' => 2,
							'app_cs_id' => 2,
							'visit_number' => 1,
							'SLA' => 6
							));
		DB::table('SLA_candidates')->insert(array(
							'corporate_tg_id' => 3,
							'app_cs_id' => 1,
							'visit_number' => 1,
							'SLA' => 8
							));
		DB::table('SLA_candidates')->insert(array(
							'corporate_tg_id' => 3,
							'app_cs_id' => 2,
							'visit_number' => 1,
							'SLA' => 7
							));
		DB::table('SLA_candidates')->insert(array(
							'corporate_tg_id' => 3,
							'app_cs_id' => 3,
							'visit_number' => 1,
							'SLA' => 5
							));
		DB::table('SLA_candidates')->insert(array(
							'corporate_tg_id' => 3,
							'app_cs_id' => 3,
							'visit_number' => 2,
							'SLA' => 7
							));
		DB::table('SLA_candidates')->insert(array(
							'corporate_tg_id' => 3,
							'app_cs_id' => 3,
							'visit_number' => 3,
							'SLA' => 9
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

