<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>查看用户</title>
    <style type="text/css">
        tbody{
        }
        tr{
        }
        tr td{
            border: solid 1px #e6e6e6;
            padding: 5px;
        }
    </style>
</head>
<body>
<table style="border-collapse:collapse;">
    <tr style="background-color:#efefef">
        <td>编号</td>
        <td>账号</td>
        <td>密码</td>
        <td>手机号</td>
        <td>邮箱</td>
        <td>收货人姓名</td>
        <td>收货地址</td>
        <td>性别</td>
        <td>账号添加时间</td>
    </tr>

    <?php
    /**
     * Created by PhpStorm.
     * User: tonghongxiang
     * Date: 2017/11/28
     * Time: 下午12:55
     */
    $dbc=mysqli_connect('127.0.0.1','root','765256','book')
    or die('Error connecting to MySQL sever');

    $query="SELECT * FROM user_list";

    $result=mysqli_query($dbc,$query)
    or die("ERROR to query");

    $datarow=mysqli_num_rows($result);

    for ($i=0;$i<$datarow;$i++){
        $sql_arr=mysqli_fetch_assoc($result);
        $id=$sql_arr['user_id'];
        $zhang_hao=$sql_arr['U_name'];
        $mi_ma=$sql_arr['PW'];
        $phone_num=$sql_arr['P_num'];
        $email=$sql_arr['email'];
        $address_name=$sql_arr['Address_name'];
        $address=$sql_arr['Address'];
        $sex=$sql_arr['Sex'];
        $add_time=$sql_arr['add_time'];

        echo "<tr>
        <td>$id</td>
        <td>$zhang_hao</td>
        <td>$mi_ma</td>
        <td>$phone_num</td>
        <td>$email</td>
        <td>$address_name</td>
        <td>$address</td>
        <td>$sex</td>
        <td>$add_time</td>
      </tr>";
    };
    mysqli_close($dbc)
    ?>
</table>
</body>
</html>