<?php

const host="localhost";
const username="root";
const pass='';
const dbname='forum';
const port='3306';

//hàm chuẩn bị câu lệch kết nối tớ csdl
function connection()
{
    //chuẩn bị câu lệnh
    $con=mysqli_connect(host,username,pass,dbname,port);
    //trả về $con có câu lệnh kết nối
    //nếu câu lệnh sai thì hiển thị:
    if (!$con)
    {
        die("Không thể kết nối");
    }
    //nếu câu lệnh đúng sẽ trả về $con
    return $con;
}
function selectall()
{
    $getcon=connection();
    $sqL_select="SELECT * FROM forum";
    $result=mysqli_query($getcon,$sqL_select);
    $users=mysqli_fetch_all($result);
    return $users;
}
function isinsert($name,$class,$question,$abc,$masv)
{
    $getcon=connection();

    $sql_insert = "insert into forum (name,class,question,abc,masv) 
                            values ('$name', '$class','$question','$abc','$masv') ";


    $result=mysqli_query($getcon,$sql_insert);
    if ($result)
    {
        echo "Insert thành công :>";
    }
    else
    {
        echo "Insert thất bại";
    }
}
function updateforid($id,$name,$class,$question,$abc)
{
    $getcon = connection();
    $sql_update = "UPDATE `forum` SET `id`='$id', `name`='$name', `class`='$class',`question`='$question',`abc`='$abc' ";
}

function selectforid($id)
{
    $getcon=connection();
    $sqL_select="SELECT * FROM forum where id=$id";
    $result=mysqli_query($getcon,$sqL_select);
    $users=mysqli_fetch_assoc($result);
    return $users;
}
function delete($id,$masv) {
    $getcon = connection();
    $sql_delete = " delete from `forum` where `id` = $id AND`masv`=$masv";
    $result = mysqli_query($getcon, $sql_delete);
    if($result) {
        echo  'delete thành công';
    }

    return $result;
}
function dangki($masv, $pass,$name,$class,$sdt,$gender)
{
    $getcon = connection();
    $sql_insert = " insert into users(masv,pass,name,class,sdt,gender)
                    values ('$masv', '$pass','$name','$class','$sdt','$gender')";
    $result=mysqli_query($getcon,$sql_insert);
    if ($result)
    {
        echo "Insert thành công :>";
    }
    else
    {
        echo "Insert thất bại";
    }
}


function sosanh($masv, $pass)
{
    $kiemtra = false;
    $connection = connection();
    $sql_select = "SELECT * FROM users";
    $results = mysqli_query($connection, $sql_select);
//kiểm tra xem có bản ghi nào trả về từ câu truy vấn select hay ko
    if (mysqli_num_rows($results) > 0) {
        //lấy ra được dữ liệu mong muốn,
//    cần chú ý phải truyền hằng MYSQLI_ASSOS để có thể trả về 1 mảng
//    kết hợp
        $forums = mysqli_fetch_all($results, MYSQLI_ASSOC);
        //lặp và hiển thị ra các thông tin
        foreach ($forums as $forum) {
            if ($masv == $forum['masv'] && $pass == $forum['pass']) {
                $kiemtra = true;
                break;
            }
        }
    }
    return $kiemtra;
}


function selectformasv($masv)
{
    $getcon=connection();
    $sqL_select="SELECT * FROM users where masv=$masv";
    $result=mysqli_query($getcon,$sqL_select);
    $users=mysqli_fetch_all($result);
    return $users;
}
function selectall2()
{
    $getcon=connection();
    $sqL_select="SELECT * FROM forum2";
    $result=mysqli_query($getcon,$sqL_select);
    $users=mysqli_fetch_all($result);
    return $users;
}
function selectall3()
{
    $getcon=connection();
    $sqL_select="SELECT * FROM forum3";
    $result=mysqli_query($getcon,$sqL_select);
    $users=mysqli_fetch_all($result);
    return $users;
}

function isinsert2($name,$class,$question,$abc,$masv)
{
    $getcon=connection();

    $sql_insert = "insert into forum2 (name,class,question,abc,masv) 
                            values ('$name', '$class','$question','$abc','$masv') ";


    $result=mysqli_query($getcon,$sql_insert);
    if ($result)
    {
        echo "Insert thành công :>";
    }
    else
    {
        echo "Insert thất bại";
    }
}
function isinsert3($name,$class,$question,$abc,$masv)
{
    $getcon=connection();

    $sql_insert = "insert into forum3 (name,class,question,abc,masv) 
                            values ('$name', '$class','$question','$abc','$masv') ";


    $result=mysqli_query($getcon,$sql_insert);
    if ($result)
    {
        echo "Insert thành công :>";
    }
    else
    {
        echo "Insert thất bại";
    }
}
function delete2($id, $masv) {
    $getcon = connection();
    $sql_delete = " delete from `forum2` where `id` = $id AND`masv`=$masv";
    $result = mysqli_query($getcon, $sql_delete);
    if($result) {
        echo  'delete thành công';
    }
    return $result;
}
function delete3($id, $masv) {
    $getcon = connection();
    $sql_delete = " delete from `forum3` where `id` = $id AND`masv`=$masv";
    $result = mysqli_query($getcon, $sql_delete);
    if($result) {
        echo  'delete thành công';
    }
    return $result;
}
function soluong()
{
    $getcon=connection();
    $sqL_select="SELECT COUNT(id) FROM forum";
    $result=mysqli_query($getcon,$sqL_select);
    $soluong=mysqli_fetch_all($result);
    return $soluong;
}
function soluong2()
{
    $getcon=connection();
    $sqL_select="SELECT COUNT(id) FROM forum2";
    $result=mysqli_query($getcon,$sqL_select);
    $soluong2=mysqli_fetch_all($result);
    return $soluong2;
}
function soluong3()
{
    $getcon=connection();
    $sqL_select="SELECT COUNT(id) FROM forum3";
    $result=mysqli_query($getcon,$sqL_select);
    $soluong3=mysqli_fetch_all($result);
    return $soluong3;
}
    ?>