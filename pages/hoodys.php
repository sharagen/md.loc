<?
require '../db.php'; // подключаем скрипт
?>
<? require '../tmp/head.php' ?>

<div class="main">
    <div class="wrap">

        <div class="grid">
            <?

            $sql = "SELECT * FROM goods WHERE goodsID =" . $_GET["pag"]; ;
            
            $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($result)) {?>

            <div class="grid-item" id="p1" <?echo (' <id="p'); echo($row['id']); echo (' ">')?>


                <div class=" pname">
                    <br>
                    <h3>
                        <?echo($row['name']. "<br>")?>
                    </h3><br>
                </div>
                <br>
                <div class="pimage">
                    <img width="240" height="320" src=<?echo($row['img'])?> alt="">
                </div> <br>
                <div class="pcost">
                    <p>
                        <?echo($row['cost']."руб.". "<br>")?>
                    </p>
                </div> <br>
                <div class="pbutton">
                    <br>
                    <button class="buy"> <a href="../pages/product.php?=<?echo ($row['id'])?>"> купить </a></button><br><br>

                </div>
            </div>


            <? } 
   echo "$pag"?>
            ?>




















            <!--

            echo('<div class="grid-item" ');
   echo (' <id="p');
   echo($row['id']);
   echo (' ">');
                echo ('<div class="pname">');
                    echo (' <br>');
                    echo (" <h3>" );
                        echo($row['name']. "<br>");
                        echo "</h3><br>";
                    echo (' </div>');
                echo (' <br>');
                echo (' <div class="pimage">');
                    echo ('<img width="240" height="320" src="');
   echo($row['img']);
   echo (' ">');
                    echo (' </div> <br>');
                echo (' <div class="pcost">');
                    echo (' <p>' );
                        echo($row['cost']."руб.". "<br>");
                        echo ('</p>');
                    echo (' </div> <br>');
                echo ("<div class='pbutton'>
                    <br>
                    <button class='buy'> <a href='../pages/product.php'> купить </a></button><br><br>
                </div>");
                echo ('</div>');
        -->


        </div>
    </div>
    <div class="footer">
        <div class="wrap">
            sdswe
        </div>
    </div>

    </body>