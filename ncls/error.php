<?php

  if(isset($_GET)){
   
    if(isset($_GET[error])){
      
      $error = $_GET[error];
      
    }else{
     
      header('Location: /');
      
    }
    
  }else{
     
    header('Location: /');

  }


  if(isset($error)){
    
    if($error=="404"){
      
      $corpus = "we couldn't find the page you are looking for<br>maybe this page has been erased or the url is wrong.";
      
    }
    if($error=="403"){
      
      $corpus = "sorry, you are not able to access this page.";
      
    }
    
    
  }
  
  echo '<link rel="stylesheet" type="text/css" href="/css/style.css">';
  echo '<div class="err">
          <h1 class="error">'.$error.'</h1>
          '.$corpus.'
        </div>';