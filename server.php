<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


//$id= $_POST['ID'];
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];

if($name !=''||$username !=''||$email !=''||$password !=''||$gender !=''){


$sql = "INSERT INTO users (name, username, email, password, gender)
VALUES ('$name','$username','$email','$password','$gender')";
}
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully"."<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
/*$sql = "SELECT * FROM MyGuests";
$result = $conn->query($sql);


 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo "ID: " . $row["ID"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]." "."Email:".$row["email"]."<br>";
        
    echo "0 results";
}




$sql = "DELETE FROM MyGuests WHERE ID='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
 }
*/

mysqli_close($conn);
?>
</body>
</html>
