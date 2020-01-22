<h1 class='text-center mt-5'>Actualité</h1>

<div class="container">
    <div class="row">
        <?php foreach ($articles as $article): ?>
        <div class="col-sm">
            <!-- <a class="h2" href="index.php?page=single&id=<?=$article["id"]?>">
                <p><?= $article["title"] ?></p>
            </a> -->
            <div class="card" style="width: 21rem; margin: 50px 0 25px 0;">
                <img src="<?=$article["image"]?>" class="card-img-top" alt="<?= $article["title"] ?>">
                <div class="card-body">
                    <h5 class="card-title">
                        <a class="stretched-link" href="index.php?page=single&id=<?=$article["id"]?>">
                            <?= $article["title"]?>
                        </a>
                    </h5>
                    <h6 class="card-subtitle mb-2 text-muted text-uppercase">
                        <!-- <a href="index.php?page=single&categorie_id=<?=$article["categorie_id"]?>"> -->
                            <?= $article["categorie_id"]?>
                        <!-- </a> -->
                    </h6>
                    <!-- <p class="card-text"><?= $article["text"]?></p> -->
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>