<? require 'tmp/head.php' ?>
<?
require 'db.php'; // подключаем скрипт
?>

<div class="main">
    <div class="wrap">
        <div class="desc">
            <?
        $sql = "SELECT * FROM goods WHERE id=1" ;
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($result)) {?>
            <div class="grid-itemc" <? echo (' id="p'); echo($row['id'])?>">


                <div class="name1">
                    <?echo($row['name']. "<br>")?>

                </div>
                <div class="block1" style="display: flex;">
                    <img width="240" height="320" src="pages/<?echo($row['img'])?>.png" alt="">
                    <div style="padding:20px;">
                        <p>
                            Цвет:
                            <?echo $_GET['color']?>
                        </p> <br>
                        <p>
                            Цена:
                            <?echo($row['cost']."руб.". "<br>")?>
                        </p> <br>
                        <p>Размер:
                            <?echo $_GET['size']?>
                        </p> <br>
                    </div>

                    <a href=""> <button class="buy1"> купить </button></a><br><br>


                </div>
            </div>

            <? } ?>
        </div>
    </div>
    <br><br><br><br><br><br>
    <? require 'tmp/footer.php';?>


    </body>

    </html>