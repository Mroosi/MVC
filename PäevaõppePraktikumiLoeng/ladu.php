<?php
session_start();

require('model.php');

require('controller.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $result = false;
    switch ($_POST['action']) {
        
        case 'add':
        $result = controller_add($_POST['nimetus'], $_POST['kogus']);
        break;
        
        case 'delete':
        $result = controller_delete($_POST['kustuta']);
        break;
    }
    if($result){
       header('Location: '. $_SERVER['PHP_SELF']);
       exit;
    }else{
        header('content-type: text/plain; charset=utf-8');
        echo 'Päring ebaõnnestus!';
        exit;
    }
}

require('view.php');

?>