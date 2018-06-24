<?php
/**
 * Created by PhpStorm.
 * User: tonghongxiang
 * Date: 2017/12/3
 * Time: 下午4:15
 */
session_start();
if(empty($_SESSION["uid"])){
    session_unset();//free all session variable
    session_destroy();//销毁一个会话中的全部数据
    header('location:叮当网主站.html');
};
