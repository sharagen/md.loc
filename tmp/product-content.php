<?php
require_once '../db.php'; ?>
<div class="main">
    <div class="wrap">

        <div class="prod-item">
            <?
                $sql = "SELECT * FROM goods WHERE id =" . $_GET["id"]; 
                $result = mysqli_query($link, $sql);
                while ($row = mysqli_fetch_array($result)) {?>

            <p> <img class="img1" name="img" src="<?echo($row['img'])?>.png" alt="">
            </p>
            <br>
            <?php
            $idd = $_GET['id'];
            ?>

            <div id="text">
                <div class="ph"> <B>
                        <?echo($row['name'])?></B></div>

                <br><br>
                <?echo($row['desc'])?>
                <br><br><br>
                Цена:
                <? echo($row['cost'])?>руб.<br>
            </div>

            <div id="items" style="margin-left: 20px;">
                <form class="insert" action="" method="post">

                    <br>


                    <input hidden name="name1" value="<?echo($row['name'])?>"> </input>
                    <input hidden name="cost" value="<?echo($row['cost'])?>"> </input>
                    <input readonly class="cbutton" value="black" onclick="javascript:img.src='<?echo ($row['img']);?>.png'; document.getElementById('cl1').value = 'black'; " style=" background-color:black"></input>
                    <input readonly class="cbutton" value="white" onclick="javascript:img.src='<?echo ($row['img']);?>w.png'; document.getElementById('cl1').value = 'white';" style="background-color:white"></input>
                    <? } ?>
                    <input hidden id="cl1" name="color" value="black"> </input>

                    <br><br> <br>
                    <input class="sbutton" readonly value="S" id="sbutton"> </input>
                    <input class="sbutton" readonly onclick="document.getElementById('s1').value='m';" value="M" id="sbutton1"></input>
                    <input class="sbutton" readonly onclick="document.getElementById('s1').value='l';" value="L" id="sbutton2"></input>
                    <input class="sbutton" readonly onclick="document.getElementById('s1').value='x';" value="X" id="sbutton3"></input>
                    <input class="sbutton" readonly onclick="document.getElementById('s1').value='xl';" value="XL" id="sbutton4"></input>
                    <br><br> <br>
                    <input hidden id="s1" name="sise" value="s"> </input>
                    <div class=" pcount">
                        <input type="button" value="-" class="count1" onclick="if (document.getElementById('v1').value>1) document.getElementById('v1').value-=1 "></input>
                        <input class="in1" id="v1" name="quantity" min="1" value="1">
                        <input type="button" value="+" class="count2" onclick="if (document.getElementById('v1').value<=9)document.getElementById('v1').value ++ "></input>
                    </div>
                    <br><br> <br>
                    <button class="add-to-card"> <a href="../pages/order.php?<?echo('color=blaсk'.'&size=m'.'&id='.$idd );?>"> купить </a></button><br><br>
                    <br><br>
                </form>
            </div>
            <br><br>
            <br><br>
        </div>
        <br><br>
        <br><br>


        <div class="hh">
            <h1>Ркомендуемые товары</h1>
        </div>
        <br><br>
        <div class="grid">
            <?
        $sql = "SELECT * FROM goods WHERE rec =1" ;
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($result)) {?>

            <div class="grid-item" <? echo (' id="p'); echo($row['id'])?>">
                <div class=" pname">
                    <br>
                    <h3>
                        <?echo($row['name']. "<br>")?>
                    </h3><br>
                </div>
                <br>
                <div class="pimage">
                    <img width="240" height="320" src="<?echo($row['img'])?>.png" alt="">
                </div> <br>
                <div class="pcost">
                    <p>
                        <?echo($row['cost']."руб.". "<br>")?>
                    </p>
                </div> <br>
                <div class="pbutton">
                    <br>
                    <button class="buy"> <a href="../pages/product.php?id=<?echo ($row['id'])?>"> купить </a></button><br><br>

                </div>
            </div>


            <? } ?>

        </div>




        <br><br><br>