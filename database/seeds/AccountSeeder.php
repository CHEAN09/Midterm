<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
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
                'user_id' => 1,
                'acct_name' => 'Vereno B. Regular Account',
                'init_invest' => 200000,
                'start_date' => '2020-04-12',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' =>  2,
                'acct_name' => 'Lazarus B. Regular Account',
                'init_invest' => 100000,
                'start_date' => '2020-06-15',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' => 3,
                'acct_name' => 'Polinar B. Regular Account',
                'init_invest' => 150000,
                'start_date' => '2020-06-26',
                'remarks' => 'Done with normal transaction'
            ],
        ];

        foreach($data as $acc) {
            \App\Account::create($acc);
        }
    }
}