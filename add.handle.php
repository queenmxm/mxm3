<?php
    require_once 'connect.php';//�������ݿ�
    
    //�õ���������� ������
    $name=$_POST['name'];   
    $content=$_POST['content'];
    $price=$_POST['price'];
    echo $name;
    
    //�����ݴ������ݿ���
    $sql="INSERT INTO library(name,content,price) VALUES('$name','$content','$price')";
    
    //�����ɹ� ���ؽ�����Ϣ���Ż� select.php
    if(mysqli_query($con,$sql))
        {echo "<script>alert('add success');window.location.href='select.php';</script>";}
    else
        {echo "<script>alert('add failed!');window.location.href='select.php';</script>";}
    
    ?>
        