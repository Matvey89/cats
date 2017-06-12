<?php 
if($_GET['id']){
	require_once ('config/config.php');
	$id=(int)$_GET['id'];
	$query="SELECT * FROM abouteser WHERE id=$id";
	$adr=mysqli_query($db_con, $query);
if (!adr){
	exit ('error');
}
if(mysqli_num_rows($adr)>0){
	$res=mysqli_fetch_array($adr);
	if (file_exists($res['picture'])){
		@unlink($res['picture']);
		$query="DELETE FROM id=$id";
		$adr=mysqli_query($db_con, $query);
		if(!adr){
			exit 'error';
		}
		header "location: index.php";
	}
}
}

