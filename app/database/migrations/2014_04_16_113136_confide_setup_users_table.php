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
        // Creates the users table
        Schema::create('users', function($table)
        {
            $table->increments('user_id');
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('mobilephonenumber');
            $table->string('confirmation_code');
            $table->boolean('confirmed')->default(false);
            $table->integer('idcard');
            $table->integer('status');
            $table->string('facebook_uid');
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
            $table->string('name');
            $table->timestamps();
        });
           Schema::create('positions', function($table)
        {
             $table->increments('position_id');
            $table->string('name');
            $table->timestamps();
        });
           Schema::create('skill_categories', function($table)
        {
            $table->increments('skill_category_id');
            $table->string('name');
            $table->timestamps();
        });

         Schema::create('locations', function($table)
        {
            $table->increments('location_id');
            $table->string('name');
            $table->timestamps();
        });
         Schema::create('coperate_titles', function($table)
        {
            $table->increments('coperate_title_id');
            $table->string('name');
            $table->integer('SLA');
            $table->timestamps();
        });
         Schema::create('requisition_current_statuses', function($table)
        {
            $table->increments('requisition_current_status_id');
            $table->string('name');
            $table->timestamps();
        });
           Schema::create('questions', function($table)
        {
            $table->increments('question_id');
            $table->string('question');
            $table->timestamps();
        });
          Schema::create('answers', function($table)
        {
            $table->increments('answer_id');
            $table->string('name');
            $table->integer('point');
            $table->timestamps();
        });
            Schema::create('used_answers', function($table)
        {
            $table->increments('used_answer_id');
            $table->string('name');
            $table->integer('point');
            $table->timestamps();
        });

        Schema::create('candidates', function($table)
        {    $table->unsignedInteger('user_id');
             $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
             $table->string('experience');
             $table->decimal('profile_completeness',5,2);
             $table->primary('user_id');
            $table->timestamps();
        });
         Schema::create('depts', function($table)
        {
            $table->increments('dept_id');
            $table->string('name');
            $table->unsignedInteger('employee_hrbp_user_id');
            $table->foreign('employee_hrbp_user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('employee_recruiter_user_id');
            $table->foreign('employee_recruiter_user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
            $table->unsignedInteger('employee_supervisor_user_id');
            $table->foreign('employee_supervisor_user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('is_manager');
            $table->primary('user_id');
            $table->timestamps();
        });
           
          Schema::create('requisitions', function($table)
        {
             $table->increments('requisition_id');
             $table->integer('total_number');
             $table->integer('get_number');
              $table->unsignedInteger('employee_user_id');
              $table->foreign('employee_user_id')->references('user_id')->on('employees')->onDelete('cascade')->onUpdate('cascade');
             $table->unsignedInteger('location_id');
             $table->foreign('location_id')->references('location_id')->on('locations')->onDelete('cascade')->onUpdate('cascade');
             $table->unsignedInteger('coperate_title_id');
             $table->foreign('coperate_title_id')->references('coperate_title_id')->on('coperate_titles')->onDelete('cascade')->onUpdate('cascade');
             $table->unsignedInteger('position_id');
             $table->foreign('position_id')->references('position_id')->on('positions')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('dept_id');
            $table->foreign('dept_id')->references('dept_id')->on('depts')->onDelete('cascade')->onUpdate('cascade');
             $table->unsignedInteger('requisition_current_status_id');
             $table->foreign('requisition_current_status_id')->references('requisition_current_status_id')->on('requisition_current_statuses')->onDelete('cascade')->onUpdate('cascade');
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
             $table->boolean('result');
            $table->timestamps();
        });
          Schema::create('interview_logs', function($table)
        {
             $table->integer('visit_number');
             $table->unsignedInteger('application_id');
             $table->foreign('application_id')->references('application_id')->on('applications')->onDelete('cascade')->onUpdate('cascade');
             $table->timestamp('interview_datetime');
             $table->string('final_result');
             $table->primary(array('visit_number', 'application_id'));
             $table->timestamps();
        });
         

            Schema::create('application_logs', function($table)
        {   $table->unsignedInteger('application_id');
            $table->foreign('application_id')->references('application_id')->on('applications')->onDelete('cascade')->onUpdate('cascade');
             $table->integer('action_type');
            $table->unsignedInteger('employee_user_id');
            $table->foreign('employee_user_id')->references('user_id')->on('employees')->onDelete('cascade')->onUpdate('cascade');
             $table->timestamp('action_datetime');
             $table->float('length_to_prev_action_in_hour');
            $table->primary(array('application_id', 'action_type'));
            $table->timestamps();
        });
            
          
                    

          Schema::create('interview_evaluations', function($table)
        {
            $table->unsignedInteger('application_id');
            $table->foreign('application_id')->references('application_id')->on('applications')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('employee_user_id');
            $table->foreign('employee_user_id')->references('user_id')->on('employees')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('visit_number');
            $table->float('score');
            $table->string('note');
            $table->timestamps();
        });
           Schema::create('skills', function($table)
        {
            $table->increments('skill_id');
            $table->string('name');
            $table->unsignedInteger('skill_category_id');
            $table->foreign('skill_category_id')->references('skill_category_id')->on('skill_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
           Schema::create('candidate_skills', function($table)
        {
            $table->unsignedInteger('skill_id');
            $table->foreign('skill_id')->references('skill_id')->on('skills')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('candidate_user_id');
            $table->foreign('candidate_user_id')->references('user_id')->on('candidates')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('level');
            $table->primary(array('skill_id', 'candidate_user_id'));
            $table->timestamps();
        });
           
         
            

       
         Schema::create('requisition_logs', function($table)
        {   
            $table->unsignedInteger('requisition_id');
            $table->foreign('requisition_id')->references('requisition_id')->on('requisitions')->onDelete('cascade')->onUpdate('cascade');
             $table->integer('action_type');
             $table->timestamp('action_datetime');
            $table->unsignedInteger('employee_user_id');
            $table->foreign('employee_user_id')->references('user_id')->on('employees')->onDelete('cascade')->onUpdate('cascade');  
             $table->float('length_to_prev_action_in_hour');
              $table->boolean('result');
            $table->primary(array('requisition_id', 'action_type'));
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
         Schema::create('requisition_questions', function($table)
        {
            $table->unsignedInteger('requisition_id');
            $table->foreign('requisition_id')->references('requisition_id')->on('requisitions')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('question_id');
            $table->foreign('question_id')->references('question_id')->on('questions')->onDelete('cascade')->onUpdate('cascade');
            $table->string('question');
            $table->primary(array('requisition_id', 'question_id'));
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
          Schema::create('requisition_question_used_answers', function($table)
        {
            $table->unsignedInteger('requisition_id');
            $table->foreign('requisition_id')->references('requisition_id')->on('requisitions')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('question_id');
            $table->foreign('question_id')->references('question_id')->on('questions')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('used_answer_id');
            $table->foreign('used_answer_id')->references('used_answer_id')->on('used_answers')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('password_reminders');
        Schema::drop('users');
        Schema::drop('candidates');
        Schema::drop('application_current_statuses');
        Schema::drop('applications');
        Schema::drop('interview_logs');
        Schema::drop('application_logs');
        Schema::drop('employees');
        Schema::drop('positions');
        Schema::drop('interview_evaluations');
        Schema::drop('candidate_skills');
        Schema::drop('skills');
        Schema::drop('skill_categories');
        Schema::drop('locations');
        Schema::drop('coperate_titles');
        Schema::drop('requisition_current_statuses');
        Schema::drop('requisitions');
        Schema::drop('depts');
        Schema::drop('requisition_logs');
        Schema::drop('questions');
        Schema::drop('answers');
        Schema::drop('used_answers');
        Schema::drop('position_questions');
        Schema::drop('requisition_questions');
        Schema::drop('question_answers');
        Schema::drop('requisition_question_used_answers');
    }

}
