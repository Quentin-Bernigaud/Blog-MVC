<h1 class='text-center mt-5  text-uppercase'><?= $article["title"] ?></h1>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="col-sm">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent">
                        <li class="breadcrumb-item"><a href="/blog/" style="color: #6c757d">Actualités</a></li>
                        <li class="breadcrumb-item"><a href="/blog/?categorie=<?= $article["categorie_id"]?>" style="color: #6c757d"><?= $article["titre"]?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $article["title"]?></li>
                    </ol>
                </nav>
                <img src="<?=$article["image"]?>" class="img-fluid" alt="<?=$article["title"]?>">
                <div class="d-flex justify-content-between mt-3">
                    <div class="card-subtitle mb-2 text-muted text-uppercase font-weight-bold font-italic h6">
                        <a href='index.php?page=single&categorie_id=<?=$article["categorie_id"]?>'
                            style="color: #C5A459">
                            <?= $article["titre"]?>
                        </a>
                    </div>
                    <h6 class="card-subtitle mb-2 text-muted text-right">
                        <?= $article["date"]?>
                    </h6>
                </div>
                <p class="text-justify"><?= $article["text"]?></p>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <a href="/blog/">
            <button type="button" class="btn btn-outline-dark">Voir les autres articles</button>
        </a>
    </div>
</div>