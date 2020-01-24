<?php
namespace app\controller;
class ArticlesCategoriesController extends AppController {
    public function __construct() {
        $this->loadModels('Article', 'Categorie');
    }

    public function home($filtreCategorie) {
        $articles = $this->Article->queryArticles();
        $categories = $this->Categorie->queryCategories();
        return $this->render('global.home', [
            "articles" => $articles,
            "categories" => $categories,
            "filtreCategorie" => $filtreCategorie
        ]);
    }
}