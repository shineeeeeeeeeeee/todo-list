<?php

if(isset($_POST['title'])){
    require '../db_conn.php';

    $title = $_POST['title'];

    if(empty($title)){
        header("Location: ../main.php?mess=error");

    }
    else{
        $stmt = $conn->prepare("INSERT INTO todos(title) VALUE(?)");
        $res = $stmt->execute([$title]);

        if($res){
            header("Location: ../main.php?mess=success");
        }else{
            header("Location: ../main.php");
        }
        $conn = null;
        exit();
    }

}else{
    header("Location: ../main.php?mess=error");
}


?>