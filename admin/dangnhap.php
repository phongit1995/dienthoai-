<?php
include("modules/config.php");
session_start();
$error = "";
if (isset($_POST['dangnhap'])) {
	
    $taikhoan = $_POST['taikhoan'];
	#$matkhau= $_POST['matkhau'];
	$matkhau=md5($_POST['matkhau']);
    $sql = "select * from admin where taikhoan='$taikhoan' and matkhau='$matkhau'";
    $row = mysqli_query($conn, $sql);
    $result = mysqli_fetch_array($row, MYSQLI_ASSOC);
    if (mysqli_num_rows($row) > 0) {
        //session_register("user");
        $_SESSION['taikhoan'] = $taikhoan;
		echo "Xin chào " . $taikhoan .
		". Bạn đã đăng nhập thành công. <a href='http://localhost:8080/webdienthoai-master/admin/'>Về trang quản trị</a>";
		header("http://localhost:8080/webdienthoai-master/admin/");
    } else {
        //$error='Tài khoản hoặc mật khẩu không đúng!';
        echo "<script>alert('Tài khoản hoặc mật khẩu không đúng!')</script>";
    }
} else if (isset($_POST['dangxuat'])) {
    session_destroy();
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 17%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<h2> Đăng nhập</h2>

<form action="" method="POST">
  <div class="imgcontainer">
    <img src="images/logologin.jpg" alt="Avatar" class="avatar" width="10px" height="150px">
  </div>

  <div class="container">
    <label for="uname"><b>Tài khoản</b></label>
    <input type="text" placeholder="Enter Username" name="taikhoan" required>

    <label for="psw"><b>Mật khẩu</b></label>
    <input type="password" placeholder="Enter Password" name="matkhau" required>
    <input type="submit" class="btn btn-info" name="dangnhap" value="Đăng nhập">    
    
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
</form>

</body>
</html>
