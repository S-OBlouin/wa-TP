<?php

class ModelEditeur extends Crud {

    protected $table = 'wa_livres';
    protected $primaryKey = 'id';

    protected $fillable = ['id', 'nom_livres', 'prix_livres', 'edition_livres'];

    
}

?>