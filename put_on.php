<?php
/**
 * Created by PhpStorm.
 * User: tonghongxiang
 * Date: 2017/12/8
 * Time: 上午11:05
 */
$dbc=mysqli_connect('127.0.0.1','root','765256','book')
or die("ERROR to connect mysqli");

$query="SELECT * FROM book_list ORDER BY B_no DESC ";

$result=mysqli_query($dbc,$query)
or die("ERROR query");

for ($i=1;$i<11;$i++){
    $sql_arr=mysqli_fetch_assoc($result);
    $pc_name=$sql_arr['tupian'];
    $book_name=$sql_arr['B_name'];
    $book_price=$sql_arr['price'];
    $look_num=$sql_arr['look_num'];
    $id=$sql_arr['B_no'];

    echo "
    <div style='width: 170px;height: 250px;border: solid 1px #e6e6e6;display: inline-block;margin: 0;float: left'><div style='margin-top: 10px'>
    <a  href='叮当网主站.html' style='position:relative;'><img id='$id' class='a_ll' src='../upload/$pc_name 'style='position:relative;left: 3px;width: 120px;'></a><br>
    <a id='$id' class='a_ll' href='叮当网主站.html' style='position:relative;font-size: 0.8em'>$book_name</a><br>
    <a style='font-size:20px;color: red;position:relative;'>¥$book_price</a>
    <img src='image/眼睛.png' style='width: 15px; margin-left:40px'>
    <a   style='font-size: 0.7em;color: red;'>$look_num</a><br>
    <a  href='购物车.html' id='$id' class='buy_book' style='color: white;background-color:#d51927;padding: 5px;position: relative;bottom: -20px;border-radius: 4px;font-size: 0.8em'><img src='image/shopping_cart.png' style='width: 23px;position:relative;top: 3px;left: -3px;margin: auto 3px auto 3px;'>加入购物车</a>
    </div>
    </div>
    ";
}
?>