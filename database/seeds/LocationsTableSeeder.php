<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            'paren_id' => rand(1,5),
            'address' => str_random(45),
            'latitude' => intval('-' . rand(0,99) . '.' . rand(0,9999999)),
            'longitude' => intval('-' . rand(0,99) . '.' . rand(0,9999999)),
            'level' => rand(0,10),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
