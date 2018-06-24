<html>
<head>
    <title>注册成功</title>
</head>
<body>
<div>
<?php
    /**
     * Created by PhpStorm.
     * User: tonghongxiang
     * Date: 2017/11/22
     * Time: 下午2:40
     */
$dbc=mysqli_connect('127.0.0.1','root','765256','book')
or die('Error connecting to MySQL sever');

$query="SELECT * FROM book_list";

$result=mysqli_query($dbc,$query)
    or die("ERROR to query");
$datarow=mysqli_num_rows($result);

for ($i=0;$i<$datarow;$i++){
    $sql_arr=mysqli_fetch_assoc($result);
    $image=$sql_arr['tupian'];
    $book_name=$sql_arr['B_name'];
    header('localog.html&注册成功');
}
?>
</div>
</body>
</html>