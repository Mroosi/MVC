<?php
    require_once('head.html');
    require_once('masiiv.php');
        if( !empty($_GET)){
             $vaartus = $_GET;
        }else{
             $vaartus = array('pealeht');
        }
        if(!empty($_POST)){
             require('tulemus.php');
             $vaartus = array('tyhi');
        }
        $leht = implode($vaartus);
        switch ($leht) {
        case 'pealeht':
        require('pealeht.html');
        break;
        
        case 'galerii':
        require('galerii.html');
        break;
        
        case 'vote':
           require('vote.html');
        break;
        
    }
    require_once('foot.html');
?>