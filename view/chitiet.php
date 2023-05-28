


<section>
    <?php 
         foreach ($getone as $ctsp) {
            echo '<div class="grid">
            <div class="row-ct ">
                <div class="col-6">
                  <img src="./upload/'.$ctsp['img'].'" alt="" style="width:90%;">
                </div>
                <div class="col-6 ">
                <form action="index.php?act=addcart" method="post">
                <h2>'.$ctsp['tenSp'].'</h2>
                <div class="line-ct mt-2"></div>
                <div class="row-ct-1 mt-4">
                    <div class="ct-start  " style="width: 180px;">
                       <i class="fa-solid fa-star"></i>
                       <i class="fa-solid fa-star"></i>
                       <i class="fa-solid fa-star"></i>
                       <i class="fa-solid fa-star"></i>
                       <i class="fa-solid fa-star"></i>
                   </div>
                   <p class="col-6 evaluate" style="font-size: 1.3rem;"><span class="m-1">9</span>đánh giá của khách hàng </p>
                </div>
                <div class="ct-code" >
                   <p style="font-size: 1.2rem;">Mã sản phẩm: <span>'.$ctsp['idSanPham'].'</span></p>
                </div>
                <div class="row price " style="margin-top: 20px; text-align: center;">
                   <p class="col-5">Giá tiền : <span>'.$ctsp['gia'].'</span>đ</p>

                   </div>
                <div style="display:flex;"> 
                <p >Số Lượng :</p>
                <input  type="number" value="1" min=1 max=100 required="" style="margin-left:20px;" name="sl">
                </div>
                <input type="hidden" value="'.$ctsp['idSanPham'].'" name="id">
                <input type="hidden" value="'.$ctsp['img'].'" name="hinh">
                <input type="hidden" value="'.$ctsp['tenSp'].'" name="tensp">
                <input type="hidden" value="'.$ctsp['gia'].'" name="gia">
                <input class="ct-submit" type="submit" value="Thêm vào giỏ hàng" name="addtocart">
                </form>
                

                 <div class="row  location" style="margin-top: 20px;">
                    <h5><i class="fa-solid fa-shop"></i> Vị trí cửa hàng:</h5>
                    <p class="">39tx 36b Khu phố 1 phường thạnh xuân quận 12</p>
                 </div>
                 <div class="row-ct mt-4">
                    <div class="col-6 ct-advise">                        
                            <input type="text" name="" id="" placeholder="Số điện thoại" style="width: 100%;">                                                          
                            <div class="advise-button"><a href="" >Tư vấn</a></div>
                        
                    </div>
                    <div class="col-6 ct-button">
                        <button>
                            <p style="padding: 12px;"><i class="fa-solid fa-phone"></i> 0708223608</p>
                        </button>
                    </div>
                 </div>
                </div>
            </div>
            <div class="row-line">

            </div>
            <h2 style="margin-top: 20px;">Thông tin bổ sung</h2>
            <div class="row-line-2">
            </div>
            <div class="row-ct">
                <div class="col-60">
                     <div class="infomation-product">
                         <div class="infomation-product-1">
                               <h3>BẢO HÀNH CHÍNH HÃN</h3>
                         </div>
                         <div class="infomation-product-2">
                             <p>Quốc tế 1 năm </p>
                         </div>
                     </div>
                     <div class="infomation-product">
                        <div class="infomation-product-1">
                              <h3>MÀU DÂY</h3>
                        </div>
                        <div class="infomation-product-2">
                            <p>'.$ctsp['mauday'].'</p>
                        </div>
                    </div>
                    <div class="infomation-product">
                        <div class="infomation-product-1">
                              <h3>Dạng mặt số</h3>
                        </div>
                        <div class="infomation-product-2">
                            <p>'.$ctsp['dangmatso'].'</p>
                        </div>
                    </div>
                    <div class="infomation-product">
                        <div class="infomation-product-1">
                              <h3>Giới tính</h3>
                        </div>
                        <div class="infomation-product-2">
                            <p>'.$ctsp['gioitinh'].'</p>
                        </div>
                    </div>
                    <div class="infomation-product">
                        <div class="infomation-product-1">
                              <h3>Hãng</h3>
                        </div>
                        <div class="infomation-product-2">
                            <p>'.$ctsp['han'].'</p>
                        </div>
                    </div>
                    <div class="infomation-product">
                        <div class="infomation-product-1">
                              <h3>Thương hiệu </h3>
                        </div>
                        <div class="infomation-product-2">
                            <p>'.$ctsp['thuonghieu'].'</p>
                        </div>
                    </div>
                </div>
                <div class="col-40">
                    <div class="product-contact">
                         <div class="product-contact-img">
                            <img src="./view/image/item/icon-secure-shield.svg" alt="">
                            <p>Bảo hành 5 năm</p>
                         </div>
                         <div class="product-contact-img">
                            <img src="./view/image/item/100-hang-chinh-hang.svg" alt="">
                            <p>100% Chính Hãn</p>
                         </div>
                    </div>
                    <div class="product-contact">
                        <div class="product-contact-img">
                           <img src="./view/image/item/icon-free-shipping.svg" alt="">
                           <p>Miễn Phí Vận Chuyển</p>
                        </div>
                        <div class="product-contact-img">
                           <img src="./view/image/item/icon-da-dang-sp.svg" alt="">
                           <p>Sản Phẩm Đa Dạng</p>
                        </div>
                   </div>
                   <div class="product-contact">
                    <div class="product-contact-img">
                       <img src="./view/image/item/icon-cham-soc-khach-hang.svg" alt="">
                       <p>Nhân Viên Nhiệt Tình</p>
                    </div>
                    <div class="product-contact-img">
                       <img src="./view/image/item/return-ic.svg" alt="">
                       <p>Đảm Bảo Trả Hàng 7 Ngày</p>
                    </div>
               </div>
                </div>
            </div>
            <div class="row-line">
            </div>

            <h2 style="margin-top: 20px;">Mô tả sản phẩm</h2>
            <div class="row-line-2">
            </div>
            <div class="describle">
                <p style="margin-top: 20px;">'.$ctsp['mota'].'</p>
                <p style="margin-top: 20px;">'.$ctsp['chitiet'].'</p>
            </div>

            <h2 style="margin-top: 20px;">Đánh Giá</h2>
            <div class="row-line-2">
            </div>
            <div class="ct-evaluate">

             <h3 style="margin-top: 20px;">Hãy là người đầu tiên đánh giá sản phẩm "<span>Casio Edifice EFR-526L-7AVUDF Nam Quartz</span>"</h3>

             <div class="ct-evaluate-input">
                <div class="ct-50">
                <p style="margin-top: 10px;">Nhận xét của bạn :</p>
                  <textarea name="" id="" cols="50%" rows="10" style="width: 100%;"></textarea>
                </div>
                <div class="ct-50">
                  
                </div>
             </div> 
             <div class="ct-evaluate-input">
                <div class="ct-50">
                <p style="margin-top: 10px;">Tên :</p>
                  <input type="text" name="" id="" placeholder="Tên">
                </div>
                <div class="ct-50">
                    <p style="margin-top: 10px;margin-left: 20px;">Email :</p>
                  <input type="email" name="" id="" style="margin-left: 20px;" placeholder="Email">
                </div>
             </div> 
              <div class="ct-evaluate-submit">
                  <input type="submit" value="Gửi Đi">
              </div>
           
            </div>
        </div>';
         }
    ?>
                
            </section>    