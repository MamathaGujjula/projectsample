<?php
    $name=$_POST["medicine_name"];
    $stock=$_POST["quantity"];
    $connect=mysqli_connect('localhost','root','','test');
    if($connect->connect_errno){
        echo "failed to connect to the database".$connect->connect_error;
    }
    else{
        echo "successfully connected";
        $stmt=$connect->prepare("insert into medicine_list(medicine_name,stock) values("sipla","50")");
        //$stmt->bind-param("si",$name,$stock);
        $stmt->execute();
        echo "stored successfully";
        $stmt->close();
        $connect->close();
    }
?>    