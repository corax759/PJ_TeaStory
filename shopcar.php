<?php


$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'teastory';

$link = @mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());        
$result = mysqli_query($link, "set names utf8");
mysqli_select_db($link, "teastory");

//下方各欄位 連結shopcar資料表
$commandText ='select pimge,pname,pprice from shopcar s
inner join member m on s.mID = m.mID
inner join shopitem p on s.pID = p.pID';

$result = mysqli_query($link, $commandText);

require("loginout.php");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員購物車</title>
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
  margin: 100px 0px 10px;
  font-size: 30px;
}
.productitle p{
  text-align: center;
  font-size:15px;
}
.col-sm-10 h4{
  font-size: 18px;
  margin:10px 50px;
}
.col-sm-10 p{
  font-size: 10px;
  margin:0px 50px;
}
</style>
<script>
  function checkout(){
    alert("結帳已完成")
  }
</script>
</head>
<body>
    <!-- 導覽列 -->
    <?php
 require("navbar.php");
 ?>
  <div class="productitle">
    <h3>購物清單</h3>
    <p>單筆消費滿1,500免運，限台灣地區 | 海外購物滿五千可享免運費 | 消費贈送：白毫茉莉單入袋茶</p>
  </div>
    <div class="container">
    </div>
    <table id="cart" class="table table-hover table-condensed">
      <thead>
          <tr>
              <th class="text-center" style="width:40%">商品圖片</th>
              <th class="text-center" style="width:25%">品名</th>
              <th class="text-center" style="width:15%">價格</th>
              <th class="text-center" style="width:10%">數量</th>
              <th class="text-center" style="width:10%"></th>
          </tr>
      </thead>
      <tbody>
          <tr>
          <?php while ($row = mysqli_fetch_assoc($result)) { ?>
              <td data-th="Product">
                  <div class="row">
                      <div class="col-sm-2 hidden-xs"><img src="imges/<?=$row["pimge"]?>" alt="..." class="img-responsive"/></div>
                      <div class="col-sm-10">
                          <h4><?=$row["pname"]?></h4>
                          <p>
                            產地：台灣<br>
                            規格：鋁箔真空包裝 <br>
                            淨重： 100g <br>
                          </p>
                      </div>
                  </div>
              </td>
              <td data-th="Price"><?=$row["pprice"]?></td>
              <td data-th="Quantity">
                  <input type="number" class="form-control text-center" value="1">
              </td>
              <td class="actions" data-th="">
                  <button class="btn btn-dark btn-sm"><i class="fa fa-trash-o"></i>下次再買</button>								
              </td>
          <?php } ?>
          </tr>
      </tbody>
      <tfoot>
          <tr>
              <td><a href="tea_shop.php" class="btn btn-dark"><i class="fa fa-angle-left"></i>繼續購物</a></td>
              <td colspan="2" class="hidden-xs"></td>
              <!-- <td class="hidden-xs text-center"><strong>Total $1.99</strong></td> -->
              <td><a onclick="checkout()" href="#" class="btn btn-success btn-block">結  帳 <i class="fa fa-angle-right"></i></a></td>
          </tr>
      </tfoot>
  </table>
<?php
mysqli_close ( $link );
?>
</body>
</html>