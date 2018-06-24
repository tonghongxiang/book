<?php
/**
 * Created by PhpStorm.
 * User: tonghongxiang
 * Date: 2017/11/29
 * Time: 下午10:58
 */


session_start();

$type5=$_SESSION["user_id"];

$dbc=mysqli_connect('127.0.0.1','root','765256','book')
or die("ERROR to connect mysqli");

$query3="SELECT * FROM buy WHERE user_id=$type5";
$result3=mysqli_query($dbc,$query3);

$data_row=mysqli_num_rows($result3);

for ($i=0;$i<$data_row;$i++) {
    $a=0;
    $sql_arr = mysqli_fetch_assoc($result3);
    $order_id = $sql_arr['id'];
    $order_book_name = $sql_arr['buy_name'];
    $order_book_count = $sql_arr['buy_count'];
    $order_book_price = $sql_arr['buy_price'];
    $a=$a+$order_book_price;
    $order_book_url=$sql_arr['book_url'];
    $all=$order_book_count*$a;

    echo "
    <div>
    <a>$order_book_name</a>
    <a href='###' ID='$order_id' class='dt'>删除</a>
</div>
    ";
}