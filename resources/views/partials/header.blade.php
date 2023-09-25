 <header class="header">
     <nav class="navbar navbar-expand-lg py-3 ">
         <div class="container">
             <a class="navbar-brand" href="index.html">
                 <img src="{{ asset('images/') }}/logo.png" alt="Bootstrap" width="100" />
             </a>

             <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                 data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                 aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-semibold">
                     <li class="nav-item">
                         <a class="nav-link active" aria-current="page" href="{{ route('welcome') }}">Accueil</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('produits') }}">Produits</a>
                     </li>

                     <li class="nav-item">
                         <a class="nav-link" href="propos.html">A propos</a>
                     </li>

                     <li class="nav-item">
                         <a class="nav-link" href="contacte.html">Contacte</a>
                     </li>

                     <li class="nav-item">
                         <a class="nav-link" href="compte.html">Compte</a>
                     </li>

                     <li class="nav-item">
                         <a class="nav-link">
                             <img src="{{ asset('images/') }}/cart.png" alt="cart" width="22" />
                         </a>
                     </li>
                 </ul>
             </div>
         </div>
     </nav>
 </header>
