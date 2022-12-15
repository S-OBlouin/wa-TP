<?php
RequirePage::requireModel('Crud');
RequirePage::requireModel('ModelUser');
RequirePage::requireModel('ModelPrivilege');

class ControllerUser{

    public function index(){
        echo 'abc';
    }

    public function create(){
        if(CheckSession::sessionAuth()){
            if ($_SESSION['wa_privilege_id'] == 1 || $_SESSION['wa_privilege_id'] == 2){
                $privilege = new ModelPrivilege;
                $selectPrivilege = $privilege->select();
                twig::render('user-create.php', ['privileges' => $selectPrivilege]);
            }else{
                requirePage::redirectPage('home/error');
            }
        }          
    }
    public function store(){

        $validation = new Validation;
        extract($_POST);
        $validation->name('username_user')->value($username_user)->pattern('email')->required()->max(50);
        $validation->name('password_user')->value($password_user)->max(20)->min(6);
        $validation->name('wa_privilege_id')->value($wa_privilege_id)->pattern('int')->required();

        if($validation->isSuccess()){
            $user = new ModelUser;
            $options = [
                'cost' => 10,
            ];
            $_POST['password_user']= password_hash($_POST['password_user'], PASSWORD_BCRYPT, $options);
            $userInsert = $user->insert($_POST);
            requirePage::redirectPage('user/login');
        }else{
            $errors = $validation->displayErrors();
            $privilege = new ModelPrivilege;
            $selectPrivilege = $privilege->select();
            twig::render('user-create.php', ['errors' => $errors,'privileges' => $selectPrivilege, 'user' => $_POST]);
        }
    }

    public function login(){
        twig::render('user-login.php');
    }

    public function auth(){
        print_r($_POST);
        $validation = new Validation;
        extract($_POST);
        $validation->name('username_user')->value($username_user)->pattern('email')->required()->max(50);
        $validation->name('password_user')->value($password_user)->required();

        if($validation->isSuccess()){

            $user = new ModelUser;
            $checkUser = $user->checkUser($_POST);
            
            twig::render('user-login.php', ['errors' => $checkUser, 'user' => $_POST]);
        
        }else{
            $errors = $validation->displayErrors();
            twig::render('user-login.php', ['errors' => $errors, 'user' => $_POST]);
        }
    }

    public function logout(){
        session_destroy();
        requirePage::redirectPage('user/login');
    }
}

?>