<?php
/**
 * Created by PhpStorm.
 * User: tonghongxiang
 * Date: 2017/12/5
 * Time: 下午1:32
 */
$type3=$_POST['name3'];

$dbc=mysqli_connect('127.0.0.1','root','765256','book')
or die("ERROR to connect mysqli");

$query3="UPDATE book_list SET look_num = look_num+1 WHERE B_no LIKE $type3 ";

$result3=mysqli_query($dbc,$query3)
or die("ERROR query");

mysqli_close($dbc);
