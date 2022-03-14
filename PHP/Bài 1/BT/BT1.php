<?php
    echo "Bài 1";
    $To1 = 12;
    $To2 = 4;
   if ($To2 = 4) {
     $To2 = 2*$To1 - 4;
   }
   echo "<br>";
   echo "Tổ 2 có $To2 công nhân.";
  //--------------------------------------------//
    echo "<br>";
    echo "Bài 2";
    $tien = 2000;
    $gia = 200;
    $keo = $tien / $gia;
    $vo = $keo;     
    while ($vo >= 2) {
      $keo += floor($vo /2);
      $vo = floor($vo /2) + floor($vo % 2);
    } 
    echo "<br>";
    echo "Đổi được $keo viên kẹo.";
    //----------------------------------------------//
    echo "<br>";
    echo "Bài 3";
    $Tui1 = 18;
    $Tui2 = $Tui1 * 2;
    $dem = 0;
   while ($Tui2-- > $Tui1++) {
     $dem++;
   }
    echo "<br>";
    echo "Cần chuyển $dem viên bi.";
    //---------------------------------------------//
    echo "<br>";
    echo "Bài 4";
   $SachB = 27;
   $SachM = $SachB /3;
   $dem = 0;
   while ($SachB-- > $SachM++ *2) {
     $dem++;
   }
   echo "<br>";
   echo "Cần chuyển $dem quyển sách.";
?>