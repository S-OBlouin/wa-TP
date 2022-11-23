<?php
RequirePage::requireModel('Crud');
RequirePage::requireModel('ModelLivre');
RequirePage::requireModel('ModelEditeur');
RequirePage::requireModel('ModelAuteur');

class ControllerLivre{

    public function index(){
        $livre = new ModelLivre;
        $select = $livre->select();
        twig::render("livre-index.php", ['livres' => $select, 
                                        'livre_list' => "Liste de livres"]);
    }

    public function create(){
        twig::render('livre-create.php');
    }
 
    public function store(){
        $livre = new ModelLivre;
        $insert = $livre->insert($_POST);
 
        requirePage::redirectPage('livre');
    }
 
    public function show($id){
        $livre = new ModelLivre;
        $selectLivre = $livre->selectId($id);
        $editeur = new ModelEditeur;
        $selectEditeur = $editeur->selectId($id);
        $auteur = new ModelAuteur;
        $selectAuteur = $auteur->selectId($id);
        twig::render('livre-show.php', ['livre' => $selectLivre]);
    }
 
    public function edit($id){
        $livre = new ModelLivre;
        $selectLivre = $livre->selectId($id);
        $editeur = new ModelEditeur;
        $selectEditeur = $editeur->selectId($id);
        $auteur = new ModelAuteur;
        $selectAuteur = $auteur->selectId($id);
        twig::render('livre-edit.php', ['livre' => $selectLivre]);
    }
 
    public function update(){
        $livre = new ModelLivre;
        $updateLivre = $livre->update($_POST);
        $editeur = new ModelEditeur;
        $updateEditeur = $editeur->update($_POST);
        $auteur = new ModelAuteur;
        $updateAuteur = $auteur->update($_POST);
        RequirePage::redirectPage('livre/show/'.$_POST['id']);
    }
    
    public function delete(){
        $livre = new ModelLivre;
        $delete = $livre->delete($_POST['id']);
        RequirePage::redirectPage('livre');
    }
}