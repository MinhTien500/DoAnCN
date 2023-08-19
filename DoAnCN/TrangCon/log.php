<?php

$U =$_POST['UserName'];
$P=$_POST['PassWord'];

$db=mysqli_connect("localhost","root","","qlgiay");
$sql="select*from DangKy where UserName ='$U' and PassWord='$P'";

$rs=mysqli_query($db,$sql);
if(mysqli_num_rows($rs)>0){
   header('location: HAF.php');
}else{
    echo"Thất bại";
}


?>