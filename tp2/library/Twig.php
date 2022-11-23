<?php

class Twig{

    static public function render($template, $data = array()){
        $loader = new \Twig\Loader\FilesystemLoader('view');
        $twig = new \Twig\Environment($loader, array('auto_reload' => true));
        $twig->addGlobal('path', 'http://localhost/webavance/tp1/wa-TP1/tp2/');
        echo $twig->render($template, $data);
    }
}

?>