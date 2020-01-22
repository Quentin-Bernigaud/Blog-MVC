<?php
namespace App\Controller;
use App\App;
use Core\Controller\Controller;

class AppController extends Controller {
    public $modelName;
    public $categorieModelName;
    protected $default = 'default';

    function loadModels($modelName, $categorieModelName) {
        $this->$modelName = App::getInstance()->getTable($modelName);
        $this->$categorieModelName = App::getInstance()->getTableCategorie($categorieModelName);
    }
}