<section>

                </div>

                <div class="header_search">
                    <div class="grid">
                        <div class="header_search_line"> </div>
                    </div>
                </div>

            </div>
            <div class="Container" style="height: 1600px;">
            <div class="grid" >
                    <h2 style="margin-top: 30px;">Giỏ hàng </h2>
                 <table class="table-striped" style="width:100%; margin-top:20px">
                    <thead >
                        <tr >
                            <th>Stt</th>
                            <th>Tên sản phẩm</th>
                            <th>Hình ảnh </th>
                            <th>Giá tiền</th>
                            <th>Số lượng </th>
                            <th>Thành tiền</th>
                            <th>Hành động </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                           if(isset($_SESSION['giohang']))
                           {
                            $img_path ="upload/";
                            $i=0;
                            $tong=0;
                               foreach ($_SESSION['giohang'] as $gh) {
                                $tt=$gh[3]*$gh[4];
                                $tong+=$tt;
                                   echo '<tr>
                                   <td>'.($i+1).'</td>
                                   <td>'.$gh[2].'</td>
                                   <td> <img src="'.$gh[1].'" width="80px;"></td>
                                   <td style="text-align:center;">'.$gh[3].'</td>
                                   <td>'.$gh[4].'</td>
                                   <td>'.$tt.'</td>
                                   <td style=""><a href="index.php?act=dellcart&i='.$i.'">Xóa</a></td>
                               </tr>';
                               $i++;
                               }
                               
                           }
                        ?>
                      
                    </tbody>
                 </table>        
                   <div>
                       <span style="float:right;">Tổng tiền :<?php echo ''.$tong.'' ?></span>
                   </div> 

                    <div><a href="">Thanh toán</a> | <a href="index.php?act=dellcart">Xóa giỏ hàng</a></div>
                   
                        
            </div>
</section>