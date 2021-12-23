<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
<body>
    <?php
    if(isset($_POST['button'])){
         //1 задание. Номер максимального по модулю элемента массива
         $n = $_POST['x'];
         $masseffect = explode(" ",$n);
         $max = 0;
         for ($i = 0; $i < count($masseffect); $i++){
             if(abs($masseffect[$i])>(abs($masseffect[$max]))){
                 $max = $i;
             }
         }
         echo("Индекс максимального по модулю элемента массива - " . $max . "<br>");
         //2 часть. Сумма элементов массива, расположенных после первого положительного элемента
         $plus = false;
         $sum = 0;
         for($i = 0;$i<count($masseffect);$i++){
             if($plus == true){
                 $sum+= $masseffect[$i];
             }
             else{
                 if($masseffect[$i]>0)
                 $plus = true;
             }
         }
         echo("Сумма элементов расположенных ПОСЛЕ первого положительного элемента - " . $sum . "<br>");
         //3 часть. Преобразовать массив таким образом, чтобы сначала располагались все элементы, целая часть которых
         //лежит в интервале [a,b], а потом - все остальные
         $a = $_POST['up'];
         $b = $_POST['down'];
         $z=0;
         $arr = [];
         $sort = [];
         print_r($masseffect);
         foreach($masseffect as $i){
             if($i <= $a && $i >= $b){
                 $sort[$z] = $i;
                 $z++;
             }
             else{
                 $arr[$i-$z] = $i;
             }
         }
         $masseffect = array_merge($sort,$arr);
         echo "<br>";
         print_r($masseffect);
        }
    ?>
<form method = "POST">
	<p>Введите значения массивов через пробел</p>
	<p><input type ="text" name="x"></p>
    <p>Введите верхнюю границу диапазона</p>
	<p><input type ="text" name="up"></p>
    <p>Введите нижнюю границу диапазона</p>
	<p><input type ="text" name="down"></p>
	<p><input type="submit" name="button"></p>
</form>
</body>
</html>