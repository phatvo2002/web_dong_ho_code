<?php 
 function themTinTuc($ten,$hinh,$conten)
 {
     $conn=connect_db(); // tạo kết nối
     $sql = "INSERT INTO  tintuc(ten,hinh,conten) VALUES ('".$ten."','".$hinh."','".$conten."')";
     $conn->exec($sql);
 }

 function getAlltt()
{
    $conn=connect_db(); // tạo kết nối
    $stmt =$conn->prepare("SELECT * FROM tintuc"); // thực thi câu lệnh sql
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kqtt= $stmt -> fetchAll();
    return $kqtt;
}
?>