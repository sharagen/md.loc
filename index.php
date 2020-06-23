<?
require 'db.php'; // подключаем скрипт
?>
<? require 'tmp/head.php' ?>
<div class="main">
  <div class="wrap">

    <div class="hh">
      <h1>Новинки</h1>
    </div>
    <br>
    <div class="grid">
      <?
        $sql = "SELECT * FROM goods WHERE new =1" ;
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
          <img width="240" height="320" src="pages/<?echo($row['img'])?>.png" alt="">
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

  </div>
  <br><br><br>

  <script src="http://md.loc/scripts/slider.js"></script>
  </body>
</div>
<br><br><br>
<? require 'tmp/footer.php';?>

</html>