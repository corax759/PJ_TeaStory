<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'teastory';

$link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());        
$result = mysqli_query($link, "set names utf8");
mysqli_select_db($link, "teastory");

$commandText ="select * from shopitem";
$result = mysqli_query($link, $commandText);
require("loginout.php");

session_start();
// http://localhost/teaStory0609/shopcar.php?pID=02

//   if(isset($_GET['pID'])){
//   $_SESSION['pimge']=$_GET['pimge'];
//   $_SESSION['pname']=$_GET['pname'];
//   $_SESSION['pprice']=$_GET['pprice'];
//   echo $_SESSION['pprice'];
// }
if(isset($_GET['pID'])){

$shopcar = "INSERT INTO `shopcar`(`pID`,`mID`) values ('{$_GET['pID']}', '01')";
echo $shopcar;

mysqli_query($link, $shopcar);
header("Location:shopcar.php");


exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@500&display=swap" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>商品購買</title>
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
  margin: 100px 0px 10px;
  font-size: 30px;
}
.productitle p{
  text-align: center;
  font-size:15px;
}
/* 幻燈片 */
.carousel{
  background-color: lightgray;
}
/* Make the image fully responsive */
.carousel-inner img {
    margin:50px;
    width:100%;
    height:100%;
  }
/* 頁首 */
.banner{
    height:700px;
    width:100%;
    background:url(imges/tea12.jpg) center 100%;
    /* background:url(imges/teabanner.jpg)  center / auto 100%; */
}
.container{
    width: 100%;
    max-width: 1440px;
    height: 100%;
    margin: auto;
}
.bannertxt{
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
}
.bannertxt h1{
    font-size: 80px;
    color: white;
    border-bottom: 1px white solid;
    /* font-weight: 300; */
    padding-bottom: 0.3em;
    margin-bottom: 0.3em;
}
.bannertxt small{
    color: white;
    display: block;
    font-size: 20px;
    /* font-weight: 700; */
}
  /* 左邊商品分類頁 */

  /* 商品卡設定 */
.shopitem{
    /* column-count:3; */
    /* grid-column-gap:0; */
}
.product{
    /* display:flex; */
    flex-direction:row;
    justify-content: center;
    margin: 20px 20px;
}
  img {
  width: 100%;
  min-height:100%;
}

.card {
  position: relative;
  width: 300px;
  margin: 0 auto;
  overflow: hidden;
  cursor: pointer;
  /* border: 0.5px solid #e9eaea; */
  /* border-radius: 3px; */
}

.content-img {
  /* padding: 2em 0; */
  text-align: center;
  /* background: #e1f3ff; */
}

.content {
  position: absolute;
  bottom: -35%;
  left: 0;
  box-sizing: border-box;
  width: 100%;
  height: 35%;
  padding: 0.4em 0;
  background: #fff;
  transition: 0.3s;
}

.card:hover .content {
  bottom: 0;
}

.title,
.post-day {
  padding: 0 0.3em;
  margin: 0;
  font-size: 20px;
  line-height: 1.5;
}

.post-day {
  padding: 0 0.3em;
  font-size: 20px;
  color: #777;
}
.inshop{
    color: white;
    background-color: black;
    width: 80px;
    height: 30px;
}
.inshop a:hover {
        color:white;
        text-align: center;
        text-decoration: none;
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
<script>
    function inshopcar(){
        alert("已加入購物車");
    }
</script>
<?php
 require("navbar.php");
 ?>
<div class="banner">
    <div class="container">
        <div class="bannertxt">
            <h1>時刻品味茶內涵</h1>
            <small>抓住一期一會的味覺感動</small>
            <small>INTENTION OF TEA</small>
        </div>
    </div>
</div>
<div class="productitle">
  <h3>茶葉種類</h3>
</div>
<!-- 幻燈片 -->
<div class="carousel">
  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    
    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imges/tea12.jpg" alt="" width="1100" height="500">
      </div>
      <div class="carousel-item">
        <img src="imges/tea13.png" alt="" width="1100" height="500">
      </div>
      <div class="carousel-item">
        <img src="imges/tea14.png" alt="" width="1100" height="500">
      </div>
    </div>
    
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
</div>
<div class="productitle">
  <h3>清香系列</h3>
  <p>原始自然的茶質，豐富的後味體驗</p>
</div>
    <!-- 右邊商品卡 -->
    <?php while ($row = mysqli_fetch_assoc($result)) : ?> 
    <div class="shopitem">
    <form name="product" method= "get" action="">
      <div class="card">
      <div class="content-img"><img src="imges/<?=$row["pimge"]?>"></div>
        <form class="content">
          <h3 class="title"><?=$row["pname"]?></h3>
          <span class="post-day"><?=$row["pprice"]?></span>
          <a href="tea_shop.php?pID=<?=$row["pID"]?>">
          加入購物車</a>
        </form>
      </div>
    <?php endwhile ?>
    <div class="productitle">
      <h3>Information</h3>
      <p>
        單筆消費滿1,500免運，限台灣地區。|
        海外購物滿五千可享免運費 |
        消費贈送：白毫茉莉單入袋茶
      </p>
    </div>
    </form>
    
      
      
  <div class="info">
    <ul>
      <a href=""><li>購物須知</li></a>
      <a href=""><li>常見問題</li></a>
      <a href=""><li>退換說明</li></a>
    </ul>
  </div>
    
    
<?php
mysqli_close ( $link );
?>
</body>
</html>