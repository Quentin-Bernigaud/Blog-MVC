<?php
require 'app/App.php';
use App\App;
use App\Controller\ArticlesCategoriesController;

define ('ROOT', __DIR__);
App::load();

if (isset($_GET["page"]) && $_GET["page"] == 'home' || !isset($_GET["page"])) {
    $result = new ArticlesCategoriesController();
    $result->home();
} elseif (isset($_GET["page"]) && $_GET["page"] == 'single') {
    $result = new ArticlesCategoriesController();
    $result->single($_GET["id"]);
}