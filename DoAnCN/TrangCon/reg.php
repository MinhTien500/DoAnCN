<?php


require'DB/connect.php';
if(isset($_POST['Btn-REG'])){


    $UserName=$_POST['UserName'];
    $Name=$_POST['Name'];
    $PassWord=$_POST['PassWord'];
    $DiaChi=$_POST['DiaChi'];
    $NumberPhone=$_POST['NumberPhone'];
    $GioiTinh=$_POST['GioiTinh'];


    $sql="INSERT INTO`DangKy`(`Name`,`UserName`,`PassWord`,`DiaChi`,`NumberPhone`,`GioiTinh`) VALUES('$Name','$UserName','$PassWord','$DiaChi','$NumberPhone','$GioiTinh')";
    if($conn->query($sql)===TRUE){
       header('location:DangKySC.php');
    }else{
        echo"Lỗi{$sql}".$conn->error;
    }


}
?>