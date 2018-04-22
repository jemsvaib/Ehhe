<?php

  $rests= array(
  
    'fujita' => 'FUJITA',
    'kodawari' => 'KODAWARI',
  
  );

  $restsinf['fujita']= array(
  
    
  
  );

  $restsinf['kodawari']= array(
  
  
  );

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
   
    if($page=="header"){
      
      $error = "403";

      $page = "error";
    
    }else{
      
      $error = "404";

      $page = "error";
    
    }
    
  }