<?php
namespace APP\Model;
use Core\Model\Model;

class ArticleModel extends Model {

    public function queryArticles() {
        return $this->db->query("SELECT * FROM articles", false);
    }

    public function newArticle() {
        $this->db->save(
            'INSERT INTO articles SET title = ?, text=?, date=? categorie_id= ?',
            ["Article n°1", "Voici un nouvel article !!!", "21/01/2020", 4]);
    }
}