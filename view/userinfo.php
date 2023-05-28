
<section>
                    <div class="grid ">
                    <div class="userinfomain">
                        
                       <div class="user-info-left">
                          <img src="view/image/user/User_icon_2.svg.png" alt="">
                          <?php 
                            if(isset($_SESSION['user']) && ($_SESSION['user'])!="")
                            {
                               echo ' <p>Tài khoản : <span>'.$_SESSION['user'].'</span></p>';
                            }else{
                          ?>
                          <p>Tài khoản : <span></span></p>
                          <?php }?>
                          <ul class="user_info_list">
                            <li><a href="">Cập nhật tài khoản</a></li>
                            <li><a href="">Quên mật khẩu</a></li>
                            <li><a href="index.php?act=thoat">Đăng xuất</a></li>
                          </ul>
                       </div>
                       <div class="user-info-right">
                            <h2 style="font-weight: 500;margin-top: 20px;margin-left: 20px;">Hồ sơ của tôi :</h2>
                            <div class="line_user"></div>
                            <div class="line-user-box-main">
                                <div class="user-info-right-box-1">
                                    <div class="infomation_group">
                                       <div class="infomation_group_1">
                                          Tên Đăng Nhập :
                                       </div>  
                                       <?php 
                                         if(isset($_SESSION['user']) && ($_SESSION['user'])!="")
                                         {
                                           echo '<div class="infomation_group_2">
                                             '.$_SESSION['user'].'
                                           </div>';
                                         }else
                                         {                                         
                                       ?>                                               
                                        <div class="infomation_group_2">
                                         
                                        </div>
                                        <?php }?>
                                    </div>
                                    <div class="infomation_group">
                                        <div class="infomation_group_1">
                                           Email :
                                        </div>         
                                        <?php 
                                         if(isset($_SESSION['email']) && ($_SESSION['email'])!="")
                                         {
                                              echo '<div class="infomation_group_2">
                                             '.$_SESSION['email'].'
                                            </div>';
                                         }else
                                         {

                                        ?>                                        
                                         <div class="infomation_group_2">
                                           vodangphat2002@gmail.com
                                         </div>
                                         <?php }?>
                                     </div>
                                     <div class="infomation_group">
                                      
                                        <div class="infomation_group_1">
                                           Số điện thoại :
                                        </div> 
                                        <?php 
                                          if(isset($_SESSION['sdt']) && ($_SESSION['sdt'])!="")
                                          {
                                             echo '<div class="infomation_group_2">
                                                   0708223608
                                              </div>';
                                          }else
                                          {

                                       ?>                                                
                                         <div class="infomation_group_2">
                                          
                                         </div>
                                         <?php }?>
                                     </div>
                                </div>
                                <div class="user-info-right-box-2">
                                     <img src="view/image/user/Sample_User_Icon.png" alt="" style="width: 150px;">
                                     <div>
                                         <input type="file" name="imgusser" id="" placeholder="Up load hình ảnh">
                                     </div>
                                </div>
                            </div>
                       </div>
                    </div>
                    </div>
                 </section>