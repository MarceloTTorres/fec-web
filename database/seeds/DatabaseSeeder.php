<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
        // $this->call(UsersTableSeeder::class);
        
        /*
        DB::table('curses')->truncate();
        DB::table('member_projects')->truncate();
        DB::table('projects')->truncate();
        DB::table('knowledgeareas')->truncate();
        DB::table('password_resets')->truncate();
        
        DB::table('users')->truncate();

        $this->createUsers();
        */
    }

    private function createUsers(){
        $max = rand(100, 300);
        for($i=0; $i < $max; $i++):
            return User::create([
                'id' => $index
                ,'name' =>'name '. $index
                ,'email' => 'email' . $index . '@xpto.com'
                ,'email_verified_at' => $index
                ,'password' =>'password '. $index
                ,'type' =>'type '. $index
                ,'photo' =>'photo '. $index
                ,'ra' =>'ra '. $index
                ,'curse_id' =>'curse_id '. $index
            ]);
        endfor;
    }

}
