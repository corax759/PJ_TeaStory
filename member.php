<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'teastory';

$link = @mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());        
$result = mysqli_query($link, "set names utf8");
mysqli_select_db($link, "teastory");

// $commandText ="select * from member";
// $result = mysqli_query($link, $commandText);

//判斷是否登入
require("loginout.php");


//註冊鈕導到註冊頁面
if (isset($_POST["btnregistered"])) {
  header("Location:registered.php");
}

//登入鈕把輸入的使用者名稱post到cookie
if(isset($_POST["btnoklogin"])){
  //把輸入的userName post
  $userName= $_POST ["mname"];
  //傳送userName到cookie
  setcookie("mname", $userName);
  //跳轉到首頁
  header("location:tea_index.php");
  // echo $userName;
  //程式結束
  exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@500&display=swap" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
    *{
    margin: 0px;
    padding: 0px;
    list-style:none;
    font-family: 'Noto Serif TC', serif;
}
.productitle h3{
  padding-bottom: 0.3em;
  margin-bottom: 0.3em;
  text-align: center;
  margin: 50px;
  padding: 50px;
  font-size: 30px;
}
.productitle p{
  text-align: center;
  font-size:15px;
}
.membership{
  width: 500px;
  justify-content: center;
  margin: 100px;
}
.info{
  display: flex;
  padding: 100px;
  text-align: center;
  height: 200px;
  background-color: lightgray;
  color: white;
}
</style>

</head>
<body>
<?php
 require("navbar.php");
 ?>
    <div class="productitle">
        <h3>會員登入</h3>
    </div>

    <div class="membership">
        <div class="container">
            <form method="post" action="member.php">
              <div class="form-group">
                <label for="mname">用戶名稱</label>
                <input type="text" class="form-control" name="mname" id="mname" placeholder="Enter" name="mname">
              </div>
              <div class="form-group">
                <label for="pwd">密碼</label>
                <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Enter password" name="pswd">
              </div>
              <div class="form-group form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" name="remember">記住我
                </label>
              </div>
              <button id="btnoklogin" name="btnoklogin" type="submit" class="btn btn-dark">登入</button>
              <button id="btnoksign" name="btnregistered"type="submit" class="btn btn-dark">註冊</button>
              <a href="">忘記密碼?</a>
            </form>
          </div>
    </div>
<div class="info">
        <ul>
          <a href=""><li>購物須知</li></a>
          <a href=""><li>常見問題</li></a>
          <a href=""><li>退換說明</li></a>
        </ul>
</div>
<!-- <?php
mysqli_close ( $link );
?> -->
</body>
</html>