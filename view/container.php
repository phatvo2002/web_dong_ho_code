<section class="container">
                <!-- slide -->
                <section class="">
                  <div class="heaader-slide">

                      <div class="slidehome">
  
                          <div class="slideshow_container">
                              <div class="MySlide fade">
                                  <img
                                      src="view/image/banner/banner1.jpg"
                                      alt="" style="width: 100%; height: 550px;">
                              </div>
                              <div class="MySlide fade">
  
                                  <img
                                      src="view/image/banner/banner2.jpg"
                                      alt="" style="width: 100%; height: 550px;">
                              </div>
                              <div class="MySlide fade">
  
                                  <img
                                      src="view/image/banner/banner3.jpg"
                                      alt="" style="width: 100%; height: 550px;">
                              </div>
                              <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                              <a class="next" onclick="plusSlides(1)">&#10095;</a>
                          </div>
                          <div style="text-align:center">
                              <span class="dot" onclick="currentSlide(1)"></span>
                              <span class="dot" onclick="currentSlide(2)"></span>
                              <span class="dot" onclick="currentSlide(3)"></span>
                          </div>
  
                          <script src="view/main.js">
                      </script>
                      </div>

                     
                  </div>
                </section>

                <!-- container-product-header -->
                <div class="grid">
                    <div class="container_header_phagragrap">
                        <h1 style="margin-top: 20px;">ĐỒNG HỒ NAM NỮ CHÍNH HÃNG
                            <p class="line"></p>
                            <p>Chúng tôi cam kết mang lại những giá trị cao
                                nhất, chế độ hậu mãi tốt nhất khi quý khách hàng
                                tin dùng & mua sắm đồng hồ nam nữ chính hãng của
                                thương hiệu SHOPDONGHO.com</p>
                        </h1>
                    </div>

                </div>
                <!-- container-product-box -->
                <div class="grid">
                    <div class=" container_product_box">

                        <div class="container_product_box_item">
                            <a href="../html/dong_ho_nam.html">
                                <img src="view/image/product/product1.png" alt="">
                                <p>Nam</p>
                            </a>
                        </div>
                        <div class="container_product_box_item">
                            <a href="../html/dong_ho_nu.html">
                                <img src="view/image/product/Donghonam.png" alt="">
                                <p>Nữ</p>
                            </a>
                        </div>
                        <div class="container_product_box_item">
                            <a href="../html/dong_ho_doi.html">
                                <img
                                    src="view/image/product/Et8kemqt-wrist-watch.png"
                                    alt="">
                                <p>Cặp Đôi</p>
                            </a>
                        </div>
                        <div class="container_product_box_item">
                            <a href="">
                                <img src="view/image/product/hot-sale.png" alt="">
                                <p>Hot </p>
                            </a>
                        </div>
                        <div class="container_product_box_item">
                            <a href="">
                                <img src="view/image/product/sale-tag.png" alt="">
                                <p>sale</p>
                            </a>
                        </div>
                        <div class="container_product_box_item">
                            <a href="">
                                <img src="view/image/product/belt.png" alt="">
                                <p>Dây da</p>
                            </a>
                        </div>
                    </div>

                    <div class="product_home">
                        <h1 style="margin-top: 40px;text-align: center;">ĐỒNG HỒ
                        RHYTHM</h1>
                        <p class="line"></p>
                    </div>
                </div>
                <!-- product-home -->
                <div class="grid">

                    <div class="grid_row" >
                       <div class="button-sale">
                                    <p>HOT</p>
                                </div>
                                <?php 
                                   foreach ($productpre as $sp) {
                                         echo' <div class="grid_colum-2 filterDiv   " style="display:flex;">    
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
                                         <input type="submit" value="Thêm vào giỏ hàng" class="product-submit " name="addtocart" style="margin-left:75px;">
                                        </div>   
                                     </form>
                                     </div>     ';
                                   }
                                ?>       
                    </div>
                    <div class="button_watch_all">
                        <a href="index.php?act=tatcasp">XEM TẤT CẢ</a>
                    </div>

                    <div class="product_home">
                       
                        <p class="line"></p>
                    </div>

                 

                    <div class="product_home">
                        <h1 style="margin-top: 40px;text-align: center;">ĐỒNG HỒ
                            CITIZEN</h1>
                        <p class="line"></p>
                    </div>

                    <div class="grid_row">
                    <?php 
                                   foreach ($productcitizen as $sp) {
                                         echo' <div class="grid_colum-2 filterDiv   " style="display:flex;">    
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
                                         <input type="submit" value="Thêm vào giỏ hàng" class="product-submit " name="addtocart" style="margin-left:75px;">
                                        </div>   
                                     </form>
                                     </div>     ';
                                   }
                                ?>       
                                      
                        <div class="button_watch_all ">
                            <a href="">XEM TẤT CẢ</a>
                        </div>
                    </div>

                    <div class="grid_row box-2">

                        <div class="product_box_2">
                            <a href="">
                                <img
                                    src="view/image/banner/dong_ho_hot.jpg.crdownload"
                                    alt="">
                                <p style="color: aliceblue;">ĐỒNG HỒ HOT</p>
                            </a>
                        </div>
                        <div class="product_box_2">
                            <a href="">
                                <img src="view/image/banner/cau-tao-dong-ho-co.jpg"
                                    alt="">
                                <P style="color: aliceblue;">ĐỒNG HỒ CƠ</P>
                            </a>
                        </div>
                        <div class="product_box_2">
                            <a href="">
                                <img src="view/image/banner/đồng hồ pin đầu
                                    tiên.jpg" alt="">
                                <P style="color: aliceblue;">ĐỒNG HỒ PIN</P>
                            </a>
                        </div>
                        <div class="product_box_2">
                            <a href="">
                                <img src="view/image/banner/dong-ho-cap-dep-17.jpg"
                                    alt="">
                                <p style="color: aliceblue;">ĐỒNG HỒ ĐÔI</p>
                            </a>
                        </div>

                    </div>

                    <div class="product_home">
                        <h1 style="margin-top: 40px;text-align: center;">ĐỒNG HỒ
                            CASIO</h1>
                        <p class="line"></p>
                    </div>

                    <div class="grid_row">
                        <?php 
                           foreach ($productcasio as $sp) {
                            echo' <div class="grid_colum-2 filterDiv   " style="display:flex;">    
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
                            <input type="submit" value="Thêm vào giỏ hàng" class="product-submit " name="addtocart" style="margin-left:75px;">
                           </div>   
                        </form>
                        </div>  ';
                           }
                        ?>
                      
                    
                    </div>
                    <div class="button_watch_all ">
                        <a href="index.php?act=tatcasp">XEM TẤT CẢ</a>
                    </div>         

                    <div class="grid_row">
                        <div class="grid_colum_1_8">
                            <a href="">
                                <img src="view/image/thương
                                    hiệu/hinh-anh-logo-thuong-hieu-casio.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="grid_colum_1_8">
                            <a href="">
                                <img src="view/image/thương
                                    hiệu/hinh-anh-logo-thuong-hieu-casio.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="grid_colum_1_8">
                            <a href="">
                                <img src="view/image/thương
                                    hiệu/hinh-anh-logo-thuong-hieu-casio.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="grid_colum_1_8">
                            <a href="">
                                <img src="view/image/thương
                                    hiệu/hinh-anh-logo-thuong-hieu-casio.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="grid_colum_1_8">
                            <a href="">
                                <img src="view/image/thương
                                    hiệu/hinh-anh-logo-thuong-hieu-casio.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="grid_colum_1_8">
                            <a href="">
                                <img src="view/image/thương
                                    hiệu/hinh-anh-logo-thuong-hieu-casio.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="grid_colum_1_8">
                            <a href="">
                                <img src="view/image/thương
                                    hiệu/hinh-anh-logo-thuong-hieu-casio.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="grid_colum_1_8">
                            <a href="">
                                <img src="view/image/thương
                                    hiệu/hinh-anh-logo-thuong-hieu-casio.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="grid_colum_1_8">
                            <a href="">
                                <img src="view/image/thương
                                    hiệu/hinh-anh-logo-thuong-hieu-casio.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="grid_colum_1_8">
                            <a href="">
                                <img src="view/image/thương
                                    hiệu/hinh-anh-logo-thuong-hieu-casio.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="grid_colum_1_8">
                            <a href="">
                                <img src="view/image/thương
                                    hiệu/hinh-anh-logo-thuong-hieu-casio.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="grid_colum_1_8">
                            <a href="">
                                <img src="view/image/thương
                                    hiệu/hinh-anh-logo-thuong-hieu-casio.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="grid_colum_1_8">
                            <a href="">
                                <img src="view/image/thương
                                    hiệu/hinh-anh-logo-thuong-hieu-casio.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="grid_colum_1_8">
                            <a href="">
                                <img src="view/image/thương
                                    hiệu/hinh-anh-logo-thuong-hieu-casio.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="grid_colum_1_8">
                            <a href="">
                                <img src="view/image/thương
                                    hiệu/hinh-anh-logo-thuong-hieu-casio.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="grid_colum_1_8">
                            <a href="">
                                <img src="view/image/thương
                                    hiệu/hinh-anh-logo-thuong-hieu-casio.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="grid_colum_1_8">
                            <a href="">
                                <img src="view/image/thương
                                    hiệu/hinh-anh-logo-thuong-hieu-casio.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="grid_colum_1_8">
                            <a href="">
                                <img src="view/image/thương
                                    hiệu/hinh-anh-logo-thuong-hieu-casio.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="grid_colum_1_8">
                            <a href="">
                                <img src="view/image/thương
                                    hiệu/hinh-anh-logo-thuong-hieu-casio.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="grid_colum_1_8">
                            <a href="">
                                <img src="view/image/thương
                                    hiệu/hinh-anh-logo-thuong-hieu-casio.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="grid_colum_1_8">
                            <a href="">
                                <img src="view/image/thương
                                    hiệu/hinh-anh-logo-thuong-hieu-casio.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="grid_colum_1_8">
                            <a href="">
                                <img src="view/image/thương
                                    hiệu/hinh-anh-logo-thuong-hieu-casio.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="grid_colum_1_8">
                            <a href="">
                                <img src="view/image/thương
                                    hiệu/hinh-anh-logo-thuong-hieu-casio.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="grid_colum_1_8">
                            <a href="">
                                <img src="view/image/thương
                                    hiệu/hinh-anh-logo-thuong-hieu-casio.png"
                                    alt="">
                            </a>
                        </div>
                    </div>


                    <div class="product_home">
                        <h1 style="margin-top: 40px;text-align: center;">TIN TỨC
                            ĐỒNG HỒ</h1>
                        <p class="line"></p>
                    </div>

                    <div class="home-news">
                        <div class="home_news_left">
                            <div class="home_news">
                                <img
                                    src="view/image/news/V9IEZBue-dong-ho-thong-minh-600x315.jpg"
                                    alt="">
                                <div style="padding: 12px;">
                                    <h3><a href="">Khám phá hãng sản xuất đồng
                                            hồ thông minh nổi tiếng trên thế
                                            giới</a>
                                    </h3>
                                    <div class="Line-news"></div>
                                    <p>Ngày nay với sự phát triển vượt trội của
                                        nền công nghệ, đặc biệt là [...]</p>
                                </div>
                            </div>
                        </div>
                        <div class="home-news_right">
                            <div class="new_right_box" style="margin-bottom:
                                21px;">
                                <div class="new_right_box_img">
                                    <img
                                        src="view/image/news/Rg7B2ecA-pin-dong-ho-casio-600x400.jpg"
                                        alt="">
                                </div>
                                <div class="new_right_box_conten">
                                    <h3><a href="">Khám phá hãng sản xuất đồng
                                            hồ thông minh nổi tiếng trên thế
                                            giới</a>
                                    </h3>
                                    <div class="Line-news"></div>
                                    <p>Ngày nay với sự phát triển vượt trội của
                                        nền công nghệ, đặc biệt là [...]</p>
                                </div>
                            </div>
                            <div class="new_right_box" style="margin-bottom:
                                21px;">
                                <div class="new_right_box_img">
                                    <img
                                        src="view/image/news/mCFNuflv-applewatch-series-4-600x315.jpg"
                                        alt="">
                                </div>
                                <div class="new_right_box_conten">
                                    <h3><a href="">Khám phá hãng sản xuất đồng
                                            hồ thông minh nổi tiếng trên thế
                                            giới</a>
                                    </h3>
                                    <div class="Line-news"></div>
                                    <p>Ngày nay với sự phát triển vượt trội của
                                        nền công nghệ, đặc biệt là [...]</p>
                                </div>
                            </div>
                            <div class="new_right_box">
                                <div class="new_right_box_img">
                                    <img
                                        src="view/image/news/GXVSeCpc-dong-ho-rolex-nam-600x400.jpg"
                                        alt="">
                                </div>
                                <div class="new_right_box_conten">
                                    <h3><a href="">Khám phá hãng sản xuất đồng
                                            hồ thông minh nổi tiếng trên thế
                                            giới</a>
                                    </h3>
                                    <div class="Line-news"></div>
                                    <p>Ngày nay với sự phát triển vượt trội của
                                        nền công nghệ, đặc biệt là [...]</p>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="container_menu">
                        <div class="container_menu_box">
                            <i class="fa-solid fa-watch"></i>
                            <a href="../html/ve_shop_dong_ho.html">
                                Về shop đồng hồ
                            </a>
                        </div>
                        <div class="container_menu_box">
                            <i class="fa-sharp fa-solid fa-watch-smart"></i>
                            <a href="">
                                Đồng hồ thông minh
                            </a>
                        </div>
                        <div class="container_menu_box">
                            <i class="fa-solid fa-book"></i>
                            <a href="">
                                kiến thức đồng hồ
                            </a>
                        </div>
                        <div class="container_menu_box">
                            <i class="fa-solid fa-calendar-days"></i>
                            <a href="">
                                Sự kiện khuyến mãi
                            </a>
                        </div>
                        <div class="container_menu_box">
                            <i class="fa-solid fa-users"></i>
                            <a href="">
                                Lựa chọn đồng hồ
                            </a>
                        </div>

                        <div class="container_menu_box">
                            <i class="fa-solid fa-newspaper"></i>
                            <a href="">
                                tin tức mới nhất
                            </a>
                        </div>
                    </div>
                </div>
                <div class="container_advertisement">
                    <div class="grid container_advertisement_box ">
                        <div class="container_advertisement_item">
                            <img src="view/image/banner/award.png" alt="">
                            <p>100% HÀNG CHÍNH HÃN</p>
                        </div>
                        <div class="container_advertisement_item">
                            <img src="view/image/banner/ReVeI8Y2-shipped.png"
                                alt="">
                            <p>MIỄN PHÍ VẬN CHUYỂN</p>
                        </div>
                        <div class="container_advertisement_item">
                            <img src="view/image/banner/7qQQ7Pkj-secure-shield.png"
                                alt="">
                            <p>BẢO HÀNH CHÍNH HÃN</p>
                        </div>
                        <div class="container_advertisement_item">
                            <img src="view/image/banner/mJMpAMmv-return.png" alt="">
                            <p>ĐỔI HÀNG TRONG 7 NGÀY</p>
                        </div>
                    </div>
                </div>
               
            </section>