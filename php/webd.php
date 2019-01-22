<?php
    $option = $_POST['opt'];
    if(strcmp($option,"html")==0){
        header("Location: ../html/webd/html.html");
    }
    else if(strcmp($option,"css")==0){
        header("Location: ../html/webd/css.html");
    }
    else if(strcmp($option,"js")==0){
        header("Location: ../html/webd/js.html");
    }
    else if(strcmp($option,"bs")==0){
        header("Location: ../html/webd/bs.html");
    }
    else if(strcmp($option,"jquery")==0){
        header("Location: ../html/webd/jquery.html");
    }
    else if(strcmp($option,"php")==0){
        header("Location: ../html/webd/php.html");
    }
    else if(strcmp($option,"sql")==0){
        header("Location: ../html/webd/sql.html");
    }
    else if(strcmp($option,"node")==0){
        header("Location: ../html/webd/node.html");
    }
    else if(strcmp($option,"asp")==0){
        header("Location: ../html/webd/asp.html");
    }
    else if(strcmp($option,"jsp")==0){
        header("Location: ../html/webd/jsp.html");
    }
    else if(strcmp($option,"ajax")==0){
        header("Location: ../html/webd/ajax.html");
    }
    else if(strcmp($option,"xml")==0){
        header("Location: ../html/webd/xml.html");
    }
    else if(strcmp($option,"ajs")==0){
        header("Location: ../html/webd/ajs.html");
    }
    else{
        header("Location: ../html/index.html");
    }
?>