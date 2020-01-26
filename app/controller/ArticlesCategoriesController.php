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

    public function edit($articleId) {
        $article = $this->Article->queryArticle($articleId);
        $categories = $this->Categorie->queryAllCategories();

        return $this->render('global.edit', [
            "article" => $article,
            "categories" => $categories
        ]);
    }

    // affiche le formulaire  de creation d'article
    public function create() {
        $categories = $this->Categorie->queryAllCategories();

        // A VOIR create == edit avec des param vides
        return $this->render('global.create', [
            "categories" => $categories
        ]);
    }

    // insere en base le nouvel article
    public function insert($title, $text, $date, $categorie_id) {
        $articleId = $this->Article->newArticle($title, $text, $date, $categorie_id);
        // puis affichage
        return $this->single($articleId);
    }

    public function update($articleId, $title, $text, $date, $categorie_id) {
        $articleId = $this->Article->updateArticle($articleId, $title, $text, $date, $categorie_id);
        // puis affichage
        return $this->single($articleId);
    }
}