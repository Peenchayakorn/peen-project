<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
<center><h1>Peenchayakorn Webboard</h1></center>
    <hr>
    <br>
<center>
    <table style="border:2px solid black; width:40%" align="center">
    หมายเลขกระทู้ <?php echo $_GET["id"] ?> <br>
    <?php
    $id = $_GET["id"] ;
    if (($id % 2)==0)
        echo "เป็นกระทู้หมายเลขคู่" ;
    else 
        echo "เป็นกระทู้หมายเลขคึ่";
    ?> 
    <br>
    <tr><td style="background-color:#6cd2fe;" colspan = "2">แสดงความคิดเห็น</tr></td>
    <tr><td><textarea id="test" name="test" rows="10" cols="70"></textarea> </td></tr>
    <tr><td colspan="2" align="center"><input type="submit" value="ส่งข้อความ"></td></tr>
    </table>
    <br><center><a href="index.php">กลับไปหน้าหลัก</a></center>
</center>
</body>
</html>