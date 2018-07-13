<?php  
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
// DS . 'C:' . just after site defien('SITE_ROOT',) below or you can use manual path
defined('SITE_ROOT') ? null : define('SITE_ROOT', DS . 'xampp' . DS . 'htdocs' . DS . 'image_gallery_oop');
defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT.DS.'admin'.DS.'includes');
require_once("functions.php");
require_once("new_config.php");
require_once("database.php");
require_once("db_object.php");
require_once("user.php");
require_once("photo.php");
require_once("session.php");
require_once("comment.php");
require_once("paginate.php");
?>