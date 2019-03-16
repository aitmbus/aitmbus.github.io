<?php
use Kreait\Firebase;

$firebase = (new Firebase\Factory())->create();
$database = $firebase->getDatabase();

$db->getReference('config/website')
    ->set([
        'name' => 'My Application',
        'emails' => [
            'support' => 'support@domain.tld',
            'sales' => 'sales@domain.tld',
        ],
        'website' => 'https://app.domain.tld',
    ]);

$db->getReference('config/website/name')->set('New name');






$deviceId = $_GET["d"];
$latitude = $_GET["la"];
$longitude= $_GET["ln"];

$uname="id8910287_root";
$ser="localhost";
$pass="rootroot";
$db="id8910287_bs";
$t=date("Y-m-d H:m:s",time());
$conn=mysqli_connect($ser,$uname,$pass,$db) or die("no conn");
$q="select * from bus";
$res=mysqli_query($conn,$q) or die('no data sent');
if(mysqli_num_rows($res)>0){
	while($row=mysqli_fetch_array($res)){
		echo $row['d'];
		echo $row['la'];
		echo $row['ln'];
		echo $row['time'];
	}
}
echo $latitude ;
echo $longitude;

?>