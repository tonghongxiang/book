
<?php
/**
 * Created by PhpStorm.
 * User: tonghongxiang
 * Date: 2018/4/21
 * Time: 下午1:43
 */
$da_lei=$_POST['com_name'];
$xiao_lei=$_POST['com_tel'];
$shu_ming=$_POST['com_email'];
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

$dbc=mysqli_connect('127.0.0.1','root','765256','dingdang')
or die("ERROR to connect mysqli");

$query="INSERT INTO Company_Authentication(Company_Name,Company_Tel,Company_Email,Company_Licence,Add_Time,state)".
    "VALUES('$da_lei','$xiao_lei','$shu_ming','$name',now(),'1')" ;

$result=mysqli_query($dbc,$query) or die(mysqli_error($dbc));

mysqli_close($dbc);



