<html>
<body>
<form method=post action=>

Press 1 for Business<br>
Press 2 for Coding<br>
Press 3 for Webdesign<br>
Press 4 for Music<br>
Press 5 for Photography<br><br>

Enter Choice : <input type=text name=str1><br>
<input type=submit name=submit value =Check>
</form>

<?php
if(isset($_POST['submit']))
{
$favourite_site = $_POST['str1'];
switch ($favourite_site) 
{
case '1':
echo "My favourite site is business.google.com!";
break;
case '2':
echo "My favourite site is business.google.com!";
break;
case '2':
echo "My favourite site is code.google.com!";
break;
case '3':
echo "My favourite site is webdesign.google.com!";
break;
case '4':
echo "My favourite site is music.google.com!";
break;
case '5':
echo "My favourite site is photography.google.com!";
break;
default:
echo "I like everything at google.com!";
}
}
?>
</body>  
</html>