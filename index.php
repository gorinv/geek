<? echo 'второй урок дз <br/>';
/////1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
/////если $a и $b положительные, вывести их разность;
///если $а и $b отрицательные, вывести их произведение;
///если $а и $b разных знаков, вывести их сумму;
///ноль можно считать положительным числом.
    echo '1) ';
         $a=-10;
         $b=25;
    

    if ($a >= 0 && $b >= 0) {
        echo $a-$b;
        echo '<br/>';
    }
        else if ($a<0 && $b<0) {
            echo $a*$b;
            echo '<br/>';
        }
        
        else {
           echo $a+$b;
            echo '<br/>';
        }
        
////2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.
        echo '2) ';
       
         $a=4;
         switch ($a) {
         case 0;
         echo '1 2 3 4 5 6 7 8 9 10 11 12 13 14 15';
          break; 
         case 1;
         echo '2 3 4 5 6 7 8 9 10 11 12 13 14 15';
          break; 
               case 2;
         echo '3 4 5 6 7 8 9 10 11 12 13 14 15';
          break; 
               case 3;
         echo '4 5 6 7 8 9 10 11 12 13 14 15';
          break; 
               case 4;
         echo '5 6 7 8 9 10 11 12 13 14 15';
          break; 
               case 5;
         echo '6 7 8 9 10 11 12 13 14 15';
          break; 
               case 6;
         echo '7 8 9 10 11 12 13 14 15';
          break; 
               case 7;
         echo '8 9 10 11 12 13 14 15';
          break; 
               case 8;
         echo '9 10 11 12 13 14 15';
          break; 
               case 9;
         echo '10 11 12 13 14 15';
          break; 
               case 10;
         echo '11 12 13 14 15';
          break; 
               case 11;
         echo '12 13 14 15';
          break; 
               case 12;
         echo '13 14 15';
          break; 
                case 13;
         echo '14 15';
          break;
                case 14;
         echo '15';
          break;
         }
/////3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.

    echo '<br/>3) ';   
      $x=99123;
      $y=1233;


    function summ ($x,$y) {
    return($x+$y);
}                 
    function diff ($x,$y) {
    return($x-$y);
}  
    function mult ($x,$y) {
    return($x*$y);
}  
    function degree ($x,$y) {
    return($x/$y);
}  
   

   $summ = summ($x,$y);
       echo 'сумма '.$x.' и '.$y.' равна '.$summ.'<br/>';
   $diff = diff($x,$y);
       echo 'разница '.$x.' и '.$y.' равна '.$diff.'<br/>';
                 
   $mult = mult($x,$y);
       echo 'произведение '.$x.' и '.$y.' равно '.$mult.'<br/>';
   $degree = degree($x,$y);
       echo 'деление '.$x.' и '.$y.' равно '.$degree.'<br/>';
                  
                 
                 /////4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).


echo '<br/>4) ';  


function mathOperation($x, $y, $operation) {
    
        switch ($operation)   { 
        case summ;
        return summ($x,$y); 
        break;
        case diff;
        return diff ($x,$y); 
        break;
        case mult;
        return mult ($x,$y); 
        break;
        case degree;
        return degree ($x,$y); 
        break;
         } 
}
    
$math = mathOperation($x,$y,diff);
echo $math;

/////5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.
echo '<br/>5) подвал внизу ';

 $year = date("Y");

/////6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.
echo '<br/>6) ';


function power($val, $pow) {
 if ($pow > 0) {
        return $val * power($val, $pow-1);
    } 
    
    else if ($pow < 0) {
        return $val * power(1/$val, -$pow);
    } 

    return 1;
   
    
}
    
echo power(10,-2);



/////7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
/////22 часа 15 минут
/////21 час 43 минуты 
echo '<br/>7) ';

$H=date(H);
$M=date(i); 

function chas($H) {
    $ch= $H % 10;
   if ($ch ==1) {
      return $chas='час ';
   }
    else if ($ch ==2 || $ch ==3 ||$ch ==4) {
       return $chas='часа ';
   }
    return $chas='часов ';
}
               
function minut($M) {
    $min=$M % 10;
    if ($min==1) {
        return $minut='минута';
    }
    
    else if ($min ==2 || $min ==3 ||$min ==4) {
       return $min='минуты';
   }
    return $min='минут';
}
    
$ch=chas($H);
$m=minut($M); 

echo 'Сейчас '.$H.$ch.$M.$m;      
           


        
       
?>
   
    <div class="footer"> Все права защищены &copy; <? echo $year ?> </div> 
    </body>

    </html>