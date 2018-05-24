<html><body>
<?php

$servername = "us-cdbr-iron-east-04.cleardb.net";
$username = "baf563204f6a55";
$password = "2e0a5a96";
$dbname = "heroku_6b2304eee7bf204";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

// A simple web site in Cloud9 that runs through Apache
// Press the 'Run' button on the top to start the web server,
// then click the URL that is emitted to the Output tab of the console


$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "user_id: " . $row["uid"]. " - Name: " . $row["name"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

echo 'Click to write file!';

?>
<form action="writefile.php">
    <input type="submit" value="Submit"/>
</form>
</body>
</html>