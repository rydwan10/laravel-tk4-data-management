<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Order;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $roleCount = Role::all()->count();
        $userCount = User::all()->count();
        $inventoryCount = Inventory::all()->count();
        $orderCount = Order::all()->count();

        return view('pages.dashboard-general-dashboard', compact('roleCount', 'userCount', 'inventoryCount', 'orderCount'));
    }
}
