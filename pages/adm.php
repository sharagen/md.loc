<?
require '../db.php'; // подключаем скрипт
?>
<? require '../tmp/head.php' ?>

<div class="main">
    <div class="wrap">
        <div class="prod-item">
            <form class="insert" action="" method="post" style="margin-left: 35px;">
                <br>
                <p>Название:</p><br> <input type="text" name="name"> <br><br>
                <p> Описание:</p><br> <textarea rows="10" cols="45" name="desc"></textarea> <br><br>
                <p> Стоимость:</p><br> <input type="text" name="cost"> <br><br>
                <p> Изображение:</p><br> <input type="text" name="img"> <br><br>
                <p> Категория:</p><br> <input type="text" name="goodsID"> <br><br>
                <p> Новинка:</p><br> <input type="text" name="new" value="0"> <br><br>
                <p> рекомендация :</p><br> <input type="text" value="0" name="rec"><br><br>

                <input type="submit" name="submit" value="добавить">
                <br><br>

            </form>
            <div class="adesc">
                <p> Длина названия не должна превышать 40 символов </p><br>
                <p>в поле Изображение указываеться ссылка</p><br>
                <p>В поле Категория ставиться число от 1 до 5 в зависимости от категории </p><br>
                <p> 1 - футболки</p><br>
                <p> 2 - толстовки</p><br>
                <p> 3 - свитшоты</p><br>
                <p> 4 - рубашки</p><br>
                <p> 5 - рюкзаки</p><br>
            </div>

        </div>
    </div><br><br>
    </body> <br><br><br>
</div>
</div>
<? require '../tmp/footer.php';?>
</footer>