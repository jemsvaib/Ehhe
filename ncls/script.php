<?php

  if(isset($_GET)){
   
    if(isset($_GET[page])){
      
      $page = $_GET[page];
      
    }else{
   
      $page = "corpus";
    
    }
    
  }else{
   
    $page = "corpus";
    
  }

  if($page!="corpus"){
   
    $error = "404 Not Found";
    
    $page = "error";
    
  }