<?php
/**
 * Header - General Platform Template
 *
 * @author      Anzoumana SANOGO
 */
    
     $js_files = array('jquery.min.js', 'bootstrap.min.js');
     $css_files = array('bootstrap.min.css', 'style.css');
    
     $_description = (!empty($_title) ? $_title.' :: ' : '') . META_DESCRIPTION;
     $_title = (!empty($_title) ? $_title.' | ' : '').META_TITLE;
     $_keywords = (!empty($_keywords) ? $_keywords.', ' : '').META_KEYWORDS;

?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo $_title?></title>
    <meta name="description" content="<?php echo $_description?>"/>
    <meta name="keywords" content="<?php echo $_keywords?>"/>
    <link href="<?php echo IMG_DIR?>favicon.png" type="image/png" rel="shortcut icon"/>
    <link rel="icon" href="<?php echo IMG_DIR?>favicon.png" type="image/x-icon"/>

    <?php 
        head_file(array(), $css_files);
    ?>

  </head>

  <body>

  <div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    </div>
    <div class="col-sm-8 text-left"> 
    <h1><img src="<?php echo IMG_DIR?>logo.png">Sylax PHP - Page d'accueil </h1>
       
      <p style="font-size:20px">Ce mini TP est un exemple de CRUD permettant ainsi une prise en main rapide </p>
      <hr>
