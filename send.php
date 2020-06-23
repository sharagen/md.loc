<?
$uname = $_POST['uname'];
$email = $_POST['email'];
$pname = $_POST['pname'];
$cost = $_POST['cost'];
$uname = substr(htmlspecialchars(trim($_POST['uname'])), 0, 1000);
$collor=$_GET['color'];
$size=$_GET['size'];
$tel=$_POST['tel'];

$pay = $_POST['pay'];
$cardn = $_POST['cardn'];
$cardd = $_POST['cardd'];
$cardc = $_POST['cardc'];
$cost = $_POST['cost'];


$to  = "$email" ; 
$subject = "Интеренет магазин Midnight"; 
$message = "Здравствуйте: $uname<br /><br />
            Вы преобрели: $pname<br /><br /> 
            цвет: $collor<br /><br /> 
            Размер: $size<br /><br /> 
            В течении дня вам позвонят на ваш номер телефона: $tel для подтверждения заказа<br /><br />
      Способ оплаты: $pay  <br /><br />
      Номер карты: $cardn <br /><br />
      Срок действия: $cardd <br /><br />
      CVV2/CVC2: $cardc <br /><br />
      сумма заказа состовляет: $cost <br /><br />
            ";
$headers  = "Content-type: text/html; \r\n"; 
$headers .= "From: От кого письмо <midnightshop13@gmail.com>\r\n"; 
$headers .= "Reply-To: midnightshop13@gmail.com\r\n"; 
mail($to, $subject, $message, $headers ); 