<?php
require 'app/App.php';
use app\App;
use app\controller\ArticlesCategoriesController;

define ('ROOT', __DIR__);
App::load();

if (isset($_GET["page"]) && $_GET["page"] == 'home' || !isset($_GET["page"])) {
    $result = new ArticlesCategoriesController();
    $result->home(isset($_GET["categorie"]) ? $_GET["categorie"] : -1);
} elseif (isset($_GET["page"]) && $_GET["page"] == 'single') {
    $result = new ArticlesCategoriesController();
    $result->single($_GET["id"]);
}