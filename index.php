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
#p{
 animation: slideUp .9s ease-out forwards .75s;   
}
#i{
    animation: expand .9s ease-out forwards .75s;
}
#c1{
animation: slideUp .9s ease-out forwards .75s;
background-image:url("https://image.freepik.com/free-photo/finance-money-transaction-technology-background_31965-2382.jpg");
background-repeat:no-repeat;
background-size:cover;
}
@keyframes slideUp {
  0% {
    transform: translateY(100px);
  }
  100% {
    transform: translateY(0px);
  }
}
nav{
animation: expand .8s ease forwards .5s;	
}
#c2
{
animation: expand .8s ease forwards .5s;	
}
@keyframes slideIn {
  0% {
    transform: translateX(300px) scale(.2);
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
.fa {
  padding: 2px;
  font-size: 10px;
  width: 15px;
  text-align: center;
  text-decoration:none;
  border:2px solid black;
}


.fa:hover {
  opacity: 0.7;
}


.fa-facebook {
  background: #3B5998;
  color: white;
}


.fa-twitter {
  background: #55ACEE;
  color: white;
}
.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}
#password::placeholder{
color:black;}

li:hover{
    border-bottom:2px solid white;
    background:black;
}
#a1:hover{
    background: linear-gradient(to bottom, #66ff33 0%, #ffff66 100%);
    transition:ease-out 0.5s;
    transform:scale(1.2);
}
#a2:hover{
    background: linear-gradient(to bottom, #ffffff 0%, #66ffff 100%);
    transition:ease-in 0.5s;
    transform:scale(1.2);
}
#a3:hover{
     background: linear-gradient(to bottom, #33ccff 0%, #6699ff 100%);
    transition:ease-in 0.5s;
    transform:scale(1.2);
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


<body data-spy="scroll" data-target=".navbar" data-offset="600">

<nav class="navbar  navbar-fixed-top" id="nav">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar" style="background:white"></span>
          <span class="icon-bar" style="background:white"></span>
          <span class="icon-bar" style="background:white"></span>                        
      </button>
      <a class="navbar-brand" href="#" style="color:white">BANK OF SPARKS</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          
          <li class="active"><a href="#c1" style="color:white">HOME</a></li>
          <li><a href="#c2" style="color:white">OUR SERVICES</a></li>
          <li><a href="#div3" style="color:white">ABOUT US</a></li>
       
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>    

<div class="jumbotron text-center" id="c1" style="width:100%; justify-items:center; ">
<div class="container-fluid" style="margin-top:5%; margin-left:0%" >
<div class="row" >
<div class="col-sm-6"  >
 <p style="color:white; font-size:40px; margin-top:15%; margin-left:10%;" id="p"><b>WELCOME</b> TO BANK OF SPARKS FOUNDATION</p>
 <button style=" margin-left:5%;border:4px solid orange; background:none; outline:none; border-radius:10px; width:150px; height:50px; font-size:15px; color:orange;" >LETS GO</button>
</div>

<div class="col-sm-6"  >
 <img id="i" src="https://c8.alamy.com/comp/HDH1P1/internet-banking-online-payment-technology-concept-HDH1P1.jpg" style="border-radius:250px; ; width:70%;height:70%; margin-left:20px; margin-right:50px;"></img>
</div>
</div>
</div>
</div>
<div class="container-fluid" id="c2"style=" ">
    <div class="row">
        <div class="col-sm-6" style="height:100%; color:white; display:flex; flex-direction:column; justify-content:center; ">
            <div class="panel" style="background:black; height:400px;padding-top:70px; box-shadow:5px 0px 0px 5px white;">
            <div class="panel-body">
             <h1 style="margin-left:30%;">TYPES OF LOANS</h1>
           <p style="margin-left:30%;">- Personal Loans. </p>
           <p style="margin-left:30%;">- Credit Cards. </p>
           <p style="margin-left:30%;">- Home-Equity Loans. </p>
           <p style="margin-left:30%;">- Home-Equity Lines of Credit. </p>
          <p style="margin-left:30%;">- Credit Card Cash Advances. </p>
          <p style="margin-left:30%;">- Small Business Loans. </p>
        </div>  
        </div>
        </div>
        <div class="col-sm-6" style="background:none;height:100%; display:flex; flex-direction:column; justify-content:center; align-items:center; ">
            <a href="index3.php" id="a1" style="border:2px solid black; width:200px; height:40px; text-align:center; border-radius:10px; padding-top:10px; color:black; text-decoration:none;" >ACCOUNT HOLDERS</a>
            <a href="index4.php" id="a2" style="margin-top:20px; border:2px solid black; width:200px; height:40px; text-align:center; border-radius:10px; color:black;padding-top:10px; text-decoration:none;">TRANSACTIONS</a>
            <a href="index2.php" id="a3" style="margin-top:20px; border:2px solid black; width:200px; height:40px; text-align:center; border-radius:10px; color:black; padding-top:10px; text-decoration:none;">TRANSFER</a>
        </div>
    </div>
</div>
<div class="jumbotron" id="div3" style=' margin-top:30%; background-image:url("https://thumbs.dreamstime.com/z/contact-us-background-businesses-email-call-message-landing-page-cover-icon-131608659.jpg"); background-repeat:no-repeat; background-size:cover; '>
<div class="container" style="margin-top:5%; margin-left:50px; width:100%;">
<div class="row">
<div class="col-sm-3">
     <p style="font-size:20px; font-weight:bold; color:white;" >ABOUT US</p> 
     <p style="font-size:10px; color:white; margin-top:30px;" >We provide you the best services</p> 
	 <p style="font-size:10px;color:white;">which is best for your family and which</p>
	 <p style="font-size:10px; color:white;">suits your packet</p>
	 <div style="display:block; margin-top:10px; ">
	 <a href="#" class="fa fa-facebook">   </a>
     <a href="#" class="fa fa-twitter" style="margin-left:20px;"></a>
	 <a href="#" class="fa fa-google"style="margin-left:20px;"></a>
     <a href="#" class="fa fa-linkedin" style="margin-left:20px;"></a>
	 </div>
    </div>
    <div class="col-sm-3">
      <p style="font-size:20px;font-weight:bold;color:white;">CONTACT US</p>
	  <div style="display:block; margin-top:30px;">
	   <p><i style="font-size:12px; border:2px solid yellow; color:white;" class="fa fa-mobile-phone"></i>  <span style="margin-left:10px; font-size:10px; color:white;"> NUMBER </span></p>
	   <p><i style="font-size:10px; border:2px solid yellow; color:white; " class="fa fa-map-marker"></i>  <span style="margin-left:10px; font-size:10px; color:white;"> LOCATION </span></p>
	   <p><i style="font-size:10px; border:2px solid yellow; color:white;" class="fa fa-inbox"></i>  <span style="margin-left:10px; font-size:10px; color:white;"> am9452197@gmail.com </span></p>
	  </div>
    </div>
    <div class="col-sm-3">
     <p style="font-size:20px;font-weight:bold; color:white;">POPULAR PLACES</p> 
	 <div >
	 <p style="font-size:10px; color:white; margin-top:30px;">BANGALORE &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  CHENNIA</p>
	 <p style="font-size:10px; color:white;">MUMBIA &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  DELHI</p>
	 <p style="font-size:10px; color:white;">MYSORE &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  VELORE</p>
	 <p style="font-size:10px; color:white;">VIJAYWAD &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   HYDERABAD</p></div>
    </div>
	<div class="col-sm-3">
       <p style="font-size:20px;font-weight:bold; color:white;">NEWSLETTER</p> 
	   <p style="font-size:10px; color:white; margin-top:30px;">Subscribe your email to get the latest</p>
	   <p style="font-size:10px; color:white;">news and new offer also discount</p>
	    <div class="input-group" style="width:200px;height:20px;">
    
    <input id="password" type="password" class="form-control" name="password" placeholder="EMAIL">
	<span class="input-group-addon" style="background:green;"><i class="glyphicon glyphicon-envelope" style="color:white"></i></span>
  </div>
    </div>
</div>
</div>
</div>    
<script>
var n=document.getElementById("nav");
window.onscroll=function(){
var top=window.scrollY;
console.log(top); 
if(top>=600){
    n.style.background="#0ff2cd";
}
else{
     n.style.background="none";
}
}

</script>

</body>
<?php  mysqli_close($con);?>
</html>