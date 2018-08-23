<?php
date_default_timezone_set('Asia/Kolkata');
#API access key from Google API's Console
define( 'API_ACCESS_KEY', 'AAAAlgObj5A:APA91bH-VJaxnPXy2OUJ9wOyCPkweyOO6-SGnCUZO21-P7yceSNHLYiirbEXsFEjAv2lDDBWsA94ovj-HeOg8-HJXec9JUCyOOZn4x25v9sg2STbf292seFZixGyTP_OkyXd0cebdvft');
$msg = array
(
	'body' 	=> 'hello there',
	'title'	=> 'Title Of Notification',
	'icon'	=> 'myicon',/*Default Icon*/
	'sound' => 'mySound'/*Default sound*/
);
$data=array
(
	'Title' => $_POST['title'],
	'Description' => $_POST['description'],
	'Date' => date('d M h:ia'),
	'isNew'=>'yes'
);
$fields = array
(
	'to'		=> '/topics/all_topics',
	'data'=>$data
);


$headers = array
(
	'Authorization: key=' . API_ACCESS_KEY,
	'Content-Type: application/json'
);
//echo json_encode($data);
#Send Reponse To FireBase Server	
$ch = curl_init();
curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
curl_setopt( $ch,CURLOPT_POST, true );
curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );


$result = curl_exec($ch );
curl_close( $ch );
#Echo Result Of FireBase Server
echo 'Message Sent!!!';
echo '<br>';
echo $result;

?>