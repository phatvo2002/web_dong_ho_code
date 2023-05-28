<section>
     <div class="container">
       <div class="row">
        <h1>Tin tức</h1>
 <form action="admin_index.php?act=tintuc_add" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="" class="form-label">Tên tin tức</label>
    <input type="text" class="form-control" id="" name="ten">
    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Nội dung</label>
    <input type="conten" class="form-control" id="" name="conten">
    
  </div>
  <div class="mb-3">
    <label for="hinhanh" class="form-label">hình ảnh</label>
    <input type="file" class="form-control" id="hinh" name="hinh">
  </div>
   <input type="submit" value="thêm mới " name="themmoitt" style="background-color: #2ecc71;">
</form>
       </div>
         <table class="table table-striped">
               <tr>
                <thead>
                    <td>STT</td>
                    <td>Tên tin tức</td>
                    <td>Hình ảnh</td>
                    <td>Nội dung</td>
                    <td>Hành động</td>
                </thead>
               </tr>
               <tr>
                <?php 
              
                  //  if(isset($kqtt) && (count($kqtt) >1))
                  //  {
                  //    $i=1;
                  //    foreach ($kqtt as $item) {
                       
                  //    }
                  //  }
                 
                  // var_dump( $dstt);
                ?>
                  <tbody>

                   <?php 
                      if(isset($dstt) && ($dstt))
                      {
                        $i=0;
                        foreach ($dstt as $item) {
                           echo'  <tr>
                           <td>'.$i.'</td>
                           <td>'.$item['ten'].'</td>
                           <td><img src="'.$item['hinh'].'" width="80px"></td>
                           <td>'.$item['conten'].'</td>
                           <td><a href="#">Xóa</a></td>
                         </tr>';
                         $i++;
                        }
                      }
                    ?>
                  
                  </tbody>
               </tr>
         </table>

     </div>

     
</section>