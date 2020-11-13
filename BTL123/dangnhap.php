<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sự kiện CSE forum</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<?php
session_start();
require_once "config.php";
$error='';
if (isset($_POST['login']))
{
    $masv=$_POST['masv'];
    $pass=$_POST['pass'];
    if (sosanh($masv,$pass)==true)
    {
        $names=selectformasv($masv);
        foreach ($names as $name) {
            $ten = $name[2];
            $class=$name[3];
            $sdt=$name[4];
        }
        $_SESSION['fullname']=$ten;
        $_SESSION['class']=$class;
        $_SESSION['masv']=$masv;
        $_SESSION['sdt']=$sdt;

        header("Location: trangchu.php");
        exit();
    }
    else
    {
        $error='Tên tài khoản hoặc mật khẩu không hợp lệ;';
    }

}
?>

<body>
<center>
<div class="LOGO">
    <div class="logo">
        <a href="trangchu.php"><img src="http://cse.tlu.edu.vn/cse/assets/images/logo.jpg" alt="img"></a>
        <!-- <img src="http://cse.tlu.edu.vn/cse/assets/images/logo.jpg" alt=""> -->
    </div>

</div>
<div style=" margin-top: 90px" >
    <form action="" method="post"  >
        <div style="max-width: 500px;">
        <div style="background: dodgerblue;text-align: center" ><h1>ĐĂNG NHẬP</h1></div>

        <div style="background: lightblue; text-align: center;">
            Mã Sinh viên
            <br>
            <input type="text" name="masv" value="" style="background: gray;border-radius: 7px">
            <br>
            Mật khẩu:
            <br>
            <input type="password" name="pass" value="Mã SV" style="background: gray;border-radius: 7px">
            <br>
            <br>
            <input type="submit" name="login" value="Đăng nhập">
            <br>
            <br>
            <a href="quenmk.php" style="text-decoration: none; color: dodgerblue" >Quên mật khẩu</a>
            <br>
            <a href="dangki.php" style="text-decoration: none; color: dodgerblue" >Tạo tài khoản</a>
        </div>
        </div>
    </form>
    <div style="color: red">
        <?php

        echo "$error";
        ?>
    </div>
</div>
</center>
<div style="background-color: #3678ab; color: white; margin-top: 100px">
    <div class="row">

        <div style="background-image: url(&quot;https://external.fhan2-6.fna.fbcdn.net/static_map.php?v=2008&amp;osm_provider=2&amp;size=466x166&amp;language=vi_VN&amp;scale=2&amp;zoom=14&amp;center=21.011305387921002%2C105.82474642726&amp;marker_list[0]=21.007305387921%2C105.82474642726&quot;); background-repeat: no-repeat; background-size: 100% 100%; height: 166px; width: 400px;"></div>
        <div class="diachi">
            <li>TRƯỜNG ĐẠI HỌC THỦY LỢI</li>
            <li>Địa chỉ: 175 Tây Sơn, Đống Đa, Hà Nội</li>
            <li>Điện thoại: (024) 38522201 - Fax: (024) 35633351</li>
            <li>Email: phonghcth@tlu.edu.vn</li>
        </div>


    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>