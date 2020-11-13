<?php
session_start();
if (!isset($_SESSION['fullname']))
{
    header("location: dangnhap.php");
    exit();
}
if (isset($_POST['logout']))
{
    unset($_SESSION['fullname']);
    header("location: dangnhap.php");
    exit();
}

require_once "config.php";
$soluongs=soluong();
$soluong2s=soluong2();
$soluong3s=soluong3();
foreach ($soluongs as $soluong)
{
    $sobaiviet=$soluong['0'];
}

foreach ($soluong2s as $soluong2)
{
    $sobaiviet2=$soluong2['0'];
}

foreach ($soluong3s as $soluong3)
{
    $sobaiviet3=$soluong3['0'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Trang chủ</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="ddan.css">
</head>
<body>
<div class="container">
    <!-- phần đầu -->
    <div class="header">
        <a href="trangchu.php"><div class="header-logo" >
                <img src="http://cse.tlu.edu.vn/cse/assets/images/logo.jpg" alt="" >

            </div></a>
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

        <div style="text-align: right; margin: 0px 50px 0px 50px"><a href="thongtin.php">
                <?php

                echo "<b>Xin chào</b><br>";
                echo $_SESSION['fullname'];

                ?></a>

            <form method="post">
                <input type="submit" value="Đăng xuất" name="logout">
            </form>
        </div>
    </div>

    <!-- phần thân -->
    <div class="body">


        <!-- form 1-->
        <div class="title-2">
            <div class="title">
                <h5>1. CSE Forum</h5>
            </div>

            <div class="col-md-12">
                <div class="col-md-6">
                    <a href="forum.php"><i class="far fa-comment"></i> Sự kiện CSE Forum</a>
                </div>
                <div class="col-md-2">
                    <span> <?php echo "$sobaiviet";?> Ports</span>
                </div>
                <div class="col-md-4">
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-6">
                    <a href="forum2.php"><i class="far fa-comment"></i> Góp ý, kiến nghị cho CSE Forum</a>
                </div>
                <div class="col-md-2">
                    <span><?php echo "$sobaiviet2";?> Ports </span>
                </div>
                <div class="col-md-4"></div>
            </div>

            <div class="col-md-12">
                <div class="col-md-6">
                    <a href="forum3.php"><i class="far fa-comment"></i> Phòng truyền thông CSE Forum</a>
                </div>
                <div class="col-md-2">
                    <span><?php echo "$sobaiviet3";?> Ports </span>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <!-- form 2-->
        <div class="title-2">
            <div class="title">
                <h5>2. Đồng hành cùng mùa thi</h5>
            </div>
            <div class="col-md-12">
                <div class="col-md-6">
                    <a href="diendan.php"><i class="far fa-comment"></i> Thông tin tuyển sinh</a>
                </div>
                <div class="col-md-2">
                    <span   >0 Ports</span>
                </div>
                <div class="col-md-4">

                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-6">
                    <a href="diendan.php"><i class="far fa-comment"></i> Chia sẻ kinh nghiệm</a>
                </div>
                <div class="col-md-2">
                    <span>0 Ports </span>
                </div>
                <div class="col-md-4">
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-6">
                    <a href="diendan.php"><i class="far fa-comment"></i> Tài liệu ôn thi</a>
                </div>
                <div class="col-md-2">
                    <span>0 Ports </span>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <!-- form 3-->
        <div class="title-3">
            <div class="title">
                <h5>3. Hành lang lớp học</h5>
            </div>

            <div class="col-md-12">
                <div class="col-md-6">
                    <a href="ddan.html"><i class="far fa-comment"></i> Trên giảng đường</a>
                </div>
                <div class="col-md-2">
                    <span>0 Ports</span>
                </div>
                <div class="col-md-4"></div>
            </div>
            <div class="col-md-12">
                <div class="col-md-6">
                    <a href="ddan.html"><i class="far fa-comment"></i> Ngoài giảng đường</a>
                </div>
                <div class="col-md-2">
                    <span>0 Ports </span>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <!-- form 4-->
        <div class="title-4">
            <div class="title">
                <h5>4. Đào tào hướng nghiệp</h5>
            </div>

            <div class="col-md-12">
                <div class="col-md-6">
                    <a href="ddan.html"><i class="far fa-comment"></i> Chia sẻ tài liệu bằng tiếng Việt</a>
                </div>
                <div class="col-md-2">
                    <span>0 Ports</span>
                </div>
                <div class="col-md-4"></div>
            </div>
            <div class="col-md-12">
                <div class="col-md-6">
                    <a href="ddan.html"><i class="far fa-comment"></i> Các chứng chỉ Quốc tế về CNTT, tiếng Anh</a>
                </div>
                <div class="col-md-2">
                    <span>0 Ports </span>
                </div>
                <div class="col-md-4"></div>
            </div>
            <div class="col-md-12">
                <div class="col-md-6">
                    <a href="ddan.html"><i class="far fa-comment"></i> Chia sẻ các tài liệu bằng tiếng Anh</a>
                </div>
                <div class="col-md-2">
                    <span>0 Ports </span>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <!-- form 5-->
        <div class="title-5">
            <div class="title">
                <h5>5. Các thế hệ sinh viên</h5>
            </div>

            <div class="col-md-12">
                <div class="col-md-6">
                    <a href="ddan.html"><i class="far fa-comment"></i> K58</a>
                </div>
                <div class="col-md-2">
                    <span>0 Ports</span>
                </div>
                <div class="col-md-4"></div>
            </div>
            <div class="col-md-12">
                <div class="col-md-6">
                    <a href="ddan.html"><i class="far fa-comment"></i> K59</a>
                </div>
                <div class="col-md-2">
                    <span>0 Ports </span>
                </div>
                <div class="col-md-4"></div>
            </div>
            <div class="col-md-12">
                <div class="col-md-6">
                    <a href="ddan.html"><i class="far fa-comment"></i> K60</a>
                </div>
                <div class="col-md-2">
                    <span>0 Ports </span>
                </div>
                <div class="col-md-4"></div>
            </div>
            <div class="col-md-12">
                <div class="col-md-6">
                    <a href="ddan.html"><i class="far fa-comment"></i> K61</a>
                </div>
                <div class="col-md-2">
                    <span>0 Ports </span>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <!-- form 6-->
        <div class="title-6">
            <div class="title">
                <h5>CSE.TLU - INFO CENTER</h5>
            </div>
            <div class="col-md-12 col-end">
                <a href="ddan.html"><i class="fas fa-chart-pie"></i> Forum stats</a>
                <span>8 posts in 5 topics by 1 Members - Letest Member: <a href="">Admin</a> - Most Online Today: 1</span>
                <span>Latest Post: "<a href="ddan.html">Re: Điểm sàn tuyển sinh...
                    </a>" (September 15, 2020, 01: 01:58 am ) - <a href="ddan.html">View all recent posts.</a></span>
            </div>

            <div class="col-md-12 col-end">
                <span><i class="fas fa-chalkboard-teacher"></i> Online now: 0 User, 1 Guest </span>
            </div>

            <div class="col-md-12 two-icon">
                <span><i class="far fa-comment"></i> No new Posts</span>
                <span><i class="fas fa-video"></i> Redirect Board</span>
            </div>
        </div>
    </div>
</div>

<!-- phần cuối -->
<div class="footer">
    <span class="col-md-8">Powered by ElkArte 1.1.6 | Credits</span>
    <i class="fas fa-wifi"></i>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="diendan.js"></script>
</body>
</html>
