 <?php
 session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sc";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$number=$_POST['number'];
$from=$_POST['from'];
$to=$_POST['to'];
$sql = "SELECT number,currspeed,speedlimit,location,time FROM police where number='$number' AND DATE(time) BETWEEN '$from' AND '$to'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {



echo "<body bgcolor= '#bfa145'>";

    echo "<br>";
	
	echo "<h3 align=center >VEHICLE DETAILS:</h3>";
	echo "<br>";
	
	
    
    echo "<table border=2 cellpadding=7 align=center><tr><th>NUMBER</th><th>CURR-SPEED</th><th>SPEED-LIMIT</th><th> LAT  || LONG </th><th>DATE & TIME</th></tr>";
    
	
	
	// output data of each row

    while($row = $result->fetch_assoc()) {
	    
		 echo "<tr><td>".$row["number"]."</td><td>".$row["currspeed"]."</td><td>".$row["speedlimit"]."</td><td>".$row["location"]."</td><td>".$row["time"]."</td></tr>";
		
	
		// May be useful later
		/*$cid=$row['cid'];
		$data=$row['sum(data)'];
		$_SESSION['cid'] = $cid; 
		$_SESSION['data'] = $data; 
		echo "<a href='mail.php'><input type='submit' value='Send Mail'></a>";
		echo "<br>";
		echo "<br>";
		echo "<a href='home.php'><input type='submit' value='Go Back'></a>";
		echo "</p>";*/
	
	}   

echo "</table>";
	/*echo "<br>";
	echo "<br>";
    echo '<p align="center"><b>SEARCH YOUR VEHICLE LOCATION FROM HERE --><b></p>';
    echo '<a href="https://www.google.co.in/maps/" ><img src="img/1.png" align="right" width="300" height="300"/></a>';*/
	echo "<p align='center'>All the above vehicles disobeyed the traffic rules by not following the speed limits on roads.</p>";
	echo "<p align='center'>The owners of these vehicles should pay a penalty of $100. Send notice to these people by sending a mail!</p>";
	echo "<p align='center'><a href='sendmail.php'><input type='submit' value='Send Mail'></a></p>";
	echo "<p align='center'><a href='index.php'><input type='submit' value='Go Back'></a></p>";
	echo "</body>";
    
} 

else
{
    echo "0 results";
}
$conn->close();
?>
