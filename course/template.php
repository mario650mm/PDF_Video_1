<?php
 class Template {

    public static function render()
    {
        ob_start();
        extract($data);
        include '../templates'.$file.'.php';
        return ob_get_clean();

    }
 }

?>