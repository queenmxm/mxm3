<?php
    //�������ݿ�
    require_once 'connect.php';
    
    //�����ݿ�ȡ��ȫ�����ݷ���������
    $sql="select * from library";
    $temp=mysqli_query($con,$sql);
     while($row=mysqli_fetch_assoc($temp))
    {
        $data[]=$row;
    }
    
    //�����е���Ϣ����ʾ����
     foreach($data as $everyData)
    {
        echo $everyData['name'].":".$everyData['price'].":".$everyData['content'];
        echo "&nbsp";       
 ?>
    <!-- ���볬���� ������name -->
    <a href="delete.php?name=<?php echo $everyData['name']?>">delete</a>
 
    <a href="modify.php?name=<?php echo $everyData['name']?>">modify</a>
 <?php    
        echo "<br>";
       
    }
   ?>
   <a href="add.php">add</a>
   