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
    



   
    
    <h1 align='center'>USER DETAILS</h1>    
    <?php 
    $sqlos = "SELECT * FROM hospital WHERE email='$email'";
    $result = mysqli_query($conn, $sqlos);
    $displayed = false;

if ($result->num_rows > 0) {
    while ($rows = $result->fetch_assoc()) {
        if (!$displayed) {
            echo "<h2>Name: " . $rows["name"] . "</h2>
                <h2>Email: " . $rows["email"] . "</h2>";
            $displayed = true; // Set the flag to true after displaying the information
        }
    }
}
?>
     
    
    <hr>
    
 <div align="center" >
            
         <br>
             <h1>BlockChain</h1>
             <a href=/login.php ><img src="https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img,w_960/https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img,w_300/https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img,w_768/https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img,w_700/https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img,w_534/https://contenteratechspace.com/wp-content/uploads/2021/03/dapps.jpg" width="460" height="460"></a> 
             <br><hr>
             <h1>Access & manage</h1>
             <a href=/login.php><img class="em" src="https://learn.g2.com/hubfs/Data%20exchange.png" width="450" height="40%"/></a>
        
            
</div>  

    </body>




</html>