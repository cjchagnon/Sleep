<?php
//=============================================================================
// WPI Sleep App
// _template_main.php
//
// Primary template
//
// Includes header, main content area and footer.
//=============================================================================

//If Page parameter is set and it is not empty
if (isset($_GET['page']) && !empty($_GET['page'])) {

  //set variable page equal to page variable and make it lower case.
  $page = strtolower($_GET['page']);
  //include menu globally
  include_once('page/_menu_radial.php');
  //include header globally
  include_once('page/_header.php');
  //decide which page to include. This is for prototyping, and later navigation schema can be added
  if ($page == "home") {include_once('page/_dashboard.php');}
  if ($page == "add") {include_once('page/_add.php');}
  if ($page == "history") {include_once('page/_history.php');}
  if ($page == "user") {include_once('page/_user.php');}
  if ($page == "settings") {include_once('page/_settings.php');}

}else{
    //If the page parameter is not set, lets assume logout; (for demo)
    include_once('page/_default.php');
}


?>
