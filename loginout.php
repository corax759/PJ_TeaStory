<?php

//先設定userName為guest
$userName = "guest";

//設定如果userName已登入cookie顯示登入的名稱 (改成session)
if(isset($_COOKIE["mname"])){
  $userName = $_COOKIE["mname"];
}
//按下登出清除cookie

//判斷 mname 是否已註冊 是的話可以登入 不是的話跳到登入頁
?>