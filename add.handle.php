<?php
    require_once 'connect.php';//连接数据库
    
    //得到输入的数字 并保存
    $name=$_POST['name'];   
    $content=$_POST['content'];
    $price=$_POST['price'];
    echo $name;
    
    //将数据存入数据库中
    $sql="INSERT INTO library(name,content,price) VALUES('$name','$content','$price')";
    
    //操作成功 返回交互信息并放回 select.php
    if(mysqli_query($con,$sql))
        {echo "<script>alert('add success');window.location.href='select.php';</script>";}
    else
        {echo "<script>alert('add failed!');window.location.href='select.php';</script>";}
    
    ?>
        