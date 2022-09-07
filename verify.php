<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
<center><h1>Peenchayakorn Webboard</h1></center>
    <hr>
    <br>
<center>

    <?php
    if($_POST['login'] == "admin" && $_POST['pwd'] == "ad1234") {
        echo  "ยินดีต้อนรับคุณ Admin";
    }
    elseif ($_POST['login'] == "member" && $_POST['pwd'] == "mem1234") {
        echo "ยินดีต้อนรับคุณ Member";
    }
    else {
        echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
    }
    ?>
</center>
<br><center><a href="index.php">กลับไปหน้าหลัก</a></center>
</body>
</html>

