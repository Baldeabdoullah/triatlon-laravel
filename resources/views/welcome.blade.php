@extends('layouts.app')
@section('content')
    <!--hero section-->
    <section class="py-3">
        <div class="container">
            <div class="row text-start d-flex align-items-center">
                <div class="col-md-5">
                    <h1 class="fw-bold my-4 fs-2">
                        Donnez a votre entrainement <br />
                        un nouveau style
                    </h1>
                    <p class="lead my-4">
                        Une gamme de produits varie pour les professionnel sportif mais
                        aussi pour les amateurs et les passionnée de mode
                    </p>

                    <button class="btn btn-lg btn-primary rounded-pill">
                        <a href="#" class="text-light text-decoration-none"> Explorez</a>
                    </button>
                </div>
                <div class="col-md-7 d-flex justify-content-end">
                    <img src="{{ asset('images') }}/menu2.jpg" alt="" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>

    <!--Produits vedette-->

    <section class="py-5 text-center">
        <div class="container">
            <h2 class="fw-bolder my-3">Cathegories vedettes</h2>
            <div class="row g-4">
                @foreach ($categories as $categorie)
                    <div class="col-sm-4 hoover-item">
                        <img src="{{ asset('/storage/' . $categorie->image) }}" alt="" class="img-fluid" />
                        <p class="fw-bold py-1">
                            <a href="{{ route('type', $categorie->id) }}"
                                class="text-decoration-none text-dark">{{ $categorie->name }}</a>
                        </p>
                    </div>
                @endforeach


            </div>
        </div>
    </section>

    <!--Meilleurs ventes  -->
    <section class="py-5 text-center">
        <div class="container">
            <h2 class="fw-bolder my-3">Meilleurs ventes</h2>
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

    <!--nouveaute  -->
    <section class="py-5 text-center">
        <div class="container">
            <h2 class="fw-bolder my-3">Nouveautées</h2>

            <div class="row g-4">
                @foreach ($lastproducts as $lastproduct)
                    <div class="col-sm-3">
                        <img src="{{ '/storage/' . $lastproduct->image1 }}" alt="" class="img-fluid" />
                        <p class="fw-bold">
                            <a href="{{ route('produit.show', [$lastproduct->id, $lastproduct->categorie->id]) }}"
                                class="text-decoration-none text-dark">{{ $lastproduct->name }}</a>
                        </p>
                        <div class="d-flex justify-content-center etoile">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                            <i class="bi bi-star"></i>
                        </div>
                        <p>{{ $lastproduct->price }} FCFA</p>
                    </div>
                @endforeach

            </div>


        </div>
    </section>

    <!-- EXCLUSIVITE -->
    <section class="py-5">
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-5 d-flex justify-content-center">
                    <img src="./images/exclusive.png" alt="" class="img-fluid w-75">
                </div>

                <div class="col-lg-7">
                    <h2 class="fw-bolder my-4">Smart Band</h2>
                    <figcaption class="blockquote-footer mt-1">
                        exclusivement disponible sur Triatlon store
                    </figcaption>
                    <p class="my-3">Le Mi Smart Band 4 dispose d'un écran de 39,95%
                        plus grand que sont prédécesseur <br> ( Le Mi Smart Band 4 )
                        Ecran tactile coloré avec Amoled avec luminositée réglable</p>
                    <a href="#" class="btn btn-success btn-lg rounded-pill">Voir</a>
                </div>
            </div>
        </div>
    </section>

    <!--Temoignage-->
    <section class=" py-5">

        <div class="container my-5 px-5">

            <h3 class="fw-bolder text-center my-3">Les Avis</h3>
            <div class="row text-center g-1">

                <div class="col-lg-4 user-item px-5  py-2 ">

                    <i class="bi bi-quote "></i>
                    <p>En tant qu'athlète professionel
                        j'utlilise le matériel de Triatlon.

                    </p>
                    <div class="user-star">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                        <i class="bi bi-star"></i>
                    </div>

                    <img src="./images/user/user.jpg" class="img-fluid rounded-circle w-25 my-1" alt="">

                    <p class="fw-bolder">Omar</p>

                </div>

                <div class="col-lg-4 user-item px-5  py-2 ">

                    <i class="bi bi-quote"></i>
                    <p>Un Service clientèle au top. Rapidité de livraison.
                        La qualité des produits.
                    </p>
                    <div class="user-star">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                        <i class="bi bi-star"></i>
                    </div>

                    <img src="./images/user/user1.jpg" class="img-fluid rounded-circle w-25 my-1" alt="">

                    <p class="fw-bolder">Karim</p>


                </div>

                <div class="col-lg-4 user-item px-5 py-2 ">


                    <i class="bi bi-quote"></i>
                    <p>Un Service clientèle au top. Rapidité de livraison.
                        La qualité des produits.
                    </p>
                    <div class="user-star">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                        <i class="bi bi-star"></i>
                    </div>

                    <img src="./images/user/user3.jpg" class="img-fluid rounded-circle w-25 my-1" alt="">

                    <p class="fw-bolder">Leila</p>

                </div>

            </div>

        </div>


    </section>

    <!--partners-->
    <section class="py-5">
        <h3 class="text-center fw-bolder my-3">Nos partenaires</h3>
        <div class="container my-5">
            <div class=" partners-img-container">
                <img class="mx-1" src="./images/logo-coca-cola.png" alt="">
                <img class="mx-1" src="./images/logo-godrej.png" alt="">
                <img class="mx-1" src="./images/logo-oppo.png" alt="">
                <img class="mx-1" src="./images/logo-paypal.png" alt="">
                <img class="mx-1" src="./images/logo-philips.png" alt="">
                <img class="mx-1" src="./images/logo-white.png" alt="">
            </div>
        </div>

    </section>
@endsection
