<html>
<head>
    <title>注册</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: tonghongxiang
 * Date: 2017/11/23
 * Time: 下午10:51
 */
$zhang_hao=$_POST['zh'];
$mi_ma=$_POST['mm'];
$queren_mima=$_POST['qrmm'];
$phone_num=$_POST['sjh'];
$email=$_POST['email'];
$address_name=$_POST['Address_name'];
$address=$_POST['Address'];
$sex=$_POST['Sex'];

$dbc=mysqli_connect('127.0.0.1','root','765256','book')
or die('Error connecting to MySQL sever');

if($mi_ma==$queren_mima){
    $query="INSERT INTO user_list(U_name,PW,P_num,email,Address_name,Address,Sex,add_time)".

        "VALUES ('$zhang_hao','$mi_ma','$phone_num','$email','$address_name','$address','$sex',now())";

    $result=mysqli_query($dbc,$query)
    or  die('Error query database');

    mysqli_close($dbc);

    header('location:log.html');
}
else{
    echo "<script>alert('俩次输入密码不一致！')</script>";
}

?>
</body>
</html>