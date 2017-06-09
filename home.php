<?php require_once('templates/top.php');
	if(isset($_SESSION['user_id'])){
	if($_POST){
	echo "<pre>";
		print_r($_POST);
		print_r($_FILES);
	echo "</pre>";	
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

	