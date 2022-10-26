<?php 
    session_start();
?>
    <?php
        if(isset($_SESSION['role'])){
        header("Location: index.php");
        die;
        }
    ?>
    <center>
        <?php
            if($_POST["login"] == "admin" && $_POST["pwd"] == "ad1234"){
                header("Location: index.php");
                $_SESSION["username"] = "admin";
                $_SESSION["role"] = "a";
                $_SESSION["id"] = "session_id()";
                die();
            }
            elseif($_POST["login"] == "member" && $_POST["pwd"] == "mem1234"){
                header("Location: index.php");
                $_SESSION["username"] = "member";
                $_SESSION["role"] = "m";
                $_SESSION["id"] = "session_id()";
                die();
            }
            else{
                header("Location: login.php");
                $_SESSION["error"] = "error"; 
                die(); 
            }
        ?>
    </center>
        
  