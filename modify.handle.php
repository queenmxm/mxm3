<?php

require_once 'connect.php';

//获取content 和 name
$content=$_POST['content'];
$name=$_POST['name'];

//进行修改操作
$sql="UPDATE library SET content='$content' WHERE name='$name'";

//返回操作消息 并返回原网页
if(mysqli_query($con,$sql))
    {echo "<script>alert('modify success');window.location.href='select.php';</script>";}
else
    {echo "<script>alert('modify failed!');window.location.href='select.php';</script>";}

?>
        