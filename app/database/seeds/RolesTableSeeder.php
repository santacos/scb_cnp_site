<?php

class RolesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('roles')->delete();

        $Role = new Role;
        $Role->name = 'admin';
        $Role->save();
        $user = User::where('username','=','admin')->first();
        $user->attachRole( $Role );

        $Role = new Role;
        $Role->name = 'Hiring Manager';
        $Role->save();
        $user = User::where('username','=','hiringmanager')->first();
        $user->attachRole( $Role );

        $Role = new Role;
        $Role->name = 'Next Hiring Manager';
        $Role->save();
        $user = User::where('username','=','nexthiringmanager')->first();
        $user->attachRole( $Role );

        $Role = new Role;
        $Role->name = 'HRBP';
        $Role->save();
        $user = User::where('username','=','hrbp1')->first();
        $user->attachRole( $Role );
        $user = User::where('username','=','hrbp2')->first();
        $user->attachRole( $Role );
        $user = User::where('username','=','hrbp3')->first();
        $user->attachRole( $Role );
        $user = User::where('username','=','hrbp4')->first();
        $user->attachRole( $Role );

        $Role = new Role;
        $Role->name = 'HRBP Manager';
        $Role->save();
        $user = User::where('username','=','hrbpmanager')->first();
        $user->attachRole( $Role );

        $Role = new Role;
        $Role->name = 'Recruiter';
        $Role->save();
        $user = User::where('username','=','recruiter1')->first();
        $user->attachRole( $Role );
        $user = User::where('username','=','recruiter2')->first();
        $user->attachRole( $Role );
        $user = User::where('username','=','recruiter3')->first();
        $user->attachRole( $Role );
        $user = User::where('username','=','recruiter4')->first();
        $user->attachRole( $Role );

        $Role = new Role;
        $Role->name = 'Candidate';
        $Role->save();
        $user = User::where('username','=','candidate1')->first();
        $user->attachRole( $Role );
        $user = User::where('username','=','candidate2')->first();
        $user->attachRole( $Role );
        $user = User::where('username','=','candidate3')->first();
        $user->attachRole( $Role );
        $user = User::where('username','=','candidate4')->first();
        $user->attachRole( $Role );

         for($i=5; $i<=100; $i++)
        {   
            $users = array(
                  array(
                 'username' => 'candidate'.$i,
                            'email' => 'candidate'.$i.'@hotmail.com',
                            'password' => Hash::make('test'),
                            'first' => 'first name '.$i,
                            'last' => 'last name '.$i,
                            'contact_number' => '08'.rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9),
                            'confirmed' => true,
                'confirmation_code' => md5(microtime().Config::get('app.key')),
                'created_at' => Carbon::now()->timestamp,
                'updated_at' =>  Carbon::now()->timestamp,
                 )
             );
            DB::table('users')->insert( $users );
            $user=User::where('username','=','candidate'.$i)->first();
            // $this->command->info($user->user_id);
            $user->attachRole( $Role ); 
            $user->save();
           
        }
    }

}
