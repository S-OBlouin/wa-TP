<?php

class ModelAuteur extends Crud {

    protected $table = 'wa_auteur';
    protected $primaryKey = 'id';

    protected $fillable = ['id', 'nom_auteur', 'naissance_auteur'];

    
}

?>