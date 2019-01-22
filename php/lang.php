<?php
    $option = $_POST['opt'];
    if(strcmp($option,"c")==0){
        header("Location: ../html/lang/C.html");
    }
    else if(strcmp($option,"cpp")==0){
        header("Location: ../html/lang/Cpp.html");
    }
    else if(strcmp($option,"py")==0){
        header("Location: ../html/lang/Py.html");
    }
    else if(strcmp($option,"java")==0){
        header("Location: ../html/lang/Java.html");
    }
    else if(strcmp($option,"csharp")==0){
        header("Location: ../html/lang/Csharp.html");
    }
    else if(strcmp($option,"objc")==0){
        header("Location: ../html/lang/ObjC.html");
    }
    else if(strcmp($option,"kot")==0){
        header("Location: ../html/lang/Kotlin.html");
    }
    else if(strcmp($option,"ruby")==0){
        header("Location: ../html/lang/Ruby.html");
    }
    else if(strcmp($option,"git")==0){
        header("Location: ../html/lang/git.html");
    }
    else{
        header("Location: ../html/index.html");
    }
?>