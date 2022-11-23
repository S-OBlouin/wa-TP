<?php

class ModelEditeur extends Crud {

    protected $table = 'wa_editeur';
    protected $primaryKey = 'id';

    protected $fillable = ['id', 'nom_editeur', 'tel_editeur', 'adresse_editeur'];

    
}

?>