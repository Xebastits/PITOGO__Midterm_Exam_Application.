<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $animes = [
            ['title' => 'Attack on Titan', 'genre' => 'Action/Dark Fantasy', 'episodes' => 89],
            ['title' => 'Fullmetal Alchemist: Brotherhood', 'genre' => 'Adventure/Fantasy', 'episodes' => 64],
            ['title' => 'Death Note', 'genre' => 'Psychological Thriller', 'episodes' => 37],
            ['title' => 'Spirited Away', 'genre' => 'Family/Fantasy', 'episodes' => 1],
            ['title' => 'Jujutsu Kaisen', 'genre' => 'Dark Fantasy/Action', 'episodes' => 47],
        ];

        return view('products', ['products' => $animes]);
    }
}