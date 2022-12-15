<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

class ControllerHome{

    public function index(){

      $data =['welcome' => 'Welcome!'];
      twig::render("home-index.php", $data);

    }

    public function error(){
        twig::render("home-error.php");
    }

    public function sendemail(){

      if(isset($_POST["send"])){
        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->Username = 'soblouin2244@gmail.com';
        $mail->Password = 'cvdsofogyuivxkco';
        $mail->SMTPSecure = 'ssl';

        $mail->setFrom('soblouin2244@gmail.com');

        $mail->addAddress($_POST["email"]);
        $mail->Subject = 'Infolettre';
        $mail->Body = "Voici les nouvelles récentes de notre Librairie : Nouvelle addition dans le secteur des bandes dessinées, L'auteur Jean Werner vient de lancer le dernier volume de la série à succès 'Trois'.";

        $mail->send();

        $data =['welcome' => 'Welcome!'];
        twig::render("home-index.php", $data);
      }
    }
}