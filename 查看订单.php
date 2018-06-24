
<body style="text-align:center ;margin: 0">
<style type="text/css">
    table{
    width: 600px;
        margin: 0 auto;
        text-align: center;
    }
    table tr{
    border: none;
    padding: 5px;
    }
    table tr:nth-child(odd){
background:#f5f5f5 ;
    }
    tr td{
    border: none;
    padding: 5px;
    }
</style>
<?php
/**
 * Created by PhpStorm.
 * User: tonghongxiang
 * Date: 2017/12/12
 * Time: 上午11:27
 */

$dbc = mysqli_connect('127.0.0.1', 'root', '765256', 'book') or die('ERROR to connect!');

$query = "SELECT * FROM order_list ";

$result=mysqli_query($dbc,$query);

$sql_arr=mysqli_num_rows($result);

echo "<div id=\"container\"><table>
        <tr>     <td>订单号</td>
                 <td>用户账号</td>
                 <td>收件人</td>
                 <td>收件地址</td>
                 <td>价格</td>
                 <td>添加时间</td>
                 </tr>";

for ($i=0;$i<$sql_arr;$i++){
    $sql_qrr=mysqli_fetch_assoc($result);
    $order_id=$sql_qrr['order_id'];
    $user_zhanghao=$sql_qrr['user_zhanghao'];
    $user_name=$sql_qrr['user_name'];
    $address=$sql_qrr['address'];
    $price=$sql_qrr['price'];
    $order_time=$sql_qrr['order_time'];

    echo "<tr>
            <td>$order_id</td>
            <td>$user_zhanghao</td>
            <td>$user_name</td>
            <td>$address</td>
            <td>$price</td>
            <td>$order_time</td>
          </tr>
    
    ";

}
echo "</table></div>";
?>
<script type="text/javascript" src="JS/jquery.js" ></script>
<script type="text/javascript">

    $('#container').on("click",".dt",function () {/*动态绑定刷新数据事件*/
        var d=$(this).attr('id');
        $.ajax({
            url: "后台_图书删除表单.php",
            type: "POST",
            data: {name3: d}
        });
    });

</script>
</body>
