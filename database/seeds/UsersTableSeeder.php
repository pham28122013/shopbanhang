<?php
use App\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

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
                'role_id' => $faker->ean8,
                'name' => $faker->userName,
                'phone' => $faker->phoneNumber,
                'password' => $faker->password,
                'remember_token' => str_random(10)
            ]);
        }
    }
}
