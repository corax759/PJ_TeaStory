<nav class="navbar navbar-expand-md bg-secondary navbar-dark fixed-top">
        <a class="navbar-brand" href="#">TEA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="tea_index.php">茶的故事</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tea_shop.php">商品購買</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">門市資訊</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Hello!  <?= $userName ?></a>
            </li>
            <?php if ($userName == "guest"){?>
              <li class="nav-item">
              <a class="nav-link" href="member.php">登入</a>
              </li>
            <?php } else{ ?>
              <li class="nav-item">
              <a class="nav-link" href="#">登出</a>
            </li>
            <?php } ?> 
            <!-- <li class="nav-item">
                <a class="nav-link" href="member.php"><img src="imges/account.svg" alt=""></a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="shopcar.php"><img src="imges/shopping.svg" alt=""></a>
            </li> 
          </ul>
        </div>  
      </nav>