<?php require_once('templates/top.php');?>
<?php
	if($_SESSION['user_id']){
		$id=(int)$_GET['id'];
		$query="SELECT * FROM aboutusers WHERE id=$id";

	$adr=mysqli_query($db_con,$query);
		if(!$adr){
			exit ($query);
		}
		$com=mysqli_fetch_array($adr);
	if($_POST){
		$img=$_POST['image'];
		$name=$_POST['name'];
		$body=$_POST['about']; 
		$err=[];
		if(empty($err)){
			$query="UPDATE aboutusers SET name='$name', body='$body', picture='$img' WHERE id=$id";
			$adr=mysqli_query($db_con,$query);
		if (!$adr){
		}else{
			exit($query);
		}
			}
	}
	?>	
	<form enctype="multipart/form-data" method="post">
	
		<div class="form-group">
			<label for="exampleInputName">Название</label>
			<input type="text"   class="form-control" name="name" id="exampleInputName"  placeholder="Name" value="<?=$com['name']?>">
		</div>
			<div class="form-group">
			<label for="exampleInputAbout">Описание</label>
			<textarea class="ckeditor textarea" name="about"  id="exampleInputAbout"  placeholder="Описание"><?=$com['about']?></textarea>
		</div>
			<div class="form-group">
			<label for="exampleInputImg">Изображение</label>
			<input type="file" name="picture"/>
			<?php
				if($result['image']==''){
					<img width='100px' src='/media/uplouds/no_photo.jpg'/>;
				}else{			
					<img width='200px' src='<?=$result['image']?>'/>;
				}
			?>
		</div>
			<button type="registr" class="btn btn-default">Добавить</button>
	</form>
<?php 
	}
require_once('templates/bottom.php');?>