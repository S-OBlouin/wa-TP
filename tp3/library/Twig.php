<?php

class Twig{
    static public function render($template, $data = array()){
        $loader = new \Twig\Loader\FilesystemLoader('view');
        // $twig = new \Twig\Environment($loader, array('auto_reload' => true,'cache' => false));
        $twig = new \Twig\Environment($loader, array('auto_reload' => true));
        $twig->addGlobal('path', 'http://localhost/webavance/tp1/wa-TP1/tp3/');
        // $twig->addGlobal('path', 'https://e1580595.webdev.cmaisonneuve.qc.ca/web21622/tp2/');
        $twig->addGlobal('session', $_SESSION);
       
        if(isset($_SESSION['fingerPrint']) and $_SESSION['fingerPrint'] === md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR'])){
            $guest = false;
        }else{
            $guest = true;
        }
        $twig->addGlobal('guest', $guest);

        echo $twig->render($template, $data);

        
    }
}

?>