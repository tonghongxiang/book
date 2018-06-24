<?php
/**
 * Created by PhpStorm.
 * User: tonghongxiang
 * Date: 2017/12/6
 * Time: 下午3:21
 */
session_start();
if( empty($_SESSION["user_id"]) ){
    echo "请先登陆!<a href='log.html'>点击这里登陆</a>";
}else{

    $type5=$_SESSION["user_id"];

    $type4=$_POST['name4'];

    $dbc=mysqli_connect('127.0.0.1','root','765256','book')
    or die("ERROR to connect mysqli");

    $query="SELECT * FROM book_list WHERE B_no='$type4'";
    $result=mysqli_query($dbc,$query)
    or die("ERROR query");
    $sql_arr0 = mysqli_fetch_assoc($result);
    $book_name = $sql_arr0['B_name'];
    $book_price = $sql_arr0['price'];
    $book_url=$sql_arr0['tupian'];


    $query1="SELECT * FROM user_list WHERE user_id='$type5'";
    $result1=mysqli_query($dbc,$query1)
    or die("ERROR query");
    $sql_arr1 = mysqli_fetch_assoc($result1);
    $user_id=$sql_arr1['user_id'];

    $query2_1="SELECT * FROM buy WHERE book_id='$type4' AND state=0";
    $result2_1=mysqli_query($dbc,$query2_1);
    $arr_now_2=mysqli_num_rows($result2_1);

    if(empty($arr_now_2)){
        $query2="INSERT INTO buy(user_id,book_id,buy_name,buy_price,buy_count,book_url,state,order_id) VALUES('$type5','$type4','$book_name',$book_price,1,'$book_url',0,0)"
        or die("ERROR");
        $result2=mysqli_query($dbc,$query2);
    }
    else{
        $query2_2="UPDATE buy SET buy_count=buy_count+1 WHERE book_id='$type4' AND state=0";
        $result2_2=mysqli_query($dbc,$query2_2);
    }

    mysqli_close($dbc);
}

