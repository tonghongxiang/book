<?php
/**
 * Created by PhpStorm.
 * User: tonghongxiang
 * Date: 2017/12/11
 * Time: 下午4:59
 */
session_start();
if(empty($_SESSION["id"])){
    session_unset();//free all session variable
    session_destroy();//销毁一个会话中的全部数据
    header('location:syslog.html');
};