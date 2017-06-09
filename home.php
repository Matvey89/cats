<?php require_once('templates/top.php');
	if(isset($_SESSION['user_id'])){
	if($_POST){
 
$name = $_POST['name'];
$about = $_POST['about'];
	if($_FILES){
		$filename='/uplads/'.$_FILES['picture']['name'];
		$move=move_uploaded_file( $_FILES['picture']['tmp_name'],$_SERVER['DOCUMENT_ROOT'].$filename);
		if(!$move) 
			exit('error pick uplode');

	} else {
		$filename="";
	}
	$query="INSERT INTO aboutusers VALUES(NULL,'$name','$about','$filename')";
	$in=mysqli_query($db_con,$query);
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
    <textarea class="form-control" name="about"  id="exampleInputPassword"  placeholder="Описание"></textarea>
  </div>
  <div class="form-group">
        <label for="exampleInputImg">Изображение</label>
        <input type="file" name="picture" />
    </div>
  <button type="registr" class="btn btn-default">Добавить</button>
  </form>
<?php	}else{
 echo "ОШИБКА ВХОДА";
}
require_once('templates/bottom.php');
?>

	