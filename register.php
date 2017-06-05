<?php require_once('templates/top.php');?>
<?php
	if($_POST){
	$err=[];
	$pass=$_POST['pass'];
	$pass_again=$_POST['pass_again'];
		if($pass==$pass_again){
		echo 'on';
		}
		else{
		$err[]="не совпадают пароли";
		}
		foreach($err as $one){
			echo"<p style='color:red' class='error'>";
			echo $one;
			echo "</p>";
		}
		
	
	}
	
?>
<form method='POST'>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email"   class="form-control" name="email" id="exampleInputEmail1" required placeholder="Email">
  </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="name"   class="form-control" name="name" id="exampleInputName" required placeholder="Name">
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password"  class="form-control" name="pass"  id="exampleInputPassword" required placeholder="Password">
  </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password_again</label>
        <input type="password"  class="form-control" name="pass_again" id="exampleInputPassword_again" required placeholder="Password_again">
    </div>
	<div class="form-group">
        <label for="exampleInputPassword1">About</label>
        <input type="text" class="form-control" name="about" id="exampleInputAbout"  placeholder=" About yourself">
    </div>
  <button type="registr" class="btn btn-default">Registr</button>
</form>
			
<?php require_once('templates/bottom.php');?>