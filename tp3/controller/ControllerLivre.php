<?php
RequirePage::requireModel('Crud');
RequirePage::requireModel('ModelLivre');

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
        $validation = new Validation;
        
        extract($_POST);
        $validation->name('nom_livres')->value($nom_livres)->pattern('alpha')->required()->max(80);
        $validation->name('description_livres')->value($description_livres)->pattern('text')->max(1000);
        $validation->name('prix_livres')->value($prix_livres)->pattern('float')->required();
        $validation->name('edition_livres')->value($edition_livres)->pattern('int');
        
        
        if($validation->isSuccess()){
            $livre = new ModelLivre;
            $insert = $livre->insert($_POST);
     
            requirePage::redirectPage('livre');
        }else{
            $errors = $validation->displayErrors();
            twig::render('livre-create.php', ['errors'=>$errors, 'data'=>$_POST]);
        }
    }
 
    public function show($id){
        $livre = new ModelLivre;
        $selectLivre = $livre->selectId($id);
        twig::render('livre-show.php', ['livre' => $selectLivre]);
    }
 
    public function edit($id){
        $livre = new ModelLivre;
        $selectLivre = $livre->selectId($id);
        twig::render('livre-edit.php', ['livre' => $selectLivre]);
    }
 
    public function update(){
        $validation = new Validation;
        
        extract($_POST);
        $validation->name('nom_livres')->value($nom_livres)->pattern('alpha')->required()->max(80);
        $validation->name('description_livres')->value($description_livres)->pattern('text')->max(1000);
        $validation->name('prix_livres')->value($prix_livres)->pattern('float')->required();
        $validation->name('edition_livres')->value($edition_livres)->pattern('int');
        
        
        if($validation->isSuccess()){
            $livre = new ModelLivre;
            $updateLivre = $livre->update($_POST);
            RequirePage::redirectPage('livre/show/'.$_POST['id']);
        }else{
            $errors = $validation->displayErrors();
            $livre = new ModelLivre;
            $selectLivre = $livre->select($livre);
            twig::render('livre-edit.php', ['errors'=>$errors, 'livre' => $_POST]);
        }
    }
    
    public function delete(){
        $livre = new ModelLivre;
        $delete = $livre->delete($_POST['id']);
        RequirePage::redirectPage('livre');
    }
}