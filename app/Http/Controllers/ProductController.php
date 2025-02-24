<?php
// ummm... idk if it working... laravel or composer malfunctioning rn huhuhuhu
//atleast 3rd commit na huhuhu 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ["name" => "Tensura", "category" => "Anime Series", "price" => "$20"],
            ["name" => "Overflow", "category" => "Anime Series", "price" => "$18"],
            ["name" => "Code Geass", "category" => "Anime Series", "price" => "$25"],
            ["name" => "Naruto", "category" => "Anime Series", "price" => "$22"]
        ];

        return view('products', compact('products'));
    }
}
