<?PHP

error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);

include_once('vendor/autoload.php');

$api_key = 'YOUR-API-KEY';
$etrak = \etrak\etrak::instance()->setApiKey($api_key)->sandbox();

// Test to see if you're connected
$r = \etrak\Me::get();
print_r($r);exit;


// Create consignment

$data = 
array (
  'contract_id' => '314bca39-f98e-444c-8e6f-fb050fb3fc70',
  'service_id' => 'ontrak',
  'barcode' => false,
  'client_ref1' => 'test',
  'client_ref2' => '',
  'client_ref3' => '',
  'webhook' => 'https://www.parcelmonkey.co.uk/webhook',
  'export_type' => 'permanent',
  'reason_for_export' => 'sold',
  'pieces' => 
  array (
    0 => 
    array (
      'weight' => '0.12',
      'length' => '1',
      'width' => '2',
      'height' => '3',
      'contents' => 
      array (
        0 => 
        array (
          'description' => 'book',
          'value' => '10.00',
          'quantity' => 1,
          'currency' => 'GBP',
          'hs_code' => '1122334455',
          'country_of_origin' => 'GB',
        ),
      ),
    ),
  ),
  'address_delivery' => 
  array (
    'name' => 'Richard Barrett',
    'telephone' => '01234567890',
    'email' => 'rich@parcelmonkey.com',
    'company' => 'Parcel Monkey',
    'line1' => 'Unit 21',
    'line2' => 'Tollgate',
    'line3' => 'Eastleigh',
    'city' => 'Chandlers Ford',
    'state' => 'Hampshire',
    'postcode' => 'SO53 3TG',
    'country' => 'GB',
    'district' => '',
  ),
  'address_return' => 
  array (
    'name' => 'Richard Barrett',
    'telephone' => '01234567890',
    'email' => 'rich@parcelmonkey.com',
    'company' => 'Parcel Monkey',
    'line1' => 'Unit 21',
    'line2' => 'Tollgate',
    'line3' => 'Eastleigh',
    'city' => 'Chandlers Ford',
    'state' => 'Hampshire',
    'postcode' => 'SO53 3TG',
    'country' => 'GB',
    'district' => '',
  ),
  'address_collection' => 
  array (
    'name' => 'Richard Barrett',
    'telephone' => '01234567890',
    'email' => 'rich@parcelmonkey.com',
    'company' => 'Parcel Monkey',
    'line1' => 'Unit 21',
    'line2' => 'Tollgate',
    'line3' => 'Eastleigh',
    'city' => 'Chandlers Ford',
    'state' => 'Hampshire',
    'postcode' => 'SO53 3TG',
    'country' => 'GB',
    'district' => '',
  ),
);

$r = \etrak\Consignment::create($data);
print_r($r);exit;


/*





  $consignment_id = '3260bbf8-e2f4-4a78-b719-e11c17d881f2';
  $response = \etrak\Label::get($consignment_id);

  //echo $response->body->data;exit;

  header("Content-type:application/pdf");
  header("Content-Disposition:inline;filename='$consignment_id.pdf");
  echo base64_decode($response->body->data);

  exit;




$r = \etrak\AuthenticateUser::create([
  'email' => 'rich@parcelmonkey.com',
  'password' => 'hello1'
]);


$r = \etrak\User::get('c87ea71e-e03b-4d9f-94aa-13ba91b50eea');


$r = \etrak\User::update('67708314-3f42-4e5d-83da-4a48d6a71000', [
  'name' => 'Rich test'
]);



$r = \etrak\ApiKey::get([
  'reference' => 'my app'
]);

print_r($r->body);exit;



*/
$r = \etrak\User::delete('67708314-3f42-4e5d-83da-4a48d6a71000');



print_r($r);exit;


?>