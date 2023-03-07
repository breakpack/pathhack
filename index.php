<?php
$conn = mysqli_connect( 'localhost', 'admin', '1q2w3e4r', 'pathhack') or die("connect faiiled..");
$date = date("Y-m-d");
$sql_date = "select todo from time_table where '$date';";
$result = mysqli_query( $conn, $sql_date );
$module_arr = ();
while($r = mysqli_fetch_assoc($result)){
  $module[] = $r;
}
$pint_color_1 = 'gray';
$pint_color_2 = 'gray';

if(in_array("1", $arr)){
  $pint_color_1 = 'mint';
}elseif(in_array("2", $arr)){
  $pint_color_2 = 'mint';
}elseif(in_array("3", $arr)){
  $pint_color_2 = 'mint';
}elseif(in_array("4", $arr)){
  $pint_color_2 = 'mint';
}
?>


<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="utf-8">
  <title>home</title>
  <link rel="stylesheet" href="index.css" />
</head>

<body>
  <input id="sidebar" type="checkbox" />
  <div class="sidebar">
    <div class="wrapper">
      <div class="wave"></div>
    </div>
    <div class="index">
      <h2>Index</h2>
      <a href="index.html">-Main</a><br><br><br><br><br><br>
      <a href="graph_week.php">-Graph</a><br><br><br><br><br><br>
      <a href="setting.php">-Setting</a><br><br><br><br><br><br>
    </div>
  </div>
  <div class="contents">
    <label for="sidebar" id="sidebarbtn">
      <div id="sidebar_btn" onclick="check()"></div>
    </label>
    <h2 id="title">우리아이</h2>
    <h2 id="title2">습관 조각</h2>
    <div class="img_div1">
      <img src="img/gray/1.png" id="img_1" class="img_gray">
      <img src="img/gray/2.png" id="img_2" class="img_gray">
      <img src="img/gray/3.png" id="img_3" class="img_gray">
      <img src="img/gray/4.png" id="img_4" class="img_gray">
      <img src="img/gray/5.png" id="img_5" class="img_gray">
    </div>
    <h2 id="title3">현재시각</h2>
    <h2 id="title4">13:00</h2>
    <div class="hashtag">
      <figure id="title_fi">
        <figcaption>#다른 습관 달성율 보기</figcaption>
      </figure>
      <figure>
        <figcaption>#양말신기</figcaption>
      </figure>
      <figure>
        <figcaption>#숙제</figcaption>
      </figure>
      <figure id="fi">
        <figcaption>#양치질</figcaption>
      </figure>
      <figure id="fi2">
        <figcaption>#손닦기</figcaption>
      </figure>
    </div>
  </div>

</body>

</html>