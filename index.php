<?php 
$title="О котах";
$desc="Нужна ли кошка в квартире?";
$keywords="Нужна ли кошка в квартире?";
  require_once('templates/top.php');
  if($_GET['url']){
  $url=$_GET['url'];
  }
  else{
  $url='index';
  }
  $query="SELECT*FROM maintexts WHERE url='$url'";
  echo $query;
  $adr=mysqli_query($db_con,$query);
  if(!$adr){
	exit('error query');
  }
  $result=mysqli_fetch_array($adr);
  /*echo"<pre>";
  print_r($result);
  echo"</pre>";*/
  ?>
				<h2><?=$result['name'];?></h2>
				<article>
				<div>
				<?=$result['body'];?>
				</div>
				</article>
			
<?php require_once('templates/bottom.php');?>