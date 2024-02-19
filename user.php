<!DOCTYPE html>
<?php include 'details.php' ?>
<html>

<head>
<title>User account</title>

    
 
    <style>.emo:hover{width:"auto"; height:30%;}</style>
        <style>.em:hover{width:"auto"; height:30%;} </style>
        <style>.eml:hover{width:"auto"; height:30%;} </style>
        <style>body{background-image: url('/spiral.png'); padding:80px; background-size:50%;background-repeat:no-repeat;}</style>
        

</head>

<body>
    

</div> 

   
    
    <h1 align='center'>USER DETAILS</h1>    
    <?php 
    $sqlo = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sqlo);
$displayed = false;

if ($result->num_rows > 0) {
    while ($rows = $result->fetch_assoc()) {
        if (!$displayed) {
            echo "<h2>Name: " . $rows["name"] . "</h2>
                <h2>Email: " . $rows["email"] . "</h2>
                <h2> user ID: ".$rows["user_id"]."</h2>";
            $displayed = true; // Set the flag to true after displaying the information
        }
    }
}
?>
     
    
    <hr>
    
 <div align="center" >
            
         <br>
             <h1>EMR</h1>
             <a href=/login.php ><img class="emo" src= "/emrs.png" width="460" height="460"></a> 
             <br><hr>
             <h1>MedBot</h1>
             <a href=/login.php><img class="eml" src="https://cdn4.vectorstock.com/i/1000x1000/81/78/chatbot-icon-outline-robot-sign-on-a-blue-vector-19838178.jpg" width="400" height="470"/></a>
            
</div>  

    </body>




</html>