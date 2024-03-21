<?php
$conn = mysqli_connect("localhost","root","root", "gricev");
if (!$conn) {
  die("Ошибка подключения: " . mysqli_connect_error());
}

$email = $_POST['email'];
$password = $_POST['psw'];

$sql = "INSERT INTO site (email, password) VALUES ('$email', '$password')";
if (mysqli_query($conn, $sql)) {
  echo "Registration succecful!";
} else {
  echo "Registration error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
