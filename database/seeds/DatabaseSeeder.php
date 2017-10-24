<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    private $tabels = [
        'committees',
        'positions',
        'users',
    ];

    public function run()
    {
        $this->cleanDatabase();
        $this->call(CommitteesTableSeeder::class);
        $this->call(PositionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }

    public function cleanDatabase()
    {
        foreach ($this->tabels as $tabelName) {
            DB::table($tabelName)->truncate();
        }
    }
}
