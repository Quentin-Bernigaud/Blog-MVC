<h1 class='text-center mt-5  text-uppercase'>Modifier l'article</h1>

<form action="index.php" method="post" class="mt-5" style="width: 80%; margin: 0 auto">
    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label col-form-label-lg">Titre</label>
        <div class="col-sm-10">
            <input type="text" name="title" class="form-control form-control-lg" value="<?= $article["title"]?>">
            <input type="hidden" name="page" value="edit">
            <input type="hidden" name="id" value='<?= $article["id"]?>'>
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label col-form-label-lg">Texte</label>
        <div class="col-sm-10">
            <textarea class="form-control" name="text" aria-label="With textarea"
                style="height: 300px;"><?= $article["text"]?></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label col-form-label-lg">Date</label>
        <div class="col-sm-10">
            <input type="date" name="date" class="form-control form-control-lg" value="<?= $article["date"]?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label col-form-label-lg">Catégorie</label>
        <div class="col-sm-10">
            <select name="categorie_id" class="form-control form-control-lg">
                <?php foreach ($categories as $categorie): ?>
                <?php $isselected =  ($categorie["id"] == $article["categorie_id"])? "selected" : "" ;?>
                <option <?= $isselected ?> value='<?=$categorie["id"]?>'><?= $categorie["titre"]?></option>
                <?php endforeach ?>
            </select>
            <!-- <input type="number" class="form-control form-control-lg" value="<?= $article["categorie_id"]?>"> -->
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label col-form-label-lg">Image</label>
        <div class="col-sm-10">
            <input type="url" name="image" class="form-control form-control-lg" value="<?= $article["image"]?>">
        </div>
    </div>
    <div class="container">
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-outline-success mt-5">Mettre à jour l'article</button>
        </div>
    </div>
</form>