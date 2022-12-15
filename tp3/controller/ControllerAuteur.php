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
        
        $validation = new Validation;
        
        extract($_POST);
        $validation->name('nom_auteur')->value($nom_auteur)->pattern('alpha')->required()->max(50);
        $validation->name('naissance_auteur')->value($naissance_auteur)->pattern('date_ymd')->required();

        
        if($validation->isSuccess()){
            $auteur = new ModelAuteur;
            $insert = $auteur->insert($_POST);
     
            requirePage::redirectPage('auteur');
        }else{
            $errors = $validation->displayErrors();
            twig::render('auteur-create.php', ['errors'=>$errors, 'data'=>$_POST]);
        }
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
        
        $validation = new Validation;
        
        extract($_POST);
        $validation->name('nom_auteur')->value($nom_auteur)->pattern('alpha')->required()->max(50);
        $validation->name('naissance_auteur')->value($naissance_auteur)->pattern('date_ymd')->required();
        
        
        if($validation->isSuccess()){
            $auteur = new ModelAuteur;
            $update = $auteur->update($_POST);
            RequirePage::redirectPage('auteur/show/'.$_POST['id']);
        }else{
            $errors = $validation->displayErrors();
            $auteur = new ModelAuteur;
            $select = $auteur->select($auteur);
            twig::render('auteur-create.php', ['errors'=>$errors, 'data'=>$_POST]);
        }
    }
}