<?php

  if(isset($_GET)){
   
    if(isset($_GET[error])){
      
      $error = $_GET[error];
      
    }
    
  }
  
  echo '<link rel="stylesheet" type="text/css" href="/css/style.css">';
  echo "<p class='e'>
          <h1 class='error'>".$error."</h1>
        </p>";