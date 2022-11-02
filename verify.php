<?php session_start();
    if(isset ($_SESSION["username"])&& $_SESSION["id"]==session_id()){
        header("Location: index.php");
        die;
    }
    $u=$_POST["login"];
    $p=$_POST["pwd"];
    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
    $sql = "SELECT * FROM user WHERE login = '$u' AND password = sha1( '$p')";
    $result = $conn->query($sql);
    if($result->rowCount() == 1){
        $data = $result->fetch(PDO :: FETCH_ASSOC);
        $_SESSION["username"] = $data["login"];
        $_SESSION["role"] = $data["role"];
        $_SESSION["user_id"] = $data["id"];
        $_SESSION["id"] = session_id();
        header("Location: index.php");
        die;
    }
    else{
        $_SESSION["error"] = 1; 
        header("Location: login.php");
       die(); 
    }
    $conn = null;
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
        
  