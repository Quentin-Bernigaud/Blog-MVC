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

    public function single($articleId) {
        $article = $this->Article->queryArticle($articleId);
        $categories = $this->Categorie->queryCategories();
        return $this->render('global.single', [
            "article" => $article,
            "categories" => $categories
        ]);
    }

    public function delete($articleId) {
        // SQL de suppression
        $this->Article->deleteArticle($articleId);
        return $this->render('global.delete', [
        ]);
    }
}