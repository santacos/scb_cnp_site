<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();
        $users = array(
            array(
                'username' => 'hiringmanager',
                            'email' => 'test_man2@hotmail.com',
                            'password' => Hash::make('test'),
                            'first' => 'Test2',
                            'last' => 'Man2',
                            'contact_number' => '024686420',
                            'confirmed' => false,
                            'facebook_uid' => '1122334455',
                'confirmation_code' => md5(microtime().Config::get('app.key')),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            
            array(
                'username' => 'hrbp1',
                            'email' => 'test_man31@hotmail.com',
                            'password' => Hash::make('test'),
                            'first' => 'Test3',
                            'last' => 'Man3',
                            'contact_number' => '033333333',
                            'confirmed' => false,
                            'facebook_uid' => '3333333333333',
                'confirmation_code' => md5(microtime().Config::get('app.key')),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
             ),
            array(
                'username' => 'hrbp2',
                            'email' => 'test_man32@hotmail.com',
                            'password' => Hash::make('test'),
                            'first' => 'Test3',
                            'last' => 'Man3',
                            'contact_number' => '033333333',
                            'confirmed' => false,
                            'facebook_uid' => '3333333333333',
                'confirmation_code' => md5(microtime().Config::get('app.key')),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
             ),
            array(
                'username' => 'hrbp3',
                            'email' => 'test_man33@hotmail.com',
                            'password' => Hash::make('test'),
                            'first' => 'Test3',
                            'last' => 'Man3',
                            'contact_number' => '033333333',
                            'confirmed' => false,
                            'facebook_uid' => '3333333333333',
                'confirmation_code' => md5(microtime().Config::get('app.key')),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
             ),
            array(
                'username' => 'hrbp4',
                            'email' => 'test_man34@hotmail.com',
                            'password' => Hash::make('test'),
                            'first' => 'Test3',
                            'last' => 'Man3',
                            'contact_number' => '033333333',
                            'confirmed' => false,
                            'facebook_uid' => '3333333333333',
                'confirmation_code' => md5(microtime().Config::get('app.key')),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
             ),
             array(
                'username' => 'recruiter4',
                            'email' => 'test_man444@hotmail.com',
                            'password' => Hash::make('test'),
                            'first' => 'Test4',
                            'last' => 'Man4',
                            'contact_number' => '044444444',
                            'confirmed' => true,
                            'facebook_uid' => '444444444444',
                'confirmation_code' => md5(microtime().Config::get('app.key')),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
              array(
                'username' => 'recruiter1',
                            'email' => 'test_man411@hotmail.com',
                            'password' => Hash::make('test'),
                            'first' => 'Test4',
                            'last' => 'Man4',
                            'contact_number' => '044444444',
                            'confirmed' => true,
                            'facebook_uid' => '444444444444',
                'confirmation_code' => md5(microtime().Config::get('app.key')),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
               array(
                'username' => 'recruiter2',
                            'email' => 'test_man422@hotmail.com',
                            'password' => Hash::make('test'),
                            'first' => 'Test4',
                            'last' => 'Man4',
                            'contact_number' => '044444444',
                            'confirmed' => true,
                            'facebook_uid' => '444444444444',
                'confirmation_code' => md5(microtime().Config::get('app.key')),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
                array(
                'username' => 'recruiter3',
                            'email' => 'test_man433@hotmail.com',
                            'password' => Hash::make('test'),
                            'first' => 'Test4',
                            'last' => 'Man4',
                            'contact_number' => '044444444',
                            'confirmed' => true,
                            'facebook_uid' => '444444444444',
                'confirmation_code' => md5(microtime().Config::get('app.key')),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
              array(
               'username' => 'candidate1',
                            'email' => 'test_man1111@hotmail.com',
                            'password' => Hash::make('test'),
                            'first' => 'Test',
                            'last' => 'Man',
                            'contact_number' => '012343210',
                            'confirmed' => true,
                            'facebook_uid' => '1234567890',
                'confirmation_code' => md5(microtime().Config::get('app.key')),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
              array(
               'username' => 'candidate2',
                            'email' => 'test_man222222@hotmail.com',
                            'password' => Hash::make('test'),
                            'first' => 'Test',
                            'last' => 'Man',
                            'contact_number' => '012343210',
                            'confirmed' => true,
                            'facebook_uid' => '1234567890',
                'confirmation_code' => md5(microtime().Config::get('app.key')),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
              array(
               'username' => 'candidate3',
                            'email' => 'test_man333333@hotmail.com',
                            'password' => Hash::make('test'),
                            'first' => 'Test',
                            'last' => 'Man',
                            'contact_number' => '012343210',
                            'confirmed' => true,
                            'facebook_uid' => '1234567890',
                'confirmation_code' => md5(microtime().Config::get('app.key')),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
              array(
               'username' => 'candidate4',
                            'email' => 'test_man4444444@hotmail.com',
                            'password' => Hash::make('test'),
                            'first' => 'Test',
                            'last' => 'Man',
                            'contact_number' => '012343210',
                            'confirmed' => true,
                            'facebook_uid' => '1234567890',
                'confirmation_code' => md5(microtime().Config::get('app.key')),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
               array(
                 'username' => 'admin',
                            'email' => 'test_can@hotmail.com',
                            'password' => Hash::make('test'),
                            'first' => 'cTest',
                            'last' => 'cMan',
                            'contact_number' => '11111',
                            'confirmed' => true,
                            'facebook_uid' => '1234567890',
                'confirmation_code' => md5(microtime().Config::get('app.key')),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
                array(
                'username' => 'nexthiringmanager',
                            'email' => 'test_can2@hotmail.com',
                            'password' => Hash::make('test'),
                            'first' => 'c2Test',
                            'last' => 'c2Man',
                            'contact_number' => '22222',
                            'confirmed' => false,
                            'facebook_uid' => '1234567890',
                'confirmation_code' => md5(microtime().Config::get('app.key')),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
                 array(
                 'username' => 'hrbpmanager',
                            'email' => 'test_can3hotmail.com',
                            'password' => Hash::make('test'),
                            'first' => 'c3Test',
                            'last' => 'c3Man',
                            'contact_number' => '33333',
                            'confirmed' => true,
                            'facebook_uid' => '1234567890',
                'confirmation_code' => md5(microtime().Config::get('app.key')),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            )
        );


        DB::table('users')->insert( $users );
    }

}
