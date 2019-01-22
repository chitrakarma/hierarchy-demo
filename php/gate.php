<?php
    $option = $_POST['opt'];
    if(strcmp($option,"toc")==0){
        header("Location: ../html/gate/toc.html");
    }
    else if(strcmp($option,"os")==0){
        header("Location: ../html/gate/os.html");
    }
    else if(strcmp($option,"dbms")==0){
        header("Location: ../html/gate/dbms.html");
    }
    else if(strcmp($option,"net")==0){
        header("Location: ../html/gate/net.html");
    }
    else if(strcmp($option,"ds")==0){
        header("Location: ../html/gate/ds.html");
    }
    else{
        header("Location: ../html/index.html");
    }
?>