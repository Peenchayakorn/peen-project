<?php session_start(); ?>
<?php
    $id=$_POST["id"];
    $category=$_POST["category"];
    $topic=$_POST["topic"];
    $comment=$_POST["comment"];



    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");
    
    $sql = "INSERT INTO post (id,title,content,,cat_id,user_id)
    VALUES ('$id','topic','comment',now(),'$category')";
    $conn->exec($sql);
   
   
   
    $_SESSION['add_post'] = "success";
    $conn=null;
    header("Location: index.php");
    die();
?>
