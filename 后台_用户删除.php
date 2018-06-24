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
    .user_span{
        text-decoration-line: none;
    }
    .user_span:hover{
        color: red;
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

$query = "SELECT * FROM user_list ";

$result=mysqli_query($dbc,$query);

$sql_arr=mysqli_num_rows($result);

echo "<div id=\"container\"><table>
        <tr>     <td>编号</td>
                 <td>账号</td>
                 <td>手机号</td>
                 <td>操作</td>
                 </tr>";

for ($i=0;$i<$sql_arr;$i++){
    $sql_qrr=mysqli_fetch_assoc($result);
    $B_no=$sql_qrr['user_id'];
    $dalei=$sql_qrr['U_name'];
    $xiaolei=$sql_qrr['P_num'];

    echo "<tr>
            <td>$B_no</td>
            <td>$dalei</td>
            <td>$xiaolei</td>
            <td><a href='后台_用户删除.php' id='$B_no' class='dt' style='text-decoration-line: none;color: red'>删除</a></td>
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
            url: "后台_用户删除表单.php",
            type: "POST",
            data: {name3: d}
        });
    });

</script>
</body>
