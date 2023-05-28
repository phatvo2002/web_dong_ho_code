
<h2></h2>
<div class="container">
                <section class="grid">
                      <p style=" margin-bottom: 20px; font-size: 0.8rem;font-weight: 400;">Trang chủ <i class="fa-solid fa-chevron-right"></i><span style="margin-left: 4px;">sản phẩm</span></p>
                </section>
                <div class="grid">
                    <div class="container_product_header">
                        <div class="container_product_header_left">
                            <h2>TẤT CẢ SẢN PHẨM</h2>
                        </div>
                        <div class="container_product_header_right">
                            
                            <div id="myBtnContainer">
                                <!-- <button class="btn active" onclick="filterSelection('all')"> Tất cả</button>
                                <button class="btn" onclick="filterSelection('over_milion')">Trên 2 triệu</button>
                                <button class="btn" onclick="filterSelection('under_milion')"> Dưới 2 triệu</button>
                                <button class="btn" onclick="filterSelection('under_three_milion')"> Dưới 3 triệu</button> -->

                            </div>
                        </div>
                    </div>
                    <div class="container-product">
                        <div class="nav-bar">
                          <div><i class="fa-solid fa-bars" style="margin-right: 10px;"></i>DANH MỤC SẢN PHẨM</div>
                          <div>
                          <?php 
                                foreach ($dsdm as $item) {
                                     echo '
                                     <ul>
                                     <li><a href=" index.php?act=tatcasp&idDanhmuc='.$item['idDanhmuc'].'" ">'.$item['tenDanhMuc'].'</a></li> </ul>';
                                 }
                            ?>
                            <ul>
                                <!-- <li><a href="">Đồng Hồ Nam</a></li>
                                <li><a href="">Đồng Hồ Nữ</a></li>
                                <li><a href="">Đồng Hồ Khuyến Mãi</a></li> -->
                            </ul>
                          </div>
                        </div>
                       <div class="grid-product">   
                                          
                           <div class="grid_row ">                            
                              
                                <?php 
                                ?>
                               <?php                                                                
                                 foreach ($dssp as $sp) {
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
                               ';}
                                                                                  
                           
                               ?>
                               <?php 
                                ?>
                                   
                           </div>
                       </div>
                        </div>
                     </div>
                    </div>

                      <script>
                        filterSelection("all")
                        function filterSelection(c) {
                          var x, i;
                          x = document.getElementsByClassName("filterDiv");
                          if (c == "all") c = "";
                          for (i = 0; i < x.length; i++) {
                            w3RemoveClass(x[i], "show");
                            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
                          }
                        }
                        
                        function w3AddClass(element, name) {
                          var i, arr1, arr2;
                          arr1 = element.className.split(" ");
                          arr2 = name.split(" ");
                          for (i = 0; i < arr2.length; i++) {
                            if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
                          }
                        }
                        
                        function w3RemoveClass(element, name) {
                          var i, arr1, arr2;
                          arr1 = element.className.split(" ");
                          arr2 = name.split(" ");
                          for (i = 0; i < arr2.length; i++) {
                            while (arr1.indexOf(arr2[i]) > -1) {
                              arr1.splice(arr1.indexOf(arr2[i]), 1);     
                            }
                          }
                          element.className = arr1.join(" ");
                        }
                        
                        
                        var btnContainer = document.getElementById("myBtnContainer");
                        var btns = btnContainer.getElementsByClassName("btn");
                        for (var i = 0; i < btns.length; i++) {
                          btns[i].addEventListener("click", function(){
                            var current = document.getElementsByClassName("active");
                            current[0].className = current[0].className.replace(" active", "");
                            this.className += " active";
                          });
                        }
                        </script>
                </div>
               <div class="button_page">
                      <div id="MyDiv">
                       
                         
                      </div>
                        <div class="btn-page">
                  
                           <a class="btn-page-item" style="line-height: 100px;">1 </a>
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
                        <img src="view/image/banner/ReVeI8Y2-shipped.png" alt="">
                        <p>MIỄN PHÍ VẬN CHUYỂN</p>
                    </div>
                    <div class="container_advertisement_item">
                        <img src="view/image/banner/7qQQ7Pkj-secure-shield.png" alt="">
                        <p>BẢO HÀNH CHÍNH HÃN</p>
                    </div>
                    <div class="container_advertisement_item">
                        <img src="view/image/banner/mJMpAMmv-return.png" alt="">
                        <p>ĐỔI HÀNG TRONG 7 NGÀY</p>
                    </div>
                </div>
            </div>