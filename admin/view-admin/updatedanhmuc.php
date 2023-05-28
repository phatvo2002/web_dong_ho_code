<section class="container">
      <h2>Cập Nhật Danh mục</h2>
      <?php 
         echo var_dump($kq1);
      ?>
      <form action="admin_index.php?act=updatedanhmuc" method="post">
            <input type="text" name="tenDanhMuc" id="" value="<?=$kq1[0]["tenDanhMuc"];?>">
            <input type="hidden" name="idDanhmuc" value="<?=$kq1[0]["idDanhmuc"];?>">
            <input type="submit" value="Thêm Mới" name="themmoi">
      </form>
      <table class="table">
            <tr >
                  <th>STT</th>
                  <th>Ten Danh Muc</th>
                  <th>Ưu tiên</th>
                  <th>hiển thị</th>
                  <th>Hành động</th>
            </tr>
           
          
      <?php 
              //var_dump($kq);
           
      ?>
      <?php 
             if(isset($kq) )
              {
                  $i=1;
                  foreach ($kq as $dm) {
                       echo '  <tr >
                       <td>'.$i.'</td>
                       <td>'.$dm["tenDanhMuc"].'</td>
                       <td>'.$dm["UuTien"].'</td>
                       <td>'.$dm["hienThi"].'</td>
                       <td><a href="admin_index.php?act=updatedanhmuc&idDanhmuc='.$dm["idDanhmuc"].'">Sửa</a> | <a href="admin_index.php?act=deldm&idDanhmuc='.$dm["idDanhmuc"].'">Xóa</a> </td>
                 </tr>';
                 $i++;
                  }
              }
           
      ?>
      </table>
</section>


