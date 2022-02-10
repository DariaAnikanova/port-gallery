<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use File;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $json = File::get("database/data/landscapes.json");
        $data = json_decode($json);

        User::create([
            "name" => $data->name,
            "phone" => $data->phone,
            "email" => $data->email,
            "bio" => $data->bio,
            "profile_picture" => $data->profile_picture,
        ]);
       
    }
}
