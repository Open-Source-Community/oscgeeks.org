<?php

use Illuminate\Database\Seeder;


class CommitteesTableSeeder extends Seeder
{

    public function run()
    {
        $committees = ['Linux', 'Web', 'English Heroes', 'Blender', 'PR', 'FR', 'LR', 'CCC', 'Artwork'];
        foreach (range(0, count($committees)-1) as $index) {
            \App\Committee::create([
                'name' => $committees[$index],
            ]);
        }
    }
}
