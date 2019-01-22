<?php
    $option = $_POST['opt'];
    if(strcmp($option,"webd")==0){
        header("Location: ../html/webd.html");
    }
    else if(strcmp($option,"lang")==0){
        header("Location: ../html/lang.html");
    }
    else if(strcmp($option,"soft")==0){
        header("Location: ../html/soft.html");
    }
    else if(strcmp($option,"osc")==0){
        header("Location: ../html/osc.html");
    }
    else if(strcmp($option,"gate")==0){
        header("Location: ../html/gate.html");
    }
    else{
        header("Location: ../html/index.html");
    }
?>