<?php
//phpinfo();
$db_host='localhost';
$db_user='root';
$db_pass='';
$db_name='cats';
$db_port='3306';
$db_con=mysqli_connect($db_host,$db_user,$db_pass,$db_name,$db_port);
if(!$db_con){
exit ('error');
}