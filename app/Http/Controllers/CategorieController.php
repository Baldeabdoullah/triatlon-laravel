<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $imageName = $request->image->store('posts');
        Categorie::create([
            'name' => $request->name,
            'image' => $imageName
        ]);

        return redirect()->route('dashboard')->with('success', 'votre categorie a été crée');
    }

    public function edit($id)
    {
        $categorie = Categorie::findOrFail($id);
        return view('categories.edit', compact('categorie'));
    }

    public function update(Request $request, $id)
    {
        $categorie = Categorie::findOrFail($id);
        $updatecategorie = ([
            'name' => $request->name,
        ]);

        if ($request->image != null) {
            $imageName = $request->image->store('posts');

            $updatecategorie = array_merge($updatecategorie, [
                'image' => $imageName,
            ]);
        }

        $categorie->update($updatecategorie);

        return redirect()->route('dashboard')->with('success', 'votre categorie  a été modifié');
    }


    public function destroy(Request $request, $id)
    {
        $categorie = Categorie::findOrFail($id);
        $categorie->delete();
        return redirect()->route('dashboard')->with('success', 'votre categorie a été suprimé');
    }
}
