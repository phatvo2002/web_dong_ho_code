<?php 
define('MD5_PRIVATE_KEY', '09JJJjhh7834jHJG876312^&%shjdgsjagdasKoks');
function getPwdSecurity($pwd)
{
    return md5(md5($pwd).MD5_PRIVATE_KEY);
}
   function checkuser($user,$pass)
{
    $conn=connect_db(); // tạo kết nối
    $stmt =$conn->prepare("SELECT * FROM users WHERE user ='".$user."' and pass='".$pass."'"); // thực thi câu lệnh sql
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq= $stmt -> fetchAll();
    if(count($kq) > 0) 
    return $kq[0]['role'];
    else return 0;
}
function getInfo($user,$pass)
{
    $conn=connect_db(); // tạo kết nối
    $stmt =$conn->prepare("SELECT * FROM users WHERE user ='".$user."' and pass='".$pass."'"); // thực thi câu lệnh sql
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq= $stmt -> fetchAll();
    return $kq;
}
function inputuser($sdt,$email,$user,$pass)
{
    $conn=connect_db(); 
    $sql = "INSERT INTO  users(sdt,email,user,pass) VALUES ('".$sdt."','".$email."','".$user."','".$pass."')";
    $conn->exec($sql);
}

function findUser($username,$pass)
   {
      $conn=connect_db(); // tạo kết nối
      $stmt =$conn->prepare("SELECT * FROM users WHERE user='".$username."' AND  pass='".$pass."'"); // thực thi câu lệnh sql
      $stmt->execute();
      $stmt->setFetchMode(PDO::FETCH_ASSOC);
      $kquser= $stmt -> fetchAll();
      return $kquser;
   }
?>