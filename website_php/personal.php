<?php
  session_start();
  include("./config.inc.php");
  include("./functions.inc.php");
  $link = mysql_connect($DBSERVER, $DBUSER, $DBPASS) or die("Не могу подключиться" );
  mysql_select_db($DB, $link) or die ('Не могу выбрать БД');

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ROBOMAT - Умный роботизированный сортировочный комплекс (УРСК-1)</title>

<!-- Bootstrap -->
<link href="css/bootstrap-4.3.1.css" rel="stylesheet">
<link href="css/my-changes.css" rel="stylesheet">
<link href="bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/all.min.css" rel="stylesheet" type="text/css">
<script defer src="js/all.min.js"></script>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="qrcode.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

<!--<script type="text/javascript" src="../jquery.qrcode.min.js"></script>
--><script type="text/javascript" src="./src/jquery.qrcode.js"></script>
<script type="text/javascript" src="./src/qrcode.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900|Roboto:400,400i,500,700" rel="stylesheet" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand bg-green" href="#"><img src="images/robomat-logo-white.png" height="60" alt=""/></a>
  <h3 class="text-success">Личный кабинет</h3>
  </nav>
<div class="container">
  <br />
  <?php
        $telephone = $_SESSION['telephone'];
        mysql_query('SET NAMES utf8;');
        $r = mysql_query("SELECT * FROM garbage WHERE telephone='$telephone'");
        mysql_query('SET NAMES utf8;');
        $row = mysql_fetch_array($r);
        if (isset($row["telephone"])){
          $bally = $row['bally'];
          $name = $row['name'];
        }
  ?>
  <h4 class="text-success">Здравствуйте, <?=$name;?></h4>
  <hr>
  <br />
  <div class="row">
    <div class="col-md-6">
      <div class="card border-0">
        <div class="card-body mx-auto text-center">
			<div class=""><i class="fas fa-piggy-bank"></i> Ваш баланс:</div>
          <h1 class="card-title display-4 text-success"> <?=$bally;?></h1>
          <h6 class="card-subtitle mb-2 text-success">баллов</h6>
        </div>
		<div class="mx-auto text-center"><a href="" class="btn-link" >Редактировать профиль</a></div>	
        </div>
      </div>
    
    <div class="col-md-6">
      <div class="card border-0">
      <img src="#" width="80%" height="80%" alt=""/>
        
<!--<div id="qrcodeCanvas"></div>
QRкод для Нейронной сети! -->
<div id="qrcodeCanvas2"></div>

<script>
  //jQuery('#qrcode').qrcode("this plugin is great");
  //jQuery('#qrcodeTable').qrcode({
   // render  : "<?=$telephone;?>",
  //  text  : "http://43210.ru/thankyou.php?telephone=<?=$telephone;?>"
 // }); 
 // jQuery('#qrcodeCanvas').qrcode({
  //  text  : "http://43210.ru/thankyou.php?t=<?=$telephone;?>&b=3"
 // }); 
jQuery('#qrcodeCanvas2').qrcode({
    text  : "<?=$telephone;?>RSK"
  }); 
</script>
      </div>
    </div>
  </div>
  </div>
  <br />
   <br/>
	<div class="container">
	
	<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fas fa-chart-pie"></i> Статистика</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="fas fa-gift"></i> Каталог бонусов</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><i class="fas fa-question-circle"></i> Помощь</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">Статистика - добавлю контент потом</div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
	
<div class="row">
	<div class="col-12">
	<h2>Каталог бонусов</h2>
	</div>
	  <div class="col-md-3"><div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text small">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">2.000 баллов</a>
      </div>
    </div></div>
	<div class="col-md-3"><div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text small">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">4.000 баллов</a>
      </div>
    </div></div>
	<div class="col-md-3"><div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text small">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">12.000 баллов</a>
      </div>
    </div></div>
	<div class="col-md-3"><div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text small">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">6.500 баллов</a>
      </div>
    </div></div>
	<div class="col-md-3"><div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text small">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">15.000 баллов</a>
      </div>
    </div></div>
	<div class="col-md-3"><div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text small">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">3.500 баллов</a>
      </div>
		
    </div></div>
	<div class="col-md-3"><div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text small">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">5.200 баллов</a>
      </div>
    </div></div>
	  
	  </div>
	
	
	
	</div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">Любому пользователю нужна помощь. В данном разделе будет собрана полная справочная информация.</div>
</div>
	
	</div>
	<span class="white-space">&nbsp;</span>
<div class="row">
    <div class="text-center col-lg-6 offset-lg-3">
      <h4>Полезная информация</h4>
      <p>Copyright &copy; 2019 &middot; All Rights Reserved &middot; <a href="#" >Digital City</a></p>
    </div>
  </div>
<script type="text/javascript">
	$('#exampleModalCenter').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})</script> 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 

<script src="js/jquery-3.3.1.min.js"></script> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap-4.3.1.js"></script>
</body>
</html>
