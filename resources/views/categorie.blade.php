@extends('layouts.app')
@section('content')
    <section class="my-5">
        <div class="container">
            <h3>Tous les Produits</h3>
        </div>

        <div class="container my-2">
            <!--nouveaute  -->
            <section class="py-5 text-center">
                <div class="container">

                    <div class="row g-4">

                        @foreach ($produits as $produit)
                            <div class="col-sm-3 hoover-item">

                                <img src="{{ asset('/storage/' . $produit->image1) }}" alt="" class="img-fluid" />
                                <p class="fw-bold">
                                    <a href="{{ route('produit.show', [$produit->id, $produit->categorie->id]) }}"
                                        class="text-decoration-none text-dark">{{ $produit->name }}</a>
                                </p>
                                <div class="d-flex justify-content-center etoile">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                                <p>{{ $produit->price }} FCFA</p>
                            </div>
                        @endforeach

                    </div>


                </div>
            </section>
        </div>
    </section>
@endsection
