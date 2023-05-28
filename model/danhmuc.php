<?php 
    function deldm($id)
    {
       $conn=connect_db(); // tạo kết nối
       $sql = "DELETE FROM danhmuc WHERE idDanhmuc=".$id;
       // use exec() because no results are returned
       $conn->exec($sql);

    }
   function getAll_dm()
   {
    $conn=connect_db(); // tạo kết nối
    $stmt =$conn->prepare("SELECT * FROM danhmuc"); // thực thi câu lệnh sql
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq= $stmt -> fetchAll();
    return $kq;
   }
  
   function getOneDm($id)
   {
      $conn=connect_db(); // tạo kết nối
      $stmt =$conn->prepare("SELECT * FROM danhmuc WHERE idDanhmuc=".$id); // thực thi câu lệnh sql
      $stmt->execute();
      $stmt->setFetchMode(PDO::FETCH_ASSOC);
      $kq= $stmt -> fetchAll();
      return $kq;
   }

   function upDateDm($id,$tenDanhmuc)
   {
      $conn=connect_db(); // tạo kết nối
      $sql = "UPDATE danhmuc SET tenDanhMuc='".$tenDanhmuc."' WHERE idDanhmuc=".$id;
      $stmt = $conn->prepare($sql);
      $stmt->execute();
   }

   function themdanhmuc($tenDanhmuc)
   {
      $conn=connect_db(); // tạo kết nối
      $sql = "INSERT INTO danhmuc (tenDanhMuc) VALUES ('".$tenDanhmuc."')";
      $conn->exec($sql);
   }
?> 