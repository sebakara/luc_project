<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model; 

// use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->call([
    		ProvinceSeeder::class,
    		DistrictSeeder::class,
    		SectorSeeder::class,
    		CellSeeder::class,
    		VillageSeeder::class]);
    }
}
