<?php
use Illuminate\Database\Migrations\Migration;

class ConfideSetupUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::dropIfExists('users');
            Schema::dropIfExists('password_reminders');
            Schema::dropIfExists('application_current_statuses');
            Schema::dropIfExists('positions');
            Schema::dropIfExists('responsibilities');
            Schema::dropIfExists('qualifications');
            Schema::dropIfExists('skill_categories');
            Schema::dropIfExists('skills');
            Schema::dropIfExists('locations');
            Schema::dropIfExists('corporate_title_groups');
            Schema::dropIfExists('corporate_titles');
            Schema::dropIfExists('recruitment_types');
            Schema::dropIfExists('requisition_current_statuses');
            Schema::dropIfExists('recruitment_objective_templates');
            Schema::dropIfExists('candidates');
            Schema::dropIfExists('depts');
            Schema::dropIfExists('employees');
            Schema::dropIfExists('requisitions');
            Schema::dropIfExists('tags');
            Schema::dropIfExists('requisition_skills');
            Schema::dropIfExists('questions');
            Schema::dropIfExists('answers');
            Schema::dropIfExists('question_answers');
            Schema::dropIfExists('position_questions');
            Schema::dropIfExists('applications');
            Schema::dropIfExists('application_question_answers');
            Schema::dropIfExists('interview_logs');
            Schema::dropIfExists('int_off_schedules');
            Schema::dropIfExists('application_logs');
            Schema::dropIfExists('interview_evaluations');
            Schema::dropIfExists('candidate_skills');
            Schema::dropIfExists('requisition_logs');
            Schema::dropIfExists('folders');
            Schema::dropIfExists('candidate_folders');
            Schema::dropIfExists('menu_visits');
            Schema::dropIfExists('SLA_requisitions');
            Schema::dropIfExists('SLA_candidates');
            Schema::dropIfExists('job_carts');
            Schema::dropIfExists('work_experiences');
            Schema::dropIfExists('educations');
            Schema::dropIfExists('awards');
            Schema::dropIfExists('following_jobs');
            Schema::dropIfExists('certificates');
            Schema::dropIfExists('public_holidays');
        // Creates the users table
        Schema::create('users', function($table)
        {
            $table->increments('user_id');
            $table->string('username',48);
            $table->string('password',45);
            $table->string('first',45);
            $table->string('last',45);
            $table->integer('status');
            $table->string('email',45);
            $table->string('contact_number',20);
            $table->string('facebook_uid',100)->nullable()->default(NULL);
            $table->string('linkin_uid',100)->nullable()->default(NULL);
            $table->string('confirmation_code');
            $table->boolean('confirmed')->default(false);
            $table->timestamps(); 
        });
        // Creates password reminders table
        Schema::create('password_reminders', function($t)
        {
            $t->string('email');
            $t->string('token');
            $t->timestamp('created_at');
        });
          Schema::create('application_current_statuses', function($table)
        {
            $table->increments('application_current_status_id');
            $table->string('name',45);
            $table->timestamps();
        });
           Schema::create('positions', function($table)
        {
            $table->increments('position_id');
            $table->string('group',100);
            $table->string('division',100)->nullable()->default(NULL);
            $table->string('organization',100)->nullable()->default(NULL);
            $table->string('job_title',100);
            $table->integer('total');
            $table->timestamps();
        });
            Schema::create('responsibilities', function($table)
        {
            $table->increments('responsibility_id');
            $table->unsignedInteger('position_id');
            $table->foreign('position_id')->references('position_id')->on('positions')->onDelete('cascade')->onUpdate('cascade');
            $table->string('message',300);
            $table->timestamps();
        });
             Schema::create('qualifications', function($table)
        {
            $table->increments('qualification_id');
            $table->unsignedInteger('position_id');
            $table->foreign('position_id')->references('position_id')->on('positions')->onDelete('cascade')->onUpdate('cascade');
            $table->string('message',300);
            $table->timestamps();
        });
           Schema::create('skill_categories', function($table)
        {
            $table->increments('skill_category_id');
            $table->string('name',45);
            $table->timestamps();
        });
            Schema::create('skills', function($table)
        {
            $table->increments('skill_id');
            $table->string('name',45);
            $table->unsignedInteger('skill_category_id');
            $table->foreign('skill_category_id')->references('skill_category_id')->on('skill_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('is_star');
            $table->timestamps();
        });

         Schema::create('locations', function($table)
        {
            $table->increments('location_id');
            $table->string('name',100);
            $table->timestamps();
        });
          Schema::create('corporate_title_groups', function($table)
        {
            $table->increments('corporate_title_group_id');
            $table->string('name',45);
            $table->integer('total_SLA');
            $table->timestamps();
        });
         Schema::create('corporate_titles', function($table)
        {
            $table->increments('corporate_title_id');
            $table->string('name',45);
            $table->unsignedInteger('corporate_title_group_id');
            $table->foreign('corporate_title_group_id')->references('corporate_title_group_id')->on('corporate_title_groups')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
         Schema::create('recruitment_types', function($table)
        {
            $table->increments('recruitment_type_id');
            $table->string('name',45);
            $table->timestamps();
        });
         Schema::create('requisition_current_statuses', function($table)
        {
            $table->increments('requisition_current_status_id');
            $table->string('name',45);
            $table->timestamps();
        });
         Schema::create('recruitment_objective_templates', function($table)
        {
            $table->increments('recruitment_objective_template_id');
            $table->string('message',100);
            $table->timestamps();
        });
        
          Schema::create('candidates', function($table)
        {   $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->decimal('profile_completeness',5,2);
            $table->decimal('idcard',13,0)->nullable()->default(NULL);
            $table->string('passport_number',15)->nullable()->default(NULL);
            $table->string('thai_saluation',45)->nullable()->default(NULL);
            $table->string('thai_firstname',45)->nullable()->default(NULL);
            $table->string('thai_lastname',45)->nullable()->default(NULL);
            $table->string('eng_saluation',45)->nullable()->default(NULL);
            $table->boolean('is_male')->nullable()->default(NULL);
            $table->date('birth_date')->nullable()->default(NULL);
            $table->string('nationality',45)->nullable()->default(NULL);
            $table->string('country',45)->nullable()->default(NULL);
            $table->string('city',45)->nullable()->default(NULL);
            $table->string('full_location',200)->nullable()->default(NULL);
            $table->string('current_living_location',200)->nullable()->default(NULL);
            $table->string('filepath_picture',100)->nullable()->default(NULL);
            $table->string('filepath_profile_picture',100)->nullable()->default(NULL);
            $table->string('filepath_video',100)->nullable()->default(NULL);
            $table->string('filepath_cv',100)->nullable()->default(NULL);
            $table->primary('user_id');
            $table->timestamps();
        });
            Schema::create('depts', function($table)
        {
            $table->increments('dept_id');
            $table->string('name');
            $table->unsignedInteger('hrbp_user_id');
            $table->foreign('hrbp_user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('recruiter_user_id');
            $table->foreign('recruiter_user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
          Schema::create('employees', function($table)
        {   
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('position_id');
            $table->foreign('position_id')->references('position_id')->on('positions')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('dept_id');
            $table->foreign('dept_id')->references('dept_id')->on('depts')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('next_level_user_id')->nullable()->default(NULL);
            $table->foreign('next_level_user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('award_display_name',45);
            $table->integer('award_point');
            $table->primary('user_id');
            $table->timestamps();
        });
          Schema::create('requisitions', function($table)
        {
            $table->increments('requisition_id');
            $table->integer('total_number');
            $table->integer('get_number');
            $table->unsignedInteger('employee_user_id');
            $table->foreign('employee_user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamp('datetime_create');
            $table->timestamp('datetime_prev_status');
            $table->unsignedInteger('location_id');
            $table->foreign('location_id')->references('location_id')->on('locations')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('corporate_title_id');
            $table->foreign('corporate_title_id')->references('corporate_title_id')->on('corporate_titles')->onDelete('cascade')->onUpdate('cascade');
            $table->string('job_title',100);
            $table->unsignedInteger('position_id');
            $table->foreign('position_id')->references('position_id')->on('positions')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('dept_id');
            $table->foreign('dept_id')->references('dept_id')->on('depts')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('requisition_current_status_id');
            $table->foreign('requisition_current_status_id')->references('requisition_current_status_id')->on('requisition_current_statuses')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('recruitment_type_id');
            $table->foreign('recruitment_type_id')->references('recruitment_type_id')->on('recruitment_types')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('year_of_experience')->nullable()->default(NULL);
            $table->unsignedInteger('recruitment_obj_template_id');
            $table->foreign('recruitment_obj_template_id')->references('recruitment_objective_template_id')->on('recruitment_objective_templates')->onDelete('cascade')->onUpdate('cascade');
            $table->string('recruitment_objective',100)->nullable();
            $table->string('responsibility',300);
            $table->string('qualification',300); 
            $table->string('note',100)->nullable()->default(NULL);
            $table->timestamps();
        });
         Schema::create('tags', function($table)
        {
            $table->unsignedInteger('requisition_id');
            $table->foreign('requisition_id')->references('requisition_id')->on('requisitions')->onDelete('cascade')->onUpdate('cascade');
            $table->string('tag',100);
            $table->primary('requisition_id');
        });
         Schema::create('requisition_skills', function($table)
        {
            $table->unsignedInteger('skill_id');
            $table->foreign('skill_id')->references('skill_id')->on('skills')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('requisition_id');
            $table->foreign('requisition_id')->references('requisition_id')->on('requisitions')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(array('skill_id', 'requisition_id'));
            $table->timestamps();
        });
        Schema::create('questions', function($table)
        {
            $table->increments('question_id');
            $table->unsignedInteger('requisition_id')->nullable()->default(NULL);
            $table->foreign('requisition_id')->references('requisition_id')->on('requisitions')->onDelete('cascade')->onUpdate('cascade');
            $table->string('question',200);
            $table->timestamps();
        });
          Schema::create('answers', function($table)
        {
            $table->increments('answer_id');
            $table->string('name',45);
            $table->integer('point');
            $table->timestamps();
        });
            Schema::create('question_answers', function($table)
        {
            $table->unsignedInteger('answer_id');
            $table->foreign('answer_id')->references('answer_id')->on('answers')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('question_id');
            $table->foreign('question_id')->references('question_id')->on('questions')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(array('question_id', 'answer_id'));
            $table->timestamps();
        });
            Schema::create('position_questions', function($table)
        {
            $table->unsignedInteger('position_id');
            $table->foreign('position_id')->references('position_id')->on('positions')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('question_id');
            $table->foreign('question_id')->references('question_id')->on('questions')->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('is_checked');
            $table->primary(array('position_id', 'question_id'));
            $table->timestamps();
        });
         Schema::create('applications', function($table)
        {
            $table->increments('application_id');
            $table->unsignedInteger('requisition_id');
            $table->foreign('requisition_id')->references('requisition_id')->on('requisitions')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('candidate_user_id');
            $table->foreign('candidate_user_id')->references('user_id')->on('candidates')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('application_current_status_id');
            $table->foreign('application_current_status_id')->references('application_current_status_id')->on('application_current_statuses')->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('is_in_basket')->default(false);
            $table->integer('question_point')->nullable()->default(NULL);
            $table->integer('send_number')->nullable()->default(NULL);
            $table->timestamp('datetime_create');
            $table->timestamp('datetime_prev_status');
            $table->boolean('result')->nullable()->default(NULL);
            $table->integer('color')->nullable()->default(NULL);
            $table->string('note',100)->nullable()->default(NULL);
            $table->integer('current_salary')->nullable()->default(NULL);
            $table->integer('expected_salary')->nullable()->default(NULL);
            $table->integer('position_salary')->nullable()->default(NULL);
            $table->integer('cola')->nullable()->default(NULL);
            $table->integer('final_salary')->nullable()->default(NULL);
            $table->timestamps();
        });
        Schema::create('application_question_answers', function($table)
        {
            $table->unsignedInteger('application_id');
            $table->foreign('application_id')->references('application_id')->on('applications')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('question_id');
            $table->foreign('question_id')->references('question_id')->on('questions')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('answer_id');
            $table->foreign('answer_id')->references('answer_id')->on('answers')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(array('application_id', 'question_id'));
            $table->timestamps();
        });
          Schema::create('interview_logs', function($table)
        {
             $table->integer('visit_number');
             $table->unsignedInteger('application_id');
             $table->foreign('application_id')->references('application_id')->on('applications')->onDelete('cascade')->onUpdate('cascade');
             $table->timestamp('interview_datetime');
             $table->integer('result')->nullable()->default(NULL);
             $table->string('note',100)->nullable()->default(NULL);
             $table->primary(array('visit_number', 'application_id'));
             $table->timestamps();
        });
          Schema::create('int_off_schedules', function($table)
        {
            $table->unsignedInteger('app_cs_id');
            $table->foreign('app_cs_id')->references('application_current_status_id')->on('application_current_statuses')->onDelete('cascade')->onUpdate('cascade');
             $table->integer('visit_number');
             $table->unsignedInteger('application_id');
             $table->foreign('application_id')->references('application_id')->on('applications')->onDelete('cascade')->onUpdate('cascade');
             $table->timestamp('datetime');
             $table->primary(array('app_cs_id', 'application_id', 'visit_number'));
             $table->timestamps();
        });
            Schema::create('application_logs', function($table)
        {   $table->unsignedInteger('application_id');
            $table->foreign('application_id')->references('application_id')->on('applications')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('action_type');
            $table->foreign('action_type')->references('application_current_status_id')->on('application_current_statuses')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('visit_number');
            $table->unsignedInteger('employee_user_id');
            $table->foreign('employee_user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamp('action_datetime');
            $table->timestamp('prev_action_datetime');
            $table->boolean('result');
            $table->string('note',100)->nullable()->default(NULL);
            $table->primary(array('application_id', 'action_type','visit_number'));
            $table->timestamps();
        });
          Schema::create('interview_evaluations', function($table)
        {
            $table->unsignedInteger('application_id');
            $table->foreign('application_id')->references('application_id')->on('applications')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('employee_user_id');
            $table->foreign('employee_user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('visit_number');
            $table->float('score')->nullable()->default(NULL);
            $table->string('note',100)->nullable()->default(NULL);
            $table->string('filepath_interview',100)->nullable()->default(NULL);
            $table->primary('application_id','employee_user_id','visit_number');
            $table->timestamps();
        });
          
           Schema::create('candidate_skills', function($table)
        {
            $table->unsignedInteger('skill_id');
            $table->foreign('skill_id')->references('skill_id')->on('skills')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('candidate_user_id');
            $table->foreign('candidate_user_id')->references('user_id')->on('candidates')->onDelete('cascade')->onUpdate('cascade');
            $table->float('level');
            $table->primary(array('skill_id', 'candidate_user_id'));
            $table->timestamps();
        });
          Schema::create('requisition_logs', function($table)
        {   $table->unsignedInteger('action_type');
            $table->foreign('action_type')->references('requisition_current_status_id')->on('requisition_current_statuses')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('requisition_id');
            $table->foreign('requisition_id')->references('requisition_id')->on('requisitions')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('send_number');
            $table->timestamp('action_datetime');
            $table->float('length_to_prev_action_in_hour');
            $table->unsignedInteger('employee_user_id');
            $table->foreign('employee_user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');  
            $table->boolean('result');
            $table->string('note',100)->nullable()->default(NULL);
            $table->primary(array('requisition_id', 'action_type','send_number'));
            $table->timestamps();
        });
          Schema::create('folders', function($table)
        {
            $table->increments('folder_id');
            $table->string('name',45);
            $table->unsignedInteger('is_in_folder_id')->nullable()->default(NULL);
            $table->foreign('is_in_folder_id')->references('folder_id')->on('folders')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('employee_user_id')->nullable();
            $table->foreign('employee_user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('description',100)->nullable()->default(NULL);
            $table->timestamps();
        });
          Schema::create('candidate_folders', function($table)
        {
            $table->unsignedInteger('candidate_user_id');
            $table->foreign('candidate_user_id')->references('user_id')->on('candidates')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('is_in_folder_id');
            $table->foreign('is_in_folder_id')->references('folder_id')->on('folders')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(array('candidate_user_id','is_in_folder_id'));
            $table->timestamps();
        });
           Schema::create('menu_visits', function($table)
        {
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('menu_number');
            $table->timestamp('last_visit');
            $table->primary('user_id','menu_number');
            $table->timestamps();
        });
             Schema::create('SLA_requisitions', function($table)
        {
            $table->unsignedInteger('corporate_tg_id');
            $table->foreign('corporate_tg_id')->references('corporate_title_group_id')->on('corporate_title_groups')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('requisition_cs_id');
            $table->foreign('requisition_cs_id')->references('requisition_current_status_id')->on('requisition_current_statuses')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('SLA');
            $table->primary(array('corporate_tg_id','requisition_cs_id'));
            $table->timestamps();
        });
               Schema::create('SLA_candidates', function($table)
        {
            $table->unsignedInteger('corporate_tg_id');
            $table->foreign('corporate_tg_id')->references('corporate_title_group_id')->on('corporate_title_groups')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('app_cs_id');
            $table->foreign('app_cs_id')->references('application_current_status_id')->on('application_current_statuses')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('visit_number');
            $table->integer('SLA');
            $table->primary(array('corporate_tg_id','app_cs_id','visit_number'));
            $table->timestamps();
        });
               Schema::create('job_carts', function($table)
        {
            $table->unsignedInteger('candidate_user_id');
            $table->foreign('candidate_user_id')->references('user_id')->on('candidates')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('requisition_id');
            $table->foreign('requisition_id')->references('requisition_id')->on('requisitions')->onDelete('cascade')->onUpdate('cascade');
            $table->date('date_add');
            $table->primary(array('candidate_user_id','requisition_id'));
            $table->timestamps();
        });
               Schema::create('work_experiences', function($table)
        {
            $table->increments('work_experience_id');
            $table->unsignedInteger('candidate_user_id');
            $table->foreign('candidate_user_id')->references('user_id')->on('candidates')->onDelete('cascade')->onUpdate('cascade');
            $table->string('company_name',100);
            $table->string('position',100)->nullable()->default(NULL);
            $table->string('location',200)->nullable()->default(NULL);
            $table->integer('monthly_salary')->nullable()->default(NULL);
            $table->date('time_period_start')->nullable()->default(NULL);
            $table->date('time_period_end')->nullable()->default(NULL);
            $table->boolean('is_present')->nullable()->default(NULL);
            $table->string('job_achieve',200)->nullable()->default(NULL);
            $table->string('reason_leave',100)->nullable()->default(NULL);
            $table->timestamps();
        });
               Schema::create('educations', function($table)
        {
            $table->increments('education_id');
            $table->unsignedInteger('candidate_user_id');
            $table->foreign('candidate_user_id')->references('user_id')->on('candidates')->onDelete('cascade')->onUpdate('cascade');
            $table->string('school_name',100);
            $table->date('year_start')->nullable()->default(NULL);
            $table->date('year_end')->nullable()->default(NULL);
            $table->string('level',50)->nullable()->default(NULL);
            $table->string('field_of_study',100)->nullable()->default(NULL);
            $table->string('major',100)->nullable()->default(NULL);
            $table->decimal('GPA',3,2)->nullable()->default(NULL);
            $table->timestamps();
        });
              Schema::create('awards', function($table)
        {
            $table->increments('award_id');
            $table->unsignedInteger('candidate_user_id');
            $table->foreign('candidate_user_id')->references('user_id')->on('candidates')->onDelete('cascade')->onUpdate('cascade');
            $table->string('title',100);
            $table->string('issuer',50)->nullable()->default(NULL);
            $table->string('description',200)->nullable()->default(NULL);
            $table->date('date_get')->nullable()->default(NULL);
            $table->timestamps();
        }); 
              Schema::create('following_jobs', function($table)
        {
            $table->increments('following_job_id');
            $table->unsignedInteger('candidate_user_id');
            $table->foreign('candidate_user_id')->references('user_id')->on('candidates')->onDelete('cascade')->onUpdate('cascade');
            $table->string('position_name',200)->nullable()->default(NULL);
            $table->string('job_group',200)->nullable()->default(NULL);
            $table->string('tag',200)->nullable()->default(NULL);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        }); 
               Schema::create('certificates', function($table)
        {
            $table->increments('certificate_id');
            $table->unsignedInteger('candidate_user_id');
            $table->foreign('candidate_user_id')->references('user_id')->on('candidates')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name',100);
            $table->string('description',200)->nullable()->default(NULL);
            $table->date('date_get')->nullable()->default(NULL);
            $table->string('filepath_certificate',100)->nullable()->default(NULL);
            $table->timestamps();
        }); 
                Schema::create('public_holidays', function($table)
        {
            $table->integer('fisYear');
            $table->date('public_holiday');
            $table->string('descripiton',100);
            $table->primary(array('fisYear','public_holiday'));
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            Schema::drop('users');
            Schema::drop('password_reminders');
            Schema::drop('application_current_statuses');
            Schema::drop('positions');
            Schema::drop('responsibilities');
            Schema::drop('qualifications');
            Schema::drop('skill_categories');
            Schema::drop('skills');
            Schema::drop('locations');
            Schema::drop('corporate_title_groups');
            Schema::drop('corporate_titles');
            Schema::drop('recruitment_types');
            Schema::drop('requisition_current_statuses');
            Schema::drop('recruitment_objective_templates');
            Schema::drop('candidates');
            Schema::drop('depts');
            Schema::drop('employees');
            Schema::drop('requisitions');
            Schema::drop('tags');
            Schema::drop('requisition_skills');
            Schema::drop('questions');
            Schema::drop('answers');
            Schema::drop('question_answers');
            Schema::drop('position_questions');
            Schema::drop('applications');
            Schema::drop('application_question_answers');
            Schema::drop('interview_logs');
            Schema::drop('interview_offer_schedules');
            Schema::drop('application_logs');
            Schema::drop('interview_evaluations');
            Schema::drop('candidate_skills');
            Schema::drop('requisition_logs');
            Schema::drop('folders');
            Schema::drop('candidate_folders');
            Schema::drop('menu_visits');
            Schema::drop('SLA_requisitions');
            Schema::drop('SLA_candidates');
            Schema::drop('job_carts');
            Schema::drop('work_experiences');
            Schema::drop('educations');
            Schema::drop('awards');
            Schema::drop('following_jobs');
            Schema::drop('certificates');
            Schema::drop('public_holidays');
    }

}
