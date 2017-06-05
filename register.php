<?php require_once('templates/top.php');?>
<form method='POST'>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" id="email" class="form-control" id="exampleInputEmail1" required placeholder="Email">
  </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="name" name="name" id="name" class="form-control" id="exampleInputEmail1" required placeholder="Name">
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="pass" id="pass" class="form-control" id="exampleInputPassword1" required placeholder="Password">
  </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password_again</label>
        <input type="password" name="pass_again" id="pass_again" class="form-control" id="exampleInputPassword1" required placeholder="Password_again">
    </div>
	<div class="form-group">
        <label for="exampleInputPassword1">About</label>
        <input type="text" name="about" id="about" class="form-control" id="exampleInputPassword1"  placeholder=" About yourself">
    </div>
  <button type="registr" class="btn btn-default">Registr</button>
</form>
			
<?php require_once('templates/bottom.php');?>