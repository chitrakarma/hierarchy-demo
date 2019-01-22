<?php
    $option = $_POST['opt'];
    if(strcmp($option,"batch")==0){
        header("Location: ../html/osc/batch.html");
    }
    else if(strcmp($option,"linux")==0){
        header("Location: ../html/osc/linux.html");
    }
    else{
        header("Location: ../html/index.html");
    }
?>