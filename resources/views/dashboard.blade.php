@extends('layouts.app')

@section('content')
    <div class="container w-50 mx-auto">

        @if (session('success'))
            {{ session('success') }}
        @endif

        <h2 class="text-center">Les produits</h2>

        <h3 class="text-center my-2"><a class="btn btn-primary" href="{{ route('produits.create') }}">Creer un produit</a></h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">image</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produits as $produit)
                    <tr>

                        <th scope="row">{{ $produit->id }}</th>
                        <td>
                            <img src="{{ asset('/storage/' . $produit->image1) }}" width="50px" alt="">
                        </td>
                        <td>{{ $produit->name }}</td>
                        <td class="d-inline-flex">
                            <div class="mx-1">
                                <a class="btn btn-primary" href="{{ route('produits.edit', $produit->id) }}">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                            </div>


                            <div class="mx-1">
                                <form action="{{ route('produits.destroy', $produit->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-dark"
                                        onclick="return confirm('etes vous sure ?')">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>

                                </form>

                            </div>


                        </td>

                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>

    <div class="container w-50 mx-auto">
        <h2 class="text-center">Les categories</h2>
        <h3 class="text-center my-2"><a class="btn btn-primary" href="{{ route('categories.create') }}">Creer une
                castegorie</a>
        </h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">image</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $categorie)
                    <tr>

                        <th scope="row">{{ $categorie->id }}</th>
                        <td>
                            <img src="{{ asset('/storage/' . $categorie->image) }}" width="50px" alt="">
                        </td>
                        <td>{{ $categorie->name }}</td>
                        <td class="d-inline-flex">
                            <div class="mx-1">
                                <a class="btn btn-primary" href="{{ route('categories.edit', $categorie->id) }}">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                            </div>


                            <div class="mx-1">
                                <form action="{{ route('categories.destroy', $categorie->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-dark"
                                        onclick="return confirm('etes vous sure ?')">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>

                                </form>
                            </div>


                        </td>

                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection
