<?php
    require_once 'config.php';//连接文件 config.PHP
    $con=mysqli_connect(HOST,USERNAME,PASSWORD,'test'); //连接数据库
    if(!$con)
    {
        echo mysqli_error();//失败报错
    }
    