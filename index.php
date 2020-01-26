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
} elseif (isset($_GET["page"]) && $_GET["page"] == 'delete') {
    $result = new ArticlesCategoriesController();
    $result->delete($_GET["id"]);
} elseif (isset($_GET["page"]) && $_GET["page"] == 'edit') {
    $result = new ArticlesCategoriesController();
    $result->edit($_GET["id"]);
} elseif (isset($_POST["page"]) && $_POST["page"] == 'edit') {
    $result = new ArticlesCategoriesController();
    $result->update($_POST["id"], $_POST["title"] ,$_POST["text"] ,$_POST["date"] ,$_POST["categorie_id"] );
} elseif (isset($_GET["page"]) && $_GET["page"] == 'create') {
    $result = new ArticlesCategoriesController();
    $result->create();
} elseif (isset($_POST["page"]) && $_POST["page"] == 'create') {
    $result = new ArticlesCategoriesController();
    $result->insert($_POST["title"] ,$_POST["text"] ,$_POST["date"] ,$_POST["categorie_id"] );
}