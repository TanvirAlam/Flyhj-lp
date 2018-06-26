<?php

use Illuminate\Database\Seeder;
use App\Option;

class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('options')->delete();

        $faker = Faker\Factory::create();
        foreach (range(1, 10) as $index) {
            DB::table('options')->insert([
                'key' => $faker->randomDigit,
                'value' => $faker->word
            ]);
        }
    }
}
