<!DOCTYPE html>

<?php require_once('MPC_Head.php'); ?>

<body>
    <?php include_once('views\MPC_Banner.php'); ?>
    <h2>Bienvenue</h2>

    <button onclick="setTimeout(popup, 2000);">J'ai faim ! </button>

    <script>
        function popup() {
            alert('Hello! Bienvenue sur le site Même Pois chiche ! Bonne navigation)')
        }
    </script>


    <div class="p-3 mb-2 bg-info text-dark bg-opacity-10">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="public\image\currypoischiche.jpg" class="d-block w-100" alt="image ">
                </div>
                <div class="carousel-item">
                    <img src="public\image\cookiedough.jpg" class="d-block w-100" alt="image ">
                </div>
                <div class="carousel-item">
                    <img src="public\image\houmous.jpg" class="d-block w-100" alt="image ">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
            </button>
        </div>

        <div>
            <label for="basic-url" class="form-label">Inscription à la newsletter</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">Envoi</span>
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
            </div>

        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <img src="public\image\houmous.jpg" class="card-img-top" alt="image de la recette">
                        <h5 class="card-title">Recette 1</h5>
                        <p class="card-text">contexte de la recette</p>
                        <a href="#" class="btn btn-primary">Continuer à lire ... </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <img src="public\image\houmous.jpg" class="card-img-top" alt="image de la recette">
                        <h5 class="card-title">Recette 2</h5>
                        <p class="card-text">contexte de la recette</p>
                        <a href="#" class="btn btn-primary">ça aussi ça à l'air bon </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <?php include_once('views\MPC_Footer.php'); ?>
</body>

</html>