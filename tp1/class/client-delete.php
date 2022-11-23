<?php
require_once 'Crud.php';

$Crud = new Crud;
$delete = $Crud->delete('wa_client', $_POST['id']);
