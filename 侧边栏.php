<?php
/**
 * Created by PhpStorm.
 * User: tonghongxiang
 * Date: 2017/11/28
 * Time: 下午2:00
 */
session_start();
if( empty($_SESSION["admin_name"]) ){
echo "请先登陆!<a href='syslog.html'>点击这里登陆</a>";
}else{
    $admin_name=$_SESSION['admin_name'];
    echo "当前管理员：<a>$admin_name</a>";


}



