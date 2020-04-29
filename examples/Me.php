<?PHP

/*

Check you're connected to ETrak.

*/

error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
include_once('../vendor/autoload.php');

$YOUR_API_KEY = '';

$etrak = \etrak\etrak::instance()->setApiKey($YOUR_API_KEY)->sandbox();

$response = \etrak\Me::get();

print_r($response);exit;

