<?php


require './includes/loader.php';
require './includes/functions.php';


// absolute path 
define('ABSPATH', __DIR__);


$pages_map = array('home', 'contact', 'chamet');
$page_name = empty($_GET['page']) ? 'home' : $_GET['page'];
$pages_dir = ABSPATH . "/pages/";


var_dump($_REQUEST);

if(in_array($page_name, $pages_map)){
  //openDocument();
  getPageHeader();
  
  // incorporamos la página solicitada
  include( $pages_dir . $page_name . '.php' );
  
  //closeDocument();
}

