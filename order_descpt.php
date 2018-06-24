<?php
/**
 * Created by PhpStorm.
 * User: tonghongxiang
 * Date: 2017/12/9
 * Time: 下午7:25
 */

session_start();

$type=$_SESSION['user_name'];
$type1=$_SESSION['user_id'];

$dbc=mysqli_connect('127.0.0.1','root','765256','book')
or die("ERROR to connect mysqli");

$query1="SELECT * FROM order_list WHERE user_id=$type1";
$result1=mysqli_query($dbc,$query1)
or die("ERROR query");


$arr_row=mysqli_num_rows($result1);
echo "
<table><tr>
            <td>订单号</td>
            <td>总价格</td>
            <td>下单时间</td>
            <td>地址</td>
            <td>收货人</td>
            <td>详情</td>
       </tr>";

for($i=0;$i<$arr_row;$i++) {
    $sql_arr1 = mysqli_fetch_assoc($result1);
    $user_name=$sql_arr1['user_name'];
    $address=$sql_arr1['address'];
    $order_id=$sql_arr1['order_id'];
    $price=$sql_arr1['price'];
    $order_time=$sql_arr1['order_time'];

    echo "
    <tr>
        <td>$order_id</td>
        <td>$price</td>
        <td>$order_time</td>
        <td>$address</td>
        <td>$user_name</td>
        <td ID='$order_id' class='dd'>🔎</td>
    </tr>
    ";

}
echo "</table>";

