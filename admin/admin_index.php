<?php 
    session_start();
    ob_start();
  if(isset($_SESSION['role']) && ($_SESSION['role']==1)){
    include "../model/connect_database.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/tintuc.php";
  include "view-admin/header.php";
   if(isset($_GET['act']))
   {
      switch ($_GET['act']) {
        case 'danhmuc':
          // nhận và xử lý yêu cầu 
          // Lấy danh sách danh mục 
          $kq = getAll_dm();
          include "view-admin/danhmuc.php";
          break;
          case 'themdanhmuc':
            if(isset($_POST['themmoi']) && ($_POST['themmoi']))
            {
                      $tenDanhmuc=$_POST['tenDanhmuc'];
                      themdanhmuc($tenDanhmuc);
            }
            //lấy danh sach danh mục
            $kq = getAll_dm();
            include "view-admin/danhmuc.php";
            break;
           case 'deldm':
            if(isset($_GET['idDanhmuc']))
            {
              $id=$_GET['idDanhmuc'];
              deldm($id);
            }
            $kq = getAll_dm();
            include "view-admin/danhmuc.php";
           break;
            case 'updatedanhmuc':
            // lấy 1 record đúng với id truyền vào 
            if(isset($_GET['idDanhmuc']))
            {
              $id=$_GET['idDanhmuc'];
              $kq1=getOneDm($id);
              include "view-admin/updatedanhmuc.php";
            } 
            if(isset($_POST['idDanhmuc']))
            {
              $id=$_POST['idDanhmuc'];
              $tenDanhmuc=$_POST["tenDanhMuc"];
              upDateDm($id,$tenDanhmuc);
              $kq = getAll_dm();
            include "view-admin/danhmuc.php";
            }  
            break;
        case 'sanpham':
          //load danh sách danh mục
           $dsdm = getAll_dm();
          //load danh sách sản phẩm
           $kq=getAllsp();
          include "view-admin/sanpham.php";
          break;
          case 'sanpham_add':
            if(isset($_POST['themmoi']) && ($_POST['themmoi']))
            {
                   $idDanhmuc=$_POST['idDanhmuc'];
                   $tenSp=$_POST['tenSp'];
                   $gia=$_POST['gia'];
                   $target_dir = "../upload/";
                   $target_file = $target_dir . basename($_FILES["img"]["name"]);
                   $img=$target_file ;
                   $uploadOk = 1;
                   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"&& $imageFileType != "gif" ) {
                   //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                  $uploadOk = 0;
                  }
                  move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                   themSanPham($idDanhmuc, $tenSp,$img,$gia);
            }
             //load danh sách danh mục
           $dsdm = getAll_dm();
           //load danh sách sản phẩmS
            $kq=getAllsp();
            include "view-admin/sanpham.php";
            break;
        case 'updateSp':
             //load danh sách danh mục
           $dsdm = getAll_dm();
           // sản phẩm chi tiết theo id
           if(isset($_GET['idSanPham']) && ($_GET['idSanPham'])>0)
           {
              $spct=getOneSp($_GET['idSanPham']);
           }
           //load danh sách sản phẩmS
            $kq=getAllsp();
            include "view-admin/updateSp.php";
            break;
         case 'sanpham_update':
              //load danh sách danh mục
            $dsdm = getAll_dm();
            // update sản phẩm
            if(isset($_POST['capnhat']) && ($_POST['capnhat']))
            {
                  $idDanhmuc=$_POST['idDanhmuc'];
                   $tenSp=$_POST['tenSp'];
                   $gia=$_POST['gia'];
                   $id_sanpham=$_POST['idSanPham'];
                   if($_FILES["img"]["tmp_name"]!= "")
                   {
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["img"]["name"]);
                    $img=$target_file ;
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                   if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"&& $imageFileType != "gif" ) {
                    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                   $uploadOk = 0;
                   }
                   move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                    
                   }
                   else{
                    $img="";
                  }
                  upDateSp($id_sanpham,$tenSp,$img,$gia,$idDanhmuc);
            }
           
          
            //load danh sách sản phẩmS
             $kq=getAllsp();
             include "view-admin/sanpham.php";
             break;
        case 'taikhoan':
            include "view-admin/taikhoan.php";
            break;
        case 'donhang':
              include "view-admin/donhang.php";
              break;
        case 'thoat':
             unset($_SESSION['role']);
             header('location : admin/view-admin/login.php');
             break;
        case 'tintuc':
          // load danh sách tin tức
          $dstt=getAlltt();
          include "view-admin/tintuc.php";
          break;
        case 'tintuc_add':
          if(isset($_POST['themmoitt']) && ($_POST['themmoitt']))
          {
            $ten=$_POST['ten'];
            $conten=$_POST['conten'];
        
          //     if($_FILES['hinh']['name']!="")
          // {
          //     $hinh=$_FILES['hinh']['name'];
          // }
          // else $hinh="";
        
          $target_dir = "../upload_tt/";
          $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
          $hinh=$target_file;
          $uploadOk = 1;
          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
           // Allow certain file formats
              if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                $uploadOk = 0;
              }

              move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
             themTinTuc($ten,$hinh,$conten);
          }
          //load danh sách tin tức
          $dstt=getAlltt();
          include "view-admin/tintuc.php";
           break;
        default:
             include "view-admin/home.php";             
          break;
      }
   }else
   {
    include "view-admin/home.php";
   }

 
  include "view-admin/footer.php";
   }
    else
    {
      header('location : admin/view-admin/login.php');
    }
?>