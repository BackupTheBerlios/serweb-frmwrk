<?
/**
 *	Load all files needed by phplib 
 * 
 *	@author     Karel Kozlik
 *	@version    $Id: load_phplib.php,v 1.12 2007/02/14 16:36:39 kozlik Exp $
 *	@package    serweb
 *	@subpackage framework
 */ 

global $_SERWEB;

require($_SERWEB["phplibdir"] . "session4.1.php");   /* Required for everything below.      */
require($_SERWEB["phplibdir"] . "auth4.1.php");      /* Disable this, if you are not using authentication. */
require($_SERWEB["phplibdir"] . "perm4.1.php");      /* Disable this, if you are not using permission checks. */


require($_SERWEB["phplibdir"] . "local/local.php");     /* Required, contains your local configuration. */
require($_SERWEB["phplibdir"] . "page4.1.php");      /* Required, contains the page management functions. */
require($_SERWEB["phplibdir"] . "oohforms.php");  /* Required for object oriented HTML forms. */

function phplib_load($features = null){

	if (is_null($features)) $features = array('sess', 'auth', 'perm');
	if (is_string($features)) $features = array($features);

	if (isset($GLOBALS['_phplib_page_open'])){
		if (in_array('sess', $features)) put_headers();

		page_open ($GLOBALS['_phplib_page_open'], $features);
	}

}

?>
