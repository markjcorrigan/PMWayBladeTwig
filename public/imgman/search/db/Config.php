<?php
////NB This section between php tags was added to secure the DB connectivity code below.
// I.e. on Dave's MVC framework if not logged on trying to open this page (Config.php) will send the user back to the MVC home page.
// This from <?php above to the closing php tag directly below can be removed.
//I have put this into a sub folder which is secured by the .htaccess "Deny To All."
//I will work on this in next version.
////
session_start();
if ( ! isset($_SESSION['user_id'])) {   // from App\Auth::getUser
    header('Location: http://' . $_SERVER['HTTP_HOST'] . $url, true, 303);   // from Core\Controller::redirect
    exit;
}
?>
<?php
  // DB Params
  define("DB_HOST", "localhost");
  define("DB_USER", "f3608940_markjc");
  define("DB_PASSWORD", "ibmhal13971");
  define("DB_NAME", "f3608940_PMWay");
