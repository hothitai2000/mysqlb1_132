<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form enctype="multipart/form-data" action="" method="post">
        masp:<input type="text" name="masp">
        <br>
        <br>
        tensp:<input type="text" name="tensp">
        <br>
        <br>
        giaten: <input type="text" name="giatien">
        <br>
        <br>
        soluong: <input type="text" name="sl">
        <br>
        <br>
        hinhanh:<input type="file" name="hinhanh">
        <button type="submit" name="btn">Gui</button>
    </form>
    <?php
    include "connect.php";
    if(isset($_POST['btn'])){
     $a=$_POST['masp'];
     $b=$_POST['tensp'];
     $c=$_POST['giatien'];
     $d=$_POST['sl'];
    if(isset($_FILES['hinhanh'])){
        $file1=$_FILES['hinhanh'];
        $file2=$file1['name'];
        move_uploaded_file($file1['tmp_name'],$file2);
    }
    $insert="INSERT INTO sanpham(masp,tensp,giatien,soluong,hinhanh) VALUES('$a','$b','$c','$d','$file2')";
    if(mysqLi_query($conn,$insert)){
        header('location:show.php');
    }
    }
    ?>
</body>
</html>