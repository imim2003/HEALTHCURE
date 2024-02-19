<!Doctype html>
<?php include "config.php"?>
<html>
<head>
    <title> sign up</title>
    
    <meta charset="utf-8">
    <meta name="keywords" content="coolie booking">
    <meta name="description" content="book coolie">
    <style>body{background-image: url("spiral.png");padding:140px; background-size:100%; background-repeat:no-repeat;}
   #btn{
	background-color: #4CAF50; /* Green */
	border: none;
	color: white;
	padding: 12px 12px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	margin: 4px 2px;
	cursor: pointer;} </style>

</head>

<div align="center" id="sec"> </div>
 
  <body align="center">
 <h1 align="center">Sign up</h1>
    <br>   
<form align="center" method="POST">
    <label>Patient</label><input type=checkbox id="ch" name="remember[]" value="user" onclick=show()> <label>Healthcare</label><input type=checkbox id="chi" name="remember[]" value="healthcare" onclick=hide()> <label>Hospital</label><input type=checkbox name="remember[]" value="hospital" id="cho" onclick=shide()>
    <br><br>
    <label>Enter Name</label>
    <input name="name" required>
    <br><br>
    <label>Enter Email</label>
    <input type="email" name="email" required>
    <br><br>
    <label> Create new password </label>
    <input type="password" name="password" required>
    <label id="dips" hidden>phone</label>
    <input type="phone" name="phone" maxlength=10 id="dip" hidden><br><br>
    <label id="do">License no.</label>
    <input id="dop" name="license">
   <label id="di" hidden> profession </label> 
   <select name="station" id="dipsy" hidden> <option>Select profession</option> 
																			<option value="doc">Doctor</option>
																			<option value="pharma">Pharmacist</option>
																			
																	</select><br><br>
    <br><br>
    <input type="submit" name="register"  id="btn" required>


</form>
<script> 
function hide()
{document.getElementById('dip').hidden = false;
    document.getElementById('dips').hidden = false;
    document.getElementById('dipsy').hidden = false;
    document.getElementById('di').hidden = false;
    document.getElementById('dop').hidden = false;
    document.getElementById('do').hidden = false;
    let b=document.getElementById("ch");
    let a=document.getElementById("cho");
    b.checked=false;
    a.checked=false;
    
    

}

function show()
{document.getElementById('dip').hidden = true;
    document.getElementById('dips').hidden = true;
    document.getElementById('dipsy').hidden = true;
    document.getElementById('di').hidden = true;
    document.getElementById('dop').hidden = true;
    document.getElementById('do').hidden = true;
    let a=document.getElementById("chi");
    let b=document.getElementById("cho");
    a.checked=false;
    b.checked=false;

}


function shide()
{document.getElementById('dip').hidden = false;
    document.getElementById('dips').hidden = false;
    document.getElementById('dipsy').hidden = true;
    document.getElementById('di').hidden = true;
    document.getElementById('dop').hidden = false;
    document.getElementById('do').hidden = false;
    let a=document.getElementById("chi");
    let b=document.getElementById("ch");
    a.checked=false;
    b.checked=false;
}





</script>





</body>



</html>
