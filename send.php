<?

$from = ""; // Почта от кого
$to = ""; // Почта кому
$subject = "Заявка с веб-сайта"; // Тема
$subject = '=?utf-8?b?'. base64_encode($subject) .'?=';
$headers = "Content-type: text/plain; charset=\"utf-8\"\r\n";
$headers .= "From: Название веб-сайта <". $from .">\r\n"; // От кого (имя)
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n";
$message = "";

if (isset($_POST['tel']))  {
    $message .= "Телефон: ".$_POST['tel']."\n";
}

if (isset($_POST['name']))  {
    $message .= "Имя: ".$_POST['name']."\n";
}

if (isset($_POST['email']))  {
    $message .= "E-mail: ".$_POST['email']."\n";
}

mail($to, $subject, $message, $headers, $from);

?>

