<?PHP

/*

Use your temporary API key to generate a more permanent API key.

*/


error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
include_once('vendor/autoload.php');

$YOUR_API_KEY = ''; // Set your temporary API key
$REFERENCE = 'My App'; // A reference for this API key

$etrak = \etrak\etrak::instance()->setApiKey($YOUR_API_KEY)->sandbox();

$r = \etrak\ApiKey::create([
  'reference' => $REFERENCE
]);
print_r($r);

