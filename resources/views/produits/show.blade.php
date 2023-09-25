@extends('layouts.app')

@section('content')
    <section class="my-5">
        <div class="container">

            <div class="row detail-container mx-auto ">
                <div class="detail-img-container col-sm-6">
                    <!--Les images-->
                    <div class="main-img">
                        <img src="{{ asset('/storage/' . $produit->image1) }}" alt="" id="current" />
                    </div>
                    <div class="imgs">
                        <img src="{{ asset('/storage/' . $produit->image1) }}" alt="" />
                        <img src="{{ asset('/storage/' . $produit->image2) }}" alt="" />
                        <img src="{{ asset('/storage/' . $produit->image3) }}" alt="" />
                        <!-- <img src="./images/produits/montre8.jpg" alt="" /> -->
                    </div>
                </div>

                <!--La description du produit-->

                <div class="detail-text-container col-sm-6">
                    <p>{{ $produit->categorie->name }}</p>
                    <h3 class="fw-bolder my-3">{{ $produit->name }}</h3>
                    <p class="fw-bolder my-3">{{ $produit->price }} FCFA</p>

                    <p>Quantité</p>

                    <select name="La quantite" id="">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>

                    <a href="#">Ajouter au panier</a>

                    <p class="fw-bolder my-4">Description</p>

                    <p class="my-2">
                        {{ $produit->description }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- RECOMMANDATIONS -->
    <!--Meilleurs ventes  -->
    <section class="py-5 text-center">
        <div class="container">
            <h2 class="fw-bolder my-3">Recommandations</h2>
            <div class="row g-4">

                @foreach ($produitscategories as $produitscategorie)
                    <div class="col-sm-3 hoover-item">
                        <img src="{{ asset('/storage/' . $produitscategorie->image1) }}" alt="" class="img-fluid" />
                        <p class="fw-bold">
                            <a href="{{ route('produit.show', [$produitscategorie->id, $produitscategorie->categorie->id]) }}"
                                class="text-decoration-none text-dark">{{ $produitscategorie->name }}</a>
                        </p>
                        <div class="d-flex justify-content-center etoile">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                            <i class="bi bi-star"></i>
                        </div>
                        <p>{{ $produitscategorie->price }} FCFA</p>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
