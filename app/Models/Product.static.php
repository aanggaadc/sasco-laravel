<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class ProductStatic
{
    // use HasFactory;
    private static $product = [
        [
            "id" => 1,
            "name" => "Solar",
            "description" => "Minyak solar ialah fraksi minyak bumi berwarna kuning coklat yang jernih yang mendidih sekitar 175-370° C dan yang digunakan sebagai bahan bakar mesin diesel. Umumnya, solar mengandung belerang dengan kadar yang cukup tinggi.",
            "image" => "/images/produk/solar.jpg",
        ],
        [
            "id" => 2,
            "name" => "MGO",
            "description" => "Marine Gas Oil (MGO 5) adalah High Speed Motor Fuel (HSD). Bahan bakar ini memiliki titik tuang yang rendah dan karenanya stabil dalam suhu dingin. MGO 5 sangat cocok untuk kapal yang dipergunakan di daerah subtropis atau musim dingin. ",
            "image" => "/images/produk/mgo.jpg",
        ],
        [
            "id" => 3,
            "name" => "Pertadex",
            "description" => "Pertamina Dex, adalah bahan bakar minyak non subsidi jenis diesel yang dirancang untuk merespon berkembangnya kendaraan diesel yang membutuhkan performa mesin lebih baik serta ramah lingkungan.",
            "image" => "/images/produk/pertadex.jpg",
        ],
        [
            "id" => 4,
            "name" => "Dexlite",
            "description" => "Dexlite - MyPertamina. Merupakan varian bahan bakar diesel yang memiliki angka Cetane minimal 51 dan mengandung Sulfur maksimal 1200 ppm, artinya Dexlite adalah jenis bahan bakar diesel yang menghasilkan emisi yang ramah lingkungan serta pemakaian yang irit.",
            "image" => "/images/produk/dexlite.jpg",
        ],

    ];

    public static function all()
    {
        return self::$product;
    }
}
