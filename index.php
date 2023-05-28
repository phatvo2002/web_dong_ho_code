<?php 
   session_start();
   ob_start();
   if(!isset($_SESSION['giohang']))  $_SESSION['giohang']=[];
   include "./model/connect_database.php";
   include "./model/danhmuc.php";
   include "./model/sanpham.php";
   include "./model/tintuc.php";
   $dstt=getAlltt();
   $dsdm=getAll_dm();
   $sphome1=getAllspId($iddm=0 ,"");
   $productpre=showproductPre();
   $productcitizen=showproductPre3();
   $productcasio=showproductPre4();
   include "./model/user.php";
   include "./view/header.php";
     if(isset($_GET['act'])){
      $act=$_GET['act'];
   
   switch ($act) {
      case 'tatcasp':
         if(isset($_POST['kyw']) && ($_POST['kyw'] !="") )
         {
             $kyw=$_POST['kyw'];
         }else
         {
            $kyw="";
         }
         if(isset($_GET['idDanhmuc']) && ($_GET['idDanhmuc'] > 0) )
         {
            $iddm=$_GET['idDanhmuc'];
         }
         else
         {
            $iddm="";
         }
         $dssp= getAllspId( $iddm , $kyw);
         $tendanhmuc=load_ten_dm($iddm);
         include "./view/tatcasp.php";
         break;
      case 'gioithieu':
          include "./view/gioithieu.php";
      break;
      case 'giohang':
         include "./view/giohang.php";
      break;
      case 'chitiet':
         if(isset($_GET['idsp']) )
         {
            $id=$_GET['idsp'];
            $getone= getOneSp($id);
            include "./view/chitiet.php";
         }
      break;
      case 'addcart':
         //lấy dữ liệu từ form để lưu vào giỏ hàng 
         if(isset($_POST['addtocart']) && ($_POST['addtocart']))
         {
               $id=$_POST['id'];
               $hinh=$_POST['hinh'];
               $ten=$_POST['tensp'];
               $gia=$_POST['gia'];
               if(isset($_POST['sl'])&& ($_POST['sl'])>0)
               {
                  $sl =$_POST['sl'];
               }
               else
               {

                  $sl=1;
               }
               $fg=0;
               //kiểm tra sản phẩm tồn tại trong giỏ hàng 
               $i=0;
               foreach ( $_SESSION['giohang'] as $item) {
                  if($item[2]==$ten)
                  {
                     $slnew =$sl + $item[4];
                     $_SESSION['giohang'][$i][4]+=$slnew;
                     $fg=1;
                     break;
                  }
                  $i++;
               }
               //nếu có chỉ cập nhật lại số lượng 
               // khởi tạo mảng con để vô giỏ hàng 
               if($fg==0)
               {
                  $item=array($id,$hinh, $ten,$gia,$sl);
                  $_SESSION['giohang'][]=$item;
               }
               header ('location: index.php?act=addcart');
         }
         //view giỏ hàng
         include "./view/giohang.php";
         break;
      case 'dellcart':
         if(isset($_GET['i'])&& ($_GET['i'] >0))
         {
            if(isset($_SESSION['giohang']) && (count($_SESSION['giohang'])>0))
            array_splice( $_SESSION['giohang'],$_GET['i'],1);
         }
         else
         {
            if(isset($_SESSION['giohang']) )
            {
               unset($_SESSION['giohang']);
            }
         }
        
         if(isset($_SESSION['giohang']) && (count($_SESSION['giohang'])>0))
         {
            header('location: index.php?act=giohang');
         }else{
            header('location: index.php');
         }
         break;

      case 'dangnhap':
        if(isset($_POST['dangnhap']) && ($_POST['dangnhap']))
        {
            $username=$_POST['username'];
            $pass=$_POST['password'];
            $kq=getInfo($username,$pass);
            $role=$kq[0]['role'];
            if($role==1)
            {
                  $_SESSION['role']=$role;
                  header('location: ./admin/login.php');
                 
            }else
            {
               $_SESSION['role']=$role;
               $_SESSION['id']=$kq[0]['iduser'];
               $_SESSION['user']=$kq[0]['user'];
               $_SESSION['email']=$kq[0]['email'];
               $_SESSION['sdt']=$kq[0]['sdt'];
               header('location: ./index.php');
            }
        }
         include "./view/dangnhap.php";

      break;
      case 'dangki':
         if(isset($_POST['dangki']) && ($_POST['dangki']))
         {
            $name=$_POST['username'];
            $email=$_POST['email'];
            $repass=$_POST['re-password'];
            $number=$_POST['number'];
            // $repass =getPwdSecurity($repass);
            inputuser($number,$email,$name,$repass);
            $thongbao="Bạn đã đăng kí thành công !";
           
            
         }
         include "./view/dang_ki.php";
         break;
         case 'edittk':
            // if(isset($_POST['dangki']) && ($_POST['dangki']))
            // {
            //    $name=$_POST['username'];
            //    $email=$_POST['email'];
            //    $repass=$_POST['re-password'];
            //    $number=$_POST['number'];
            //    // $repass =getPwdSecurity($repass);
            //    inputuser($number,$email,$name,$repass);
            //    $thongbao="Bạn đã đăng kí thành công !";
              
               
            // }
            include "./view/edittk.php";
            break;
      case 'tintuc':
         include "./view/tintuc.php";
         break;
      case 'userinfo':
          include "./view/userinfo.php";
          break;
      case 'thoat':
         unset( $_SESSION['role']);
         unset( $_SESSION['id']);
         unset( $_SESSION['user']);
         unset( $_SESSION['email']);
         unset( $_SESSION['sdt']);
         header('location: index.php');
      break;
      case 'giowoithieu':
         include "./view/giowoithieu.php";
         break;
      default:
         include "./view/container.php";
         break;
      
   }
}
else
{
   include "./view/container.php";
}
   include "./view/footer.php";

   
 
