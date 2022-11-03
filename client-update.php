<?php
require_once 'class/Crud.php';

$Crud = new Crud;
$update = $Crud->update('wa_client', $_POST);

echo $update;





