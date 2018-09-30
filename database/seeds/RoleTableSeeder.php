<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $arrRole = [
            [
                'name' => 'admin',
                'description' => 'role admin of web'
            ],
            [
                'name' => 'web',
                'description' => 'visit'
            ],
        ];
        DB::table('role')->insert($arrRole);
    }
}
