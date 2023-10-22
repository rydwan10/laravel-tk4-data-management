<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EOQController extends Controller
{
    public function index()
    {
        $query = "SELECT
        inventories.name,
        inventories.price,
        inventories.convertion,
        SUM(orders.used) AS D,
        SUM(orders.quantity) AS pesan,
        inventories.storage_cost AS H,
        ROUND(
            AVG(
                inventories.price * orders.quantity
            ),
            2
        ) AS C,
        ROUND(
            AVG(orders.quantity),
            3
        ) AS R,
        ROUND(
            SQRT(
                (
                    2 * (
                        AVG(
                            inventories.price * orders.quantity
                        )
                    ) * SUM(orders.used)
                ) / AVG(inventories.storage_cost)
            ),
            3
        ) AS EOQ,
        (
            SUM(orders.quantity) * inventories.convertion
        ) AS kuantitas,
        ROUND(
            (
                Sum(orders.used)
            ) / SQRT(
                (
                    2 * (
                        AVG(
                            inventories.price * orders.quantity
                        )
                    ) * SUM(orders.used)
                ) / AVG(inventories.storage_cost)
            ),
            3
        ) AS pembelian_optimum,
        ROUND(
            (
                360 / (
                    (
                        Sum(orders.used)
                    ) / SQRT(
                        (
                            2 * (
                                AVG(
                                    inventories.price * orders.quantity
                                )
                            ) * SUM(orders.used)
                        ) / AVG(inventories.storage_cost)
                    )
                )
            ),
            3
                ) AS daur_pembelian
        FROM
            inventories
        INNER JOIN orders ON orders.inventory_id = inventories.id
        GROUP BY
            inventories.name";

        $results = DB::select($query);

        return view('pages.eoq.eoq-index', compact('results'));
    }
}
