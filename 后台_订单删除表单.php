<?php
/**
 * Created by PhpStorm.
 * User: tonghongxiang
 * Date: 2017/12/11
 * Time: 下午5:20
 */
$id=$_POST['name3'];

$dbc=mysqli_connect('127.0.0.1','root','765256','book')
or die("ERROR to connect mysqli");

$query3="DELETE FROM order_list WHERE order_id='$id'";

$result3=mysqli_query($dbc,$query3)
or die("ERROR query");

mysqli_close($dbc);