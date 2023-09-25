<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function type($id)
    {
        $produits = Produit::where('categorie_id', '=', $id)->get();
        return view('categorie', compact('produits'));
    }
}
