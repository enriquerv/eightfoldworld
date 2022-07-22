<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('countries')->truncate();

		DB::table('countries')->insert([
			'name' => 'México'
		]);
    }
}
