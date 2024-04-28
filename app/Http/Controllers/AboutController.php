<?php

namespace App\Http\Controllers;


class AboutController extends Controller
{
    public function index()
    {
        $items = [
            [
                'icon' => '/icons/ic-binoculars.png',
                'title' => 'Visi',
                'description' => 'Menjadi perusahaan yang kompeten dan terpercaya di Kepulauan Riau dalam bidang penyalur bahan bakar minyak Industry khususnya HSD (High Speed Diesel) atau solar.'
            ],
            [
                'icon' => '/icons/ic-rocket.png',
                'title' => 'Misi',
                'description' => 'Memberikan jaminan produk yang legal dan berkualitas, serta penyaluran yang tepat waktu dengan harga yang kompetitif.'
            ]
        ];

        return view('about', compact('items'));
    }
}