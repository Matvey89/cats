</div>
			<div class="col-md-2">
				<a href="#"><img src="media/img/vidjet.jpg"></a>
			</div>
		</div>
		<br style="clear:both">
		<footer id="footer">
		<?php
		$query="SELECT*FROM maintexts WHERE showhide='show'";
		$adr=mysqli_query($db_con, $query);
		while($result=mysqli_fetch_array($adr)){
		echo "<a href='index.php?url=".$result['url']."'>";
		echo $result['name'];
		echo "</a><br/>";
		}
		?>
		&copy; Матвей Ташкинов
		</footer>		
	</body>
</html>