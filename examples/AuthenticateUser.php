<?PHP

/*

Use your username and password to get a temporary API key.

*/


error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
include_once('vendor/autoload.php');

$etrak = \etrak\etrak::instance()->sandbox();

$r = \etrak\AuthenticateUser::create([
  'email' => 'rich@parcelmonkey.com',
  'password' => 'hello1'
]);

print_r($r);

