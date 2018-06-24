<html>
<head>
    <title>添加图书</title>
</head>
<body>
<form>
<?php
/**
     * Created by PhpStorm.
     * User: tonghongxiang
     * Date: 2017/11/27
     * Time: 上午2:43
     */
$da_lei=$_POST['dalei'];
$xiao_lei=$_POST['xiaolei'];
$shu_ming=$_POST['shuming'];
$zuo_zhe=$_POST['zuozhe'];
$chu_banshe=$_POST['chubanshe'];
$chu_banriqi=$_POST['chubanriqi'];
$jia_ge=$_POST['shichangjia'];
$vip_jiage=$_POST['vipjia'];
$ban_ci=$_POST['banci'];
$ye_shu=$_POST['yeshu'];
$ISBN=$_POST['ISBN'];
$shuo_ming=$_POST['shuoming'];
$file=$_FILES['file'];
$name=$file['name'];
$type=strtolower(substr($name,strripos($name,'.')+1));
$allow_type=array('jpg','jpeg','gif','png');


if (!in_array($type,$allow_type)){
    return;
}
else{
    if (!is_uploaded_file($file['tmp_name'])){
        return;
    }
    else{
        $upload_path="/Users/tonghongxiang/websites/upload/";
        $filename=$upload_path.$file['name'];

        if(move_uploaded_file($file['tmp_name'],$filename)){
            echo "Successfully!";

            copy($file['tmp_name'],$upload_path.$file['name']);


        }
        else{
            echo "Failed!";
        }
    }
}
/*if(isset($_POST['submit'])){
    if($da_lei=="" ||$xiao_lei==""||$shu_ming=""||$zuo_zhe=""
    ||$chu_banshe=""||$chu_banriqi=""||$jia_ge=""||$vip_jiage=""
    ||$ISBN=""||$tu_pian="")
{
    echo "<script>alert('请输入账号或者密码！');history.go(-1);</script>";
    }
    else{*/

$dbc=mysqli_connect('127.0.0.1','root','765256','book')
or die("ERROR to connect mysql");

$query="INSERT INTO book_list(dalei,xiaolei,B_name,B_auther,pub,pub_date,price,vip_price,pub_num,page_num,ISBN,tupian,descpt,look_num,buy_num,add_date,)".
    "VALUES('$da_lei','$xiao_lei','$shu_ming','$zuo_zhe','$chu_banshe','$chu_banriqi','$jia_ge','$vip_jiage','$ban_ci','$ye_shu','$ISBN','$name','$shuo_ming','0','0',now())";

if (!$result=mysqli_query($dbc,$query)){
    echo ("错误描述".mysqli_error($dbc));
}

mysqli_close($dbc);
/*    }
}*/
?>
</form>
</body>
</html>
