<?php
session_start();
mysql_connect("localhost","root","1234");
mysql_select_db("PanupolOP");
$strSQL = "SELECT * FROM login_tb WHERE user_id = '".mysql_real_escape_string($_POST['txtUsername'])."' 
and Password = '".mysql_real_escape_string($_POST['txtPassword'])."'";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
if(!$objResult)
{
echo "Username and Password Incorrect!";
}
else
{
$_SESSION["user_id"] = $objResult["user_id"];
$_SESSION["Status"] = $objResult["Status"];

session_write_close();

if($objResult["Status"] == "ADMIN")
{
header("location:addproduct.php");
}
else
{
header("location:index.php");
}
}
mysql_close();
?>