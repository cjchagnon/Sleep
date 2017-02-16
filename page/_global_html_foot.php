<?php
//=============================================================================
// WPI Sleep App
// _global_html_foot.php
//
// Global Document Foot Content.
//
// Includes links to Libraries and JS from vendors, to prevent render blocking
// javascript from being loaded.
//=============================================================================

echo <<<HTMLFOOT
<script src="$server_url/vendors/jquery/js/jquery-2.2.3.min.js"></script>
<script src="$server_url/vendors/foundation/js/foundation.min.js"></script>
<script src="$server_url/vendors/CSS-Circle-Menu/circleMenu.min.js"></script>
<script src="$server_url/resources/js/main.js"></script>

<script>
  //Initialize Foundation
  $(document).foundation();
  //Initialize Circle Menu
  var el = '.js-menu';
  var myMenu = cssCircleMenu(el);
</script>
</body>
</html>
HTMLFOOT;
?>
