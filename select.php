<?php
    //连接数据库
    require_once 'connect.php';
    
    //从数据库取出全部数据放入数组中
    $sql="select * from library";
    $temp=mysqli_query($con,$sql);
     while($row=mysqli_fetch_assoc($temp))
    {
        $data[]=$row;
    }
    
    //将所有的信息都显示出来
     foreach($data as $everyData)
    {
        echo $everyData['name'].":".$everyData['price'].":".$everyData['content'];
        echo "&nbsp";       
 ?>
    <!-- 插入超链接 并传入name -->
    <a href="delete.php?name=<?php echo $everyData['name']?>">delete</a>
 
    <a href="modify.php?name=<?php echo $everyData['name']?>">modify</a>
 <?php    
        echo "<br>";
       
    }
   ?>
   <a href="add.php">add</a>
   