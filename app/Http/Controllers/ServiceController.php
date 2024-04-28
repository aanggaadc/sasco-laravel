<?php

namespace App\Http\Controllers;

class ServiceController extends Controller
{
    public function index()
    {
        $items = [
            [
                'title' => '1 Unit',
                'description' => '10000 Liter Truck Tangki',
            ],
            [
                'title' => '2 Unit',
                'description' => '16000 Liter Truck Tangki',
            ],
            [
                'title' => '1 Unit',
                'description' => '24000 Liter Truck Tangki',
            ],
            [
                'title' => '1 Unit',
                'description' => '70000 Liter Storage Tangki Bunker',
            ],
            [
                'title' => '1 Bidang',
                'description' => '4500 m2 lahan dan Jetty',
            ],
            [
                'title' => '3 Unit',
                'description' => 'Kapal',
            ],

        ];

        return view('service', compact('items'));
    }
}
