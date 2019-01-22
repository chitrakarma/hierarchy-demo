<?php
    $option = $_POST['opt'];
    if(strcmp($option,"vegas")==0){
        header("Location: ../html/soft/vegas.html");
    }
    else if(strcmp($option,"draw")==0){
        header("Location: ../html/soft/draw.html");
    }
    else if(strcmp($option,"ps")==0){
        header("Location: ../html/soft/ps.html");
    }
    else{
        header("Location: ../html/index.html");
    }
?>