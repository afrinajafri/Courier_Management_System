<?php
require ('db_connection.php');

 if (isset($_POST['submit'])){
 $username=mysqli_escape_string($mysqli, $_POST['uname']);
 $password=mysqli_escape_string($mysqli, $_POST['pass']);

 if (!$_POST['uname'] | !$_POST['pass'])
 {
 echo ("<SCRIPT LANGUAGE='JavaScript'>
 window.alert('You did not complete all of the required fields')
 window.location.href='htmlogin.html'
 </SCRIPT>");
 exit();
 }

 $sql = $mysqli->query("SELECT * FROM `login_users` WHERE `username` = '$username' AND
`password` = '$password'");
 if(mysqli_num_rows($sql) > 0)
 {
echo ("<SCRIPT LANGUAGE='JavaScript'>
 window.alert('Login Succesfully!.')
 window.location.href='http://localhost/CMS_courier/USER/HOME/home.html'
 </SCRIPT>");
 exit();
 }
 Else {
 echo ("<SCRIPT LANGUAGE='JavaScript'>
 window.alert('Wrong username password combination.Please re-enter.')
 window.location.href='index.html'
 </SCRIPT>");
 exit();
 }
 }
 Else {
 }
 ?>