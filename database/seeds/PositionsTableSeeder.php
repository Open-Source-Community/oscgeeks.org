<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class PositionsTableSeeder extends Seeder
{

    public function run()
    {
        $positions = ['President', 'SeniorVicePresident', 'VicePresident', 'Head', 'Member'];
        foreach (range(0, count($positions)-1) as $index) {
            \App\Position::create([
                'name' => $positions[$index],
            ]);
        }
    }
}
