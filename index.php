
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

nav{
animation: expand .8s ease forwards .5s;	
}
#c2
{
animation: expand .8s ease forwards .5s;	
}
@keyframes slideIn {
  0% {
    transform: translateX(500px) scale(.2);
  }
  100% {
    transform: translateX(0px) scale(1);
  }
}

@keyframes slideUp {
  0% {
    transform: translateY(300px);
  }
  100% {
    transform: translateY(0px);
  }
}

@keyframes expand {
  0% {
    transform: translateX(1400px);
  }
  100% {
    transform: translateX(0px);
  }
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

<nav class="navbar navbar-inverse navbar-fixed-top" id="nav">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">BANK OF SPARKS</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          
          <li class="active"><a href="#c2">ACCOUNT-HOLDERS</a></li>
          <li><a href="#c3">TRANSACTIONS</a></li>
          <li><a href="index2.php">TRANSFER</a></li>
       
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>    


</div>
<div class="container-fluid" id="c2" style="height:100%;  align-items:center;">
<div class="container" style="margin-top:50px;">
<div class="table-responsive">          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>SL.NO</th>
        <th>ACCOUNT-HOLDERS</th>
        <th>BALANCE</th>
        
      </tr>
    </thead>
    <tbody>
	<?php
	$ss="SELECT * FROM users";
	$ss1=mysqli_query($con,$ss);
	if(mysqli_num_rows($ss1)>0){
		while($r=mysqli_fetch_array($ss1))
		{
		?>
		<tr>
        <td><?php echo $r['SLNO'];?></td>
         <td><?php echo $r['NAME'];?></td>
         <td><?php echo $r['AMOUNT'];?></td>
        </tr>
		<?php 
		}
	}?>
	
      
    </tbody>
  </table>
  </div>
</div>

</div>
<div class="container-fluid" id="c3" style="height:120%; align-items:center;">
<div class="container" style="margin-top:50px;">
<div class="table-responsive">          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>FROM</th>
        <th>TO</th>
        <th>AMOUNT</th>
        <th>DATE</th>
      </tr>
    </thead>
    <tbody>
<?php

$ss2="SELECT * FROM transactions";
	$ss3=mysqli_query($con,$ss2);
	if(mysqli_num_rows($ss3)>0){
		while($r1=mysqli_fetch_array($ss3))
		{
			?><tr><?php
			$from=$r1['Fr'];
			$to=$r1['T'];
			$a1="SELECT NAME FROM users WHERE NUMBER='$from'";
	        $b1=mysqli_query($con,$a1);
	       if(mysqli_num_rows($b1)>0){
		   while($r2=mysqli_fetch_array($b1))
		   {?>
			 <td><?php echo $r2['NAME'];?></td>
           <?php 
		   }
		   }
		   $a2="SELECT NAME FROM users WHERE NUMBER='$to'";
	        $b2=mysqli_query($con,$a2);
	       if(mysqli_num_rows($b2)>0){
		   while($r3=mysqli_fetch_array($b2))
		   {?>
			 <td><?php echo $r3['NAME'];?></td>
           <?php 
		   }
		   }
		  ?><td><?php echo $r1['AMOUNT'];?></td>
		  <td><?php echo $r1['DATE'];?></td><?php
		?></tr><?php
		}
	}
?>
</tbody>
  </table>
  </div>
</div>

</div>

</body>
<?php  mysqli_close($con);?>
</html>