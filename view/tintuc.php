<section>
                <div class="grid">
                    <h1 style="text-align: center; padding: 20px;">TIN TỨC MỚI NHẤT</h1>

                    <img src="./view/image/item/lpin8w-i.jpg" alt="" style="width: 100%;">

                    <div class="grid">
                        <div class="grid_row">
                          <?php 
                            foreach ($dstt as $items) {
                              echo ' <div class="grid_colum-1-3">
                              <div class="news-box">
                               <a href="">
                               <img src="./upload_tt/'. $items['hinh'].'" alt="">
                               <h3>'. $items['ten'].'</h3>
                               <div class="line-ct"></div>
                               <p>'. $items['conten'].'</p>
                               </a>
                              </div>
                               
                            </div>';
                            }
                          ?>
                              
                                 
                              </div>
                        </div>
                    </div>
                </div>
              </section>