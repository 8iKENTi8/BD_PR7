<?php
$name=filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
$lname=filter_var(trim($_POST['lname']),FILTER_SANITIZE_STRING);
$tel=filter_var(trim($_POST['tel']),FILTER_SANITIZE_STRING);
$ip=$_SERVER['REMOTE_ADDR'];
$str=$name." ".$lname." ".$tel." ".$ip;
$filename = 'somefile.txt';

$file=fopen("a.txt","a+");
fwrite($file,$str."\r\n");
fclose($file);

echo "Данные отправлены";
?>

<!-- <?php
$name=filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);

echo $login;
if(mb_strlen($name)<5 || mb_strlen($name)>90){
  echo "Недопустимая длина";
  exit();
} else {
  echo $name," спасибо, ваша заявка принята!";
}
?> -->
