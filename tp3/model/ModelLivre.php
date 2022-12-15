<?php

class ModelLivre extends Crud {

    protected $table = 'wa_livres';
    protected $primaryKey = 'id';

    protected $fillable = ['id', 'nom_livres', 'prix_livres', 'edition_livres', 'wa_editeur_id', 'wa_auteur_id'];

    
}

?>