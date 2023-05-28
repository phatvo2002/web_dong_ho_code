<section class="container">
<h2>Cập nhật Sản phẩm</h2>
      <form action="admin_index.php?act=sanpham_update" method="post" enctype="multipart/form-data">
             <select name="idDanhmuc" id="">
                <option value="0">Chọn danh mục</option>
             <?php 
              $dsdmcur=$spct[0]['idDanhmuc'];
                if(isset($dsdm))
                {
                    foreach ($dsdm as $dm) {
                        if($dm['idDanhmuc'] == $dsdmcur )
                        echo '<option value="'.$dm['idDanhmuc'].'" selected>'.$dm['tenDanhMuc'].'</option>';
                        else 
                        echo '<option value="'.$dm['idDanhmuc'].'" >'.$dm['tenDanhMuc'].'</option>';
                    }
                }
             ?>
             </select>
             <div class="row">
             <div class="input-group mt-4">
                     <span class="input-group-text">Thêm tên sản phẩm</span>
                     <input type="text" name="tenSp" id="tenSp" class="col-4" value="<?=$spct[0]['tenSp'] ?>">
             </div>
             <div class="input-group mt-4">
                     <span class="input-group-text">Thêm hình ảnh</span>
                     <input type="file" name="img" id="img" class="col-4 mr-4">
                     <img src="<?=$spct[0]['img'] ?>" alt="" width="80px">
             </div>
             <div class="input-group mt-4">
                     <span class="input-group-text">Thêm giá sản phẩm</span>
                     <input type="text" name="gia" id="gia" class="col-4" value="<?=$spct[0]['gia'] ?>">
             </div>
            </div>
            <input type="hidden" name="idSanPham" value="<?=$spct[0]['idSanPham'] ?>">
            <input type="submit" value="Cập nhật" name="capnhat" class="mt-4">
          
      </form>
      <table class="table table-striped">
            <tr >
                  <th>STT</th>
                  <th>Ten Danh Muc</th>
                  <th>Hình ảnh</th>
                  <th>giá tiền</th>
                  <th>Hành động</th>
            </tr>
                    
      <?php 
              //var_dump($kq);
           
      ?>
      <?php 
             if(isset($kq) && (count($kq)>1))
              {
                  $i=1;
                  foreach ($kq as $item) {
                       echo '  <tr >
                       <td>'.$i.'</td>
                       <td>'.$item["tenSp"].'</td>
                       <td><img src="'.$item["img"].'" width="80px"></td>
                       <td>'.$item["gia"].'</td>
                       <td><a href="admin_index.php?act=updateSp&idSanPham='.$item["idSanPham"].'">Sửa</a> | <a href="admin_index.php?act=deldm&idDanhmuc='.$item["idDanhmuc"].'">Xóa</a> </td>
                 </tr>';
                 $i++;
                  }
              }
             
      ?>
      </table>
</section>