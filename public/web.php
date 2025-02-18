<?php 
require_once('../controller/studentController.php');
session_start();

$id = isset($_GET['id']) ? $_GET['id'] : '';
$action = isset($_GET['action']) ? $_GET['action'] : '';

$sudentSMK = new StudentController();
switch($action){
    case 'showFormCreate':
        $sudentSMK->showFormCreate();
        break;
    case 'create':
        $sudentSMK->saveMurid($_POST);
        $_SESSION['pesanAdd'] = true;
        header('Location: web.php?action=showFormCreate');
        break;
    case 'showFormUpdate':
        $sudentSMK->showFormUpdate($id);
        break;
    case 'update':
        $sudentSMK->editMurid($id, $_POST);
        $_SESSION['pesanEdit'] = true;
        header('Location: web.php');
        break;
    case 'delete':
        $sudentSMK->dropMurid($id);
        $_SESSION['pesanDrop'] = true;
        header('Location: web.php');
        break;
    default:
        $sudentSMK->readAll();
        break;
}
