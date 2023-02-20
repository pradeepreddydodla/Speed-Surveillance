<?php

sleep(20);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sc";


$url = json_decode(file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=<your_api_key>&ip=117.10.168.1&format=json"));
$location=$url->latitude;
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());

}




$file2 = fopen("limit.txt", "r");
$file3= fopen("speed.txt", "r");
$file5= fopen("number.txt", "r");
$i = 0;

while (!feof($file2) && !feof($file3) && !feof($file5)) 
{

$limit1 = fgets($file2);
$curr1 = fgets($file3);
$num1 = fgets($file5);

$ip = $_SERVER['REMOTE_ADDR'];
$url = "http://freegeoip.net/json/" . $ip;
$json = file_get_contents($url);
$data = json_decode($json, TRUE);
$latitude = print_r($data['latitude'], true);
$longitude = print_r($data['longitude'], true);
$country = print_r($data['country_code'], true);
$city = print_r($data['city'], true);
$state = print_r($data['region_code'], true);
$location = $latitude . " | " . $longitude ;


$date = new DateTime();
$date->setTimezone(new DateTimeZone('Asia/Calcutta'));

$fdate = $date->format('Y-m-d H:i:s');

$sql = "INSERT INTO vehicle (number,currspeed, speedlimit, location, time)
VALUES ('$num1', '$curr1', '$limit1', '$location', '$fdate')";

mysqli_query($conn, $sql);    




// Checking current speed with speed limit 


if($curr1 > $limit1)
{

$sql1 = "INSERT INTO police (number,currspeed, speedlimit, location, time)
VALUES ('$num1', '$curr1', '$limit1', '$location', '$fdate')";
mysqli_query($conn, $sql1);    
mysqli_close($conn);
}
else
{
$token = 'i7QP36s9Cc';
$mobile = 9994370499;
$msg = 'Thank_You';
$site = 'hitechpolice.ml';
$url = "http://api.fast2sms.com/sms.php?token=".$token."&mob=".$mobile."&mess=".$msg."&sender=".$site."&route=0";
$homepage = file_get_contents($url);
if($homepage)
{
  echo "";
}
else{
  echo "";
}




}


}