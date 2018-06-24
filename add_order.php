<?php
/**
 * Created by PhpStorm.
 * User: tonghongxiang
 * Date: 2017/12/9
 * Time: 下午4:11
 */
$price=$_POST['td'];
session_start();

$dbc=mysqli_connect('127.0.0.1','root','765256','book')
or die("ERROR to connect mysqli");
if( empty($_SESSION["user_id"]) ){
    echo "请先登陆!<a href='log.html'>点击这里登陆</a>";
}else {
    $type=$_SESSION['user_id'];
    $query0="SELECT * FROM user_list";
    $result0=mysqli_query($dbc,$query0);
    $sql_arr0=mysqli_fetch_assoc($result0);
    $address=$sql_arr0['Address'];
    $Address_name=$sql_arr0['Address_name'];




    $user_id=$_SESSION["user_id"];
    $user_name=$_SESSION['user_name'];


    $query3="SELECT * FROM buy WHERE user_id=$type AND state=0";
    $result3=mysqli_query($dbc,$query3);
    $sql_arr3=mysqli_fetch_assoc($result3);
    $buy_count=$sql_arr3['buy_count'];
    $book_id=$sql_arr3['book_id'];
    $buy_name=$sql_arr3['buy_name'];
    $buy_price=$sql_arr3['buy_price'];




    if ($price>0)
    {
        $query1="INSERT INTO order_list(user_id,user_zhanghao,user_name,address,price,order_time) VALUES ('$user_id','$user_name','$Address_name','$address',$price,now())"
        or die("ERROR query1");
        $result1=mysqli_query($dbc,$query1);

        $query4="SELECT * FROM order_list ORDER BY order_id DESC ";
        $result4=mysqli_query($dbc,$query4);
        $sql_arr1=mysqli_fetch_array($result4);
        $order_id=$sql_arr1['order_id'];

       $query = "UPDATE buy SET state=1,order_id=$order_id WHERE user_id=$type AND state=0"
        or die("ERROR query");
        $result=mysqli_query($dbc,$query)
        or die("ERROR result");

    }

}
mysqli_close($dbc);