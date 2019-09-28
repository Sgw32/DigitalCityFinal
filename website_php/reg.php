<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="img/fav.png" />
  <!-- Author Meta -->
  <meta name="author" content="colorlib" />
  <!-- Meta Description -->
  <meta name="description" content="" />
  <!-- Meta Keyword -->
  <meta name="keywords" content="" />
  <!-- meta character set -->
  <meta charset="UTF-8" />
  <!-- Site Title -->
  <title>Проект Digital City</title>

  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900|Roboto:400,400i,500,700" rel="stylesheet" />
  <!--
      CSS
      =============================================
    
  <link rel="stylesheet" href="css/linearicons.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/owl.carousel.css" />
  <link rel="stylesheet" href="css/nice-select.css">
  <link rel="stylesheet" href="css/hexagons.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css" />
  <link rel="stylesheet" href="css/main.css" />
</head>

<body>
  <!-- ================ Start Header Area ================= -->
  <header class="default-header">
    <nav class="navbar navbar-expand-lg  navbar-light">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <img src="img/logo2.png" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="lnr lnr-menu"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li><a href="vhod.php">Вход</a></li>
            <li><a href="reg.php">Регистрация</a></li>
            <!--<li><a href="courses.html">Courses</a></li>
            <!-- Dropdown -->
            <!--<li class="dropdown">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                Pages
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="elements.html">Elements</a>
                <a class="dropdown-item" href="course-details.html">Course Details</a>
              </div>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                Blog
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="blog-home.html">Blog Home</a>
                <a class="dropdown-item" href="blog-single.html">Blog Details</a>
              </div>
            </li>
            <li><a href="contacts.html">Contacts</a></li>

            <li>
              <button class="search">
                <span class="lnr lnr-magnifier" id="search"></span>
              </button>
            </li>-->
          </ul>
        </div>
      </div>
    </nav>
   <!-- <div class="search-input" id="search-input-box">
      <div class="container">
        <form class="d-flex justify-content-between">
          <input type="text" class="form-control" id="search-input" placeholder="Search Here" />
          <button type="submit" class="btn"></button>
          <span class="lnr lnr-cross" id="close-search" title="Close Search"></span>
        </form>
      </div>
    </div> -->
  </header>
  <!-- ================ End Header Area ================= -->

  <!-- ================ start banner Area ================= 
  <section class="home-banner-area">
    <div class="container">
      <div class="row justify-content-center fullscreen align-items-center">
        <div class="col-lg-5 col-md-8 home-banner-left">
          <h1 class="text-white">
            Построй свою <br />
            траекторию
          </h1>
          <p class="mx-auto text-white  mt-20 mb-40">
            Построение инд. траектории учащегося от начальной школы до ВУЗа, включающей развитие его потенциала, навыков и компетенций с учетом его возможностей и стремлений
          </p>
        </div>
        <div class="offset-lg-2 col-lg-5 col-md-12 home-banner-right">
          <img class="img-fluid" src="img/header-img.png" alt="" />
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End banner Area ================= -->

  <!-- ================ Start Feature Area ================= -->
  <section class="feature-area">
    <div class="container-fluid">
      <div class="feature-inner row">
        <?php
  session_start();
  include("./config.inc.php");
  include("./functions.inc.php");
  $link = mysql_connect($DBSERVER, $DBUSER, $DBPASS) or die("Не могу подключиться" );
  mysql_select_db($DB, $link) or die ('Не могу выбрать БД');
?>

