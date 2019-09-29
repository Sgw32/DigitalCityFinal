<?php


function sendmail($mail, $subject, $message, $headers) {
	return !!mail($mail, $subject, $message, $headers);
}
function getMsg($p1, $p2)
{
	return '<div class="MessageBlock"><b>'.(['Ошибка', 'Подсказка', 'Информация'][$p1-1]).'</b>: '.$p2.'</div>';
}

function MessageSend($p1, $p2)
{
	$_SESSION['message'] = getMsg($p1, $p2);
	header('Location: '.$_SERVER['HTTP_REFERER']);
	exit();
}
function MessageSend2($p1, $p2)
{
	$_SESSION['message'] = getMsg($p1, $p2);
	header('Location: registration.php');
	exit();
}
function MessageSend3($p1, $p2)
{
	MessageSend2($p1, $p2);
}
function MessageSend4($p1, $p2) {
	$_SESSION['message'] = getMsg($p1, $p2);
	header('Location: index.php');
	exit();
}


function MessageShow() {
	if ($_SESSION['message'])
		$Message = $_SESSION['message'];
	echo $Message;
	$_SESSION['message'] = array();
}



function FormChars ($p1) {
return nl2br(htmlspecialchars(trim($p1), ENT_QUOTES), false);
}


function GenPass ($p1, $p2) {
return md5('MRSHIFT'.md5('321'.$p1.'123').md5('678'.$p2.'890'));
}

function go( $url ) {
	exit('{ "go" : "'.$url.'"}');
}
?>
