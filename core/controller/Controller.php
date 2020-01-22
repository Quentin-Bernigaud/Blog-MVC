<?php
namespace Core\Controller;
class Controller {
    /**
    * @param [string] $view
    * @param [array] $values
    * @return void
    */

    public function render($view, $values) {
        $pathView = str_replace('.', '/', $view);

        ob_start();
        extract($values);
        require  ROOT . '/app/view/' . $pathView . '.php';

        $content = ob_get_clean();
        require  ROOT . '/app/view/' . $this->default . '.php';
    }
}