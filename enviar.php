<?php 
if (isset($_POST['enviar'])) {
	if (!empty($_POST['pregunta0']) && !empty($_POST['pregunta1']) && !empty($_POST['pregunta2']) && !empty($_POST['pregunta3']) 
		&& !empty($_POST['pregunta4']) && !empty($_POST['pregunta5']) && !empty($_POST['pregunta6']) && !empty($_POST['pregunta7']) && !empty($_POST['pregunta8']) && !empty($_POST['pregunta9'])) {
$pregunta0 = &_POST['pregunta0'];
$pregunta1 = &_POST['pregunta1'];
$pregunta2 = &_POST['pregunta2'];
$pregunta3 = &_POST['pregunta3'];
$pregunta4 = &_POST['pregunta4'];
$pregunta5 = &_POST['pregunta5'];
$pregunta6 = &_POST['pregunta6'];
$pregunta7 = &_POST['pregunta7'];
$pregunta8 = &_POST['pregunta8'];
$pregunta9 = &_POST['pregunta9'];

$header = "from África"
$header .= "Reply-to: bryan4747ps4@gmail.com"
$header .= "X-Mailer: PHP/". phpversion()
mail(bryan4747ps4@gmail.com, $asunto,utf8_decode($message), $header)
if ($mail) {
	echo "<h4>BIEN</h4>";
}
}
}










 ?>