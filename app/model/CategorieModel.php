<?php
namespace app\model;
use core\model\Model;

class CategorieModel extends Model {

    public function queryCategories() {
        return $this->db->query("SELECT c.id, c.titre, count(a.id) as nbref FROM categories c  join articles a on c.id = a.categorie_id group by c.id ORDER BY c.titre ASC", false);
    }

    public function newCategorie() {
        $this->db->save(
            'INSERT INTO categories SET titre=? ',
            ["Catégorie n°1", "Voici une nouvelle catégorie !!!", "21/01/2020", 4]);
    }
}