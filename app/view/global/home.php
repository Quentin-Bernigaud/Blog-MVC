<h1 class='text-center mt-5 mb-5'>Actualité</h1>

<div class="container">
    <div class="row">
        <div class="col-sm-9">
            <?php foreach ($articles as $article): ?>
            <div class="col-sm">
                <!-- <a class="h2" href="index.php?page=single&id=<?=$article["id"]?>">
                    <p><?= $article["title"] ?></p>
                </a> -->
                <div class="card" style="width: 50rem; margin-bottom: 25px;">
                    <img src="<?=$article["image"]?>" class="card-img-top" alt="<?= $article["title"] ?>">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a class="stretched-link" href="index.php?page=single&id=<?=$article["id"]?>">
                                <?= $article["title"]?>
                            </a>
                        </h5>
                        <div class="d-flex justify-content-between">
                            <h6 class="card-subtitle mb-2 text-muted text-uppercase">
                                <!-- <a href="index.php?page=single&categorie_id=<?=$article["categorie_id"]?>"> -->
                                <?= $article["titre"]?>
                                <!-- </a> -->
                            </h6>
                            <h6 class="card-subtitle mb-2 text-muted text-right">
                                <?= $article["date"]?>
                            </h6>
                        </div>
                        <p class="card-text"><?= substr($article["text"], 0, 150)?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="col-sm-3">
            <h4>Catégories</h4>
            <ul class="list-group">
                <?php foreach ($categories as $categorie): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?= $categorie["titre"]?>
                    <span class="badge badge-light badge-pill" style="background: #C5A459; color: white">
                        <?= $categorie["nbref"]?>
                    </span>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>