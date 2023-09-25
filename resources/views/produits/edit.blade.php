@extends('layouts.app')
@section('content')
    <div class="container my-5">

        <form method="post" action="{{ route('produits.update', $produit->id) }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <input type="text" value="{{ $produit->name }}" class="form-control" name="name" placeholder="name">
            </div>

            <div class="mb-3">
                <textarea name="description" placeholder="description" class="form-control" id="" cols="30"
                    rows="10">{{ $produit->description }}</textarea>
            </div>

            <div class="mb-3">
                <input type="number" value="{{ $produit->price }}" name="price" class="form-control" placeholder="prix">
            </div>

            <div class="mb-3">
                <input type="file" class="form-control" name="image1" placeholder="image1">
            </div>

            <div class="mb-3">
                <input type="file" class="form-control" name="image2" placeholder="image2">
            </div>

            <div class="mb-3">
                <input type="file" class="form-control" name="image3" placeholder="image3">
            </div>

            <div class="mb-3">
                <label for="">Categorie</label>
                <select name="categorie_id" id="">
                    @foreach ($categories as $categorie)
                        <option value="{{ $categorie->id }}"
                            {{ $produit->categorie_id === $categorie->id ? 'selected' : '' }}>{{ $categorie->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection
