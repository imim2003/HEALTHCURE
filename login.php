<?php include 'config.php'?>
<!DOCTYPE html>

<html>
    <head>
        
        
        <link href="C:\Users\archi\OneDrive\Desktop\profile\ele2.css" rel="stylesheet">
        
        <title>sign in</title>

        <style>body{align:right;padding:140px; background-image:url("spiral.png");background-size:100%;background-position:top;background-repeat:no-repeat;
    }</style>
        <style>h2{font-size:40px;}</style>
        <style>button{
	background-color: #4CAF50; /* Green */
	border: none;
	color: white;
	padding: 12px 12px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	margin: 4px 2px;
	cursor: pointer;
}</style>
    </head>
    <div id=sec></div>
    
    <body align="center">
          
    
    <h2 align="center">Sign in</h2>
    <form method='POST' align="center" >
        <p>Enter your email*
        <input type="email" id="email" name="email" placeholder="Enter your email" size="50" required><br></p>
        <p>Enter password*
        <input type="password" id="password" name="password" placeholder="Atleast 8 characters" size="50" required></p>
        <button type="submit" id="login" name="login" title="click to continue">Login</button>

        <p>New User? <a href="\signup.php">Register</a>

    
    
    
    
    
    
    </form>
    
    
 </body> 
 
</html>