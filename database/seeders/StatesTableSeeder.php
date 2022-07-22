<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('states')->truncate();

		DB::table('states')->insert([
			'country_id' => 1,
			'name' => 'Estado de México'
		]);
    }
}
