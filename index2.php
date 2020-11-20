<html>
<head>
    <title>BANKING SYSTEM</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
#c1{
animation: slideUp .8s ease forwards .5s;
background-image:url("https://image.freepik.com/free-photo/finance-money-transaction-technology-background_31965-2382.jpg");
background-repeat:no-repeat;
background-size:cover;
}
@keyframes slideUp {
  0% {
    transform: translateY(300px);
  }
  100% {
    transform: translateY(0px);
  }
}
#cc{

background:rgba(0,0,0,0.5);
padding:10px;
    
}
</style>
<?php
$con=mysqli_connect("localhost","id15455208_ajith","Ajithama@0109","id15455208_banking");
if(!$con){
die("couldnt connect".mysqli_connect_error());
}
$error="";
?>
</head>
<body>
<div class="container-fluid" id="c1" style="height:100%;  align-items:center; ">
<div class="container" style="transform:translate(0%,80%); width:500px;" id="cc">
 <form  method="POST">
 <div class="form-group">
    <label for="email" style="color:white" >FROM:</label>
    <select class="form-control" id="sel1" name="f">
       <option value="SELECT">SELECT</option>
       <?php 
	      $sql="SELECT * FROM users";
	      $s=mysqli_query($con,$sql);
	      if(mysqli_num_rows($s)>0){
	      while($row=mysqli_fetch_array($s)){
	    ?>
		<option value="<?php echo $row['NUMBER'];?>"><?php echo $row['NAME'];?></option>
		<?php
		}
	   }
	    else{
		   echo"couldnt display";
	    }
	   ?>
 </select>
 </div>
 <div class="form-group">
    <label for="email" style="color:white">TO:</label>
    <select class="form-control" id="sel2" name="tt">
       <option value="SELECT">SELECT</option>
       <?php 
	      $sql="SELECT * FROM users";
	      $s=mysqli_query($con,$sql);
	      if(mysqli_num_rows($s)>0){
	      while($row=mysqli_fetch_array($s)){
	    ?>
		<option value="<?php echo $row['NUMBER'];?>"><?php echo $row['NAME'];?></option>
		<?php
		}
	   }
	    else{
		   echo"couldnt display";
	    }
	   ?>
 </select>
 </div>
  <div class="form-group">
    <label for="pwd" style="color:white">AMOUNT:</label>
    <input type="number" class="form-control" id="pwd" name="p" placeholder="AMOUNT">
	 
  </div>  
<div class="alert" style="display:none;" id="a1">
<a class="close" data-dismiss="alert"><i class="icon-remove"></i></a>
<strong> PLEASE ENTER VALID DETAILS</strong>
</div>
    <button type="submit" name="t" class="btn btn-info" style="width:200px;margin-left:30%;">Submit</button>
    <a href="index.php"><button type="button"  class="btn btn-info" style="width:200px;margin-left:30%; margin-top:10px;">BACK</button></a>
  </form>
</div>
</div>
<?php

if(isset($_POST["t"]))
{

if($_POST['f']==$_POST['tt'] or $_POST['f']=="SELECT" or $_POST['tt']=="SELECT" )
   {
     echo'<script>window.alert("PLEASE ENTER VALID DETAILS");</script>';
	 echo'<script>document.getElementById("a1").style.display="block";<script>';
	 
    }
else
   {
     $f=$_POST['f'];
     $t=$_POST['tt'];
     $a=$_POST['p'];
     $c="SELECT AMOUNT FROM users where NUMBER='$f'";
     $g=mysqli_query($con,$c);
    if(mysqli_num_rows($g)>0)
    {
	while($ro=mysqli_fetch_array($g))
	{
		$fa=$ro['AMOUNT'];
	}
	}
	 $c1="SELECT AMOUNT FROM users where NUMBER='$t'";
	 $g1=mysqli_query($con,$c1);
	if(mysqli_num_rows($g1)>0)
	{
	 while($ro1=mysqli_fetch_array($g1)){
	 $am=$ro1['AMOUNT'];
	}
	}
	if($fa>=$a){
	    $date=date("Y/m/d");
    $sql3="insert into transactions(Fr,T,AMOUNT,DATE) VALUES('$f','$t','$a','$date')";
    if(mysqli_query($con,$sql3))
	{
    
	 $f1=$fa-$a;
     $d="UPDATE users SET AMOUNT='$f1' WHERE NUMBER='$f'";
	 $dd=mysqli_query($con,$d);
	 $am=$am+$a;
	$d1="UPDATE users SET AMOUNT='$am' WHERE NUMBER='$t'";
	$dd1=mysqli_query($con,$d1);
	 if($dd and $dd1){
	echo'<script>window.alert("TRANSFER SUCCESSFULL");</script>';	 
	 } 
	
	}
	
    }
	
else{
		echo'<script>window.alert("DONT HAVE SUFFICIENT BALANCE");</script>';
	}
	
	}
}
?>
</body>
</html>