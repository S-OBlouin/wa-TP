<?php

class ModelClient extends Crud {

    protected $table = 'wa_client';
    protected $primaryKey = 'id';

    protected $fillable = ['id', 'username_client', 'nom_client', 'adresse_client', 'tel_client', 'courriel_client'];

    
}

?>