<?php

use Illuminate\Database\Seeder;
use App\transactions;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        transactions::create([
            'balance' => 1000,
        ]);
    }
}
