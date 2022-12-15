<?php
RequirePage::requireModel('Crud');
RequirePage::requireModel('ModelClient');

class ControllerClient{

    public function index(){
        $client = new ModelClient;
        $select = $client->select();
        twig::render("client-index.php", ['clients' => $select, 
                                        'client_list' => "Liste de Client"]);
    }

    public function create(){
        twig::render('client-create.php');
    }
 
    public function store(){
        
        $validation = new Validation;
        
        extract($_POST);
        $validation->name('username_client')->value($username_client)->pattern('email')->required()->max(255);
        $validation->name('nom_client')->value($nom_client)->pattern('alpha')->required()->max(40);
        $validation->name('adresse_client')->value($adresse_client)->pattern('address')->required();
        $validation->name('courriel_client')->value($courriel_client)->pattern('email')->required();
        $validation->name('tel_client')->value($tel_client)->pattern('tel')->required();
        
        
        if($validation->isSuccess()){
            $client = new ModelClient;
            $insert = $client->insert($_POST);
     
            requirePage::redirectPage('client');
        }else{
            $errors = $validation->displayErrors();
            twig::render('client-create.php', ['errors'=>$errors, 'data'=>$_POST]);
        }
    }
 
    public function show($id){
        $client = new ModelClient;
        $selectClient = $client->selectId($id);
        twig::render('client-show.php', ['client' => $selectClient]);
    }
 
    public function edit($id){
        $client = new ModelClient;
        $selectClient = $client->selectId($id);
        twig::render('client-edit.php', ['client' => $selectClient]);
    }
 
    public function update(){
        
        $validation = new Validation;
        
        extract($_POST);
        $validation->name('nom_client')->value($nom_client)->pattern('alpha')->required()->max(40);
        $validation->name('adresse_client')->value($adresse_client)->pattern('address')->required();
        $validation->name('courriel_client')->value($courriel_client)->pattern('email')->required();
        $validation->name('tel_client')->value($tel_client)->pattern('tel')->required();
        
        
        if($validation->isSuccess()){
            $client = new ModelClient;
            $update = $client->update($_POST);
            RequirePage::redirectPage('client/show/'.$_POST['id']);
        }else{
            $errors = $validation->displayErrors();
            $client = new ModelClient;
            $select = $client->select($client);
            twig::render('client-edit.php', ['errors'=>$errors, 'data'=>$_POST]);
        }
    }
    
    public function delete(){
        $client = new ModelClient;
        $delete = $client->delete($_POST['id']);
        RequirePage::redirectPage('client');
    }
}