<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['title' => 'Harry Potter and the Sorcerer\'s Stone', 'author' => 'J.K. Rowling', 'price' => 799.00],
            ['title' => '13 Reasons Why', 'author' => 'Jay Asher', 'price' => 499.00],
            ['title' => 'Red Queen', 'author' => 'Victoria Aveyard', 'price' => 550.00],
            ['title' => 'Heartstopper: Volume One', 'author' => 'Alice Oseman', 'price' => 650.00],
            ['title' => 'The Song of Achilles', 'author' => 'Madeline Miller', 'price' => 720.00]
        ];
        
        return view('products', ['products' => $products]);
    }
}