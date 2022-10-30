<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    $cloth = [
        [
           'name' => 'HEATTECH T-Shirt Fleece Kerah Turtle Lengan Panjang',
           'image' => 'https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/442063/sub/goods_442063_sub14.jpg?width=1600&impolicy=quality_75',
           'price' => 'Rp199.000,00',
           'gender' => 'Wanita'
        ],
        [
            'name' => 'T-Shirt Soft Touch Kerah Bulat Lengan Panjang',
            'image' => 'https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/450179/sub/goods_450179_sub14.jpg?width=1600&impolicy=quality_75',
            'price' => 'Rp200.000,00',
            'gender' => 'Pria'
        ],
        [
            'name' => 'Jaket Parka Ultra Light Down UNIQLO and JW ANDERSON',
            'image' => 'https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/452173/sub/goods_452173_sub14.jpg?width=1600&impolicy=quality_75',
            'price' => 'Rp1.199.000,00',
            'gender' => 'Pria'
        ],
        
        [
            'name' => 'Jaket Tweed UNIQLO / INES DE LA FRESSANGE',
            'image' => 'https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/452226001/sub/goods_452226001_sub14.jpg?width=1600&impolicy=quality_75',
            'price' => 'Rp1.290.000,00',
            'gender' => 'Wanita'
        ],
        [
            'name' => 'Celana Ultra Light 2-Way Stretch (Wool Like)',
            'image' => 'https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/447780/sub/goods_447780_sub14.jpg?width=1600&impolicy=quality_75',
            'price' => 'Rp499.000,00',
            'gender' => 'Pria'
        ],
        [
            'name' => 'Celana Pendek Smart Lipit',
            'image' => 'https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/452888/sub/goods_452888_sub14.jpg?width=1600&impolicy=quality_75',
            'price' => 'Rp299.000,00',
            'gender' => 'Wanita'
        ],
        
        [
            'name' => 'Jaket Kemeja Luaran',
            'image' => 'https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/449618/sub/goods_449618_sub14.jpg?width=1600&impolicy=quality_75',
            'price' => 'Rp799.000,00',
            'gender' => 'Pria'
        ],
        [
            'name' => 'Jaket Denim Crop',
            'image' => 'https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/450531/sub/goods_450531_sub14.jpg?width=1600&impolicy=quality_75',
            'price' => 'Rp499.000,00',
            'gender' => 'Wanita'
        ]
     ];

    return view('home', compact('cloth'));
});