<?php
    require_once 'connect.php';
    
    //��ȡname
    $name=$_GET['name'];
    
    //ִ��ɾ������
    $sql="delete from library where name='$name'";
    
    //�����ɹ� ���ز�����Ϣ��������ԭ��ҳ
    if(mysqli_query($con,$sql))
        {echo "<script>alert('delete success');window.location.href='select.php';</script>";}
    else 
        {echo "<script>alert('delete failed!');window.location.href='select.php';</script>";}