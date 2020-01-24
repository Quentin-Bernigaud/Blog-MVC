<?php if ( $filtreCategorie >= 0 ) {
    $categorieDuFiltre=array_filter($categories, function($categorie) use ($filtreCategorie) {
        return $categorie['id'] == $filtreCategorie;
    }
    );
    $filtreCategorieName = $categorieDuFiltre[array_keys($categorieDuFiltre)[0]]['titre'];
 } else {
    $filtreCategorieName = "";
} ?>

<h1 class='text-center mt-5 mb-5 text-uppercase'>
    <?php $actu = "Actualités"?>
    <?php if ( $filtreCategorie <= 0 ) { ?><?=$actu?><?php }?>  
    <?php if ( $filtreCategorie > 0 ) { ?><?=$filtreCategorieName?><?php }?>
</h1>

<div class="container">
    <div class="row">
        <div class="col-sm-9">
            <?php foreach ($articles as $article):
                if ( $filtreCategorie < 0  || $article["categorie_id"] == $filtreCategorie) {?>
            <div class="col-sm">
                <div class="card" style="width: 50rem; margin-bottom: 25px;">
                    <img src="<?=$article["image"]?>" class="card-img-top" alt="<?= $article["title"] ?>">
                    <div class="card-body">
                        <div class="card-title h5">
                            <a class="stretched-link" href="index.php?page=single&id=<?=$article["id"]?>" style="color: #0097D7">
                                <?= $article["title"]?>
                            </a>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="card-subtitle mb-2 text-muted text-uppercase font-weight-bold font-italic h6">
                                <a href='index.php?page=single&categorie_id=<?=$article["categorie_id"]?>' style="color: #C5A459">
                                    <?= $article["titre"]?>
                                </a>
                            </div>
                            <h6 class="card-subtitle mb-2 text-muted text-right">
                                <?= $article["date"]?>
                            </h6>
                        </div>
                        <p class="card-text"><?= substr($article["text"], 0, 150)?>...</p>
                    </div>
                </div>
            </div>
            <?php }
             endforeach; ?>
        </div>
        <div class="col-sm-3">
            <h4 class="mb-3">Catégories</h4>
            <ul class="list-group">
                <?php foreach ($categories as $categorie): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href='/blog/?categorie=<?= $categorie["id"]?>' style='color: #0F2439'> <?= $categorie["titre"]?> </a>
                    <span class="badge badge-light badge-pill" style="background: #C5A459; color: white">
                        <?= $categorie["nbref"]?>
                    </span>
                </li>
                <?php endforeach; ?>
                <?php if ( $filtreCategorie >=0 ) { ?>
                <br>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="/blog/" type="button" class="font-weight-bold font-italic" style="color: #0F2439">× Annuler le filtre</a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>