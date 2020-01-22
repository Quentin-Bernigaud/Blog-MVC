<h1>Accueil</h1>

<?php foreach ($articles as $article): ?>
<a href="index.php?page=single&id=<?=$article["id"]?>"><p><?= $article["title"] ?></p></a>
<?php endforeach; ?>
