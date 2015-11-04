<?php
$come = $_POST['marka'];

$db_name = "auto";
$db_password = "123456";
$db_user = "auto";
$db_location = "localhost";

$connection = mysql_connect($db_location,$db_name,$db_password);
if (!$connection) exit("Соезинение с базой данных установить невозможно");
mysql_select_db($db_name,$connection);
$query = 'SELECT model FROM auto WHERE marka = "'.$come.'"';

$resource = mysql_query($query);

$result = "";
for ($i = 0; $i < mysql_num_rows($resource); ++$i)
{
    $item = mysql_result($resource,$i,'model');
    $result .="<option value='".$item."'>$item</option>";
}

echo "$result";
?>