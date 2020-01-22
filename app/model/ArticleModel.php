<?php
namespace APP\Model;
use Core\Model\Model;

class ArticleModel extends Model {

    public function queryArticles() {
        return $this->db->query("SELECT a.*, c.titre FROM articles a LEFT JOIN categories c ON a.categorie_id = c.id ORDER BY date DESC", false);
    }

    public function newArticle() {
        $this->db->save(
            'INSERT INTO articles SET title = ?, text=?, date=?, categorie_id= ?',
            ["Article n°1", "Voici un nouvel article !!!", "21/01/2020", 4]);
    }
}