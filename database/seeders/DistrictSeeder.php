<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('districts')->delete();
        
        \DB::table('districts')->insert(array (
            0 => 
            array (
                'id' => 101,
                'name' => 'NYARUGENGE',
                'province' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 102,
                'name' => 'GASABO',
                'province' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 103,
                'name' => 'KICUKIRO',
                'province' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 201,
                'name' => 'NYANZA',
                'province' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 202,
                'name' => 'GISAGARA',
                'province' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 203,
                'name' => 'NYARUGURU',
                'province' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 204,
                'name' => 'HUYE',
                'province' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 205,
                'name' => 'NYAMAGABE',
                'province' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 206,
                'name' => 'RUHANGO',
                'province' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 207,
                'name' => 'MUHANGA',
                'province' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 208,
                'name' => 'KAMONYI',
                'province' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 301,
                'name' => 'KARONGI',
                'province' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 302,
                'name' => 'RUTSIRO',
                'province' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 303,
                'name' => 'RUBAVU',
                'province' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 304,
                'name' => 'NYABIHU',
                'province' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 305,
                'name' => 'NGORORERO',
                'province' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 306,
                'name' => 'RUSIZI',
                'province' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 307,
                'name' => 'NYAMASHEKE',
                'province' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 401,
                'name' => 'RULINDO',
                'province' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 402,
                'name' => 'GAKENKE',
                'province' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 403,
                'name' => 'MUSANZE',
                'province' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 404,
                'name' => 'BURERA',
                'province' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 405,
                'name' => 'GICUMBI',
                'province' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 501,
                'name' => 'RWAMAGANA',
                'province' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 502,
                'name' => 'NYAGATARE',
                'province' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 503,
                'name' => 'GATSIBO',
                'province' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 504,
                'name' => 'KAYONZA',
                'province' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 505,
                'name' => 'KIREHE',
                'province' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 506,
                'name' => 'NGOMA',
                'province' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 507,
                'name' => 'BUGESERA',
                'province' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
    }
}
