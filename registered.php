<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'teastory';

$link = @mysqli_connect("localhost", "root", "") or die(mysqli_connect_error("連線失敗"));        
$result = mysqli_query($link, "set names utf8");
mysqli_select_db($link, "teastory");

$commandText ="select * from member";
$result = mysqli_query($link, $commandText);

//第15行到18行要ㄧ起開啟 問題:只要刷新頁面就會跑一次空的值資料到資料庫
$sql =  "insert into member (mName, mEmail, mpassword, mBirthday, mPhone) values
 (,'{$_POST["mEmail"]}','{$_POST["mpassword"]}','{$_POST["mBirthday"]}','{$_POST["mPhone"]}')";

 // 執行連結資料庫
// mysqli_query($link,$sql);



if (isset($_POST["btnregistered"])) {
  // 執行$sql然後轉到登入頁

  header("Location:member.php");
}
// $result = mysqli_query($link,$sql);

//把資料一行行跑出來
// $row = mysqli_fetch_assoc($result);

require("loginout.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新會員註冊</title>
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
<script>
function relogin(){
alert("已註冊完畢 請再次登入會員");
}
</script>

</head>
<body>
<?php
 require("navbar.php");
 ?>
    <div class="productitle">
        <h3>新會員註冊</h3>
    </div>
    <form class="form-horizontal" method= "post" action="">
      <fieldset>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="name">用戶名稱</label>  
        <div class="col-md-4">
        <input  name="mName"  type="text" class="form-control input-md">
          
        </div>
      </div>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="account">電郵</label>  
        <div class="col-md-4">
        <input id="mEmail" name="mEmail" type="text" class="form-control input-md">
          
        </div>
      </div>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="password">密碼</label>  
        <div class="col-md-4">
        <input id="mpassword" name="mpassword"  type="text" class="form-control input-md">
          
        </div>
      </div>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="birthday">生日</label>  
        <div class="col-md-4">
        <input id="mBirthday" name="mBirthday"  type="text" class="form-control input-md">
          
        </div>
      </div>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="phone">連絡電話</label>  
        <div class="col-md-4">
        <input id="mPhone" name="mPhone" type="text"class="form-control input-md">
          
        </div>
      </div>
      
      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="registered"></label>
        <div class="col-md-4">
          <button onclick="relogin()" id="btnregistered" name="btnregistered" class="btn btn-success">註冊</button>
        </div>
      </div>
      
      </fieldset>
      </form>
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