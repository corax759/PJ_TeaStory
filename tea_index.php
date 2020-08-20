<?php
require("loginout.php");
require("connectMysql.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>茶的故事</title>
    <link rel="stylesheet" href="css/teaStyle.css">
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
.banner{
    height:700px;
    width:100%;
    background:url(imges/teabanner.jpg) center 100%;
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
    </style>
</head>
<body>
<?php
 require("navbar.php");
 ?>
    <div class="banner">
        <div class="container">
            <div class="bannertxt">
                <h1>品味台灣茶</h1>
                <small>台灣茶最美麗的想像</small>
                <small>The most beautiful fantasy of Taiwanese tea</small>
            </div>
        </div>
    </div>
    <div class="wrap">
        <div class="item">
            <img src="imges/tea15.jpg" alt="">
            <div class="txt">
                <h2>全世界最好的茶 <br> 就是台灣茶</h1>
                <p>
                    因為台灣有豐富多元的茶樹品種、得天獨厚的生長環境、百年來與時並進的製茶工藝。
                    當屬於自然面的「品種、風土」，與屬於人文面的「工藝」，在天時地利人和中完美結合，
                    茶葉就成為「人與大自然細緻互動的藝術品」。

                </p>
            </div>
        </div>
        <div class="item">
            <img src="imges/tea21.jpg" alt="">
            <div class="txt">
                <h2>台灣茶就是 <br> 天然的香水</h1>
                <p>
                    在品茶過程，鼻子最先感受到香氣的舒適和美好，
                    再來是口腔品嘗到茶湯的甘甜與滑順，以及隱含在茶湯的花香，
                    交織出味覺和嗅覺的美好體驗，待茶湯吞下後，殘存於口腔中的茶香，點滴都是回甘，
                    讓一切依舊是如此美好。
                </p>
            </div>
        </div>
        <div class="item">
            <img src="imges/tea22.jpg" alt="">
            <div class="txt">
                <h2>台灣茶歷史悠久的 <br> 茶內涵</h1>
                <p>
                為了讓台灣茶的美好，更貼近每一個人的生活，
                打造了獨特而完美的台灣茶體驗，
                除了邀您品嚐一杯甘甜美好的台灣茶，
                更希望您透過這杯茶感受台灣自然與人文的美好價值。何其有幸，這樣美好的事物，就在我們身邊！
                </p>
            </div>
        </div>
    </div>
    <div class="t1" id="t03">
        <div class="t03img">
            <img src="imges/tea01.jpg" alt="">
        </div>
        <div class="t03in">
            <h1>「品嚐一杯來自這片土地的純淨美好滋味」</h1>
            <p>茶樹品種、地理環境、製茶工藝的豐富性，
                讓小小的台灣，茶葉百百種，每一種茶都有屬於自己獨特的香氣，
                從熱水澆淋在茶葉的那一刻，就緩緩地揚起，在茶香四溢的空間中，
                從嗅覺的滿足，一步步深入到味覺的探索，進而提升為身心靈的享受。</p>
                <button type="button" class="btn btn-dark">more</a></button>
        </div>
        
</div>
</div>
<div class="t1" id="t04">
    <div class="t04in">
        <h1>Permanent <br> 
            Revolution of Tea <br> 是永恆的台茶革命</h1>
        <p>從一杯茶走入台灣茶的世界，燃起想要改變台灣茶的夢想，進一步想要讓它走向全世界。
            <br> 一個想要改變、重新定位台灣茶文化的信念。</p>
            <button type="button" class="btn btn-dark">more</a></button>
    </div>
    <div class="t04img">
        <img src="imges/teaflower.png" alt="">
    </div>
</div>
    <!-- 頁尾資訊 -->
<div class="footerinfo">
        <p>Copyright © 2020  Co., Ltd 
                Enjoy Taiwan Tea茶股份有限公司</p>
    </div>
 
</body>
</html>