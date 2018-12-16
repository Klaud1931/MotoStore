<!DOCTYPE html>
<html lang="">
<head>
<title>Мотоциклы - MotoStore</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>

<?php
  require_once "applic/fun.php";
  $newsm = getNewsm(3);
?>

<body id="top">
<div class="bgded" style="background-image:url('../images/demo/backgrounds/01.png');"> 
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <div id="logo" class="fl_left">
        <h1><a download href = "C:\xampp\htdocs\kpr\WindowsFormsApp18.rar">MotoStore</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="../index.php">Дом</a></li>
              <li><a href="motocikle.php">Мотоциклы</a></li> 
              <li><a href="kvadrocikle.php">Квадроциклы</a></li>
              <li><a href="motobyksir.php">Мотобуксировщики</a></li>
              <li><a href="lodki.php">Моторные лодки</a></li>    
        </ul>
      </nav>
    </header>
  </div>
</div>
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <div class="content three_quarter"> 
      <?php
      for ($i = 0; $i < count($newsm); $i++) {
       echo '<img src="img/motocikle/'.$newsm[$i]["id"].'.jpg">
       <h2>'.$newsm[$i]["title"].'</h2>
       <p>'.$newsm[$i]["text"].'</p>';
       if($i == 0)
           echo "<div class=\"clear\"></div>";
    }
      ?>


    </div>
    <div class="clear"></div>
  </main>
</div>
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <div class="one_third first">
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
      </ul>
    </div>
  </footer>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>