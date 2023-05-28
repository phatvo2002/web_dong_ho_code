<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet"
            href="view/font/fontawesome-free-6.1.1-web/css/all.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700;800&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="view/main.css">
        <link rel="stylesheet" href="view/extra.css">
        
        <title>Shop Đông Hồ Nam Nữ Chính Hãn</title>
        <style>
            /* chi tiet san pham */
            
        .btn-page-item
        {
            padding: 12px;
            width: 40px;
            height: 40px;
           background-color: black;
           color: #fff;
           margin-left: 10px;
           margin-right: 10px;
           text-align: center;
        }
        .btn-page
        {
           margin-left: 20%;
        }
        /* user_info */
.userinfomain
{
   display: flex;
   margin-top: 20px;
}
.user-info-left
{
width: 20%; 

}
.user-info-left img
{
    width: 150px;
}
.user_info_list li
{
    padding: 10px 0px;
    border-bottom: 1px solid black;
}
.user-info-right
{
 width: 80%;
 height: 500px;
 margin-left: 20px;
 border: 0.5px solid #ffffff;
 box-shadow: 1px 1px 6px 0px black;
}
.line_user
{
    width: 90%;
    height: 1px;
    background-color: #dfe4ea;
    margin-left: 20px;
    margin-top: 20px;
}
.infomation_group
{
   margin-left: 10%;
   margin-top: 20px;
   width: 500px;
   display: flex;
}
.infomation_group_1
{
    font-size: 1.4rem;
    color: #535c68;
}
.infomation_group_2
{
    font-size: 1.1rem;
    line-height: 30px;
    margin-left: 10px;
}
.line-user-box-main
{
    display: flex;
    
}
.user-info-right-box-1
{
    margin-top: 20px;
}
.introdue
{
 text-align: center;
 
}
.img-main
{
    width: 250px;
   height: 250px;
   border-radius: 1550px;
   margin-top: 20px;
}
.line-main
{
    width: 220px;
    height: 5px;
    background-color: #bdc3c7;
   margin-left: 40%;
   margin-top: 20px;
}
        </style>
    </head>

    <body>
            <section class="header">
                <div class="header-information">
                    <div class="grid">
                        <div class="header-information_container">
                            <div class="header-information_list">
                                <ul class="header-information-icon">
                                    <li>HOTLINE:0708223608</li>
                                    <li style="margin-top: 3px;"> <img
                                            src="view/image/logo/logo_small.png"
                                            alt=""
                                            style="width: 15px; "> </li>
                                    <li> <a href="">HỆ THỐNG CỬA HÀNG</a> </li>
                                    <li style="margin-left: 7px;"
                                        class="header-information-icon-1"> <i
                                            class="fa-brands fa-facebook-f"
                                            class="class-icon"></i> </li>
                                    <li class="header-information-icon-1"><i
                                            class="fa-brands fa-instagram"></i></li>
                                    <li class="header-information-icon-1"><i
                                            class="fa-brands fa-twitter"></i></li>
                                    <li class="header-information-icon-1"><i
                                            class="fa-regular fa-envelope"></i></li>
                                </ul>
                            </div>
                            <div class="cart_user">
                                
                               <?php 
                               if(isset($_SESSION['user']) && ($_SESSION['user'] !=""))
                               {
                                     echo ' <i class="fa-regular fa-user"
                                     style="color:aliceblue;">
                                     
                                      <a style="font-size: 1rem; color:#fff" href="index.php?act=userinfo">xin chào <span>'.$_SESSION['user'].'</span></a>
                                   </i> ';
                               }
                               else
                               {
                                ?>
                                <a href="index.php?act=dangnhap" style="line-height:30px;" class="mt-2">
                                    <i class="fa-regular fa-user"
                                        style="color:aliceblue;">
                                    <a style="font-size: 1rem; color:#fff">Đăng nhập <span></span></a>
                                    </i>                                     
                            </a>
                                <?php }?>

                                <a href="index.php?act=giohang">
                                    <i class="fa-solid fa-cart-shopping"
                                        style="color:aliceblue;margin-left:
                                        30px;"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <section class="grid">
                    <div class="header-menu-logo-search">

                        <div class="header-lolo">
                            <a href="index.php?act=container.php">
                                <img src="view/image/logo/logo1.png" alt=""
                                    style="margin-top: 10px; width:250px;">
                            </a>
                        </div>
                        <div class="header-search">
                            <form action="index.php?act=tatcasp" method="post">
                                <i class="fa-solid fa-magnifying-glass"
                                    style="position: absolute; top: 35px; left:
                                    11%;"></i>
                                <input class="header-input" type="text" placeholder="tìm kiếm sản phẩm" name="kyw">
                                <input class="button-header" type="submit" value="Tìm kiếm" name="timkiem">
                            </form>
                        </div>
                    </div>
                </section>

                <section class="menu-layout">
                    <div class="grid">
                        <ul class="menu-list">
                            <li><a href="index.php"><i class="fa-sharp fa-solid fa-house"
                                        style="margin-right: 3px;"></i>Trang chủ</a></li>
                            <li class="drop-down-list" style="color: #fff;"><i
                                    class="fa-solid fa-store"
                                    style="margin-right: 3px;"></i>Sản phẩm
                                <div class="drop-down">
                                    <ul>
                                        <?php 
                                          foreach ($dsdm as $item) {
                                              echo ' 
                                               <li><a href="index.php?act=tatcasp&idDanhmuc='.$item['idDanhmuc'].'">'.$item['tenDanhMuc'].'</a></li>  ';
                                          }
                                        ?>
                                        <!-- <li><a href="index.php?act=tatcasp">Tất
                                                cả sản phẩm</a></li> -->
                                        
                                        <!-- <li><a href="#">Đồng hồ nam</a></li>
                                        <li><a href="#">Đồng hồ nữ</a></li>
                                        <li><a href="#">Khuyến mãi</a></li> -->
                                    </ul>
                                </div>
                            </li>
                            <li><a href="index.php?act=tintuc"><i class="fa-sharp fa-solid
                                        fa-newspaper" style="margin-right:
                                        3px;"></i> Tin tức</a></li>
                            <li><a href="index.php?act=giowoithieu"><i class="fa-solid fa-ticket-simple"
                                        style="margin-right: 3px;"></i>Giới
                                    thiệu</a></li>
                        </ul>
                    </div>
                </section>

            </section>