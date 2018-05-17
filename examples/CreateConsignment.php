<?PHP

/*

Create an eTrak consignment.

*/


$YOUR_API_KEY = ''; 

$etrak = \etrak\etrak::instance()->setApiKey($YOUR_API_KEY)->sandbox();


$data = 
array (
  'contract_id' => '641b4b46-d0fe-4e76-b7e9-ce7754c26955',
  'service_id' => 'etrak_tracked',
  'barcode' => false,
  'client_ref1' => 'test',
  'client_ref2' => '',
  'client_ref3' => '',
  'webhook' => 'https://www.parcelmonkey.co.uk/webhook',
  'pieces' => 
  array ( 
    array (
      'weight' => '0.12',
      'length' => '1',
      'width' => '2',
      'height' => '3',
      'contents' => 
      array ( 
        array (
          'description' => 'book',
          'value' => '10.00',
          'currency' => 'GBP',
          'hs_code' => '1122334455',
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

?>