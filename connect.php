<?php
    require_once 'config.php';//�����ļ� config.PHP
    $con=mysqli_connect(HOST,USERNAME,PASSWORD,'test'); //�������ݿ�
    if(!$con)
    {
        echo mysqli_error();//ʧ�ܱ���
    }
    