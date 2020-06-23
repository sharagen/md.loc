<? require '../tmp/head.php' ?>
<?
require '../db.php'; // подключаем скрипт
?>
<?
require '../send.php'; // подключаем скрипт
?>
<!-- библиотека jQuery -->
<script type="text/javascript" src="../scripts/jquery.js"></script>
<script type="text/javascript" src="../scripts/jquery.maskedinput-master/src/jquery.maskedinput.js"></script>
<div class="main">
    <div class="wrap">
        <div class="prod-item">
            <?
        $sql = "SELECT * FROM goods WHERE id=". $_GET["id"] ;
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($result)) {?>
            <div class="name1" style="margin:20px">
                <?echo($row['name']. "<br>")?>
                <?echo $_GET['color'] ?>
                <?echo $_GET['size'] ?><br><img width="240" height="320" src="<?echo($row['img'])?>.png" alt="">
            </div>
            <form class="insert" action="" method="post">
                <div class="pdiv">
                    <div class="form2">
                        <br>
                        <p>Адресс электронной почты:</p><br> <input class="ini" id="email" placeholder="example@gmail.com" type="text" name="email"> <br><br>
                        <p>Номер телефона:</p><br> <input class="ini" id="phone" placeholder="+7 (___) ___-____" type="text" name="tel"> <br><br>
                        </script>
                        <p>Город</p><br> <input class="ini" type="text" placeholder="Москва" name="city"> <br><br>
                        <p>Адресс доставки:</p><br> <input class="ini" type="text" id="adres" placeholder="улица дом квартира" name="adres"> <br><br>
                        <p>Индекс:</p><br> <input class="ini" type="text" id="ind" placeholder="101000" name="index"> <br><br>
                        <input hidden name="pname" value="<?echo($row['name'])?>"> </input>
                        <input hidden name="cost" value="<?echo($row['cost'])?>"> </input>
                        <p>Ваше имя</p><br> <input class="ini" type="text" name="uname"> <br><br><br><br>
                    </div>
                    <?}?>
                    <div class="form3">
                        <br>
                        <p>Выберете способ оплаты: </P><br>
                        <img src="../images/mc.png" alt=""><input type="radio" id="visa" name="pay" value="VisaMasterCard">
                        <img src="../images/mir.png" alt=""><input type="radio" id="visa" name="pay" value="МИР">
                        <img src="../images/visa.png" alt=""><input type="radio" id="visa" name="pay" value="Visa">
                        Наличные <img src="../images/cash.png" alt=""><input type="radio" id="visa" name="pay" value="Наличные"><br><br>
                        <input class="ini" type="text" id="cardn" placeholder="Номер карты  " name="cardn"> <br><br>
                        <input class="ini" type="text" id="cardd" placeholder="Срок действия" name="cardd"> <br><br>
                        <input class="ini" type="text" id="cardc" placeholder="CVV2/CVC2   " name="cardc"> <br><br>
                        * оставить пустым если выбран наличный расчёт
                        <br><br>
                        <input type="submit" value="Отправить" class="ini"><br><br>
                    </div>
                </div>
            </form>

            <div class="adesc">

            </div>

        </div>
    </div><br><br>

    <script type="text/javascript" src="../scripts/mask.js"></script>
    </body>
    <br><br><br>
</div>
</div>
<? require '../tmp/footer.php';?>
</footer>