<!-- 
<!DOCTYPE html>
<ht lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<html>
    <body>
        <h1>MY FIREST PHP PAGE </h1>
        <?php
            echo "Hello, students! WELCOME TO PHP.";
            ?>
    </body>

</html> -->

<!--1-->
<?php
$length = 10;
$width = 5;

$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "Length = " $length  "<br>";
echo "Width = "  $width  "<br>";
echo "Area = "  $area  "<br>";
echo "Perimeter = " $perimeter;


<!--2-->

$amount = 1000;

$vat = $amount * 15 / 100;

echo "Amount = "  $amount  "<br>";
echo "VAT (15%) = " $vat;


<!--3-->

$number = 7;

$result = ($number % 2 == 0) ? "Even" : "Odd";

echo "$number is $result";



 <!--4-->

$a = 15;
$b = 30;
$c = 25;

if ($a >= $b && $a >= $c)
{
    echo $a = "Largest Number = ";
}
else if ($b >= $a && $b >= $c)
{
    echo $b ="Largest Number = ";
}
else
{
    echo $c ="Largest Number = ";
}


?>