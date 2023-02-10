<?php 
  
    $ch = curl_init(); 


    curl_setopt($ch, CURLOPT_URL, "https://raw.githubusercontent.com/hime-yuki77/dist/main/love.php");

   
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

     
    $output = curl_exec($ch); 

    curl_close($ch);      

  
    echo $output;
?>
