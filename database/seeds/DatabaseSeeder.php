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
        
        // DB::table('courses')->truncate();
        // DB::table('member_projects')->truncate();
        // DB::table('projects')->truncate();
        // DB::table('knowledgeareas')->truncate();
        // DB::table('password_resets')->truncate();
        // DB::table('users')->truncate();

        $this->createKnowledgeareass();
        $this->createCourses();
        
    }

    private function csv_to_array($filename='', $delimiter=';'){

        if(!file_exists($filename) || !is_readable($filename)){
            return FALSE;
        }
            

        $header = NULL;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== FALSE)
        {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE)
            {
                if(!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }
        return $data;
    }

    private function createKnowledgeareass(){
        $csvFile = getcwd().'/database/seeds/cargaKnowledgeareas.csv';
        $areas = $this->csv_to_array($csvFile, ';');
        //var_dump($areas[0]);
        try{
            DB::table('knowledgeareas')->insert($areas);
        }catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    private function createCourses(){
        $csvFile = getcwd().'/database/seeds/cargaCourses.csv';
        $cursos = $this->csv_to_array($csvFile, ';');
        //var_dump($cursos[0]);
        try{
            DB::table('courses')->insert($cursos);
        }catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    /*
    private function createCourses(){
        $max = rand(10, 50);
        for($i=0; $i < $max; $i++):
            DB::table('courses')->insert(
                ['code' => $i, 'name' => 'NOME'.$i, 'area' => 'DEGREE']
            );
        endfor;
    }
    */

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
