<?php
  session_start();
  include("./config.inc.php");
  include("./functions.inc.php");
  $link = mysql_connect($DBSERVER, $DBUSER, $DBPASS) or die("Не могу подключиться" );
  mysql_select_db($DB, $link) or die ('Не могу выбрать БД');

?>
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
  <script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="qrcode.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

<!--<script type="text/javascript" src="../jquery.qrcode.min.js"></script>
--><script type="text/javascript" src="./src/jquery.qrcode.js"></script>
<script type="text/javascript" src="./src/qrcode.js"></script>

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
  <script src="chartjs/Chart.bundle.js"></script>
  <script src="chartjs/utils.js"></script>
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
           <!-- <li><a href="lk.php">Мои навыки</a></li>
            <li><a href="trak.php">Траектория</a></li>
            <li><a href="edu.php">Обучение</a></li>
            <li><a href="project.php">Проекты</a></li>
            <li><a href="courses.html">Courses</a></li>
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
        $telephone = $_SESSION['telephone'];
        $bally = $_SESSION['bally'];
        $name = $_SESSION['name'];
        
        
        echo "<br>";
        echo "Здравствуйте ".$name." У вас ".$bally." баллов. (Потратить)";
   // mysql_query('SET NAMES utf8;');
 // $r8 = mysql_query("SELECT * FROM users WHERE email='$email'");
  //mysql_query('SET NAMES utf8;');
  //  $row8 = mysql_fetch_array($r8);
   // if ($row8['test'] == '2') {
   //   echo " Перед началом пользования сайтом Вам необходимо пройти <a href='test.php'> входное тестирование</a>!";
  //  }
 //   else {
      
       ?>

<!-- <p>Ваш персональный код для получения бонусов</p>
<div id="qrcodeTable"></div> -->
<p>Ваш персональный код для получения бонусов</p>
<div id="qrcodeCanvas"></div>

<script>
  //jQuery('#qrcode').qrcode("this plugin is great");
  jQuery('#qrcodeTable').qrcode({
    render  : "<?=$telephone;?>",
    text  : "http://43210.ru/thankyou.php?telephone=<?=$telephone;?>"
  }); 
  jQuery('#qrcodeCanvas').qrcode({
    text  : "http://43210.ru/thankyou.php?t=<?=$telephone;?>&b=3"
  }); 

</script>

<br><br>
Найти интеллектуальные контейнеры на карте
<br><br>

<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A64a29c5232074eff2f85f1b4f525a4b00eb8696daf072eac19071e773a861cce&amp;width=800&amp;height=480&amp;lang=ru_RU&amp;scroll=true"></script>


       <div style="width:40%">








		<canvas id="canvas"></canvas>
	</div>
	<!--<button id="randomizeData">Randomize Data</button>
	<button id="addDataset">Add Dataset</button>
	<button id="removeDataset">Remove Dataset</button>
	<button id="addData">Add Data</button>
	<button id="removeData">Remove Data</button> 
	<script>
		var randomScalingFactor = function() {
			return Math.round(Math.random() * 100);
		};

		var color = Chart.helpers.color;
		var config = {
			type: 'radar',
			data: {
				labels: ['Математика', ' ', 'География', ' ', ' ', 'Русский язык', ' '],
				datasets: [{
					label: 'Надпроффесиональные навыки',
					backgroundColor: color(window.chartColors.red).alpha(0.2).rgbString(),
					borderColor: window.chartColors.red,
					pointBackgroundColor: window.chartColors.red,
					data: [
						20,
						35,
						70,
						65,
						45,
						55,
						30
					]
				}, {
					label: 'Учебные навыки',
					backgroundColor: color(window.chartColors.blue).alpha(0.2).rgbString(),
					borderColor: window.chartColors.blue,
					pointBackgroundColor: window.chartColors.blue,
					data: [
						10,
						35,
						85,
						70,
						45,
						45,
						35
					]
				}]
			},
			options: {
				legend: {
					position: 'top',
				},
				title: {
					display: true,
					text: 'Индивидуальная карта навыков'
				},
				scale: {
					ticks: {
						beginAtZero: true
					}
				}
			}
		};

		window.onload = function() {
			window.myRadar = new Chart(document.getElementById('canvas'), config);
		};

		document.getElementById('randomizeData').addEventListener('click', function() {
			config.data.datasets.forEach(function(dataset) {
				dataset.data = dataset.data.map(function() {
					return randomScalingFactor();
				});
			});

			window.myRadar.update();
		});

		var colorNames = Object.keys(window.chartColors);
		document.getElementById('addDataset').addEventListener('click', function() {
			var colorName = colorNames[config.data.datasets.length % colorNames.length];
			var newColor = window.chartColors[colorName];

			var newDataset = {
				label: 'Dataset ' + config.data.datasets.length,
				borderColor: newColor,
				backgroundColor: color(newColor).alpha(0.2).rgbString(),
				pointBorderColor: newColor,
				data: [],
			};

			for (var index = 0; index < config.data.labels.length; ++index) {
				newDataset.data.push(randomScalingFactor());
			}

			config.data.datasets.push(newDataset);
			window.myRadar.update();
		});

		document.getElementById('addData').addEventListener('click', function() {
			if (config.data.datasets.length > 0) {
				config.data.labels.push('dataset #' + config.data.labels.length);

				config.data.datasets.forEach(function(dataset) {
					dataset.data.push(randomScalingFactor());
				});

				window.myRadar.update();
			}
		});

		document.getElementById('removeDataset').addEventListener('click', function() {
			config.data.datasets.splice(0, 1);
			window.myRadar.update();
		});

		document.getElementById('removeData').addEventListener('click', function() {
			config.data.labels.pop(); // remove the label first

			config.data.datasets.forEach(function(dataset) {
				dataset.data.pop();
			});

			window.myRadar.update();
		});
	</script> -->
  <?php
  //echo "Вы обладаете достаточно хорошими знаниями по географии. По математике и русскому языку советуем улучшить знания";
   // }
  // echo "</p><br/><br/></div>";
   // ?>

</div>
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