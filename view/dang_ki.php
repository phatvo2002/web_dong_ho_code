<section class="login-container">
             <div class="box-login">
                <h1 class="login-header">ĐĂNG KÍ</h1>
                <form action="index.php?act=dangki" method="post">
                    <div class="login-input"><i class="fa-solid fa-user"></i> <input type="text" name="username" id="name" placeholder="Tên Đăng Nhập" required>
                      <span style="margin-left: 30px;color: red;" id="checkname">*</span>
                   </div>
                    <div class="login-input"><i class="fa-solid fa-envelope"></i></i> <input type="email" name="email" id="email" placeholder="Email" required>
                       <span style="margin-left: 30px;color: red;" id="checkmail">*</span>
                   </div>
                   <div class="login-input"><i class="fa-solid fa-envelope"></i></i> <input type="số điện thoại" name="number" id="number" placeholder="Số điện thoại" required>
                       <span style="margin-left: 30px;color: red;" id="checknumber">*</span>
                   </div>
                    <div class="login-input"><i class="fa-solid fa-lock"></i> <input type="password" name="password" id="pass" placeholder="Mật khẩu" required>
                       <span style="margin-left: 30px;color: red;" id="checkpassword">*</span></div>
                    <div class="login-input"><i class="fa-solid fa-lock"></i> <input type="password" name="re-password" id="repass" placeholder="Mật khẩu" required>
                       <span style="margin-left: 30px;color: red;" id="checkrepass">*</span>
                   </div>
                    <div class="login-conten">
                       <div style="display: flex;">
                            <p>Bạn đã có tài khoản ? <a href="index.php?act=dangnhap">đăng nhập</a></p>
                       </div>
                       <div>
                           <a href="" >Quên mật khẩu </a>
                       </div>
                    </div>
                    <input type="submit" value="Đăng Kí" name="dangki" class="input-submit" onclick="checkform();">

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
             <script>
                function checkform()
                {
                    var username=document.getElementById("name").value;
                    var email=document.getElementById("email").value;
                    var regexemail=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    var sdt=document.getElementById("number").value;
                    var regexSdt= /^((09|03|07|08|05)+([0-9]{8})\b)$/
                    var pass=document.getElementById("pass").value;
                    var regexpass=/^[a-zA-Z0-9]{6}$/;
                    var repass=document.getElementById("repass").value;
                  
                    if(username.trim()=="")
                    {
                        document.getElementById("checkname").innerHTML="Vui lòng nhập đủ thông tin";
                       
                    }
                    else
                    {
                        document.getElementById("checkname").innerHTML="*";
                    }
                    if(email.trim()=="")
                    {
                        document.getElementById("checkmail").innerHTML="Vui lòng nhập email";
                    }
                    else if(!regexemail.test(email))
                    {
                        document.getElementById("checkmail").innerHTML="email phải đúng định dạng";
                    }
                    else{
                        document.getElementById("checkmail").innerHTML="*";
                    }
                    if(sdt.trim()=="")
                    {
                        document.getElementById("checknumber").innerHTML="Vui lòng nhập số điện thoại";
                    }
                    else if (!regexSdt.test(sdt))
                    {
                        document.getElementById("checknumber").innerHTML="Vui lòng nhập đúng định dạng";
                    }
                    else
                    {
                        document.getElementById("checknumber").innerHTML="*";

                    }
                    if(pass.trim=="")
                    {
                        document.getElementById("checkpassword").innerHTML="Vui lòng nhập pasword";
                    }
                    else if(!regexpass.test(pass))
                    {
                        document.getElementById("checkpassword").innerHTML="password phải tối thiểu 6 kí tự";
                    } 
                    else
                    {
                        document.getElementById("checkpassword").innerHTML="*";
                    }

                    if(repass != pass)
                    {
                        document.getElementById("checkrepass").innerHTML="Mật khẩu không trùng khớp";
                    }
                    else
                    {
                        document.getElementById("checkrepass").innerHTML="*";

                    }

                }
             </script>
    </section>