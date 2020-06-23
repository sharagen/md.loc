<?
require '../db.php'; // подключаем скрипт
?>
<? require '../tmp/head.php' ?>

<div class="main">
    <div class="wrap">
        <div class="prod-item">
            <form class="insert" action="" method="post" style="margin-left: 35px;">
                <br>
                <p> Отзывы и пожелания:</><br> <textarea rows="10" cols="100" name="feedback"></textarea> <br><br>
                    <p> Введите вашу почту</p><br> <input class="ini" id="email" placeholder="example@gmail.com" type="text" name="email"> <br><br>

                    <input type="submit" value="Отправить" class="ini"><br><br>
                    <br><br>
            </form>

            <?
$email = $_POST['email'];
$feedback = $_POST['feedback'];

$to  = "midnightshop13@gmail.com" ; 
$subject = "Отзыв клиента"; 
$message = "$feedback";
$headers  = "Content-type: text/html; \r\n"; 
$headers .= "From: От кого письмо $email>\r\n"; 
$headers .= "Reply-To: $email\r\n"; 
mail($to, $subject, $message, $headers ); 
?>
        </div><br><br>
        </body> <br><br><br>
    </div>
</div>
<? require '../tmp/footer.php';?>
</footer>