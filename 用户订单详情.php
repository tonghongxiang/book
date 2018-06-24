
<?php
/**
 * Created by PhpStorm.
 * User: tonghongxiang
 * Date: 2017/12/6
 * Time: 下午3:21
 */
$type=$_POST['name4'];

session_start();

echo "
<table style=\"border-collapse:collapse;\" id=\"table\">
<tr>
            <td style=\"width: 20%\">预览</td>
            <td style=\"width: 40%\">商品名称</td>
            <td style=\"width: 10%\">单价</td>
            <td style=\"width: 10%\">数量</td>
            <td style=\"width: 10%\">小计</td>
        </tr>
";

if( empty($_SESSION["user_id"]) ){
    echo "请先登陆!<a href='log.html'>点击这里登陆</a>";
}else{
    $type5=$_SESSION["user_id"];

    $dbc=mysqli_connect('127.0.0.1','root','765256','book')
    or die("ERROR to connect mysqli");

    $query3="SELECT * FROM buy WHERE order_id=$type";
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


        echo "<tr>
        <td><img src='../upload/$order_book_url' style='height: 50px'></td>
        <td>$order_book_name</td>
        <td>$order_book_price</td>
        <td>$order_book_count</td>
        <td ID='$all' class='price_td'>$all</td>
    </tr>";
    };
    mysqli_close($dbc);
}

echo "
    </table>";

