<?php


  // 
  $rests= array(
  
    '0' => 'FUJITA',
    '1' => 'KODAWARI',
    '2' => 'IPPUDO',
    '3' => 'IPPUDO',
  );

  $restsinf['FUJITA']= array(
    'url' => 'https://www.facebook.com/Foujita-290506878030561/',
    'img' => 'http://www.parisrues.com/imagesrest/rest01foujita101.jpg',
    'icon' => 'https://cdn.glitch.com/3baabecb-8029-4432-a258-1f2c694a0bbe%2Ffu.png?1524409638567',
    'name' => 'Fujita - ふじた',
    'type' => '1'
  );

  $restsinf['KODAWARI']= array(
    
    'url' => 'https://www.kodawari-ramen.com/',
    'img' => 'https://www.kodawari-ramen.com/wp-content/uploads/2016/10/Figaroscope-2-883x600.png',
    'icon' => 'https://cdn.glitch.com/3baabecb-8029-4432-a258-1f2c694a0bbe%2Fko.png?1524411018616',
    'name' => 'Kodawari - こだわり ラーメン',
    'type' => '2'
  
  );

  $restsinf['IPPUDO']= array(
    
    'url' => 'http://www.ippudo.fr/',
    'img' => '',
    'icon' => 'https://cdn.glitch.com/3baabecb-8029-4432-a258-1f2c694a0bbe%2Fi.png?1524411352615',
    'name' => 'Ippudo - 一風堂',
    'type' => '2'
  
  );

  $restsinf['INAGIKU']= array(
  
    'url' => 'http://restaurant-inagiku.com/en',
    'img' => '',
    'icon' => 'https://cdn.glitch.com/3baabecb-8029-4432-a258-1f2c694a0bbe%2Fi.bis.png?1524415503583',
    'name' => 'Inagiku - 稲ぎく',
    'type' => '3'
  
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