<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('cities')->truncate();

		DB::table('cities')->insert([
			'state_id' => 1,
			'name' => 'Cuautitlán Izcalli'
		]);
    }
}
