<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index()
    {
        $produits = Produit::all();

        return view('produits.index', compact('produits'));
    }

    public function create()
    {
        $categories = Categorie::all();
        return view('produits.create', compact('categories'));
    }

    public function store(Request $request)
    {

        // $produits = Produit::all();
        $image1Name = $request->image1->store('posts');
        $image2Name = $request->image2->store('posts');
        $image3Name = $request->image3->store('posts');

        Produit::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image1' => $image1Name,
            'image2' => $image2Name,
            'image3' => $image3Name,
            'categorie_id' => $request->categorie_id
        ]);

        return redirect()->route('dashboard')->with('success', 'votre produit a été crée');
    }

    public function show($id, $categorie_id)
    {
        $produit  = Produit::findOrFail($id);
        $produitscategories = Produit::where('categorie_id', '=', $categorie_id)->inRandomOrder()->limit(4)->get();
        return view('produits.show', compact('produit', 'produitscategories'));
    }

    public function edit($id)
    {
        $produit = Produit::findOrFail($id);
        $categories = Categorie::all();
        return view('produits.edit', compact('produit', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $produit = Produit::findOrFail($id);
        $updateproduct = ([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'categorie_id' => $request->categorie_id,
        ]);

        if ($request->image1 && $request->image2 && $request->image3  != null) {
            $imageName1 = $request->image1->store('posts');
            $imageName2 = $request->image2->store('posts');
            $imageName3 = $request->image3->store('posts');
            $updateproduct = array_merge($updateproduct, [
                'image1' => $imageName1,
                'image2' => $imageName2,
                'image3' => $imageName3,
            ]);
        }

        $produit->update($updateproduct);

        return redirect()->route('dashboard')->with('success', 'votre produit  a été modifié');
    }

    public function destroy(Request $request, $id)
    {
        $produit = Produit::findOrFail($id);
        $produit->delete();
        return redirect()->route('dashboard')->with('success', 'votre produit  a été suprimé');
    }
}
