<?php ob_start();
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
@session_cache_expire(0);
@ini_set('session.gc_maxlifetime', 1440);
@ini_set('session.cookie_lifetime', 0);
@ini_set('session.cache_expire', 0);
@ini_set('session.gc_probability', 1);
@ini_set('session.gc_divisor', 100);
@ini_set('session.cookie_secure', true);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
@ini_set('display_errors', 1);
@ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

date_default_timezone_set('America/Sao_Paulo');
define('ROOT_DIR', dirname(__FILE__) . '/');

if ($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == '127.0.0.1' || $_SERVER['HTTP_HOST'] == 'localhost:51160') {

    define("PATH", 'http://' . $_SERVER['HTTP_HOST'] . '/admin-lucas/');

    define("HOST", "localhost");
    define("DBNAME", "crud");
    define("USER", "root");
    define("PASSWORD", "");
} else {

    define("PATH", 'https://' . $_SERVER['HTTP_HOST'] . '/');

    define("HOST", "NOME-DO-HOST");
    define("DBNAME", "NOME-DO-BANCO");
    define("USER", "NOME-DO-USUARIO");
    define("PASSWORD", "SENHA-DO-USUARIO");
}



require_once(ROOT_DIR . "class/class.session.php");
require_once(ROOT_DIR . "class/class.db.php");

$db = new DB();

require_once(ROOT_DIR . "class/seguranca.php");
require_once(ROOT_DIR . "class/upload_class.php");
require_once(ROOT_DIR . "class/xls-import.php");

require_once(ROOT_DIR . "class/class.pesquisas.php");
require_once(ROOT_DIR . "class/class.funcoes.php");

$upload = new UploadArquivoSis();
$pesquisas = new PESQUISAS();
