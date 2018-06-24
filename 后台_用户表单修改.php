<?php
/**
 * Created by PhpStorm.
 * User: tonghongxiang
 * Date: 2017/12/5
 * Time: 下午1:32
 */
$zi_duan=$_POST['name1'];
$user_id=$_POST['name3'];
$value=$_POST['name2'];

$dbc=mysqli_connect('127.0.0.1','root','765256','book')
or die("ERROR to connect mysqli");

$query3="UPDATE user_list SET $zi_duan='$value'  WHERE user_id='$user_id' ";

$result3=mysqli_query($dbc,$query3)
or die("ERROR query");

mysqli_close($dbc);
