<html>

<?php require_once('views\MPC_Head.php'); ?>

<body>
    <?php include_once('views\MPC_Banner.php'); ?>
    <div class="p-3 mb-2 bg-info text-dark bg-opacity-10">
        <div class="recette">
           
            <img src="public\image\poischicheimage.jpg">

        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary" href="#" role="button">sucré</a>
            <a class="btn btn-primary" href="#" role="button">chocolat</a>
            <a class="btn btn-primary" href="#" role="button">cookies</a>
            <a class="btn btn-primary" href="#" role="button">confort food</a>
            <a class="btn btn-primary" href="#" role="button">avoine</a>

        </div>

        <div>
            <img src="public\image\currypoischiche.jpg" class="img-fluid" alt="image de la recette">
            <p class="text-md-start" class="fs-5" class="lh-sm">Texte de la recette</p>
            <p class="text-md-start" class="fs-5" class="lh-sm">Instructions</p>
        </div>

    </div>
    <?php include_once('views\MPC_Footer.php'); ?>
</body>

</html>