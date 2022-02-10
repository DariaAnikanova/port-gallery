<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Photo;
use File;

class PhotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Photo::truncate();

        $json = File::get("database/data/landscapes.json");
        $photos = json_decode($json, true);

       foreach ($photos['album'] as $key => $value) {
           Photo::create([
               "id" => $value['id'],
               "title" => $value['title'],
               "img" => $value['img'],
               "description" => $value['description'],
               "date" => $value['date'],
               "featured" => $value['featured'],
           ]);
       }
    }
}
