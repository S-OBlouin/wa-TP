<?php
RequirePage::requireModel('Crud');
RequirePage::requireModel('ModelEditeur');

class ControllerEditeur{

    public function index(){
        $auteur = new ModelEditeur;
        $select = $auteur->select();
        twig::render("editeur-index.php", ['editeurs' => $select, 
                                        'editeur_list' => "Liste d'éditeurs"]);
    }

    public function create(){
        twig::render('editeur-create.php');
    }
 
    public function store(){
        $editeur = new ModelEditeur;
        $insert = $editeur->insert($_POST);
 
        requirePage::redirectPage('editeur');
    }
 
    public function show($id){
        $editeur = new ModelEditeur;
        $selectEditeur = $editeur->selectId($id);
        twig::render('editeur-show.php', ['editeur' => $selectEditeur]);
    }
 
    public function edit($id){
        $editeur = new ModelEditeur;
        $selectEditeur = $editeur->selectId($id);
        twig::render('editeur-edit.php', ['editeur' => $selectEditeur]);
    }
 
    public function update(){
        $editeur = new ModelEditeur;
        $update = $editeur->update($_POST);
        RequirePage::redirectPage('editeur/show/'.$_POST['id']);
    }
}