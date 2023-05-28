<?php 
     ob_start();
     include "./model/connect_database.php";
     include "./model/sanpham.php";

     if(isset($_POST['themmoi'])&& ($_POST['themmoi']))
     {
            $idDanhmuc=$_POST['idDanhmuc'];
            $tenSp=$_POST['tenSp'];
            $img=$_POST['img'];
            $gia=$_POST['gia'];

            if($_FILES['img']['name']!="")
            {
                $img=$_FILES['img']['name'];
            }
            else
            {
                $img="";
            }

            themSanPham($idDanhmuc, $tenSp,$img,$gia);
     }
     header('location: admin_index.php?act=sanpham');

?>