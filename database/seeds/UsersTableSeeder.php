<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 100; $i++) {
            $name = "{$faker->firstName}-{$faker->lastName}";
            $fileName = "{$name}.jpg";
            $image = $faker->image(null, 100, 100);
            Storage::disk('local')->put($fileName, File::get($image));
            \DB::table('users')->insert([
                'name' => $faker->firstName(),
                'email' => $faker->email,
                'password' => bcrypt('secret'),
                'description' => $faker->text(500),
                'avatar' => $fileName,
            ]);
        }
    }
}
