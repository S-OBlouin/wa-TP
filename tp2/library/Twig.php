<?php

class Twig{

    static public function render($template, $data = array()){
        $loader = new \Twig\Loader\FilesystemLoader('view');
        $twig = new \Twig\Environment($loader, array('auto_reload' => true));
        $twig->addGlobal('path', 'https://e1580595.webdev.cmaisonneuve.qc.ca/web21622/tp2/');
        echo $twig->render($template, $data);
    }
}

?>