<?php
session_start();
if( empty($_SESSION["user_id"]) )
{
    echo '<a href="log.html" style="color: white;font-size:10px;">登陆</a><a href="注册界面.html" style="color: white;font-size:10px;">&nbsp注册&nbsp&nbsp&nbsp</a>&nbsp&nbsp';
}
else
{
    echo "<a style='color: red'>&nbsp&nbsp".$_SESSION["user_name"]."&nbsp&nbsp&nbsp</a><a href='个人中心' style='color: white;text-decoration-line: none'>个人中心</a>&nbsp&nbsp"."<a href='logout.php' style='font-size: 10px;color: white;text-decoration-line: none'>注销</a>&nbsp&nbsp";
}

