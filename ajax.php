<?php
	$id=(int)$_POST['id'];
	require_once('config/config.php');
	$query="SELECT * FROM gallerys WHERE id=$id";
	$adr=mysqli_query($db_con,$query);
		if(!$adr){
			exit ($err);
		}
		$result=mysqli_fetch_array($adr);
			
			echo "<img src=".$result['picture'].">";
?>