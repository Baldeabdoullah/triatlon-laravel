<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $produits  = Produit::all();
        $categories = Categorie::all();
        return view('dashboard', compact('produits', 'categories'));
    }
}
