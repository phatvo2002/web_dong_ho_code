<?php 
  session_start();
  ob_start();
   include"../model/connect_database.php";
   include"../model/user.php";
  if((isset($_POST['dangnhap'])) && ($_POST['dangnhap']))
  {
      $user=$_POST['name'];
      $pass=$_POST['password'];
      $role=checkuser($user,$pass);
      $_SESSION['role']=$role;
      if($role == 1)
      header('location: admin_index.php');
      else 
      {
        $txt_error="Thông tin đăng nhập không hợp lệ";
        // header('location: login.php');
      }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../view-admin/admin.css">
    <title>Login-admin</title>
</head>
<style>
    .row {
        display: flex;
    }

    .box-login {
        width: 500px;
        
        background-color: #dfe6e9;
        margin: 0 auto;
        margin-top: 15%;
        padding: 12px;
        border-radius: 5px;
    }
    .form-admin
    {
        width: 60%;
        margin-left: 20px;
        height: 30px;
        padding: 0 12px;
    }
    .form-label
    {
        width: 120px;
    }
    .mb-3
    {
        padding: 12px;
    }
    .btn
    {
        width: 100%;
        background-color: burlywood;
    }
</style>

<body>
    <div class="container-xxl">
        <div classs="row ">
            <div class="box-login">
                <h4 style="text-align:center;">admin Login</h4>

                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="name" class="form-label">Tên đăng nhập</label>
                            <input type="text" class="form-admin" id="name" name="name" placeholder="tên đăng nhập">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Mật khẩu </label>
                            <input type="password" class="form-admin" id="password" name="password" placeholder="Mật khẩu">
                        </div>
                    </div>
                    <input type="submit" value="Đăng nhập" name="dangnhap" class="btn">
                    <?php 
                       if(isset($txt_error) && ($txt_error!=""))
                       {
                        echo $txt_error;
                       }
                    ?>
                </form>
            </div>
        </div>
    </div>

</body>

</html>