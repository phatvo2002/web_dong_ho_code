<section class="container">
<h2>Sản phẩm</h2>
      <form action="admin_index.php?act=sanpham_add" method="post" enctype="multipart/form-data">
             <select name="idDanhmuc" id="">
                <option value="0">Chọn danh mục</option>
             <?php 
                if(isset($dsdm))
                {
                    foreach ($dsdm as $dm) {
                       
                        echo '<option value="'.$dm['idDanhmuc'].'" >'.$dm['tenDanhMuc'].'</option>';
                        
                    }
                }
             ?>
             </select>
             <div class="row">
             <div class="input-group mt-4">
                     <span class="input-group-text">Thêm tên sản phẩm</span>
                     <input type="text" name="tenSp" id="tenSp" class="col-10"> 
             </div>
             <div class="input-group mt-4">
                     <span class="input-group-text">Thêm hình ảnh</span>
                     <input type="file" name="img" id="img" class="col-10">
             </div>
             <div class="input-group mt-4">
                     <span class="input-group-text">Thêm giá sản phẩm</span>
                     <input type="text" name="gia" id="gia" class="col-10">
             </div>
            </div>
            <input type="submit" value="Thêm Mới" name="themmoi" class="mt-4 mb-4">
          
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
        //       var_dump($kq);
           
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