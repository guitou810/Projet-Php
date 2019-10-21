<?php
include_once('../Models/bugManager.php');


function Ajout(){
    $bugmanager = new bugManager();
    $ID = NULL;
    $Bug = new Bug($ID,$_POST['Titre'],$_POST['Description'], $_POST['Date'],$_POST['Status']);
    $bugmanager->add($Bug);
    require("ajoutbug.php");

}

function list1(){
    $bugmanager = new bugManager();
    $Bugs = $bugmanager->find_all();
    require("templateList.php");
}

function show() {
    $bugmanager = new bugManager();
    $id = $_GET['id'];
    $Bugs = [];
    $Bugss = $bugmanager->find($id);
    require("templateshow.php");
}

?>

