<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>งานครั้งที่ 2 : index.html</title>
</head>
<body>
    <h1><center>Peenchayakorn Webboard</center></h1>
    <hr>
<form action="verify.php" method="get"> 
        หมวดหมู่ : <select name="category" id="">
        <option value="all">--ทั้งหมด--</option>
        <option value="general">เรื่องทั่วไป</option>
        <option value="study">เรื่องเรียน</option>
    </select>
    <a href="login.html" style="float : right">เข้าสู่ระบบ</a>
    

    <ul>
        <?php
        $id = 1;
        while ($id <= 10){
            echo "<li><a href='post.php?id=$id'>กระทู้ที่ $id</a></li>" ;
        $id++;
        }
        ?>
    </ul>    
</form>
</body>
</html>