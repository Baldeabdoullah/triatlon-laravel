// les produits en detail

const current = document.querySelector("#current");
const imgs = document.querySelectorAll(".imgs img");

// evenement click

imgs.forEach((img) => img.addEventListener("click", imgClick));

function imgClick(e) {
    //changeont l'image principale
    current.src = e.target.src;

    // ajoutons l'animation
    current.classList.add("fade-in");
}
