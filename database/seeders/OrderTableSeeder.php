<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create(['orderer_name' => 'X Printing', 'inventory_id' => 1, 'quantity' => 100, 'lead_time' => 3, 'used' => 99]);
        Order::create(['orderer_name' => 'PT Daharga Mulya Printing', 'inventory_id' => 2, 'quantity' => 100, 'lead_time' => 3, 'used' => 99]);
        Order::create(['orderer_name' => 'CV Yon Adi Berkah Jaya', 'inventory_id' => 3, 'quantity' => 100, 'lead_time' => 3, 'used' => 99]);
        Order::create(['orderer_name' => 'General Printing Tbk.', 'inventory_id' => 1, 'quantity' => 100, 'lead_time' => 3, 'used' => 99]);
        Order::create(['orderer_name' => 'Suganda Expert Printing Solution', 'inventory_id' => 1, 'quantity' => 100, 'lead_time' => 3, 'used' => 99]);
    }
}
