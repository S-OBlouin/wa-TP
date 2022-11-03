<?php
require_once 'class/Crud.php';

$Crud = new Crud;
$insert = $Crud->insert('wa_client', $_POST);

$insert;

header('Location: index.php');