<?php
/**
 * Created by PhpStorm.
 * User: tonghongxiang
 * Date: 2017/12/11
 * Time: 下午4:29
 */
$admin_name=$_POST['admin_name'];
$admin_pw=$_POST['admin_pw'];
$adminpw=$_POST['adminpw'];

$dbc=mysqli_connect('127.0.0.1','root','765256','book')
or die('Error connecting to MySQL sever');

if($admin_pw==$adminpw) {
    $query = "INSERT INTO admin_list(admin_name,admin_pw) VALUES ('$admin_name','$admin_pw')"
    or die("ERROR query");

    $result = mysqli_query($dbc, $query)
    or die("ERROR result");

}
else{
    echo "俩次输入密码不同";
}
mysqli_close($dbc);