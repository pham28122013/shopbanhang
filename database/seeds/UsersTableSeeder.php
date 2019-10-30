<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            User::create([
                'role_id' => $faker->idNumber,
                'name' => $faker->name,
                'phone' =>$faker->phoneNumber, 
                'email' => $faker->safeEmail(),
                'is_active' => $faker->,
                'password' => bcrypt('123'),
            ]);
        }
    }
}
