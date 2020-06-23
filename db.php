<?
$link = mysqli_connect("localhost", "midDB", "mid123","middb");

if ($link == false){
     print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}   
 
if(isset($_POST['submit'])){
        MySQLi_Query(
            $link,
        "INSERT INTO 
                `orders`
        SET
        `id`= '".null."',
        `name`='".$_POST['name1']."' ,
        `cost`='".$_POST['cost']."' ,
        `collor`='".$_POST['color']."' ,
        `size`='".$_POST['size']."' ,
        `quantity`='".$_POST['quantity']."' , "

        );}?>