<?php

class RequirePage{
    static public function requireModel($model){
        return require_once "model/$model.php";
    }
    static public function redirectPage($page){
        return header("Location: http://localhost/webavance/tp1/wa-TP1/tp2/".$page);
    }
}

?>