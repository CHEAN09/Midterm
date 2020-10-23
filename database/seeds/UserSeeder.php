<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'lname' => 'Verano',
                'fname' =>  'Karl Andrei',
                'address' => 'Panggangan, Calape, Bohol',
                'phone' => '0912.643.4443',
                'email' => 'verano@email.com',
                'password' => bcrypt('password123')
            ],
            [
                'lname' => 'Lazarus',
                'fname' => 'John Paul',
                'address' => 'Tubigon, Bohol',
                'phone' => '0911.543.1234',
                'email' => 'johnpaul@email.com',
                'password' => bcrypt('password123')
            ],
            [
                'lname' => 'Polinar',
                'fname' => 'Kevin',
                'address' => 'Tagbilaran City, Bohol',
                'phone' => '0393.123.0987',
                'email' => 'kevin@email.com',
                'password' => bcrypt('password123')
            ],
        ];

        foreach($data as $usr) {
            \App\User::create($usr);
        }
    }
}
