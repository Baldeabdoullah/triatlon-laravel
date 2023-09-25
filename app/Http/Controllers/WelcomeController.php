<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class WelcomeController extends Controller
{
    public function index()
    {
        //produits
        $produits = Produit::inRandomOrder()->limit(4)->get();
        $lastproducts = Produit::paginate(4);

        //categories
        $categories = Categorie::all();
        return view('welcome', compact('produits', 'lastproducts', 'categories'));
    }

    // public function last()
    // {
    // }
}
