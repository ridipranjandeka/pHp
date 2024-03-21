<html>
<head>
<title>Fibonacci Series in PHP</title>
</head>
<body>
<form method = "post">
     Prints upto 10th digit:<br>
</form>


<?php
$max = 0;
echo $i = 0;
echo ",   ";
echo $j = 1;
echo "    ";
$result = 0;
while ($max < 10)
{
$result  = $i + $j;
$i =$j;
$j = $result;
$max = $max + 1;
echo $result;
echo ",   ";
}
?>
</body>
</html>