<?php MessageShow();?>
      <?php

        function generate_password($number)
          {
          $arr = array('a','b','c','d','e','f',
                 'g','h','i','j','k','l',
                 'm','n','o','p','r','s',
                 't','u','v','x','y','z',
                 'A','B','C','D','E','F',
                 'G','H','I','J','K','L',
                 'M','N','O','P','R','S',
                 'T','U','V','X','Y','Z',
                 '1','2','3','4','5','6',
                 '7','8','9','0','.',',',
                 '(',')','[',']','!','?',
                 '&','^','%','@','*','$',
                 '<','>','/','|','+','-',
                 '{','}','`','~');
          // Генерируем пароль
          $pass = "";
          for($i = 0; $i < $number; $i++)
          {
            // Вычисляем случайный индекс массива
            $index = rand(0, count($arr) - 1);
            $pass .= $arr[$index];
          }
          return $pass;
          }
        $pass1 = generate_password(8);

      if(( !$_POST['do'] OR $_POST['do'] =='') AND $_GET['activation'] == '' ) {

      ?>
      <form name="registerform" action="reg.php" method="post">
      <h2 align="center"><br />Заполните небольшую форму для начала работы</h2>
      <input type="text" name="name" placeholder="Имя" class="inputreg" required="required" ><br /><br />
      <input type="text" name="s_name" placeholder="Фамилия" class="inputreg" required="required" ><br /><br />
      <input type="text" name="sur_name" placeholder="Отчество" class="inputreg"><br /><br />
      <input type="text" name="telephone" placeholder="Телефон без +7" class="inputreg" required="required" ><br /><br />
      <!--<input type="email" name="email1" placeholder="Email" class="inputreg" required="required" ><br /><br />
      <input name='pass' type="password" placeholder="Пароль"class="inputreg" required="required"><br /> -->
      <br />
      <font color=#f00 size=-3> !Все поля являются обязательными для заполнения</font><br /><br />
      <input type="submit" name="do" value="Регистрация" class="button"/>


       </form>

    <?php

    }

    // данные отправлены
    if($_POST['do'] !='') {
    //Начинаем проверять входящие данные
    mysql_query('SET NAMES utf8;');
    //Создаем запрос к базе для проверки существования Пользователя
    $telephone = $_POST['telephone'];
    $s_name = $_POST['s_name'];
    $sur_name = $_POST['sur_name'];
    mysql_query("SELECT * FROM garbage WHERE telephone='".strtolower($telephone)."'");

    //Проверка результата запроса
    if(mysql_affected_rows()==0) {
    //Проверка ввведенных паролей

    if( $_POST['telephone'] !='' ){
      //Осуществляем регистарацию
      $uniq_id = md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT'].mktime());
      //$pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
      //$pass1 = $_POST['pass'];
      $name= FormChars($_POST['name']);
      if (!$_POST['telephone'] or !$_POST['name']) {
        if (!$_POST['name']) {
          MessageSend(1, 'Не заполнено поле Имя');
        }
        if (!$_POST['telephone']) {
          MessageSend(1, 'Не заполнено поле Телефон');
        }


      }

    //if(!empty($_POST['email1']))
    //{
    // if(preg_match("|^[-0-9a-z_\.]+@[-0-9a-z_^\.]+\.[a-z]{2,6}$|i", $_POST['email1']))
    // {
    //   $email1= FormChars($_POST['email1']);
    // }
    // else
    // {
     //   MessageSend(1, 'Некорректный email. Правильный вид Yourname@domain.com');
    // }
   // }


    //Создаем запрос для записи данных в БД
      $query = "INSERT INTO garbage (telephone,  name, s_name, sur_name)
                VALUES('$telephone',  '$name', '$s_name', '$sur_name')";
                
               

      $r = mysql_query($query,$link) or die("Query failed : " . mysql_error());
      if($r) {

        // Для отправки e-mail в виде HTML устанавливаем необходимый mime-тип и кодировку
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        // Откуда пришло
        $headers .= 'From: Администратор '."\r\n";
        //Здесь укажите электронный адрес, куда будут уходить сообщения
        $subject = "Подтверждение регистрaции ";
    $message .= '<b>Добро пожаловать на сайт Альфа-тестирования !</b><br><br>Мы благодарим Вас за регистрацию. <br><br>
    Ваша регистрация прошла успешно!<br><br>
    Пользователь:'.$telephone.'<br>
    Пароль не требуется, авторизация по номеру телефона


    ';
        
        //Отправляем сообщение
        if(sendmail($email1,$subject,$message,$headers) !== FALSE) {
    MessageSend(3, 'Регистрация завершена, Вы можете зайти используя свой логин и пароль!');

        }
      }

    } else { echo 'Регистрация невозможна: Введенные пароль пустой! <a href="registration.php"><< назад</a><>';}

    } else {
    MessageSend(1, 'Регистрация невозможна: Пользователь с таким именем уже существует!');}
    session_destroy();



    }

    //Фрагмент отвечающий за активацию аккаунта
    if($_GET['activation'] AND $_GET['activation']!='') {

    $uniq_id = $_GET['activation'];
    //Создаем запрос
    $r=@mysql_query("UPDATE oti_users SET stat=1 WHERE sessionid='".$uniq_id."' AND stat=0");
    if($r) {
    if( mysql_affected_rows() != 0) {
    MessageSend2(3, '<h2>Ваша учетная запись активирована.</h2><br/> Теперь вы можетевойти на сайт <a href="/">с главной страницы </a>используя данные указанные при регистрации');
    exit;
    } else { MessageSend2(1, 'Ошибка активации!'); }
    } else { MessageSend2(1, 'Ошибка активации!'); }
    }



    ?>


   
    </div>
  </section>
  <!-- ================ End Feature Area ================= -->

  <!-- ================ start footer Area ================= -->

  <!-- ================ End footer Area ================= -->

  <script src="js/vendor/jquery-2.2.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
    crossorigin="anonymous"></script>
  <script src="js/vendor/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/parallax.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/hexagons.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>