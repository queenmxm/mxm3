<?php
    require_once 'connect.php';
    
    //获取name
    $name=$_GET['name'];
    
    //执行删除操作
    $sql="delete from library where name='$name'";
    
    //操作成功 返回操作信息，并返回原网页
    if(mysqli_query($con,$sql))
        {echo "<script>alert('delete success');window.location.href='select.php';</script>";}
    else 
        {echo "<script>alert('delete failed!');window.location.href='select.php';</script>";}