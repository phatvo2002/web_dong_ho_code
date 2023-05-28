<section class="login-container">
             <div class="box-login">
                <h1 class="login-header">ĐĂNG NHẬP</h1>
               
                <form action="index.php?act=dangnhap" method="post">
                    <div class="login-input"><i class="fa-solid fa-user"></i> <input type="text" name="username" id="" placeholder="Tên Đăng Nhập" required></div>
                    <div class="login-input"><i class="fa-solid fa-lock"></i> <input type="password" name="password" id="" placeholder="Mật khẩu" required></div>
                    <div class="login-conten">
                       <div style="display: flex;">
                            <p>Bạn đã có tài khoản ? <a href="index.php?act=dangki">đăng kí</a></p>
                       </div>
                       <div>
                           <a href="" >Quên mật khẩu </a>
                       </div>
                    </div>
                    <input type="submit" value="Đăng Nhập" name="dangnhap" class="input-submit">
                </form>

              
                <h2 style="color:red">
                  <?php                  
                    if(isset($thongbao) && ($thongbao != ""))
                    {
                        echo $thongbao;
                    }
                  ?>
                </h2>

             </div>
    </section>