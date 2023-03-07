<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="utf-8">
  <title>home</title>
  <link rel="stylesheet" href="setting.css" />
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
      <div id="sidebar_btn"></div>
    </label>
    <form class="form1" action="setting_input.php" method="POST">
      <h2 id="title7">번호 입력!</h2>
      <input type="text" id="todo" name="todo">
      <h2 id="title8">Todo</h2>
      <input type="text" id="time" name="time">
      <h2 id="title9">해야할 시간 입력!</h2>
      <input type="text" id="number" name="number" >
      <input type="#" id="deco">    
      <input type="submit" id="submit" value="등록">
    </form>
    <h2 id="title6">등록</h2>
    <div class="img_div1">
      <img src="img/gray/1.png" id="img_1" class="img_gray">
      <img src="img/gray/2.png" id="img_2" class="img_gray">
      <img src="img/gray/3.png" id="img_3" class="img_gray">
      <img src="img/gray/4.png" id="img_4" class="img_gray">
      <img src="img/gray/5.png" id="img_5" class="img_gray">
    </div>
  </div>

</body>

</html>