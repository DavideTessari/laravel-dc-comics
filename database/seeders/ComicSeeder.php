<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = include(database_path('seeders/comic.php'));

        foreach ($comics as $comicData) {
            Comic::create([
                'title' => $comicData['title'],
                'description' => $comicData['description'],
                'thumb' => $comicData['thumb'],
                'price' => $comicData['price'],
                'series' => $comicData['series'],
                'sale_date' => $comicData['sale_date'],
                'type' => $comicData['type'],
            ]);
        }
    }
}
