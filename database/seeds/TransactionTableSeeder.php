<?php

use App\Transaction;
use Illuminate\Database\Seeder;

class TransactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transaction::create([
            'balance' => 1000
        ],
        Transaction::create([
            'balance' => 9500
        ])
    );
    }
}
