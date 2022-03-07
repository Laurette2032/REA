<html>

<?php require_once('views\MPC_Head.php'); ?>

<body>

<?php
print_r($recipeAll);
?> -->
    </pre>
    -->

    <ul class="list-group">
       
        <li class="list-group-item list-group-item-primary" a href="#" class="list-group-item list-group-item-action">Recette 1</li>
        <li class="list-group-item list-group-item-secondary">Recette 2</li>
        <li class="list-group-item list-group-item-primary">Recette</li>
        <li class="list-group-item list-group-item-secondary">Recette</li>
        <li class="list-group-item list-group-item-primary">Recette</li>
        <li class="list-group-item list-group-item-secondary">Recette</li>
    </ul>

    <button onclick="setTimeout(popup, 2000);">J'ai faim ! </button>

    <script>
        function popup() {
            alert('Hello! Bienvenue sur le site Même Pois chiche ! Bonne navigation)')
        }
    </script>

    <script>
        function timeOfDay(heure) {
            if (heure >= 0 && heure < 24) {
                if (heure < 12) {
                    console.log("c'est l'heure du petit déjeuner");
                } else if (heure < 18) {
                    console.log("c'est l'après-midi: l'heure des cookies");
                } else {
                    console.log("il ne faudrait pas préparer le repas ?");
                }
            } else {
                console.log("vous vous êtes trompé de planète, cette heure ci c'est sur Mars (et ça repart)");
            }
        }

        timeOfDay(10.31);
    </script>

    <script>
        let button = document.querySelector("button");
        let p = document.querySelector("p");
        let compteur = 0;

        button.addEventListener("click", function() {
            p.textContent = compteur++;
        })
    </script>

</body>

</html>

<?php include_once('views\MPC_Footer.php'); ?>