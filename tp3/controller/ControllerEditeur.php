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
        $validation = new Validation;
        
        extract($_POST);
        $validation->name('nom_editeur')->value($nom_editeur)->pattern('words')->required()->max(50);
        $validation->name('tel_editeur')->value($tel_editeur)->pattern('tel')->required()->max(20);
        $validation->name('adresse_editeur')->value($adresse_editeur)->pattern('address')->required();
        
        
        if($validation->isSuccess()){
            $editeur = new ModelEditeur;
            $insert = $editeur->insert($_POST);
     
            requirePage::redirectPage('editeur');
        }else{
            $errors = $validation->displayErrors();
            twig::render('editeur-create.php', ['errors'=>$errors, 'data'=>$_POST]);
        }
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