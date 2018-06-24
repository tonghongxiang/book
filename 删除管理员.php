<?php
/**
 * Created by PhpStorm.
 * User: tonghongxiang
 * Date: 2017/12/11
 * Time: 上午11:42
 */

$zhanghao=$_POST['name1'];


$dbc=mysqli_connect('127.0.0.1','root','765256','book')
or die('ERROR to connect!');

$query3="SELECT * FROM admin_list ";

$result3=mysqli_query($dbc,$query3);
$sql_qrr=mysqli_num_rows($result3);

echo "<table><tr><td>编号</td>
                 <td>账号</td>
                 <td>操作</td>
                 </tr>";

for ($i=0;$i<$sql_qrr;$i++){


    $sql_arr = mysqli_fetch_assoc($result3);
    $id=$sql_arr['id'];
    $admin_name=$sql_arr['admin_name'];

    echo "
   <tr><td>$id</td>
       <td>$admin_name</td>
       <td ><a href='删除管理员.html' id='$id' class='dt' style='text-decoration-line: none;color: red'>删除</a></td>
                 </tr>  

    ";

}

echo "</table>";
mysqli_close($dbc);