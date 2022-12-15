<?php

class ModelUser extends Crud {

    protected $table = 'wa_user';
    protected $primaryKey = 'id';

    protected $fillable = ['id', 'nom', 'username', 'password', 'wa_privilege_id'];

    public function checkUser($data){
        extract($data);
        $sql = "SELECT * FROM $this->table WHERE username_user = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute(array($username_user));
        $count = $stmt->rowCount();
        if($count == 1){
            $user_info = $stmt->fetch();
            if(password_verify($password_user, $user_info['password_user'])){
                    
                session_regenerate_id();
                $_SESSION['user_id'] = $user_info['id'];
                $_SESSION['privilege_id'] = $user_info['wa_privilege_id'];
                $_SESSION['fingerPrint'] = md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR']);
                
                requirePage::redirectPage('client');
                
            }else{
               return "<ul><li>Verifier le mot de passe</li></ul>";  
            }
        }else{
            return "<ul><li>Le non d'utilisateur n'existe pas</li></ul>";
        }
    } 
}

?>