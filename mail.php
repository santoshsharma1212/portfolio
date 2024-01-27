  <?php

$host = "localhost";
$username ="root";
$password = "";
$dbname ="portfolio";

// creating a connection
$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed!" . mysqli_connect_error());
}


if(isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
 }
$sql = "INSERT INTO `data`(`name`, `email`, `subject`,`message`) VALUES ('$name','$email','$subject','$message')";
$result = mysqli_query($conn, $sql);
?>

