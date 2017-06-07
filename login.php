<?php require_once('templates/top.php');?>
<?php
	if($_POST){
		$login=$_POST['login'];
		$pass=$_POST['pass'];
		$query="SELECT * FROM users WHERE login='$login' AND password='$pass'";
		$adr=mysqli_query($db_con,$query);
		if(!$adr){
			exit($query);
			}
			if(mysqli_num_rows($adr)>0){
				$user=mysqli_fetch_array($adr);
				echo "<pre>";
				print_r($user);
				echo "</pre>";
				}else{
				echo 'ошибка входа';
				}
				$_SESSION['user_id']=$user['id'];
				}else{
				echo'1';
				}
?>
<form method='POST' action='login.php'>
	<div class="form-group">
        <label for="exampleInputEmail1">Login</label>
        <input type="name"   class="form-control" name="login" id="exampleInputName"  placeholder="Name">
    </div>
	<div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password"  class="form-control" name="pass"  id="exampleInputPassword"  placeholder="Password">
  </div>
	<button type="registr" class="btn btn-default">Вход</button>
</form>
<?php require_once('templates/bottom.php');?>