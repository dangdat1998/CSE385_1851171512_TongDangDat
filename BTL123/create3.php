<?php
session_start();
if (isset($_POST['create']))
{
    require_once "config.php";
    //bắt dữ liệu từ form

    $name=$_POST['txtname'];
    $class=$_POST['txtclass'];
    $question=$_POST['txtquestion'];
    $abc=$_POST['txtabc'];
    $masv=$_SESSION['masv'];
    isinsert3($name,$class,$question,$abc,$masv);

    header("Location: forum3.php");
    exit();
    //test hiển thị xem được chưa
//  echo $Name,$Discription,$Salary,$Gender,$Birthday;

}


?>
<head>
    <title>Đăng bài</title>
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
<body>
<div class="LOGO">
    <div class="logo">
        <a href="trangchu.php"><img src="http://cse.tlu.edu.vn/cse/assets/images/logo.jpg" alt="img"></a>
        <!-- <img src="http://cse.tlu.edu.vn/cse/assets/images/logo.jpg" alt=""> -->
    </div>
    <div style="text-align: right; margin: 0px 20px 0px 20px"><a href="thongtin.php">

        <?php
        if (!isset($_SESSION['fullname']))
        {
            header("location: dangnhap.php");
            exit();
        }
        echo "<b>Xin chào</b><br>";
        echo $_SESSION['fullname'];
        if (isset($_POST['logout']))
        {
            unset($_SESSION['fullname']);
            header("location: dangnhap.php");
            exit();
        }
        ?></a>>

        <form method="post">
            <input type="submit" value="Đăng xuất" name="logout">
        </form>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="trangchu.php"><i class="fas fa-home"></i>Trang chủ</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId" >
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Giới thiệu</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="http://www.tlu.edu.vn/cong-tac-dang">Công tác Đảng</a>
                        <a class="dropdown-item" href="http://www.tlu.edu.vn/cong-tac-cong-doan">Công tác Công đoàn</a>
                        <a class="dropdown-item" href="http://www.tlu.edu.vn/Tong-quan">Tổng quan</a>
                        <a class="dropdown-item" href="http://www.tlu.edu.vn/Co-cau-to-chuc-va-nhan-luc">Cơ cấu tổ chức và nhân lực</a>
                        <a class="dropdown-item" href="http://www.tlu.edu.vn/Co-so-vat-chat">Cơ sở vật chất</a>
                        <a class="dropdown-item" href="http://www.tlu.edu.vn/Su-mang-tam-nhin">Sứ mạng, Tầm nhìn</a>
                    </div>
                </li>

                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Đào tạo</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Đào tạo đại học</a>
                        <a class="dropdown-item" href="#">Đào tạo sau đại học</a>
                        <a class="dropdown-item" href="#">Chuẩn đầu ra</a>
                        <a class="dropdown-item" href="#">Định hướng ngành nghề</a>
                        <a class="dropdown-item" href="#">Mô hình đào tạo</a>
                        <a class="dropdown-item" href="#">Đề cương môn học</a>
                    </div>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Bộ môn - Trung tâm</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Công nghệ phần mềm</a>
                        <a class="dropdown-item" href="#">Hệ thống thông tin</a>
                        <a class="dropdown-item" href="#">Khoa học máy tính</a>
                        <a class="dropdown-item" href="#">Kỹ thuật máy tính và mạng</a>
                        <a class="dropdown-item" href="#">Toán học</a>
                        <a class="dropdown-item" href="#">Tin học và kỹ thuật tính toán</a>
                        <a class="dropdown-item" href="#">Trung tâm tin học</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Sinh Viên</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="diendan.php">Diễn Đàn</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Liên hệ</a>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tài Khoản</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="dangnhap.php">Đăng nhập</a>
                        <a class="dropdown-item" href="dangki.php">Đăng kí</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" >
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="color:white; background-color: forestgreen ">Search</button>
            </form>
        </div>
    </nav>
</div>

<center>
    <div>
        <form name="" action="" method="post">
            <div style="max-width: 1000px; margin-top: 30px">
                <div class="input-group flex-nowrap">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">Người đăng:</span>
                    </div>
                    <input type="text" class="form-control" name="txtname" value="<?php echo $_SESSION['fullname'];?>" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <div class="input-group flex-nowrap">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">Lớp:</span>
                    </div>
                    <input type="text" class="form-control" name="txtclass" value="<?php echo $_SESSION['class'];?>" placeholder="class" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <div class="input-group flex-nowrap">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">Câu hỏi:</span>
                    </div>
                    <input type="text" class="form-control" name="txtquestion" value="" placeholder="Question" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <div class="input-group flex-nowrap">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">Nội dung:</span>
                    </div>
                    <textarea cols="5px" rows="15px" class="form-control" name="txtabc" value="" placeholder="Type..." aria-label="Username" aria-describedby="addon-wrapping">

                </textarea>

                </div>

                <input type="submit" name="create" value="Lưu" type="button" class="btn btn-primary">
                <input type="reset" name="reset" value="Reset" type="button" class="btn btn-primary">

            </div>


        </form>
    </div>
</center>
</body>
