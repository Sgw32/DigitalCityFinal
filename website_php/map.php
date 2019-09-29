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
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand bg-green" href="index.php"><img src="images/robomat-logo-white.png" height="60" alt=""/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item"> <a class="nav-link" href="index.php#problem">Проблема</a> </li>
      <li class="nav-item"> <a class="nav-link" href="index.php#solution">Решение</a> </li>
      <li class="nav-item"> <a class="nav-link disabled">Пункты приема</a> </li>
      <li class="nav-item"> <a class="nav-link" href="index.php#partner">Партнеры</a> </li>
    </ul>
  </div>
  <div class="align-content-end margin-right-2"> <a href="" data-toggle="modal" data-target="#exampleModal"><span style="font-size: 1.33em; color: #62CC7B;"><i class="fas fa-user"></i></span></a></div>
</nav>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="row">
      <div class="col-12">
           <p>Введите адрес, чтобы найти ближайший пункт автоматов раздельного сбора мусора или другие точки приема отходов.</p>
        <form>
          <div class="form-row">
            <div class="col-10">
              <input type="text" class="form-control" placeholder="Введите свой адрес">
            </div>
            <div class="col-1">
              <button class="btn btn-success" type="submit">Найти</button>
            </div>
          </div>
        </form>
      </div>
    
    </div>
  </div>
</div>
<div class="container-fluid">
	
	<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A64a29c5232074eff2f85f1b4f525a4b00eb8696daf072eac19071e773a861cce&amp;width=100%25&amp;height=480&amp;lang=ru_RU&amp;scroll=true"></script>
 
	</div>
	
	<br />
  <hr>
  <div class="row">
    <div class="text-center col-lg-6 offset-lg-3">
      <h4>Полезная информация</h4>
      <p>Copyright &copy; 2019 &middot; All Rights Reserved &middot; <a href="#" >Digital City</a></p>
    </div>
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
