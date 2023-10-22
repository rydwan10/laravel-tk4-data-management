<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Inventory;

class InventoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Inventory::create(['name' => 'Kertas HVS Ex Tjiwi Kimia 65 x 100', 'price' => 26750, 'storage_cost' => 2500, 'request_period' => 30, 'unit' => 'rim', 'convertion' => 500]);
        Inventory::create(['name' => 'Kertas HVS Ex Tjiwi Kimia 79 x 109', 'price' => 26750, 'storage_cost' => 2500, 'request_period' => 30, 'unit' => 'rim', 'convertion' => 500]);
        Inventory::create(['name' => 'Laser Film A3', 'price' => 26750, 'storage_cost' => 2500, 'request_period' => 30, 'unit' => 'lembar', 'convertion' => 500]);
        Inventory::create(['name' => 'Tinta Cetak Offset', 'price' => 26750, 'storage_cost' => 2500, 'request_period' => 30, 'unit' => 'kaleng', 'convertion' => 500]);
        Inventory::create(['name' => 'Tinta Cetak Offset X332', 'price' => 26750, 'storage_cost' => 2500, 'request_period' => 30, 'unit' => 'kaleng', 'convertion' => 500]);
    }
}
