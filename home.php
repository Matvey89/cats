<?php
 $scripts=['media/js/gallery.js'] 
require_once('templates/top.php');
	if(isset($_SESSION['user_id'])){
	if($_POST){
 
$name = $_POST['name'];
$about = $_POST['about'];
	if($_FILES['picture']['size']>0){
		$filename='/media/uplouds/'.$_FILES['picture']['name'];
		$move=move_uploaded_file( $_FILES['picture']['tmp_name'],$_SERVER['DOCUMENT_ROOT'].$filename);
		if(!$move) 
			exit('error pick uplode');

	} else {
		$filename="";
	}
	$query="INSERT INTO aboutusers VALUES(NULL,'$name','$about','$filename')";
	$adr=mysqli_query($db_con,$query);
	if(!$adr){
		exit('ошибка');
	}
	?>
	<script>
	 document.location.href="home.php"
	</script>
	<?php
}
	?>
	<form enctype="multipart/form-data" method="post">
	
	<div class="form-group">
        <label for="exampleInputName">Название</label>
        <input type="text"   class="form-control" name="name" id="exampleInputName"  placeholder="Name">
    </div>
	<div class="form-group">
    <label for="exampleInputAbout">Описание</label>
    <textarea class="ckeditor textarea" name="about"  id="exampleInputPassword"  placeholder="Описание"></textarea>
  </div>
  <div class="form-group">
        <label for="exampleInputImg">Изображение</label>
        <input type="file" name="picture" />
    </div>
  <button type="registr" class="btn btn-default">Добавить</button>
  </form>
  <br/>
  <table class="table">
	<tr>
		<th width="200px">Изображение</th>
		<th>название</th>
		<th>Действие</th>
	</tr>
	<?php
			$query="SELECT * FROM aboutusers ORDER BY id DESC";
			$adr=mysqli_query($db_con,$query);
			if (!$adr){
                exit('error query');
            }
            while($result=mysqli_fetch_array($adr)){
				?>
	  <tr>
		<td>
			<?php             
			if($result['image']==''){
				?>
				 <img width='100px' src='/media/uplouds/no_photo.jpg'/>;
				 <?php
			}else{
			?>
			<img width='200px' src='<?=$result['image']?>'/>;
			<?php
			}
			?>
			
		</td>
		<td><?=$result['name']?></td>
        <td>
			<a href="edit.php?id=<?=$result['id']?>">Редактирование</a>
			<a href="#" onclick="delete_position('del.php?id=<?=$result['id']?>', 'Вы действительно хотите удалить?')">Удалить</a>
		</td>
	  </tr>
	  <?php
			}
		?>
	
	  </table>
  
  
<?php	}else{
 echo "ОШИБКА ВХОДА";
}
require_once('templates/bottom.php');
?>

	