<?php
//mysql_connect("linuxdb2.rmutsv.ac.th","sriwichaigames","yZRyWuWTLMTydH72") or die(mysql_error());
mysql_connect("linuxdb2.rmutsv.ac.th","root",",miLiu;b=yp48") or die(mysql_error());
mysql_select_db("sriwichaigames14_system_21072566");
mysql_query("set names utf8");

$sql = "select * from `setting` ";
$res = mysql_query($sql);
$row = mysql_fetch_array($res);
$_SESSION['sgames_name'] = $row['name'];
$_SESSION['sgames_desire'] = $row['desire'];
$_SESSION['sgames_regis'] = $row['regis'];
$_SESSION['sgames_program'] = $row['program'];
$_SESSION['sgames_line'] = $row['line'];
$_SESSION['splayer_regis'] = $row['player_regis'];
$_SESSION['handler_regis'] = $row['handler_regis'];
?>