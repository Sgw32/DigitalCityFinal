
        <?php
  session_start();
  include("./config.inc.php");
  include("./functions.inc.php");
  $link = mysql_connect($DBSERVER, $DBUSER, $DBPASS) or die("Не могу подключиться" );
  mysql_select_db($DB, $link) or die ('Не могу выбрать БД');
?>



    <?php

   

    // данные отправлены
    if($_POST['do'] !='') {
    //Начинаем проверять входящие данные
    mysql_query('SET NAMES utf8;');
    //Создаем запрос к базе для проверки существования Пользователя
    $telephone = $_POST['telephone'];
    
    
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
      $query = "INSERT INTO garbage (telephone,  name)
                VALUES('$telephone',  '$name')";
                
               

      $r = mysql_query($query,$link) or die("Query failed : " . mysql_error());
      if($r) {

        
        //Отправляем сообщение
        if(sendmail($email1,$subject,$message,$headers) !== FALSE) {
    MessageSend(3, 'Регистрация завершена, Вы можете зайти используя свой логин и пароль!');

        }
      }

    } else { echo 'Регистрация невозможна: Введенные пароль пустой! <a href="registration.php"><< назад</a><>';}

    } else {
    MessageSend(1, 'Регистрация невозможна: Пользователь с таким именем уже существует!');}
    session_destroy();
echo 'Регистрация завершена, Вы можете зайти используя телефон';
echo '<meta http-equiv="refresh" content="1;URL=index.php" />';

    }
    ?>