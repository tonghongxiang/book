<html>
<head>
    <title>详情页</title>
    <style type="text/css">

    </style>
</head>
<body style="text-align: center;margin: 0">
<div id=container>
<?php
/**
 * Created by PhpStorm.
 * User: tonghongxiang
 * Date: 2017/12/9
 * Time: 下午11:12
 */

$type7=$_POST['name5'];

$dbc=mysqli_connect('127.0.0.1','root','765256','book')
or die("ERROR to connect mysqli");

$query="SELECT * FROM book_list WHERE B_no='$type7'";

$result=mysqli_query($dbc,$query)
or die("ERROR query");

$sql_arr=mysqli_fetch_assoc($result);
$pc_name=$sql_arr['tupian'];
$book_name=$sql_arr['B_name'];
$book_price=$sql_arr['price'];
$look_num=$sql_arr['look_num'];
$id=$sql_arr['B_no'];

echo "
    <div>
        <a  href='###' style='position:relative;'><img src='../upload/$pc_name 'style='position:relative;left: 3px;width: 120px;'></a><br>
    </div>
"

?>
</div>
</body>
</html>