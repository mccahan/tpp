<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{

    protected $tables = [
        'users'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->cleanDatabase();

        Model::unguard();
        

        $this->call('UserTableSeeder');

        Model::reguard();
    }


    private function cleanDatabase()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        
        foreach ($this->tables as $tableName)
        {

            DB::table($tableName)->truncate();

        }
        
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

    }
}
