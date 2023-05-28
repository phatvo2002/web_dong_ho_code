<?php
function getAllsp()
{
    $conn=connect_db(); // tạo kết nối
    $stmt =$conn->prepare("SELECT * FROM sanpham"); // thực thi câu lệnh sql
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq= $stmt -> fetchAll();
    return $kq;
}
function getAllspId($iddm=0 ,$kyw="")
{
    $conn=connect_db(); // tạo kết nối
    $sql="SELECT * FROM sanpham WHERE 1";
    if($iddm>0) $sql .=" AND idDanhmuc=".$iddm;
    if($kyw!="") $sql .=" AND tenSp like '%".$kyw."%'";
   //  $sql.=" order by id DESC";
    $stmt =$conn->prepare($sql); // thực thi câu lệnh sql
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq= $stmt -> fetchAll();
    return $kq;
}
function load_ten_dm($iddm)
{
   if($iddm>0)
   {
    $conn=connect_db(); // tạo kết nối
    $stmt =$conn->prepare("SELECT * FROM danhmuc WHERE idDanhmuc=".$iddm.""); // thực thi câu lệnh sql
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq= $stmt -> fetchAll();
    return $kq;
   }
   else
   {
    return "";
   }
}
function themSanPham($idDanhmuc,$tenSp,$img,$gia)
{
    $conn=connect_db(); // tạo kết nối
    $sql = "INSERT INTO  sanpham(idDanhmuc,tenSp,img,gia) VALUES ('".$idDanhmuc."','".$tenSp."','".$img."','".$gia."')";
    $conn->exec($sql);
}

function getOneSp($id)
   {
      $conn=connect_db(); // tạo kết nối
      $stmt =$conn->prepare("SELECT * FROM sanpham WHERE idSanPham=".$id); // thực thi câu lệnh sql
      $stmt->execute();
      $stmt->setFetchMode(PDO::FETCH_ASSOC);
      $kqsp= $stmt -> fetchAll();
      return $kqsp;
   }

   function upDateSp($idSp,$tenSp,$img,$gia,$id_dm)
   {
      $conn=connect_db(); // tạo kết nối
      if($img == "")
      $sql = "UPDATE sanpham SET tenSp='".$tenSp."',gia='".$gia."',idDanhmuc='".$id_dm."' WHERE idSanPham=".$idSp;
      else
      $sql = "UPDATE sanpham SET tenSp='".$tenSp."',img='".$img."', gia='".$gia."',idDanhmuc='".$id_dm."' WHERE idSanPham=".$idSp;
      $stmt = $conn->prepare($sql);
      $stmt->execute();
   } 
   function showproductPre()
   {
    $conn=connect_db(); // tạo kết nối
      $stmt =$conn->prepare("SELECT * FROM sanpham WHERE showProduct=2"); // thực thi câu lệnh sql
      $stmt->execute();
      $stmt->setFetchMode(PDO::FETCH_ASSOC);
      $kqsp= $stmt -> fetchAll();
      return $kqsp;
   }
   function showproductPre3()
   {
    $conn=connect_db(); // tạo kết nối
      $stmt =$conn->prepare("SELECT * FROM sanpham WHERE showProduct=3"); // thực thi câu lệnh sql
      $stmt->execute();
      $stmt->setFetchMode(PDO::FETCH_ASSOC);
      $kqsp= $stmt -> fetchAll();
      return $kqsp;
   }
   function showproductPre4()
   {
    $conn=connect_db(); // tạo kết nối
      $stmt =$conn->prepare("SELECT * FROM sanpham WHERE showProduct=4"); // thực thi câu lệnh sql
      $stmt->execute();
      $stmt->setFetchMode(PDO::FETCH_ASSOC);
      $kqsp= $stmt -> fetchAll();
      return $kqsp;
   }

   function count_id()
   {
    $conn=connect_db(); // tạo kết nối
    $stmt =$conn->prepare("SELECT count(idSanPham) as number from sanpham"); // thực thi câu lệnh sql
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $number= $stmt -> fetchAll();
    return $number;
   }
 function showpro($ds)
 {
   
    foreach ($ds as $sp) {
    echo '    
    <div class="grid_colum-2 filterDiv  " style="display:flex;">    
        <form action="index.php?act=addcart" method="post" >
         <div class="product_item "  >
                        <a href="index.php?act=chitiet&idsp='.$sp['idSanPham'].'">
                   <img src="./upload/'.$sp['img'].'" alt=""  class="product-img" >
            <p>'.$sp['tenSp'].'</p>
        </a>
      
        <p class="price" style=" margin-top: 4px;font-weight: 700;"> '.$sp['gia'].'đ</p>
        <input type="hidden" value="'.$sp['idSanPham'].'" name="id">
        <input type="hidden" value="'.$sp['img'].'" name="hinh">
        <input type="hidden" value="'.$sp['tenSp'].'" name="tensp">
        <input type="hidden" value="'.$sp['gia'].'" name="gia">
        <input type="submit" value="Thêm vào giỏ hàng" class="product-submit" name="addtocart" >
       </div>   
    </form>
    </div>                             
';
    }
 
 }

?>