<?php
session_start();
include("./config.inc.php");
include("./functions.inc.php");
$link = mysql_connect($DBSERVER, $DBUSER, $DBPASS) or die("Не могу подключиться" );
mysql_select_db($DB, $link) or die ('Не могу выбрать БД');

if($_SESSION['uid'] =='') { $_SESSION['uid'] = mt_rand(100000,999999); }


if ($_POST['telephone'] !='')  {


	$telephone = $_POST['telephone'];
	mysql_query('SET NAMES utf8;');
	$r = mysql_query("SELECT * FROM garbage WHERE telephone='$telephone'");
	mysql_query('SET NAMES utf8;');
		$row = mysql_fetch_array($r);

		if (isset($row["telephone"])){

					$_SESSION['telephone'] = $row["telephone"];
					$_SESSION['name'] = $row["name"];
					$_SESSION['id'] = $row["id"];
					$_SESSION['bally'] = $row["bally"];
					

					
					echo '<meta http-equiv="refresh" content="1;URL=lk.php" />';
				}
				else {echo "Такого телефона нет";}

		}


?>
