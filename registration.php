<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistraion');

$name=$_POST['user'];
$pass=$_POST['password'];
$s="select * form usertable where name = '$name'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
    echo"Email already taken";
}else{
    $reg="insert into usertable(name,password) values('$name','$pass')";
    mysqli_query($con,$reg);
    echo"Restration Sussesfull";
}
?>