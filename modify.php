<?php
    require_once 'connect.php';
    //获取name值
    $name=$_GET['name'];   
 ?>
 <html>
<body>
    <form action="modify.handle.php" method="post">
        <!--默认name值 ，并输入content值  并链接到modify.handle.php文件-->
        name:<input type="text" name="name" value="<?php echo $name;?>"><br>
        content:<input type="text" name="content"><br>
        price:<input type="text" name="price"><br>
        <input type="submit" value="提交">
    </form>
</body>
</html>
   