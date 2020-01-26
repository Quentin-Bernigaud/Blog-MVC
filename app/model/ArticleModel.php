<?php
namespace APP\Model;
use Core\Model\Model;

class ArticleModel extends Model {

    public function queryArticles() {
        return $this->db->query("SELECT a.*, c.titre FROM articles a LEFT JOIN categories c on a.categorie_id = c.id ORDER BY date DESC", false);
    }

    public function queryArticle($id) {
        $arr =  $this->db->query("SELECT a.*, c.titre FROM articles a LEFT JOIN categories c on a.categorie_id = c.id WHERE a.id=".$id, false);
        return $arr[0];
    }

    public function deleteArticle($id) {
        return $this->db->query("DELETE FROM articles WHERE id=".$id);
    }

    public function newArticle($title, $text, $date, $categorie_id) {
        $this->db->save(
            'INSERT INTO articles SET title = ?, text=?, date=?, categorie_id= ?',
            [$title, $text, $date, $categorie_id]);
        return $this->db::lastInsertId();
    }
    public function updateArticle($id,$title, $text, $date, $categorie_id) {
        return $this->db->save(
            'UPDATE articles SET title = ?, text=?, date=?, categorie_id= ? WHERE id=?',
            [$title, $text, $date, $categorie_id, $id]);
    }
}