<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'admin', 'description' => 'Administrator role with full access.']);
        Role::create(['name' => 'manager', 'description' => 'Manager role']);
        Role::create(['name' => 'supplier_ordering', 'description' => 'Order to supplier role']);
        Role::create(['name' => 'warehouse', 'description' => 'Warehouse role']);
        Role::create(['name' => 'orderer', 'description' => 'Orderer role']);
    }
}
