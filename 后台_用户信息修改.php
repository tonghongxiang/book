<?php
/**
 * Created by PhpStorm.
 * User: tonghongxiang
 * Date: 2017/12/11
 * Time: 上午11:42
 */

$zhanghao=$_POST['name'];
$sex=$_POST['name4'];

$dbc=mysqli_connect('127.0.0.1','root','765256','book')
or die('ERROR to connect!');

$query3="SELECT * FROM user_list WHERE U_name LIKE '%$zhanghao%' AND Sex LIKE '%$sex%'";

$result3=mysqli_query($dbc,$query3);
$sql_qrr=mysqli_num_rows($result3);

for ($i=0;$i<$sql_qrr;$i++){


    $sql_arr = mysqli_fetch_assoc($result3);
    $user_id=$sql_arr['user_id'];
    $U_name=$sql_arr['U_name'];
    $P_num=$sql_arr['P_num'];
    $email=$sql_arr['email'];
    $Address_name=$sql_arr['Address_name'];
    $Address=$sql_arr['Address'];
    $Sex=$sql_arr['Sex'];
    $add_time=$sql_arr['add_time'];

    echo "
   
    <table align='center'>
        <tr>
            <td style='width: 20%;color: #aaaaaa'>账号：</td>
            <td style='width: 45%;color: #aaaaaa'>$U_name</td>
            <td style='width: 20%;color: #aaaaaa'>ID:<a>$user_id</a></td>
            
        </tr>
         <tr>
            <td>手机号：</td>
            <td><input value='$P_num' id='P_num'></td>
            <td style='color:red;text-decoration-line: none;' class='up_address' value='P_num' name='$user_id'>修改</td>
        </tr>
        <tr>
            <td>邮箱：</td>
            <td><input value='$email' id='email'></td>
            <td style='color:red;text-decoration-line: none' class='up_address' value='email' name='$user_id'>修改</td>
        </tr>
        <tr>
            <td>收件地址：</td>
            <td><input value='$Address' id='Address'></td>
            <td style='color:red;text-decoration-line: none' class='up_address' value='Address' name='$user_id'>修改</td>
        </tr>
        <tr>
            <td>收货人：</td>
            <td><input value='$Address_name' id='Address_name'></td>
            <td style='color:red;text-decoration-line: none' class='up_address' value='Address_name' name='$user_id'>修改</td>
        </tr>
         <tr>
            <td>性别：</td>
            <td><input value='$Sex' id='Sex'></td>
            <td style='color:red;text-decoration-line: none' class='up_address' value='Sex' name='$user_id'>修改</td>
        </tr>
        
        
    </table>
        <p style='color: #aaaaaa;font-size: 0.8em'>此账号创建于：$add_time</p>

    ";

}
