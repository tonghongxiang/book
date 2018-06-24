<?php
/**
 * Created by PhpStorm.
 * User: tonghongxiang
 * Date: 2017/12/10
 * Time: 下午5:43
 */

session_start();

if( empty($_SESSION["user_id"]) ){
    echo "请先登陆!<a href='log.html'>点击这里登陆</a>";
}else{
    $type5=$_SESSION["user_id"];

    $dbc=mysqli_connect('127.0.0.1','root','765256','book')
    or die("ERROR to connect mysqli");

    $query3="SELECT * FROM user_list WHERE user_id=$type5";

    $result3=mysqli_query($dbc,$query3);

    $sql_arr = mysqli_fetch_assoc($result3);
    $U_name=$sql_arr['U_name'];
    $P_num=$sql_arr['P_num'];
    $email=$sql_arr['email'];
    $Address_name=$sql_arr['Address_name'];
    $Address=$sql_arr['Address'];
    $Sex=$sql_arr['Sex'];
    $add_time=$sql_arr['add_time'];

    echo "
    <a href='###' style='color:red;float: left;text-decoration-line: none' id='up_address'>>>修改地址<<</a>
    <table>
        <tr>
            <td style='width: 15%'>账号：</td>
            <td style='width: 65%'>$U_name</td>
        </tr>
         <tr>
            <td>手机号：</td>
            <td>$P_num</td>
        </tr>
        <tr>
            <td>邮箱：</td>
            <td>$email</td>
        </tr>
        <tr>
            <td>收件地址：</td>
            <td>$Address</td>
        </tr>
        <tr>
            <td>收货人：</td>
            <td>$Address_name</td>
        </tr>
         <tr>
            <td>性别：</td>
            <td>$Sex</td>
        </tr>
        
        
    </table>
        <p style='color: #aaaaaa;font-size: 0.8em'>此账号创建于：$add_time</p>

    ";

}

