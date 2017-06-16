<?php $scripts=['/media/js/gallery.js'];
	require_once('templates/top.php');
	$query="SELECT * FROM gallerys WHERE showhide='show'";
	$adr=mysqli_query($db_con,$query);
		if(!$adr){
			exit ($err);
		}
		while($result=mysqli_fetch_array($adr)){
			echo '<div class="col-md-6 gallery">';
			echo "<h2>".$result['name']."</h2>";
			if ($result['picture']!=''){
				echo "<img id=".$result['id']." src='".$result['picture']."' class='img-thumbnail'>";
			}else{
				echo "<img id=".$result['id']."  src='/media/uplods/nophoto.jpg'/>";
			}
			echo '</div>';
		}
?>		
<?php
	require_once('templates/bottom.php');
?>