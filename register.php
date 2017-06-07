<?php require_once('templates/top.php');?>
<?php
	if($_POST){
	$err=[];
	$login=$_POST['login'];
	$pass=$_POST['pass'];
	$pass_again=$_POST['pass_again'];
	$email=$_POST['email'];	
		if($pass==$pass_again){
		//echo 'on';
		}
		else{
		$err[]="не совпадают пароли";
		}
		$query="SELECT*FROM users WHERE email='$email'";
		$addr=mysqli_query($db_con,$query);
			if(!$addr){
			exit($query);//delet
			}
			if(mysqli_num_rows($addr)>0){
				$err[]='Такой email уже есть';
			}
		foreach($err as $one){
			echo"<p style='color:red' class='error'>";
			echo $one;
			echo "</p>";
		}
		if($pass!=$pass_again){
			$err[]='пароли не совпали';
		}
		if(count($err)==0){
		$query="INSERT INTO users VALUES(
		Null,
		'$login',
		'$pass_again',
		'$email',
		NOW(),
		NOW(),
		'unblock'	
		)";
		$in=mysqli_query($db_con,$query);
		if (!$in){
		exit ($query);//для проверки кода
		}else{
		?>
		<script>
			document.location.hreg='login.php'
		</script>
		<?php
		}
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
        <input type="name"   class="form-control" name="login" id="exampleInputName" required placeholder="Name">
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