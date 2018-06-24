<?php
/**
 * Created by PhpStorm.
 * User: tonghongxiang
 * Date: 2017/12/8
 * Time: 下午7:43
 */

$u_id=$_POST['name3'];

$dbc=mysqli_connect('127.0.0.1','root','765256','book')
or die("ERROR to connect mysqli");

$query3="DELETE FROM buy WHERE id=$u_id AND state=0";

$result3=mysqli_query($dbc,$query3)
or die("ERROR query");

mysqli_close($dbc);