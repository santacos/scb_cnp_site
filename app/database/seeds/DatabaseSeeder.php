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
		DB::table('recruitment_objective_templates')->delete();
		DB::table('recruitment_types')->delete();

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
		Location::create(array(	'location_id' => 1,
							'name' => 'location1',
							));
		Location::create(array(	'location_id' => 2,
							'name' => 'location2',
							));
		Location::create(array(	'location_id' => 3,
							'name' => 'location3',
							));
		Location::create(array(	'location_id' => 4,
							'name' => 'location4',
							));
		Location::create(array(	'location_id' => 5,
							'name' => 'location5',
							));
		Location::create(array(	'location_id' => 6,
							'name' => 'location6',
							));
		Location::create(array(	'location_id' => 7,
							'name' => 'location7',
							));
		Location::create(array(	'location_id' => 8,
							'name' => 'location8',
							));
		Location::create(array(	'location_id' => 9,
							'name' => 'location9',
							));

//EMPLOYEE
		Employee::create(array(	'user_id' => 4,
							'position_id' => 1,
							'dept_id' => 1,
							'next_level_user_id' => null,
							'is_manager' => false
							));
		Employee::create(array(	'user_id' => 1,
							'position_id' => 2,
							'dept_id' => 1,
							'next_level_user_id' => 4,
							'is_manager' => false
							));
		Employee::create(array(	'user_id' => 2,
							'position_id' => 3,
							'dept_id' => 3,
							'next_level_user_id' => 4,
							'is_manager' => false
							));
		Employee::create(array(	'user_id' => 3,
							'position_id' => 4,
							'dept_id' => 5,
							'next_level_user_id' => 2,
							'is_manager' => false
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
		Education::create(array(	'education_id' => 1,
							'candidate_user_id' => 1,
							'school_name' => 'mini bear nursery school',
							'year_start' => null,
							'year_end' => null,
							'level' => 'nursery school',
							'field_of_study' => null,
							'major' => null,
							'GPA' => 3.98
							));
		Education::create(array(	'education_id' => 2,
							'candidate_user_id' => 1,
							'school_name' => 'kob monkey temple',
							'year_start' => null,
							'year_end' => null,
							'level' => 'primary school',
							'field_of_study' => null,
							'major' => null,
							'GPA' => 4.00
							));
		Education::create(array(	'education_id' => 3,
							'candidate_user_id' => 1,
							'school_name' => 'noname',
							'year_start' => null,
							'year_end' => null,
							'level' => 'high school',
							'field_of_study' => 'math-science',
							'major' => null,
							'GPA' => 0.36
							));
		Education::create(array(	'education_id' => 4,
							'candidate_user_id' => 3,
							'school_name' => 'CU',
							'level' => 'primary school',
							'field_of_study' => 'engineering',
							'major' => 'computer',
							'GPA' => 1.23
							));

//REQUISITION CURRENT STATUS
		RequisitionCurrentStatus::create(array(	'requisition_current_status_id' => 1,
							'name' => 'aaa'
							));
		RequisitionCurrentStatus::create(array(	'requisition_current_status_id' => 2,
							'name' => 'bbb'
							));
		RequisitionCurrentStatus::create(array(	'requisition_current_status_id' => 3,
							'name' => 'ccc'
							));
		RequisitionCurrentStatus::create(array(	'requisition_current_status_id' => 4,
							'name' => 'ddd'
							));
		RequisitionCurrentStatus::create(array(	'requisition_current_status_id' => 5,
							'name' => 'eee'
							));
		RequisitionCurrentStatus::create(array(	'requisition_current_status_id' => 6,
							'name' => 'fff'
							));

//APPLICATION CURRENT STATUS
		ApplicationCurrentStatus::create(array(	'application_current_status_id' => 1,
							'name' => 'AAA'
							));
		ApplicationCurrentStatus::create(array(	'application_current_status_id' => 2,
							'name' => 'BBB'
							));
		ApplicationCurrentStatus::create(array(	'application_current_status_id' => 3,
							'name' => 'CCC'
							));
		ApplicationCurrentStatus::create(array(	'application_current_status_id' => 4,
							'name' => 'DDD'
							));
		ApplicationCurrentStatus::create(array(	'application_current_status_id' => 5,
							'name' => 'EEE'
							));
		ApplicationCurrentStatus::create(array(	'application_current_status_id' => 6,
							'name' => 'FFF'
							));
		ApplicationCurrentStatus::create(array(	'application_current_status_id' => 7,
							'name' => 'GGG'
							));

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

