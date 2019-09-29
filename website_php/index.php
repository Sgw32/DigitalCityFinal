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
<nav class="navbar navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand bg-green" href="#"><img src="images/robomat-logo-white.png" height="60" alt=""/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item"> <a class="nav-link" href="#problem">Проблема</a> </li>
      <li class="nav-item"> <a class="nav-link" href="#solution">Решение</a> </li>
      <li class="nav-item"> <a class="nav-link" href="map.php">Пункты приема</a> </li>
      <li class="nav-item"> <a class="nav-link" href="#partner">Партнеры</a> </li>
    </ul>
  </div>
  <div class="align-content-end margin-right-2"> <a href="" data-toggle="modal" data-target="#exampleModal"><span style="font-size: 1.33em; color: #62CC7B;"><i class="fas fa-user"></i></span></a></div>
</nav>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <h1 class="display-4 hero-h1">Сортировка мусора - это Просто!</h1>
        <p class="lead">Умная сортировка мусора уже сегодня</p>
        <p>&nbsp;</p>
        <p>Введите адрес, чтобы найти ближайший пункт автоматов раздельного сбора мусора или другие точки приема отходов.</p>
        <form action="map.php">
          <div class="form-row">
            <div class="col-10">
              <input type="text" class="form-control" placeholder="Введите свой адрес">
            </div>
            <div class="col-2">
              <button class="btn btn-success" type="submit">Найти</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-6"><img src="images/trash-02.png" width="" height="360" alt=""/> </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row text-center">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><img src="images/robomat-logo-black.png" width="" height="48" alt=""/></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item"> <a class="nav-link active bg-success text-white" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Вход</a> </li>
                <li class="nav-item">&nbsp;</li>
                <li class="nav-item"> <a class="nav-link bg-success text-white" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Регистрация</a> </li>
              </ul>
            </div>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"> 
                <!-- Sign In Form-->
                
                <form action="auth.php" method="post">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend"> <span class="input-group-text" id="basic-addon3"><i class="fas fa-phone-alt"></i></span> </div>
                    <input type="text" class="form-control" placeholder="Ваш телефон без +7" aria-label="PhoneNumber" aria-describedby="basic-addon3" name="telephone">
                  </div>
                  <button type="submit" class="btn btn-primary">Войти</button>
                </form>
              </div>
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"> 
                <!-- Sign Up Form-->
                
                <form action="reg.php" method="post">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend"> <span class="input-group-text" id="basic-addon1"><i class="fas fa-user-circle"></i></span> </div>
                    <input type="text" class="form-control" placeholder="Фамилия и Имя" aria-label="Username" aria-describedby="basic-addon1" name="name">
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend"> <span class="input-group-text" id="basic-addon2"><i class="fas fa-phone-alt"></i></span> </div>
                    <input type="text" class="form-control" placeholder="Ваш телефон без +7" aria-label="PhoneNumber" aria-describedby="basic-addon2" name="telephone">
                  </div>
                  <input type="submit" class="btn btn-primary" name="do"><!--!Подтвердить</button>-->
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <h1 class="text-success">Уже участвуют в проекте</h1>
  <hr>
  <br />
  <div class="row">
    <div class="col-md-4">
      <div class="card border-0 text-center">
        <div class="card-body mx-auto"> <span style="font-size: 3em; color: #62CC7B;"><i class="fas fa-city"></i></span>
          <h1 class="card-title display-4 text-success">36</h1>
          <h6 class="card-subtitle mb-2 text-success">городов</h6>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card border-0 text-center">
        <div class="card-body mx-auto"> <span style="font-size: 3em; color: #62CC7B;"><i class="fas fa-home"></i></span>
          <h1 class="card-title display-4 text-success">15 960</h1>
          <h6 class="card-subtitle mb-2 text-success">домов</h6>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card border-0 text-center">
        <div class="card-body mx-auto"> <span style="font-size: 3em; color: #62CC7B;"><i class="fas fa-users"></i></span>
          <h1 class="card-title display-4 text-success">7 635 790</h1>
          <h6 class="card-subtitle mb-2 text-success">человек</h6>
        </div>
      </div>
    </div>
  </div>
  <br />
  <div class="mx-auto text-center"><a href="" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal">Присоединиться</a></div>
  <br/>
  <br/>
  <div id="problem"></div>
  <h1 class="text-success">Проблема</h1>
  <hr>
  <div class="row align-items-center">
    <div class="col-md-6">
      <div>
        <p>Ежегодно в России производиться более 275 млн. м<sup>3</sup> мусора, что сопоставимо с 14 000 многоэтажными домами, где может проживать 2,5 млн. человек. Это суммарное население городов Казань и Нижний Новгород.</p>
        <p>Площадь мусорных полигонов в России занимает 4 млн. га, что сопоставимо площади Швейцарии. Это колоссальные цифры.</p>
        <span class="text-right"><a class="btn-link" href="">Узнать больше</a></span> </div>
    </div>
    <div class="col-md-6"><img src="images/trash-01.png" class="" height="300" alt=""/></div>
  </div>
	<div id="solution"></div>
	<h1 class="text-success">Решение</h1>
  <hr>
  <div class="row align-items-center">
    <div class="col-md-6"><img src="images/robomat-promo.png" width="512" height="360" alt=""/></div>
    <div class="col-md-6">
      <div>
		  <h4>Первый в России &ndash; Искусственный интеллект для мусора</h4>
        <p>УРСК "Робомат" - первый умный роботизированный сортировочный комплекс, на базе современных технологий: Облачные вычисления на основе искусственного интеллекта и машинного обучения.</p>
        <p>Удобство использования и бонусные программы для граждан - шаг вперед к решению экологических проблем.</p>
        <span class="text-right"><a class="btn-link" href="">Узнать больше</a></span> </div>
    </div>
  </div>
	<br />
  <div id="partner"></div>
	<h1 class="text-success">Партнеры</h1>
  <hr>
	<div class="row align-items-center text-center">
	<div class="col-md-4 col-sm-2"><img src="images/DC-logo-h.png" height="75" alt=""/></div>
		<div class="col-md-4 col-sm-2"><img src="images/RT-logo-h.png" height="75" alt=""/></div>
		<div class="col-md-4 col-sm-2"><img src="images/minprirody.jpg" height="140" alt=""/></div>
	
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
