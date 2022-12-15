<?php
RequirePage::requireModel('Crud');
RequirePage::requireModel('ModelAuteur');

class ControllerAuteur{

    public function index(){
        $auteur = new ModelAuteur;
        $select = $auteur->select();
        twig::render("auteur-index.php", ['auteurs' => $select, 
                                        'auteur_list' => "Liste d'auteurs"]);
    }

    public function create(){
        twig::render('auteur-create.php');
    }
 
    public function store(){
        $auteur = new ModelAuteur;
        $insert = $auteur->insert($_POST);
 
        requirePage::redirectPage('auteur');
    }
 
    public function show($id){
        $auteur = new ModelAuteur;
        $selectAuteur = $auteur->selectId($id);
        twig::render('auteur-show.php', ['auteur' => $selectAuteur]);
    }
 
    public function edit($id){
        $auteur = new ModelAuteur;
        $selectAuteur = $auteur->selectId($id);
        twig::render('auteur-edit.php', ['auteur' => $selectAuteur]);
    }
 
    public function update(){
        $auteur = new ModelAuteur;
        $update = $auteur->update($_POST);
        RequirePage::redirectPage('auteur/show/'.$_POST['id']);
    }
}