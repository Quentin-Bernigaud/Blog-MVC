<?php
namespace App\Controller;
class ArticleController extends AppController {
    public function __construct() {
        $this->loadModel('Article');
    }

    public function home() {
        $articles = $this->Article->queryArticles();
        return $this->render('global.home', [
            "articles" => $articles
        ]);
    }
}