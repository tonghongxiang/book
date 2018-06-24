<?php
/**
 * Created by PhpStorm.
 * User: tonghongxiang
 * Date: 2017/12/10
 * Time: 下午11:31
 */
session_start();
$user_id=$_SESSION["user_id"];

$address=$_POST['address'];
$name=$_POST['name'];
$phone_num=$_POST['phone'];

$dbc=mysqli_connect('127.0.0.1','root','765256','book')
or die("ERROR to connect mysqli");

$query="UPDATE user_list SET P_num='$phone_num',Address_name='$name',Address='$address' WHERE user_id=$user_id ";

$result=mysqli_query($dbc,$query)
or die(mysqli_error($dbc));

mysqli_close($dbc);