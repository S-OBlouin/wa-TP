<?php

class RequirePage{
    static public function requireModel($model){
        return require_once "model/$model.php";
    }
    static public function redirectPage($page){
        // return header("Location: https://e1580595.webdev.cmaisonneuve.qc.ca/web21622/tp2/".$page);
        return header("Location: http://localhost/webavance/tp1/wa-TP1/tp3/".$page);
    }
}

?>